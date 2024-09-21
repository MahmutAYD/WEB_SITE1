<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Bilişim Merkezi</title>

    <link rel="stylesheet" href="Css/style.css">
    <script src="https://kit.fontawesome.com/8ba3970cd4.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">

</head>

<body>

    <section id="menu">
        <div id="logo">Bilişim Merkezi</div>
        <nav>
            <a href="#anasayfa"><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
            <a href="#hakkımızda"><i class="fa-solid fa-info ikon"></i>Hakkımızda</a>
            <a href="#iletisim"><i class="fa-solid fa-tty ikon"></i>İletişim</a>
        </nav>
    </section>
    <section id="anasayfa">
        <div id="black"></div>
        <div id="icerik">
            <h2>Bilişim Merkezi</h2>
            <hr width=300 align=left>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias nesciunt asperiores nam aliquam quidem enim cumque ullam est odit. A vel dolores vitae, neque dolor temporibus facere voluptatem at.</p>
        </div>
    </section>
    <section id="hakkimizda">
        <h3>Hakkımızda</h3>
        <div class="container">

            <div id="sol">
                <h5 id="h5sol">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </h5>
            </div>
            <div id="sag">
                <span>L</span>
                <p id="psag">
                    orem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, nulla rem blanditiis tempore perspiciatis eveniet architecto omnis quis reprehenderit facilis odit, veniam amet inventore. Quae quod ipsa pariatur ab maiores.
                </p>
            </div>
            <img src="img/about.jpg" alt="" class="img-fluid mt100">
            <p id="pson">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam odio similique aut pariatur quis saepe laborum consequuntur autem laudantium laboriosam. Dolorum quod nobis ullam placeat, cum at dignissimos. Ad, voluptas.</p>
        </div>
    </section>
    <section id="egitimler">
        <div class="container">
            <h3>Eğitimler</h3>
            <div class="owl-carousel owl-theme">

                <div class="card item" data-merge=1.5>
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">HTML ce CSS3 Eğitimi</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque repella</p>
                </div>
                <div class="card item" data-merge=1.5>
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">HTML ce CSS3 Eğitimi</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque repella</p>
                </div>
                <div class="card item" data-merge=1.5>
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">HTML ce CSS3 Eğitimi</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque repella</p>
                </div>

            </div>
        </div>

    </section>


    <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">Ekip</h3>

            <div class="sutun-sol-sag">
                <img src="img/ekip1.jpg" alt="" class="img-fluid1 oval">
                <h4 class="ekipisim">Hakan Çelik</h4>
                <p class="ekipp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Op.
                </p>
                <div class="ekip-ikon">
                    <a href="#"><i class="fa-brands fa-linkedin social"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                    <a href="#"><i class="fa-brands fa-github social"></i></a>
                </div>
            </div>

            <div class="sutun">
                <img src="img/ekip2.jpg" alt="" class="img-fluid1 oval">
                <h4 class="ekipisim">Hakan Çelik</h4>
                <p class="ekipp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Op.
                </p>
                <div class="ekip-ikon">
                    <a href="#"><i class="fa-brands fa-linkedin social"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                    <a href="#"><i class="fa-brands fa-github social"></i></a>
                </div>
            </div>

            <div class="sutun-sol-sag">
                <img src="img/ekip3.jpg" alt="" class="img-fluid1 oval">
                <h4 class="ekipisim">Hakan Çelik</h4>
                <p class="ekipp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Op.
                </p>
                <div class="ekip-ikon">
                    <a href="#"><i class="fa-brands fa-linkedin social"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                    <a href="#"><i class="fa-brands fa-github social"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="iletisim">
        <div class="container">
            <h3 id="h3İletisim">İletişim</h3>
            <form action="index.php" method="post">
                <div id="iletisimopak">
                    <div id="formgroup">
                        <div id="solform">
                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                            <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                        </div>
                        <div id="sagform">
                            <input type="email" name="mail" placeholder=" Email Adresiniz" required class="form-control">
                            <input type="text" name="Konu" placeholder="Konu Başlığı" required class="form-control">
                        </div>
                        <textarea name="mesaj" id="" cols="30" rows="10" placeholder="Mesaj Giriniz" required class="form-control"></textarea>
                        <input type="submit" value="Gönder">
                    </div>

                    <div id="adres">
                        <h4 id="adresbaslik">Adres:</h4>
                        <p class="adresp">Mehmet Akif Ersoy Mah.</p>
                        <p class="adresp">Akyıldız Caddesi</p>
                        <p class="adresp">Oğuz Bey Sokak No:30 </p>
                        <p class="adresp">0212 123 45 67</p>
                        <p class="adresp">Email: Mahmutasd97@gmail.com</p>
                    </div>
                </div>
            </form>

            <footer>
                <div id="copyright">2020 Tüm Haklar Saklıdır.</div>
                <div id="socialfooter">
                    <a href="#"><i class="fa-brands fa-linkedin social"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                    <a href="#"><i class="fa-brands fa-github social"></i></a>
                </div>
                <a href="#menu"><i class="fa-solid fa-up-long" id="up"></i></a>
            </footer>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/scrip.js"></script>
</body>

</html>

<?php

include("baglanti.php");
if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];
    
    $ekle = "INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ($adsoyad, $telefon, $email, $konu, $mesaj)";
    
    if($baglan->query($ekle)===TRUE)
    {
        echo "<script>alert('Mesajınız Başarı ile Gönderilmiştir.')</script>";
        
    }    
    else{
        echo "<script>alert('Mesajınız gönderilirken bir hata oluştu.')</script>";
    }
}

?>
