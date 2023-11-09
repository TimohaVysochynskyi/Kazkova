<?php

$conn = new mysqli("localhost", "root", "", "kazkova");
$conn->set_charset("utf8");

$editId = htmlentities(strip_tags(intval($_POST['Id'])));

$data = $conn->query("SELECT * FROM `user_feedback` WHERE `id` = '$editId'");
$feedback = $data->fetch_assoc();

$name = $feedback['name']; $text = $feedback['text'];

// Here is code of editing and video adding is going

echo '
    <form method="post" enctype="multipart/form-data" class="edit-feedback-form" action="./edit_feedback.php">
        <input type="text" name="name" class="form-input" value="'.$name.'">
        <textarea name="text" class="form-input form-textarea">'.$name.'</textarea>
        <input type="file" name="media" placeholder="Медіа">
        <button type="submit" class="form-input form-button">Надіслати</button>
    </form>
';

?>