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
    <title>Contact Us :: Cantor College</title>
</head>
<body>
    <?php
    include("includes/header.php");
    ?>
    <main>
        <h2>Contact <span class="alt-col">Us</span></h2>
        <div id="contact-us">
            <div class="content">
                <h3>How Can <span class="alt-col">We Help?</span></h3>
                <div class="splitter"></div>
                <div id="prompt">
                    <p>Questions about our courses?</p>
                    <p>Timetables for 2023?</p>
                    <p>Student Finance Support?</p>
                    <p>Looking for a tour of the campus?</p>
                </div>
                <div class="splitter"></div>
                <p>Our lines are open from 9:00am to 5:00pm</p>
                <p>Monday - Saturday</p>
            </div>
            <div class='splitter'></div>
            <form class='content' action="" method="">
                <div id='name-input'>
                    <div class='form-item'>
                        <label for="firstname">First Name <span class="alt-col">*</span></label>
                        <input type="text" name="firstname" id="fistname" placeholder="Enter First Name" required>
                    </div>
                    <div class='form-item'>
                        <label for="surname">Surname <span class="alt-col">*</span></label>
                        <input type="text" name="surname" id="surname" placeholder="Enter Surname" required>
                    </div>
                </div>
                <div class="form-item">
                    <label for="email">Email Address <span class="alt-col">*</span></label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class='form-item'>
                    <label for="findus">How did you find us? <span class="alt-col">*</span></label>
                    <select name="findus" id="findus" required>
                        <option value="web">Web Search</option>
                        <option value="friend">From A Friend</option>
                        <option value="education">School/Education Service</option>
                        <option value="coursework">For Coursework (Hi Martin)</option>
                        <option value="other">Other Source</option>
                    </select>
                </div>
                <div class="form-item">
                    <label for="message">Message <span class="alt-col">*</span></label>
                    <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                </div>
                <div class='check' class='form-item'>
                    <label for="updates">Receive updates about course avaliability</label>
                    <input type="checkbox" name="updates" id="updates" value="1">
                </div>
                
                <div class="form-item">
                    <input type="submit" value="Send" id='submit'>
                </div>
            </form>
        </div>

    </main>
    <?php
    include("includes/footer.php");
    ?>
</body>
</html>