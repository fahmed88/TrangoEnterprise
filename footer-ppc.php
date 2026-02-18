<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="footer" class="animated-row pt-0 mobile-ppc-footer">
    <div class="footer-bottom">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <img src="https://trangotech.com/mobile/wp-content/themes/trangomobile/assets/img/footer-full-logo.png" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="title">
                                Phone
                            </div>
                            <ul>
                                <li>

                                                                    <a href="tel: (877) 606-25557">
                                         (877) 606-2555                                    </a>
                                
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8 col-sm-8 col-12">
                            <div class="title">
                                Address
                            </div>
                            <ul>
                                <li>

                                        299 South Main Street
                                        Salt Lake City, Utah 84111

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright">
                        Copyright © 2024 Trango Tech Limited
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="cursor"></div>
<div class="cursor2"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/library.js"></script>  
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/opt.js"></script>


<?php if (is_page('1273') || is_page('1295')){ ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/TweenMax.min.js"></script>
<?php } ?>

<?php if (is_page('4674')){ ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollTrigger.min.js"></script>
<?php } ?>


<!-- FOOTER SECTION START -->
<!--Modal Start-->
<div class="modal fade ppc-modal dynamics-modal" id="next-project-modal" tabindex="-1" aria-label="projectModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-cont">
                        <h2>Schedule a <span>Free <br>Consultation</span> Today!</h2>
                    </div>
                    <div class="img-cont">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile-app-ppc/dynamics-popup.png" alt="mockups-and-prototype" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inner-content">
                        <div class="inner-top">
                            <button type="button" class="btn" data-bs-dismiss="modal" aria-label="modal">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="16" cy="16" r="15" fill="#DE253A" stroke="white" stroke-width="2"/>
                                    <path d="M11.6399 11.27L15.4999 15.13L19.3399 11.29C19.4247 11.1997 19.5269 11.1275 19.6403 11.0777C19.7537 11.0278 19.8761 11.0014 19.9999 11C20.2651 11 20.5195 11.1054 20.707 11.2929C20.8946 11.4804 20.9999 11.7348 20.9999 12C21.0023 12.1226 20.9795 12.2444 20.9331 12.3579C20.8866 12.4714 20.8175 12.5742 20.7299 12.66L16.8399 16.5L20.7299 20.39C20.8947 20.5512 20.9914 20.7696 20.9999 21C20.9999 21.2652 20.8946 21.5196 20.707 21.7071C20.5195 21.8946 20.2651 22 19.9999 22C19.8725 22.0053 19.7453 21.984 19.6265 21.9375C19.5078 21.8911 19.3999 21.8204 19.3099 21.73L15.4999 17.87L11.6499 21.72C11.5654 21.8073 11.4645 21.8769 11.3529 21.925C11.2414 21.9731 11.1214 21.9986 10.9999 22C10.7347 22 10.4803 21.8946 10.2928 21.7071C10.1053 21.5196 9.99992 21.2652 9.99992 21C9.99759 20.8774 10.0203 20.7556 10.0668 20.6421C10.1132 20.5286 10.1823 20.4258 10.2699 20.34L14.1599 16.5L10.2699 12.61C10.1051 12.4488 10.0085 12.2304 9.99992 12C9.99992 11.7348 10.1053 11.4804 10.2928 11.2929C10.4803 11.1054 10.7347 11 10.9999 11C11.2399 11.003 11.4699 11.1 11.6399 11.27Z"
                                          fill="white"/>
                                </svg>
                            </button>
                        </div>
                        <div class="inner-body">
                            <div class="text-cont">
                                <p>Fill out from below with your details to start conversation with our expert.</p>
                            </div>
                            <?php get_template_part('template-parts/global/ppc_modal_form');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal End-->

<!-- notification  -->
<div class="financial-calculator-modal microsoft-financial-calculator-modal" style="display: none;">
    <div class="financial-modal-dialog ">
        <button type="button" class="close-btn close" data-bs-dismiss="modal" aria-label="Close">
            <svg width="12" height="12" viewBox="0 0 119 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.0121155" y="11.9836" width="16.6964" height="151.367" rx="8.34821" transform="rotate(-45 0.0121155 11.9836)" fill="white"/>
                <rect x="107.044" y="0.17749" width="16.6964" height="151.367" rx="8.34821" transform="rotate(45 107.044 0.17749)" fill="white"/>
            </svg>
        </button>
        <div class="financial-modal-content">
            <div class="financial-modal-header">
                <div class="img-cont">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/financial-calculator.webp" alt="financial-calculator" class="img-fluid">
                </div>
            </div>
            <div class="financial-modal-body">
                <div class="text-cont">
                    <h3>Estimate Your BC</h3>
                    <p>Implementation Cost Now!</p>
                    <a href="https://trangotech.com/microsoft/dynamics-365-business-central-implementation-cost-calculator/">Calculate Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- notification  -->
