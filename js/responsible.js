$(document).ready(function () {
  let logo = document.querySelector(".logo");
  if (window.innerWidth >= 1610) {
    logo.setAttribute("camera-orbit", "90deg 96deg 2m");
  }
  if (window.innerWidth <= 1440) {
    logo.setAttribute("camera-orbit", "90deg 96deg 7m");
  }
  if (window.innerWidth <= 1124) {
    logo.setAttribute("camera-orbit", "90deg 96deg 13m");
  }
  if (window.innerWidth <= 768) {
    logo.setAttribute("camera-orbit", "90deg 96deg 6m");
  }
  if (window.innerWidth <= 500) {
    logo.setAttribute("camera-orbit", "90deg 96deg 1m");
  }
  if (window.innerWidth <= 350) {
    logo.setAttribute("camera-orbit", "90deg 96deg 7m");
  }
});
