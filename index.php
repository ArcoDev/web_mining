<!-- Navegation -->
<?php 
    include 'templates/navegation.php';
?>
<!-- Header -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/banner1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/banner2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/banner3.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/banner4.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/banner5.jpg" alt="Third slide">
        </div>
        <div class="title">
            <h1 class="wow animate__animated animate__fadeInUp animate__delay-.8s"><?= $title ?></h1>
            <p class="wow animate__animated animate__fadeInUp animate__delay-.8s"><?= $subtitle ?></p>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Content -->
<div class="row m-0 info-content">
    <div class="col-md-4 wow animate__animated animate__fadeInUp animate__delay-.8s">
        <h2 class="text-center title-content"><?= $ventilation ?></h2>
        <ul class="lista">
            <li><?= $software ?></li>
            <li><?= $system ?></li>
            <li><?= $ductos ?></li>
        </ul>
    </div>
    <div class="col-md-4 wow animate__animated animate__fadeInUp animate__delay-.8s">
        <h2 class="text-center title-content"><?= $exploration ?></h2>
        <ul>
            <li><?= $robots ?></li>
        </ul>
    </div>
    <div class="col-md-4 wow animate__animated animate__fadeInUp animate__delay-.8s">
        <h2 class="text-center title-content"><?= $operation ?></h2>
        <ul>
            <li><?= $basado ?></li>
        </ul>
    </div>
</div>
<!-- Footer -->
<?php 
    include 'templates/footer.php';
?>