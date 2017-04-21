$(document).ready(function() {
        
        var map = new GMaps({
          div: '.map',
          lat: 29.759282,
          lng: -94.85,
          zoom: 10
        });
    
        map.addMarker({
          lat: 29.759282,
          lng: -95.369694,
          title: 'Houston',
          infoWindow: {
              content: '<p>Language Ambassadors Location</p>'
            }
        });
    
    Hyphenator.run();

    $(function(){
		$(".typed").typed({
			strings: ["Le barriere linguistiche mai sono<br> stato cosi sottili", "Language barriers never were so thin", "Las barreras del idioma nunca han <br> sido tan delgadas." ],
			typeSpeed: 10,
            backSpeed: 0
		});
	});
    
    
    /* NAV BAR ANIMATIONS */
    
     $('.js--nav-home').click(function(){
       $('html, body').animate({scrollTop: $('.js--home').offset().top}, 1500);
    });
    
    $('.js--nav-services').click(function(){
       $('html, body').animate({scrollTop: $('.js--services').offset().top -100}, 1500);
    });
    
    $('.js--nav-management').click(function(){
       $('html, body').animate({scrollTop: $('.js--management').offset().top -100}, 1500); 
    });
    
    $('.js--nav-contact').click(function(){
       $('html, body').animate({scrollTop: $('.js--contact').offset().top -100}, 1500);  
    });
    
    $('.js--info-translation').click(function(){
       $('html, body').animate({scrollTop: $('.js--translation-service').offset().top -205}, 1500);  
    });
    
    $('.js--info-interpretation').click(function(){
       $('html, body').animate({scrollTop: $('.js--interpretation-service').offset().top -205}, 1500);  
    });
    
    
    
    /* MOBILE NAVBAR ANIMATIONS */
    
    
    
    $('.mobile_nav_icon').click(function(){
        
        var mobileMenu = $('.mobile_nav_icon').attr('rel');
        var mobileActive = $('.js--rowM-mobile').exists();
        
        $('.'+mobileMenu).toggle('slide', {direction: 'up'}, 1000);
        
        if(mobileActive === false){
            $('.rowM').animate({height:235}, 1000);
            $('.rowM').addClass('js--rowM-mobile');
        }else{
            $('.rowM').animate({height:68}, 1000);
            $('.rowM').removeClass('js--rowM-mobile');
        }
        
    });
    

    
   
    /*  GET QUOTE ANIMATIONS */
    
    
    
    
    $('.js--nav-quote').click(function(){
        $('.js--getQuote').toggle('slide', {direction: 'right'}, 1000);
    });
    
    
    $(".js--generalQuote_btn").click(function(){
        
        var window = $(this).attr('rel');
        var activeContainer = $('.js--active').exists();
        
        if( activeContainer === false ){
                $('.'+window).show('slide', {direction: 'right'}, 1000, function(){
                    $(this).addClass('js--active');
                });
        }else{
    
            $('.js--quote-container.js--active').hide('slide', {direction: 'right'}, 500, function(){
                $(this).removeClass('js--active');
                $('.'+window).show('slide', {direction: 'right'}, 1000, function(){
                    $(this).addClass('js--active');
                });
            });
        } 
    });
    
    
    $(".js--close_general").click(function(){
       var window = $(this).attr('rel');
        $('.'+window).hide('slide', {direction: 'right'}, 1000);
    });
    
    
   /* management more */ 
    
    $('.management_more').click(function(){
       $('#moreInfo').dialog({width: 600, title: "Algunos de los eventos en los que Rosanna ha interpretado:", draggable: false});
    });
    

    
    /* FOOTER ANIMATION */
    
     $('.js--backTop').click(function(){
       $('html, body').animate({scrollTop: $('.js--home').offset().top}, 1500);
    });
    
    
    
});

$.fn.exists = function () {
    return this.length !== 0;
}