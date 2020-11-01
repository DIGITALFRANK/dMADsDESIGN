

/* ///////////////////////////////////// JQUERY /////////////////////////////////////// */

$(document).ready(function(){

  /* ///////////////////////////////////// SCROLL ANIMATION /////////////////////////////////////// */
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 200, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  /* ///////////////////////////////////// END SCROLL ANIMATION /////////////////////////////////////// */




  /* /////////////////////////////////////////////  QUOTE MACHINE  /////////////////////////////////////////////// */


  var quoteSelections = [
    '" <span>dmadsdesign</span> is a design consultancy, in design we trust "',
    '" design is intelligence made visual, and sometimes invisible "',
    '" if you love design as much as us, check out our <a href="#"><span>shop</span> section</a> "',
    '" perception is the buffer to the illusion of reality "',
    '" design is everywhere, from cities we live in, to table spoons "',
    '" maybe nature was designed by a higher power, maybe not "',
    '" if you think good design is expensive, wait \'til you see the cost of bad design "',
    '" everything has changed, and for the better. discover re-branding "',
    '" design is a competitive advantage, advantage YOU "',
    '" the best art is good business, if Andy Warhol himself says so "',
    '" design solves problems, and simplicity is a solution "',
    '" even intangible things can be designed, like <em>brand perception</em> "',
    '" photography is a design tool, and love doesn\'t cost a thing "'
  ];


  var nQuote = quoteSelections.length, i = 0;
  var displayNextQuote = function() {
      $('#quote-text').html(quoteSelections[i]);  //use current index for showing quote
      i = (i + 1) % nQuote;
      setTimeout(displayNextQuote, 7000);
  }


  displayNextQuote();


/* ///////////////////////////////////////////// end  QUOTE MACHINE /////////////////////////////////////////////// */




});

/* ///////////////////////////////////// END JQUERY /////////////////////////////////////// */











/* ///////////////////////////////////////////// NAV, SEARCH, SHARE ANIMATIONS /////////////////////////////////////////////// */

/* /////////// NAV LIGHTBOX /////////// */

/* Open when someone clicks on the 'menu' element */
function NavIn(el,op) {
    var navelem = document.getElementById(el);
    navelem.style.transition = "right .2s ease-in 0s";
    navelem.style.right = op;
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.right = "100%";
}

/* /////////// END NAV LIGHTBOX /////////// */




/* /////////// SEARCH LIGHTBOX /////////// */

/* Open when someone clicks on the 'menu' element */
function SearchIn(sel,bt) {
    var searchelem = document.getElementById(sel);
    searchelem.style.transition = "bottom .2s ease-in 0s";
    searchelem.style.bottom = bt;
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeSearch() {
    document.getElementById("mySearch").style.bottom = "100%";
}

/* /////////// END SEARCH LIGHTBOX /////////// */




/* /////////// SHARE LIGHTBOX /////////// */

/* Open when someone clicks on the 'menu' element */
function ShareIn(shel,tp) {
    var shareelem = document.getElementById(shel);
    shareelem.style.transition = "top .2s ease-in 0s";
    shareelem.style.top = tp;
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeShare() {
    document.getElementById("myShare").style.top = "100%";
}

/* /////////// END SHARE LIGHTBOX /////////// */




/* /////////// ESC CLOSE  /////////// */
$(document).ready(function(){

  $(document).on('keyup',function(evt) {
      if (evt.keyCode == 27) {
         //alert('Esc key pressed.');
          closeNav();
          closeShare();
          closeSearch();
      }
  });
});

/* /////////// END ESC CLOSE /////////// */

/* ///////////////////////////////////////////// end  NAV, SEARCH, SHARE ANIMATIONS /////////////////////////////////////////////// */







function fuckYou(js) {
  console.log(js);
}


fuckYou('whoever');





















