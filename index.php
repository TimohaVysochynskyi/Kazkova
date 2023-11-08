<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>3D Object</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/kazka-details.css">
    <link rel="stylesheet" href="./css/feedback-form.css">

    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>

</head>

<body>

    <div class="bg-blur"></div>

    <header class="header">
        <div class="logo-wrapper">
            <model-viewer class="logo" camera-orbit="90deg 96deg 5m" autoplay ar ar-modes="webxr scene-viewer"
                src="./assets/logo.glb">
            </model-viewer>
        </div>
    </header>

    <div id="details-wrapper"></div>

    <div class="title-wrapper">
        <h1 class="title">Сучасні українські казки</h1>
        <div class="title__line"></div>
    </div>

    <main class="container">
        <div class="kazky-wrapper">
            <?php
            $conn = new mysqli("localhost", "root", "", "kazkova");
            $conn->set_charset("utf8");
            $data = $conn->query("SELECT * FROM `kazka`");
            
            foreach($data as $kazka){
                $id = $kazka['id']; $name = $kazka['name']; $author = $kazka['author']; $model = $kazka['model']; $audio = $kazka['audio']; $text = $kazka['text'];

                echo '
                    <div class="kazka">
                        <div class="kazka__row">
                            <model-viewer class="logo" camera-orbit="106deg 88deg 30m" autoplay ar ar-modes="webxr scene-viewer"
                                src="./assets/models/'.$model.'.glb">
                            </model-viewer>
                        </div>
                        <div class="kazka__row">
                            <h2>'.$name.'</h2>
                            <p>'.$author.'</p>
                            <a href="javascript:void(0)" class="kazka__open-btn" onclick="$(\'#details-wrapper\').load(\'./get_kazka.php\', {
                                Id: \''.$id.'\'
                            }); $(\'#details-wrapper\').fadeIn(\'slow\');$(\'#details-wrapper\').css(\'display\', \'flex\');">
                                Детальніше
                            </a>
                        </div>
                    </div>
                ';

            }
            ?>
        </div>

        <div class="title-wrapper" style="margin-top: 10vh">
            <h1 class="title">Залиште відгук</h1>
            <div class="title__line"></div>
        </div>

        <div class="feedback-wrapper">
            <form method="post" class="feedback-form" id="user-feedback">
                <input type="text" class="form-input" name="name" placeholder="Ваше ім'я: ">
                <textarea name="text" class="form-input form-textarea" placeholder="Ваш відгук: "></textarea>
                <button type="submit" class="form-input feedback-button">Надіслати</button>
            </form>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/feedback.js"></script>

</body>

</html>
