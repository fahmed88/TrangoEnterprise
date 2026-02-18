<?php /*
Template Name: Microsoft Finance Operations
Template Post Type: page
*/ ?>
<?php get_header('header'); ?>
<!-- BANNER SECTION START -->
<section class="section business-central-integration-banner finance-operations-banner no-lzl-section">
    <div class="container">
        <div class="row gy-4 align-items-center mt-lg-3 gx-0">
            <div class="col-lg-12 col-xl-7 col-xxl-6 order-2 order-xl-0">
                <div class="text-cont mt-0 pt-lg-4">
                    <h1 class="banner-title">
                        <?php echo get_field('fo_banner_title'); ?>
                    </h1>
                    <p class="banner-text  ms-lg-0">
                        <?php echo get_field('fo_banner_description'); ?>
                    </p>
                    <ul>
                        <?php if( have_rows('fo_feature_list') ): ?>
                            <?php while( have_rows('fo_feature_list') ): the_row(); ?>
                                <li><span>✓</span> <?php echo get_sub_field('feature_text'); ?></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <div class="btns-wrapper">
                        <a href="<?php echo get_field('fo_schedule_button_link'); ?>" class="shedule-fo-btn" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo get_field('fo_schedule_button_text'); ?>
                        </a>
                        <a href="<?php echo get_field('fo_download_button_link'); ?>" class="download-fo-btn" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo get_field('fo_download_button_text'); ?>
                        </a>
                    </div>
                    <p class="limited-offer text-gray">
                        <?php echo get_field('fo_offer_text'); ?> -
                        <span><?php echo get_field('fo_offer_highlighted'); ?></span>
                    </p>
                    <?php get_template_part('template-parts/global/5-stars-badge');?>

                </div>
            </div>
            <div class="col-lg-12 col-xl-5 col-xxl-6 order-1 order-xl-0">
                <div class="img-cont d-flex justify-content-center align-items-center">
                    <picture class="no-lazy">
                        <?php
                        $desktop_banner_image = get_field('fo_banner_image');
                        $mobile_banner_image = get_field('banner__mobile_image');
                        ?>
                        <source media="(max-width:767px)" srcset="<?php echo $mobile_banner_image ? $mobile_banner_image : $desktop_banner_image; ?>">
                        <img src="<?php echo $desktop_banner_image; ?>" alt="<?php echo wp_strip_all_tags(get_field('fo_banner_title'))?>" loading="eager" fetchpriority="high" decoding="async" class="img-fluid no-lazy">
                    </picture>
                </div>
            </div>  
        </div>
    </div>
</section>

<!-- BANNER SECTION END -->

<section class="dynamics-magento-integration-counter successful-operations-counter">
    <div class="container position-relative">
        <div class="ms-dynamics-counter-wraper">
            <div class="row justify-content-center gy-3 gy-lg-0">
                <?php if( have_rows('counters') ): ?>
                    <?php while( have_rows('counters') ): the_row();
                        $icon = get_sub_field('icon'); // SVG or class or image URL
                        $count = get_sub_field('count_number');
                        $limit = get_sub_field('data_counter_lim');
                        $counter_icon = get_sub_field('counter_icon_text');
                        $description = get_sub_field('description');
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="counter-card">
                            <div class="icon">
                                <?php echo $icon; ?>
                            </div>
                            <div class="counter">
                               <?php if ($count == '99.2') : ?>
    <span class="count static-count" data-fixed-count="99.2">99.2</span>
<?php else : ?>
    <span class="count" data-counter-lim="<?php echo esc_attr($limit); ?>">
        <?php echo esc_html($count); ?>
    </span>
<?php endif; ?>

                                <span class="conter-icon"><?php echo esc_html($counter_icon); ?></span>
                                <p><?php echo esc_html($description); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>




