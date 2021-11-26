AOS.init();

let popup = document.getElementById("pop-up");

function closePopUp() {
  if (popup.style.display != "none") {
    popup.style.display = "none";
  } else {
    popup.style.display = "block";
  }
}
