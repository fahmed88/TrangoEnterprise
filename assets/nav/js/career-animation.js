var ww = $(window).width();
var platformStatus;
var browser = 'others';

// init
var controller = new ScrollMagic.Controller();

var scene3 = new ScrollMagic.Scene({
    triggerElement: ".section-container-2",
    triggerHook: 0.5,
})
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller)
    .on("enter leave", function (e) {
        if (e.type == "enter") {
            //removeClassActive(".progress-nav-bar");
            addClassActive(".section-container-2 .panel-1 .title-1");
            addClassActive(".section-container-2 .panel-1 .title-2");
            addClassActive(".section-container-2 .panel-1 .cta-scroll");
        } else {
            removeClassActive(".section-container-2 .panel-1 .title-1");
            removeClassActive(".section-container-2 .panel-1 .title-2");
            removeClassActive(".section-container-2 .panel-1 .cta-scroll");
        }
    });


var wipeAnimation2 = new TimelineMax()
    .fromTo(".section-container-2 .panel-1 .img-1", 2, { width: "60%" }, { width: "3000%", ease: Linear.easeIn })
    .fromTo(".section-container-2 .panel-2 .img-3", 0.1, { width: "45%" }, { width: "120%", ease: Linear.easeIn }, "0.01")
    .call(addClassActive, [".section-container-2 .panel-1 .title-1"], this, 0.09)
    .call(addClassActive, [".section-container-2 .panel-1 .title-2"], this, 0.09)
    .call(addClassActive, [".section-container-2 .panel-1 .cta-scroll"], this, 0.09)
    .call(removeClassActive, [".section-container-2 .panel-1 .title-1"], this, 0.1)
    .call(removeClassActive, [".section-container-2 .panel-1 .title-2"], this, 0.1)
    .call(removeClassActive, [".section-container-2 .panel-1 .cta-scroll"], this, 0.1)
    .fromTo(".section-container-2 .panel-1", 0.001, { opacity: "1" }, { opacity: "0", ease: Linear.easeNone }, "1")
    .call(removeClassActive, [".section-container-2 .panel-2 .title-1"], this, 1.01)
    .call(removeClassActive, [".section-container-2 .panel-2"], this, 1.01)
    .call(addClassActive, [".section-container-2 .panel-2"], this, 1.02)
    .call(addClassActive, [".section-container-2 .panel-2 .title-1"], this, 1.02)
    .call(removeClassActive, [".section-container-2 .panel-2 .cta-more"], this, 1.01)
    .call(addClassActive, [".section-container-2 .panel-2 .cta-more"], this, 1.02);

var scene4 = new ScrollMagic.Scene({
    triggerElement: ".section-container-2",
    triggerHook: "onLeave",
    duration: "250%",
})
    .setPin(".section-container-2")
    .setTween(wipeAnimation2)
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller)
    .on("enter leave", function (e) {
        if (e.type == "enter") {
            //pauseVideo(".impact-vid");
        }
    });

var scene5 = new ScrollMagic.Scene({
    triggerElement: ".section-container-3",
    triggerHook: 0.7,
})
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller)
    .on("enter leave", function (e) {
        if (e.type == "enter") {
            $(".section-container-3 .cta-more").addClass("isactive");
            $(".section-container-3 .img-container").addClass("trigger");
            addClassActive(".section-container-3 .text-content");
        } else {
            $(".section-container-3 .cta-more").removeClass("isactive");
            $(".section-container-3 .img-container").removeClass("trigger");
            removeClassActive(".section-container-3 .text-content");
        }
    });

var scene6 = new ScrollMagic.Scene({
    triggerElement: ".section-container-7",
    triggerHook: "onCenter",
})
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller)
    .on("enter leave", function (e) {
        if (e.type == "enter") {
            addClassActive(".section-container-7 .text-center");
            addClassActive(".section-container-8 .cta-more");
        } else {
            removeClassActive(".section-container-7 .text-center");
            removeClassActive(".section-container-8 .cta-more");
        }
    });

var scene7 = new ScrollMagic.Scene({
    triggerElement: ".section-container-8",
    triggerHook: 0.7,
    offset: "250px"
})
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller)
    .on("enter leave", function (e) {
        if (e.type == "enter") {
            addClassActive(".section-container-8 .text-content");
        } else {
            removeClassActive(".section-container-8 .text-content");
        }
    });

