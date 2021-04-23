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
