<?php
/*
    Template Name: Dynamics ERP healthcare
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>
<!-- BANNER SECTION START -->
 <?php
 $links = get_field('banner_cta_1');
 $links2 = get_field('banner_cta_2');
 ?>
<section class="section business-central-integration-banner erp-healthcare-banner no-lzl-section">
    <div class="container">
        <div class="row align-items-center mt-lg-3 gx-0">
            <div class="col-lg-7">
                <div class="text-cont pt-4">
                    <h1 class="banner-subheading"><?php echo get_field('banner_top_subheadig'); ?></h1>
                    <h2 class="banner-title">
                        <?php echo get_field('banner_heading'); ?>
                    </h2>
                    <?php echo get_field('banner_description'); ?>
                    <div class="btns justify-content-lg-start">
                        <?php if($links): ?>
                        <a href="<?php echo esc_url($links['url']); ?>" class="square-pulse btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo esc_html($links['title']); ?>
                        </a>
                        <?php endif; ?>
                        <?php if($links2): ?>
                        <a href="<?php echo esc_url($links2['url']); ?>" class="btn-pink" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo esc_html($links2['title']); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                    <p class="mt-3"><?php echo get_field('banner_contact'); ?></p>
                    <?php get_template_part('template-parts/global/5-stars-badge');?>
                </div>
            </div>
            <div class="col-lg-5">
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

<section class="section dynamics-magento-integration-counter mb-xxl-0 mb-xl-0 pt-0 mt-lg-5">
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


<!-- operational challenges section start -->
<?php 
    $cardSec = ['class' => ''];
get_template_part('template-parts/global/operational-challenges-cards',null,$cardSec)?>
<!-- operational challenges section end -->

<!-- Why choose section start  -->
<?php
 $whyChooseSec = [
    'class' => 'advanced-customization-services-cards bg-white',
    'row_class' => 'gx-0'
];
 get_template_part('template-parts/global/solution-cards1',null,$whyChooseSec)?>
<!-- Why choose section end  -->
<!-- implementation process vertical section start  -->


<section class="section seamless-healthcare-system">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('shs_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('shs_section_description'); ?>
            </p>
        </div>

        <!-- EHR Integrations -->
        <div class="box">
            <h3><?php echo get_field('shs_ehr_heading'); ?></h3>
            <div class="row gy-4">
                <?php if( have_rows('shs_ehr_integrations') ): ?>
                    <?php while( have_rows('shs_ehr_integrations') ): the_row(); ?>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="left"><?php echo get_sub_field('ehr_number'); ?></div>
                                <div class="right">
                                    <span class="card-title"><?php echo get_sub_field('ehr_title'); ?></span>
                                    <p><?php echo get_sub_field('ehr_description'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- PACS Integrations -->
        <div class="box">
            <h3><?php echo get_field('shs_pacs_heading'); ?></h3>
            <div class="row gy-4">
                <?php if( have_rows('shs_pacs_integrations') ): ?>
                    <?php while( have_rows('shs_pacs_integrations') ): the_row(); ?>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="left">
                                    <?php echo get_sub_field('pacs_svg'); ?>
                                </div>
                                <div class="right">
                                    <span class="card-title"><?php echo get_sub_field('pacs_title'); ?></span>
                                    <p><?php echo get_sub_field('pacs_description'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Button -->
        <div class="square text-center mt-5">
            <a href="<?php echo get_field('shs_demo_button_url'); ?>" class="square-pulse btn btn-red text-capitalize"  data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('shs_demo_button_text'); ?>
            </a>
        </div>
    </div>
</section>



<section class="section dynamic-365-solutions erp-implementation-solutions erp-healthcare-solutions">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('d365_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('d365_section_description'); ?>
            </p>
        </div>

        <div class="row gy-4">
            <!-- Left Card -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo get_field('d365_left_card_heading'); ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="key-features">
                            <ul>
                                <?php if( have_rows('d365_left_card_features') ): ?>
                                    <?php while( have_rows('d365_left_card_features') ): the_row(); ?>
                                        <li>
                                            <h4><?php echo get_sub_field('left_feature_title'); ?></h4>
                                            <p><?php echo get_sub_field('left_feature_description'); ?></p>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Card -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <?php if( get_field('d365_right_card_logo') ): ?>
                                <span>
                                    <img src="<?php echo get_field('d365_right_card_logo'); ?>" alt="logo" class="img-fluid">
                                </span>
                            <?php endif; ?>
                            <?php echo get_field('d365_right_card_heading'); ?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <ul class="custom-healthcare-solutions">
                            <?php if( have_rows('d365_right_card_solutions') ): ?>
                                <?php while( have_rows('d365_right_card_solutions') ): the_row(); ?>
                                    <li>
                                        <div class="svg-content">
                                            <?php echo get_sub_field('right_svg'); ?>
                                        </div>
                                        <div class="text-content">
                                            <p><?php echo get_sub_field('right_text'); ?></p>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button -->
        <div class="square text-center mt-5">
            <a href="<?php echo get_field('d365_button_url'); ?>" class="square-pulse btn btn-red text-capitalize"  data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('d365_button_text'); ?>
            </a>
        </div>
    </div>
</section>

<!-- implementation process vertical section start  -->
<?php
$process = ['class' => 'bg-gray'];
get_template_part('template-parts/global/implementation-process-vertilce',null,$process);
?>
<!-- implementation process vertical section end  -->


<!-- Instant Cost Estimates section start -->
<section class="section why-business-central diverse-business-needs investment-options-healthcare">
    <div class="container">
        <div class="text-cont text-center mb-3">
            <h2 class="section-title">
                <?php echo get_field('dbn_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('dbn_section_description'); ?>
            </p>
        </div>

        <?php if (have_rows('dbn_packages')): ?>
        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <?php if (have_rows('dbn_table_headers')): ?>
                            <?php while (have_rows('dbn_table_headers')): the_row(); ?>
                                <th><?php echo get_sub_field('dbn_table_header_label'); ?></th>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while(have_rows('dbn_packages')): the_row(); ?>
                        <tr class="<?php echo get_sub_field('dbn_package_class'); ?>">
                            <td><?php echo get_sub_field('dbn_package_name'); ?></td>
                            <td><?php echo get_sub_field('dbn_package_audience'); ?></td>
                           <?php //echo wp_kses_post(get_sub_field('dbn_package_capabilities')); ?>
                            <td><?php echo get_sub_field('dbn_package_investment'); ?></td>
                            <td><?php echo get_sub_field('dbn_package_timeline'); ?></td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php endif; ?>

        <div class="square text-center mt-5">
            <a href="<?php echo esc_url(get_field('dbn_button_link')); ?>" class="square-pulse btn btn-red text-capitalize px-5" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo esc_html(get_field('dbn_button_text')); ?>
            </a>
        </div>
    </div>
</section>

<!-- Instant Cost Estimates section End -->


<section class="section why-business-central cost-key-factors legacy-healthcare-erps bg-ghost-white">
    <div class="container">
        <div class="text-cont text-center mb-3">
            <h2 class="section-title">
                <?php echo get_field('bcp_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('bcp_section_description'); ?>
            </p>
        </div>

        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <?php if (have_rows('bcp_table_headings')): ?>
                                <?php while (have_rows('bcp_table_headings')): the_row(); ?>
                                    <th><?php echo get_sub_field('bcp_heading_text'); ?></th>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (have_rows('bcp_table_rows')): ?>
                            <?php while (have_rows('bcp_table_rows')): the_row(); ?>
                                <tr>
                                    <td><?php echo get_sub_field('bcp_row_label'); ?></td>
                                    <?php if (have_rows('bcp_row_values')): ?>
                                        <?php while (have_rows('bcp_row_values')): the_row(); ?>
                                            <td>
                                                <?php 
                                                    $value_text = get_sub_field('bcp_value_text');
                                                    $value_rating = get_sub_field('bcp_value_rating');
                                                ?>
                                                
                                                <?php if ($value_text): ?>
                                                    <?php echo esc_html($value_text); ?>
                                                <?php endif; ?>

                                                <?php if ($value_rating): ?>
                                                    <div class="rating-stars">
                                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                                            <?php if ($i <= $value_rating): ?>
                                                                <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.5188 0.0976562L12.8331 7.22049H20.3225L14.2635 11.6226L16.5778 18.7455L10.5188 14.3433L4.45973 18.7455L6.77408 11.6226L0.715033 7.22049H8.20442L10.5188 0.0976562Z" fill="#FFB900"/>
                                                                </svg>
                                                            <?php else: ?>
                                                                <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.5188 0.0976562L12.8331 7.22049H20.3225L14.2635 11.6226L16.5778 18.7455L10.5188 14.3433L4.45973 18.7455L6.77408 11.6226L0.715033 7.22049H8.20442L10.5188 0.0976562Z" fill="#ccc"/>
                                                                </svg>
                                                            <?php endif; ?>
                                                        <?php endfor; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </td>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="square text-center mt-5">
            <?php if (get_field('bcp_cta_text')): ?>
                <a href="<?php echo get_field('bcp_cta_link'); ?>" class="square-pulse btn btn-red text-capitalize px-5"  data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo get_field('bcp_cta_text'); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="section patient-satisfaction">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('ps_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('ps_section_description'); ?>
            </p>
        </div>

        <div class="row gy-4">
            <?php if (have_rows('ps_cards')): ?>
                <?php while (have_rows('ps_cards')): the_row(); ?>
                    <div class="col-lg-4">
                        <div class="card">
                            <h3><?php echo get_sub_field('ps_card_title'); ?></h3>
                            <ul>
                                <?php if (have_rows('ps_card_items')): ?>
                                    <?php while (have_rows('ps_card_items')): the_row(); ?>
                                        <li><?php echo get_sub_field('ps_card_item_text'); ?></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <?php if (get_field('ps_button_text')): ?>
            <div class="square text-center mt-5">
                <a href="<?php echo get_field('ps_button_link'); ?>" class="square-pulse btn btn-red text-capitalize px-5"  data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo get_field('ps_button_text'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>



<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'    => $faqs_heading,
    'content'  => $faqs_content,
    'category' => 'dynamics-erp-healthcare',
    'bg_class' => 'offWhite-bg',
    'show_search' => false,

];
get_template_part('template-parts/global/faqs', null, $faqs);?> 
<!-- ASK-QUESTION  END -->


<!-- Transform Business START -->
<?php
	 get_template_part('template-parts/business-central-integration/transform-business', null, $faqs);
?> 
<!-- Transform Business  END -->

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


<?php get_footer(); ?>