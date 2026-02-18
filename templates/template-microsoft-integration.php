<?php /*
Template Name: Microsoft Dynamics Integration
Template Post Type: page
*/ ?>
<?php get_header('header'); ?>

   
<!-- BANNER SECTION START -->
<section class="animated-row section salesforce-banner dynamics-integration-banner no-lzl-section">
    <div class="container">
        <div class="text-cont">
            <h1>
                <?php echo get_field('banner_heading'); ?>
            </h1>
            <p>
                <?php echo get_field('banner_content'); ?>
            </p>
            <div class="btns">
                <a href="<?php echo get_field('button_link_1'); ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal" ><?php echo get_field('button_text_1'); ?></a>
                <a href="<?php echo get_field('button_link_2'); ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal" ><?php echo get_field('button_text_2'); ?></a>
            </div>
        </div>
    </div>
</section>
<!-- BANNER SECTION END -->

 <!-- counter section -->
 <?php
    $counter_heading = get_field('counter_heading');
    $counter_content = get_field('counter_content');
    $arr = [
        'title'      =>$counter_heading,
        'content'    =>$counter_content,
        'category' =>'microsoft-integration',
    ];
    get_template_part('template-parts/global/help_business_with_counter','',$arr);
?>



<?php
    $integration_heading = get_field('integration_connectors_heading');
    $integration_content = get_field('integration_connectors_content');
    $integration = [
        'title'      =>$integration_heading,
        'content'    =>$integration_content,
        'category' =>'microsoft-integration',
    ];
    get_template_part('template-parts/global/integration_tabs','',$integration);
?>



