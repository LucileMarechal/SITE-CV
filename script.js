AOS.init();

var popup = document.getElementById("pop-up");

function closePopUp() {
  if (popup.style.display != "none") {
    popup.style.display = "none";
  } else {
    popup.style.display = "block";
  }
}

let experience1 = document.getElementById("experience1");
let experience2 = document.getElementById("experience2");
let experience3 = document.getElementById("experience3");
let experience4 = document.getElementById("experience4");

let detail1 = document.getElementById("detail1");
let detail2 = document.getElementById("detail2");
let detail3 = document.getElementById("detail3");
let detail4 = document.getElementById("detail4");

experience1.addEventListener("click", () => {
  if (getComputedStyle(detail1).display != "block") {
    detail1.style.display = "block";
  } else {
    detail1.style.display = "none";
  }
});

experience2.addEventListener("click", () => {
  if (getComputedStyle(detail2).display != "block") {
    detail2.style.display = "block";
  } else {
    detail2.style.display = "none";
  }
});

experience3.addEventListener("click", () => {
  if (getComputedStyle(detail3).display != "block") {
    detail3.style.display = "block";
  } else {
    detail3.style.display = "none";
  }
});

experience4.addEventListener("click", () => {
  if (getComputedStyle(detail4).display != "block") {
    detail4.style.display = "block";
  } else {
    detail4.style.display = "none";
  }
});
