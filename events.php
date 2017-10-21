<?php $currentPage = "events"; ?>

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
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    <?php include "header.php";?>


        <div class="events">
            <div class = "eventsmessage">
                <h2> Schedule an event today! </h2>
                <p>Goofy Grandad provides services for a variety of events.
                He specializes in motivational speaking and entertainment
                for kids and seniors. </p>
                <button class="bookButton"><a href="contact.php" style="text-decoration:none; color: black;"> Contact Goofy Grandad</a></button>
            </div> 
        
            <div class="timeline">
                
                <div class="fb-page" data-href="https://www.facebook.com/GOOFY-Grandad-304161619685945/" data-width=500px data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/GOOFY-Grandad-304161619685945/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GOOFY-Grandad-304161619685945/">GOOFY Grandad</a></blockquote></div>
            </div>
        </div>


    <?php include "footer.php";?>

    <script src="slider.js"></script>
</body>

</html>