<!-- claim form popup -->

   <!-- claim form popup end -->
   <script>
    // calculate notification
    setTimeout(function(){
        $(".financial-calculator-modal").show();
    },10000);
   // calculate notification
 $(document).ready(function () {
    $(".cl-btn").click(function () {
        $(".claim-modal").css("display", "none");
    });
});
// setTimeout(function () {
//     function setCookie(name, value, days) {
//         let expires = "";
//         if (days) {
//             const date = new Date();
//             date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
//             expires = "; expires=" + date.toUTCString();
//         }
//         document.cookie = name + "=" + (value || "") + expires + "; path=/";
//     }

//     // Function to get a cookie
//     function getCookie(name) {
//         const nameEQ = name + "=";
//         const cookiesArray = document.cookie.split(';');
//         for (let i = 0; i < cookiesArray.length; i++) {
//             let c = cookiesArray[i];
//             while (c.charAt(0) === ' ') c = c.substring(1, c.length);
//             if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
//         }
//         return null;
//     }

//     // Check if the popup cookie exists
//     if (!getCookie('popupShown')) {
//         let isPopupShown = false;
//         $("body").on("mouseleave", function (e) {
//             if (!isPopupShown && e.clientY <= 0) {
//                 $(".claim-modal").show();
//                 $(".claim-modal").addClass('show');

//                 isPopupShown = true;
//                 setCookie('popupShown', 'true', 1); // Set cookie to expire in 1 day
//             }
//         });
//     }
// }, 15000);
   </script>
<script>


    // calculate notification

    jQuery(document).ready(function($) {
        
    // Get the current page slug
    var currentSlug = window.location.pathname.split('/').filter(function (el) {
        return el.length > 0;
    }).pop();

    // Check if the current page has a specific slug
    if (currentSlug !== 'black-friday-cyber-monday' && currentSlug !== 'app-development-cost-calculator' ) {
            //$(".financial-calculator-modal").hide();
            
          //  setTimeout(function() {
              //  $(".financial-calculator-modal").show();
          //  }, 10000);
            setTimeout(function(){
        $('#next-project-modal').modal('show');
    }, 15000);
            var closebtns = document.getElementsByClassName("close");
            var i;

            for (i = 0; i < closebtns.length; i++) {
                closebtns[i].addEventListener("click", function() {
                    this.parentElement.style.display = 'none';
                });
            }
              
        }
     
    });
    

    // calculate notification


    
    jQuery( document ).ready(function() {
        //If there is no trailing shash after the path in the url add it
        // if (window.location.pathname.endsWith('/') === false) {
        //     console.log( "if cond" );
        //     var url = window.location.protocol + '//' + 
        //             window.location.host + 
        //             window.location.pathname + '/' + 
        //             window.location.search;
            
        //     console.log( url );
            
        //     window.history.replaceState(null, document.title, url);
        // }
        // if (window.location.pathname.endsWith('//') === true) {
            
        //     var url = window.location.protocol + '//' + window.location.host + window.location.pathname + '/'
        //     url = url.replace(/(?<!:)\/+/gm, '/');
        //     window.history.replaceState(null, document.title, url);
        // }
        // else{
            var url = window.location.protocol + '//' + window.location.host + window.location.pathname;
url = url.replace(/(?<!:)\/+/gm, '/');
url += window.location.search; // Add back UTM parameters
window.history.replaceState(null, document.title, url);

        // }
    });



    jQuery(document).ready(function($) {
        // Share on Facebook
        $('#facebook-share').on('click', function() {
            var postURL = encodeURIComponent(window.location.href);
            var facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' + postURL;
            window.open(facebookURL, '_blank');
        });
    
        // Share on Twitter
        $('#twitter-share').on('click', function() {
            var postTitle = encodeURIComponent($('meta[property="og:title"]').attr('content'));
            var postURL = encodeURIComponent(window.location.href);
            var twitterURL = 'https://twitter.com/intent/tweet?text=' + postTitle + '&url=' + postURL;
            window.open(twitterURL, '_blank');
        });
    
            // Share on Linkedin
            $('#linkedin-share').on('click', function() {
            var postTitle = encodeURIComponent($('meta[property="og:title"]').attr('content'));
            var postURL = encodeURIComponent(window.location.href);
            var ogImage = encodeURIComponent($('meta[property="og:image"]').attr('content')); // Get the OG image URL
                var linkedURL = 'http://www.linkedin.com/shareArticle?mini=' + postTitle + '&url=' + postURL + '&title=' + postTitle + '&summary=&source=&armin=armin&images=' + ogImage; // Include OG image in the LinkedIn share URL
            window.open(linkedURL, '_blank');
        });
    
        // Add more click event handlers for other social buttons
    });
