<div class="header">
    <div class="web-icon"><a href="index.php"><img id="web_icon" src="images/icon1.png"></a></div>

    <div class="nav-container">
        <a href="index.php" <?php if ($currentPage == "home") {echo "id=\"current_nav_item\"";}?>>
            Home</a>
        <a href="about.php" <?php if ($currentPage == "about") {echo "id=\"current_nav_item\"";}?>>
            About</a>
        <a href="https://www.youtube.com/channel/UCqppi0-9FmF-o3b4gDNUWng/featured"
                             target="_blank">Videos</a>
        <a href="events.php" <?php if ($currentPage == "events") {echo "id=\"current_nav_item\"";}?>>
            Events</a>
        <a href="review.php" <?php if ($currentPage == "review") {echo "id=\"current_nav_item\"";}?>>
            Review</a>
        <a href="contact.php" <?php if ($currentPage == "contact") {echo "id=\"current_nav_item\"";}?>>
            Contact</a>
        <a href="faq.php" <?php if ($currentPage == "faq") {echo "id=\"current_nav_item\"";}?>>
            FAQ</a>
    </div>
</div>