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
        <h2 class="wow animate__animated animate__fadeInUp animate__delay-.8s"><?= $titleContact ?></h2>
        <img src="assets/img/marca.svg" alt="Marca de agua wcm">
    </div>
</div>
<div class="parners">
    <div class="text-center wow animate__animated animate__fadeInUp animate__delay-.8s">
        <h2 style="color: #4e509c;"><?= $titleContact ?></h2>
        <p class="text-center">contacto@wcms.com.mx</p>
    </div>
    <div id="success" class="alert alert-success" role="alert">
        <p id="msjSucces">Se ha enviado tu mensaje correctamente</p>
    </div>
    <div id="error" class="alert alert-danger" role="alert">
        <p id="msjAlert"></p>
    </div>
    <form id="send-email" method="POST" class="contact">
        <div class="form-row">
            <div class="col-md-12">
                <input type="text" id="name" name="name" class="form-control" placeholder="<?= $name ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <input type="email" id="email" name="email" class="form-control" placeholder="<?= $email ?>">
            </div>
            <div class="col-md-6">
                <input type="text" id="issue" name="issue" class="form-control" placeholder="<?= $issue ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                <label for="mensaje"><?= $message ?></label>
                <input type="text" id="message" name="message" class="form-control" style="padding-bottom: 6rem;">
            </div>
        </div>
        <div class="btn-send d-flex justify-content-end">
            <button type="button" id="send" class="btn"><?= $btnSend ?></button>
        </div>
    </form>
</div>
<!-- Footer -->
<?php 
    include 'templates/footer.php';
?>


4766 8416 7777 5192