var scene8 = new ScrollMagic.Scene({
    triggerElement: ".section-container-9a",
    triggerHook: 0.7,
})
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller)
    .on("enter leave", function (e) {
        if (e.type == "enter") {
            addClassActive(".section-container-9a .title-1");
            addClassActive(".section-container-9a .title-2");
        } else {
            removeClassActive(".section-container-9a .title-2");
            removeClassActive(".section-container-9a .title-1");
        }
    });

var scene9 = new ScrollMagic.Scene({
    triggerElement: ".section-container-9",
    triggerHook: 0.4,
})
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller)
    .on("enter leave", function (e) {
        if (e.type == "enter") {
            //addClassActive(".section-container-9 .panel-1 .title-1");
            //addClassActive(".section-container-9 .panel-1 .cta-more");
            addClassActive(".section-container-9 .panel-3 .title-1");
            addClassActive(".section-container-9 .panel-3 .cta-more");
        } else {
            //removeClassActive(".section-container-9 .panel-1 .title-1");
            //removeClassActive(".section-container-9 .panel-1 .cta-more");
            removeClassActive(".section-container-9 .panel-3 .title-1");
            removeClassActive(".section-container-9 .panel-3 .cta-more");
        }
    });

var wipeAnimation9 = new TimelineMax()
    .fromTo(".section-container-9 .panel-2 .img-1", 0.01, { opacity: "0" }, { opacity: "1", ease: Power1.easeIn }, "0.6")
    .call(addClassActive, [".section-container-9 .panel-1"], "0.3")
    .call(removeClassActive, [".section-container-9 .panel-1"], "0.31")
    .call(removeClassActive, [".section-container-9 .panel-2"], "0.3")
    .call(addClassActive, [".section-container-9 .panel-2"], "0.31")
    .fromTo(".section-container-9 .panel-2 .img-1", 1.2, { width: "2000%" }, { width: "60%", ease: Linear.easeIn })
    .fromTo(".section-container-9 .panel-1 .vid-1", 1.2, { width: "140%" }, { width: "50%", ease: Linear.easeIn }, "0.001")
    .call(removeClassActive, [".section-container-9 .panel-2 .title-1"], this, "1.4")
    .call(addClassActive, [".section-container-9 .panel-2 .title-1"], this, "1.41")
    //.call(addClassActive,[".section-container-9 .panel-1 .title-1"], this, "1")
    //.call(addClassActive,[".section-container-9 .panel-1 .cta-more"], this, "1")
    .call(addClassActive, [".section-container-9 .panel-3 .title-1"], this, "1")
    .call(addClassActive, [".section-container-9 .panel-3 .cta-more"], this, "1")
    //.call(removeClassActive,[".section-container-9 .panel-1 .title-1"], this, "1.1")
    //.call(removeClassActive,[".section-container-9 .panel-1 .cta-more"], this, "1.1")
    .call(removeClassActive, [".section-container-9 .panel-3 .title-1"], this, "1.01")
    .call(removeClassActive, [".section-container-9 .panel-3 .cta-more"], this, "1.01");

var scene10 = new ScrollMagic.Scene({
    triggerElement: ".section-container-9",
    triggerHook: "onLeave",
    duration: "150%",
})
    .setPin(".section-container-9")
    .setTween(wipeAnimation9)
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller);

addClassActive(".progress-nav-bar");
addClassActive(".bell-container");
platformStatus = "desktop";

var scene11 = new ScrollMagic.Scene({
    triggerElement: ".section-container-4 .panel-2",
    triggerHook: 0.3,
})
    .addTo(controller)
    .on("enter leave", function (e) {
        if (e.type == "enter") {
            //playVideo(".hidden-lg.hidden-md.impact-vid.vid-1");
            addClassActive(".audio-option");
            addClassActive(".section-container-4 .cta-scroll");
        }
    });

var scene12 = new ScrollMagic.Scene({
    triggerElement: ".section-container-2 .panel-2",
    triggerHook: 0.3,
})
    .addTo(controller)
    .on("enter leave", function (e) {
        if (e.type == "enter") {
            // $(".section-container-2 .panel-2 .title-1").addClass("isactive");
            // $(".section-container-2 .panel-2 .cta-more").addClass("isactive");
            //pauseVideo(".hidden-lg.hidden-md.impact-vid.vid-1");
        }
    });


