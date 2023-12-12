<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Відгуки</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/feedback.css">
</head>

<body>
    <main class="container">
        <div class="title-wrapper" style="margin-top: 10vh">
            <h1 class="title">Усі відгуки</h1>
            <div class="title__line"></div>
        </div>

        <div class="swiper-wrapper">
            <div class="swiper feedback-swiper">
                <div class="swiper-wrapper">
                    <?php
                    require_once "./db.php";
                    $feedbackData = $conn->query("SELECT * FROM `final_feedback`");
                    foreach ($feedbackData as $feedback):
                        ?>
                        <div class="swiper-slide">
                            <div class="swiper-slide__row">
                                <?php
                                if ($feedback['media'] != "") {
                                    echo '
                                    <video width="100%" height="100%" controls>
                                      <source src="./data/feedbacks/' . $feedback["media"] . '" type="video/mp4">
                                    </video>
                                ';
                                } else {
                                    echo '<img src="./data/feedbacks/default.png" alt="Медіафайл, коли нема завантаженого">';
                                }
                                ?>
                            </div>
                            <div class="swiper-slide__row">
                                <p class="swiper-slide-text">
                                    <?php echo $feedback['text'] ?>
                                </p>
                                <p class="swiper-slide-author">
                                    <?php echo $feedback['name'] ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-button-next feedback-swiper-next"></div>
                <div class="swiper-button-prev feedback-swiper-prev"></div>
                <div class="swiper-pagination feedback-swiper-pagination"></div>
            </div>
        </div>
        <div class="title-wrapper" style="margin-top: 10vh">
            <h1 class="title">Залиште відгук</h1>
            <div class="title__line"></div>
        </div>

        <div class="feedback-wrapper">
            <form method="post" class="feedback-form" id="user-feedback">
                <input type="text" class="form-input" name="name" placeholder="Ваше ім'я: " required>
                <textarea name="text" class="form-input form-textarea" placeholder="Ваш відгук: " required></textarea>
                <button type="submit" class="form-input feedback-button">Надіслати</button>
            </form>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/feedback.js"></script>
</body>

</html>