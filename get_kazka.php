<?php

echo '
<style>
.star__img{
    background-size: cover;
}
.star1:hover .star__img{
    background-image: url(../assets/star-fill.png);
}
</style>
';

$conn = new mysqli("localhost", "root", "", "kazkova");
$conn->set_charset("utf8");
$kazkaId = $_POST['Id'];

$data = $conn->query("SELECT * FROM `kazka` WHERE `id` = '$kazkaId'");
$kazka = $data->fetch_assoc();

echo '<div class="details">';
    $id = $kazka['id']; $name = $kazka['name']; $author = $kazka['author']; $model = $kazka['model']; $audio = $kazka['audio']; $text = $kazka['text'];
    $cookieName = "rated" . strval($id); // Create a variable of name of cookie (converting number to a string)

    $allStar = $kazka['all_star'];
    $starCount = intval($kazka['star_count']);
    $allStar = explode(" | ", $allStar);
    $starSum = array_sum($allStar);
    $starAvarage = $starSum / $starCount;
    $starAvarage = round($starAvarage, 1);

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
                <div class="quick-feedback">
                    <div class="avarage-wrapper">
                        <div class="avarage__circle">'.$starAvarage.'</div>
                    </div>';
                    echo '<div class="stars-wrapper">';
                        for($i=1; $i<=5; $i++){ 
                            echo'
                                <a href="javascript:void(0)" class="star star'.$i.'" onclick="$(\'.stars-wrapper\').load(\'./set_stars.php\', {
                                    Id: \''.$id.'\',
                                    Star: '.$i.'
                                });"><svg class="star__img star__img'.$i.'"><image xlink:href="./assets/star.svg" width="22" height="22"></svg></a>
                            ';
                        }
                    echo '</div>
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