<?php
    require_once("includes/config.php");
    $queryCourses = "SELECT * FROM Courses WHERE CourseSubject = 'Computing'";
    $resultCourses = $mysqli->query($queryCourses);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mobile.css"/>
    <link rel="stylesheet" media="only screen and (min-width:720px)" href="css/desktop.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/main.js"></script>
    <title>Computing Courses :: Cantor College</title>
</head>
<body>
    <?php
    include("includes/header.php");
    ?>
    <main>
        <h2>Computing<span class="alt-col"> Courses</span></h2>
        <div class="content">
            <h3>What <span class="alt-col">We Offer</span></h3>
            <p>The College offers a range of courses to suit applicants with varying backgrounds and educational abilities. At undergraduate level, there are single BSc Honours Degree courses in Computing, Computer Networks, Software Engineering and Cyber Security with Forensics amongst others.</p>
            <p>The College teaches undergraduate and postgraduate courses in a wide range of specialisms, including computer science, software development, information systems, networking and software engineering. It is at the heart of a passionate computing community, including student societies devoted to games development, digital forensics and programming.</p>
            <p>The courses are British Computer Society accredited and are highly relevant to modern industry. They are designed to prepare students for professional occupations in Computing and related fields. Many graduates continue their studies to pursue a higher degree such as an MSc. or PhD.</p>
        </div>
        <div class="splitter"></div>
        <h2>Our <span class="alt-col">Computing Courses</span></h2>
        <div class="dbase-view">
            <?php
            while ($obj = $resultCourses -> fetch_object()){
                echo "<div class='content'>";
                echo "<div class='course-info-container'>";
                echo "<h3>{$obj->CourseTitle}</h3>";
                echo "<p class='course-summary'>{$obj->CourseSummary}</p>";
                echo "<div class='extra-info'>";
                echo "<p>{$obj->CourseAwardName}</p>";
                echo "<p>{$obj->CourseType}</p>";
                echo "<p class='foundation'>{$obj->HasFoundationYear}</p>";
                echo "</div>";
                echo "</div>";
                echo "<div class='course-banner'>";
                echo "<h3>Course <span class='alt-col'>Info</span></h3>";
                echo "<div class='splitter'></div>";
                echo "<p class='code'>UCAS Code: {$obj->UcasCode}</p>";
                echo "<p class='points'>{$obj->UcasPoints} Points</p>";
                echo "<div class='splitter'></div>";
                echo "<p>{$obj->YearOfEntry}</p>";
                echo "<p>{$obj->ModeOfAttendance}</p>";
                echo "<p>{$obj->StudyLength}</p>";
                echo "<p class='recruit'>{$obj->NoLongerRecruiting}</p>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </main>
    <?php
        include("includes/footer.php");
    ?>
</body>
</html>