(function($) {

	// Textarea
	autosize($('textarea'));
	$('.js-comment-textarea').on('focus', function() {
		$(this).parent().toggleClass('active');
	});

  $(window).load(function(){   
    $("#previous-clip").mCustomScrollbar({
      theme:"minimal"
    });
  });

  $(window).scroll(function() {
    if ($(document).scrollTop() > 658) {
      $('#nation-nav-theme').addClass('shrink');
    } else {
      $('#nation-nav-theme').removeClass('shrink');
    }
  });
  
})(jQuery);