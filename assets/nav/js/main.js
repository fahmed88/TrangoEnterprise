var t, didScroll, cursor = document.querySelector(".cursor"),
    cursorinner = document.querySelector(".cursor2"),
    a = document.querySelectorAll("a");
if (document.addEventListener("mousemove", (function (e) {
        if (typeof (cursor) != "undefined" && cursor !== null) {
            e.clientX, e.clientY, cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
        }
    })), document.addEventListener("mousemove", (function (e) {
        var o = e.clientX,
            t = e.clientY;
        if (typeof (cursorinner) != "undefined" && cursorinner !== null) {
            cursorinner.style.left = o + "px", cursorinner.style.top = t + "px"
        }
    })), document.addEventListener("mousedown", (function () {
        if (typeof (cursor) != "undefined" && cursor !== null) {
            if (typeof (cursorinner) != "undefined" && cursorinner !== null) {
                cursor.classList.add("click"), cursorinner.classList.add("cursorinnerhover")
            }
        }
    })), document.addEventListener("mouseup", (function () {
        if (typeof (cursor) != "undefined" && cursor !== null) {
            if (typeof (cursorinner) != "undefined" && cursorinner !== null) {
                cursor.classList.remove("click"), cursorinner.classList.remove("cursorinnerhover")
            }
        }
    })), $(window).on("load", (function () {
        jQuery("#preloader").fadeOut("slow")
    })), $(window).width() > 900) {}

function openTab(e, o) {
    var t, n, i;
    for (t = 0, n = document.getElementsByClassName("tabcontent"); t < n.length; t++) n[t].style.display = "none";
    for (t = 0, i = document.getElementsByClassName("tablinks"); t < i.length; t++) i[t].className = i[t].className.replace(" active", "");
    document.getElementById(o).style.display = "block", e.currentTarget.className += " active"
}

function openLocationTab(e, o) {
    var t, n, i;
    for (t = 0, n = document.getElementsByClassName("location-tabcontent"); t < n.length; t++) n[t].style.display = "none";
    for (t = 0, i = document.getElementsByClassName("location-tablinks"); t < i.length; t++) i[t].className = i[t].className.replace(" active", "");
    document.getElementById(o).style.display = "block", e.currentTarget.className += " active"
}

function myFunction() {
    var e = document.body.scrollTop || document.documentElement.scrollTop,
        o = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    document.getElementById("myBar").style.width = e / o * 100 + "%"
}

function startCounter(e) {
    e.hasClass("notVisible") && (e.removeClass("notVisible"), e.prop("Counter", 0).animate({
        Counter: e.attr("data-counter-lim")
    }, {
        duration: 4e3,
        easing: "swing",
        step: function (o) {
            e.text(Math.ceil(o).toLocaleString())
        }
    }))
}

jQuery(document).ready((function () {
    jQuery(window).scroll((function () {
        jQuery("body").height() <= jQuery(window).height() + jQuery(window).scrollTop() ? jQuery(".scroll-icon").hide() : jQuery(".scroll-icon").show()
    }))
}));
var lastScrollTop = 0,
    delta = 5,
    navbarHeight = $(".header").outerHeight();

function hasScrolled() {
    var e = $(this).scrollTop();
    Math.abs(lastScrollTop - e) <= delta || (e > lastScrollTop && e > navbarHeight ? $(".header").removeClass("nav-down").addClass("nav-up") : (e + $(window).height() < $(document).height() && $(".header").removeClass("nav-up").addClass("nav-down"), 0 == e && $(".header").removeClass("nav-down")), lastScrollTop = e)
}
$(window).scroll((function (e) {
    didScroll = !0
})), setInterval((function () {
    didScroll && (hasScrolled(), didScroll = !1)
}), 250), jQuery(document).ready((function () {
    $(".openbtn").click((function () {
        $(".mobile-sidepanel").addClass("show")
    })), $(".closebtn").click((function () {
        $(".mobile-sidepanel").removeClass("show")
    })), $("#companyDropDown").click((function () {
        $("#mobile-company-menu").slideToggle()
    })), $("#mobileSubMenuDropdown").click((function () {
        $(".mobile-sub-menu").slideToggle()
    })), $("#footerMobileMenu").click((function () {
        $(".footer-mobile-menu ul.main-ul").slideToggle()
    })), $("#footerEcomMenu").click((function () {
        $(".footer-eocmmerce-menu ul.main-ul").slideToggle()
    })), $("#footerStaffMenu").click((function () {
        $(".footer-staff-menu ul.main-ul").slideToggle()
    })), $("#footerBPOMenu").click((function () {
        $(".footer-bpo-menu ul.main-ul").slideToggle()
    })), window.onscroll = function () {
        myFunction()
    }
}));
$('.mob-carousel').owlCarousel({
    loop: !0,
    center: !0,
    items: 1,
    margin: 0,
    dots: !0,
    nav: !1,
    responsiveClass: !0,
    smartSpeed: 575,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none"
        } else {
            content.style.display = "block"
        }
    })
}

