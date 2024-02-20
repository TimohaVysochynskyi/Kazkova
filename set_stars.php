<?php
require_once "./db.php";

$id = $_POST['Id'];
$star = ' '.strval($_POST['Star']) . ' |';

$data = $conn->query("SELECT * FROM `kazka` WHERE `id` = '$id'");
$kazka = $data->fetch_assoc();

$allStar = $kazka['all_star'];
$starCount = $kazka['star_count'];
$allStar = $allStar . $star;
$starCount = $starCount + 1;

$conn->query("UPDATE `kazka` SET `all_star` = '$allStar' WHERE `id` = '$id'");

$allStar = explode(" | ", $allStar);
$starSum = array_sum($allStar);
$starAvarage = $starSum / $starCount;
$starAvarage = round($starAvarage, 1);

$conn->query("UPDATE `kazka` SET `star_count` = '$starCount', `star_avarage` = '$starAvarage' WHERE `id` = '$id'");

echo '
    <div class="avarage-wrapper">
        <div class="avarage__circle">'.$starAvarage.'</div>
    </div>
    <div class="stars-wrapper"><p>Дякуємо за оцінку!</p></div>';
?>