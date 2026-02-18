<?php /*
Template Name: Dynamics Houston
Template Post Type: page
*/ ?>
<?php get_header('header'); ?>

   
  <!-- BANNER SECTION START -->
<?php $links = get_field('banner_cta_1'); ?>
<section class="section business-central-integration-banner houston-business-banner no-lzl-section">
    <div class="container">
        <div class="row mt-lg-3 gx-0">
            <div class="col-lg-6">
                <div class="text-cont pt-4">
                    <h1 class="banner-subheading">
                        <?php echo get_field('banner_top_subheadig'); ?>
                    </h1>
                     <h2 class="banner-title">
                       <?php echo get_field('banner_heading'); ?>
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
                        <img src="<?php echo $desktop_banner_image; ?>" alt="<?php echo wp_strip_all_tags(get_field('banner_heading'))?>" loading="eager" fetchpriority="high" decoding="async" class="img-fluid no-lazy">
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
    <p><?php echo $text; ?></p>
   
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



    <section class="section technical-architecture">
        <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo get_field('technical_architecture_heading'); ?></h2>
            <p class="section-content text-center">
                <?php echo get_field('technical_architecture_description'); ?>
            </p>
        </div>

        <div class="row gy-4">
             <?php
                       
                         if( have_rows('technical_architecture_cards') ): ?>
                <?php while( have_rows('technical_architecture_cards') ): the_row(); 
            $icon_technical = get_sub_field('icon');
            $icon_technical_url = $icon_technical['url'];
            $image_urlsss = (is_array($icon_technical_url) && isset($icon_technical_url['url'])) ? $icon_technical_url['url'] : '';
            $icon_technical_alt = $icon_technical['alt'];
            $heading_technical   = get_sub_field('heading');
           $description_technical = get_sub_field('description'); 
            
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card-parent">
                    <div class="card">
                        <div class="img-content">
                            <img src="<?php echo $icon_technical_url; ?>" alt="" class="img-fluid">
                        </div>
                        <div class="text-content">
                            <h3><?php echo $heading_technical; ?></h3>
                            <p><?php echo $description_technical; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            
            
            
        </div>
        <?php
        $technical_cta = get_field('technical_architecture_cta'); ?>
        <div class="square text-center mt-5">
            <a href="<?php echo esc_url($technical_cta['url']); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo esc_html($technical_cta['title']); ?>
            </a>
        </div>
    </div>
</section>



