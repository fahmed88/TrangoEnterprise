<?php
/*
    Template Name: Microsft Erp Discovery
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>
<!-- BANNER SECTION START -->
 <?php
 $links = get_field('banner_cta_1');
 ?>
<section class="section business-central-integration-banner erp-discovery-banner no-lzl-section">
    <div class="container">
         <div class="row mt-lg-3 gx-0">
            <div class="col-lg-7">
                <div class="text-cont pt-5">
                    <h1 class="banner-subheading"><?php echo get_field('banner_top_subheadig'); ?></h1>
                    <h2 class="banner-title">
                        <?php echo get_field('banner_heading'); ?>
                    </h2>
                   <p class="banner-text"> <?php echo get_field('banner_description'); ?></p>
                    <div class="btns justify-content-lg-start">
                        <a href="<?php echo esc_url($links['url']); ?>" class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo esc_html($links['title']); ?>
                        </a>
                    </div>
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

<!-- operational challenges section start -->
<section class="section what-is-erp-discovery">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-cont">
                    <h2 class="section-title">
                        <?php echo get_field('erp_discovery_section_title'); ?>
                    </h2>
                    
                        <?php echo get_field('erp_discovery_section_content'); ?>
                   
                    <?php if (get_field('erp_discovery_button_text')): ?>
                        <div class="square mt-4">
                            <a href="<?php echo get_field('erp_discovery_button_link'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                                <?php echo get_field('erp_discovery_button_text'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-cont">
                    <?php if ($image = get_field('erp_discovery_image')): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- operational challenges section end -->

<section class="section manufacturing-success-stories bg-white">
    <div class="container position-relative">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('mss_section_title'); ?>
            </h2>
           
                <?php echo get_field('mss_section_description'); ?>
           
        </div>

        <?php if (have_rows('mss_cards')): ?>
        <div class="owl-carousel owl-theme manufacturing-success-stories-carousel">
            <?php while (have_rows('mss_cards')): the_row(); ?>
                <div class="item">
                    <div class="card h-100 bg-white">
                        <div class="img-content">
                            <?php echo get_sub_field('mss_card_icon'); ?>
                        </div>
                        <div class="text-content">
                            <h3><?php echo get_sub_field('mss_card_title'); ?></h3>
                            <div class="efficiency-parent">
                                <div class="efficiency">
                                    <div class="left">
                                        <span class="txt"><?php echo get_sub_field('mss_card_efficiency'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <p><?php echo get_sub_field('mss_card_description'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <?php if (get_field('mss_button_text')): ?>
        <div class="square text-center mt-5">
            <a href="<?php echo get_field('mss_button_link'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('mss_button_text'); ?>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>


<section class="animated-row section our-amazon-integration-process proven-six-steps erp-discovery-four-steps pb-5 dark-gray-bg">
    <div class="container">
        <div class="text-center text-cont">
            <h2 class="section-title">
                <?php echo get_field('aip_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('aip_section_description'); ?>
            </p>
        </div>

        <div class="tabs-wrapper bg-white">
            <div class="responsive-tabs">
                <?php if (have_rows('aip_steps')): ?>
                    <ul class="nav nav-tabs" role="tablist">
                        <?php $i = 0; while (have_rows('aip_steps')): the_row(); ?>
                            <li class="nav-item">
                                <a id="tab-<?php echo $i; ?>" href="#pos-<?php echo $i; ?>" class="nav-link <?php echo $i==0 ? 'active' : ''; ?>" data-bs-toggle="tab" role="tab">
                                    <span><?php echo get_sub_field('aip_phase_label'); ?></span>
                                </a>
                            </li>
                        <?php $i++; endwhile; ?>
                    </ul>

                    <div id="content" class="tab-content" role="tablist">
                        <?php $j = 0; while (have_rows('aip_steps')): the_row(); ?>
                            <div id="pos-<?php echo $j; ?>" class="card tab-pane fade <?php echo $j==0 ? 'show active' : ''; ?>" role="tabpanel" aria-labelledby="tab-<?php echo $j; ?>">
                                <div class="card-header" role="tab" id="heading-<?php echo $j; ?>">
                                    <div class="mb-0">
                                        <a data-bs-toggle="collapse" href="#pos-collapse-<?php echo $j; ?>" aria-expanded="<?php echo $j==0 ? 'true' : 'false'; ?>" aria-controls="collapse-<?php echo $j; ?>">
                                            <span><?php echo get_sub_field('aip_week'); ?></span>
                                            <?php echo get_sub_field('aip_phase_title'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div id="pos-collapse-<?php echo $j; ?>" class="collapse <?php echo $j==0 ? 'show' : ''; ?>" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-<?php echo $j; ?>">
                                    <div class="card-body bg-white">
                                        <h3><?php echo get_sub_field('aip_phase_title'); ?></h3>
                                        <p><?php echo get_sub_field('aip_phase_content'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php $j++; endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if (get_field('aip_button_text')): ?>
            <div class="square d-flex justify-content-center mt-5">
                <a href="<?php echo get_field('aip_button_link'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo get_field('aip_button_text'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>


<!-- Business Central Pricing Section Start -->
<section class="section why-business-central cost-key-factors bg-white pb-0">
    <div class="container">
        <div class="text-cont text-center mb-3">
            <h2 class="section-title">
                <?php echo get_field('bc_pricing_section_title_v2'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('bc_pricing_section_description_v2'); ?>
            </p>
        </div>
        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Business <br> Size</th>
                            <th>Discovery <br> Investment</th>
                            <th>Implementation <br> Savings</th>
                            <th>ROI <br> Percentage</th>
                            <th>Payback <br> Period</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (have_rows('bc_pricing_table_v2')): ?>
                            <?php while (have_rows('bc_pricing_table_v2')): the_row(); ?>
                                <tr>
                                    <td><?php echo get_sub_field('bc_business_size_v2'); ?></td>
                                    <td><?php echo get_sub_field('bc_discovery_investment_v2'); ?></td>
                                    <td><?php echo get_sub_field('bc_implementation_savings_v2'); ?></td>
                                    <td><?php echo get_sub_field('bc_roi_percentage_v2'); ?></td>
                                    <td><?php echo get_sub_field('bc_payback_period_v2'); ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Business Central Pricing Section End -->

<section class="section business-central-licensing price-and-cost-analysis erp-discovery-table pt-5">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="2">
                            <?php echo get_field('bc_roi_table_heading_v1'); ?>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (have_rows('bc_roi_table_repeater_v1')): ?>
                        <?php while (have_rows('bc_roi_table_repeater_v1')): the_row(); ?>
                            <tr>
                                <td><?php echo get_sub_field('bc_roi_row_title_v1'); ?></td>
                                <td><?php echo get_sub_field('bc_roi_row_description_v1'); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="square text-center mt-5">
            <?php if (get_field('bc_roi_button_text_v1')): ?>
                <a href="<?php echo get_field('bc_roi_button_link_v1'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo get_field('bc_roi_button_text_v1'); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>


<section class="section technical-architecture technical-architecture-shopify-integ">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('tech_arch_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('tech_arch_section_desc'); ?>
            </p>
        </div>

        <!-- Tabs Start Here -->
        <div class="responsive-tabs">
            <?php if( have_rows('tech_arch_tabs') ): $tab_index = 0; ?>
                <ul class="nav nav-tabs justify-content-center" role="tablist">
                    <?php while( have_rows('tech_arch_tabs') ): the_row(); $tab_index++; 
                        $tab_id = 'tech-arch-tab-'.$tab_index; 
                        $pane_id = 'tech-arch-pane-'.$tab_index; 
                    ?>
                        <li class="nav-item">
                            <a id="<?php echo $tab_id; ?>" 
                               href="#<?php echo $pane_id; ?>" 
                               class="nav-link <?php echo $tab_index==1 ? 'active' : ''; ?>" 
                               data-bs-toggle="tab" role="tab" aria-controls="<?php echo $pane_id; ?>">
                                <?php echo get_sub_field('tech_arch_tab_title'); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <?php reset_rows(); // 👈 repeater ko dobara start karna zaroori hai ?>

            <div class="tab-content mt-4">
                <?php if( have_rows('tech_arch_tabs') ): $tab_index = 0; ?>
                    <?php while( have_rows('tech_arch_tabs') ): the_row(); $tab_index++; 
                        $tab_id = 'tech-arch-tab-'.$tab_index; 
                        $pane_id = 'tech-arch-pane-'.$tab_index; 
                    ?>
                        <div id="<?php echo $pane_id; ?>" 
                             class="tab-pane fade <?php echo $tab_index==1 ? 'show active' : ''; ?>" 
                             role="tabpanel" aria-labelledby="<?php echo $tab_id; ?>">
                             
                            <div class="row justify-content-center gy-4">
                                <?php if( have_rows('tech_arch_tab_cards') ): ?>
                                    <?php while( have_rows('tech_arch_tab_cards') ): the_row(); ?>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card-parent">
                                                <div class="card">
                                                    <div class="img-content">
                                                        <?php 
                                                        $img = get_sub_field('tech_arch_card_image');
                                                        if($img): ?>
                                                            <img src="<?php echo esc_url($img['url']); ?>" 
                                                                 alt="<?php echo esc_attr($img['alt']); ?>" 
                                                                 class="img-fluid">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="text-content">
                                                        <h3><?php echo get_sub_field('tech_arch_card_title'); ?></h3>
                                                        <p><?php echo get_sub_field('tech_arch_card_desc'); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>

                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- Tabs END Here -->

        <div class="square text-center mt-4">
            <a href="<?php echo get_field('tech_arch_btn_link'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('tech_arch_btn_text'); ?>
            </a>
        </div>
    </div>
</section>




<!-- Trsuted microsoft partner section start  -->
<?php
$trusted_partner_section = ['class' => 'trangotech-erp-patrner bg-white'];
get_template_part('template-parts/global/microsoft-trusted-partner-section',null,$trusted_partner_section);
?>
<!-- Trsuted microsoft partner section end  -->


<!-- Business Central Pricing Section Start -->
<section class="section why-business-central cost-key-factors erp-transparent-pricing-table bg-white pt-0">
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
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Discovery Package</th>
                            <th>Price Range</th>
                            <th>What's Included</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if( have_rows('bcp_pricing_table_rows') ): ?>
                            <?php while( have_rows('bcp_pricing_table_rows') ): the_row(); ?>
                                <tr>
                                    <td><?php echo get_sub_field('bcp_package_title'); ?></td>
                                    <td><?php echo get_sub_field('bcp_package_price'); ?></td>
                                    <td><?php echo get_sub_field('bcp_package_description'); ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="square text-center mt-5">
            <a href="<?php echo get_field('bcp_button_link'); ?>" class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('bcp_button_text'); ?>
            </a>
        </div>
    </div>
</section>

<!-- Business Central Pricing Section End -->

<section class="section why-industry-leaders erp-discovery-leaders bg-white pt-0">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('whyil_heading'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('whyil_intro'); ?>
            </p>
        </div>

        <ul class="card-item">
            <?php if( have_rows('whyil_cards') ): ?>
                <?php while( have_rows('whyil_cards') ): the_row(); ?>
                    <li>
                        <div class="card">
                            <span class="left">
                                <?php echo get_sub_field('whyil_icon'); ?>
                            </span>
                            <span class="right">
                                <h3 class="title"><?php echo get_sub_field('whyil_card_heading'); ?></h3>
                                <p><?php echo get_sub_field('whyil_card_text'); ?></p>
                            </span>
                        </div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>

        <div class="square text-center mt-5">
            <a href="<?php echo get_field('whyil_btn_link'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('whyil_btn_text'); ?>
            </a>
        </div>
    </div>
</section>


<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'    => $faqs_heading,
    'content'  => $faqs_content,
    'category' => 'erp-discovery',
    'bg_class' => 'bg-white',
    'show_search' => false
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
                items:1.3
            },
            1000:{
                items:1.6
            },
            1400:{
                items:2.2
            },
            1600:{
                items:2.5
            },
            1800:{
                items:2.8
            }

        }
    });
    $('.ms-industries-carousel').owlCarousel({
        loop: false,
        margin: 30,
        autoplay: false,
        dots: true,
        nav: true,
        // navText: ["", "<i class='fa fa-long-arrow-right'></i>"],
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        responsive: {
            0: {
                loop: true,
                items: 1
            },
            600: {
                loop: true,
                items: 2
            },
            1000: {
                items: 2.9
            }
        }
    });

    $(document).ready(function(){
        let windowWidth = $(window).innerWidth();

        if(windowWidth < 768){
            $(".ms-industries-carousels-section .carousel-wraper").each(function(){
                $(this).removeClass("carousel-wraper").addClass("container");
            });
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