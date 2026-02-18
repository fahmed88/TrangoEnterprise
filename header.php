<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <base href="https://trangotech.com/microsoft/">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="facebook-domain-verification" content="5xgak9sc6notiewxocl9uir92adlpi" />
		<?php $page_id = get_the_ID(); 
        $page_url = get_permalink($page_id); ?>
        <link rel="alternate" hreflang="en-US" href="<?php echo $page_url; ?>" />
        <link rel="alternate" hreflang="x-default" href="<?php echo $page_url; ?>" />
        <link rel="icon" href="https://trangotech.com/favicon.png" sizes="48x48" />
        <link rel="icon" href="https://trangotech.com/favicon.png" sizes="192x192" />
        <link rel="apple-touch-icon" href="https://trangotech.com/favicon.png" />
        <meta name="msapplication-TileImage" content="https://trangotech.com/favicon.png" />
        <meta name="google-site-verification" content="BY2fr-RCwmOlSfu3I1CYgpRFAHuJvDoY3yG3nbyNvPo" />
        <?php if ( get_field('preload__banner_image') ) : ?><link rel="preload" as="image" href="<?php echo get_field('preload__banner_image');?>" type="image/webp" fetchpriority="high"><?php endif; ?>
        <?php
        $valu = get_post_meta(get_the_ID(), 'meta_links', true);
        if ($valu != '') { ?>
            <?php echo get_post_meta(get_the_ID(), 'meta_links', true); ?>
        <?php } ?>
        <?php wp_head(); ?>        
        <meta name="yandex-verification" content="2a517c9ef8409e9a" />
        <?php
        // $schema = get_post_meta(get_the_ID(), 'schema', true);
       
$schema = get_field('value'); // ACF field

if ($schema) :
    if (strpos($schema, '<script') !== false) {
        // If schema already includes <script>, output as-is
        echo $schema;
    } else {
        // Else, wrap it in <script> tag
        ?>
        <script type="application/ld+json">
        <?php echo $schema; ?>
        </script>
        <?php
    }
endif;  ?>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/63861c7fb0d6371309d1bc3c/1gj1tuljc';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-P5BWTS6');
        </script>
        <!-- End Google Tag Manager -->
        <!-- Meta Pixel Code -->
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '602991762697559');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=602991762697559&ev=PageView&noscript=1" /></noscript>
        <!-- End Meta Pixel Code -->

        <?php if (is_singular()) echo get_field('head_code'); ?>

    </head>

<body class="<?php echo @$args['class']; ?>">
<main>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5BWTS6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Scroll More Fixed Button -->
    <div class="vertical-scroll-but s test1">
        <svg width="36" height="50" viewBox="0 0 36 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="2.14258" y="2" width="31" height="46" rx="12" stroke="#565656" stroke-width="4" />
            <line x1="18.2422" y1="13.4286" x2="18.2422" y2="17.2857" stroke="#565656" stroke-width="4" stroke-linecap="round" />
        </svg>
        <i class="fa-solid fa-arrow-down-long"></i>
        <span>Scroll</span>
    </div>


    <div id="preloader">
        <video autoplay loop muted playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.webm" type="video/mp4">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.ogg" type="video/ogg">
        </video>
    </div>

    <div class="top-bar">
        <div class="container">
            <p>
                <span>
                    <svg class="call-icon" width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.9996 10.6092V8.84274C14.0081 8.55397 13.8895 8.27264 13.6663 8.05226C13.4431 7.83187 13.1308 7.68781 12.7888 7.64745C12.113 7.5729 11.4495 7.43463 10.8108 7.23529C10.5589 7.15607 10.2851 7.13892 10.0218 7.18588C9.75858 7.23284 9.51695 7.34194 9.32556 7.50025L8.43159 8.24804C6.6693 7.40984 5.21016 6.18929 4.20809 4.71517L5.10207 3.96738C5.29132 3.80729 5.42175 3.60517 5.47789 3.38498C5.53403 3.16478 5.51354 2.93574 5.41883 2.72499C5.18052 2.19078 5.01522 1.63573 4.92609 1.07043C4.87828 0.787475 4.70909 0.528716 4.45007 0.342384C4.19105 0.156052 3.85987 0.0548618 3.51826 0.0576743H1.40651C1.21106 0.0578282 1.01779 0.0920223 0.839003 0.15808C0.660218 0.224137 0.499835 0.32061 0.368066 0.441356C0.236296 0.562103 0.136027 0.704477 0.0736417 0.859414C0.0112568 1.01435 -0.011877 1.17846 0.00571348 1.34128C0.236769 3.1613 0.977102 4.91019 2.16674 6.44628C3.24748 7.86895 4.68945 9.07512 6.39023 9.97915C8.2183 10.9708 10.299 11.5899 12.465 11.7868C12.6603 11.8016 12.8571 11.782 13.0428 11.7295C13.2285 11.677 13.399 11.5926 13.5435 11.4817C13.6879 11.3709 13.8031 11.236 13.8817 11.0857C13.9602 10.9355 14.0004 10.7732 13.9996 10.6092Z" fill="#F6F6F6"></path>
                    </svg>
                    <a href="https://trangotech.com/connect-with-us/">Contact Us</a>
                </span>
                <?php
 header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
            header("Pragma: no-cache");
            header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");

            $default_number = get_option('header_number');
            $special_number = '+1 (833) 442 2711';

            // Check for UTM parameter immediately (works before page load)
            $is_special = isset($_GET['utm_source']) && $_GET['utm_source'] === 'clutch.co';

            // Start output immediately
            ?>
                <a href="tel:<?php echo $is_special ? htmlspecialchars($special_number) : htmlspecialchars($default_number); ?>">
            <span id="dynamic-phone"><?php echo $is_special ? htmlspecialchars($special_number) : htmlspecialchars($default_number); ?></span>

            <script>
            // Immediate check without waiting for DOMContentLoaded
            (function() {
                const phoneElement = document.getElementById('dynamic-phone');
                const shouldChange = document.referrer.includes('designrush.com') || 
                                window.location.search.includes('utm_source=clutch.co');
                
                if (shouldChange) {
                    // Change number instantly
                    phoneElement.textContent = '<?php echo $special_number; ?>';
                    
                    // Store in localStorage immediately
                    localStorage.specialPhoneNumber = '<?php echo $special_number; ?>';
                    
                    // Optional: Set cookie too
                    document.cookie = 'special_phone=<?php echo $special_number; ?>; max-age=2592000; path=/';
                } else if (localStorage.specialPhoneNumber) {
                    // Use stored number if available
                    phoneElement.textContent = localStorage.specialPhoneNumber;
                }
                
                // Double-check after 100ms to catch any referrer delay
                setTimeout(() => {
                    if (document.referrer.includes('designrush.com') && phoneElement.textContent !== '<?php echo $special_number; ?>') {
                        phoneElement.textContent = '<?php echo $special_number; ?>';
                        localStorage.specialPhoneNumber = '<?php echo $special_number; ?>';
                    }
                }, 50);
            })();
