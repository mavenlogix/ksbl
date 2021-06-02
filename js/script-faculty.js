$(document).ready(function() {





    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 1) {
            $('.main-navigation').addClass('scrolling');
        } else {
            $('.main-navigation').removeClass('scrolling');
        }

        $(".come-out:not(.come-in)").each(function(i, el) {
            var ts = $(this).offset().top;
            var wh = (jQuery(window).height()) - 300;
            if (jQuery(window).scrollTop() >= ts - 600) {
                $(this).addClass("come-in");
            }
        });

    });



    $('.menu-icon').click(function() {
        if ($(this).parents('.header-top').length < 1 && $('.header-top').hasClass('open')) {
            $('.header-top,.header-model').removeClass('open');
            $('.icon-link').removeClass('active');
        }
        event.stopImmediatePropagation();
    });

    $('.menu-serch .search img,.menu-serch .main-navigation img').mouseover(function() {
        if ($(window).width() > 576) {
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

    $('.menu-serch .search img,.menu-serch .main-navigation img').click(function() {
        if ($(window).width() < 577) {
            if ($(this).parent('.icon-link').hasClass('active')) {
                $(this).parent('.icon-link').removeClass('active');
                $('.header-top').removeClass('open');
                $(this).parent('.icon-link').find('.header-model').removeClass('open');
                $('.header-top').removeAttr('style');
            } else {
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

    if ($(window).width() > 1024) {
        $('.main-navigation img').click(function() {
            $('.header-model').removeClass('open');
            $(this).parent('.icon-link').removeClass('active');
        });

        $('.search img').click(function() {
            $('.search-content').removeClass('open');
            $(this).parent('.icon-link').removeClass('active');
        });
    }



    $('.btn-file').on("click", function() {
        $('.upload-file').click();
    });
    $('.upload-file').change(function(e) {
        var fileName = e.target.files[0].name;
        //alert('The file "' + fileName +  '" has been selected.');
        $('.upload-resume').val(fileName);
    });

    $('.main-navigation ul.sub-menu').hide();









    if ($('body').hasClass('fee')) {
        if ($(window).width() < 577) {
            $(".courses-progremme").prependTo($(".content-section .content-area"));
        } else {
            $(".courses-progremme").prependTo($(".content-section .sidebar"));
        }
    }

    //$('ul.sub-menu').hide();
    $('.tab-section:not(.active) .highlights-content').hide();
    $('.header-model li.expend > a').click(function(event) {
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
            $(this).next('ul').slideDown({ duration: 400 });
        } else {
            $(this).removeClass('active');
            $(this).parents('li').find('ul').slideUp();
        }
        event.stopImmediatePropagation();
    });
    if ($('body').hasClass('home') || $('#myvideo').length > 0) {
        video_width();
    }
    $('#header').removeClass('run')

});
$(window).resize(function() {


    if ($('body').hasClass('fee')) {
        if ($(window).width() < 577) {
            $(".courses-progremme").prependTo($(".content-section .content-area"));
        } else {
            $(".courses-progremme").prependTo($(".content-section .sidebar"));
        }
    }

    if ($('body').hasClass('home')) {
        video_width();
    }
    $('.header-top').width($('.container').width());
});
$(window).on('load', function() {

    if ($(window).width() > 576) {
        setTimeout(function() {
            //alert(1);
            $('.container-boxes .latest-news-event.big-wrap > div').height($('.container-boxes .latest-news-event.big-wrap').height());
            $('.upcoming-covid-19 .half-wrap .image-area img').css('min-height', $('.upcoming-covid-19 .half-wrap').height());
            var section_height = $('.upcoming.owl-carousel').height();
            $('.upcoming.owl-carousel .owl-item').each(function() {
                $('img', this).css('min-height', section_height);
            });

        }, 500);
    }



    $('body').addClass('loaded');
    $('#header').removeClass('run');
    $(document).on("click", function(event){
        if ($(this).parents('.header-top').length < 1 && $('.header-top').hasClass('open')) {
            $('.header-top,.header-model').removeClass('open');
            $('.icon-link').removeClass('active');
        }
        console.log("jj")
        event.stopImmediatePropagation();
    });



});