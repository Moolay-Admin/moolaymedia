/*
$(document).ready(function() {
    function hoverAnimation() {
      var menuItemsShape = $(".js-shape"),
        linksWrapper = $(".js-menu-items-wrapper"),
        linksItems = $(".js-menu-item"),
        activeItem = $(".js-menu-item.active"),
        activeItemPosition = activeItem.position().left,
        menuItemsShapePath = $(".js-items-shape-path");
    
      TweenMax.set(menuItemsShape, {
        x: activeItemPosition
      });
    
      linksItems.on({
        mouseenter: function() {
          _self = $(this);
          var selfParent = _self.closest(linksWrapper),
            targetCircle = selfParent.find(menuItemsShape),
            circlePosition;
    
          if ($(window).width() < 800) {
            circlePosition = _self.position().top;
            TweenMax.to(targetCircle, 0.6, {
              y: circlePosition,
              ease: Power2.easeOut
            });
          } else {
            circlePosition = _self.position().left;
            TweenMax.to(targetCircle, 0.6, {
              x: circlePosition,
              ease: Power2.easeOut
            });
          }
    
          TweenMax.to(menuItemsShapePath, 1);
        }
      });
    
      linksWrapper.on({
        mouseleave: function() {
          _self = $(this);
          var selfParent = _self.closest(linksWrapper),
            activeLink = selfParent.find(activeItem),
            targetCircle = selfParent.find(menuItemsShape),
            activeLinkPosition = activeLink.position().left;
    
          if ($(window).width() < 800) {
           TweenMax.to(targetCircle, 0.6, {
            y: activeLinkPosition,
            ease: Power2.easeOut
          });
          } else {
           TweenMax.to(targetCircle, 0.6, {
            x: activeLinkPosition,
            ease: Power2.easeOut
          });
          }
    
          TweenMax.to(menuItemsShapePath, 1);
        }
      });
    
    }
    
    hoverAnimation();

});*/

/*$(document).ready(function() {
    var movementStrength = 25;
    var height = movementStrength / $(window).height();
    var width = movementStrength / $(window).width();
    $(".project-image").mousemove(function(e){
      var pageX = e.pageX - ($(window).width() / 2);
      var pageY = e.pageY - ($(window).height() / 2);
      var newvalueX = width * pageX * -1 - 25;
      var newvalueY = height * pageY * -1 - 50;
      $('.project-image').css("transform", "rotateX(" + newvalueX + "deg) rotateY(" + newvalueY + "deg)");
    });
});*/
    
