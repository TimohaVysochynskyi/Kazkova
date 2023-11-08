<?php

$conn = new mysqli("localhost", "root", "", "kazkova");
$conn->set_charset("utf8");

$deleteId = htmlentities(strip_tags(intval($_POST['Id'])));

$conn->query("DELETE FROM `user_feedback` WHERE `id` = '$deleteId'");

$conn->close();

?>