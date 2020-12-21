/*
This is a super simple slider using Ken Wheeler's "Slick Slider." 
It's responsive, swipable and light weight.

Visit Ken's site for the source code and docs. 

Source: https://kenwheeler.github.io/slick/

*/


/*
The following executes Ken's Slick Slider with several options.
*/

$('.quotes').slick({
  dots: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 6000,
  speed: 800,
  slidesToShow: 1,
  adaptiveHeight: true
});


/*
To prevent the flashing of unstyled content (FOUC) I created a class ".no-fouc"
which hides the slider.  When everything is ready to roll, I simply remove the
.no-fouc class from the slider section using the script below.  I placed the CSS snippet in the head of the HTML
page so that it's loaded before other things for obvious reasons.  What about folks with JS turned off?  
Well, I don't worry about them too much anymore.  Oh my.  I feel the heat from the flames already.  :) 
*/

$( document ).ready(function() {
$('.no-fouc').removeClass('no-fouc');
});