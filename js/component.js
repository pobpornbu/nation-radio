(function($) {

	// Textarea
	// autosize($('textarea'));
	// $('.js-comment-textarea').on('focus', function() {
	// 	$(this).parent().toggleClass('active');
	// });

  $(window).load(function(){   
    $("#previous-clip").mCustomScrollbar({
      theme:"minimal"
    });
  });

  $(document).ready(function(){
    $(".js-lastestnews").lightSlider({
      item: 1,
      controls: false
    });
    
    // var slider = $(".js-lastest-activity").lightSlider();
    // var slider = $(".js-lastest-activity").lightSlider({
    //   gallery:true,
    //   item:1,
    //   vertical:true,
    //   verticalHeight: 300,
    //   thumbItem:4,
    //   vThumbWidth: 100,
    //   slideMargin:0,
    //   adaptiveHeight:true,
    //   responsive: [
    //     {
    //       breakpoint: 768,
    //       settings: {
    //         vertical: false,
    //         verticalHeight: 0,
    //         item:1
    //       }
    //     },     
    //     {
    //       breakpoint: 320,
    //       settings: {
    //         gallery: false,
    //         item:1
    //       }
    //     }      
    //   ]
    //   // gallery: true,
    //   // item: 1,
    //   // thumbItem: 5
    // });

    // var  
    // settings = {
    //   gallery:true,
    //   item:1,
    //   vertical:true,
    //   verticalHeight: 300,
    //   thumbItem:4,
    //   vThumbWidth: 100,
    //   slideMargin:0,
    //   adaptiveHeight:true
    // },
    // slider = $(".js-lastest-activity").lightSlider();
    // function lightslider(){

      if(Modernizr.mq('(min-width: 992px)')){
        console.log('width 992');
        $(".js-lastest-activity").lightSlider({
          gallery:true,
          item:1,
          vertical:true,
          verticalHeight: 300,
          thumbItem:4,
          vThumbWidth: 100,
          slideMargin:0,
          adaptiveHeight:true,
          controls: false
        });    
      }else if(Modernizr.mq('(min-width: 768px)')){
        console.log('width 768');
        // slider.refresh();
        $(".js-lastest-activity").lightSlider({
          gallery:true,
          item:1,
          thumbItem:5,
          vThumbWidth: 100,
          slideMargin:0,
          adaptiveHeight:true
        });    
      }else if(Modernizr.mq('(min-width: 320px)')){
        console.log('width 320');
        $(".js-lastest-activity").lightSlider({
          gallery: false,
          item:1,
          thumbItem:4,
          vThumbWidth: 100,
          slideMargin:0,
          adaptiveHeight:true,
          pager: false
        });
      }
    //   slider.refresh();
    // }

    // $(window).on("orientationchange load resize", function () {
    //   lightslider();
    // });
    // var  
    // settings = {
    //   gallery:true,
    //   item:1,
    //   vertical:true,
    //   verticalHeight: 300,
    //   thumbItem:4,
    //   vThumbWidth: 100,
    //   slideMargin:0,
    //   adaptiveHeight:true,
    //   responsive: [
    //     {
    //       breakpoint: 768,
    //       settings: {
    //         vertical: false,
    //         verticalHeight: 0,
    //         item:1
    //       }
    //     },     
    //     {
    //       breakpoint: 320,
    //       settings: {
    //         gallery: false,
    //         item:1
    //       }
    //     }      
    //   ]
    // },
    // slider = $(".js-lastest-activity").lightSlider(settings);


    // $(window).on("orientationchange load resize", function () {
    //   var w = $(document).width();
    //   setTimeout(function(){
    //     if(w >= 992 ){}
    //     slider.refresh();
    //   }, 100)
    // }).trigger("resize");      

    // var smSettings = {
    //     minSlides : 4,
    //     maxSlides   : 4,
    //     moveSlides : 1,
    //     responsive : true,
    //     captions : true,
    //     pagerCustom: '#bx-pager'
    // },
    // lgSettings = {
    //     minSlides : 4,
    //     maxSlides   : 4,
    //     moveSlides : 1,
    //     responsive : true,
    //     captions : true,
    //     pagerCustom: '#bx-pager'
    // },
    // $('.js-lastest-activity').bxSlider( {
    //     minSlides : 4,
    //     maxSlides   : 4,
    //     moveSlides : 1,
    //     responsive : true,
    //     captions : true,
    //     pagerCustom: '#bx-pager'
    // } );
    // $(window).resize( function() {
    //     var w = $(window).innerWidth();
    //     setTimeout(function(){
    //         slider.destroySlider();
    //         slider.reloadSlider();
    //         // if(w >= 768) {
    //         //   slider.destroySlider();
    //         //   slider.reloadSlider( lgSettings );              
    //         // }
    //     }, 100)
    // }).trigger("resize");
    $('.js-tab-btn').tab();
  });

  $(window).scroll(function() {
    if ($(document).scrollTop() > 658) {
      $('#nation-nav-theme').addClass('shrink');
    } else {
      $('#nation-nav-theme').removeClass('shrink');
    }
  });
  
})(jQuery);