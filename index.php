<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAZKOVA | Сучасні українські казки</title>
    
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/kazka-details.css">
    <link rel="stylesheet" href="./css/feedback-form.css">

    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
</head>

<body>

    <div id="details-wrapper"></div>

    <main class="container">
        <header>
            <div class="logo-wrapper">
                <model-viewer class="logo" camera-orbit="90deg 96deg" autoplay ar ar-modes="webxr scene-viewer"
                    src="./assets/logo.glb">
                    <div class="feedback-btn-wrapper">
                        <a href="./feedback.php" class="feedback-btn">Залишити відгук</a>
                    </div>  
                </model-viewer>
            </div>
        </header>
        <?php
            require_once "./db.php";
            $data = $conn->query("SELECT * FROM `kazka`");
            
            foreach($data as $kazka){
                $id = $kazka['id']; $name = $kazka['name']; $author = $kazka['author']; $model = $kazka['model']; $audio = $kazka['audio']; $text = $kazka['text'];

                echo '
                    <div class="kazka">
                        <div class="kazka__row">
                            <img class="kazka__img" src="./assets/previews/'.$model.'.png">
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
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/feedback.js"></script>
    <script src="./js/responsible.js"></script>
</body>

</html>