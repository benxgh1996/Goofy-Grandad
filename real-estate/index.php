<?php $currentPage = "home"; ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Goofy Grandad</title>
    <meta name="description" content="Goofy Grandad's website."/>

    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <link rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">

        <div class="nav-container">
            <a href="#" <?php if ($currentPage == "home") {echo "id=\"current_nav_item\"";}?>>
            Heckstall&#39s Real Estate Services</a>
        </div>
    </div>
                
        <div class="contact-body">
            <div class="contact-info">
                <h2>Contact Joe Heckstall </h2>
                <p> Reach out to Joe Heckstall to talk to him<br> about possible real estate possibilities!<br>
                    He would love to hear from you. </p> 

                <div style="display: flex; flex-direction: row; padding-top: 1em;">
                    <img src="images/person_icon.png" width="50" height="50">
                    <p class="descriptor" style="padding-left: 2em;">Joseph Heckstall</p>
                </div>

                <div style="display: flex; flex-direction: row; padding-top: 1em;">
                    <img id="phone_icon" src="images/phone_icon.png" width="50" height="50">
                    <p class="descriptor" style="padding-left: 2em;">404-447-3066</p>
                </div>

                <div style="display: flex; flex-direction: row; padding-top: 1em;">
                    <img id="mail_icon" src="images/mail_icon.png" width="50" height="50">
                    <p class="descriptor" style="padding-left: 2em;">powerheck2@comcast.net</p>
                </div>
            </div>

            <div class= "contact-form">
                <form action="email.php" name="form" method="post">
                    Your name:<br>
                    <input class="text-box" type="text" name="name" required><br>

                    Your e-mail address:<br>
                    <input class="text-box" type="text" name="mail" required><br>

                    Your message:<br>
                    <textarea class="text-box" name="text" rows="13"
                              wrap="soft" style="width:100%;" required></textarea>
                    <br>
                    <input type="submit" name="submit" value="Send" class="send-button">
                </form>
             </div>
        </div>

    <div class="footer">
        <div id="copyright" class="bottom-link">© Joe Heckstall 2017</div>
    </div>
</body>

</html>
