<?php /*
Template Name: Microsoft Dynamics Magento
Template Post Type: page
*/ ?>
<?php get_header('header'); ?>

<!-- BANNER SECTION START -->
<section class="animated-row section salesforce-banner dynamics-integration-banner dynamics-magento-integration-banner no-lzl-section">
    <div class="container">
        <div class="text-cont">
            <h1>
                <?php echo get_field('banner_heading'); ?>
            </h1>
            <p>
                <?php echo get_field('banner_content'); ?>
            </p>
            <div class="btns">
                <a href="<?php echo get_field('button_link_1'); ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal"><?php echo get_field('button_text_1'); ?></a>
                <a href="<?php echo get_field('button_link_2'); ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal"><?php echo get_field('button_text_2'); ?></a>
            </div>
        </div>
        <!-- <div class="img-cont">
                <img src="assets/img/dynamics/fax.png" class="img-fluid" data-aos="fade-up" data-aos-duration="1000">
            </div> -->
    </div>
</section>
<!-- BANNER SECTION END -->


<!-- counter section -->
<?php
    $counter_heading = get_field('counter_heading');
    $counter_content = get_field('counter_content');
    $arr = [
        
        'category' =>'magento-integration',
    ];
    get_template_part('template-parts/global/help_business_with_counter','',$arr);
?>


<section class="animated-row section magento-integration-features">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('integration_features_heading'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('integration_features_content'); ?>
            </p>
        </div>

        <div class="row">

            <?php 
               
                $args = array(
                    'post_type'           => 'integration_features',
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => 1,
                    'posts_per_page'      =>-1,
                    'orderby'             => 'ASC',
                    'order'               => 'ASC',
                    'tax_query'           => array(array(
                        'taxonomy'      => 'integration_features_categories',
                        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
                        'terms'         => 'magento-integration',
                        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                    ))
                );
                $the_query = new WP_Query( $args ); 
            ?>     
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <?php echo get_field('icon_svg'); ?>
                        </div>
                        <div class="card-body">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo get_field('content'); ?></p>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>
    </div>
</section>



<!-- CTA SECTION START -->
<section class="animated-row section dubai-cta dynamic-magento-cta">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="text-cont" data-aos="fade-right" data-aos-duration="1500">
                    <h2>
                        <?php echo get_field('consultation_cta_heading'); ?>
                    </h2>
                    <p><?php echo get_field('consultation_cta_content'); ?></p>
                    <div class="square mt-5" data-aos-duration="1500" data-aos="fade-up">
                        <a href="javascript:;" class="btn btn-red square-pulse" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                        <?php echo get_field('consultation_cta_button_text'); ?>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dynamics-magento-integration/schedule-consultation.png" alt="cta" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA SECTION END -->


<section class="animated-row section integration-partner">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('integration_partner_heading'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('integration_partner_content'); ?>
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="box">
                    <h3>Elevate Performance with <span>Dynamics 365.</span></h3>
                    <a href="javascript:;">Get STARTED</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dynamics-magento-integration/partners.png" alt="partners" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <ul>
                <?php 
                    $args = array(
                    'post_type'           => 'integration_partners',
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => 1,
                    'posts_per_page'      =>-1,
                    'orderby'             => 'ASC',
                    'order'               => 'ASC',
                    'tax_query'           => array(array(
                        'taxonomy'      => 'integration_partners_categories',
                        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
                        'terms'         => 'magento-integration',
                        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                    ))
                );
                $the_query = new WP_Query( $args ); 
                ?>     
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                        <div class="left">
                            <?php echo get_field('icon_svg'); ?>
                        </div>
                        <div class="right">
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo get_field('content'); ?></p>
                        </div>
                    </li>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- STREAMLINE OPERATIONS -->
<?php
 
    $mobility = [
       
        'category' =>'magento-integration',
    ];
  get_template_part('template-parts/global/streamline_operations','',$mobility);?>
<!-- STREAMLINE OPERATIONS -->



<!-- CTA SECTION START -->
<section class="animated-row section dubai-cta dynamic-cta">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="text-cont" data-aos="fade-right" data-aos-duration="1500">
                    <h2>
                        <?php echo get_field('consultation_cta_heading'); ?>
                    </h2>
                    <p>
                        <?php echo get_field('consultation_cta_content'); ?>
                    </p>
                    <div class="square mt-5" data-aos-duration="1500" data-aos="fade-up">
                        <a href="<?php echo get_field('cta_button_link'); ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal" class="btn btn-red square-pulse">
                        <?php echo get_field('consultation_cta_button_text'); ?>
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



<!-- MS DYNAMICS INTEGRATION -->
<?php
    $streamline = [
     
        'category' =>'magento-integration',
    ];
   get_template_part('template-parts/global/ms-dynamics-integration','', $streamline);?>
<!-- MS DYNAMICS INTEGRATION -->


<!-- MS DYNAMICS INTEGRATION -->
<?php get_template_part('template-parts/global/dynamics-erp');?>
<!-- MS DYNAMICS INTEGRATION -->


<!-- INDUSTRIES SECTION START -->

<?php
    $industries_cater_heading = get_field('industries_cater_heading');
    $industries_cater_content = get_field('industries_cater_content');
    $arr = [
        'title'      =>$industries_cater_heading,
        'content'    =>$industries_cater_content,
        'category' =>'magento-integration',
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
        'category' =>'magento-integration',
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
    'category' =>'magento-integration',
];
get_template_part('template-parts/global/client_testimonial','',$clients);?>      
    


<!-- TRUSTED CUSTOMERS SECTION START -->
<?php 
$affiliations_heading = get_field('partnership_heading');
$affiliations_content = get_field('partnership_content');
$affiliations = [
    'title'      =>$affiliations_heading,
    'content'    =>$affiliations_content,
    'category' =>'magento-integration',
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
    'category' =>'magento-integration',
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
        loop:true,
        margin:10,
        nav:false,
        dots:false,
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