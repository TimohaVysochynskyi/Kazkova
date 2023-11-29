<?php

require_once "./db.php";

$id = $_POST['Id'];
$star = ' '.strval($_POST['Star']) . ' |';

$data = $conn->query("SELECT * FROM `kazka` WHERE `id` = '$id'");
$kazka = $data->fetch_assoc();

$allStar = $kazka['all_star'];
$starCount = $kazka['star_count'];

$allStar = $allStar . $star;
$starCount = $starCount + 1;


$conn->query("UPDATE `kazka` SET `all_star` = '$allStar', `star_count` = '$starCount' WHERE `id` = '$id'");


/*$cookieName = "rated" . strval($id); // Create a variable of name of cookie (converting number to a string)
setcookie($cookieName, True, time()+3600*24*30, '/');*/

$allStar = explode(" | ", $allStar);
$starSum = array_sum($allStar);
$starAvarage = $starSum / $starCount;
$starAvarage = round($starAvarage, 1);

echo '
    <div class="avarage-wrapper">
        <div class="avarage__circle">'.$starAvarage.'</div>
    </div>
    <div class="stars-wrapper">';
        for($i=1; $i<=5; $i++){ 
            echo'
                <a href="javascript:void(0)" class="star star'.$i.'" onclick="$(\'.quick-feedback\').load(\'./set_stars.php\', {
                    Id: \''.$id.'\',
                    Star: '.$i.'
                });">
                <svg xmlns="http://www.w3.org/2000/svg" class="star__img star__img'.$i.'" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="128" y1="56" x2="128" y2="180" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/><path d="M187.1,152.4c7.9.4,29.1-1.3,36.9-32.4s14.9-72-16-72-80,48-80,80c0-32-49.1-80-80-80S24,88,32,120s29,32.8,36.9,32.4" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/><path d="M88,144.2A36,36,0,1,0,128,180a36,36,0,1,0,40-35.8" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/></svg>
                </a>
            ';
        }
echo '</div>'

?>