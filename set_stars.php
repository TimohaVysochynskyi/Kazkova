<?php

$conn = new mysqli("localhost", "root", "", "kazkova");
$conn->set_charset("utf8");

$id = $_POST['Id'];
$star = strval($_POST['Star']) . ' | ';

$data = $conn->query("SELECT * FROM `kazka` WHERE `id` = '$id'");
$kazka = $data->fetch_assoc();

$starCount = $kazka['star_count'];
$allStar = $kazka['all_star'];

$allStar = $allStar . $star;
$starCount++;

$conn->query("UPDATE `kazka` SET `all_star` = '$allStar' AND `star_count` = '$starCount'");


$cookieName = "rated" . strval($id); // Create a variable of name of cookie (converting number to a string)
setcookie($cookieName, True, time()+3600*24*30, '/');

?>