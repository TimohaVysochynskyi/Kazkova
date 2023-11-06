<?php

$conn = new mysqli("localhost", "root", "", "kazkova");

$kazkaId = $_POST['Id'];

$data = $conn->query("SELECT * FROM `kazka` WHERE `id` = $kazkaId");
$kazka = $data->fetch_assoc();

echo '<div class="details">';
    $id = $kazka['id']; $name = $kazka['name']; $author = $kazka['author']; $model = $kazka['model']; $audio = $kazka['audio']; $text = $kazka['text'];
    
    echo '
        <button type="button" class="details__close" onclick="$(\'#details-wrapper\').fadeOut(\'fast\');" ><img src="./assets/close.png" alt="Close"></button>
        <div class="details__col">
            <h3 class="details__name">'.$name.'</h3>
            <div>
                <div class="audio-wrapper">
                    <div class="audio__btn" id="play-button'.$id.'" onclick="playAudio(\''.$id.'\')">
                        <img src="./assets/play.png" class="image-play" alt="">
                        <img src="./assets/pause.png" class="image-pause" alt="">
                    </div>
                    <div class="audio__progress-wrapper">
                        <div class="audio__progress-time">
                            <span id="current-time">0хв 0с </span><span id="duration">0хв 0с</span>
                        </div>
                        <div class="audio__progress-bar">
                            <div id="audio__progress-bar"></div>
                        </div>
                    </div>
                    <audio id="audio" src="./audio/'.$audio.'.mp3" style="display: none;"></audio>
                </div>
                <div class="read-wrapper">
                    <a class="read__btn" href="'.$text.'"><img src="./assets/read.png" alt="Книжка"> Читати</a>
                </div>
            </div>
            <p class="details__author">'.$author.'</p>
        </div>
        <div class="details__col">
            <model-viewer class="details__model" camera-controls camera-orbit="90deg 90deg " autoplay ar
                ar-modes="webxr scene-viewer" src="./assets/models/'.$model.'.glb">
            </model-viewer>
        </div>
    ';
echo '</div>';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <script src="./js/audio.js"></script>';

echo '
<script>
    function playAudio(id) {
        //console.log(id);
        document.querySelector("#audio").play();
        $(".image-play").hide("fast"); $(".image-pause").show("fast");
        if(document.querySelector(".image-play").style.display == "none"){
            document.querySelector("#audio").pause();
            $(".image-pause").hide("fast"); $(".image-play").show("fast");
        }
    }
</script>
';

?>