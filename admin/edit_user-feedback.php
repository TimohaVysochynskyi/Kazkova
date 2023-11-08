<?php

$conn = new mysqli("localhost", "root", "", "kazkova");
$conn->set_charset("utf8");

$editId = htmlentities(strip_tags(intval($_POST['Id'])));

// Here is code of editing and video adding is going

?>