<?php

$conn = new mysqli("localhost", "root", "", "kazkova");
$conn->set_charset("utf8");

$data = $conn->query("SELECT * FROM `user_feedback`");
echo '
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Text</th>
            <th>Date</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>';
foreach($data as $userFeedback){
    $id = $userFeedback['id']; $name = $userFeedback['name']; $text = $userFeedback['text']; $date = $userFeedback['date'];
    echo'
        <tr>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$text.'</td>
            <td>'.$date.'</td>
            <td><button type="submit" onclick="$(\'#user-feedbacks\').load(\'./delete_user-feedback.php\', {Id: \''.$id.'\'})">Delete</button></td>
            <td><button type="submit" onclick="$(\'#edit-feedbacks\').load(\'./edit_user-feedback.php\', {Id: \''.$id.'\'}); $(\'#edit-feedbacks\').fadeIn(\'slow\');$(\'#edit-feedbacks\').css(\'display\', \'flex\');">Edit</button></td>
        </tr>
    ';
}
echo '
    </table>
';
?>