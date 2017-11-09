<?php $currentPage = "faq"; ?>

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
    <script src="faq.js"></script>

</head>

<body>
    <?php include "header.php";?>


        <div class="faq" style="padding-top: 3em;">

            <div class="faqdiv">
              <a href="#" onclick="showHide('q1')">
                <img id="q1-img" src="images/right.png" width="25" height="25">
              </a>
              <b><p >Why pink and yellow?</p></b>
            </div>
            <div id="q1" class="answer">
              Colors put a stamp on the heart and mind. Yellow is to stamp happy, and pink is to stamp love.
            </div>

            <div class="faqdiv">
              <a href="#" onclick="showHide('q2')">
                <img id="q2-img" src="images/right.png" width="25" height="25">
              </a>
              <b><p>Why the name Goofy Grandad?</p></b>
            </div>
            <div id="q2" class="answer">
              Because I am the silliest Grandad in the world. My granddaughter always used to say "You are so goofy."
              And I thought, "You know what? I am goofy because I believe in having fun. If that means I need to be goofy, then that's what I'll be.
              As Goofy Grandad, I’ll keep getting older but I’ll never grow up!"
            </div>

            <div class="faqdiv">
              <a href="#" onclick="showHide('q3')">
                <img id="q3-img" src="images/right.png" width="25" height="25">
              </a>
              <b><p>Is Goofy Grandad religiously based?</p></b>
            </div>
            <div id="q3" class="answer">
              Goofy Grandad is spiritually based, which incorporates anyone who believes in love. Love is a foundation
              that covers all, regardless of religion.
            </div>

            <div class="faqdiv">
              <a href="#" onclick="showHide('q4')">
                <img id="q4-img" src="images/right.png" width="25" height="25">
              </a>
              <b><p>What age group does Goofy Grandad appeal too?</p></b>
            </div>
            <div id="q4" class="answer">
              Goofy Grandad has a wide range of appeal including "kidz" from 2-8, grandparents, and the parents that are sandwiched in the middle.
              All are welcome to come along for the joyous ride.
            </div>

            <div class="faqdiv">
              <a href="#" onclick="showHide('q5')">
                <img id="q5-img" src="images/right.png" width="25" height="25">
              </a>
              <b><p>What do you think is the most important part of Goofy Grandad?</p></b>
            </div>
            <div id="q5"class="answer">
              I believe in the oneness of humanity and "Together we make life better."
            </div>

            <div class="faqdiv">
              <a href="#" onclick="showHide('q6')">
                <img id="q6-img" src="images/right.png" width="25" height="25">
              </a>
              <b><p>Are you available to speak to an audience?</p></b>
            </div>
            <div id="q6" class="answer">
              I speak to anyone who wants to hear about love, harmony, and peace. Life can be better at any age if you practice the
              positiveness of love, harmony, and excitement in a fun and humorous way.
            </div>

            <div class="faqdiv">
              <a href="#" onclick="showHide('q7')">
                <img id="q7-img" src="images/right.png" width="25" height="25">
              </a>
              <b><p>Is there any evidence that positive thinking works?</p></b>
            </div>
            <div id="q7" class="answer">
              All holy books, such as the Bible, the Koran, and Bhagavad Gita, speak about the positiveness of belief, and the restorative
              power of the body when love harmony and peace are practiced. Spiritual words that flow from the soul.
            </div>

        </div>


    <?php include "footer.php";?>


</body>

</html>
