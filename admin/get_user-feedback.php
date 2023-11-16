<?php

$conn = new mysqli("localhost", "root", "", "kazkova");
$conn->set_charset("utf8");

$userFeedbackData = $conn->query("SELECT * FROM `user_feedback`");
?>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Text</th>
        <th>Date</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    <?php foreach($userFeedbackData as $userFeedback): ?>
        <tr>
            <td><?php echo $userFeedback['id']; ?></td>
            <td><?php echo $userFeedback['name']; ?></td>
            <td><?php echo $userFeedback['text']; ?></td>
            <td><?php echo $userFeedback['date']; ?></td>
            <td><button type="submit" onclick="$('#user-feedbacks').load('./delete_user-feedback.php', {Id:  <?php echo $userFeedback['id']; ?> })">Delete</button></td>
            <td><button type="submit" onclick="$('#edit-feedbacks').load('./edit_user-feedback.php', {Id: <?php echo $userFeedback['id']; ?> }); $('#edit-feedbacks').fadeIn('slow');$('#edit-feedbacks').css('display', 'flex');">Edit</button></td>
        </tr>
    <?php endforeach; ?>
</table>