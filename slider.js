var slideIndex = 0;
showSlides();

function plusSlides(n) {
    slideIndex += n;
    showSlides();
}

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("image-container");
    slideIndex = (slideIndex + slides.length) % slides.length;
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";
}
