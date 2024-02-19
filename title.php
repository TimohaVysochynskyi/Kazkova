<?php
require_once "./db.php";

$allKazka = $conn->query("SELECT * FROM `kazka`");


$allKazkaRates = [];

foreach ($allKazka as $kazka) {
    $id = $kazka['id'];

    $allStar = $kazka['all_star'];
    $allStar = explode(" | ", $allStar);
    $starSum = array_sum($allStar);

    $starCount = intval($kazka['star_count']);

    $starAvarage = $starSum / $starCount;
    $starAvarage = round($starAvarage, 4);

    $allKazkaRates[$id] = $starAvarage;
}

var_dump($allKazkaRates);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>3D Object</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/title.css">

    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>

    </style>

</head>

<body>
    <header class="header">
        <div class="logo-wrapper">
            <model-viewer src="./assets/logo.glb" class="logo" ar ar-modes="webxr scene-viewer quick-look"
                camera-controls poster="poster.webp" shadow-intensity="1" autoplay exposure="0.75"
                tone-mapping="commerce" shadow-softness="1" min-camera-orbit="90deg 90deg"
                max-camera-orbit="90deg 90deg 3.5m"> </model-viewer>
        </div>
        <div class="swiper best">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </header>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".best", {
            slidesPerView: 3,
            spaceBetween: 60,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>