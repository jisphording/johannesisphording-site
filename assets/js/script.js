// HIDE NAVBAR ON SCROLL
// ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
// First we check for window with (cross browser) to only activate this behavior on smaller screen sizes
const width  = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
const height = window.innerHeight|| document.documentElement.clientHeight|| document.body.clientHeight;

if (width < 768) {
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      document.getElementById("header").style.top = "0";
    } else {
      document.getElementById("header").style.top = "-11rem";
    }
    prevScrollpos = currentScrollPos;
  }
}