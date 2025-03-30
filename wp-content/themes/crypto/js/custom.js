jQuery(document).ready(function($) {
    $(".navbar-toggler").on('click', function(event) {
        $('header nav').fadeToggle();
    });
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 350) {
            $("#to-top").fadeIn();
        } else {
            $("#to-top").fadeOut();
        }
    });
    $("#to-top").click(function () {
        $('html, body').animate({
            scrollTop: 0
        });
    })
    $('.toggller').click(function () {
        var c = $(this).closest('.collapse-box').find('.collapsed');
        $(this).toggleClass('open');
        c.slideToggle();
    });

    $('.menu-item-has-children').prepend('<span onclick="toggleSub(this)"></span>');
    $(document).on("click", function(event){
        var trigger = $(".menu-item-has-children");
        if(trigger !== event.target && !trigger.has(event.target).length){
            $(".sub-menu").fadeOut();
            $(".menu-item-has-children").removeClass('opened');
        }
    });

    $("body").on('click', '[href*="#"]', function(e){
        if ($(this.hash).length != 0) {
            e.preventDefault();
            $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top }, 700);
        }
	})

    // content links js
    $(":header").each(function(){
        var t = $(this).text();
        if (t.length === 0) {
            t = "?";
        }

        text = $.trim(t);
        text = text.replace(/[^ A-Za-z\d]/g, '').toLowerCase();
        var baseId = text.replace(/\s+/g, "-"), suffix = "", count = 1;

        while (document.getElementById(baseId + suffix) !== null) {
            suffix = "_" + count++;
        }
        $(this).attr('id',baseId + suffix);

        $('.c-link').each(function() {
            if ($(this).text() == t) {
                $(this).attr('href','#'+baseId + suffix);
            }
        })
    })
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        navText: ["<span class='prev'></span>","<span class='next'></span>"],
    });
    
    $('.progress-fill span').each(function(){
        var percent = $(this).html();
        $(this).parent().css('width', percent);
      });
})
function toggleSub(el) {
    jQuery(el).closest('.menu-item-has-children').siblings().find('.sub-menu').fadeOut();
    jQuery(el).closest('.menu-item-has-children').siblings().removeClass('opened');

    jQuery(el).closest('.menu-item-has-children').find('.sub-menu').fadeToggle();
    jQuery(el).closest('.menu-item-has-children').toggleClass('opened');
}



