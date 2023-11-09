<?php

$conn = new mysqli("localhost", "root", "", "kazkova");
$conn->set_charset("utf8");

$name = htmlentities(strip_tags($_POST['name']));
$text = htmlentities(strip_tags($_POST['text']));

echo $name;

$filename = $_FILES['media']["name"];
$tempname = $_FILES['media']["tmp_name"];
$folder = "../data/feedbacks/". $filename;

$conn->query("INSERT INTO `final_feedback` (`name`, `text`, `media`) VALUES ('$name', '$text', '$filename')");

move_uploaded_file($tempname, $folder);

?>