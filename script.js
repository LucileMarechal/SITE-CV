AOS.init();

let popup = document.getElementById("pop-up");

let experience = document.getElementById("experience");
let detail = document.getElementById("detail");

function closePopUp() {
  if (popup.style.display != "none") {
    popup.style.display = "none";
  } else {
    popup.style.display = "block";
  }
}
