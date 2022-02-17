<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa | Eğitim Al</title>
    <link rel="stylesheet" href="Css/style.css">
    <script src="https://kit.fontawesome.com/8ccc1de1a6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Owl/owl.carousel.min.css">
    <link rel="stylesheet" href="Owl/owl.theme.default.min.css">
    
</head>
<body>
    <!--Menü alanı-->
    <section id="menu">
        <div id="logo">EduGet</div>
    
        <nav>
            <a href="" >Anasayfa</a>
            <a href="">Hakkımızda</a>
            <a href="" >Eğitimler</a>
            <a href="">Ekip</a>
            <a href="">İletişim</a>

        </nav>
    </section>
    <!--Menü alanı-->

    <!--Banner alanı-->

    <section id="anasayfa">
        <div id="black"><!--Resimlerin üzerinde bir perde görünümü varmış gibi kullanmak için --></div> 
        <div id="icerik">
            <h2>EduGet</h2>
            <hr width="300" align="left">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius neque veniam praesentium beatae inventore culpa cumque ratione. Harum soluta deserunt excepturi, saepe, a distinctio, unde incidunt aperiam minus necessitatibus dolor!</p>
        </div>
    </section>
      <!--Banner alanı-->

       <!--Hakkımızda alanı-->
    <section id="hakkimizda">
        <h2>Hakkımızda</h2>
        <div class="container">
            <div id="sol">
                <h5 id="h5sol">Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. </h5>
            </div>
            <div id="sag">
                <span>L</span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga ut amet, adipisci, distinctio cupiditate quam cumque rem culpa numquam recusandae facilis. Iste ut debitis et ratione perspiciatis tempora harum a!</p>

            </div>
            <img src="/img/about.jpg" alt="" class="img-fluid mt100">
            <p id="pson">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, voluptate? Ad dolor quod dolores temporibus sit accusantium libero deserunt suscipit sequi. Maxime quae praesentium ullam laboriosam facilis quod eum accusantium.</p>
        </div>
    </section>

        <!--Hakkımızda alanı-->

        <!--Eğitim alanı-->
    <section id="egitim">
     
        <div class="container" >
        <h2>Eğitimler</h2>
        <div class="owl-carousel owl-theme">
            <div class="card item" data-merge=1.3>
                <img src="img/r1.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">HTML5 ve CSS3 Eğitimi</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, iure.</p>
                           
            </div>            
        </div>
    </section>
        <!--Eğitim alanı-->

        <!--Öğretmen alanı-->

    <section id="ogretmenler">
        <div id="container">
            <h2 id="ogretmenh2">Öğretmenler</h2>
            <div class="sutun-sol-sag">
                <img src="img/ekip1.jpg" alt="" class="img-fluid oval">
                <h4 class="ogretmenisim">Jack Harrison</h4>
                <p class="ogretmenn">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, sapiente?</p>
                <div> 
                    <a href="" class="ikonn"><i class="fab fa-facebook-square social"></i></a>
                    <a href=""  class="ikonn"><i class="fab fa-google-plus-square"></i></a>
                    <a href="" class="ikonn"><i class="fab fa-twitter-square"></i></a>
                </div>
            </div>
            <div class="sutun-sol-sag">
                <img src="img/ekip2.jpg" alt="" class="img-fluid oval">
                <h4 class="ogretmenisim">Marry</h4>
                <p class="ogretmenn">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, sapiente?</p>
                <div> 
                    <a href="" class="ikonn"><i class="fab fa-facebook-square"></i></a>
                    <a href=""  class="ikonn"><i class="fab fa-google-plus-square"></i></a>
                    <a href="" class="ikonn"><i class="fab fa-twitter-square"></i></a>
                </div>
            </div>
            <div class="sutun-sol-sag">
                <img src="img/ekip3.jpg" alt="" class="img-fluid oval">
                <h4 class="ogretmenisim">Selena</h4>
                <p class="ogretmenn">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, sapiente?</p>
                <div> 
                    <a href="" class="ikonn"><i class="fab fa-facebook-square"></i></a>
                    <a href=""  class="ikonn"><i class="fab fa-google-plus-square"></i></a>
                    <a href="" class="ikonn"><i class="fab fa-twitter-square"></i></a>
                </div>
            </div>
        </div>
    </section>

        <!--Ekip alanı-->

        
        <!--İletişim alanı-->
        <section id="iletisim">
            <div id="container">
                <h2 id="iletisimh2">İletişim</h2>
                <form action="index.php" method="post">
                <div id="iletisimOpak"> 
                    <div class="formgrup" >
                        <div id="solform">
                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control"> 
                            <input type="text" name="telefon" placeholder="Telefon" required class="form-control">
                            <textarea name="mesaj" style="resize:none" id="text" cols="30" placeholder="Mesaj Giriniz" required class="form-control"></textarea>
                            <input type="submit" name="button" id="button"  value="Gönder">
                        </div>
                        <div id="sagform">
                            <input type="text" name="email" placeholder="E-mail" required class="form-control">
                            <input type="text" name="konu"placeholder="Konu Başlığı " required class="form-control">
                            
                    </div>
                    
                   
                    <div id="adres">
                        <h4>Adres:</h4>
                        <p class="adresp"> Köşk mahallesi </p>
                        <p class="adresp"> Talas Bulvası</p>
                        <p class="adresp"> Erciyes Üniversitesi Mühendislik Fakültesi Melikgazi/Kayseri</p>
                        <p class="adresp">Email: senagtms@gmail.com</p>
                        <p class="adresp">Telefon:(0352) 437 57 55
                        </p>
                    </div>

                    </div>
                </div>
                </form>

                <footer>
                    <div id="copyright">Tüm Hakları Saklıdır</div>
                    
                </footer>
            </div>
            
        </section>

         <!--İletişim alanı-->
        <script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>

        <script src="Owl/owl.carousel.min.js"></script>

        <script src="Owl/script.js"></script>
</body>
</html>

<?php

include("baglanti.php");

if(isset($_POST["isim"],$_POST["telefon"],$_POST["mesaj"],$_POST["mail"],$_POST["konu"])){
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["telefon"];
    $mesaj=$_POST["mesaj"];
    $mail=$_POST["mail"];
    $konu=$_POST["konu"];

    $ekle="INSERT INTO iletisim(adsoyad, telefon, mail, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$mail."','".$konu."','".$mesaj."')";

    if($baglan->query($ekle)==TRUE){
        echo "<script>alert('Mesajınız Gönderilmiştir')</script>";

    }
}
?>