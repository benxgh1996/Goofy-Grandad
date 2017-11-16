<!--Gonghan-->
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
    <?php include "header.php";?>

    <div class="home-wrap">
        <div class= "elements">
            <div class="slideshow-container">
                <div class="left-switch"><a class="prev" onclick="plusSlides(-1)">&#10094;</a></div>
                <div class="image-container fade">
                    <img src="images/elephantwalk.jpg" class="img-responsive">
                </div>
                <div class="image-container fade">
                    <img src="images/sammy.jpg" class="img-responsive">
                </div>
                <div class="image-container fade">
                    <img src="images/partial_bookcover.jpg" class="img-responsive">
                </div>
                <div class="right-switch"><a class="next" onclick="plusSlides(1)">&#10095;</a></div>
            </div>

            <div class="home-video-container">
                <iframe class="img-responsive"
                        src="https://www.youtube.com/embed/o7wOFAASi5Y"
                        frameborder="0" allowfullscreen>
                </iframe>
            </div>
        </div>

        <div class="mission">
            Dedicated to bringing messages of <span class="pink">love</span> and <span class="yellow">happiness</span>
            to kids and seniors.
        </div>
    </div>

    <?php include "footer.php";?>

    <script src="slider.js"></script>
</body>

</html>
