
// Responsive Menu - Dropdown
const body = document.body;
const menu = document.querySelector(".hamburger-menu");
const bar = document.querySelector(".bar");
const nav = document.getElementById("main-navigation");

// Below code for preventing nav from animating on
// browser re-size modified from code found at
// this stackoverflow question and answer:
//
// https://goo.gl/6s3pAZ

menu.addEventListener("click", openMenu);

function openMenu() {
  body.classList.toggle("show");
  nav.classList.toggle("activated");
  bar.classList.toggle("animate");
}


const mql = window.matchMedia("(min-width: 560px)");


mql.addListener(removeTransition);

// Function to remove the transition
// from the navigation when the user
// resizes the browser to desktop
// sizes. In this case when the
// screen width becomes wider then
// 560px
function removeTransition(e) {
  // e -> is the event object
  // e.matches -> stores a true false
  // value depending if the media query
  // list set above matches or not
  if (e.matches) {
    body.classList.remove("show");
    nav.classList.remove("activated");
  }
}

// Prevents the focus state from activating
menu.addEventListener("mousedown", function(e) {
  e.preventDefault();
});