<section class="section finance-operations-modules">
    <div class="text-content">
        <h2 class="section-title text-center"><?php echo get_field('modules_title'); ?></h2>
    </div>

    <div class="responsive-tabs finance-modules-tabs px-0">
        <?php if (have_rows('modules')): ?>
            <ul class="nav nav-tabs" role="tablist">
                <div class="owl-carousel owl-theme modules-carousel" role="tablist">
                    <?php $i = 0; while (have_rows('modules')): the_row();
                        $tab_title = get_sub_field('tab_title');
                        $tab_slug = sanitize_title(get_sub_field('tab_slug'));
                    ?>
                        <div class="nav-item d-flex justify-content-center align-items-center">
                            <a id="tab-<?php echo $tab_slug; ?>" href="#pos-<?php echo $tab_slug; ?>"
                               class="nav-link <?php echo ($i === 0) ? 'tab-active' : ''; ?>"
                               data-bs-toggle="tab" role="tab">
                                <?php echo esc_html($tab_title); ?>
                            </a>
                        </div>
                    <?php $i++; endwhile; ?>
                </div>
            </ul>

            <div class="container">
                <div id="content" class="tab-content" role="tablist">
                    <?php $i = 0;  while (have_rows('modules')): the_row();
                        $tab_slug = sanitize_title(get_sub_field('tab_slug'));
                        $tab_heading = get_sub_field('tab_heading');
                        $tab_description = get_sub_field('tab_description');
                        $tab_image = get_sub_field('tab_image');
                        $cta_text = get_sub_field('cta_text');
                        $cta_url = get_sub_field('cta_url');
                    ?>
                        <div id="pos-<?php echo $tab_slug; ?>"
                             class="card tab-pane fade <?php echo ($i === 0) ? 'show active' : ''; ?>"
                             role="tabpanel" aria-labelledby="tab-<?php echo $tab_slug; ?>">
                             
                            <div class="card-header" role="tab">
                                <div class="mb-0">
                                    <a data-bs-toggle="collapse"
                                       href="#pos-collapse-<?php echo $tab_slug; ?>"
                                       aria-expanded="<?php echo ($i === 0) ? 'true' : 'false'; ?>"
                                       aria-controls="pos-collapse-<?php echo $tab_slug; ?>">
                                        <?php echo esc_html($tab_heading); ?>
                                    </a>
                                </div>
                            </div>

                            <div id="pos-collapse-<?php echo $tab_slug; ?>"
                                 class="collapse <?php echo ($i === 0) ? 'show' : ''; ?>"
                                 data-bs-parent="#content">
                                 
                                <div class="card-body">
                                    <div class="row gy-4 flex-col-reverse flex-lg-row">
                                        <div class="col-lg-6">
                                            <div class="finacne-modules-content">
                                                <h3 class="finance-modules-text"><?php echo esc_html($tab_heading); ?></h3>
                                                <div class="general-ledger-text">
                                                    <?php echo wp_kses_post($tab_description); ?>
                                                </div>

                                                <?php if ($cta_url): ?>
                                                    <a href="<?php echo esc_url($cta_url); ?>" class="get-instant-quote-btn" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                                                        <?php echo esc_html($cta_text); ?>
                                                    </a>
                                                <?php endif; ?>

                                                <?php if (have_rows('features_list')): ?>
                                                    <ul class="general-ledger-lists">
                                                        <?php while (have_rows('features_list')): the_row();
                                                            $feature_title = get_sub_field('feature_title');
                                                            $feature_url = get_sub_field('feature_url');
                                                        ?>
                                                            <li>
                                                                <a href="<?php echo esc_url($feature_url) ? esc_url($feature_url) : 'javascript:;'; ?>" aria-label="<?php echo wp_strip_all_tags($feature_title); ?>">
                                                                    <?php echo esc_html($feature_title); ?> 
                                                                    
                                                                </a>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="img-cont">
                                                <?php if ($tab_image): ?>
                                                    <img src="<?php echo esc_url($tab_image['url']); ?>"
                                                         class="img-fluid" loading="lazy"
                                                         alt="<?php echo esc_attr($tab_image['alt']); ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php $i++; endwhile; ?>
                </div>
            </div>
        <?php else: ?>
            <p class="text-center text-danger">No modules data found.</p>
        <?php endif; ?>
    </div>
</section>



<!-- finacne operations modules section start -->


