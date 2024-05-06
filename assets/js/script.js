var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlides(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slider-item");
    var dots = document.getElementsByClassName("dot");

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    // Slaytları gizle
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // Noktaların aktiflik durumunu ayarla
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    // Aktif slaydı göster ve noktayı aktif yap
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}