</script>
            </a>
            </p>
        </div>
    </div>

    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>


    <div class="header-wrapper <?php if (is_page('partner-with-us')): ?>white<?php endif; ?> <?php echo @$args['logo-class']; ?>">
        <div class="header">
            <div class="container">
                <div class="header-inner">
                    <div class="logo">
                        <a href="https://trangotech.com/">
                            <img class="logo-black img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.webp" alt="logo">
                            <img class="logo-white img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/logo-white.webp" alt="logo">
                        </a>
                    </div>

                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav-22" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon">☰</span>
                            </button>
                            <div class="collapse navbar-collapse" id="main_nav-22">
                                <!--    FOR MOBILE HEADER   -->
                                <div class="mobile-menu-header">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="276" height="261" viewBox="0 0 276 261" class="mobile-menu-logo">
                                        <image id="Layer_0" data-name="Layer 0" width="276" height="261" xlink:href="data:img/png;base64,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"></image>
                                    </svg>
                                    <!-- <img src="assets/img/home-out/footer-image.png" class="mobile-menu-logo" alt="Logo">-->
                                    <a href="#" class="closebtn">×</a>
                                </div>
                                <!-- FOR MOBILE HEADER   -->
                                <?php $navigations_path = 'https://trangotech.com/bpo/wp-content/themes/bpo/navigations/'; ?>
                                <ul class="navbar-nav">
                                    <?php
                                        echo file_get_contents($navigations_path . 'header-mobile.txt');
                                        echo file_get_contents($navigations_path . 'header-microsoft.txt');
                                        echo file_get_contents($navigations_path . 'header-ecommerce.txt');
                                        echo file_get_contents($navigations_path . 'header-staff-augmentation.txt');
                                        echo file_get_contents($navigations_path . 'header-bpo.txt');
                                        //echo file_get_contents($navigations_path . 'header-government.txt');
                                        echo file_get_contents($navigations_path . 'header-portfolio.txt');
                                        echo file_get_contents($navigations_path . 'header-company.txt');
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div class="square">
                        <a href="https://trangotech.com/connect-with-us/" class="btn btn-red square-pulse" data-track-element="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <g clip-path="url(#clip0_1217_5)">
                                    <path d="M7.49998 5.83337V0.833374H19.1666V9.16671H16.6666V13.3334L12.5 10M0.833313 5.83337H12.5V15H7.49998L3.33331 18.3334V15H0.833313V5.83337Z" stroke="white" stroke-width="1.5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1217_5">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Let's Talk
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>