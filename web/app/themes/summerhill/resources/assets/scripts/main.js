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
import { ID } from "webpack/lib/ModuleFilenameHelpers";
import * as Hammer from "hammerjs";

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
  const hamburger = document.getElementById("hamburger");

  hamburger.addEventListener("click", function () {
    if (window.outerWidth > 1200) return;
    this.parentNode.classList.toggle("is-menu-open");
    const overflow = this.parentNode.classList.contains("is-menu-open")
      ? "hidden"
      : "scroll";
    document.body.style.overflowY = overflow;
  });
}
handleMobileMenu();
window.addEventListener("resize", handleMobileMenu);

class Slider {
  constructor(args) {
    this.curr = 0;
    this.sliderTrack = args.sliderTrack;
    this.arrowLeft = args.arrowLeft;
    this.arrowRight = args.arrowRight;
    this.slidesLength = args.slides.length;
    this.slides = Array.from(args.slides);
    this.dots = Array.from(args.dots.children);
  }

  init() {
    this.arrowLeft.addEventListener("click", () => this.prevSlide());
    this.arrowRight.addEventListener("click", () => this.nextSlide());

    this.dots.forEach((dot) => {
      dot.addEventListener("click", () => this.dotClick(dot));
    });

    this.initHammer();
  }

  initHammer() {
    var hammertime = new Hammer(this.sliderTrack, {});
    hammertime.get("swipe").set({ enable: true });
    hammertime.get("swipe").set({ direction: Hammer.DIRECTION_HORIZONTAL });

    hammertime.on("swipe", (e) => this.handleSwipe(e));
  }

  handleSwipe(e) {
    if (e.deltaX > 0) {
      this.prevSlide();
    } else {
      this.nextSlide();
    }
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

  dotClick(dot) {
    this.curr = +dot.dataset.key;
    this.updateTrack();
    this.updateNaviDots();
  }

  updateTrack() {
    if (window.innerWidth < 992) {
      this.sliderTrack.style.transform = `translateX(
        calc(${this.curr * -100}% 
          + ${this.curr * -5}rem))`;
    } else {
      this.slides.forEach((slide) => {
        slide.classList.remove("active");
        if ([...this.slides].indexOf(slide) === this.curr) {
          slide.classList.add("active");
        }
      });
    }
  }

  updateNaviDots() {
    this.dots.forEach((dot) => {
      const key = dot.dataset.key;
      const action = key == this.curr ? "add" : "remove";
      dot.classList[action]("active");
    });
  }
}

const sliderTrack = document.getElementById("track");

if (sliderTrack) {
  const arrowLeft = document.getElementById("leftArrow");
  const arrowRight = document.getElementById("rightArrow");
  const dots = document.getElementById("testimonials__dots");
  const slides = document.querySelectorAll(".testimonials__track__testimonial");

  const slider = new Slider({
    sliderTrack,
    arrowLeft,
    arrowRight,
    dots,
    slides,
  });
  slider.init();
}
