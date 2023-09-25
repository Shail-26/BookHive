let button = document.getElementById("scrollBtn");

window.addEventListener("scroll" , function () {
  if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
});

button.addEventListener("click", function () {
  scrollToTop();
});

function scrollToTop() {
  const currentScroll = document.documentElement.scrollTop || document.body.scrollTop;

  if(currentScroll > 0) {
    window.requestAnimationFrame(scrollToTop);
    window.scrollTo(0, currentScroll - currentScroll / 8);
  }
}