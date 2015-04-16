jQuery(document).ready(function($) {
  var onComplete = function() {
    $('.product-gallery-fade').fadeIn(1000);
  };

  $('.bar').animate({
      'width': '100%'
    },
    1000,
    'swing',
    onComplete
  );
});


//fadein for small screen

jQuery(document).ready(function($) {
  $('.product-gallery-fade-small').fadeIn(1000);
});


jQuery(document).ready(function($) {

  // site preloader -- also uncomment the div in the header and the css style for #preloader
  $(window).load(function() {
    $('#preloader').fadeOut('fast', function() {
      $(this).remove();
    });
  });

});
