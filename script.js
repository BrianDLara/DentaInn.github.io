// remove animated-logo after 4.5 seconds
setTimeout(() => {
  element = document.getElementById("animated-logo");
  element.remove();
}, 4300);

// nav-bar li's moved to burger icon
const burger = document.getElementById("burger");
const navUL = document.getElementById("nav_list");
const navButton = document.getElementById("nav_listitem_button");

burger.addEventListener("click", () => {
  navUL.classList.toggle("show");
});

burger.addEventListener("click", () => {
  navButton.classList.toggle("show");
});

