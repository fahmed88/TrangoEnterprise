<?php /*
Template Name: Dynamics 365 erp for small business New
Template Post Type: page
*/ ?>
<?php get_header('header'); ?>

   
    <!-- BANNER SECTION START -->
<?php $links = get_field('banner_cta_1'); ?>
<section class="section business-central-integration-banner ms-dynamics-shopify-integration-banner no-lzl-section">
    <div class="container">
        <div class="row mt-lg-3 gx-0">
            <div class="col-lg-6">
                <div class="text-cont pt-4">
                    <h1 class="banner-subheading">
                        <?php echo get_field('banner_heading'); ?>
                    </h1>
                     <h2 class="banner-title">
                       <?php echo get_field('banner_heading2'); ?>
                    </h2>
                    <p class="banner-text  ms-lg-0"><?php echo get_field('banner_description'); ?></p>
                    <div class="square mt-5">
                        <a href="<?php echo esc_url($links['url']); ?>" class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo esc_html($links['title']); ?>
                        </a>
                        <span class="limited-offer ms-3"><?php echo get_field('banner_contact'); ?></span>
                    </div>
                    <?php get_template_part('template-parts/global/5-stars-badge');?>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-6">
                <div class="img-cont text-center">
                    <picture class="no-lazy">
                        <?php
                        $desktop_banner_image = get_field('banner_image');
                        $mobile_banner_image = get_field('banner__mobile_image');
                        ?>
                        <source media="(max-width:767px)" srcset="<?php echo $mobile_banner_image ? $mobile_banner_image : $desktop_banner_image; ?>">
                        <img src="<?php echo $desktop_banner_image; ?>" alt="<?php echo wp_strip_all_tags(get_field('banner_heading2'))?>" loading="eager" fetchpriority="high" decoding="async" class="img-fluid no-lazy">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BANNER SECTION END -->

   
   <section class="section dynamics-magento-integration-counter mb-xxl-0 mb-xl-5 pt-0">
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



    <section class="section operational-challenges">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('challenges_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('challenges_content'); ?>
            </p>
        </div>

        <div class="connector-cards-wraper">
            <div class="row gx-0 gy-3 justify-content-center">
                <?php if( have_rows('cards') ): ?>
                    <?php while( have_rows('cards') ): the_row(); ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="connector-card">
                                <div class="card-header">
                                    <div class="icon">
                                        <?php echo get_sub_field('card_icon'); ?>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <?php echo get_sub_field('card_title'); ?>
                                    </h3>
                                    <?php if( have_rows('card_items') ): ?>
                                        <ul>
                                            <?php while( have_rows('card_items') ): the_row(); ?>
                                                <li>
                                                    <span>
                                                        <?php echo get_sub_field('item_icon'); ?>
                                                    </span>
                                                    <?php echo get_sub_field('item_text'); ?>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="square pt-lg-4 mt-4 text-center">
            <a href="<?php echo get_field('challengess_operational_link'); ?>" class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('challenges_buttons_text_twin'); ?>
            </a>
        </div>
    </div>
</section>



<section class="section operational-challenges your-challenges pt-0">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('oc_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('oc_section_content'); ?>
            </p>
        </div>

        <div class="connector-cards-wraper">
            <div class="row gx-0 gy-3 justify-content-center">
                <?php if( have_rows('oc_cards') ): ?>
                    <?php while( have_rows('oc_cards') ): the_row(); ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="connector-card">
                                <div class="card-header">
                                    <div class="icon">
                                        <?php echo get_sub_field('oc_card_icon'); ?>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <?php echo get_sub_field('oc_card_title'); ?>
                                    </h3>
                                    <?php if( have_rows('oc_card_items') ): ?>
                                        <ul>
                                            <?php while( have_rows('oc_card_items') ): the_row(); ?>
                                                <li>
                                                    <span>
                                                        <?php 
                                                            $icon = get_sub_field('oc_item_icon'); 
                                                            if($icon){
                                                                echo '<img src="'.$icon['url'].'" alt="icon" class="img-fluid">';
                                                            }
                                                        ?>
                                                    </span>
                                                    <?php echo get_sub_field('oc_item_text'); ?>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                                <div class="card-footer">
                                    <span class="results d-block"><?php echo get_sub_field('oc_card_footer_title'); ?></span>
                                    <p><?php echo get_sub_field('oc_card_footer_text'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="square pt-lg-4 mt-4 text-center">
            <a href="<?php echo get_field('oc_button_link'); ?>" class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('oc_button_text'); ?>
            </a>
        </div>
    </div>
</section>

<?php
    $section_title       = get_field('erp_section_title');
$section_description = get_field('erp_section_description');
$cta_text            = get_field('erp_cta_text');
$cta_link            = get_field('erp_cta_link');
$tabs                = get_field('erp_tabs');
?>

<section class="animated-row section our-amazon-integration-process erp-small-business-integration-process">
    <div class="container">
        <div class="text-center text-cont">
            <?php if ($section_title): ?>
                <h2 class="section-title"><?php echo $section_title; ?></h2>
            <?php endif; ?>

            <?php if ($section_description): ?>
                <p class="section-content text-center">
                    <?php echo $section_description; ?>
                </p>
            <?php endif; ?>
        </div>

        <?php if ($tabs): ?>
        <div class="tabs-wrapper">
            <div class="responsive-tabs">
                <!-- Tabs Nav -->
                <ul class="nav nav-tabs" role="tablist">
                    <?php $i = 0; foreach ($tabs as $tab): ?>
                        <li class="nav-item">
                            <a id="tab-<?php echo $i; ?>" href="#pos-<?php echo $i; ?>" 
                               class="nav-link <?php echo ($i == 0) ? 'active' : ''; ?>" 
                               data-bs-toggle="tab" role="tab">
                                <span><?php echo esc_html($tab['erp_tab_title']); ?></span>
                            </a>
                        </li>
                    <?php $i++; endforeach; ?>
                </ul>

                <!-- Tabs Content -->
                <div id="content" class="tab-content" role="tablist">
                    <?php $i = 0; foreach ($tabs as $tab): ?>
                        <div id="pos-<?php echo $i; ?>" 
                             class="card tab-pane fade <?php echo ($i == 0) ? 'show active' : ''; ?>" 
                             role="tabpanel" aria-labelledby="tab-<?php echo $i; ?>">

                            <div class="card-header" role="tab" id="heading-<?php echo $i; ?>">
                                <div class="mb-0">
                                    <a data-bs-toggle="collapse" href="#pos-collapse-<?php echo $i; ?>" 
                                       aria-expanded="<?php echo ($i == 0) ? 'true' : 'false'; ?>" 
                                       aria-controls="collapse-<?php echo $i; ?>">
                                        <span><?php echo esc_html($tab['erp_tab_title']); ?></span>
                                    </a>
                                </div>
                            </div>

                            <div id="pos-collapse-<?php echo $i; ?>" 
                                 class="collapse <?php echo ($i == 0) ? 'show' : ''; ?>" 
                                 data-bs-parent="#content" role="tabpanel" 
                                 aria-labelledby="heading-<?php echo $i; ?>">

                                <div class="card-body">
                                    <?php if (!empty($tab['erp_tab_heading'])): ?>
                                        <h3><?php echo esc_html($tab['erp_tab_heading']); ?></h3>
                                    <?php endif; ?>

                                    <div class="row gx-3">
                                        <?php if (!empty($tab['erp_tab_boxes'])): ?>
                                            <?php foreach ($tab['erp_tab_boxes'] as $box): ?>
                                                <div class="col-md-4">
                                                    <div class="box">
                                                        <div class="left">
                                                            <?php if (!empty($box['erp_box_icon'])): ?>
                                                                <img src="<?php echo esc_url($box['erp_box_icon']['url']); ?>" 
                                                                     alt="<?php echo esc_attr($box['erp_box_icon']['alt']); ?>">
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="right">
                                                            <?php if (!empty($box['erp_box_percentage'])): ?>
                                                                <span class="num-title d-block mb-1"><?php echo esc_html($box['erp_box_percentage']); ?></span>
                                                            <?php endif; ?>
                                                            <?php if (!empty($box['erp_box_text'])): ?>
                                                                <p><?php echo esc_html($box['erp_box_text']); ?></p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $i++; endforeach; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($cta_text && $cta_link): ?>
            <div class="square pt-lg-4 mt-4 text-center">
                <a href="<?php echo esc_url($cta_link); ?>" 
                   class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo esc_html($cta_text); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>


   <section class="animated-row section actual-clients">
    <div class="container">

        <?php if (get_field('actual_clients_title') || get_field('actual_clients_subtitle')): ?>
            <div class="text-cont text-center">
                <?php if (get_field('actual_clients_title')): ?>
                    <h2 class="section-title">
                        <?php echo get_field('actual_clients_title'); ?>
                    </h2>
                <?php endif; ?>

                <?php if (get_field('actual_clients_subtitle')): ?>
                    <p class="section-content text-center">
                        <?php echo get_field('actual_clients_subtitle'); ?>
                    </p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('actual_clients_slider')): ?>
            <div class="owl-carousel owl-theme actual-clients-slider">
                <?php while (have_rows('actual_clients_slider')): the_row(); ?>
                    <div class="item">
                        <div class="card-wrapper">
                            <div class="card">

                                <?php if (get_sub_field('client_svg')): ?>
                                    <div class="svg-cont">
                                        <img src="<?php echo esc_url(get_sub_field('client_svg')); ?>" alt="client logo"/>
                                    </div>
                                <?php endif; ?>

                                <div class="text-content">
                                    <?php if (get_sub_field('client_name')): ?>
                                        <h3><?php echo esc_html(get_sub_field('client_name')); ?></h3>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('client_info')): ?>
                                        <p><?php echo esc_html(get_sub_field('client_info')); ?></p>
                                    <?php endif; ?>

                                    <?php if (have_rows('client_stats')): ?>
                                        <ul>
                                            <?php while (have_rows('client_stats')): the_row(); ?>
                                                <li>
                                                    <?php if (get_sub_field('stat_value')): ?>
                                                        <span><?php echo esc_html(get_sub_field('stat_value')); ?></span>
                                                    <?php endif; ?>
                                                    <?php if (get_sub_field('stat_label')): ?>
                                                        - <?php echo esc_html(get_sub_field('stat_label')); ?>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if (get_field('actual_clients_bottom_line')): ?>
            <p class="bottom-line-content">
                <?php echo get_field('actual_clients_bottom_line'); ?>
            </p>
        <?php endif; ?>

        <?php if (get_field('actual_clients_cta_text')): ?>
            <div class="square mt-5 text-center">
                <a href="<?php echo esc_url(get_field('actual_clients_cta_link')); ?>" 
                   class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo esc_html(get_field('actual_clients_cta_text')); ?>
                </a>
            </div>
        <?php endif; ?>

    </div>
</section>

<section class="section microsoft-services-portfolio erp-small-businesses-services-portfolio">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('msp_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('msp_section_content'); ?>
            </p>
        </div>

        <!-- business central development cards -->
        <div class="business-central-development-wrapper">
            <div class="row gy-4 justify-content-center">

                <?php if( have_rows('msp_business_central_cards') ): ?>
                    <?php while( have_rows('msp_business_central_cards') ): the_row(); ?>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="business-central-development-card">
                                <div class="card-header-wrapper">
                                    <h3 class="card-title"><?php echo get_sub_field('msp_card_title'); ?></h3>
                                    <div class="svg-wrapper">
                                        <?php echo get_sub_field('msp_card_svg'); ?>
                                    </div>
                                </div>
                                <div class="card-body-wrapper">
                                    <?php if( have_rows('msp_card_features') ): ?>
                                        <ul class="card-lists">
                                            <?php while( have_rows('msp_card_features') ): the_row(); ?>
                                                <li><?php echo get_sub_field('msp_card_feature_item'); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if( have_rows('msp_premium_boxes') ): ?>
                    <?php while( have_rows('msp_premium_boxes') ): the_row(); ?>
                        <div class="col-lg-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3><?php echo get_sub_field('msp_box_title'); ?> <span>Premium</span></h3>
                                    <?php echo get_sub_field('msp_box_svg'); ?>
                                </div>
                                <div class="box-body">
                                    <?php if( have_rows('msp_box_features') ): ?>
                                        <ul>
                                            <?php while( have_rows('msp_box_features') ): the_row(); ?>
                                                <li><?php echo get_sub_field('msp_box_feature_item'); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

            <div class="square mt-4 mt-lg-5 text-center">
                <?php 
                $btn_text = get_field('msp_button_text');
                $btn_url  = get_field('msp_button_url');
                if($btn_text && $btn_url): ?>
                    <a href="<?php echo esc_url($btn_url); ?>" class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                        <?php echo esc_html($btn_text); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>



  <section class="section finance-and-operations-pricing pb-5">
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
                        ?>

                        <div class="col-xl-4 <?php echo $is_popular ? 'px-xl-0' : 'px-xl-5'; ?>">
                            <div class="finance-operations-pricing-card 
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

                                <?php if (have_rows('plan_features')): ?>
                                    <ul class="financial-management-lists">
                                        <?php while (have_rows('plan_features')): the_row(); ?>
                                            <?php if (get_sub_field('feature_text')): ?>
                                                <li><?php echo esc_html(get_sub_field('feature_text')); ?></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>

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
                                            <img src="<?php echo esc_url($bottom_icon); ?>" 
                                                 alt="icon" class="img-fluid">
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


<section class="animated-row section trusted-microsoft-partner">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('trusted_ms_partner_section_title'); ?>
            </h2>
            <p class="section-content text-center pb-0 mb-0">
                <?php echo get_field('trusted_ms_partner_section_content'); ?>
            </p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="owl-carousel owl-theme trusted-microsoft-partner-slider">
            <?php if(have_rows('trusted_ms_partner_slider_items')): ?>
                <?php while(have_rows('trusted_ms_partner_slider_items')): the_row(); ?>
                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="left-wrapper">
                                    <?php echo get_sub_field('trusted_ms_partner_left_svg'); ?>
                                    <h3><?php echo get_sub_field('trusted_ms_partner_left_title'); ?></h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="right-wrapper">
                                    <ul>
                                        <?php if(have_rows('trusted_ms_partner_right_list')): ?>
                                            <?php while(have_rows('trusted_ms_partner_right_list')): the_row(); ?>
                                                <li>
                                                    <?php echo get_sub_field('trusted_ms_partner_list_svg'); ?>
                                                    <?php echo get_sub_field('trusted_ms_partner_list_text'); ?>
                                                </li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="square text-center">
            <a href="<?php echo get_field('trusted_ms_partner_cta_link'); ?>" class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('trusted_ms_partner_cta_text'); ?>
            </a>
        </div>
    </div>
</section>


<!-- testimonials section start -->
<?php
    $args = [
        'category' => 'erp-small-business',
        'class'   => 'bg-gray'
    ];
    get_template_part('template-parts/dynamics-implementation/testimonials', null, $args);
?>
<!-- testimonials section end -->      
    
<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'       => $faqs_heading,
    'content'     => $faqs_content,
    'category'    => 'erp-small-business',
    'classes'     => 'styled-list',
    'bg_class'    => 'bg-white',
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
    <div class="cursor"></div>
    <div class="cursor2"></div>
 <style>
.why-our-clients h5 {
    display: none;
   
}
.why-our-clients p {
    padding-top:20px;
   
}
</style>
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


   