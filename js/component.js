(function($) {

  $(window).scroll(function() {
    if(Modernizr.mq('(min-width: 768px)')) {
      if ($(document).scrollTop() > 120) {
        $('#nation-nav-theme').addClass('shrink');
      } else {
        $('#nation-nav-theme').removeClass('shrink');
      }
    }else{
      if ($(document).scrollTop() > 0) {
        $('#nation-nav-theme').addClass('shrink');
      } else {
        $('#nation-nav-theme').removeClass('shrink');
      }
    }
  });
  
  $(window).load(function(){   
    $("#previous-clip").mCustomScrollbar({
      theme:"minimal"
    });

    var active = $('#previous-clip').find('.active');
    $("#previous-clip").mCustomScrollbar("scrollTo", active, {
      scrollInertia:3000
    });    

    $(".js-scroll").mCustomScrollbar({
      theme:"minimal-dark",
      setHeight: 464,
      scrollbarPosition: "outside"
    });
  });

  $(document).ready(function(){

    $(".js-lastestnews").lightSlider({
      item: 1,
      controls: false
    });

    $(".js-activity-detail").lightSlider({
      item: 1,
      gallery: true,
      thumbItem: 4,
      vThumbWidth: 100,
      slideMargin:0,
      adaptiveHeight:true,
      pager: false
    });    

    if(Modernizr.mq('(min-width: 992px)')){
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

    $('.js-tab-btn').tab();
    
    // Tooltips
    $(".js-share-btn").each(function(){
      // if(!$(this).data('tooltipsterNs')){
        $(this).tooltipster({
          interactive: true,
          position: 'bottom',
          trigger: 'click',
          theme: 'tooltipster-shadow',
          content: $(this).parents('.js-share').find('.js-share-dialog'),
          // functionInit: function($button,$dialog){
          //  //bind social share button
          //  Apps.social.bindShareButton($dialog,$button);
          // },
          functionReady: function(){
            $(this).addClass('active');
          },
          functionAfter: function(){
            $(this).removeClass('active');
          },
          minWidth: 0
        }).click(function(e){e.preventDefault();});
      // }
    });

    $('.js-sch-swift').on('click', function(){
      $('.weekend').toggleClass('is-shown');
    });

    $('.js-btn-radio').on('click', function(){
      $('.js-btn-radio').removeClass('is-play');
      $(this).toggleClass('is-play');
    });

    $('#web').select({
      list: 'ext-link'
    })

    //marquee Breakingnewsß
    $(".js-breaking-news-scroll").webTicker({
      speed: 30, 
      moving: true,
      startEmpty:true, 
      hoverpause:true
    }); 

    $(".js-breaking-news-close").on("click", function(){
      $(".breaking-news").addClass("--close");
    });

  });

})(jQuery);