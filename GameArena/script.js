function openGamePage(url) {
  window.location.href = url;
}
anchor.addEventListener("click", function (e) {
  document.querySelectorAll(".navbar a").forEach((anchor) => {
    e.preventDefault();
    const targetId = this.getAttribute("href").substring(1);
    const targetSection = document.getElementById(targetId);
    const yOffset = targetSection.getBoundingClientRect().top + window.scrollY;
    window.scrollTo({
      top: yOffset,
      behavior: "smooth",
    });
  });
});
function openGamePage(url) {
  window.location.href = url;
}
function openCartPage(url) {
  window.location.href = url;
}
