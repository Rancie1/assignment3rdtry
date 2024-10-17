<?php
require_once('settings.php');
$conn =@mysqli_connect($host, $user, $pwd, $sql_db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$action = $_POST['action'] ?? '';
$job_reference = $_POST['job_reference'] ?? '';
$first_name = $_POST['first_name'] ?? '';
$last_name = $_POST['last_name'] ?? '';
$status_update = $_POST['status_update'] ?? '';
$eoi_id = $_POST['eoi_id'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body id="manage_page">

<?php 
include 'header.inc';
?>

<form method="POST" action="manage.php">
    <label for="job_reference">Job Reference Number:</label>
    <input type="text" id="job_reference" name="job_reference"><br>

    <label for="first_name">Applicant First Name:</label>
    <input type="text" id="first_name" name="first_name"><br>

    <label for="last_name">Applicant Last Name:</label>
    <input type="text" id="last_name" name="last_name"><br>

    <label for="status_update">Change Status To (New, Current, Final):</label>
    <input type="text" id="status_update" name="status_update"><br>

    <label for="eoi_id">EOI ID for Status Update:</label>
    <input type="text" id="eoi_id" name="eoi_id"><br><br>

    <input type="submit" name="action" value="List All EOIs">
    <input type="submit" name="action" value="Search by Job Reference">
    <input type="submit" name="action" value="Search by Applicant Name">
    <input type="submit" name="action" value="Delete EOIs by Job Reference">
    <input type="submit" name="action" value="Update EOI Status">
</form>
</body>

<?php
// List All EOIs
if ($action === "List All EOIs") {
    $query = "SELECT * FROM eoi";
    $result = $conn->query($query);
    displayResults($result);
}

// Search EOIs by Job Reference
if ($action === "Search by Job Reference" && !empty($job_reference)) {
    $query = "SELECT * FROM eoi WHERE JobReferenceNumber = '$job_reference'";
    $result = $conn->query($query);
    displayResults($result);
}

// Search EOIs by Applicant Name
if ($action === "Search by Applicant Name") {
    $query = "SELECT * FROM eoi WHERE FirstName LIKE '%$first_name%' OR LastName LIKE '%$last_name%'";
    $result = $conn->query($query);
    displayResults($result);
}

// Delete EOIs by Job Reference
if ($action === "Delete EOIs by Job Reference" && !empty($job_reference)) {
    $query = "DELETE FROM eoi WHERE JobReferenceNumber = '$job_reference'";
    $conn->query($query);
    echo "<p>EOIs with job reference have been deleted.</p>";
}

// Update EOI Status
if ($action === "Update EOI Status" && !empty($status_update) && !empty($eoi_id)) {
    $query = "UPDATE eoi SET Status = '$status_update' WHERE EOInumber = $eoi_id";
    $conn->query($query);
    echo "<p>EOI ID status updated to $status_update.</p>";
}

// Function to display results
function displayResults($result) {
    if ($result->num_rows > 0) {
          echo "<table border='1'><tr><th>EOI Number</th><th>Job Reference Number</th><th>First Name</th><th>Last Name</th><th>Status</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['EOInumber']}</td><td>{$row['JobReferenceNumber']}</td><td>{$row['FirstName']}</td><td>{$row['LastName']}</td><td>{$row['Status']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No EOIs found.</p>";
    }
}


$conn->close();
?>

<?php include 'footer.inc';?> 


</body>
</html>