<!-- Types-Of-Mobility START -->
   <section class="section ms-dynamics-comprehensive-tabs-section fo-implementation-services bg-gray">
    <div class="container">
        <div class="text-content text-center">
            <h2 class="section-title mb-lg-2">
                <?php echo get_field('business_central_title'); ?>    
            </h2>
            <p class="section-content text-center pt-lg-0">
                <?php echo get_field('business_central_content'); ?>  
            </p>
        </div>

        <?php if (have_rows('business_central_tabs')) : ?>
        <div class="ms-dynamics-comprehensive-tabs">
            <div class="row">
                <div class="col-md-4 col-lg-4 tabs-column">
                    <ul class="nav nav-tabs border-0" role="tablist">
                        <?php $i = 11; while (have_rows('business_central_tabs')) : the_row();
                            $tab_id = 'cross-plat-' . $i;
                            $active = $i === 11 ? 'active' : '';
                        ?>
                        <li class="nav-item">
                            <a id="tab-<?php echo $tab_id; ?>" href="#<?php echo $tab_id; ?>" class="nav-link <?php echo $active; ?>" data-bs-toggle="tab" role="tab">
                                <?php echo get_sub_field('tab_title'); ?>
                                <span class="icon">
                                   <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.83077 0.944824L14.3846 13.4987L14.3846 2.25252L17 2.25252L17 17.9448L1.30769 17.9448L1.30769 15.3294L12.5538 15.3294L5.81212e-07 2.77559L1.83077 0.944824Z" fill="black"></path>
                                            </svg>
                                </span>
                            </a>
                        </li>
                        <?php $i++; endwhile; ?>
                    </ul>
                </div>

                <div class="col-md-8 col-lg-8 right-tabs-column">
                    <div id="content" class="tab-content" role="tablist">
                        <?php $i = 11; while (have_rows('business_central_tabs')) : the_row();
                            $tab_id = 'cross-plat-' . $i;
                            $active = $i === 11 ? 'show active' : '';
                        ?>
                        <div id="<?php echo $tab_id; ?>" class="card tab-pane fade <?php echo $active; ?>" role="tabpanel" aria-labelledby="tab-<?php echo $tab_id; ?>">
                            <div class="card-header" role="tab">
                                <div class="mb-0 mobile-accordion-btn">
                                    <a data-bs-toggle="collapse" href="#collapse-<?php echo $tab_id; ?>" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>" aria-controls="collapse-<?php echo $tab_id; ?>">
                                        <?php echo get_sub_field('heading'); ?>
                                    </a>
                                </div>
                            </div>
                            <div id="collapse-<?php echo $tab_id; ?>" class="collapse <?php echo $i === 11 ? 'show' : ''; ?>" data-bs-parent="#content" role="tabpanel">
                                <div class="card-body p-lg-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="txt-cnt">
                                                <div class="cont-img">
                                                    <?php
                                                    $img = get_sub_field('tab_image');
                                                    if ($img): ?>
                                                        <img src="<?php echo esc_url($img['url']); ?>" class="img-fluid" alt="">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="inner-text-box">
                                                    <?php 
                                                    $ss_heading = get_sub_field('heading'); 
                                                    $ss_subheading = get_sub_field('subheading'); 
                                                    $ss_description = get_sub_field('description'); 
                                                    ?>
                                                    <?php if($ss_heading): ?>
                                                    <h3><?php echo $ss_heading; ?></h3>
                                                    <?php endif; ?>
                                                    <?php if($ss_subheading): ?>
                                                    <h4><?php echo $ss_subheading; ?></h4>
                                                    <?php endif; ?>
                                                    <?php if($ss_description): ?>
                                                    <p><?php echo $ss_description ?></p>
                                                    <?php endif; ?>
                                                    <?php if (have_rows('list_items')): ?>
                                                        <ul>
                                                            <?php while (have_rows('list_items')): the_row(); ?>
                                                                <li><?php echo get_sub_field('item'); ?></li>
                                                            <?php endwhile; ?>
                                                        </ul>
                                                    <?php endif; ?>
<a href="<?php echo get_field('business_button_link'); ?>" class="get-instant-quote-btn" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                                                        <?php echo get_field('business_button_text'); ?>                                               </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++; endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Types-Of-Mobility END-->

