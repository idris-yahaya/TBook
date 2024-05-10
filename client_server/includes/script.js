/* ---------- Global JS ----------  */

"use strict";

// Navigation Menu Toggle
const navToggleBtn = document.querySelector("[data-nav-toggle-btn]");
const header = document.querySelector("[data-header]");

navToggleBtn.addEventListener("click", function () {
  this.classList.toggle("active");
  header.classList.toggle("active");
});


// Navigation Bar Sticky Scroll
window.addEventListener("scroll", () => {
    if (document.documentElement.scrollTop > 20) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  });

// Remove 'current-page' Indicator From all Header Nav Links
var links = document.querySelectorAll('.navbar-link');
for (var i = 0; i < links.length; i++) {
    links[i].classList.remove('current-page');
}

// Add 'current-page' Indicator to the Active Header Nav Link
var currentUrl = new URL(window.location.href).href.split('#')[0];
for (var i = 0; i < links.length; i++) {
    var linkUrl = new URL(links[i].href).href.split('#')[0];
    if (currentUrl === linkUrl) {
        links[i].classList.add('current-page');
        break;
    }
}
