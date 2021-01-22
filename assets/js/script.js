// HIDE NAVBAR ON SCROLL
// ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
// When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar
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
};

// ADD CLASSES TO NAVBAR ON SCROLL
// ----- ----- ----- ----- ----- ----- ----- ----- ----- -----

var new_scroll_position = 0;
var last_scroll_position;
var header = document.getElementById("header");

window.addEventListener('scroll', function(e) {
  last_scroll_position = window.scrollY;

  // Scrolling down
  if (new_scroll_position < last_scroll_position && last_scroll_position > 80) {
    // header.removeClass('slideDown').addClass('slideUp');
    header.classList.remove("navigation--down");
    header.classList.add("navigation--up");

  // Scrolling up
  } else if (new_scroll_position > last_scroll_position) {
    // header.removeClass('slideUp').addClass('slideDown');
    header.classList.remove("navigation--up");
    header.classList.add("navigation--down");
  }; 
  
  // Check if on top of page
  if (new_scroll_position < 20) {
    header.classList.add("navigation--zero");
  } else if (new_scroll_position > 20) {
    header.classList.remove("navigation--zero");
  }

  new_scroll_position = last_scroll_position;
});