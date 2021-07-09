<!-- Navegation -->
<?php 
    include 'templates/navegation.php';
?>
<!-- Slider -->
<?php 
    include 'templates/slider.php';
?>
<div class="banner">
    <div class="title-page">
        <h2 class="wow animate__animated animate__fadeInUp animate__delay-.8s"><?= $titleAbout ?></h2>
        <img src="assets/img/marca.svg" alt="Marca de agua wcm">
    </div>
</div>
<div class="row info-page">
    <div class="col-md-6">
        <img class="box-img wow animate__animated animate__fadeInUp animate__delay-.8s" src="assets/img/logo.png" alt="logo wcm">
    </div>
    <div class="col-md-6 wow animate__animated animate__fadeInUp animate__delay-.8s">
        <p>
            <span><?= $span ?></span>
            <?= $p1 ?>
        </p>
        <p><?= $p2 ?></p>
        <p><?= $p3 ?></p>
        <ul>
            <li><?= $lis1 ?></li>
            <li><?= $lis2 ?></li>
            <li><?= $lis3 ?></li>
            <li><?= $lis4 ?></li>
            <li><?= $lis5 ?></li>
            <li><?= $lis6 ?></li>
        </ul>
    </div>
</div>
<div class="row m-0 valors">
    <div class="col-md-4 wow animate__animated animate__fadeInUp animate__delay-.8s">
        <h2 class="text-center"><?= $mision ?></h2>
        <p><?= $descMision ?></p>
    </div>
    <div class="col-md-4 wow animate__animated animate__fadeInUp animate__delay-.8s">
        <h2 class="text-center"><?= $vision ?></h2>
        <p><?= $descVision ?></p>
    </div>
    <div class="col-md-4 wow animate__animated animate__fadeInUp animate__delay-.8s">
        <h2 class="text-center"><?= $valors ?></h2>
        <p><?= $descVal ?></p>
    </div>
</div>
<div class="banner">
    <div class="title-page">
        <h2 class="wow animate__animated animate__fadeInUp animate__delay-.8s"><?= $parners ?></h2>
        <img src="assets/img/marca.svg" alt="Marca de agua wcm">
    </div>
</div>
<div class="parners">
    <img class="wow animate__animated animate__fadeInUp animate__delay-.8s" src="assets/img/parners/auma.png" alt="Parners WCM">
    <img class="wow animate__animated animate__fadeInUp animate__delay-.8s" src="assets/img/parners/EugenieAi.png" alt="Parners WCM">
    <img class="wow animate__animated animate__fadeInUp animate__delay-.8s" src="assets/img/parners/Fimsa.png" alt="Parners WCM">
    <img class="wow animate__animated animate__fadeInUp animate__delay-.8s" src="assets/img/parners/Howden.png" alt="Parners WCM">
    <img class="wow animate__animated animate__fadeInUp animate__delay-.8s" src="assets/img/parners/Plastics.png" alt="Parners WCM">
</div>
<div class="fondo-page"></div>
 <!-- Footer -->
 <?php 
    include 'templates/footer.php';
?>