<section class="section florida-businesses-services">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('florida_services_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('florida_services_section_description'); ?>
            </p>
        </div>

        <div class="row gy-4">
            <?php if( have_rows('florida_services_repeater') ): ?>
                <?php while( have_rows('florida_services_repeater') ): the_row(); ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="svg-cont">
                                    <?php if( $icon = get_sub_field('service_icon') ): ?>
                                        <img src="<?php echo esc_url($icon); ?>" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="card-body">
                                <h3><?php echo get_sub_field('service_title'); ?></h3>
                                <p><?php echo get_sub_field('service_content'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <?php if( get_field('florida_services_cta_text') ): ?>
            <div class="square text-center mt-5">
                <a href="<?php echo get_field('florida_services_cta_link'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo get_field('florida_services_cta_text'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>


<section class="section start-your-journey-cta houston-journey-cta">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-cont">
                    <h2 class="section-title">
                        <strong><?php echo get_field('start_journey_cta_title'); ?></strong>
                        <p class="section-content mb-2">
                            <?php echo get_field('start_journey_cta_description'); ?>
                        </p>
                        <div class="square">
                            <a href="<?php echo get_field('start_journey_cta_button_link'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                                <?php echo get_field('start_journey_cta_button_text'); ?>
                                <?php if( $icon = get_field('start_journey_cta_button_icon') ): ?>
                                    <img src="<?php echo esc_url($icon); ?>" alt="">
                                <?php endif; ?>
                            </a>
                        </div>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section magento-integration-solutions ms-dynamics-shopify-integration-solutions florida-integration-solutions">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                        <?php echo get_field('solutions_heading'); ?>
                    </h2>
                 <p class="section-content text-center">
                        <?php echo get_field('solutions_description'); ?>
                    </p>
                </div>
    </div>
    <div class="bg-wrapper">
        <div class="container">
            <div class="row justify-content-end wrapper">
                <div class="col-xl-9 col-lg-10">
                    <div class="row">
                         <?php
                         $cta_linss = get_field('solutions_cta');
                         if( have_rows('solutions_list') ): ?>
                <?php while( have_rows('solutions_list') ): the_row(); 
            $icon_integration = get_sub_field('icon');
            $heading_integration   = get_sub_field('heading');
            $content_integration   = get_sub_field('description'); 
            
        ?>
                        <div class="col-md-6 p-0">
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

<div class="container">
    <hr>
</div>
<section class="section pb-0 pt-5">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('microsoft_dynamics_365_solutions_heading'); ?>
            </h2>
            <p class="section-content text-center">
               <?php echo get_field('microsoft_dynamics_365_solutions_description'); ?>
            </p>
        </div>
    </div>
</section>
<section class="section finance-operations-modules florida-business-centeral">
    <div class="text-cont text-center">
        <h2 class="section-title">
            <strong><?php echo get_field('modules_section_title'); ?></strong>
        </h2>
        <p class="section-content text-center">
            <?php echo get_field('modules_section_content'); ?>
        </p>
    </div>

    <!-- Tabs Start Here -->
    <div class="responsive-tabs finance-modules-tabs px-0">
        <ul class="nav nav-tabs" role="tablist">
            <div class="owl-carousel owl-theme modules-carousel" role="tablist">
                <?php if( have_rows('tabs') ): $i = 1; ?>
                    <?php while( have_rows('tabs') ): the_row(); ?>
                        <div class="nav-item d-flex justify-content-center align-items-center">
                            <a id="tab-<?php echo $i; ?>"
                               href="#pos-<?php echo $i; ?>"
                               class="nav-link <?php echo $i == 1 ? 'tab-active' : ''; ?>"
                               data-bs-toggle="tab"
                               role="tab">
                                <?php echo get_sub_field('tab_title'); ?>
                            </a>
                        </div>
                    <?php $i++; endwhile; ?>
                <?php endif; ?>
            </div>
        </ul>

        <div class="container">
            <div id="content" class="tab-content" role="tablist">
                <?php if( have_rows('tabs') ): $j = 1; ?>
                    <?php while( have_rows('tabs') ): the_row(); ?>
                        <div id="pos-<?php echo $j; ?>" 
                             class="card tab-pane fade <?php echo $j == 1 ? 'show active' : ''; ?>" 
                             role="tabpanel" 
                             aria-labelledby="tab-<?php echo $j; ?>">

                            <div class="card-header" role="tab" id="heading-<?php echo $j; ?>">
                                <div class="mb-0">
                                    <a data-bs-toggle="collapse" 
                                       href="#pos-collapse-<?php echo $j; ?>" 
                                       aria-expanded="<?php echo $j == 1 ? 'true' : 'false'; ?>" 
                                       aria-controls="collapse-<?php echo $j; ?>">
                                        <?php echo get_sub_field('tab_title'); ?>
                                    </a>
                                </div>
                            </div>

                            <div id="pos-collapse-<?php echo $j; ?>" 
                                 class="collapse <?php echo $j == 1 ? 'show' : ''; ?>" 
                                 data-bs-parent="#content" 
                                 role="tabpanel" 
                                 aria-labelledby="heading-<?php echo $j; ?>">

                                <div class="card-body">
                                    <div class="row">
                                        <!-- Left Accordion -->
                                        <div class="col-lg-4">
                                            <div class="accordion-cont">
                                                <div class="accordion" id="accordion-<?php echo $j; ?>">
                                                    <?php if( have_rows('accordions') ): $a = 1; ?>
                                                        <?php while( have_rows('accordions') ): the_row(); ?>
                                                            <div class="accordion-item">
                                                                <div class="accordion-header" id="heading-<?php echo $j.'-'.$a; ?>">
                                                                    <button class="accordion-button <?php echo $a > 1 ? 'collapsed' : ''; ?>" 
                                                                            type="button">
                                                                        <?php echo get_sub_field('accordion_title'); ?>
                                                                    </button>
                                                                </div>
                                                                <div id="collapse-<?php echo $j.'-'.$a; ?>" 
                                                                     class="accordion-collapse">
                                                                    <div class="accordion-body">
                                                                        <?php echo get_sub_field('accordion_content'); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php $a++; endwhile; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Right Box -->
                                        <div class="col-lg-8">
                                            <div class="box">
                                                <h3><?php echo get_sub_field('box_heading'); ?></h3>
                                                <div class="row gy-4">
                                                    <?php if( have_rows('features') ): ?>
                                                        <?php while( have_rows('features') ): the_row(); ?>
                                                            <div class="col-md-4">
                                                                <div class="inner-box">
                                                                    <h4><?php echo get_sub_field('feature_title'); ?></h4>
                                                                    <p><?php echo get_sub_field('feature_description'); ?></p>
                                                                </div>
                                                            </div>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $j++; endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Tabs END Here -->
</section>

<section class="section our-proven-migration-process florida-step-migration-process">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('section_description'); ?>
            </p>
        </div>
        <div class="row gy-4 justify-content-center">
            <?php if( have_rows('migration_steps') ): ?>
                <?php while( have_rows('migration_steps') ): the_row(); 
                    $step_number = get_sub_field('step_number');
                    $step_title = get_sub_field('step_title');
                    $step_description = get_sub_field('step_description');
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="top-wrapper">
                            <div class="step-number"><span>Phase</span><?php echo str_pad($step_number, 2, '0', STR_PAD_LEFT); ?></div>
                        </div>
                        <div class="bottom-wrapper">
                            <h3 class="step-title"><?php echo $step_title; ?></h3>
                            <?php echo $step_description; ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php if (get_field('process_button_text') && get_field('process_button_link')): ?>
        <div class="square text-center mt-5">
            <a href="<?php echo get_field('process_button_link'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('process_button_text'); ?>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>

<section class="animated-row section empower-your-app empower-your-app-dubai empower-your-app-houstan">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="img-cont" data-aos="fade-left" data-aos-duration="1500">
                    <?php 
                    // Google Map iframe from ACF
                    $map_iframe = get_field('empower_dubai_map_iframe');
                    if ( !empty($map_iframe) ) {
                        echo $map_iframe; // full iframe code
                    }
                    ?>
                </div>
                <div class="location-box">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/map-marker.webp" alt="map marker" loading="lazy" class="img-fluid">
                    </div>
                    <div class="text-box">
                        <h3><?php echo get_field('empower_dubai_location_heading'); ?></h3>
                        <p><?php echo get_field('empower_dubai_location_text'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="text-cont" data-aos="fade-right" data-aos-duration="1500">
                    <h2 class="section-title">
                        <span><?php echo get_field('empower_dubai_heading_prefix'); ?></span>
                        <?php echo get_field('empower_dubai_heading_main'); ?>
                    </h2>
                    <p class="section-content">
                        <span><?php echo get_field('empower_dubai_content_company_name'); ?></span>
                        <?php echo get_field('empower_dubai_content_text'); ?>
                    </p>
                </div>

                <div class="counter-boxes">
                    <div class="row mt-5 justify-content-lg-start justify-content-md-start justify-content-sm-center">
                        <!-- Developers Card -->
                        <div class="col-md-3 col-sm-6 p-0 mx-lg-3 mx-md-3 mx-sm-0">
                            <div class="card">
                                <div class="svg-wrapper mb-3">
                                    <!-- original SVG as is -->
                                    <!-- (yahan SVG static rehne do) -->
                                    <svg width="65" height="47" viewBox="0 0 65 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="65" height="47" rx="15" fill="#DE253A"></rect>
                                        <g clip-path="url(#clip0_2040_477)">
                                        <path d="M37.6805 33.5839C36.9215 32.8975 36.0308 32.3935 35.0715 32.0958C36.0888 31.4218 36.7614 30.2674 36.7614 28.9584C36.7614 26.8843 35.074 25.197 33.0001 25.197C30.9261 25.197 29.2387 26.8843 29.2387 28.9584C29.2387 30.2674 29.9113 31.4218 30.9285 32.0958C29.9692 32.3935 29.0784 32.8976 28.3194 33.5839C27.0441 34.7372 26.2414 36.3101 26.0592 38.0126C26.045 38.1449 26.0877 38.2769 26.1766 38.3758C26.2656 38.4747 26.3923 38.5312 26.5253 38.5312L39.4747 38.5312C39.6077 38.5312 39.7344 38.4747 39.8233 38.3757C39.9122 38.2768 39.9549 38.1448 39.9407 38.0126C39.7585 36.31 38.9558 34.7372 37.6805 33.5839ZM30.1761 28.9584C30.1761 27.4012 31.4429 26.1345 33 26.1345C34.5571 26.1345 35.8239 27.4013 35.8239 28.9584C35.8239 30.515 34.5579 31.7814 33.0015 31.7822C33.001 31.7822 33.0004 31.7822 32.9999 31.7822C32.9995 31.7822 32.999 31.7822 32.9984 31.7822C31.4421 31.7814 30.1761 30.515 30.1761 28.9584ZM27.0693 37.5938C27.6167 34.7814 30.0795 32.7203 32.9988 32.7197H33C33 32.7197 33.0008 32.7197 33.0012 32.7197C35.9204 32.7203 38.3831 34.7814 38.9305 37.5937L27.0693 37.5938ZM25.988 18.1447L26.8969 18.4946C27.0328 18.9793 27.2258 19.445 27.4731 19.8844L27.0775 20.7751C26.9988 20.9522 27.0373 21.1597 27.1744 21.2968L28.4842 22.6066C28.6214 22.7437 28.8286 22.7823 29.0059 22.7035L29.897 22.3078C30.3363 22.555 30.8019 22.748 31.2863 22.8838L31.6363 23.793C31.7059 23.974 31.8798 24.0933 32.0738 24.0933H33.9261C34.12 24.0933 34.2939 23.9739 34.3635 23.793L34.7135 22.884C35.1981 22.7482 35.6639 22.5551 36.1032 22.3079L36.9939 22.7034C37.171 22.7821 37.3785 22.7436 37.5156 22.6065L38.8255 21.2967C38.9626 21.1596 39.0011 20.9522 38.9224 20.775L38.5266 19.8839C38.7738 19.4446 38.9668 18.979 39.1026 18.4946L40.0119 18.1446C40.1928 18.0749 40.3122 17.9011 40.3122 17.7071V15.8549C40.3122 15.6609 40.1928 15.4871 40.0119 15.4174L39.1029 15.0676C38.9671 14.5828 38.774 14.1171 38.5267 13.6777L38.9224 12.787C39.0011 12.6098 38.9626 12.4024 38.8254 12.2653L37.5156 10.9555C37.3785 10.8184 37.1712 10.7798 36.9939 10.8585L36.1028 11.2543C35.6635 11.0071 35.198 10.8141 34.7135 10.6782L34.3635 9.76898C34.2939 9.58816 34.12 9.46875 33.9261 9.46875H32.0738C31.8799 9.46875 31.706 9.58816 31.6364 9.7691L31.2863 10.6784C30.8019 10.8141 30.3363 11.0072 29.897 11.2544L29.0059 10.8587C28.8287 10.78 28.6212 10.8186 28.4842 10.9556L27.1744 12.2654C27.0373 12.4025 26.9988 12.6099 27.0775 12.7871L27.4731 13.6781C27.2259 14.1175 27.0329 14.583 26.8971 15.0676L25.988 15.4175C25.807 15.4872 25.6876 15.6611 25.6876 15.855V17.7073C25.6876 17.9012 25.807 18.075 25.988 18.1447ZM26.6251 16.1767L27.4587 15.8558C27.603 15.8003 27.7106 15.6772 27.7463 15.5269C27.8786 14.971 28.0981 14.4418 28.3985 13.9538C28.4796 13.8221 28.4905 13.659 28.4278 13.5178L28.0649 12.7007L28.9195 11.846L29.7367 12.2089C29.8779 12.2717 30.0411 12.2608 30.1727 12.1797C30.6607 11.8792 31.1899 11.6598 31.7458 11.5276C31.8961 11.4918 32.0192 11.3842 32.0747 11.2399L32.3957 10.4062H33.6043L33.9252 11.24C33.9807 11.3842 34.1038 11.4918 34.2541 11.5276C34.8099 11.6599 35.3392 11.8793 35.8272 12.1798C35.9588 12.2609 36.122 12.2718 36.2631 12.209L37.0804 11.8461L37.935 12.7007L37.5722 13.5175C37.5095 13.6588 37.5204 13.8219 37.6015 13.9536C37.902 14.4414 38.1214 14.9708 38.2537 15.527C38.2895 15.6773 38.3971 15.8004 38.5413 15.8559L39.3748 16.1767V17.3854L38.5411 17.7063C38.3969 17.7618 38.2893 17.8848 38.2535 18.0352C38.1212 18.591 37.9017 19.1203 37.6013 19.6082C37.5203 19.7398 37.5094 19.9029 37.5721 20.0442L37.935 20.8613L37.0804 21.716L36.2636 21.3532C36.1224 21.2904 35.9592 21.3013 35.8275 21.3824C35.3396 21.6829 34.8103 21.9024 34.2541 22.0347C34.1037 22.0705 33.9806 22.1781 33.9251 22.3223L33.6043 23.1558H32.3957L32.0748 22.3221C32.0193 22.1779 31.8962 22.0703 31.7459 22.0345C31.1901 21.9022 30.6608 21.6828 30.1728 21.3823C30.0411 21.3013 29.878 21.2904 29.7368 21.353L28.9196 21.716L28.0649 20.8613L28.4277 20.0445C28.4904 19.9032 28.4795 19.7401 28.3984 19.6085C28.098 19.1206 27.8786 18.5912 27.7462 18.035C27.7105 17.8847 27.6029 17.7616 27.4586 17.7061L26.6251 17.3852V16.1767ZM32.9999 20.4803C35.0397 20.4803 36.6991 18.8208 36.6991 16.7811C36.6991 14.7413 35.0397 13.0819 32.9999 13.0819C30.9602 13.0819 29.3007 14.7413 29.3007 16.7811C29.3007 18.8208 30.9602 20.4803 32.9999 20.4803ZM32.9999 14.0194C34.5227 14.0194 35.7616 15.2583 35.7616 16.7811C35.7616 18.3039 34.5227 19.5428 32.9999 19.5428C31.4772 19.5428 30.2382 18.3039 30.2382 16.7811C30.2382 15.2583 31.4772 14.0194 32.9999 14.0194ZM20.8248 24.7403L22.2843 25.9133L21.793 27.7202C21.7246 27.972 21.8167 28.2337 22.0278 28.387C22.1376 28.4668 22.2654 28.5069 22.3934 28.5069C22.5115 28.5069 22.6298 28.4728 22.7346 28.4043L24.3012 27.3787L25.8678 28.4043C26.0861 28.5471 26.3636 28.5404 26.5746 28.387C26.7857 28.2337 26.8778 27.972 26.8094 27.7202L26.3182 25.9133L27.7776 24.7402C27.981 24.5767 28.0603 24.3108 27.9796 24.0627C27.899 23.8146 27.6785 23.646 27.418 23.6334L25.5477 23.5421L24.8831 21.7917C24.7907 21.5481 24.5621 21.3907 24.301 21.3908C24.0399 21.3908 23.8115 21.5483 23.7192 21.7917L23.0545 23.5422L21.1843 23.6334C20.9238 23.646 20.7033 23.8146 20.6226 24.0627C20.5422 24.3109 20.6214 24.5769 20.8248 24.7403ZM23.3063 24.4686C23.5537 24.4566 23.7703 24.2992 23.8579 24.0679L24.3012 22.9002L24.7446 24.068C24.8325 24.2994 25.049 24.4566 25.2962 24.4686L26.5436 24.5294L25.5701 25.3119C25.3773 25.4669 25.2945 25.7214 25.3594 25.9603L25.687 27.1655L24.642 26.4814C24.4349 26.3459 24.1673 26.3459 23.9603 26.4814L22.9154 27.1655L23.243 25.9605C23.308 25.7215 23.2253 25.467 23.0323 25.3119L22.0589 24.5294L23.3063 24.4686ZM25.2947 31.9636L23.4244 31.8724L22.7599 30.122C22.6675 29.8784 22.439 29.7209 22.1779 29.7209C21.9168 29.7209 21.6883 29.8784 21.596 30.1218L20.9313 31.8724L19.0611 31.9635C18.8005 31.9761 18.58 32.1447 18.4993 32.3929C18.4187 32.641 18.4981 32.907 18.7014 33.0703L20.1608 34.2434L19.6696 36.0503C19.6011 36.302 19.6933 36.5638 19.9044 36.7171C20.0142 36.7969 20.142 36.837 20.27 36.837C20.3881 36.837 20.5064 36.8028 20.6111 36.7343L22.1777 35.7088L23.7443 36.7343C23.9627 36.8772 24.24 36.8705 24.4511 36.7171C24.6622 36.5638 24.7543 36.3021 24.6859 36.0503L24.1947 34.2435L25.654 33.0704C25.8575 32.907 25.9368 32.6411 25.8561 32.3929C25.7755 32.1448 25.5552 31.9762 25.2947 31.9636ZM21.8834 30.4547L21.8837 30.4555C21.8835 30.4552 21.8834 30.4549 21.8833 30.4546C21.8833 30.4546 21.8833 30.4546 21.8834 30.4547ZM23.4472 33.6417C23.254 33.7967 23.1711 34.0512 23.2361 34.2905L23.5637 35.4956L22.5187 34.8115C22.3116 34.6761 22.044 34.6761 21.837 34.8116L20.792 35.4956L21.1196 34.2907C21.1846 34.0518 21.102 33.7972 20.909 33.642L19.9355 32.8596L21.1832 32.7988C21.4304 32.7867 21.6469 32.6292 21.7345 32.398L22.1779 31.2304L22.6211 32.3977C22.7088 32.6292 22.9253 32.7866 23.1727 32.7988L24.4202 32.8596L23.4472 33.6417ZM38.0202 24.0628C37.9396 24.3109 38.0189 24.5769 38.2222 24.7403L39.6817 25.9134L39.1904 27.7202C39.122 27.972 39.2142 28.2337 39.4253 28.3871C39.6364 28.5404 39.9138 28.5472 40.132 28.4043L41.6987 27.3788L43.2653 28.4043C43.37 28.4729 43.4883 28.507 43.6064 28.507C43.7345 28.507 43.8622 28.4668 43.972 28.3871C44.1831 28.2337 44.2753 27.972 44.2068 27.7202L43.7156 25.9133L45.175 24.7403C45.3784 24.5768 45.4577 24.3109 45.3771 24.0628C45.2964 23.8146 45.0759 23.6461 44.8154 23.6334L42.9451 23.5423L42.2806 21.7919C42.1881 21.5483 41.9597 21.3909 41.6987 21.3908C41.6986 21.3908 41.6986 21.3908 41.6985 21.3908C41.4375 21.3908 41.209 21.5482 41.1166 21.7917L40.452 23.5422L38.5818 23.6334C38.3213 23.6461 38.1009 23.8146 38.0202 24.0628ZM40.7036 24.4686C40.9509 24.4566 41.1674 24.2994 41.2554 24.0679L41.6987 22.9003L42.1419 24.0676C42.2296 24.2992 42.4462 24.4566 42.6935 24.4686L43.941 24.5295L42.9676 25.3119C42.7746 25.467 42.6919 25.7217 42.7569 25.9604L43.0845 27.1655L42.0396 26.4816C41.9361 26.4138 41.8174 26.3798 41.6987 26.3798C41.5801 26.3798 41.4614 26.4137 41.3578 26.4815L40.3129 27.1655L40.6406 25.9602C40.7054 25.7214 40.6226 25.467 40.4297 25.3119L39.4563 24.5295L40.7036 24.4686ZM47.5005 32.393C47.4199 32.1448 47.1993 31.9762 46.9388 31.9636L45.0686 31.8724L44.404 30.122C44.3116 29.8784 44.0831 29.7209 43.822 29.7209C43.5609 29.7209 43.3324 29.8784 43.24 30.122L42.5754 31.8724L40.7052 31.9635C40.4446 31.9762 40.2241 32.1448 40.1435 32.3929C40.0628 32.6411 40.1422 32.907 40.3455 33.0704L41.8049 34.2435L41.3137 36.0503C41.2453 36.3021 41.3374 36.5638 41.5485 36.7172C41.6583 36.7969 41.7861 36.8371 41.9141 36.8371C42.0322 36.8371 42.1505 36.8029 42.2552 36.7344L43.8219 35.7089L45.3884 36.7344C45.6067 36.8773 45.8841 36.8706 46.0952 36.7173C46.3063 36.564 46.3985 36.3022 46.33 36.0504L45.8388 34.2435L47.2982 33.0705C47.5018 32.9071 47.5811 32.6411 47.5005 32.393ZM44.1165 30.4547C44.1166 30.4546 44.1166 30.4546 44.1166 30.4546C44.1165 30.4549 44.1164 30.4552 44.1162 30.4555L44.1165 30.4547ZM45.0909 33.642C44.8979 33.7972 44.8153 34.0518 44.8802 34.2905L45.2079 35.4956L44.163 34.8117C44.0595 34.7439 43.9408 34.7099 43.8221 34.7099C43.7034 34.7099 43.5847 34.7438 43.4811 34.8116L42.4362 35.4956L42.7639 34.2903C42.8288 34.0514 42.746 33.7969 42.5532 33.6421L41.5797 32.8596L42.8273 32.7988C43.0746 32.7867 43.2911 32.6292 43.3787 32.398L43.822 31.2304L44.2654 32.3981C44.3532 32.6294 44.5697 32.7867 44.8169 32.7988L46.0644 32.8596L45.0909 33.642Z" fill="white"></path>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_2040_477">
                                        <rect width="30" height="30" fill="white" transform="translate(18 9)"></rect>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="counter">
                                    <span class="count" data-counter-lim="<?php echo get_field('empower_dubai_devs_limit'); ?>">
                                        <?php echo get_field('empower_dubai_devs_count'); ?>
                                    </span>
                                    <span class="conter-icon">+</span>
                                </div>
                                <p><?php echo get_field('empower_dubai_devs_label'); ?></p>
                            </div>
                        </div>

                        <!-- Industries Card -->
                        <div class="col-md-3 col-sm-6 p-0 mx-lg-3 mx-md-3 mx-sm-0">
                            <div class="card">
                                <div class="svg-wrapper mb-3">
                                    <!-- original SVG as is -->
                                    <svg width="55" height="47" viewBox="0 0 55 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="55" height="47" rx="15" fill="#DE253A"></rect>
                                        <path d="M36.3741 28.0156L36.3855 27.9831C36.4673 27.676 36.595 27.383 36.7644 27.114C36.9795 26.8896 37.2278 26.6996 37.5007 26.5509C38.0512 26.2701 38.5081 25.8353 38.8159 25.2995C39.0305 24.7238 39.0779 24.099 38.9526 23.4975C38.8952 23.1775 38.8866 22.8506 38.9272 22.5281C39.024 22.2345 39.1647 21.9573 39.3445 21.7058C39.723 21.2062 39.9505 20.6086 40 19.9838C39.9503 19.3593 39.723 18.7621 39.3451 18.2625C39.165 18.0108 39.024 17.7334 38.9271 17.4395C38.8865 17.1172 38.895 16.7906 38.9525 16.4708C39.0777 15.8693 39.0305 15.2446 38.8164 14.6687C38.5085 14.1334 38.0519 13.699 37.5019 13.4181C37.2287 13.2689 36.9801 13.0785 36.7649 12.8536C36.5955 12.5846 36.4675 12.2916 36.3854 11.9845C36.2435 11.3832 35.9324 10.8351 35.4889 10.4051C34.9846 10.0584 34.3892 9.86827 33.7773 9.85839C33.4666 9.84465 33.1599 9.78227 32.8685 9.67353C32.6085 9.50895 32.3749 9.30591 32.1757 9.07133C31.788 8.58441 31.2655 8.22241 30.6733 8.03046C30.0743 7.9457 29.4635 8.03875 28.9168 8.29806C28.6257 8.42585 28.3163 8.50719 28 8.53913C27.6839 8.50731 27.3748 8.42603 27.084 8.29826C26.5373 8.03853 25.9261 7.94577 25.3269 8.03159C24.735 8.22284 24.2126 8.58416 23.8249 9.07046C23.6261 9.3054 23.3924 9.50849 23.1321 9.67266C22.8407 9.7814 22.534 9.84378 22.2233 9.85753C21.6114 9.8674 21.016 10.0576 20.5117 10.4042C20.0681 10.8346 19.7568 11.3828 19.6145 11.9842C19.5327 12.2913 19.405 12.5844 19.2356 12.8533C19.0205 13.0777 18.7722 13.2677 18.4993 13.4165C17.9488 13.6972 17.4919 14.132 17.1841 14.6678C16.9695 15.2436 16.9221 15.8683 17.0474 16.4699C17.1048 16.7898 17.1134 17.1167 17.0728 17.4393C16.976 17.7328 16.8353 18.0101 16.6555 18.2615C16.2769 18.7612 16.0495 19.3589 16 19.9838C16.0497 20.6083 16.277 21.2055 16.6549 21.7051C16.835 21.9567 16.976 22.2342 17.0729 22.5281C17.1136 22.8505 17.105 23.1773 17.0475 23.4971C16.9223 24.0986 16.9695 24.7233 17.1836 25.2992C17.4915 25.8345 17.9481 26.269 18.4981 26.5499C18.7713 26.699 19.0199 26.8894 19.2351 27.1143C19.4045 27.3833 19.5325 27.6763 19.6146 27.9835L19.6269 28.0189C19.6248 28.0224 19.6212 28.0242 19.6191 28.0277L16.1803 33.9838C16.0546 34.2013 15.993 34.4498 16.0024 34.7008C16.0119 34.9518 16.092 35.1951 16.2337 35.4025C16.3754 35.6099 16.5728 35.773 16.8032 35.8731C17.0335 35.9732 17.2875 36.0062 17.5358 35.9682L19.8567 35.6153L20.7122 37.8035C20.8027 38.0378 20.9581 38.2416 21.1602 38.3909C21.3623 38.5402 21.6027 38.6289 21.8533 38.6465C21.8878 38.6491 21.9223 38.6505 21.9569 38.6505C22.1906 38.651 22.4204 38.5896 22.6227 38.4725C22.825 38.3554 22.9926 38.1868 23.1085 37.9838L26.6704 31.8137C26.812 31.7681 26.9499 31.718 27.0831 31.6693C27.3743 31.5416 27.6837 31.4603 28 31.4285C28.3161 31.4603 28.6252 31.5416 28.916 31.6693C29.0493 31.7181 29.1887 31.7665 29.3304 31.8123L29.3333 31.8211L32.8913 37.9838C33.0072 38.1868 33.1748 38.3554 33.3771 38.4725C33.5795 38.5896 33.8092 38.651 34.0429 38.6505C34.0774 38.6505 34.1119 38.6491 34.1465 38.6465C34.3973 38.6288 34.6378 38.54 34.8401 38.3906C35.0423 38.2412 35.1978 38.0373 35.2884 37.8028L36.1432 35.6153L38.4632 35.9682C38.7116 36.0064 38.9657 35.9736 39.1962 35.8736C39.4267 35.7735 39.6243 35.6104 39.7661 35.403C39.9079 35.1955 39.9881 34.9522 39.9976 34.7011C40.0071 34.45 39.9454 34.2013 39.8197 33.9838L36.3741 28.0156ZM21.9538 37.3171L20.905 34.6329C20.8494 34.4922 20.7479 34.3745 20.6169 34.299C20.4859 34.2235 20.3332 34.1945 20.1837 34.2169L17.3353 34.6505L20.3627 29.4067C20.409 29.4615 20.4585 29.5136 20.5111 29.5625C21.0154 29.9092 21.6108 30.0993 22.2227 30.1092C22.5334 30.1229 22.8401 30.1853 23.1315 30.2941C23.3915 30.4586 23.6251 30.6617 23.8243 30.8963C24.1739 31.3086 24.6125 31.6363 25.1069 31.8549L21.9538 37.3171ZM29.3733 30.4167C28.9378 30.2302 28.473 30.1214 28 30.0951C27.5269 30.1211 27.0621 30.2299 26.6267 30.4167C26.3159 30.5684 25.9737 30.6442 25.628 30.6381C25.2975 30.4868 25.0082 30.2584 24.7843 29.9721C24.4835 29.6212 24.1237 29.3257 23.7211 29.0987C23.292 28.9158 22.8343 28.8092 22.3685 28.7838C22.0149 28.7833 21.6668 28.6961 21.3548 28.5299C21.1224 28.2483 20.9593 27.916 20.8789 27.5598C20.7551 27.1068 20.5544 26.6785 20.2855 26.2935C19.9806 25.9424 19.6166 25.6474 19.21 25.4218C18.8843 25.2616 18.6026 25.0242 18.3893 24.7305C18.2989 24.3768 18.2931 24.0068 18.3724 23.6505C18.4515 23.1834 18.4523 22.7064 18.375 22.239C18.2508 21.7951 18.0515 21.3757 17.7858 20.999C17.5544 20.7026 17.3991 20.354 17.3333 19.9838C17.399 19.6136 17.5544 19.2651 17.7858 18.9688C18.0518 18.5923 18.2511 18.1728 18.375 17.7288C18.4524 17.2613 18.4515 16.7843 18.3724 16.3171C18.293 15.9608 18.299 15.5907 18.39 15.2371C18.603 14.9427 18.8848 14.7048 19.2109 14.5444C19.6178 14.3191 19.982 14.0243 20.2871 13.6733C20.5554 13.2884 20.7555 12.8604 20.8789 12.4077C20.9598 12.0514 21.123 11.719 21.3555 11.4371C21.6675 11.2709 22.0156 11.1837 22.3691 11.1832C22.835 11.1577 23.2928 11.0511 23.722 10.8681C24.1248 10.6415 24.4847 10.3459 24.7851 9.99473C25.0091 9.70862 25.2984 9.48045 25.6289 9.32939C25.9743 9.32387 26.3162 9.39969 26.6269 9.55073C27.0624 9.73722 27.5271 9.84611 28 9.87246C28.4731 9.8465 28.9379 9.73764 29.3733 9.55086C29.6843 9.39988 30.0264 9.32407 30.372 9.32953C30.7025 9.4808 30.9918 9.7092 31.2157 9.99553C31.5165 10.3464 31.8763 10.6419 32.2789 10.8689C32.708 11.0518 33.1657 11.1584 33.6315 11.1838C33.9851 11.1843 34.3332 11.2715 34.6452 11.4377C34.8776 11.7193 35.0407 12.0516 35.1211 12.4078C35.2449 12.8608 35.4456 13.2891 35.7145 13.6741C36.0194 14.0252 36.3834 14.3202 36.79 14.5458C37.1157 14.706 37.3974 14.9433 37.6107 15.2371C37.7011 15.5908 37.7069 15.9608 37.6276 16.3171C37.5485 16.7842 37.5477 17.2612 37.625 17.7286C37.7492 18.1725 37.9485 18.5919 38.2142 18.9686C38.4456 19.265 38.6009 19.6136 38.6667 19.9838C38.601 20.354 38.4456 20.7025 38.2142 20.9988C37.9482 21.3753 37.7489 21.7948 37.625 22.2388C37.5476 22.7062 37.5485 23.1833 37.6276 23.6505C37.707 24.0068 37.701 24.3769 37.61 24.7305C37.397 25.0249 37.1152 25.2628 36.7891 25.4232C36.3822 25.6485 36.018 25.9433 35.7129 26.2943C35.4446 26.6791 35.2445 27.1072 35.1211 27.5599C35.0403 27.9162 34.8771 28.2487 34.6445 28.5306C34.3325 28.6969 33.9844 28.7841 33.6309 28.7845C33.165 28.81 32.7072 28.9166 32.278 29.0997C31.8752 29.3262 31.5153 29.6218 31.2149 29.973C30.9909 30.2591 30.7016 30.4873 30.3711 30.6383C30.0258 30.6434 29.6841 30.5675 29.3733 30.4167ZM35.8167 34.2167C35.6671 34.1946 35.5145 34.2236 35.3836 34.2991C35.2526 34.3747 35.1511 34.4922 35.0953 34.6327L34.0462 37.3171L30.8929 31.8549C31.3871 31.6366 31.8255 31.3091 32.1751 30.8971C32.3739 30.6622 32.6076 30.4591 32.8679 30.2949C33.1593 30.1862 33.466 30.1238 33.7767 30.1101C34.3886 30.1002 34.984 29.91 35.4883 29.5634C35.5411 29.5142 35.5909 29.4619 35.6374 29.4068L38.6647 34.6505L35.8167 34.2167ZM36 19.9838C36 18.4015 35.5308 16.8548 34.6518 15.5392C33.7727 14.2236 32.5233 13.1983 31.0615 12.5928C29.5997 11.9873 27.9911 11.8288 26.4393 12.1375C24.8874 12.4462 23.462 13.2081 22.3431 14.3269C21.2243 15.4458 20.4624 16.8712 20.1537 18.4231C19.845 19.9749 20.0035 21.5835 20.609 23.0453C21.2145 24.5071 22.2398 25.7565 23.5554 26.6355C24.871 27.5146 26.4177 27.9838 28 27.9838C30.121 27.9815 32.1545 27.1379 33.6543 25.6381C35.1541 24.1383 35.9977 22.1048 36 19.9838ZM28 26.6505C26.6815 26.6505 25.3925 26.2595 24.2962 25.5269C23.1999 24.7944 22.3454 23.7532 21.8408 22.535C21.3362 21.3168 21.2042 19.9764 21.4614 18.6832C21.7187 17.39 22.3536 16.2021 23.286 15.2697C24.2183 14.3374 25.4062 13.7025 26.6994 13.4452C27.9926 13.188 29.333 13.32 30.5512 13.8246C31.7694 14.3292 32.8106 15.1837 33.5431 16.28C34.2757 17.3763 34.6667 18.6653 34.6667 19.9838C34.6646 21.7513 33.9615 23.4457 32.7117 24.6955C31.462 25.9453 29.7675 26.6484 28 26.6505ZM31.0365 17.4291C31.1094 17.4777 31.172 17.5401 31.2207 17.6128C31.2694 17.6855 31.3034 17.7672 31.3205 17.853C31.3377 17.9389 31.3378 18.0273 31.3208 18.1132C31.3037 18.1991 31.27 18.2808 31.2213 18.3536L28.5547 22.3536C28.4999 22.4356 28.4277 22.5044 28.3431 22.5552C28.2586 22.6059 28.1639 22.6372 28.0657 22.6469C28.0436 22.6491 28.0215 22.6505 28 22.6505C27.8232 22.6504 27.6537 22.5802 27.5287 22.4551L25.5287 20.4551C25.4072 20.3294 25.34 20.161 25.3416 19.9862C25.3431 19.8114 25.4132 19.6442 25.5368 19.5206C25.6604 19.397 25.8276 19.3269 26.0024 19.3253C26.1772 19.3238 26.3456 19.391 26.4713 19.5125L27.8965 20.9376L30.1119 17.614C30.2101 17.4669 30.3626 17.3649 30.5359 17.3302C30.7093 17.2955 30.8893 17.3311 31.0365 17.4291Z" fill="white"></path>
                                    </svg>
                                </div>
                                <div class="counter">
                                    <span class="count" data-counter-lim="<?php echo get_field('empower_dubai_industries_limit'); ?>">
                                        <?php echo get_field('empower_dubai_industries_count'); ?>
                                    </span>
                                    <span class="conter-icon">+</span>
                                </div>
                                <p><?php echo get_field('empower_dubai_industries_label'); ?></p>
                            </div>
                        </div>

                        <!-- Apps Card -->
                        <div class="col-md-3 col-sm-6 p-0 mx-lg-3 mx-md-3 mx-sm-0">
                            <div class="card">
                                <div class="svg-wrapper mb-3">
                                    <!-- original SVG as is -->
                                    <svg width="55" height="47" viewBox="0 0 55 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="55" height="47" rx="15" fill="#DE253A"></rect>
                                        <g clip-path="url(#clip0_2040_495)">
                                        <path d="M42.6426 30.3512L42.1578 30.3027C44.2911 25.4542 43.8063 19.7815 40.8972 15.4179L41.7699 15.5633C42.0608 15.6118 42.3032 15.4179 42.3032 15.1755C42.3517 14.933 42.1578 14.6421 41.9153 14.6421L39.879 14.3027H39.8305C39.6366 14.3027 39.4911 14.3997 39.3941 14.5452V14.5936C39.3941 14.6421 39.3456 14.6421 39.3456 14.6906L39.0063 16.727C38.9578 16.9694 39.1517 17.2603 39.3941 17.2603H39.4911C39.7335 17.2603 39.9275 17.1149 39.976 16.8724L40.1214 15.9997C42.885 20.1694 43.3214 25.5997 41.1881 30.1573H41.1396C41.0426 29.9149 40.9456 29.6724 40.8487 29.43L41.7699 28.2179C41.9153 28.0239 41.9153 27.733 41.7214 27.5876L40.2184 26.0846C40.0244 25.8906 39.782 25.8906 39.5881 26.0361L38.376 26.9573C38.1335 26.8603 37.8911 26.7149 37.6487 26.6664L37.4547 25.1633C37.4063 24.9209 37.2123 24.727 36.9699 24.727H34.7881C34.5456 24.727 34.3517 24.9209 34.3032 25.1633L34.1093 26.6664C33.8669 26.7633 33.6244 26.8603 33.382 26.9573L32.1699 26.0361C31.9759 25.8906 31.685 25.8906 31.5396 26.0846L30.0366 27.5876C29.8426 27.7815 29.8426 28.0239 29.9881 28.2179L30.9093 29.43C30.8123 29.6724 30.7153 29.9149 30.6184 30.1573L29.1153 30.3512C28.8729 30.3997 28.679 30.5936 28.679 30.8361V32.9694C28.679 33.2118 28.8729 33.4058 29.1153 33.4543L30.6184 33.6482C30.7153 33.8906 30.8123 34.133 30.9093 34.3755L29.9881 35.6361C29.8426 35.83 29.8426 36.1209 30.0366 36.2664L31.5396 37.7694C31.7335 37.9633 31.9759 37.9633 32.1699 37.8179L33.382 36.8967C33.6244 36.9936 33.8669 37.0906 34.1093 37.1876C29.2123 39.4664 23.2972 38.7876 19.0305 35.4421C18.8366 35.2967 18.4972 35.2967 18.3517 35.5391C18.2063 35.733 18.2063 36.0724 18.4487 36.2179C21.2123 38.3997 24.6063 39.5149 28.0487 39.5149C30.182 39.5149 32.3153 39.0785 34.2547 38.2058L34.3032 38.6906C34.3517 38.933 34.5456 39.127 34.7881 39.127H36.9214C37.1638 39.127 37.3578 38.933 37.4063 38.6906L37.6002 37.1876C37.8426 37.0906 38.085 36.9936 38.3275 36.8967L39.5396 37.8179C39.7335 37.9633 40.0244 37.9633 40.1699 37.7694L41.6729 36.2664C41.8669 36.0724 41.8669 35.83 41.7214 35.6361L40.8002 34.4239C40.8972 34.1815 40.9941 33.9391 41.0911 33.6967L42.5941 33.5027C42.8366 33.4542 43.0305 33.2603 43.0305 33.0179V30.8846C43.079 30.5936 42.885 30.3997 42.6426 30.3512ZM42.1093 32.533L40.7032 32.727C40.5093 32.7755 40.3638 32.8724 40.3153 33.0664C40.2184 33.4543 40.0729 33.8421 39.879 34.1815C39.782 34.327 39.782 34.5694 39.9275 34.7149L40.8002 35.8785L39.879 36.7997L38.7638 35.927C38.6184 35.83 38.3759 35.7815 38.2305 35.8785C37.8911 36.0724 37.5032 36.2179 37.1153 36.3149C36.9214 36.3633 36.7759 36.5088 36.7759 36.7027L36.582 38.1088H35.3214L35.1275 36.7027C35.079 36.5088 34.982 36.3633 34.7881 36.3149C34.4002 36.2179 34.0123 36.0724 33.6729 35.8785C33.5275 35.7815 33.285 35.7815 33.1396 35.927L31.976 36.7997L31.0547 35.8785L31.9275 34.7149C32.0244 34.5694 32.0729 34.327 31.976 34.1815C31.782 33.8421 31.6366 33.4543 31.5396 33.0664C31.4911 32.8724 31.3456 32.727 31.1517 32.727L29.7456 32.533V31.2724L31.1517 31.0785C31.3456 31.03 31.4911 30.933 31.5396 30.7391C31.6366 30.3512 31.782 29.9633 31.976 29.6239C32.0729 29.4785 32.0729 29.2361 31.9275 29.0906L31.0547 27.927L31.976 27.0058L33.1396 27.8785C33.285 27.9755 33.5275 28.0239 33.6729 27.927C34.0123 27.733 34.4002 27.5876 34.7881 27.4906C34.982 27.4421 35.1275 27.2967 35.1275 27.1027L35.3214 25.6967H36.582L36.7759 27.1027C36.8244 27.2967 36.9214 27.4421 37.1153 27.4906C37.5032 27.5876 37.8911 27.733 38.2305 27.927C38.3759 28.0239 38.6184 28.0239 38.7638 27.8785L39.879 27.0058L40.8002 27.927L39.9275 29.0906C39.8305 29.2361 39.782 29.4785 39.879 29.6239C40.0729 29.9633 40.2184 30.3512 40.3153 30.7391C40.3638 30.933 40.5093 31.0785 40.7032 31.0785L42.1093 31.2724V32.533Z" fill="white"></path>
                                        <path d="M35.8547 28.8975C34.2062 28.8975 32.8486 30.255 32.8486 31.9035C32.8486 33.552 34.2062 34.9096 35.8547 34.9096C37.5032 34.9096 38.8608 33.552 38.8608 31.9035C38.8608 30.255 37.5517 28.8975 35.8547 28.8975ZM35.8547 33.9399C34.7395 33.9399 33.8183 33.0187 33.8183 31.9035C33.8183 30.7884 34.7395 29.8672 35.8547 29.8672C36.9698 29.8672 37.8911 30.7884 37.8911 31.9035C37.8911 33.0187 36.9698 33.9399 35.8547 33.9399Z" fill="white"></path>
                                        <path d="M25.2361 11.5398C20.0968 11.7822 17.4786 17.9398 20.9695 21.8186C21.5998 22.4974 22.0361 23.2731 22.3755 24.0489C22.2301 24.1459 22.0846 24.2913 22.0846 24.4853V26.5701C22.0846 26.861 22.2786 27.0549 22.5695 27.0549H22.9089C22.9089 28.5095 24.0725 29.6731 25.5271 29.6731C26.9816 29.6731 28.1452 28.5095 28.1452 27.0549H28.4846C28.7755 27.0549 28.9695 26.861 28.9695 26.5701V24.4853C28.9695 24.2913 28.8725 24.1459 28.6786 24.0489C29.018 23.2246 29.5028 22.4974 30.0846 21.8186C33.721 17.7943 30.7634 11.2974 25.2361 11.5398ZM27.9998 25.0186V26.1337H23.0543V25.0186H27.9998ZM27.1755 27.0549C27.1755 27.9762 26.4483 28.7034 25.5271 28.7034C24.6058 28.7034 23.8786 27.9762 23.8786 27.0549H27.1755ZM27.6604 24.0489H26.1089V20.2186L27.321 19.0065C27.5149 18.8125 27.5149 18.5216 27.321 18.3277C27.1271 18.1337 26.8361 18.1337 26.6422 18.3277L25.624 19.3459L24.6058 18.3277C24.4119 18.1337 24.121 18.1337 23.9271 18.3277C23.7331 18.5216 23.7331 18.8125 23.9271 19.0065L25.1392 20.2186V24.0489H23.3452C22.9574 23.0307 22.3755 22.061 21.6483 21.1883C18.6907 17.8913 21.018 12.7519 25.2361 12.558C29.8422 12.3156 32.4119 17.7943 29.3574 21.1883C28.6301 22.0125 28.0483 22.9822 27.6604 24.0489Z" fill="white"></path>
                                        <path d="M18.5453 12.6061C18.7392 12.7031 18.4483 12.6061 20.6786 12.994C20.9211 13.0425 21.212 12.8485 21.212 12.6061C21.2605 12.3637 21.0665 12.0728 20.8241 12.0728L19.9999 11.8788C25.1877 8.43639 32.0241 8.63033 36.9696 12.5576C37.0665 12.6061 37.1635 12.6546 37.2605 12.6546C37.4059 12.6546 37.5514 12.6061 37.6483 12.4606C37.7938 12.2667 37.7938 11.9273 37.5514 11.7818C32.218 7.61215 24.9453 7.36972 19.418 11.1031L19.5635 10.2303C19.612 9.98791 19.418 9.697 19.1756 9.697C18.8847 9.64851 18.6423 9.84245 18.6423 10.0849C18.5938 10.2788 18.7392 9.3576 18.3029 12.1212C18.2544 12.3152 18.3514 12.5091 18.5453 12.6061Z" fill="white"></path>
                                        <path d="M16.6061 30.7879C16.3152 30.7394 16.0728 30.9334 16.0728 31.1758L15.8788 32.0485C12.4364 26.8607 12.6303 20.0243 16.5576 15.0788C16.7031 14.8849 16.7031 14.5455 16.4606 14.4C16.2667 14.2546 15.9273 14.2546 15.7818 14.497C11.6121 19.8304 11.3697 27.1031 15.1031 32.6304L14.2788 32.4849C13.9879 32.4364 13.7455 32.6304 13.7455 32.8728C13.697 33.1152 13.8909 33.4061 14.1334 33.4061L16.1697 33.7455C16.4121 33.794 16.7031 33.6 16.7031 33.3576L17.0425 31.3213C17.0425 31.0788 16.8485 30.8364 16.6061 30.7879Z" fill="white"></path>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_2040_495">
                                        <rect width="32" height="32" fill="white" transform="translate(12 8)"></rect>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="counter">
                                    <span class="count" data-counter-lim="<?php echo get_field('empower_dubai_apps_limit'); ?>">
                                        <?php echo get_field('empower_dubai_apps_count'); ?>
                                    </span>
                                    <span class="conter-icon">
                                        <?php echo get_field('empower_dubai_apps_suffix'); ?>
                                    </span>
                                </div>
                                <p><?php echo get_field('empower_dubai_apps_label'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="square mt-5" data-aos-duration="1500" data-aos="fade-up">
                    <a 
                        href="<?php echo get_field('empower_dubai_cta_link'); ?>" 
                        class="square-pulse btn btn-red" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                        <?php echo get_field('empower_dubai_cta_text'); ?>
                        <svg width="30" height="24" viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 17L15 12L10 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 17L21 12L16 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section why-choose-ms-dynamics-shopify-integration certified-microsoft-solutions dynamic-houston-solutions">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-lg-6 col-md-12">
                <div class="text-cont">
                    <h2 class="section-title">
                        <?php echo get_field('why_choose_heading'); ?>
                    </h2>
                    <p class="section-content">
                        <?php echo get_field('why_choose_description'); ?>
                    </p>
					<?php $cta = get_field('why_choose_cta'); ?>
                    <?php if (is_array($cta)) : ?>
                    <div class="square">
                        <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red text-capitalize">
                            <?php echo $cta['title']; ?>
                        </a>
                    </div>
					<?php endif; ?>
                </div>
            </div>
			<?php $results = get_field('why_choose_results'); ?>
            <div class="col-lg-6 col-md-12">
                <div class="right-wrapper">
                   <div class="scroll-wrapper">
                       <ul id="scrollList">
					   <?php foreach ($results as $result) : ?>
                           <li>
                               <div class="left">
                                <span class="numb">
                                 <?php echo $result['figure']; ?>
                               </span>
                               </div>
                               <div class="right">
                                   <h3 class="numb-title"><?php echo $result['heading']; ?></h3>
                                   <p><?php echo wpautop($result['description']); ?></p>
                               </div>
                           </li>
						   <?php endforeach; ?>
                          
                       </ul>
                   </div>
                    <!-- Control Scroll Height -->
                    <div class="scroll-height-control">
                        <div class="track-div"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section why-industry-leaders dynamic-houston-industry-leaders">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('wil_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('wil_section_description'); ?>
            </p>
        </div>

        <?php if( have_rows('wil_cards') ): ?>
            <ul class="card-item">
                <?php while( have_rows('wil_cards') ): the_row(); ?>
                    <li>
                        <div class="card">
                            <span class="left">
                                <?php echo get_sub_field('wil_card_icon'); ?>
                            </span>
                            <span class="right">
                                <h3 class="title"><?php echo get_sub_field('wil_card_title'); ?></h3>
                                <p><?php echo get_sub_field('wil_card_description'); ?></p>
                            </span>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <?php if( get_field('wil_button_text') && get_field('wil_button_link') ): ?>
            <div class="square text-center mt-5">
                <a href="<?php echo get_field('wil_button_link'); ?>" class="square-pulse btn btn-red text-capitalize">
                    <?php echo get_field('wil_button_text'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>


<section class="section delivers-measurable-business transform-integratoin-testimonials transform-integratoin-testimonials florida-success-stories bg-ghost-white">
    <div class="container position-relative">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('testimonials_heading'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('testimonials_description'); ?>
            </p>
        </div>
        <div class="row gy-4">
           <?php if (have_rows('testimonials_list')): ?>
    <?php while (have_rows('testimonials_list')): the_row();
        $heading_list     = get_sub_field('heading');
        $logo_list        = get_sub_field('logo');
        $logo_list_url = (is_array($logo_list) && isset($logo_list['url'])) ? esc_url($logo_list['url']) : '';
        $slogan_list      = get_sub_field('slogan');
        $description_list = get_sub_field('description');
    ?>
        <div class="col-lg-4 col-md-6">
            <div class="card h-100">
                <div class="img-content">
                    <?php if (!empty($logo_list)): ?>
                        <img src="<?php echo $logo_list; ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
                <div class="text-content">
                    <?php if ($heading_list): ?>
                        <h3><?php echo esc_html($heading_list); ?></h3>
                        <div class="revenue"><?php echo $slogan_list; ?></div>
                        <span class="revenue-num d-block"><?php echo $description_list; ?></span>
                        <a href="<?php echo get_sub_field('slogan_link'); ?>" class="view-case-study">View Case Study</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
         </div>
         <p class="section-content text-center mt-5">
            <?php echo get_field('testimonials_description_2'); ?></p>
<?php
$quote = get_field('testimonials_quote');
if ($quote) :
     $content_testimonial = $quote['content'] ?? '';
    $person_testimonial = $quote['person'] ?? '';
    $image_testimonial = $quote['image'] ?? null;
     if ($image_testimonial && isset($image_testimonial['url'])) {
        $image_url = esc_url($image_testimonial['url']);
    } else {
        $image_url = ''; // fallback
    }
    ?>
        <div class="review">
            <p><?php echo esc_html($content_testimonial); ?></p>
            <div class="user-avatar">
                <img src="<?php echo $image_testimonial; ?>" alt="" class="img-fluid">
                <?php echo $person_testimonial; ?></div>
        </div>
         <?php endif; ?>
    </div>
    <div class="square text-center mt-5">
            <a href="<?php echo get_field('testimonail_button_link'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('testimonail_button_text'); ?>
            </a>
        </div>
</section>
<div class="spacer"></div>
<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'    => $faqs_heading,
    'content'  => $faqs_content,
    'category' => 'dynamics-houston',
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
    <div class="cursor"></div>
    <div class="cursor2"></div>
<style>
.delivers-measurable-business .card .img-content {
    min-height: 121px;
    display: flex;
    align-items: center;
    justify-content: center;
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