<!-- cta section start -->
<section class="animated-row section trangotech-dynamics">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('connector_features_heading'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('connector_features_content'); ?>
            </p>
        </div>
        <?php

            $args = array(
                'post_type'           => 'sections',
                'post_status'         => 'publish',
                'ignore_sticky_posts' => 1,
                'posts_per_page'      =>-1,
                'orderby'             => 'asc',
                'order'               => 'asc',
                'tax_query'           => array(array(
                    'taxonomy'        => 'help_business_categories',
                    'field'           => 'slug', //This is optional, as it defaults to 'term_id'
                    'terms'           => 'microsoft-dynamics-integration',
                    'operator'        => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                ))
            );
            $the_query   = new WP_Query( $args );

            $counter = 0;
            $total_posts = $the_query->post_count; // Get total number of posts
            while ($the_query->have_posts()) : $the_query->the_post();
                $counter++;
                $titles = get_the_title();
                $contents = get_the_content();
                $feat_image   = wp_get_attachment_url( get_post_thumbnail_id() );
                $section_title = get_field('section_title');
                $section_button_text = get_field('section_button_text');
                $section_button_link = get_field('section_button_link');	
                ?>
        <?php if ($counter % 2 == 1) { ?>
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-md-2 order-sm-2 order-2">
                <div class="text-content">
                    <h3><?php echo $section_title; ?></h3>
                    <?php echo $contents; ?>
                    <a href="<?php echo $section_button_link; ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal"><?php echo $section_button_text; ?></a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-md-1 order-sm-1 order-1">
                <div class="img-content">
                    <img src="<?php echo $feat_image; ?>" alt="automotion">
                </div>
            </div>
        </div>
        <?php } else { ?>
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1">
                <div class="img-content">
                    <img src="<?php echo $feat_image; ?>" alt="analytics">
                </div>
            </div>
            <div class="col-lg-6 order-lg-2">
                <div class="text-content">
                    <h3><?php echo $section_title; ?></h3>
                    <?php echo $contents; ?>
                    <a href="<?php echo $section_button_link; ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal"><?php echo $section_button_text; ?></a>
                </div>
            </div>
        </div>
        <?php } ?>
    <?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>
       
    </div>
</section>
<!-- cta section end -->


<!-- CTA SECTION START -->
<section class="animated-row section dubai-cta dynamic-cta">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="text-cont" data-aos="fade-right" data-aos-duration="1500">
                    <h2>
                    <?php echo get_field('cta_heading'); ?>
                    </h2>
                    <div class="square mt-5" data-aos-duration="1500" data-aos="fade-up">
                        <a href="<?php echo get_field('cta_button_link'); ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal" class="btn btn-red square-pulse">
                        <?php echo get_field('cta_button_text'); ?>
                            <svg width="30" height="24" viewBox="0 0 30 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 17L15 12L10 7" stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M16 17L21 12L16 7" stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="img-cont" data-aos="fade-left" data-aos-duration="1500">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dynamics-integration/dynamic-cta.png" alt="cta" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA SECTION END -->



<!-- REPUTABLE AND TRUSTABLE -->
<?php
    $dynamics_heading = get_field('dynamic_partner_heading');
    $dynamics_content = get_field('dynamic_partner_content');
    $dynamics = [
        'title'      =>$dynamics_heading,
        'content'    =>$dynamics_content,
        'category' =>'microsoft-integration',
    ];
    get_template_part('template-parts/global/dynamics_partner','',$dynamics);
?>
<!-- REPUTABLE AND TRUSTABLE -->


<!-- INDUSTRIES SECTION START -->

<?php
    $industries_cater_heading = get_field('industries_cater_heading');
    $industries_cater_content = get_field('industries_cater_content');
    $arr = [
        'title'      =>$industries_cater_heading,
        'content'    =>$industries_cater_content,
        'category' =>'microsoft-integration',
    ];
    get_template_part('template-parts/global/industries_cater','',$arr);
?>
<!-- INDUSTRIES SECTION END -->



<!-- STANDARD APPS SECTION START -->
<?php
    $clients_logo_heading = get_field('clients_logo_heading');
    $clients_logo_content = get_field('clients_logo_content');
    $clientlogo = [
        'title'      =>$clients_logo_heading,
        'content'    =>$clients_logo_content,
        'category' =>'microsoft-integration',
    ];
    get_template_part('template-parts/global/benchmark_partner','',$clientlogo);
?>
<!-- STANDARD APPS SECTION END -->


<?php 
$clients_heading = get_field('dynamics_partner_heading');
$clients_content = get_field('dynamics_partner_content');
$clients = [
    'title'      =>$clients_heading,
    'content'    =>$clients_content,
    'category' =>'microsoft-integration',
];
get_template_part('template-parts/global/client_testimonial','',$clients);?>          
    


<!-- TRUSTED CUSTOMERS SECTION START -->
<?php 
$affiliations_heading = get_field('partnership_heading');
$affiliations_content = get_field('partnership_content');
$affiliations = [
    'title'      =>$affiliations_heading,
    'content'    =>$affiliations_content,
    'category' =>'microsoft-integration',
];
get_template_part('template-parts/global/partnership','',$affiliations);?> 
<!-- TRUSTED CUSTOMERS SECTION END -->



<!-- lets-level-up SECTION START -->
<section class="animated-row section lets-level-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12 inner-level-up">
                <div class="row">
                    <div class="col-md-5 p-0">
                        <div class="img-cont">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/level-up-woman.webp" alt="level-up"
                                data-aos="flip-left" data-aos-duration="1500">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="text-cont">
                            <h2 class="section-title" data-aos="fade-down-left" data-aos-duration="1000"><span>Let’s level up your</span>
                                Brand, together
                            </h2>
                            <?php echo do_shortcode('[contact-form-7 id="abf9728" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- lets-level-up SECTION END -->



<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'      =>$faqs_heading,
    'content'    =>$faqs_content,
    'category' =>'microsoft-integration',
];
get_template_part('template-parts/global/faqs','',$faqs);?> 
<!-- ASK-QUESTION  END -->


		
<?php get_footer(); ?>

<div class="cursor"></div>
<div class="cursor2"></div>

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