

$(function () {

    // 滚动离顶部超过400时,导航栏动画过程换上绿色
    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() > 400) {
            jQuery("#navigation").css("background-color", "#1ab188");
            jQuery(".dropdown-menu").css("background-color", "#1ab188");
            jQuery("#navigation").addClass("animated-nav");
        } else {
            jQuery("#navigation").css("background-color", "transparent");
            jQuery(".dropdown-menu").css("background-color", "transparent");
            jQuery("#navigation").removeClass("animated-nav");
        }
    });

    // 滚动到相应的区域,导航栏对应的标签加下划线
    // $('#nav').onePageNav({
    //     filter: ':not(.external)',
    //     scrollSpeed: 950,
    //     scrollThreshold: 1
    // });

    // 设置幻灯片的高度为屏幕高度
    var slideHeight = $(window).height();
    $('#home-carousel .carousel-inner .item, #home-carousel .video-container').css('height', slideHeight);

    // 设置每次窗口调整大小,都对幻灯片设置一次高度
    $(window).resize(function () {
        'use strict',
            $('#home-carousel .carousel-inner .item, #home-carousel .video-container').css('height', slideHeight);
    });

    // portfolio filtering

    $("#projects").mixItUp();

    //fancybox

    $(".fancybox").fancybox({
        padding: 0,

        openEffect: 'elastic',
        openSpeed: 650,

        closeEffect: 'elastic',
        closeSpeed: 550,
    });


    /* ========================================================================= */
    /*  Facts count
    /* ========================================================================= */

    "use strict";
    $(".fact-item").appear(function () {
        $(".fact-item [data-to]").each(function () {
            var e = $(this).attr("data-to");
            $(this).delay(6e3).countTo({
                from: 50,
                to: e,
                speed: 3e3,
                refreshInterval: 50
            })
        })
    });

    /* ========================================================================= */
    /*  On scroll fade/bounce fffect
    /* ========================================================================= */

    $("#testimonial").owlCarousel({
        pagination: true, // Show bullet pagination
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true
    });

});

/* ========================================================================= */
/*  On scroll fade/bounce fffect
/* ========================================================================= */

wow = new WOW({
    animateClass: 'animated',
    offset: 100,
    mobile: false
});
wow.init();

/* ---------------------------------------------------------------------- */
/*      Progress Bars
/* ---------------------------------------------------------------------- */

initProgress('.progress');

function initProgress(el) {
    jQuery(el).each(function () {
        var pData = jQuery(this).data('progress');
        progress(pData, jQuery(this));
    });
}


function progress(percent, $element) {
    var progressBarWidth = 0;

    (function myLoop(i, max) {
        progressBarWidth = i * $element.width() / 100;
        setTimeout(function () {
            $element.find('div').find('small').html(i + '%');
            $element.find('div').width(progressBarWidth);
            if (++i <= max) myLoop(i, max);
        }, 10)
    })(0, percent);
}


