$(document).ready(function(){

    $("#user-feedback").submit(function(){
        let name = $("input[name='name']").val();
        let text = $("textarea[name='text']").val();

        $.ajax({
            type: "POST",
            url: "./send_user-feedback.php",
            data: {name: name, text: text},
            success: function(){
                $("input[name='name']").val("");
                $("textarea[name='text']").val("");
            }
        });

    });

});

var feedbackSwiper = new Swiper(".feedback-swiper", {
    slidesPerView: 2,
    grid: {
        rows: 1,
    },
    spaceBetween: 30,
    pagination: {
        el: ".feedback-swiper-pagination",
        clickable: true,
    }
});