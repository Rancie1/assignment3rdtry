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
  <meta name="author" content="Aniket Moharana" /> 
<!-- Title of the page displayed in the browser tab --> 
 <title>Job Descriptions Page</title> 
<!-- Link to the external CSS stylesheet -->
  <link href="styles/style.css" rel="stylesheet"/> 
</head>
<body id="bodyjobs">

<!-- Header created by Nathan Rancie, index.html -->

	<?php 
		include 'header.inc';
	?>
	
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
    	<section class="sectionjobs"> 
        	<h2>Web Developer</h2>
        	<div class="description">
            	<h3>Position Description Reference Number &#8674;</h3>
				<!-- Reference number for the job position -->
            	<p>23524522</p> 
			</div>
			<div class="description">
			
            	<h3>Position Title &#8674;</h3>
            	<!-- Title of the job position -->
				<p>Web Developer</p> 
			</div>
			
            	<h3>Brief Description of the Position</h3>
            	<p>We are seeking a skilled Web Developer to design, implement, and maintain web applications. The successful candidate will collaborate with cross-functional teams to deliver high-quality digital solutions that enhance user experience and meet business objectives.</p>
			<div class="description">	
				<h3>Salary Range &#8674;</h3>
				<!-- Salary range for the position -->
            	<p>$60,000 - $80,000 per year</p> 
			</div>
			<div class="description">
			    <!-- Title of the supervisor -->
            	<h3>Reports To &#8674;</h3>
            	<p>Senior Web Development Manager</p> 
            </div>
			<aside>
			    <h2>Key Responsibilities</h2>
            	<ol>
                	
			<!-- List of key responsibilities for the position -->
                	
					<li>Develop, test, and deploy web applications using HTML, CSS, JavaScript, and relevant frameworks.</li>
                	<li>Collaborate with designers and product managers to translate UI/UX designs into functional web applications.</li>
                	<li>Maximise applications for highest possible speed and scalability.</li>
                	<li>Maintain and improve existing web applications and troubleshoot issues.</li>
                	<li>Undertake code reviews and ensure adherence to best practices.</li>
                	<li>Stay updated with emerging technologies and industry trends.</li>
            	</ol>
            	<h2>Required Qualifications</h2>
            	<h3>Essential</h3>
            	<ul>
                	
			<!-- List of essential qualifications for the position -->
                	
					<li>Bachelor’s degree in Computer Science or related field.</li>
                	<li>3+ years of experience in web development.</li>
                	<li>Proficiency in HTML, CSS, JavaScript, and at least one modern framework, e.g., React.</li>
                	<li>Experience with back-end programming languages, e.g., PHP, Python.</li>
                	<li>Strong understanding of reactive design and cross-browser compatibility.</li>
                	<li>Excellent problem-solving skills and attention to detail.</li>
            	</ul>
            	<h3>Preferable</h3>
            	<ul>
                	
			<!-- List of preferable qualifications for the position -->
                	
					<li>Familiarity with version control systems, e.g., GitHub.</li>
                	<li>Experience with content management systems, e.g., WordPress, Google Sites.</li>
                	<li>Knowledge of web performance optimisation techniques.</li>
                	<li>Understanding of SEO principles.</li>
            	</ul>
        	</aside>
        </section>
		<!-- Job description section for Network Engineer position -->
		<section class="sectionjobs"> 
            	<h2>Network Engineer</h2>
			<div class="description">
            	<h3>Position Description Reference Number &#8674;</h3>
				<!-- Reference number for the job position -->
            	<p>145205147</p> 
			</div>
			<div class="description">
            	<h3>Position Title &#8674;</h3>
				<!-- Title of the job position -->
            	<p>Network Engineer</p> 
			</div>
            	<h3>Brief Description of the Position</h3>
            	<p>We are looking for a skilled Network Engineer to design, implement, and maintain our network infrastructure. The successful candidate will ensure the reliability and security of our network systems while collaborating with IT teams to support the organisation.</p>
            <div class="description">	
				<h3>Salary Range &#8674;</h3>
				<!-- Salary range for the position -->
            	<p>$70,000 - $90,000 per year</p> 
			</div>
			<div class="description">
            	<h3>Reports To &#8674;</h3>
				<!-- Title of the supervisor -->
            	<p>Senior Networking Manager</p> 
			</div>
			<aside>
			    <h2>Key Responsibilities</h2>
            	<ol>
				
            <!-- List of key responsibilities for the position -->
					
                	<li>Design and deploy network solutions that meet organisational needs.</li>
                	<li>Monitor network performance and troubleshoot issues to ensure reliability.</li>
                	<li>Implement security measures to protect network data and infrastructure.</li>
                	<li>Collaborate with IT teams to integrate network services with other systems.</li>
                	<li>Maintain documentation of network configurations and changes.</li>
                	<li>Stay updated with emerging networking technologies and best practices.</li>
				</ol>
            	<h2>Required Qualifications</h2>
            	<h3>Essential</h3>
            	<ul>
				
            <!-- List of essential qualifications for the position -->
					
                	<li>Bachelor’s degree in Computer Science, Information Technology, or related field.</li>
                	<li>3+ years of experience in network engineering or administration.</li>
                	<li>Proficiency in networking protocols, e.g., DNS, TCP/IP.</li>
                	<li>Experience with network hardware, e.g., routers, switches, firewalls.</li>
                	<li>Strong understanding of network security principles and practices.</li>
                	<li>Excellent problem-solving skills and attention to detail.</li>
            	</ul>
            	<h3>Preferable</h3>
            	<ul>
				
            <!-- List of preferable qualifications for the position -->
			
                	<li>Certifications such as CCNA, CCNP, or CompTIA Network+.</li>
                	<li>Experience with cloud networking solutions, e.g., Azure, AWS.</li>
                	<li>Familiarity with network monitoring tools and software.</li>
                	<li>Knowledge of video conferencing technologies.</li>
            	</ul>
        	</aside>
        </section>
		<!-- Job description section for Cybersecurity Analyst position-->
		<section class="sectionjobs"> 
            	<h2>Cybersecurity Analyst</h2>
			<div class="description">
            	<h3>Position Description Reference Number &#8674;</h3>
				<!-- Reference number for the job position -->
				<p>32521953</p> 
			</div>
			<div class="description">
            	<h3>Position Title &#8674;</h3>
				<!-- Title of the job position -->
            	<p>Cybersecurity Analyst</p> 
			</div>
            	<h3>Brief Description of the Position</h3>
            	<p>The Cybersecurity Analyst will be responsible for safeguarding the organisation’s information systems and data. This role involves monitoring, detecting, and responding to security incidents, conducting vulnerability assessments, and implementing security measures to protect against cyber threats. The successful candidate will play a crucial role in maintaining the integrity, confidentiality, and availability of the company's information.</p>
			<div class="description">	
				<h3>Salary Range &#8674;</h3>
				<!-- Salary range for the position -->
            	<p>$70,000 - $90,000 per year</p> 
			</div>
			<div class="description">	
            	<h3>Reports To &#8674;</h3>
				<!-- Title of the supervisor -->
            	<p>Cybersecurity Manager</p> 
			</div>
			<aside>
			    <h2>Key Responsibilities</h2>            	
				<ol>
				
                	<!-- List of key responsibilities for the position -->
					
                	<li>Monitor network traffic for suspicious activity and respond to security incidents.</li>
                	<li>Conduct regular vulnerability assessments and pen testing to identify weaknesses.</li>
                	<li>Implement and manage security tools and technologies, e.g., firewalls, IDS.</li>
                	<li>Develop and maintain security procedures and documentation.</li>
                	<li>Collaborate with IT teams to ensure secure system configurations and compliance with security standards.</li>
                	<li>Provide training and awareness programs for employees on cybersecurity best practices.</li>
                	<li>Analyse security breaches to determine causes and recommend improvements.</li>
                	<li>Stay current with emerging threats and security trends to proactively mitigate risks.</li>
            	</ol>
            	<h2>Required Qualifications</h2>
            	<h3>Essential</h3>
            	<ul>
                	<!-- List of essential qualifications for the position -->
					
                	<li>Bachelor’s degree in Cybersecurity, Information Technology, or a related field.</li>
                	<li>Minimum of 3 years of experience in cybersecurity or information security roles.</li>
                	<li>Strong knowledge of security protocols and risk management.</li>
                	<li>Proficiency in programming languages such as Python, Java, or C++.</li>
                	<li>Experience with security tools and technologies, e.g., firewalls, antivirus software.</li>
                	<li>Excellent analytical and problem-solving skills.</li>
                	<li>Strong communication and personal skills.</li>
            	</ul>
            	<h3>Preferable</h3>
            	<ul>
                	<!-- List of preferable qualifications for the position -->
					
                	<li>Certifications such as Certified Information Systems Security Professional, Certified Ethical Hacker.</li>
                	<li>Experience with cloud security and securing cloud environments, e.g., Azure, AWS.</li>
                	<li>Knowledge of incident response and digital forensics.</li>
                	<li>Familiarity with network protocols and architecture.</li>
                	<li>Previous experience in a security operations centre (SOC) environment.</li>
            	</ul>
        	</aside>
    	</section>
	</main>
	
<!-- Footer created by Nathan Rancie, index.html -->
	
	<?php 
		include 'footer.inc';
	?>

</body>
</html>





