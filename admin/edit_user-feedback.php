<?php

require_once "../db.php";

$editId = strip_tags(intval($_POST['Id']));

$userFeedbackData = $conn->query("SELECT * FROM `user_feedback` WHERE `id` = '$editId'");
$userFeedback = $userFeedbackData->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data" class="feedback-form edit-feedback-form" action="./edit-feedback.php?id=<?php echo $editId; ?>">
    <a href="#" onclick="$('#edit-feedbacks').fadeOut('slow');"><img src="../assets/close.png" alt="Close"></a>
    <h2>Редагування відгуку</h2>
    <input type="text" name="name" class="form-input" value="<?php echo $userFeedback['name'] ?>">
    <textarea name="text" class="form-input form-textarea"><?php echo $userFeedback['text'] ?></textarea>
    <input type="file" name="media"class="form-input" placeholder="Медіа">
    <button type="submit" class="form-input form-button">Надіслати</button>
</form>