if ($(window).width() > 1200) {
    const scroll = new LocomotiveScroll({
        el: document.querySelector('#js-scroll'),
        smooth: true,
        getSpeed: false,
        getDirection: true,
        useKeyboard: true
    });
    scroll.scrollTo('#hero'); 
    setTimeout(function(){ 
        scroll.update();
    }, 1000);
    setTimeout(function(){ 
        scroll.update();
    }, 2000);
    setTimeout(function(){ 
        scroll.update();
    }, 3000);
    setTimeout(function(){ 
        scroll.update();
    }, 4000);
	$( window ).resize(function() {
      scroll.update();
    });
	$('.menu-button').click(function(){
		
		var $this = $( this );
		
		if ($this.hasClass('active')){
			$('#menu-container').removeClass('active');
			scroll.start();
		} else{
			$('#menu-container').addClass('active');
			scroll.stop();
		}
		$this.toggleClass('active');
	});
    $('#menu-dark-bg').click(function(event) {
      $("body").find("#menu-container").removeClass("active");
      $(".menu-button").removeClass("active");
      scroll.start();
    });
    setTimeout(function(){     
        scroll.on('scroll', (instance) => {
            
            const scrolledTop = instance.scroll.y;
            var windowHeight = window.innerHeight - 40;
            var hero = $('.gl-lodge-home');
            
            function colorScroll() {
                if (
                    $(".color-change-1").length && $(".color-change-1").offset().top >= (-$(window).height() / 2) && $(".color-change-1").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-2").length && $(".color-change-2").offset().top >= (-$(window).height() / 2) && $(".color-change-2").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-3").length && $(".color-change-3").offset().top >= (-$(window).height() / 2) && $(".color-change-3").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-4").length && $(".color-change-4").offset().top >= (-$(window).height() / 2) && $(".color-change-4").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-5").length && $(".color-change-5").offset().top >= (-$(window).height() / 2) && $(".color-change-5").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-6").length && $(".color-change-6").offset().top >= (-$(window).height() / 2) && $(".color-change-6").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-7").length && $(".color-change-7").offset().top >= (-$(window).height() / 2) && $(".color-change-7").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-8").length && $(".color-change-8").offset().top >= (-$(window).height() / 2) && $(".color-change-8").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-9").length && $(".color-change-9").offset().top >= (-$(window).height() / 2) && $(".color-change-9").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-10").length && $(".color-change-10").offset().top >= (-$(window).height() / 2) && $(".color-change-10").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-11").length && $(".color-change-11").offset().top >= (-$(window).height() / 2) && $(".color-change-11").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-12").length && $(".color-change-12").offset().top >= (-$(window).height() / 2) && $(".color-change-12").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-13").length && $(".color-change-13").offset().top >= (-$(window).height() / 2) && $(".color-change-13").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-14").length && $(".color-change-14").offset().top >= (-$(window).height() / 2) && $(".color-change-14").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-15").length && $(".color-change-15").offset().top >= (-$(window).height() / 2) && $(".color-change-15").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-16").length && $(".color-change-16").offset().top >= (-$(window).height() / 2) && $(".color-change-16").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-17").length && $(".color-change-17").offset().top >= (-$(window).height() / 2) && $(".color-change-17").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-18").length && $(".color-change-18").offset().top >= (-$(window).height() / 2) && $(".color-change-18").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-19").length && $(".color-change-19").offset().top >= (-$(window).height() / 2) && $(".color-change-19").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-20").length && $(".color-change-20").offset().top >= (-$(window).height() / 2) && $(".color-change-20").offset().top <= $(window).height() / 2
                    ||
                    $("footer.color-change").offset().top >= (-$(window).height() / 2) && $("footer.color-change").offset().top <= $(window).height() / 2
                ) {
                    $("body").addClass("white-menu");
                }
                else {
                    $("body").removeClass("white-menu");    
                }
            }
            colorScroll();
            
            if(scrolledTop >= 200) {
              	$('.menu-button.top-screen').addClass('hide');      
              	$('.logo-moolay').addClass('hide');      
              	$('.menu-button.middle-screen').addClass('show');      
              	$('.scroll-to-top-sidebar').addClass('show');      
            } else {
              	$('.menu-button.top-screen').removeClass('hide');      
              	$('.logo-moolay').removeClass('hide');      
              	$('.menu-button.middle-screen').removeClass('show');      
              	$('.scroll-to-top-sidebar').removeClass('show');      
            }
            
            if($('.activateAutoplay').hasClass('is-inview')){
                $('.services-slider').slick("slickPlay");
            }
            if($('.activateAutoplayTeam').hasClass('is-inview')){
                $('.team-slider').slick("slickPlay");
            }
        });
        $( document ).ready(function() {
            function colorScroll() {
                if (
                    $(".color-change-1").length && $(".color-change-1").offset().top >= (-$(window).height() / 2) && $(".color-change-1").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-2").length && $(".color-change-2").offset().top >= (-$(window).height() / 2) && $(".color-change-2").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-3").length && $(".color-change-3").offset().top >= (-$(window).height() / 2) && $(".color-change-3").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-4").length && $(".color-change-4").offset().top >= (-$(window).height() / 2) && $(".color-change-4").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-5").length && $(".color-change-5").offset().top >= (-$(window).height() / 2) && $(".color-change-5").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-6").length && $(".color-change-6").offset().top >= (-$(window).height() / 2) && $(".color-change-6").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-7").length && $(".color-change-7").offset().top >= (-$(window).height() / 2) && $(".color-change-7").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-8").length && $(".color-change-8").offset().top >= (-$(window).height() / 2) && $(".color-change-8").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-9").length && $(".color-change-9").offset().top >= (-$(window).height() / 2) && $(".color-change-9").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-10").length && $(".color-change-10").offset().top >= (-$(window).height() / 2) && $(".color-change-10").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-11").length && $(".color-change-11").offset().top >= (-$(window).height() / 2) && $(".color-change-11").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-12").length && $(".color-change-12").offset().top >= (-$(window).height() / 2) && $(".color-change-12").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-13").length && $(".color-change-13").offset().top >= (-$(window).height() / 2) && $(".color-change-13").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-14").length && $(".color-change-14").offset().top >= (-$(window).height() / 2) && $(".color-change-14").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-15").length && $(".color-change-15").offset().top >= (-$(window).height() / 2) && $(".color-change-15").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-16").length && $(".color-change-16").offset().top >= (-$(window).height() / 2) && $(".color-change-16").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-17").length && $(".color-change-17").offset().top >= (-$(window).height() / 2) && $(".color-change-17").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-18").length && $(".color-change-18").offset().top >= (-$(window).height() / 2) && $(".color-change-18").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-19").length && $(".color-change-19").offset().top >= (-$(window).height() / 2) && $(".color-change-19").offset().top <= $(window).height() / 2
                    ||
                    $(".color-change-20").length && $(".color-change-20").offset().top >= (-$(window).height() / 2) && $(".color-change-20").offset().top <= $(window).height() / 2
                    ||
                    $("footer.color-change").offset().top >= (-$(window).height() / 2) && $("footer.color-change").offset().top <= $(window).height() / 2
                ) {
                    $("body").addClass("white-menu");
                }
                else {
                    $("body").removeClass("white-menu");    
                }
            }
            colorScroll();
        });
        
        $('.scroll-to-top-sidebar').click(function(){
             scroll.scrollTo("top");
        });
        
        $(".service-modal-home").each(function(index) {
            $(this).on("click", function(){
                // For the boolean value
                var $section = $('#servicesHome');
                var $this = $(this);
                $section.addClass('service-modal-open');
                
                $('.menu-button').css('visibility', 'hidden');
                $('.c-scrollbar').css('visibility', 'hidden');
                
                $(".service-modal-home").removeClass('active');
                $(".service-modal-home").addClass('hidden');
                
                $(this).removeClass('hidden');
                $(this).addClass('active');
                
                scroll.scrollTo('#servicesHome');
                setTimeout(function(){
                    scroll.stop()
                }, 500);
                
                if($(this).hasClass('section-modal-cc') || $(this).hasClass('section-modal-mm')){
                    $(".cancel-service").addClass('white');      
                }else {
                    $(".cancel-service").removeClass('white');    
                }
            });
        });
        $(".cancel-service").on("click", function(){
            // For the boolean value
            var $section = $('#servicesHome');
            $section.removeClass('service-modal-open');
            
            $('.menu-button.middle-screen').css('visibility', 'visible');
            $('.c-scrollbar').css('visibility', 'visible');
            
            $(".service-modal-home").removeClass('hidden');
            $(".service-modal-home").removeClass('active');
            
            setTimeout(function(){
                scroll.start();
            }, 500);
        });
    }, 1000);
    
    document.documentElement.classList.add('is-loaded');
    document.documentElement.classList.remove('is-loading');

    setTimeout(() => {
        document.documentElement.classList.add('is-ready');
    },300)
    
    setTimeout(() => window.dispatchEvent(new Event('resize')), 10);

    setTimeout(() => {

        scroll.on('scroll', (instance) => {
            const progress = 360 * instance.scroll.y / instance.limit;

            document.documentElement.setAttribute('data-direction', instance.direction)

        });

        /*scroll.on('call', (value, way, obj) => {
            if (value === 'dynamicBackground') {
                if(way === 'enter') {
                    dynamicBackgrounds.push({
                        id: obj.id,
                        el: obj.el
                    });
                } else {
                    for (var i = 0; i < dynamicBackgrounds.length; i++) {
                        if(obj.id === dynamicBackgrounds[i].id) {
                            dynamicBackgrounds.splice(i,1);
                        }
                    }
                }
            } else if (value === 'dynamicColor') {
                if(way === 'enter') {
                    dynamicColorElements.push({
                        id: obj.id,
                        el: obj.el
                    });
                } else {
                    for (var i = 0; i < dynamicColorElements.length; i++) {
                        if(obj.id === dynamicColorElements[i].id) {
                            dynamicColorElements.splice(i,1);
                        }
                    }
                }
            }
        });*/

    }, 1000);
} else {
    /*$(window).scroll(function(){
        function scrollColor() {
            if (
                $(".color-change-1").length && ($(window).scrollTop() > $(".color-change-1").offset().top - 30 && $(window).scrollTop() < ($(".color-change-1").offset().top + $(".color-change-1").outerHeight(true) - 30))
                ||
                $(".color-change-2").length && ($(window).scrollTop() > $(".color-change-2").offset().top - 30 && $(window).scrollTop() < ($(".color-change-2").offset().top + $(".color-change-2").outerHeight(true) - 30))
                ||
                $(".color-change-3").length && ($(window).scrollTop() > $(".color-change-3").offset().top - 30 && $(window).scrollTop() < ($(".color-change-3").offset().top + $(".color-change-3").outerHeight(true) - 30))
                ||
                $(".color-change-4").length && ($(window).scrollTop() > $(".color-change-4").offset().top - 30 && $(window).scrollTop() < ($(".color-change-4").offset().top + $(".color-change-4").outerHeight(true) - 30))
                ||
                $(".color-change-5").length && ($(window).scrollTop() > $(".color-change-5").offset().top - 30 && $(window).scrollTop() < ($(".color-change-5").offset().top + $(".color-change-5").outerHeight(true) - 30))
                ||
                $(".color-change-6").length && ($(window).scrollTop() > $(".color-change-6").offset().top - 30 && $(window).scrollTop() < ($(".color-change-6").offset().top + $(".color-change-6").outerHeight(true) - 30))
                ||
                $(".color-change-7").length && ($(window).scrollTop() > $(".color-change-7").offset().top - 30 && $(window).scrollTop() < ($(".color-change-7").offset().top + $(".color-change-7").outerHeight(true) - 30))
                ||
                $(".color-change-8").length && ($(window).scrollTop() > $(".color-change-8").offset().top - 30 && $(window).scrollTop() < ($(".color-change-8").offset().top + $(".color-change-8").outerHeight(true) - 30))
                ||
                $(".color-change-9").length && ($(window).scrollTop() > $(".color-change-9").offset().top - 30 && $(window).scrollTop() < ($(".color-change-9").offset().top + $(".color-change-9").outerHeight(true) - 30))
                ||
                $(".color-change-10").length && ($(window).scrollTop() > $(".color-change-10").offset().top - 30 && $(window).scrollTop() < ($(".color-change-10").offset().top + $(".color-change-10").outerHeight(true) - 30))
                ||
                $(".color-change-11").length && ($(window).scrollTop() > $(".color-change-11").offset().top - 30 && $(window).scrollTop() < ($(".color-change-11").offset().top + $(".color-change-11").outerHeight(true) - 30))
                ||
                $(".color-change-12").length && ($(window).scrollTop() > $(".color-change-12").offset().top - 30 && $(window).scrollTop() < ($(".color-change-12").offset().top + $(".color-change-12").outerHeight(true) - 30))
                ||
                $(".color-change-13").length && ($(window).scrollTop() > $(".color-change-13").offset().top - 30 && $(window).scrollTop() < ($(".color-change-13").offset().top + $(".color-change-13").outerHeight(true) - 30))
                ||
                $(".color-change-14").length && ($(window).scrollTop() > $(".color-change-14").offset().top - 30 && $(window).scrollTop() < ($(".color-change-14").offset().top + $(".color-change-14").outerHeight(true) - 30))
                ||
                $(".color-change-15").length && ($(window).scrollTop() > $(".color-change-15").offset().top - 30 && $(window).scrollTop() < ($(".color-change-15").offset().top + $(".color-change-15").outerHeight(true) - 30))
                ||
                $(".color-change-16").length && ($(window).scrollTop() > $(".color-change-16").offset().top - 30 && $(window).scrollTop() < ($(".color-change-16").offset().top + $(".color-change-16").outerHeight(true) - 30))
                ||
                $(".color-change-17").length && ($(window).scrollTop() > $(".color-change-17").offset().top - 30 && $(window).scrollTop() < ($(".color-change-17").offset().top + $(".color-change-17").outerHeight(true) - 30))
                ||
                $(".color-change-18").length && ($(window).scrollTop() > $(".color-change-18").offset().top - 30 && $(window).scrollTop() < ($(".color-change-18").offset().top + $(".color-change-18").outerHeight(true) - 30))
                ||
                $(".color-change-19").length && ($(window).scrollTop() > $(".color-change-19").offset().top - 30 && $(window).scrollTop() < ($(".color-change-19").offset().top + $(".color-change-19").outerHeight(true) - 30))
                ||
                $(".color-change-20").length && ($(window).scrollTop() > $(".color-change-20").offset().top - 30 && $(window).scrollTop() < ($(".color-change-20").offset().top + $(".color-change-20").outerHeight(true) - 30))
                ||
                $("footer.color-change").length && ($(window).scrollTop() > $("footer.color-change").offset().top - 30 && $(window).scrollTop() < ($("footer.color-change").offset().top + $("footer.color-change").outerHeight(true) - 30))
    
            ) {
                $("body").addClass("white-menu");
            }
            else {
                $("body").removeClass("white-menu");    
            }
        }
    
        scrollColor();
        $(window).scrollTop() > 60 ? $("header").addClass("offset") : $("header").removeClass("offset");
    });*/
    $("header").addClass("offset")       
            
    $('.menu-button').click(function(){
		
		var $this = $( this );
		
		if ($this.hasClass('active')){
			$('#menu-container').removeClass('active');
		} else{
			$('#menu-container').addClass('active');
		};
		$this.toggleClass('active');
	});
	
	$( document ).ready(function() {
    	$('.services-slider').slick("slickPlay");
    	$('.team-slider').slick("slickPlay");
	});
	
}