function sizeAll() {
    var ww = $(window).width();
    if (ww <= 1024) {
        scene2.enabled(false);
        scene3.enabled(false);
        scene4.enabled(false);
        scene5.enabled(false);
        scene6.enabled(false);
        scene7.enabled(false);
        scene8.enabled(false);
        scene9.enabled(false);
        scene10.enabled(false);
        scene11.enabled(true);
        scene12.enabled(true);

        //ipad and mobile
        addClassActive(".we-act-for-impact");
        addClassActive(".we-act-for-impact .cta-more");
        addClassActive(".section-container-2a .text-center");
        $(".section-container-3 .cta-more").addClass("isactive");
        $(".section-container-3 .img-container").addClass("trigger");
        $(".section-container-3 .mobile-placeholder").addClass("trigger");
        addClassActive(".section-container-3 .text-content");
        $(".section-container-2 .animate_title").addClass("isactive");
        $(".section-container-2 .cta-scroll").addClass("isactive")
        $(".section-container-2 .cta-more").addClass("isactive");
        addClassActive(".section-container-7 .text-center");
        addClassActive(".section-container-8 .cta-more");
        addClassActive(".section-container-8 .text-content");
        addClassActive(".section-container-9a .title-1");
        addClassActive(".section-container-9a .title-2");
        addClassActive(".section-container-9 .title-1");
        addClassActive(".section-container-9 .panel-3 .title-1");
        addClassActive(".section-container-9 .panel-3 .cta-more");
        $(".section-container-9 .panel-2 .img-1").css("opacity", "1 !important");
        $('.bell-container').addClass("isactive");
        $(".progress-nav-bar").removeClass("isactive");
    } else {
        scene2.enabled(true);
        scene3.enabled(true);
        scene4.enabled(true);
        scene5.enabled(true);
        scene6.enabled(true);
        scene7.enabled(true);
        scene8.enabled(true);
        scene9.enabled(true);
        scene10.enabled(true);
        scene11.enabled(false);
        scene12.enabled(false);

        $(".progress-nav-bar").addClass("isactive");
    }
}

//resize
$(window).resize(sizeAll);
sizeAll();