</script>
<script>
window.addEventListener("load", function () {
    function initializeIntlTelInput($input) {
        if (!$input.length) return;

        const input = $input[0];

        const iti = window.intlTelInput(input, {
            initialCountry: "auto",
            nationalMode: false,
            separateDialCode: false,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            geoIpLookup: function (callback) {
                $.get("https://ipinfo.io?token=ba93a587a8808f", function (resp) {
                    const countryCode = resp && resp.country ? resp.country : "pk";
                    callback(countryCode);
                }).fail(function () {
                    callback("pk");
                });
            }
        });

        function getDialCode() {
            const data = iti.getSelectedCountryData();
            return data ? `+${data.dialCode}` : '';
        }

        function insertDialCode() {
            const prefix = getDialCode();
            if (!$input.val().startsWith(prefix)) {
                $input.val(prefix);
            }
        }

        // 1. Insert code when country changes
        input.addEventListener("countrychange", insertDialCode);

        // 2. Prevent deleting dial code
        input.addEventListener("keydown", function (e) {
            const prefix = getDialCode();
            const cursorPos = input.selectionStart;

            // Prevent deleting or typing before the prefix
            if (
                cursorPos < prefix.length &&
                (e.key === "Backspace" || e.key === "Delete" || e.key.length === 1)
            ) {
                e.preventDefault();
            }
        });

        // 3. Re-insert dial code if user deletes or pastes something over it
        input.addEventListener("input", function () {
            const prefix = getDialCode();
            if (!$input.val().startsWith(prefix)) {
                const digits = $input.val().replace(/\D/g, ''); // only digits
                $input.val(prefix + digits);
            }
        });

        // 4. Prevent letters (alphabets)
        input.addEventListener("keypress", function (e) {
            if (e.ctrlKey || e.metaKey || e.altKey) return;

            const char = String.fromCharCode(e.which);
            if (!/^\d+$/.test(char)) {
                e.preventDefault();
            }
        });

        // 5. Re-apply dial code on focus or click
        input.addEventListener("focus", () => setTimeout(insertDialCode, 10));
        input.addEventListener("click", () => setTimeout(insertDialCode, 10));

        // 6. Final fallback (delayed)
        setTimeout(insertDialCode, 1500);
    }

    // ✅ Initialize for multiple phone fields
    initializeIntlTelInput($(".phonecountry1"));
    initializeIntlTelInput($(".phonecountry"));
    initializeIntlTelInput($(".gccphone"));
});
</script>
    <script>

if("Asia" == "<?php echo $first_location_name; ?>"){
    $('.footer-usa-locations').addClass('d-none');
    $('.footer-asia-locations').removeClass('d-none');
    $('.footer-uk-locations').addClass('d-none');
}
else if("USA" == "<?php echo $first_location_name; ?>"){
    $('.footer-usa-locations').removeClass('d-none');
    $('.footer-asia-locations').addClass('d-none');
    $('.footer-uk-locations').addClass('d-none');
}
else if("UK" == "<?php echo $first_location_name; ?>"){
    $('.footer-uk-locations').removeClass('d-none');
    $('.footer-asia-locations').addClass('d-none');
    $('.footer-usa-locations').addClass('d-none');
}
</script>
<?php wp_footer(); ?>
<script>
    jQuery('.testimonial-carousel-for-mobile-only').owlCarousel({
    autoplay: true,
    autoPlaySpeed: 3000,
    autoPlayTimeout: 3000,
    responsive : {
      // breakpoint from 0 up
      0 : {
        stagePadding: 0,
        loop: false,
        responsiveClass: true,
        dots: false,
        nav: false,
        autoHeight: true,
        items: 1
      },
      // breakpoint from 768 up
      768 : {
        items: 3,
        margin:20,
      }
    }
    });
    $(".prototype-slider").owlCarousel({loop:true,mouseDrag:!1,autoplay:!0,margin:15,animateOut:"fadeIn",nav:!0,dots:!1,navText:['<i class="fa-solid fa-arrow-left-long"></i>','<i class="fa-solid fa-arrow-right-long"></i>'],responsive:{0:{items:1},600:{items:1},1e3:{items:1}}});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const kill = () => {
    document.querySelectorAll('[data-aos]').forEach(el => {
      [...el.attributes].forEach(a => {
        if (a.name.startsWith('data-aos')) el.removeAttribute(a.name);
      });
    });
    if (window.AOS && AOS.refreshHard) AOS.refreshHard();
  };

  kill();
  setInterval(kill, 300); // keeps removing if something re-adds
});
</script>


<style>
#claim-business-modal.modal { display: none; position: fixed; z-index: 1;padding-top: 100px;left: 0;top: 0;width: 100%;height: 100%;overflow: auto;background-color: rgba(0,0,0,.9);background-color: rgba(0,0,0,.9);z-index: 999999999999999999;}
    .claim-modal .wpcf7-not-valid-tip {
    color: #ffffff;
    font-size: 1em;
    font-weight: normal;
    display: block;
}
.btns-box p {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: flex-end;
    justify-content: space-between;
    align-items: baseline;
    gap: 20px;
}
	</style>
    </main>
</body>
</html>