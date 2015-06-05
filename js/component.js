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

})(jQuery);