tabControl();
var resizeTimer;
$(window).on('resize', function (e) {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
        tabControl()
    }, 250)
});

function tabControl() {
    var tabs = $('.tabbed-content').find('.tabs');
    if (tabs.is(':visible')) {
        tabs.find('a').on('click', function (event) {
            event.preventDefault();
            var target = $(this).attr('href'),
                tabs = $(this).parents('.tabs'),
                buttons = tabs.find('a'),
                item = tabs.parents('.tabbed-content').find('.item');
            buttons.removeClass('active');
            item.removeClass('active');
            $(this).addClass('active');
            $(target).addClass('active')
        })
    } else {
        $('.item').on('click', function () {
            var container = $(this).parents('.tabbed-content'),
                currId = $(this).attr('id'),
                items = container.find('.item');
            container.find('.tabs a').removeClass('active');
            items.removeClass('active');
            $(this).addClass('active');
            container.find('.tabs a[href$="#' + currId + '"]').addClass('active')
        })
    }
}

$('.vertical-scroll-but').hide();
$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.vertical-scroll-but').fadeIn()
    } else {
        $('.vertical-scroll-but').fadeOut()
    }
});
$(function () {
    AOS.init({
        once: !0,
        disable: function () {
            var maxWidth = 768;
            return window.innerWidth < maxWidth
        }
    })
});
$("#text-cycler span").mouseover((function () {
    $("#text-cycler").addClass("is-hover"), $("body").addClass("landing-text-hover"), t = setInterval("cycleText()", 300)
})), $("#text-cycler span").mouseout((function () {
    $("#text-cycler").removeClass("is-hover"), clearInterval(t)
})), 
 $(".landing__text__hover span").hover((function () {
    $("body").addClass("landing-text-hover")
}), (function () {
    $("body").removeClass("landing-text-hover")
})), $(document).ready((function () {
    $(window).scroll((function () {
        $(".count").each((function () {
            $(this).isOnScreen() ? startCounter($(this)) : 0 == $(this).hasClass("notVisible") && ($(this).stop(), $(this).addClass("notVisible"), $(this).text("0"))
        }))
    }))
})), $.fn.isOnScreen = function () {
    var e = $(window),
        o = {
            top: e.scrollTop(),
            left: e.scrollLeft()
        };
    o.right = o.left + e.width(), o.bottom = o.top + e.height();
    var t = this.offset();
    return t.right = t.left + this.outerWidth(), t.bottom = t.top + this.outerHeight(), !(o.right < t.left || o.left > t.right || o.bottom < t.top || o.top > t.bottom)
}, $(".count").each((function () {
    $(this).addClass("notVisible"), !0 === $(this).isOnScreen() && startCounter($(this))
})), jQuery(document).ready((function () {
    jQuery(window).scroll((function () {
        jQuery("body").height() <= jQuery(window).height() + jQuery(window).scrollTop() ? jQuery(".scroll-icon").hide() : jQuery(".scroll-icon").show()
    }))
}));
$(".mobile-menu-header .closebtn ").click(function () {
    $(".navbar .navbar-collapse.collapse").removeClass("show")
});
$(".owl-carousel").each((function(){$(this).find(".owl-dot").each((function(a){$(this).attr("aria-label",a+1)}))}));
const links = ["services", "technology", "industries", "solutions", "locations", "adobe-commerce", "shopify", "woocommerce", "bigcommerce"];
links.forEach(link => {
    $(`.header-wrapper .has-megamenu .${link}-link`).hover(function (){
        $(".header-wrapper .megamenu .megamenu-inner").toggleClass(`${link}-hover`);
    });
});
if($(window).width() > 991){
    $( document ).ready(function(){$(".dropdown-toggle").click(function(){var url = $(this).attr("href");$(location).attr('href', url);});});
}

// footer toggle switch script

var $radios = $('.toggle-switch-cls').change(function () {
    var value = $radios.filter(':checked').val();
    if(value == "Asia"){
        $('.footer-usa-locations').addClass('d-none');
        $('.footer-asia-locations').removeClass('d-none');
        $('.footer-uk-locations').addClass('d-none');
    }
    else if(value == "USA"){
        $('.footer-usa-locations').removeClass('d-none');
        $('.footer-asia-locations').addClass('d-none');
        $('.footer-uk-locations').addClass('d-none');
    }
    else if(value == "UK"){
        $('.footer-uk-locations').removeClass('d-none');
        $('.footer-asia-locations').addClass('d-none');
        $('.footer-usa-locations').addClass('d-none');
    }

});
// footer toggle switch script