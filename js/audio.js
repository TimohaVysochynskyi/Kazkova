$(document).ready(function () {
  let audio = document.querySelector("#audio");

  $("#audio").on("loadedmetadata", function () {
    $("#duration").text(
      Math.floor(audio.duration / 60) +
        "хв " +
        Math.floor(audio.duration % 60) +
        "с"
    );
  });

  audio.addEventListener("timeupdate", function () {
    $("#current-time").text(
      Math.floor(audio.currentTime / 60) +
        "хв " +
        Math.floor(audio.currentTime % 60) +
        "с"
    );
    $("#duration").text(
      Math.floor(audio.duration / 60) +
        "хв " +
        Math.floor(audio.duration % 60) +
        "с"
    );
    $(".audio__time-progress")
      .stop(true, true)
      .animate(
        { width: ((audio.currentTime + 0.25) / audio.duration) * 100 + "%" },
        250,
        "linear"
      );
  });
});