$(function () { // Section 1

    //if(browser == 'others'){
    marqueeCarousel();

    setTimeout(function () { $("a.carousel-control-next").addClass("isactive"); $("a.carousel-control-prev").addClass("isactive"); }, 3000);

    $('#marqueeCarousel').on('touchstart', function (event) {
        const xClick = event.originalEvent.touches[0].pageX;
        $(this).one('touchmove', function (event) {
            const xMove = event.originalEvent.touches[0].pageX;
            const sensitivityInPx = 5;

            if (Math.floor(xClick - xMove) > sensitivityInPx) {
                $(this).carousel('next');
            }
            else if (Math.floor(xClick - xMove) < -sensitivityInPx) {
                $(this).carousel('prev');
            }
        });
        $(this).on('touchend', function () {
            $(this).off('touchmove');
        });
    });

    $(".img-boxes").on("click", function () {
        var kani = $(this);
        $(this).addClass("isactive");
        $(".sc6-cta-btn-1").css("opacity", "0");
        setTimeout(function () {
            kani.removeClass("isactive");
            $(".sc6-cta-btn-1").css("opacity", "1");
        }, 500);
    });

    $(".img-container").on("click", function () {
        var kani = $(this);
        $(this).addClass("isactive");
        $(".follow-cta-btn").removeClass("isactive");
        setTimeout(function () {
            kani.removeClass("isactive");
            $(".follow-cta-btn").addClass("isactive");
        }, 500);
    });



    $(".read-it-btn").on("click", function () {
        $(this).addClass("active");
        $('.bell-container').addClass("hide");
        $(".see-it-btn").removeClass("active");
        $(".mobile-view-options").addClass("isactive");
        $(".read-it-container").addClass("isactive");
        $(".section-container").addClass("inactive");
        //$(".section-container").addClass("index");
        $(".scrollmagic-pin-spacer").addClass("inactive");
        setTimeout(function () {
            $(".section-container").addClass("index");
        }, 300);
    });

    $(".see-it-btn").on("click", function () {
        $(this).addClass("active");
        $('.bell-container').removeClass("hide");
        $(".read-it-btn").removeClass("active");
        $(".mobile-view-options").removeClass("isactive");
        $(".read-it-container").removeClass("isactive");
        $(".section-container").removeClass("inactive");
        $(".scrollmagic-pin-spacer").removeClass("inactive");

        setTimeout(function () {
            $([document.documentElement, document.body]).animate({ scrollTop: $('.section-container-3').offset().top }, 10);
        }, 5);
        setTimeout(function () {
            $([document.documentElement, document.body]).animate({ scrollTop: 0 }, 10);
        }, 5);

        setTimeout(function () {
            $(".section-container").removeClass("index");
        }, 300);
    });

    $(".item .scroll-down").on("click", function () {
        $([document.documentElement, document.body]).animate({ scrollTop: $('.section-container-1b').offset().top - 100 }, 500);
    });

    $(".item .arrow-i-down").on("click", function () {
        $([document.documentElement, document.body]).animate({ scrollTop: $('.section-container-2a').offset().top - 100 }, 500);
    });


    if (ww > 767) {
        $(".volume").on("click", function () {
            if ($(this).hasClass("on")) {
                var vid = $(this).attr("data-vid");
                $("video.hidden-xs.hidden-sm." + vid).prop('muted', true);
                $(this).removeClass("on");
                $(".volume").attr("aria-label", "sound off");
                $(".volume .volume-on").removeClass("isactive");
                $(".volume .volume-off").addClass("isactive");
            } else {
                var vid = $(this).attr("data-vid");
                $("video.hidden-xs.hidden-sm." + vid).prop('muted', false);
                $(this).addClass("on");
                $(".volume").attr("aria-label", "sound on");
                $(".volume .volume-on").addClass("isactive");
                $(".volume .volume-off").removeClass("isactive");
            }
        });

        $(".option-replay").on("click", function () {
            var vid = $(this).attr("data-vid");
            var video = $("video.hidden-xs.hidden-sm." + vid).get(0);
            video.pause();
            video.currentTime = 0;
            video.play();
            $(this).addClass("isclicked");
            setTimeout(function () { $(".option-replay").removeClass("isclicked"); }, 400);
        });
    } else {
        $(".volume").on("click", function () {
            if ($(this).hasClass("on")) {
                var vid = $(this).attr("data-vid");
                $("video.hidden-lg.hidden-md.impact-vid").prop('muted', true);
                $(this).removeClass("on");
                $(".volume").attr("aria-label", "sound off");
                $(".volume .volume-on").removeClass("isactive");
                $(".volume .volume-off").addClass("isactive");
            } else {
                var vid = $(this).attr("data-vid");
                $("video.hidden-lg.hidden-md.impact-vid").prop('muted', false);
                $(this).addClass("on");
                $(".volume").attr("aria-label", "sound on");
                $(".volume .volume-on").addClass("isactive");
                $(".volume .volume-off").removeClass("isactive");
            }
        });

        $(".option-replay").on("click", function () {
            var vid = $(this).attr("data-vid");
            var video = $("video.hidden-lg.hidden-md.impact-vid").get(0);
            video.pause();
            video.currentTime = 0;
            video.play();
            $(this).addClass("isclicked");
            setTimeout(function () { $(".option-replay").removeClass("isclicked"); }, 400);
        });
    }

    $(".section-container-8 .img-container").ready(function () {
        var cse = $(this).attr("data-case");
        var subtitle = $(this).attr("data-sub-title");
        var subtitlelink = $(this).attr("data-sub-title-link");
        var desc = $(this).attr("data-description");
        $(".section-container-8 .text-content .categoryTitle").html(cse);
        $(".section-container-8 .text-content .SubsectionTitleTrigger").attr("aria-label", subtitle);
        $(".section-container-8 .text-content .SubsectionTitleTrigger").attr("data-analytics-link-name", subtitle);
        $(".section-container-8 .text-content .SubsectionTitleTrigger").attr("href", subtitlelink);
        $(".section-container-8 .carousel .explore-container").attr("data-href", subtitlelink);
        $(".section-container-8 .text-content .SubsectionTitle").html(subtitle);
        $(".section-container-8 .text-content .Subsectiondescription").html(desc);
    });

    /** Initiate Text Animation**/
    toggleClassActive(".section-container-1 .panel-1 .title-1");

    /** Mouse Cursor Movement**/
    $(window).on('mousemove', function (e) {
        if ($('.section-container-3 .panel-1:hover').length != 0) {
            var xPos = e.pageX;
            var yPos = e.pageY;
            if ($('.section-container-3 .panel-1 .img-container:hover').length != 0) {
                $('.follow-cta-btn').addClass("isactive");
            } else {
                $('.follow-cta-btn').removeClass("isactive");
            }
            var ySc3 = $(".section-container-3 .panel-1").offset().top;
            var xSc3 = $(".section-container-3 .panel-1").offset().left;
            //console.log(xPos, yPos);
            $('.follow-cta-btn').css({
                'top': yPos - ySc3,
                'left': xPos - xSc3
            });
        }

        if ($('.sc-6:hover').length != 0) {
            var xPos = e.pageX;
            var yPos = e.pageY;
            var ySc3 = $(".sc-6").offset().top;
            var xSc3 = $(".sc-6").offset().left;
            // console.log(xPos, yPos);
            $('.sc6-cta-btn-1').css({
                'top': yPos - ySc3,
                'left': xPos - xSc3
            });
        }

        if ($('.carousel .zoom .explore-container:hover').length != 0) {
            var xPos = e.pageX;
            var yPos = e.pageY;
            var ySc3 = $(".carousel .zoom .explore-container").offset().top;
            var xSc3 = $(".carousel .zoom .explore-container").offset().left;
            // console.log(xPos, yPos);
            $('.cards-cta-btn-container').css({
                'top': yPos - ySc3 - 30,
                'left': xPos - xSc3 - 30
            });
        }


    });

    //Swipe triggers
        $('.bell-container .bell').on('click', function () {
            if ($('.bell-container').hasClass("isactive")) {
                $('.bell-container').removeClass("isactive");
                $('.bell-container').addClass("isclosed");
            } else {
                $('.bell-container').addClass("isactive");
            }
        });

        $('.bell-container.isactive .bell').on('mouseover', function () {
            if ($('.bell-container').hasClass("isclosed")) {
            } else {
                $('.bell-container').addClass("isactive");
            }
        });

        $('.bell-container.isactive .bell').on('mouseleave', function () {
            $('.bell-container').removeClass("isclosed");
        });

        $('.bell-container-static .bell').on('click', function () {
            if ($('.bell-container-static').hasClass("isactive")) {
                $('.bell-container-static').removeClass("isactive");
                $('.bell-container-static').addClass("isclosed");
            } else {
                $('.bell-container-static').addClass("isactive");
            }
        });

        $('.bell-container-static.isactive .bell').on('mouseover', function () {
            if ($('.bell-container-static').hasClass("isclosed")) {
            } else {
                $('.bell-container-static').addClass("isactive");
            }
        });

        $('.bell-container.isactive .bell').on('mouseleave', function () {
            $('.bell-container-static').removeClass("isclosed");
        });


});


function toggleClassActive(_target) {
    if ($(_target).hasClass("isactive")) {
        $(_target).removeClass("isactive");
    } else {
        $(_target).addClass("isactive");
    }
}

function addClassActive(_target) {
    $(_target).addClass("isactive");
}

function removeClassActive(_target) {
    $(_target).removeClass("isactive");
}




function playVideo(_target) {
    $(_target).get(0).currentTime = 0;
    var playPromise = $(_target).get(0).play();
    //console.log(playPromise);
    // $(_target).get(0).onended = function(e) {
    // $(_target).get(0).currentTime = 0;
    // };

    if (playPromise !== undefined) {
        playPromise.then(_ => {
            // Automatic playback started!
            // Show playing UI.
            $(_target).get(0).play();
        })
            .catch(error => {
                // Auto-play was prevented
                // Show paused UI.
            });
    }
}

function pauseVideo(_target) {
    $(_target).get(0).pause();
}

function replaceText(_target, _html) {
    $(_target).html(_html);
}