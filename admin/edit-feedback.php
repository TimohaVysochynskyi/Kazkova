<?php

require_once "../db.php";

$name = htmlentities(strip_tags($_POST['name']));
$text = htmlentities(strip_tags($_POST['text']));
$id = $_GET['id'];

$filename = $_FILES['media']["name"];
$tempname = $_FILES['media']["tmp_name"];
$folder = "../data/feedbacks/". $filename;

$conn->query("INSERT INTO `final_feedback` (`name`, `text`, `media`) VALUES ('$name', '$text', '$filename')");
$conn->query("DELETE FROM `user_feedback` WHERE `id` = '$id'");

move_uploaded_file($tempname, $folder);
header("Location: ./");

?>