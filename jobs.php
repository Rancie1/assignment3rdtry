<!DOCTYPE html>
<html lang="en">
<head>
<!-- Charset Declaration -->
  <meta charset="utf-8" />
<!-- Description of the page --> 
  <meta name="description" content="Job descriptions page" />
<!-- Keywords for search engines -->
  <meta name="keywords" content="tech, jobs, positions" />
<!-- Author of the page -->  
  <meta name="author" content="Aniket Moharan, Nathan Rancie" /> 
<!-- Title of the page displayed in the browser tab --> 
 <title>Job Descriptions Page</title> 
<!-- Link to the external CSS stylesheet -->
  <link href="styles/style.css" rel="stylesheet"/> 
</head>
<body id="bodyjobs">



	<?php include 'header.inc'; ?>
	
    <!-- Main content area for jobs page-->
	<main id="mainjobs"> 
        <!-- Subheading for job listings -->
    	<h2 id="jobspagetitle">Web Weavers Working Positions Available</h2> 
        <!-- Job search section -->
    	<div id="searchjobs">
        	<div>
                <!-- Input field for searching job positions -->
            	<input type="text" id="searchbar" placeholder="Search...">
        	</div>
			<!-- Label for state or territory selection -->
        	<label class="labeljobs">State or Territory</label> 
        	<!-- Dropdown list for selecting state or territory -->
			<select name="state" class="selection"> 
				<!-- Placeholder for the dropdown list-->
				<option value="" disabled selected>Select your State</option>  
            	<!-- State or territory options for the dropdown list -->
				<option value="vic">Victoria</option>
            	<option value="nsw">New South Wales</option>
            	<option value="wa">Western Australia</option>
            	<option value="qld">Queensland</option>
            	<option value="nt">Northern Territory</option>
        	</select>
			<!-- Label for department selection -->
        	<label class="labeljobs">Department</label> 
			<!-- Dropdown list for selecting department -->
        	<select name="department" class="selection"> 
			    <option value="" disabled selected>Select the department</option>
            	<option value="infotech">Information Technology</option>
            	<option value="internship">Internships</option>
            	<option value="management">Management</option>
            	<option value="humanresources">Human Resources</option>
            	<option value="finance">Finance</option>
            	<option value="sales">Sales</option>
        	</select>
			<!-- Label for job type selection -->
        	<label class="labeljobs">Job types</label>
			<!-- Dropdown list for selecting occupation--> 
        	<select name="jobtype" class="selection"> 
			    <option value="" disabled selected>Select the job type</option>			
            	<option value="softwareengineering">Software Engineering</option>
            	<option value="cloudengineering">Cloud Engineering</option>
            	<option value="webdevelopment">Web Development</option>
            	<option value="networkengineering">Network Engineering</option>
            	<option value="cybersecurity">Cybersecurity</option>
            	<option value="datascience">Data Science</option>
            	<option value="uidesign">User Experience Design</option>
        	</select>
			
            <!-- Search and reset buttons for job details submission -->
        	<button type="submit" class="buttonjobs">Search</button>
        	<button type="reset" class="buttonjobs">Reset</button>
    	</div>
        <!-- Job description section for Web Developer position-->

		<?php

		require_once "settings.php";
		// Create a connection to the database
		$dbconn = @mysqli_connect($host, $user, $pwd, $sql_db)
		or die('Failed to connect to the server');

		if($dbconn){
			// Query to retrieve job details
			$query = "SELECT reference_number, title, description, salary, supervisor, responsibilities, qualifications_essential, qualifications_preferable FROM jobs";

			$result = mysqli_query($dbconn, $query);
			// Check if the query was successful
			if($result){
				while($row = $result->fetch_assoc()) {
					echo '<section class="sectionjobs">';
					// Job title
					echo '<h2>' . htmlspecialchars($row['title']) . '</h2>';
					echo '<div class="description">';
					echo '<h3>Position Description Reference Number &#8674;</h3>';
					// Reference number
					echo '<p>' . htmlspecialchars($row['reference_number']) . '</p>';
					echo '</div>';
			
					echo '<div class="description">';
					echo '<h3>Brief Description of the Position</h3>';
					// Description
					echo '<p>' . htmlspecialchars($row['description']) . '</p>';
					echo '</div>';
			
					echo '<div class="description">';
					echo '<h3>Salary Range &#8674;</h3>';
					// Salary
					echo '<p>' . htmlspecialchars($row['salary']) .' per year.</p>';
					echo '</div>';


					echo '<div class="description">';
					echo '<h3>Reports To &#8674;</h3>';
					// Supervisor
					echo '<p>' . htmlspecialchars($row['supervisor']) . '</p>';
					echo '</div>';
			
					// Responsibilities
					echo '<aside>';
					echo '<h2>Key Responsibilities</h2>';
					echo '<ol>';
					//break responsibilities into array
					$responsibilities = array_filter(explode('.', $row['responsibilities']));
					//loop through array and display each responsibility
					foreach ($responsibilities as $responsibility) {
						echo '<li>' . htmlspecialchars($responsibility) . '</li>';
					}
					echo '</ol>';
			
					// Essential qualifications
					echo '<h2>Required Qualifications</h2>';
					echo '<h3>Essential</h3>';
					echo '<ul>';
					//break essential qualifications into array
					$qualifications_essential = array_filter(explode('.', $row['qualifications_essential']));

					//loop through array and display each qualification
					foreach ($qualifications_essential as $qualification) {
						echo '<li>' . htmlspecialchars($qualification) . '</li>';
					}
					echo '</ul>';


			
					// Preferable qualifications
					echo '<h3>Preferable</h3>';
					echo '<ul>';
					//break preferable qualifications into array
					$qualifications_preferable = array_filter(explode('.', $row['qualifications_preferable']));
					
					//loop through array and display each qualification
					foreach ($qualifications_preferable as $qualification) {
						echo '<li>' . htmlspecialchars($qualification) . '</li>';
					}
					echo '</ul>';
			
					echo '</aside>';
					echo '</section>';
				}
				mysqli_free_result($result);
			} else {
				echo "<p>Unable to retrieve job details</p>";
			}
			mysqli_close($dbconn);
		} else {
			echo "<p>Unable to connect to the database</p>";
		}

		?>

	</main>
	

	
	<?php include 'footer.inc'; ?>

</body>
</html>





