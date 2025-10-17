document.addEventListener("DOMContentLoaded", () => {
  document.querySelector("#exploreId").addEventListener("click", (e) => {
    e.preventDefault();
    document.querySelector("#about").scrollIntoView({
      behavior: "smooth",
    });
  });
  const scrollDown = document.getElementById("scrollDown");
  if (scrollDown) {
    scrollDown.addEventListener("click", () => {
      document.querySelector("#about").scrollIntoView({
        behavior: "smooth",
      });
    });
  }
});
const aboutBtn = document.getElementById("aboutBtn");
const text = "About Our Festival";
let index = 0;
let growing = true;

function animateButton() {
  if (!aboutBtn) return;

  if (index <= text.length && growing) {
    aboutBtn.textContent = text.slice(0, index);
    aboutBtn.style.transform = `scale(${1 + index * 0.01})`;
    index++;
  } else {
    growing = false;
    aboutBtn.textContent = text.slice(0, index);
    aboutBtn.style.transform = `scale(${1 + index * 0.01})`;
    index--;
  }

  if (index <= 0) {
    growing = true;
  }

  setTimeout(animateButton, 120);
}
animateButton();
if (aboutBtn) {
  aboutBtn.addEventListener("click", () => {
    document.querySelector("#about").scrollIntoView({
      behavior: "smooth",
    });
  });
}
const canvas = document.getElementById("stars");
const ctx = canvas.getContext("2d");
let stars = [];

function resizeCanvas() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
}
window.addEventListener("resize", resizeCanvas);
resizeCanvas();

function createStars() {
  stars.push({
    x: Math.random() * canvas.width,
    y: 0,
    size: Math.random() * 2,
    speed: 1 + Math.random() * 2,
    opacity: 0.4 + Math.random() * 0.6,
  });
}

function drawStars() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.fillStyle = "rgba(255, 200, 230, 0.8)";
  stars.forEach((star) => {
    ctx.globalAlpha = star.opacity;
    ctx.beginPath();
    ctx.arc(star.x, star.y, star.size, 0, Math.PI * 2);
    ctx.fill();
  });
}

function updateStars() {
  stars.forEach((star) => {
    star.y += star.speed;
    if (star.y > canvas.height) star.y = 0;
  });
}

function animateStars() {
  if (Math.random() < 0.2) createStars();
  updateStars();
  drawStars();
  requestAnimationFrame(animateStars);
}
animateStars();
function revealOnScroll() {
  const reveals = document.querySelectorAll(
    ".reveal, .zoom-reveal, .slide-left, .slide-right"
  );
  const windowHeight = window.innerHeight;

  reveals.forEach((el) => {
    const elementTop = el.getBoundingClientRect().top;
    const revealPoint = 150;

    if (elementTop < windowHeight - revealPoint) {
      el.classList.add("active");
    }
  });
}

window.addEventListener("scroll", revealOnScroll);
window.addEventListener("load", revealOnScroll);
