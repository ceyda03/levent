<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levent Çatı Sistemleri & Sac Şekillendirme Merkezi</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    include "templates/navbar.html";
    ?>

    <div class="container">
        <div class="slider-container">
            <div class="slider">
                <div class="slider-item fade">
                    <img src="assets/img/slider1.jpg" alt="">
                    <div class="caption">Lorem ipsum dolor sit amet.</div>
                </div>
                <div class="slider-item fade">
                    <img src="assets/img/slider2.jpg" alt="">
                    <div class="caption">Lorem ipsum Lorem, ipsum.</div>
                </div>
                <div class="slider-item fade">
                    <img src="assets/img/slider3.jpg" alt="">
                    <div class="caption">Lorem ipsum </div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <div style="text-align: center;">
                <span class="dot" onclick="currentSlides(1)"></span>
                <span class="dot" onclick="currentSlides(2)"></span>
                <span class="dot" onclick="currentSlides(3)"></span>
            </div>
        </div>

        <div class="form-area">
            <div class="form-info">
                <img src="" alt="">
            </div>
            <div class="form">
                <h3 class="offer-title">Teklif Formu Gönder</h3>
                <p>Bilgi almak için formu doldurun, sizinle iletişime geçelim</p>
                <form action="#" method="POST">
                    <div class="form-row">
                        <input type="text" id="name" name="name" class="form-input" placeholder="Ad">
                        <input type="text" id="surname" name="surname" class="form-input" placeholder="Soyad">
                    </div>
                    <div class="form-row">
                        <input type="email" id="email" name="email" class="form-input" placeholder="Email">
                        <input type="phone" id="phone" name="tel" class="form-input" placeholder="Telefon">
                    </div>
                    <textarea id="message" name="message" class="form-input" rows="5" placeholder="Almak istediğiniz hizmet ve teklifiniz"></textarea>
                    <input type="submit" class="form-button" value="Gönder">
                </form>
            </div>
        </div>
    </div>

    <?php
    include "templates/footer.html";
    ?>

    <script src="assets/js/script.js"></script>
</body>
</html>