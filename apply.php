<?php
    session_start();

    $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
    $success = isset($_SESSION['success']) ? $_SESSION['success'] : '';
    $jobReference = isset($_SESSION['jobref']) ? $_SESSION['jobref'] : '';
    $firstName = isset($_SESSION['fname']) ? $_SESSION['fname'] : '';
    $lastName = isset($_SESSION['lname']) ? $_SESSION['lname'] : '';
    $dob = isset($_SESSION['dob']) ? $_SESSION['dob'] : '';
    $gender = isset($_SESSION['Gender']) ? $_SESSION['Gender'] : '';
    $streetAddress = isset($_SESSION['street']) ? $_SESSION['street'] : '';
    $suburb = isset($_SESSION['suburb']) ? $_SESSION['suburb'] : '';
    $state = isset($_SESSION['state']) ? $_SESSION['state'] : '';
    $postcode = isset($_SESSION['postcode']) ? $_SESSION['postcode'] : '';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
    $phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : '';
    $otherSkill = isset($_SESSION['otherskills']) ? $_SESSION['otherskills'] : '';
    $skills = isset($_SESSION['skills']) ? $_SESSION['skills'] : [];
    $otherSkillDesc = isset($_SESSION['otherskilldesc']) ? $_SESSION['otherskilldesc'] : '';


    unset($_SESSION['errors']);
    unset($_SESSION['success']);
    unset($_SESSION['jobref']); 
    unset($_SESSION['fname']);
    unset($_SESSION['lname']);
    unset($_SESSION['dob']);
    unset($_SESSION['Gender']);
    unset($_SESSION['street']);
    unset($_SESSION['suburb']);
    unset($_SESSION['state']);
    unset($_SESSION['postcode']);
    unset($_SESSION['email']);
    unset($_SESSION['phone']);
    unset($_SESSION['skills']);
    unset($_SESSION['otherskills']);
    unset($_SESSION['otherskilldesc']);
?>

