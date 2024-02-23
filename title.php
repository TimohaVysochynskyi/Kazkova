<?php
require_once 'db.php';

$data = $conn->query("SELECT * FROM `kazka` ORDER BY `star_avarage` DESC LIMIT 5");
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
            <model-viewer src="./assets/logo.glb" class="logo" ar ar-modes="webxr scene-viewer quick-look" shadow-intensity="1" autoplay exposure="0.75"
                tone-mapping="commerce" shadow-softness="1"
                camera-orbit="90deg 90deg" min-camera-orbit="90deg 90deg"
                    max-camera-orbit="90deg 90deg auto"> </model-viewer>
        </div>
        <div class="swiper best">
            <div class="swiper-wrapper">
                <?php
                foreach($data as $row){
                    echo '
                    <div class="swiper-slide">
                        <img src="assets/books/'.$row["model"].'.png" alt="Книга" class="book-img">
                    </div>
                    ';
                }
                ?>
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
    <script src="./js/responsible.js"></script>
</body>

</html>