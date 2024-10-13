<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="About,assignment">
    <meta name="author" content="Samuel Nguyen">
    <link rel="stylesheet" href="styles/style.css">
    <title>About Us</title>
</head>

<body id="about_body">
    <?php 
        include 'header.php';
    ?>

    <div class="container_about">
        <h2>About Our Project Group</h2>
        <!--Group information-->
        <dl>
            <dt>Group Name:</dt>
            <dd>Web Weavers</dd>
            <dt>Tutor's Name:</dt>
            <dd>Mr. Ortiz</dd>
            <dt>Group Members & Contributions:</dt>
            <dd>
                <ul>
                    <li>Samuel Nguyen - About Page</li>
                    <li>Riley Parry - Landing page/Index</li>
                    <li>Nathan Rancie - Application page</li>
                    <li>Aniket Moharana - Jobs page</li>
                </ul>
            </dd>
        </dl>

        <!--Figure for group photo-->
        <figure>
            <img src="styles/images/groupphoto.jpg" alt="Photo of our project group" width="300" height="300">
        
        </figure>

        <!--Group timetable-->
        <h2>Group Timetable</h2>
        <table>
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Subject</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Monday</td>
                    <td>09:00 - 11:00</td>
                    <td>Online Lecture</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>12:30 - 14:30</td>
                    <td>Workshop</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>10:00 - 12:00</td>
                    <td>Group Meeting</td>
                </tr>
            </tbody>
        </table>

        <!-- Mailto link to contact the group -->
        <p>If you have any questions, feel free to <a href="mailto:nguyenthaiductuan@gmail.com
            ">email our group</a>.</p>

        <!--Additional information-->
        <h2>Group Profile</h2>
        <p>We are a team of passionate individuals with diverse skills in programming, data analysis, and software development.</p>
        
        <h3>Demographic Information:</h3>
        <p>Our team is composed of members from different cities, each bringing unique experiences and perspectives to the project.</p>

        <h3>Description of Our Hometowns:</h3>
        <p>Our members hail from the vibrant city Melbourne</p>
    </div>
    <?php 
        include 'footer.php';
    ?>
</body>

</html>
