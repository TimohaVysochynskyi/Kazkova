<?php

require_once "./db.php";

$name = htmlentities(strip_tags( $_POST["name"]));
$text = htmlentities(strip_tags($_POST["text"]));

$conn->query("INSERT INTO `user_feedback` (`name`, `text`) VALUES ('$name', '$text')");

?>