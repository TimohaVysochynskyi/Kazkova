$(document).ready(function () {
  $("#user-feedback").submit(function () {
    let name = $("input[name='name']").val();
    let text = $("textarea[name='text']").val();

    $.ajax({
      type: "POST",
      url: "./send_user-feedback.php",
      data: { name: name, text: text },
      success: function () {
        $("input[name='name']").val("");
        $("textarea[name='text']").val("");
      },
    });
  });
});

let rows = 1;
let slidesPerView = 2;
if (window.innerWidth < 768) {
  slidesPerView = 1;
}

var feedbackSwiper = new Swiper(".feedback-swiper", {
  slidesPerView: 1,
  grid: {
    rows: rows,
  },
  spaceBetween: 30,
  pagination: {
    el: ".feedback-swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".feedback-swiper-next",
    prevEl: ".feedback-swiper-prev",
  },
});
