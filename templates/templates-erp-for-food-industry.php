<?php
/*
    Template Name: ERP Food Industry
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>
<!-- BANNER SECTION START -->
<section class="section business-central-integration-banner erp-food-industry-banner no-lzl-section">
    <div class="container">
       <div class="row mt-lg-3 gx-0">
             <div class="col-lg-7">
                <div class="text-cont pt-5">
                    <?php if (get_field('banner_top_subheadig')) : ?>
                        <h1 class="banner-subheading"><?php echo get_field('banner_top_subheadig');?></h1>
                    <?php endif; ?>
                    <h2 class="banner-title">
                        <?php echo get_field('banner_heading'); ?>
                    </h2>
                    <p class="banner-text"><?php echo get_field('banner_description'); ?></p>
                    <div class="btns justify-content-lg-start">
                        <?php $cta_1 = get_field('banner_cta_1'); ?>
                        <?php if (is_array($cta_1) && count($cta_1) && isset($cta_1['url'])) : ?>
                            <?php
                                $cta_1_label = get_field('cta_1_label');
                                $cta_1_label = !empty($cta_1_label) ? $cta_1_label : $cta_1['title'];
                            ?>
                            <a class="text-capitalize btn-red square-pulse" href="<?php echo $cta_1['url']; ?>" <?php echo is_modal_link($cta_1['url']); ?>><?php echo $cta_1_label; ?></a>
                        <?php endif; ?>

                        <?php $cta_2 = get_field('banner_cta_2'); ?>
                        <?php if (is_array($cta_2) && count($cta_2) && isset($cta_2['url'])) echo '<a class="text-capitalize btn-pink " href="' . $cta_2['url'] . '" ' . is_modal_link($cta_2['url']) . '>' . $cta_2['title'] . '</a>'; ?>
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

<section class="dynamics-magento-integration-counter successful-operations-counter erp-food-industry-counter">
    <div class="container position-relative">
        <div class="ms-dynamics-counter-wraper">
            <div class="row justify-content-center gy-3 gy-lg-0">
                <?php if( have_rows('counter_items') ): ?>
                       <?php while( have_rows('counter_items') ): the_row(); 
            $number = get_sub_field('number');
            $counter_sign = get_sub_field('counter_sign');
            $text   = get_sub_field('text');
            $icon_svg   = get_sub_field('icon'); 
        ?>
                <div class="col-md-3 col-sm-6">
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

<section class="section trused-food-companies">
    <div class="spacer"></div>
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('trusted_food_section_heading'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('trusted_food_section_description'); ?>
            </p>
        </div>
        <?php if( have_rows('trusted_food_logos') ): ?>
            <ul>
                <?php while( have_rows('trusted_food_logos') ): the_row(); 
                    $logo = get_sub_field('trusted_food_logo_image');
                    $alt  = get_sub_field('trusted_food_logo_alt');
                ?>
                    <li>
                        <?php if( !empty($logo) ): ?>
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($alt); ?>" class="img-fluid">
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>


<!-- operational challenges section start -->
<?php 
    $cardSec = ['class' => 'bg-white'];
get_template_part('template-parts/global/operational-challenges-cards',null,$cardSec)?>
<!-- operational challenges section end -->

<!-- finance and operations pricing and licensing section start -->
<section class="section finance-and-operations-pricing bg-gray">
    <div class="container">

        <?php if (get_field('finance_pricing_title') || get_field('finance_pricing_subtitle')): ?>
            <div class="text-cont">
                <?php if (get_field('finance_pricing_title')): ?>
                    <h2 class="section-title text-center">
                        <?php echo get_field('finance_pricing_title'); ?>
                    </h2>
                <?php endif; ?>

                <?php if (get_field('finance_pricing_subtitle')): ?>
                    <p class="section-content text-center mt-0 pt-0">
                        <?php echo get_field('finance_pricing_subtitle'); ?>
                    </p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('finance_pricing_cards')): ?>
            <div class="finance-operations-pricing-wrapper">
                <div class="row gy-3 gx-3">
                    <?php while (have_rows('finance_pricing_cards')): the_row(); ?>
                        <?php
                        $price        = get_sub_field('plan_price');
                        $user_text    = get_sub_field('plan_user_text');
                        $plan_name    = get_sub_field('plan_name');
                        $button_text  = get_sub_field('plan_button_text');
                        $button_link  = get_sub_field('plan_button_link');
                        $bottom_text  = get_sub_field('plan_bottom_text');
                        $bottom_icon  = get_sub_field('plan_bottom_icon');
                        $is_popular   = get_sub_field('plan_is_popular');
                        $users_limit   = get_sub_field('users_limit');
                        $users_heading   = get_sub_field('user_heading');
                        ?>

                        <div class="col-xl-4 <?php echo $is_popular ? 'px-xl-0' : ''; ?>">
                            <div class="finance-operations-pricing-card <?php if( get_row_index() == 3 ) echo 'last-card'; ?>  
                                <?php echo $is_popular ? 'most-popular' : ''; ?>">
                                
                                <?php if ($is_popular): ?>
                                    <div class="most-popular-tag">MOST POPULAR</div>
                                <?php endif; ?>

                                <?php if ($price): ?>
                                    <span class="finance-pricing-text"><?php echo esc_html($price); ?></span>
                                <?php endif; ?>

                                <?php if ($user_text): ?>
                                    <p class="user-month"><?php echo esc_html($user_text); ?></p>
                                <?php endif; ?>

                                <?php if ($plan_name): ?>
                                    <h3 class="finance-operations-main-title"><?php echo esc_html($plan_name); ?></h3>
                                <?php endif; ?>

                                <?php if ($users_limit): ?>
                                    <span class="user-sizes d-block"><?php echo $users_limit; ?></span>
                                <?php endif; ?>
                                 <?php if ($users_heading): ?>
                                  <span class="essentials mb-2 d-inline-block"><?php echo $users_heading; ?></span>     
                                  <?php endif; ?> 
                                <?php if (have_rows('plan_features')): ?>
                                    <ul class="financial-management-lists">
                                        <?php while (have_rows('plan_features')): the_row(); ?>
                                            <?php if (get_sub_field('feature_text')): ?>
                                                <li><?php echo esc_html(get_sub_field('feature_text')); ?></li>
                                                
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                    
                                <?php endif; ?>
                                   <p class="idea-for"><?php echo get_sub_field('idea_for'); ?></p>             
                                <?php if ($button_text): ?>
                                    <div class="btn-wrapper">
                                        <a href="<?php echo $button_link ? esc_url($button_link) : 'javascript:;'; ?>" 
                                           class="get-started-btn" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                                           <?php echo esc_html($button_text); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if ($bottom_text): ?>
                                    <p class="bottom-line-text">
                                        <?php if ($bottom_icon): ?>
                                            <img src="<?php echo esc_url($bottom_icon); ?>" alt="icon" class="img-fluid">
                                        <?php endif; ?>
                                        <?php echo esc_html($bottom_text); ?>
                                    </p>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>
<!-- Why choose section start  -->

<section class="section magento-integration-solutions ms-dynamics-shopify-integration-solutions erp-food-solutions bg-white">
    <div class="container">
        <div class="text-cont">
            <h2 class="section-title">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="section-title">
                        <?php echo get_field('solutions_heading'); ?>
                    </h2>
                </div>
                <div class="col-md-5">
                    <p class="section-content pt-0 mt-0">
                         <?php echo get_field('solutions_description'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-wrapper">
        <div class="container">
            <div class="row justify-content-end wrapper">
                <div class="col-xl-9 col-lg-10">
                    <div class="row gx-3 gy-3">
                         <?php
                         $cta_linss = get_field('solutions_cta');
                         if( have_rows('solutions_list') ): ?>
                <?php while( have_rows('solutions_list') ): the_row(); 
            $icon_integration = get_sub_field('icon');
            $heading_integration   = get_sub_field('heading');
            $content_integration   = get_sub_field('description'); 
            
        ?>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="d-flex gap-4 align-items-center title-box">
                                   <h3><?php echo $heading_integration; ?></h3>
                                </div>
                                <?php echo $content_integration; ?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="square text-center mt-5">
        <a href="<?php echo esc_url($cta_linss['url']); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
           <?php echo esc_html($cta_linss['title']); ?>
        </a>
    </div>
</section>

<section class="section why-business-central bg-gray">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('wbc_section_heading'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('wbc_section_description'); ?>
            </p>
        </div>

        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <?php if( have_rows('wbc_table_headers') ): ?>
                                <?php while( have_rows('wbc_table_headers') ): the_row(); ?>
                                    <th><?php echo get_sub_field('wbc_header_text'); ?></th>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if( have_rows('m_table_rows') ): ?>
                            <?php while( have_rows('m_table_rows') ): the_row(); ?>
                                <tr>
                                    <td><?php echo get_sub_field('m_feature_name'); ?></td>
                                    <?php if( have_rows('m_feature_columnss') ): ?>
                                        <?php while( have_rows('m_feature_columnss') ): the_row(); 
                                            $content   = get_sub_field('m_columnns_content');
                                            $highlight = get_sub_field('m_columns_high');
                                        ?>
                                            <td class="<?php echo ($highlight !== 'none') ? esc_attr($highlight) : ''; ?>">
                                                <?php echo $content; ?>
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

        <?php if(get_field('wbc_button_text')): ?>
            <div class="square text-center mt-5">
                <a href="<?php echo get_field('wbc_button_link'); ?>" class="square-pulse btn btn-red text-capitalize px-5" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo get_field('wbc_button_text'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="section erp-pricing-food-industry">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('erp_pricing_heading'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('erp_pricing_description'); ?>
            </p>
        </div>

        <?php if( have_rows('erp_pricing_tabs') ): ?>
        <div class="responsive-tabs">
            <!-- <ul class="nav nav-tabs" role="tablist">
                <?php //$i = 0; while( have_rows('erp_pricing_tabs') ): the_row(); $i++; ?>
                    <li class="nav-item">
                        <a id="tab-<?php //echo $i; ?>" href="#pos-<?php //echo $i; ?>" class="nav-link <?php //echo ($i==1)?'active':''; ?>" data-bs-toggle="tab" role="tab">
                            <?php //echo get_sub_field('erp_pricing_tab_title'); ?>
                        </a>
                    </li>
                <?php //endwhile; ?>
            </ul> -->

            <div id="content" class="tab-content" role="tablist">
                <?php $j=0; while( have_rows('erp_pricing_tabs') ): the_row(); $j++; ?>
                <div id="pos-<?php echo $j; ?>" class="card tab-pane fade <?php echo ($j==1)?'show active':''; ?>" role="tabpanel" aria-labelledby="tab-<?php echo $j; ?>">
                    <div class="card-header" role="tab" id="heading-<?php echo $j; ?>">
                        <h5 class="mb-0">
                            <a data-bs-toggle="collapse" href="#pos-collapse-<?php echo $j; ?>" aria-expanded="<?php echo ($j==1)?'true':'false'; ?>" aria-controls="collapse-<?php echo $j; ?>">
                                <?php echo get_sub_field('erp_pricing_tab_title'); ?>
                            </a>
                        </h5>
                    </div>
                    <div id="pos-collapse-<?php echo $j; ?>" class="collapse <?php echo ($j==1)?'show':''; ?>" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-<?php echo $j; ?>">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="select-price">
                                        <ul>
                                            <?php if( have_rows('erp_pricing_tab_prices') ): ?>
                                                <?php while( have_rows('erp_pricing_tab_prices') ): the_row(); ?>
                                                    <li class="<?php echo get_sub_field('erp_pricing_price_checked') ? 'active' : ''; ?>">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" <?php echo get_sub_field('erp_pricing_price_checked') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label">
                                                                <?php echo get_sub_field('erp_pricing_price_title'); ?>
                                                            </label>
                                                        </div>
                                                        <span class="price"><?php echo get_sub_field('erp_pricing_price_amount'); ?></span>
                                                    </li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="box">
                                        <span class="includes-title d-block">Includes:</span>
                                        <ul>
                                            <?php if( have_rows('erp_pricing_includes') ): ?>
                                                <?php while( have_rows('erp_pricing_includes') ): the_row(); ?>
                                                    <li>
                                                        <?php echo get_sub_field('erp_pricing_include_text'); ?>
                                                        <span><?php echo get_sub_field('erp_pricing_include_icon'); ?></span>
                                                    </li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
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
    'category' => 'erp-food-industry',
    'bg_class' => 'bg-gray',
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
<style>
.successful-operations-counter .ms-dynamics-counter-wraper {
    width: 100%;
    padding-inline: 14px;
}
    </style>
<script>
    $('.ms-industries-carousel').owlCarousel({
        loop: false,
        margin: 30,
        autoplay: false,
        dots: false,
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
    $(".erp-pricing-food-industry .responsive-tabs .tab-content .card .card-body .select-price ul li .form-check .form-check-input").on("click", function () {
        $(this).parents("li").toggleClass("active");
    });
</script>