<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminka</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .container{
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <?php
        error_reporting(0);
        $pin = htmlentities(strip_tags($_POST['pin']));
        if(empty($pin) || $pin != 5357){
            echo '
                <form action="" method="post" class="pin-form" id="pin-form">
                    <input value="" type="number" placeholder="Пін-код" name="pin" class="form-input" required>
                    <button type="submit" name="pin-btn" class="form-input form-btn">Далі</button>
                </form>
            ';
        } else {
            echo '
                <h2>Відгуки</h2>
                <div id="user-feedbacks"></div>
                <div id="edit-feedbacks"></div>
            ';
        }

        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./script.js"></script>
</body>
</html>