<!-- trsuted by fortune section start -->
<section class="section trsuted-by-fortune-section">
    <div class="container">
        <div class="text-cont">
            <h2 class="section-title text-center">
                <?php echo get_field('trusted_section_title'); ?>
            </h2>
            <p class="section-content text-center mt-0 pt-0">
                <?php echo get_field('trusted_section_description'); ?>
            </p>
        </div>

        <div class="trusted-fortune-companies-wrapper">
            <div class="row gy-4">
                <div class="col-lg-7">
                    <div class="row gy-4">
                        <?php if (have_rows('company_logos')): ?>
                            <?php while (have_rows('company_logos')): the_row(); ?>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="logo-content-wrapper">
                                        <div class="logo-wrapper">
                                            <?php
                                                $logo = get_sub_field('logo_image');
                                                if ($logo):
                                            ?>
                                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="img-fluid" loading="lazy" />
                                            <?php endif; ?>
                                        </div>
                                        <h3 class="logo-title"><?php echo get_sub_field('logo_title'); ?></h3>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="client-satisfaction-wrapper">
                        <ul class="satisfaction-lists">
                            <?php if (have_rows('client_satisfaction_stats')): ?>
                                <?php while (have_rows('client_satisfaction_stats')): the_row(); ?>
                                    <li>
                                        <div class="svg-wrapper">
                                            <?php echo get_sub_field('stat_svg_icon'); ?>
                                        </div>

                                        <div class="rating-content">
                                            <?php if (get_sub_field('stat_title')): ?>
                                                <span class="rating-title d-block"><?php echo get_sub_field('stat_title'); ?></span>
                                            <?php endif; ?>

                                            <p class="satisfaction-text"><?php echo get_sub_field('stat_description'); ?></p>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="square text-center mt-2 mt-xl-4 pt-lg-4 pt-2">
                <a href="<?php echo get_field('trusted_button_url'); ?>" class="square-pulse btn btn-red" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo get_field('trusted_button_text'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- trsuted by fortune section end -->

<!-- Microsoft Dynamics ERP Challenges Section Start -->
 <?php if( have_rows('erp_challenges_vs_solutions') ): ?>
<section class="section ms-dynamics-erp-challenges common-erp-challenges">
    <div class="container">
        <div class="text-cont text-center mb-4 mb-lg-5">
            <h2 class="section-title">
                <?php echo get_field('intro_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('erp_intro_text'); ?>
            </p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="ms-challenges-box left mb-4 mb-lg-0">
                    <div class="box-header">
                        <h3 class="title">ENTERPRISE CHALLENGES</h3>
                    </div>
                    <div class="box-body">
                        <ul class="list-items">
                            <?php while( have_rows('erp_challenges_vs_solutions') ): the_row(); ?>
                            <li>
                                <p class="list-item-title mb-2">
                                    <span><?php echo get_sub_field('challenge_icon'); ?></span>
                                    <?php echo get_sub_field('challenge_title'); ?>
                                </p>
                                <p class="list-item-text">
                                    <?php echo get_sub_field('challenge_description'); ?>
                                </p>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="ms-challenges-box right">
                    <div class="box-header">
                        <h3 class="title">F&O SOLUTIONS</h3>
                    </div>
                    <div class="box-body">
                        <ul class="list-items">
                            <?php foreach( get_field('erp_challenges_vs_solutions') as $row ): ?>
                            <li>
                                <p class="list-item-title mb-2">
                                    <span><?php echo esc_html($row['solution_icon']); ?></span>
                                    <?php echo esc_html($row['solution_title']); ?>
                                </p>
                                <p class="list-item-text ps-md-3">
                                    <?php echo esc_html($row['solution_description']); ?>
                                </p>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="square text-center mt-4 pt-2">
                <a href="<?php echo get_field('intro_button_link'); ?>" class="square-pulse btn btn-red" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo get_field('intro_button_text'); ?>
                </a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Microsoft Dynamics ERP Challenges Section End -->

<!-- Development Methodology Starts -->
<?php

get_template_part('template-parts/business-central-development/services-portfolio2'); ?>
<!-- Development Methodology Ends -->

<!-- finance and operations pricing and licensing section start -->
<section class="section finance-and-operations-pricing">
    <div class="container">
        <div class="text-cont">
            <h2 class="section-title text-center">
                <?php echo get_field('fop_section_title'); ?>
            </h2>

            <p class="section-content text-center mt-0 pt-0">
                <?php echo get_field('fop_section_description'); ?>
            </p>
        </div>

        <div class="finance-operations-pricing-wrapper">
            <div class="row gy-3 gx-3">

                <?php if( have_rows('fop_pricing_plans') ): ?>
                    <?php while( have_rows('fop_pricing_plans') ): the_row(); ?>

                        <div class="col-xl-4">
                            <div class="finance-operations-pricing-card
                                <?php if( get_sub_field('fop_tag') == 'MOST POPULAR' ) echo 'most-popular'; ?>
                                <?php if( get_row_index() == 3 ) echo 'last-card'; ?>">

                                <?php if( get_sub_field('fop_tag') ): ?>
                                    <div class="most-popular-tag"><?php echo get_sub_field('fop_tag'); ?></div>
                                <?php endif; ?>

                                <span class="finance-pricing-text"><?php echo get_sub_field('fop_price'); ?></span>

                                <p class="user-month">
                                    <strong><?php echo get_sub_field('fop_price_subtitle'); ?></strong>
                                </p>

                                <h3 class="finance-operations-main-title"><?php echo get_sub_field('fop_plan_title'); ?></h3>

                                <ul class="financial-management-lists">
                                    <?php if( have_rows('fop_plan_features') ): ?>
                                        <?php while( have_rows('fop_plan_features') ): the_row(); ?>
                                            <li><?php echo get_sub_field('fop_feature_item'); ?></li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>

                                <div class="btn-wrapper">
                                    <a href="<?php echo get_sub_field('button_link'); ?>" class="get-started-btn" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                                        <?php echo get_sub_field('fop_button_text'); ?>
                                    </a>
                                </div>

                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<!-- finance and operations pricing and licensing section End -->


<!-- REPUTABLE AND TRUSTABLE -->

<!-- Microsoft Copilot and Ai Capabilities section start -->
<section class="section copilot-ai-capabilities">
    <div class="container">
        <div class="text-cont">
            <h2 class="section-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/microsoft-finance-operations/microsoft-img.webp" loading="lazy" class="img-fluid" alt="Microsoft">
                <?php echo get_field('copilot_section_heading'); ?>
            </h2>
            <p class="section-content pt-0 mt-0 text-center">
                <?php echo get_field('copilot_section_description'); ?>
            </p>
        </div>

        <div class="copilot-card-wrapper">
            <div class="row gy-3">
                <?php if( have_rows('copilot_cards') ): ?>
                    <?php while( have_rows('copilot_cards') ): the_row(); ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="copilot-card">
                                <div class="svg-wrapper">
                                    <?php echo get_sub_field('svg_code'); ?>
                                </div>

                                <h3 class="copilot-card-title"><?php echo get_sub_field('card_title'); ?></h3>

                                <p class="copilot-card-content"><?php echo get_sub_field('card_description'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="square mt-3 mt-lg-4 pt-3 text-center">
                <a href="<?php echo get_field('copilot_cta_button_link'); ?>" class="square-pulse btn btn-red" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo get_field('copilot_cta_button_text'); ?>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Microsoft Copilot and Ai Capabilities section End -->

<section class="section agile-development-process mt-lg-5">
    <div class="container">
        <div class="tect-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('agile_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('agile_section_description'); ?>
            </p>
        </div>

        <ul class="wraper">
            <?php if( have_rows('agile_phases') ): ?>
                <?php while( have_rows('agile_phases') ): the_row(); ?>
                    <li>
                        <div class="number-box"><?php echo get_sub_field('phase_number'); ?></div>
                        <div class="text-box">
                            <span><?php echo get_sub_field('phase_svg'); ?></span>
                            <?php echo get_sub_field('phase_title'); ?>
                            <p class="phase-para-text"><?php echo get_sub_field('phase_description'); ?></p>
                        </div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>

        <div class="square mt-4 mt-lg-5 pt-lg-3 text-center">
            <a href="<?php echo get_field('agile_cta_link'); ?>" class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('agile_cta_text'); ?>
            </a>
        </div>
    </div>
</section>


<!-- industries carouser section start -->
 <?php
 $industries = ['class' => 'bg-white'];
 get_template_part('template-parts/industries-new',null,$industries); ?>
<!-- industries carouser section end -->

<!-- Integration Solutions Starts -->
<?php
$args = [
   'class' => 'bg-gray'
]; ?>
<?php get_template_part('template-parts/global/solution-cards1', null, $args);?>
<!-- Integration Solutions Ends -->
 
 
<!-- Integration cards section end -->

<!-- testimonials section start -->
<?php
    $args = [
        'category' => 'finance-operations',
        'class'    => 'customer-success-stories-section'
    ];
    get_template_part('template-parts/testimonials-new', null, $args);
?>
<!-- testimonials section end -->

<!-- Transform your business with microsoft section Start -->
<!-- Proven Results Starts -->
<?php get_template_part('template-parts/business-central-integration/transform-business'); ?>
<!-- Proven Results Ends -->
<!-- Transform your business with microsoft section End -->




<?php get_footer(); ?>
<style>
.fo-implementation-services a.get-instant-quote-btn {
    border: none;
    outline: none;
    text-decoration: none;
    border-radius: 16px;
    border: .5px solid #dc0019;
    display: inline-block;
    font-size: 16px;
    line-height: 1.4;
    font-weight: 500;
    background-color: #de253a;
    color: #fff;
    padding: 13px 25px;
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
                items: 1
            },
            600: {
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

    $('.why-our-clients').owlCarousel({
        loop: false,
        margin: 20,
        autoplay: true,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
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
            margin: 15,
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
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const el = document.querySelector('.static-count[data-fixed-count]');
        if (!el) return;

        const fixedValue = el.getAttribute('data-fixed-count');
        let locked = false;

        const observer = new MutationObserver(() => {
            if (locked) return;
            locked = true;
            el.textContent = fixedValue;

            // unlock after short delay to avoid infinite loop
            setTimeout(() => {
                locked = false;
            }, 50);
        });

        observer.observe(el, {
            childList: true,
            characterData: true,
            subtree: true
        });

        // Initial lock
        el.textContent = fixedValue;
    });
</script>
