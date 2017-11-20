var slideIndex = 0;
showSlides();

// This method adds slides to the slider
// @param n number of slides
function plusSlides(n) {
    slideIndex += n;
    showSlides();
}

// This method switches the slides
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("image-container");
    slideIndex = (slideIndex + slides.length) % slides.length;
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";
}
