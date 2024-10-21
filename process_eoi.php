<?php
    session_start();

    //function to sanitize input
    function sanitize_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    //include settings.php
    require_once "settings.php";

    //initialise errors array
    $errors=[];


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        //initialise variables to store form data
        $jobReference = sanitize_input($_POST['jobref']);
        $firstName= sanitize_input($_POST['fname']);
        $lastName = sanitize_input($_POST['lname']);
        $dob = $_POST['dob'];
        $gender = $_POST['Gender'];
        $streetAddress = sanitize_input($_POST['street']);
        $suburb = sanitize_input($_POST['suburb']);
        $state = $_POST['state'];
        $postcode = sanitize_input($_POST['postcode']);
        $email = sanitize_input($_POST['email']);
        $phone = sanitize_input($_POST['phone']);
        $skills = isset($_POST['skills']) ? $_POST['skills'] : [];
        $otherSkill = $_POST['otherskills'];
        $otherSkillDesc = sanitize_input($_POST['skilldescription']);

    

        //form validation
        if (empty($jobReference)){
            $errors[] = "Job Reference is required.<br>";
        } 
        else if (!preg_match('/^\d{5}$/', $jobReference)) {
            $errors[] = "Job Reference must be 5 digit number.<br>";
        }



        //validate first name
        if (empty($firstName)){
            $errors[] = "First name is required.<br>";
        } 
        else if (!preg_match("/^[a-zA-Z]{1,20}$/", $firstName)) {
            $errors[] = "First name must be 1-20 alphabetical characters long.<br>";
        }



        //validate last name
        if (empty($lastName)){
            $errors[] = "Last name is required.<br>";
        } 
        else if (!preg_match("/^[a-zA-Z]{1,20}$/", $lastName)) {
            $errors[] = "Last name must be 1-20 alphabetical characters long.<br>";
        }



        //validate date of birth
        if (empty($dob)){
            $errors[] = "Date of birth is required.<br>";
        } 
        else if (!preg_match("/^(\d{4})-(\d{2})-(\d{2})$/", $dob)) {
            $errors[] = "Date of birth must be in the format YYYY-MM-DD.<br>";
        }



        
        //validate gender is selected
        if (empty($gender)){
            $errors[] = "Gender is required.<br>";
        } 



        //validate street address
        if (empty($streetAddress)){
            $errors[] = "Street Address is required.<br>";
        } 
        else if (!preg_match("/^[a-zA-Z0-9\s]{1,40}$/", $streetAddress)) {
            $errors[] = "Street Address must be 1-40 characters long.<br>";
        }



        //validate suburb
        if (empty($suburb)){
            $errors[] = "Suburb is required.<br>";
        } 
        else if (!preg_match("/^[a-zA-Z\s]{1,40}$/", $suburb)) {
            $errors[] = "Suburb must be 1-40 characters long.<br>";
        }


        $states = ["VIC", "NSW", "QLD", "NT", "WA", "SA", "TAS", "ACT"];
        
        //validate state is one of the options
        if (empty($state)){
            $errors[] = "State is required.<br>";
        } 
        else if (!in_array($state, $states)) {
            $errors[] = "State must be one of VIC, NSW, QLD, NT, WA, SA, TAS, ACT.<br>";
        }




        //validate postcode
        if (empty($postcode)){
            $errors[] = "Postcode is required.<br>";
        } 
        else if (!preg_match("/^\d{4}$/", $postcode)) {
            $errors[] = "Postcode must be 4 digits long.<br>";
        }




        //validate email
        if (empty($email)){
            $errors[] = "Email is required.<br>";
        } 
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email.<br>";
        }



        //validate phone number
        if (empty($phone)){
            $errors[] = "Phone number is required.<br>";
        } 
        else if (!preg_match("/^[\d\s]{8,12}$/", $phone)) {
            $errors[] = "Phone number must be 8 to 12 digits long.<br>";
        }

        
    
        //validate description of other skill is provided when other skill is selected
        if (isset($otherSkill) && empty($otherSkillDesc)){
            $errors[] = "Description of skill is required when selecting Other Skill.<br>";
            
        }


        




        if(!empty($errors)){
            //if there are errors, store them in session and redirect to apply.php
            $_SESSION['errors'] = $errors;
            $_SESSION['jobref'] = $jobReference;
            $_SESSION['fname'] = $firstName;
            $_SESSION['lname'] = $lastName;
            $_SESSION['dob'] = $dob;
            $_SESSION['Gender'] = $gender;
            $_SESSION['street'] = $streetAddress;
            $_SESSION['suburb'] = $suburb;
            $_SESSION['state'] = $state;
            $_SESSION['postcode'] = $postcode;
            $_SESSION['email'] = $email;
            $_SESSION['phone'] = $phone;
            $_SESSION['skills'] = $skills;
            $_SESSION['otherskills'] = $otherSkill;
            $_SESSION['skilldescription'] = $otherSkillDesc;
            header("Location: apply.php");
            exit;
        } else {
            //if there are no errors
            $skillsList = implode(", ", $skills);

            //connect to database
            $dbconn = mysqli_connect($host, $user, $pwd, $sql_db);

            if ($dbconn) {
                //create table if it does not exist
                $createTableQuery = "CREATE TABLE IF NOT EXISTS eoi (
                    EOInumber INT AUTO_INCREMENT PRIMARY KEY,
                    JobReferenceNumber VARCHAR(5) NOT NULL,
                    FirstName VARCHAR(20) NOT NULL,
                    LastName VARCHAR(20) NOT NULL,
                    StreetAddress VARCHAR(40) NOT NULL,
                    SuburbTown VARCHAR(40) NOT NULL,
                    State enum('VIC','NSW','QLD','NT','WA','SA','TAS','ACT') NOT NULL,
                    Postcode VARCHAR(4) NOT NULL,
                    EmailAddress VARCHAR(255) NOT NULL,
                    PhoneNumber VARCHAR(12) NOT NULL,
                    Skills TEXT,
                    OtherSkills TEXT,
                    Status ENUM('New', 'Current', 'Final') DEFAULT 'New'
                )";

                if (mysqli_query($dbconn, $createTableQuery)) {
                    //insert data into table
                    $query = "INSERT INTO eoi (EOInumber, JobReferenceNumber, FirstName, LastName, StreetAddress,
                                                SuburbTown, State, Postcode, EmailAddress, PhoneNumber, Skills, OtherSkills)
                                                VALUES (NULL, '$jobReference', '$firstName', '$lastName', '$streetAddress',
                                                        '$suburb', '$state', '$postcode', '$email', '$phone', '$skillsList',
                                                        '$otherSkillDesc')";
                    
                if (mysqli_query($dbconn, $query)) {
                    //get the EOI number and add to success message
                    $eoiNumber = mysqli_insert_id($dbconn);
                    $success = "Application submitted successfully. Your EOI number is $eoiNumber"; 
                    $_SESSION['success'] = $success;

                    header("Location: apply.php"); 
                    exit;
                } else {
                    //if there is an error inserting data
                    $_SESSION['errors'] = ["Error inserting data. Please try again."];
                    header('Location: apply.php');
                    exit;
                }
            } else {
                //if there is an error creating table
                $_SESSION['errors'] = ["Error creating table. Please try again."];
                header('Location: apply.php');
                exit;
            }

                

            } else {
                //if there is an error connecting to database
                $_SESSION['errors'] = ["There is some problems in the connection. Please try later"];
                header('Location: apply.php');
                exit;

            }
            //close connection 
            mysqli_close($dbconn);
        }
    } if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        //if the request method is not POST
        header('Location: apply.php');
        exit;
    }
    
?>