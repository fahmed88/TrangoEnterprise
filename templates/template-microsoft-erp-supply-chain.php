<?php
/*
    Template Name: ERP Supply Chain
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>
<!-- BANNER SECTION START -->
 <?php
 $links = get_field('banner_cta_1');
 $links2 = get_field('banner_cta_2');
 ?>
<section class="section business-central-integration-banner erp-supply-chain-banner no-lzl-section">
    <div class="container">
        <div class="row mt-lg-3 gx-0">
            <div class="col-lg-6">
                <div class="text-cont pt-5">
                    <h1 class="banner-subheading"><?php echo get_field('banner_top_subheadig'); ?></h1>
                    <h2 class="banner-title">
                        <?php echo get_field('banner_heading'); ?>
                    </h2>
                    <?php echo get_field('banner_description'); ?>
                    <div class="btns justify-content-lg-start">
                        <?php if($links): ?>
                        <a href="<?php echo esc_url($links['url']); ?>" class="text-capitalize btn-red square-pulse" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo esc_html($links['title']); ?>
                        </a>
                        <?php endif; ?>
                        <?php if($links2): ?>
                        <a href="<?php echo esc_url($links2['url']); ?>" class="text-capitalize btn-pink " data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo esc_html($links2['title']); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                    <span class="limited-offer text-gray"><?php echo get_field('banner_contact'); ?></span>
                    <?php get_template_part('template-parts/global/5-stars-badge');?>
                </div>
            </div>
             <div class="col-lg-6">
                <div class="banner-img">
                    <picture class="no-lazy">
                        <?php
                        $desktop_banner_image = get_field('banner_image');
                        $mobile_banner_image = get_field('banner__mobile_image');
                        ?>
                        <source media="(max-width:767px)" srcset="<?php echo $mobile_banner_image ? $mobile_banner_image : $desktop_banner_image; ?>">
                        <img src="<?php echo $desktop_banner_image; ?>" alt="<?php echo wp_strip_all_tags(get_field('banner_heading'))?>" loading="eager" fetchpriority="high" decoding="async" class="img-fluid no-lazy">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BANNER SECTION END -->

<section class="section dynamics-magento-integration-counter mb-xxl-0 mb-xl-0 pt-0">
    <div class="container">
        <div class="ms-dynamics-counter-wraper position-static">
            <div class="row justify-content-center gy-3 gy-lg-0">
                <?php if( have_rows('counter_items') ): ?>
                       <?php while( have_rows('counter_items') ): the_row(); 
            $number = get_sub_field('number');
            $counter_sign = get_sub_field('counter_sign');
            $text   = get_sub_field('text');
            $icon_svg   = get_sub_field('icon'); 
        ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-card">
                        <div class="icon">
                           <?php echo $icon_svg; ?>
                        </div>
						<div class="counter">
                      <?php if (is_numeric($number)): ?>
    <span class="count" data-counter-lim="<?php echo esc_attr($number); ?>">
        <?php echo esc_html($number); ?> 
							</span><span class="conter-icon"><?php echo esc_html($counter_sign); ?></span>
							<p><?php echo esc_html($text); ?></p>
<?php else: ?>
   
        
		<span class="conter-icon"><?php echo esc_html($number); ?></span>
    <p><?php echo esc_html($text); ?></p>
   
<?php endif; ?>
						</div>
						
						

                    </div>
                </div>
               
                 <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="section why-choose-dynamics-supply-chain">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php the_field('wcdsc_section_title'); ?>
            </h2>
            <p class="section-content pt-0 mt-0 text-center">
                <?php the_field('wcdsc_section_description'); ?>
            </p>
        </div>

        <?php if( have_rows('wcdsc_cards') ): ?>
        <div class="row gy-4 gx-3 justify-content-center">
            <?php while( have_rows('wcdsc_cards') ): the_row(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-inner">
                            <div class="svg-content">
                                <?php 
                                $icon = get_sub_field('wcdsc_card_icon');
                                if($icon){
                                    echo wp_get_attachment_image($icon, 'full'); 
                                }
                                ?>
                            </div>
                            <div class="text-content">
                                <h3><?php the_sub_field('wcdsc_card_heading'); ?></h3>
                                <h4><?php the_sub_field('wcdsc_card_subheading'); ?></h4>
                                <p><?php the_sub_field('wcdsc_card_description'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <div class="square text-center mt-5">
            <a href="<?php the_field('wcdsc_button_link'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php the_field('wcdsc_button_text'); ?>
            </a>
        </div>
    </div>
</section>

<!-- Transform Erp Cards section start  -->
<?php
$erp_cards = [
    'class' => 'erp-implementation-solutions bg-white'
];
get_template_part('template-parts/global/Transform-erp-cards',null,$erp_cards);
?>
<!-- Transform Erp Cards section end  -->

<section class="section ms-dynamics-comprehensive-tabs-section fo-implementation-services supply-chain-modules-tabs mt-0 dark-gray-bg">
    <div class="container">
        <div class="text-content text-center">
            <h2 class="section-title mb-lg-2">
                <?php the_field('mdcts_section_heading'); ?>
            </h2>
            <p class="section-content text-center pt-lg-0">
                <?php the_field('mdcts_section_description'); ?>
            </p>
        </div>

        <?php if( have_rows('mdcts_tabs_repeater') ): ?>
        <div class="ms-dynamics-comprehensive-tabs">
            <div class="row">
                <!-- LEFT SIDE (Tabs) -->
                <div class="col-md-4 col-lg-4 tabs-column">
                     <div class="scroll-btns">
                        <a href="javascript:;" class="scroll-up">
                            <svg width="16" height="25" viewBox="0 0 16 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.45397 0.911036C8.06345 0.520512 7.43028 0.520512 7.03976 0.911036L0.675796 7.275C0.285271 7.66552 0.285271 8.29869 0.675796 8.68921C1.06632 9.07974 1.69949 9.07974 2.09001 8.68921L7.74686 3.03236L13.4037 8.68921C13.7942 9.07973 14.4274 9.07973 14.8179 8.68921C15.2085 8.29869 15.2085 7.66552 14.8179 7.275L8.45397 0.911036ZM7.74686 24.1731L8.74686 24.1731L8.74686 1.61814L7.74686 1.61814L6.74686 1.61814L6.74686 24.1731L7.74686 24.1731Z" fill="black"/>
                            </svg>
                        </a>
                        <a href="javascript:;" class="scroll-down">
                            <svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.03976 23.4527C7.43028 23.8433 8.06345 23.8433 8.45397 23.4527L14.8179 17.0888C15.2085 16.6982 15.2085 16.0651 14.8179 15.6746C14.4274 15.284 13.7942 15.284 13.4037 15.6746L7.74686 21.3314L2.09001 15.6746C1.69949 15.284 1.06632 15.284 0.675797 15.6746C0.285272 16.0651 0.285272 16.6982 0.675797 17.0888L7.03976 23.4527ZM7.74686 0.190674L6.74686 0.190674L6.74686 22.7456L7.74686 22.7456L8.74686 22.7456L8.74686 0.190674L7.74686 0.190674Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                    <ul class="nav nav-tabs scroll-content border-0" role="tablist">
                        <?php 
                        $i=0; 
                        while( have_rows('mdcts_tabs_repeater') ): the_row(); 
                            $tab_title = get_sub_field('mdcts_tab_title');
                        ?>
                        <li class="nav-item">
                            <a id="cross-plat-<?php echo $i; ?>" href="#tab-<?php echo $i; ?>" class="nav-link <?php echo $i==0?'active':''; ?>" data-bs-toggle="tab" role="tab">
                                <?php echo $tab_title; ?>
                                 <span class="icon">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.83077 0.944824L14.3846 13.4987L14.3846 2.25252L17 2.25252L17 17.9448L1.30769 17.9448L1.30769 15.3294L12.5538 15.3294L5.81212e-07 2.77559L1.83077 0.944824Z" fill="black"/>
                                            </svg>
                                        </span>
                            </a>
                        </li>
                        <?php $i++; endwhile; ?>
                    </ul>
                </div>

                <!-- RIGHT SIDE (Tab Content) -->
                <div class="col-md-8 col-lg-8 right-tabs-column">
                     <div id="content" class="tab-content" role="tablist">
                        <?php 
                        $j=0; 
                        while( have_rows('mdcts_tabs_repeater') ): the_row(); 
                            $tab_heading      = get_sub_field('mdcts_tab_heading');
                            $tab_subheading   = get_sub_field('mdcts_tab_subheading');
                            $tab_description  = get_sub_field('mdcts_tab_description');
                            $tab_image        = get_sub_field('mdcts_tab_image');
                            $tab_button_text  = get_sub_field('mdcts_tab_button_text');
                            $tab_button_link  = get_sub_field('mdcts_tab_button_link');
                        ?>
                        <div id="tab-<?php echo $j; ?>" class="card tab-pane fade <?php echo $j==0?'show active':''; ?>" role="tabpanel">
                             <div class="card-header" role="tab" id="cross-plat-heading-<?php echo $j; ?>">
                                <div class="mb-0 mobile-accordion-btn">
                                    <a data-bs-toggle="collapse" href="#cross-plat-collapse-<?php echo $j; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $j; ?>">
                                        <?php echo $tab_heading; ?>
                                    </a>
                                </div>
                            </div>
                            <div id="tab-<?php echo $j; ?>" class="card tab-pane fade show active" role="tabpanel">
                            <div class="card-body p-lg-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="txt-cnt">
                                            <?php if($tab_image): ?>
                                                <div class="cont-img">
                                                    <img src="<?php echo esc_url($tab_image['url']); ?>" alt="<?php echo esc_attr($tab_image['alt']); ?>" class="img-fluid">
                                                </div>
                                            <?php endif; ?>
                                            <div class="inner-text-box">
                                                <?php if($tab_heading): ?>
                                                <h3><?php echo $tab_heading; ?></h3>
                                                <?php endif; ?>
                                                <?php if($tab_subheading): ?>
                                                <h4><?php echo $tab_subheading; ?></h4>
                                                <?php endif; ?>
                                                <?php if($tab_description): ?>
                                                <p><?php echo $tab_description; ?></p>
                                                <?php endif; ?>
                                                
                                                <?php if( have_rows('mdcts_tab_features') ): ?>
                                                <ul>
                                                    <?php while( have_rows('mdcts_tab_features') ): the_row(); ?>
                                                        <li><?php the_sub_field('mdcts_feature_item'); ?></li>
                                                    <?php endwhile; ?>
                                                </ul>
                                                <?php endif; ?>

                                                <?php if($tab_button_text): ?>
                                                <div class="square mt-4 mb-3">
                                                    <a href="<?php echo $tab_button_link; ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                                                        <?php echo $tab_button_text; ?>
                                                    </a>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                </div>
                        <?php $j++; endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>


<!-- implementation process vertical section start  -->
<?php
$process = ['class' => 'bg-white'];
get_template_part('template-parts/global/implementation-process-vertilce',null,$process);
?>
<!-- implementation process vertical section end  -->
<!-- finance and operations pricing and licensing section start -->
<?php 
$pricing = ['class' => 'pb-5'];
get_template_part('template-parts/global/finance-operations-pricing-new',null,$pricing);?>
<!-- finance and operations pricing and licensing section End -->




<!-- operational challenges section start -->
<?php 
    $cardSec = ['class' => ''];
get_template_part('template-parts/global/operational-challenges-cards',null,$cardSec)?>
<!-- operational challenges section end -->

<!-- expertise and results section start  -->
<?php
$expertise = ['class' => 'dark-gray-bg pb-lg-5 bg-white'];
get_template_part('template-parts/global/expertise-and-results',null,$expertise);
?>
<!-- expertise  section end  -->



<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'    => $faqs_heading,
    'content'  => $faqs_content,
    'category' => 'erp-supply-chain',
    'bg_class' => 'bg-gray',
    'show_search' => false,
    //'styles' => 'background: linear-gradient(180deg, #FFFFFF 0%, #F5F5F5 100%) !important;',

];
get_template_part('template-parts/global/faqs', null, $faqs);?> 
<!-- ASK-QUESTION  END -->

<!-- Transform Business START -->
<?php
	 get_template_part('template-parts/business-central-integration/transform-business', null, $faqs);
?> 
<!-- Transform Business  END -->

<?php get_footer(); ?>
<script>
    $('.client-carousel').owlCarousel({
        loop: false,
        margin: 20,
        autoplay: false,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    $('.single-testimonials-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
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


</script>

<script>
    // portfolio slider full start
    $(function(){
        var owl = $('.portfolio-slider-full');
        owl.owlCarousel({
            autoplay: false,
            dots:true,
            nav:true,
            navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
            items:1,
            animateOut: 'fadeOut',
            mouseDrag: false,
            loop: false,
            onInitialized  : counter, //When the plugin has initialized.
            onTranslated : counter //When the translation of the stage has finished.
        });

        function counter(event) {
            var element   = event.target;         // DOM element, in this example .owl-carousel
            var items     = event.item.count;     // Number of items
            var item      = event.item.index + 1;     // Position of the current item

            // it loop is true then reset counter from 1
            if(item > items) {
                item = item - items
            }
            // $('#counter').html("item "+item+" of "+items)
            $('#slides-counter').html(" <span>" + item + " </span> " + "<span>" + items + "</span>");
        }

        $('.tab-slider').owlCarousel({
            loop:false,
            stagePadding: 100,
            margin:10,
            autoWidth:true,
            nav:false,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        });
        $('.tab-slider .nav-item .nav-link').on('click', function(){
            $('.tab-slider .nav-item .nav-link').removeClass('active');
            $(this).addClass('active');
        });
    });
    // End
    // portfolio slider full end
</script>

<script>
    $('.clients-adore-slider').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
</script>


<script>
    $('.actual-clients-slider').owlCarousel({
        loop:false,
        margin:20,
        nav:true,
        dots:false,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2,
                autoplay: true
            },
            1000:{
                items:3
            }
        }
    });
    $('.trusted-microsoft-partner-slider').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        center:true,
        dots:false,
         autoplay:true,
        // stagePadding: 300,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1.5
            },
            1000:{
                items:1.5
            }
        }
    });
    $('.why-our-clients').owlCarousel({
        loop: true,
        margin: 20,
        autoplay: true,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    $('.testimonial-carousel-for-mobile-only').owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                loop: false,
                dots: false,
                nav: false,
                autoHeight: true
            },
            768: {
                items: 2,
                margin: 20
            },
            1000: {
                items: 3,
                margin: 20
            }

        }
    });
</script>

<script>
    // Handle tab click manually
    $('.finance-operations-modules .modules-carousel .nav-link').on('click', function (e) {
        e.preventDefault();

        $('.finance-operations-modules .modules-carousel .nav-link').removeClass('tab-active');

        $(this).addClass('tab-active');

        $('.finance-operations-modules .tab-content .tab-pane').removeClass('show active');

        const target = $(this).attr('href');
        $(target).addClass('show active');
    });

    $(".modules-carousel").owlCarousel({
        items: 2,
        margin: 30,
        loop: false,
        nav: true,
        dots: false,
        autoplay: false,
        autoWidth:true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 3,
            },
            992: {
                items: 5.2,
            }
        }
    });

    $(document).ready(function () {
        // Hide all
        $('.accordion-collapse').hide();

        // Show only the first one
        $('.accordion-collapse').first().show();
        $('.accordion-button').first().removeClass('collapsed');

        // On button click
        $('.accordion-button').on('click', function (e) {
            e.preventDefault();

            var $button = $(this);
            var $target = $button.closest('.accordion-item').find('.accordion-collapse');

            // If already open, do nothing
            if ($target.is(':visible')) return;

            // Close all
            $('.accordion-collapse').slideUp();
            $('.accordion-button').addClass('collapsed');

            // Open clicked
            $target.slideDown();
            $button.removeClass('collapsed');
        });
    });

</script>

<script>
    const list = document.getElementById("scrollList");
    const items = list.querySelectorAll("li");

    list.addEventListener("scroll", () => {
        let listRect = list.getBoundingClientRect();
        let center = listRect.top + listRect.height / 2;

        let closestIndex = -1;
        let closestDistance = Infinity;

        items.forEach((li, index) => {
            let liRect = li.getBoundingClientRect();
            let liCenter = liRect.top + liRect.height / 2;
            let distance = Math.abs(center - liCenter);

            if (distance < closestDistance) {
                closestDistance = distance;
                closestIndex = index;
            }
        });

        // remove all active
        items.forEach(li => li.classList.remove("active"));

        // active lagao center wale aur uske agle wale par
        if (closestIndex !== -1) {
            items[closestIndex].classList.add("active");
            if (items[closestIndex + 1]) {
                items[closestIndex + 1].classList.add("active");
            }
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const scrollList = document.querySelector("#scrollList");
        const scrollTrack = document.querySelector(".scroll-height-control");
        const trackDiv = scrollTrack.querySelector(".track-div");

        function updateScrollIndicator() {
            const contentHeight = scrollList.scrollHeight; // total content height
            const visibleHeight = scrollList.clientHeight; // visible area
            const scrollTop = scrollList.scrollTop; // how much scrolled
            const trackHeight = scrollTrack.offsetHeight;

            // thumb (track-div) ka height calculate
            const thumbHeight = Math.max(
                (visibleHeight / contentHeight) * trackHeight,
                30 // min size
            );
            trackDiv.style.height = thumbHeight + "px";

            // thumb ki position calculate
            const maxThumbTop = trackHeight - thumbHeight;
            const thumbTop =
                (scrollTop / (contentHeight - visibleHeight)) * maxThumbTop;

            trackDiv.style.top = thumbTop + "px";
        }

        // Initial set
        updateScrollIndicator();

        // Jab bhi scroll ho
        scrollList.addEventListener("scroll", updateScrollIndicator);

        // Resize pe bhi re-calc
        window.addEventListener("resize", updateScrollIndicator);
    });

</script>

<script>
    $(document).ready(function () {
        let $scrollDiv = $(".scroll-content");
        let scrollAmount = 100; // kitna scroll karna hai

        $(".scroll-up").on("click", function () {
            $scrollDiv.animate({
                scrollTop: $scrollDiv.scrollTop() - scrollAmount
            }, 300);
        });

        $(".scroll-down").on("click", function () {
            $scrollDiv.animate({
                scrollTop: $scrollDiv.scrollTop() + scrollAmount
            }, 300);
        });
    });
    // manufacturing-success-stories-carousel
    $('.manufacturing-success-stories-carousel').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        dots: false,
        nav: true,
        navText: [
            '<svg width="28" height="15" viewBox="0 0 28 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.66848 8.16361C0.28644 7.76478 0.300049 7.13176 0.698877 6.74972L7.19816 0.524017C7.59698 0.141977 8.23 0.155586 8.61204 0.554414C8.99408 0.953242 8.98047 1.58626 8.58164 1.9683L2.80451 7.50226L8.33847 13.2794C8.72051 13.6782 8.7069 14.3112 8.30807 14.6933C7.90924 15.0753 7.27622 15.0617 6.89418 14.6629L0.66848 8.16361ZM27.2963 8.02881L27.2748 9.02858L1.36913 8.47163L1.39062 7.47186L1.41212 6.47209L27.3178 7.02904L27.2963 8.02881Z" fill="white"/></svg>',
            '<svg width="28" height="15" viewBox="0 0 28 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M27.1722 8.16361C27.5542 7.76478 27.5406 7.13176 27.1418 6.74972L20.6425 0.524017C20.2437 0.141977 19.6106 0.155586 19.2286 0.554414C18.8466 0.953242 18.8602 1.58626 19.259 1.9683L25.0361 7.50226L19.5022 13.2794C19.1201 13.6782 19.1338 14.3112 19.5326 14.6933C19.9314 15.0753 20.5644 15.0617 20.9465 14.6629L27.1722 8.16361ZM0.544312 8.02881L0.565806 9.02858L26.4715 8.47163L26.45 7.47186L26.4285 6.47209L0.522818 7.02904L0.544312 8.02881Z" fill="white"/></svg>'
        ],
        responsive: {
            0: {
                loop: true,
                items: 1.3 ,
                center: true ,
                margin: 10
            },
            425 : {
                loop: true,
                items: 1.4 ,
                center : true
            },
            768: {
                loop: true,
                items: 2 ,
                center: false
            },
            1000: {
                items: 3 ,
                margin: 30
            }
        }
    });
</script>