<!DOCTYPE html>
<!--filename: apply.html, webweavers
authors: Nathan Rancie
created: 20/08/2024
last modified: 3/09/2024
description: apply page for our website-->
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Apply page for assignment 1" />
        <meta name="keywords" content="Apply,assignment" />
        <meta name="author" content="Nathan Rancie" />
        <link href="styles/style.css" rel="stylesheet" />
        <title>Apply</title>
        <style>
            #error-messages {
                background-color: #ffcccc;
                color: red;
                border: 1px solid red;
                padding: 10px;
                margin: 10px;
            }

            #success-message {
                background-color: #ccffcc;
                color: green;
                border: 1px solid green;
                padding: 10px;
                margin: 10px;
            }
        </style>
    </head>

    <!--Apply page body-->
    <body id="apply_body">

        <!--header and nav-->
        <header>
            <h1>Enable Solutions</h1>
            <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="jobs.php">Jobs</a>
            <a href="apply.php">Apply</a>
            <a href="enhancements.php">Enhancements</a>
        </nav>
        </header>

        <!--main body of apply page-->
        <section id="main">
            <form
                method="post"
                action="proccess_eoi.php"
                id="reg_form"
                novalidate="novalidate"
                
            >
                <?php if (!empty($errors)): ?>
                    <div id="error-messages">
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if (!empty($success)): ?>
                    <div id="success-message">
                        <p><?php echo $success; ?></p>
                    </div>
                <?php endif; ?>

                <!--fieldset for job reference number-->
                <fieldset>
                    <div>
                        <label for="jobref">Job Reference Number:</label>
                        <input
                            type="text"
                            name="jobref"
                            id="jobref"
                            maxlength="5"
                            size="8"
                            pattern="[A-Za-z0-9]{5}"
                            title="Please enter 5 numbers or letters"
                            required="required"
                            value = "<?php echo $jobReference?>"
                        />
                    </div>
                </fieldset>
                
                <!--fieldset for personal details-->
                <fieldset>
                    <legend>Personal Details</legend>
                    <div>
                        <label for="fname">First Name:</label>
                        <input
                            type="text"
                            name="fname"
                            id="fname"
                            maxlength="20"
                            size="20"
                            pattern="^[A-Za-z]+$"
                            title="please enter a valid name"
                            required="required"
                            value = "<?php echo $firstName?>"
                        />&emsp;

                        <label for="lname">Last Name:</label>
                        <input
                            type="text"
                            name="lname"
                            id="lname"
                            maxlength="20"
                            size="20"
                            pattern="^[A-Za-z]+$"
                            title="please enter a valid name"
                            required="required"
                            value = "<?php echo $lastName?>"
                        />
                    </div>
                    <br />
                    <div>
                        <label for="date">Date of Birth:</label>
                        <input
                            type="date"
                            name="dob"
                            id="dob"
                            title="Please enter a valid date"
                            size="10"
                            required="required"
                            value = "<?php echo $dob?>"
                        />
                    </div>
                </fieldset>
                
                <!--fieldset for gender-->
                <fieldset>
                    <legend>Gender</legend>

                    <div id="gender_field">
                        <div class="gender_options">
                            <label for="male">Male</label>
                            <input
                                type="radio"
                                id="male"
                                name="Gender"
                                value="Male"
                                required="required"
                                <?php if ($gender == 'Male') {echo 'checked';} ?>
                            />
                        </div>

                        <div class="gender_options">
                            <label for="female">Female</label>
                            <input
                                type="radio"
                                id="female"
                                name="Gender"
                                value="Female"
                                <?php if ($gender == 'Female') {echo 'checked';} ?>
                            />
                        </div>

                        <div class="gender_options">
                            <label for="other">Other</label>
                            <input
                                type="radio"
                                id="other"
                                name="Gender"
                                value="Other"
                                <?php if ($gender == 'Other') {echo 'checked';} ?>
                            />
                        </div>
                    </div>
                </fieldset>

                <!--fieldset for address-->
                <fieldset>
                    <legend>Address</legend>
                    <div>
                        <label for="street">Street Address:</label>
                        <input
                            type="text"
                            name="street"
                            id="street"
                            maxlength="40"
                            size="40"
                            title="max length of 40 characters"
                            required="required"
                            value = "<?php echo $streetAddress?>"
                        />
                    </div>
                    <br />
                    <div>
                        <label for="suburb">Suburb/Town:</label>
                        <input
                            type="text"
                            name="suburb"
                            id="suburb"
                            maxlength="40"
                            title="max length of 40 characters"
                            size="40"
                            required="required"
                            value = "<?php echo $suburb?>"
                        />
                    </div>
                    <br />
                    <div>
                        <label for="state">State:</label>
                        <select name="state" id="state" required="required">
                            <option value="">Please Select</option>
                            <option value="VIC" <?php if ($state == 'VIC') {echo 'selected';} ?>>VIC</option>
                            <option value="NSW" <?php if ($state == 'NSW') {echo 'selected';} ?>>NSW</option>
                            <option value="QLD" <?php if ($state == 'QLD') {echo 'selected';} ?>>QLD</option>
                            <option value="NT" <?php if ($state == 'NT') {echo 'selected';} ?>>NT</option>
                            <option value="WA" <?php if ($state == 'WA') {echo 'selected';} ?>>WA</option>
                            <option value="SA" <?php if ($state == 'SA') {echo 'selected';} ?>>SA</option>
                            <option value="TAS" <?php if ($state == 'TAS') {echo 'selected';} ?>>TAS</option>
                            <option value="ACT <?php if ($state == 'ACT') {echo 'selected';} ?>">ACT</option>
                        </select>
                    </div>
                    <br />
                    <div>
                        <label for="postcode">Postcode:</label>
                        <input
                            type="text"
                            name="postcode"
                            id="postcode"
                            maxlength="4"
                            size="5"
                            title="please enter a valid postcode"
                            pattern="^\d{4}$"
                            required="required"
                            value = "<?php echo $postcode?>"
                        />
                    </div>
                </fieldset>
                
                <!--fieldset for contact information-->
                <fieldset>
                    <legend>Contact Information</legend>

                    <div>
                        <label for="email">Email Address:</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            size="20"
                            title="please enter a valid email address"
                            required="required"
                            value = "<?php echo $email?>"
                        />&emsp;

                        <label for="phone">Phone Number:</label>
                        <input
                            type="text"
                            name="phone"
                            id="phone"
                            maxlength="12"
                            pattern="[\d\s]{8,12}"
                            title="please enter a valid phone number"
                            size="15"
                            required="required"
                            value = "<?php echo $phone?>"
                        />
                    </div>
                </fieldset>

                <!--fieldset for relevant skills-->
                <fieldset>
                    <legend>Relevant Skills</legend>

                    <div>
                        <label for="html">HTML</label>
                        <input
                            type="checkbox"
                            id="html"
                            name="skills[]"
                            value="HTML"
                            <?php if (in_array('HTML', $skills)) {echo 'checked';} ?>
                        />
                        &emsp;

                        <label for="css">CSS</label>
                        <input
                            type="checkbox"
                            id="css"
                            name="skills[]"
                            value="CSS"
                            <?php if (in_array('CSS', $skills)) {echo 'checked';} ?>
                        />
                        &emsp;

                        <label for="js">Javascript</label>
                        <input
                            type="checkbox"
                            id="js"
                            name="skills[]"
                            value="Javascript"
                            <?php if (in_array('Javascript', $skills)) {echo 'checked';} ?>
                        />
                        &emsp;

                        <label for="php">PHP</label>
                        <input
                            type="checkbox"
                            id="php"
                            name="skills[]"
                            value="PHP"
                            <?php if (in_array('PHP', $skills)) {echo 'checked';} ?>
                        />
                        &emsp;

                        <label for="mysql">MySQL</label>
                        <input
                            type="checkbox"
                            id="mysql"
                            name="skills[]"
                            value="MySQL"
                            <?php if (in_array('MySQL', $skills)) {echo 'checked';} ?>
                        />
                        &emsp;

                        <label for="otherskills">Other Skills</label>
                        <input
                            type="checkbox"
                            id="otherskills"
                            name="otherskills"
                            value="Other"
                            <?php if (!empty($otherSkill)) {echo 'checked';} ?>
                        />
                    </div>
                    <br />
                    <div>
                        <label for="skill">Description of Skill:</label><br/>
                        <textarea id="skilldescription" name="skilldescription" rows="4" cols="40" 
                            placeholder="Please enter a decription of your skill here">
                        </textarea>
                        <!--placeholder doesnt seem to work cant find why-->
                    </div>
                </fieldset>

                <!--submit and reset buttons-->
                <div id="buttons">
                    <input type="submit" id="apply" value="Apply" />
                    <input type="reset" value="Reset Form" />
                </div>
            </form>
        </section>

        <!--footer with nav and other info-->
        <footer>
            <div id="Contact">
                <p>Contact us at:</p>
                <p><a href="mailto:enablesolutions@official.com.au">enablesolutions@official.com.au</a></p>
            </div>
            <div id="ftr-nav">
                <nav id="ftr-nav1">
                <a href="index.php">Home></a>
                <a href="about.php">About></a>
                <a href="jobs.php">Jobs</a>
                <a href="apply.php">Apply</a>
                <a href="enhancements.php">Enhancements</a>
            </nav>
            </div>
            <div id="Author">
                <p>Author: &#169; Enable Solutions</p>
                <p>Last Editted: September 2024</p>
            </div>
        </footer>
    </body>
</html>
