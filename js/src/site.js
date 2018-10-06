jQuery(document).ready(function($){

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
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });


  //Parallax scroll
/*
  $(window).scroll(function() {
    if ($( window ).width() >= 1024) {
    	 parallax();
      }
  });

  function parallax(){
    var scrolled = $(window).scrollTop();
  	      $('.bg').css('top',-(scrolled*0.2)+'px');
  	      $('header .content').css('top',15+(scrolled*0.1)+'%');
    		  $('header .content').css('opacity',1-(scrolled*0.01)/10);
          $('header .content').css('opacity',1-(scrolled*0.01)/10);

  	}
*/
});