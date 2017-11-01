const toggleBtn = document.querySelector(".js-nav-toggle-btn");
const mainNav = document.querySelector(".js-main-nav");

toggleBtn.addEventListener("click", () => {
  mainNav.classList.toggle("show");
});

$(window).click(function(event) {
  if (!event.target.matches(".header *")) {
    mainNav.classList.remove("show");
  }
});
