const menuBtn = document.querySelector("#js-menu-btn");
const menuBar = document.querySelector(".menu-side-bar");

menuBtn.addEventListener("click", () => {
  if (!menuBar.classList.contains("active")) {
    menuBar.classList.add("active");
  } else {
    menuBar.classList.remove("active")
  }
});