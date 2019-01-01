<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Biodata Diri</title>
        <meta name="description" content="Free Bootstrap 4 Theme by uicookies.com">
        <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Work+Sans:400,600" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>
    
    <header class="probootstrap-header">
      <a class="probootstrap-logo" href="index.html">
        <h1>HOME</h1>
      </a>
      <nav class="probootsrap-nav">
        <ul>
          <li><a href="index.html">Biodata</a></li>
          <li><a href="krs.html">KRS</a></li>
          <li><a href="form.html">Form</a></li>
          <li><a href="dom.html">DOM</a></li>
          <li><a href="katalog.html">Katalog</a></li>
          <li><a href="contact.html">Kontak</a></li>
        </ul>
      </nav>
    </header>
    
    <main class="probootstrap-main">

      <section class="probootstrap-bg probootstrap-animate" data-animate-effect="fadeInLeft" style="background-image: url(assets/images/img_5.jpg);"></section>

      <section class="probootstrap-animate">
        <h1 class="mb-4 text-primary">Form</h1>
        <?php
            echo "Nama: ".$_GET['nama']."</br>";
            echo "Password: ".$_GET['password']."</br>";
            echo "Jenis Kelamin: ".$_GET['jenis_kelamin']."</br>";
            echo "Keahlian: ".$_GET['keahlian']."</br>";
            echo "Tempat Lahir: ".$_GET['tempat_lahir']."</br>";
            echo "Deskripsi Diri: ".$_GET['deskripsi']."</br>";
        ?>
      </section>

    </main>

    <footer class="probootstrap-animate">
      <p>
        <a href="#" class="pr-3 pl-0"><i class="ion-social-facebook"></i></a>
        <a href="#" class="p-3"><i class="ion-social-twitter"></i></a>
        <a href="#" class="p-3"><i class="ion-social-linkedin"></i></a>
      </p>
      <p>&copy; 2017 uiCookies:Frontiers. All Rights Reserved. <br> Made with <span class="ion-heart"></span> by <a href="https://uicookies.com/" target="_blank">uiCookies</a> <small class="text-muted">(Don't remove this footer credit, Read <a href="https://uicookies.com/license" target="_blank">license</a> )</small></p>
      <p>Demo Images: Unsplash</p>
    </footer>

    
    <script src="assets/js/jquery.min.js"></script>
    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>

    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/main.js"></script>
    </body>
</html>