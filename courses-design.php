<?php
    require_once("includes/config.php");
    $queryCourses = "SELECT * FROM Courses WHERE CourseSubject = 'Art and design'";
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
    <title>Design Courses :: Cantor College</title>
</head>
<body>
    <?php
    include("includes/header.php");
    ?>
    <main>
        <h2>Design<span class="alt-col"> Courses</span></h2>
        <div class="content">
            <h3>What <span class="alt-col">We Offer</span></h3>
            <p>The College is an internationally connected creative community of diverse disciplines housed under one roof. We shape our students' futures, preparing them to shape the world through applied knowledge and creativity.</p>
            <p>The College's art and design courses don't just train you, they promote alternative ways of thinking, making and communicating; they provide you with space, tools and inspiration to develop your creative practice and a clear career path. You'll get expert teaching from active practitioners and researchers who will encourage you to adopt innovative and resourceful approaches that both perceive and create opportunities for better lives.</p>
            <p>Youll develop your creative practice whilst interacting with your peers in well-equipped studios, making and digital workshops. At the same time, you'll learn professional skills by working on applied briefs facilitated through our links with commercial clients, cultural institutions, businesses and organisations.</p>
        </div>
        <div class="splitter"></div>
        <h2>Our <span class="alt-col">Design Courses</span></h2>
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