<?php
    session_start();
    require 'option-language.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Class Mining</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!--Bootstrap 4 -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!--CSS Personal-->
    <link rel="stylesheet" href="css/styles.css">
    <!--Animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a href="index.php" class="logo">
            <img src="assets/img/wcm_logo.png" alt="logo wcm">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><?= $home ?><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php"><?= $about ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><?= $products ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clients.php"><?= $clients ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><?= $contact ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?= $language ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="detect-language.php?languaje=en"><?= $english ?></a>
                        <a class="dropdown-item" href="detect-language.php?languaje=es"><?= $spanish ?></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>