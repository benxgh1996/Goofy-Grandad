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
    <script>//retrieves facebook timeline
    	    //@param d data
    	    //@param s tagname
    	    //@param id id
    	    (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <?php include "header.php";?>


    <div class="events">
        <div class ="events-message">
            <h2> Schedule an event today! </h2>
            <p>Goofy Grandad provides services for a variety of events, especially the following:
            </p>
            <ul>
                <li>Motivational speaking</li>
                <li>Entertainment</li>
            </ul>
            <p>Although his messages are mainly for kids and seniors, he strives to reach
                people of all ages! Check out what he has been up to on his Facebook
                timeline.
            </p>
         

            <a href="contact.php">
                <button class="book-button">
                Contact Goofy Grandad
                </button>
            </a> 
           

        </div>

        <div class="timeline">
            <div class="timeline-header">
                Welcome to Goofy Grandad&#39;s Facebook timeline!
            </div>

            <div class="fb-page" data-href="https://www.facebook.com/GOOFY-Grandad-304161619685945/"
                 data-width=500px
                 data-tabs="timeline"
                 data-small-header="false"
                 data-adapt-container-width="true"
                 data-hide-cover="false"
                 data-show-facepile="true"
                 style="display: flex; justify-content: center;">
                <!--I think the above style code has to stay here rather than in a separate css page in order
                to render the facebook timeline centered in the fb-page frame. I don&#39;t know why.
                The facebook timeline will try to fit in the container frame, which is the timeline class in this
                case. However, it only happens on page reload (not on window resize).-->
                <blockquote cite="https://www.facebook.com/GOOFY-Grandad-304161619685945/" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/GOOFY-Grandad-304161619685945/">GOOFY Grandad</a>
                </blockquote>
            </div>
        </div>
    </div>

    <?php include "footer.php";?>
</body>

</html>
