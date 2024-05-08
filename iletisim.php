<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim - Levent Çatı Sistemleri & Sac Şekillendirme Merkezi</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    include "templates/navbar.html";
    ?>

    <div class="container">
        <div class="page-title">
            <h1>İLETİŞİM</h1>
            <ul class="breadcrumb">
                <li><a href="index.php" class="page-link">Ana Sayfa</a></li>
                <li><a href="#" class="page-link active">İletişim</a></li>
            </ul>
        </div>

        <div class="form-area">
            <div class="form-info">
                <div class="contact-info">
                    <h3>Levent Çatı Sistemleri & Sac Şekillendirme Merkezi</h3>
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p>Veysel Karani Mh. 2. Nazlı Sk. No:28 <br>Osmangazi/BURSA</p>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <p><a href="tel:05316492273">05316492273</a></p>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <p><a href="tel:05316492273">05316492273</a></p>
                    </div>
                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:sagar00001.co@gmail.com">leventcati.sistemleri@gmail.com</a></p>
                    </div>
                    <p class="contact-company-about">
                        <span>ÇALIŞMA SAATLERİMİZ</span>
                        <strong>Pazartesi-Cumartesi</strong> 09:00 - 18:00
                    </p>
                    <div class="contact-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="form">
                <h3 class="contact-title">Sorularınız için bizimle iletişime geçin</h3>
                <form action="#" method="POST">
                    <div class="form-row">
                        <input type="text" id="name" name="name" class="form-input" placeholder="Ad">
                        <input type="text" id="surname" name="surname" class="form-input" placeholder="Soyad">
                    </div>
                    <input type="email" id="email" name="email" class="form-input" placeholder="Email">
                    <textarea id="message" name="message" class="form-input" rows="5" placeholder="Bize iletmek istediğiniz mesajınız"></textarea>
                    <input type="submit" class="form-button" value="Gönder">
                </form>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d365.19394594290395!2d29.0788191460811!3d40.206740798786946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca3e4490ed459b%3A0x5593d17014da613d!2sLevent%20%C3%87ati%20Sistemleri!5e0!3m2!1str!2str!4v1715191958901!5m2!1str!2str" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <?php
    include "templates/footer.html";
    ?>
</body>
</html>