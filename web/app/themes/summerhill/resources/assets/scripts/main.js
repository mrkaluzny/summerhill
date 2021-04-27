/* eslint-disable */
// import external dependencies
import "jquery";

// Import everything from autoload
import "./autoload/**/*";

// import local dependencies
import Router from "./util/Router";
import common from "./routes/common";
import home from "./routes/home";
import aboutUs from "./routes/about";

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

function handleMobileMenu() {
  if (window.innerWidth > 1200) return;
  const hamburger = document.getElementById("hamburger");

  hamburger.addEventListener("click", function () {
    console.log("click", this);
    this.parentNode.classList.toggle("is-menu-open");
  });
}
handleMobileMenu();
window.addEventListener("resize", handleMobileMenu);

class Slider {
  constructor(sliderTrack, arrowLeft, arrowRight) {
    this.curr = 0;
    this.sliderTrack = sliderTrack;
    this.arrowLeft = arrowLeft;
    this.arrowRight = arrowRight;
    this.slidesLength = sliderTrack.children.length;
  }

  init() {
    this.arrowLeft.addEventListener("click", () => this.prevSlide());
    this.arrowRight.addEventListener("click", () => this.nextSlide());
  }

  prevSlide() {
    this.curr = this.curr === 0 ? this.slidesLength - 1 : this.curr - 1;
    this.updateTrack();
    this.updateNaviDots();
  }

  nextSlide() {
    this.curr = this.curr === this.slidesLength - 1 ? 0 : this.curr + 1;
    this.updateTrack();
    this.updateNaviDots();
  }

  updateTrack() {
    const slides = Array.from(this.sliderTrack.children);
    slides.forEach((slide) => {
      slide.classList.remove("active");
      if (slides.indexOf(slide) === this.curr) slide.classList.add("active");
    });
  }

  updateNaviDots() {}
}

const sliderTrack = document.getElementById("track");
const arrowLeft = document.getElementById("leftArrow");
const arrowRight = document.getElementById("rightArrow");

const slider = new Slider(sliderTrack, arrowLeft, arrowRight);
slider.init();
