// Multi-Step Form Navigation Script

const pages = document.querySelectorAll(".form-page");
const nextBtns = document.querySelectorAll(".next-btn");
const prevBtns = document.querySelectorAll(".prev-btn");
let current = 0;

// Show next page
nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (current < pages.length - 1) {
      pages[current].classList.remove("active");
      current++;
      pages[current].classList.add("active");
      window.scrollTo(0, 0);
    }
  });
});

// Show previous page
prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (current > 0) {
      pages[current].classList.remove("active");
      current--;
      pages[current].classList.add("active");
      window.scrollTo(0, 0);
    }
  });
});
