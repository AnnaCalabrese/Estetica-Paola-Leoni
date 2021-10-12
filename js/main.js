const hamburger = document.querySelector(".hamburger-btn");
const nav = document.querySelector(".ul-list");

const menu = () => {
  nav.classList.toggle("open");
};

hamburger.addEventListener("click", menu);
