(function($) {

 $.fn.visible = function (partial, hidden, container) {

        var $t = $(this).eq(0),
            t = $t.get(0),
            $w = (container != null ? container : $(window)),
            viewTop = (container != null ? 0 : $w.scrollTop()),
            viewBottom = viewTop + $w.height(),
            _top = $t.offset().top,
            _bottom = _top + $t.height(),
            compareTop = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom,
            clientSize = hidden === true ? t.offsetWidth * t.offsetHeight : true;
        return !!clientSize && ((compareBottom <= viewBottom) && (compareTop >= viewTop));
    };


function video_width(){
	if($(window).width() > 1024){
		$('#myvideo source').attr('src',$('#myvideo source').attr('data-desktop'));
	}else{
		$('#myvideo source').attr('src',$('#myvideo source').attr('data-mobile'));
	}
	
		var myvid = document.getElementById('myvideo');
		//myvid.pause();
		myvid.currentTime = 0;
		myvid.load();
		var playPromise = myvid.play();
		 
		  if (playPromise !== undefined) {
			playPromise.then(_ => {
			  // Automatic playback started!
			  // Show playing UI.
			  // We can now safely pause video...
			  myvid.play();
			})
			.catch(error => {
			  // Auto-play was prevented
			  // Show paused UI.
			});
		  }
		
}

if($('body').hasClass('home') || $('#myvideo').length > 0){
	video_width();
}



$(window).scroll(function(){
	var scroll = $(window).scrollTop();
	if(scroll > 1){
		$('.main-navigation').addClass('scrolling');
	}else{
		$('.main-navigation').removeClass('scrolling');
	}
	
$(".come-out:not(.come-in)").each(function(i, el) {
			var ts = $(this).offset().top;
			var wh = (jQuery(window).height())-300;
			if (jQuery(window).scrollTop() >= ts - 600) {
				$(this).addClass("come-in");
			}
		});
		
});

$(document).ready(function(){
	
		$('div').click(function(){
			if($(this).parents('.header-top').length < 1 && $('.header-top').hasClass('open')){
				$('.header-top,.header-model').removeClass('open');
				$('.icon-link').removeClass('active');
			}
			 event.stopImmediatePropagation();
		});
	
		$('.menu-serch .search img,.menu-serch .main-navigation img').mouseover(function(){
		if($(window).width() > 576){
			$('.header-top').removeClass('open');
			$('.header-top').addClass('open');
			$('.menu-serch > div').removeClass('active');
			$(this).parent('.icon-link').addClass('active');
			$('.header-model').removeClass('open');
			$(this).parent('.icon-link').find('.header-model').addClass('open');
			$('.header-top').width($('.container').width());
		}
		 event.stopImmediatePropagation();
	});
	
		$('.menu-serch .search img,.menu-serch .main-navigation img').click(function(){
			if($(window).width() < 577){
		if($(this).parent('.icon-link').hasClass('active')){
			$(this).parent('.icon-link').removeClass('active');
			$('.header-top').removeClass('open');
			$(this).parent('.icon-link').find('.header-model').removeClass('open');
			$('.header-top').removeAttr('style');
		}else{
			$('.header-top').removeClass('open');
			$('.header-top').addClass('open');
			$('.menu-serch > div').removeClass('active');
			$(this).parent('.icon-link').addClass('active');
			$('.header-model').removeClass('open');
			$(this).parent('.icon-link').find('.header-model').addClass('open');
			$('.header-top').width($('.container').width());
		}
			}
		 event.stopImmediatePropagation();
	});

	if($(window).width() > 1024){
		$('.main-navigation img').click(function(){
		$('.header-model').removeClass('open');
		$(this).parent('.icon-link').removeClass('active');
		});

		$('.search img').click(function(){
			$('.search-content').removeClass('open');
			$(this).parent('.icon-link').removeClass('active'); 
		});
	}
	

	
	$('.btn-file').on("click" , function () {
        $('.upload-file').click();
    });
	$('.upload-file').change(function(e){
            var fileName = e.target.files[0].name;
            //alert('The file "' + fileName +  '" has been selected.');
			 $('.upload-resume').val(fileName);
    });
	
	$('.main-navigation ul.sub-menu').hide();

	
	
	$('.btn-highlights').click(function(){
		if(!$(this).parents('.tab-section').hasClass('active')){			
			$('.tab-section.active .highlights-content').slideUp('fast');
			$('.tab-section').removeClass('active');
			$(this).parents('.tab-section').addClass('active');
			$(this).parents('.tab-section').find('.highlights-content').slideDown();			
		}
	});
	
	$(".come-out:not(.come-in)").each(function(i, el) {
			var ts = $(this).offset().top;
			var wh = (jQuery(window).height())-300;
			if (jQuery(window).scrollTop() >= ts - 700) {
				$(this).addClass("come-in");
			}
		});
	
	$('.notes .tab').click(function(){
		if(!$(this).hasClass('active')){
			$('.notes .tab').removeClass('active');
			$(this).addClass('active');
			$('.notes .tab-content').removeClass('active');
			var active_content = $(this).attr('data-tab');
			$('.notes .tab-content[data-tab="'+active_content+'"]').addClass('active');
		}
	});
	
	$('.admission-process .tab').click(function(){
		if(!$(this).hasClass('active')){
			$('.admission-process .tab').removeClass('active');
			$(this).addClass('active');
			$('.admission-process .tab-content').removeClass('active');
			var active_content = $(this).attr('data-tab');
			$('.admission-process .tab-content[data-tab="'+active_content+'"]').addClass('active');
		}
	});
	
	$('.center-page.alumni .tab').click(function(){
		if(!$(this).hasClass('active')){
			$('.center-page.alumni .tab').removeClass('active');
			$(this).addClass('active');
			$('.center-page.alumni .tab-section').removeClass('active');
			var active_content = $(this).attr('data-tab');
			$('.center-page.alumni .tab-section[data-tab="'+active_content+'"]').addClass('active');
		}
	});
	
	
	
	if($('body').hasClass('fee')){
		if($(window).width() < 577){
			$( ".courses-progremme" ).prependTo( $( ".content-section .content-area" ) );
		}else{
			$( ".courses-progremme" ).prependTo( $( ".content-section .sidebar" ) );			
		}
	}
	
	//$('ul.sub-menu').hide();
	$('.tab-section:not(.active) .highlights-content').hide();
	$('.header-model li.expend > a').click(function(event){
		if(!$(this).hasClass('active')){
			$(this).addClass('active');
			$(this).next('ul').slideDown({duration: 400});
		}else{
			$(this).removeClass('active');
			$(this).parents('li').find('ul').slideUp();
		}
		event.stopImmediatePropagation();
	});
		if($('body').hasClass('home') || $('#myvideo').length > 0){
			video_width();
		}
		$('#header').removeClass('run')
		
});
	$(window).resize(function(){
		if($(window).width() > 576){
		$('.container-boxes .latest-news-event.big-wrap > div').height($('.container-boxes .latest-news-event.big-wrap').height());
		$('.upcoming-covid-19 .half-wrap .image-area img').css('min-height',$('.upcoming-covid-19 .half-wrap').height());
		var section_height = $('.upcoming.owl-carousel').height();
		$('.upcoming.owl-carousel .owl-item').each(function(){
			$('img', this).css('min-height',section_height);
		});
		}else{
			$('.container-boxes .latest-news-event.big-wrap > div,.upcoming-covid-19 .half-wrap .image-area img,.upcoming.owl-carousel .owl-item img').removeAttr('style');
			$('.upcoming.owl-carousel .owl-item').each(function(){
				$('img', this).removeAttr('style');
			});
		}
		
			if($('body').hasClass('fee')){
		if($(window).width() < 577){
			$( ".courses-progremme" ).prependTo( $( ".content-section .content-area" ) );
		}else{
			$( ".courses-progremme" ).prependTo( $( ".content-section .sidebar" ) );			
		}
	}
	
		if($('body').hasClass('home')){
			video_width();
		}
		$('.header-top').width($('.container').width());
	});	
$(window).on('load', function(){
	
	if($(window).width() > 576){
		setTimeout(function(){
			//alert(1);
	$('.container-boxes .latest-news-event.big-wrap > div').height($('.container-boxes .latest-news-event.big-wrap').height());
	$('.upcoming-covid-19 .half-wrap .image-area img').css('min-height',$('.upcoming-covid-19 .half-wrap').height());
	var section_height = $('.upcoming.owl-carousel').height();
	$('.upcoming.owl-carousel .owl-item').each(function(){
		$('img', this).css('min-height',section_height);
	});
	
	}, 500);
	}
	
	
	
	$('body').addClass('loaded');
	$('#header').removeClass('run');
	$('div').click(function(){
		if($(this).parents('.header-top').length < 1 && $('.header-top').hasClass('open')){
			$('.header-top,.header-model').removeClass('open');
			$('.icon-link').removeClass('active');
		}
		 event.stopImmediatePropagation();
	});
	

	
	if($('body').hasClass('home') || $('#myvideo').length > 0){
		video_width();
	}

if($('body').hasClass('home')){	
$(".owl-carousel").owlCarousel({
				lazyLoad: true,
				loop: true,
				dots: true,
				autoplay: true,
				autoplaySpeed: 1000,
				autoplayTimeout: 5500,
				nav: false,
				responsive: {
					0: {
						items: 1
					},
					500: {
						items: 1
					},
					700: {
						items: 1
					},
					1000: {
						items: 1
					}
				}


			});
}
			
			/*
			$(".owl-carousel").owlCarousel({
				animateOut: 'fadeOut',
			    animateIn: 'fadeIn',
				lazyLoad: true,
				loop: true,
				dots: true,
				autoplay: true,
				autoplaySpeed: 1000,
				autoplayTimeout: 3500,
				nav: false,
				responsive: {
					0: {
						items: 1
					},
					500: {
						items: 1
					},
					700: {
						items: 1
					},
					1000: {
						items: 1
					}
				}


			});*/
});

})(jQuery);	
			