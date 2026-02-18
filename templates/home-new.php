<?php /*
Template Name: Microsoft New
*/ ?>
<?php get_header('header'); ?>

   
    <!-- BANNER SECTION START -->
    <section class="animated-row section salesforce-banner ms-home-banner no-lzl-section">
        <div class="container">
            <div class="text-cont">
                <h1 class="text-capitalize">
                     <?php echo get_field('banner_title'); ?>
                </h1>
                <p>
                   <?php echo get_field('banner_content'); ?>
                </p>
				<button type="button" class="btn btn-primary square-pulse" data-bs-toggle="modal" data-bs-target="#next-project-modal"><?php echo get_field('banner_button_text'); ?></button>
                <?php $badges = [
                    'row_class' => 'justify-content-center',
                    'col_left' => 'col-sm-6 col-md-5 col-lg-4',
                    'col_right' => 'col-sm-6 col-md-5 col-lg-3'
                ]; 
                get_template_part('template-parts/global/5-stars-badge',null,$badges);?>

            </div>
            <div class="ms-banner-video">
                <video poster="<?php echo get_template_directory_uri(); ?>/assets/img/microsoft/ms-banner-video-poster.webp">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/img/microsoft/microsoft-video-opt.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <button class="ms-video-btn" type="button" aria-label="Microsoft Banner Video">
                    <svg width="71" height="71" viewBox="0 0 71 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.8256 5.2846C23.2252 2.14248 29.1128 0.571425 35.4886 0.571425C41.8643 0.571425 47.7367 2.14248 53.1058 5.2846C58.5053 8.42671 62.7761 12.6975 65.9183 18.0971C69.0604 23.4661 70.6314 29.3385 70.6314 35.7143C70.6314 42.09 69.0604 47.9777 65.9183 53.3772C62.7761 58.7463 58.5053 63.0019 53.1058 66.144C47.7367 69.2861 41.8643 70.8571 35.4886 70.8571C29.1128 70.8571 23.2252 69.2861 17.8256 66.144C12.4566 63.0019 8.20099 58.7463 5.05887 53.3772C1.91676 47.9777 0.345703 42.09 0.345703 35.7143C0.345703 29.3385 1.91676 23.4661 5.05887 18.0971C8.20099 12.6975 12.4566 8.42671 17.8256 5.2846ZM53.06 38.231C54.0362 37.6819 54.5243 36.843 54.5243 35.7143C54.5243 34.5856 54.0362 33.7467 53.06 33.1975L28.1671 18.5547C27.2214 17.9751 26.2453 17.9598 25.2386 18.5089C24.2624 19.0885 23.7743 19.9427 23.7743 21.0714V50.3571C23.7743 51.4859 24.2624 52.34 25.2386 52.9196C25.7267 53.1637 26.2148 53.2857 26.7028 53.2857C27.2214 53.2857 27.7095 53.1484 28.1671 52.8739L53.06 38.231Z" fill="white"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION END -->
   
    <!-- Microsoft Offering Start -->
    <section class="section microsoft-offering-sec">
        <div class="container">
            <div class="text-cont">
                <h2 class="section-title text-center"><?php echo get_field('offer_heading'); ?></h2>
                <p class="section-content text-center"><?php echo get_field('offer_content'); ?></p>
            </div>
            <div class="row">
            <?php

$args = array(
    'post_type'           => 'offering',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      => -1,
    'orderby'             => 'asc',
    'order'               => 'asc',
);

$the_query   = new WP_Query( $args );
$counter = 0;
$total_posts = $the_query->post_count; // Get total number of posts
while ( $the_query->have_posts() ) {
    $the_query->the_post();
    $post_id=get_the_ID();
   
    $featured_image_url = get_the_post_thumbnail_url($post_id, 'full'); 
    $counter++;
?>
   
    <?php if ( $counter % 3 == 1 ) { ?>
    <div class="col-md-12 mb-4 <?php echo ( $counter % 3 == 1 ) ? 'col-lg-4' : ( ( $counter % 3 == 2 && $counter != $total_posts ) ? 'col-lg-8' : 'col-lg-4' ); ?>">
        <div class="offer-box sharepoint" data-aos="fade-right" data-aos-duration="1000">
            <img src="<?php echo $featured_image_url; ?>" alt="share point" class="img-fluid" loading="lazy">
            <div class="content-box">
                <h3><?php echo get_the_title(); ?></h3>
                <p><?php echo get_the_content(); ?></p>
                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#next-project-modal">LEARN MORE</a>
            </div>
        </div>
    </div>
    <?php } elseif ( $counter % 3 == 2 && $counter != $total_posts ) { ?>
    <div class="col-md-12 col-lg-8 mb-4">
        <div class="offer-box ms-dynamic-365" data-aos="fade-left" data-aos-duration="1000">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content-box">
                        <h3><?php echo get_the_title(); ?></h3>
                        <p><?php echo get_the_content(); ?> </p>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#next-project-modal">LEARN MORE</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo $featured_image_url; ?>" alt="microsoft dynamics365" class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <?php } else { ?>
    <div class="col-md-12 col-lg-4 mb-4">
        <div class="offer-box sharepoint" data-aos="fade-right" data-aos-duration="1000">
            <img src="<?php echo $featured_image_url; ?>" alt="share point" class="img-fluid" loading="lazy">
            <div class="content-box">
                <h3><?php echo get_the_title(); ?></h3>
                <p><?php echo get_the_content(); ?></p>
                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#next-project-modal">LEARN MORE</a>
            </div>
        </div>
    </div>
    <?php } ?>
<?php
}
wp_reset_postdata();
wp_reset_query(); ?>
            </div>

            
        </div>
    </section>
    <!-- Microsoft Offering End -->

    
     <!-- Cloud Services Start -->
    <section class="section cloud-services-sec">
        <div class="container">
            <div class="text-cont">
				<h2 class="section-title text-center" data-aos="fade-down" data-aos-duration="1000"><?php echo get_field('services_heading'); ?></h2>
                <p class="section-content text-center"  data-aos="fade-down" data-aos-duration="1000">
                <?php echo get_field('services_content'); ?>

                </p>
                <div class="row">
                <?php

$args = array(
    'post_type'           => 'services',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      => -1,
    'orderby'             => 'asc',
    'order'               => 'asc',
);

$the_query   = new WP_Query( $args );
$counter = 0;
$total_posts = $the_query->post_count; // Get total number of posts
while ( $the_query->have_posts() ) {
    $the_query->the_post();
    $post_id=get_the_ID();
   
    $featured_image_url = get_the_post_thumbnail_url($post_id, 'full'); 
    $counter++; ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <h3 class="title"><?php echo get_the_title(); ?></h3>
                            <p>
                              <?php echo get_the_content(); ?>
                            </p>
                            <div class="icon-box">
                               <?php echo get_field('services_icon'); ?>
                            </div>
                        </div>
                    </div>
                    <?php
}
wp_reset_postdata();
wp_reset_query(); ?>
                    
                    
                    
                    <div class="col-12">
                       <button type="button" class="btn btn-primary square-pulse" data-bs-toggle="modal" data-bs-target="#next-project-modal" data-aos="fade-right" data-aos-duration="1000"><?php echo get_field('services_button_text'); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cloud Services End -->

     <!-- help-businesses START -->
     <!-- counter section -->
 <?php
    $counter_heading = get_field('counter_heading');
    $counter_content = get_field('counter_content');
    $arr = [
        'title'      =>$counter_heading,
        'content'    =>$counter_content,
        'category' =>'microsoft-home',
    ];
    get_template_part('template-parts/global/help_business_with_counter','',$arr);
?>
    <!-- help-businesses SECTION END-->
   
<!-- INDUSTRIES SECTION START -->

<?php
    $industries_cater_heading = get_field('industries_cater_heading');
    $industries_cater_content = get_field('industries_cater_content');
    $arr = [
        'title'      =>$industries_cater_heading,
        'content'    =>$industries_cater_content,
        'category' =>'microsoft-home',
        'class'    => 'bg-gray'
    ];
    get_template_part('template-parts/global/industries_cater','',$arr);
?>

<!-- STANDARD APPS SECTION START -->
<?php
    $clients_logo_heading = get_field('clients_logo_heading');
    $clients_logo_content = get_field('clients_logo_content');
    $clientlogo = [
        'title'      =>$clients_logo_heading,
        'content'    =>$clients_logo_content,
        'category' =>'microsoft-home',
        'class'   => 'bg-white'
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
    'category' =>'microsoft-home',
];
get_template_part('template-parts/global/client_testimonial','',$clients);?> 
    <!-- REPUTABLE AND TRUSTABLE -->

   <!-- TRUSTED CUSTOMERS SECTION START -->
<?php 
$affiliations_heading = get_field('partnership_heading');
$affiliations_content = get_field('partnership_content');
$affiliations = [
    'title'      =>$affiliations_heading,
    'content'    =>$affiliations_content,
    'category' =>'microsoft-home',
];
get_template_part('template-parts/global/partnership','',$affiliations);?> 
<!-- TRUSTED CUSTOMERS SECTION END -->
    

    <!-- TRUSTED CUSTOMERS SECTION START -->
    <?php //get_template_part('template-parts/global/partnership');?> 
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
    'category' =>'microsoft-home',
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
				autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:false,
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
            
            $(document).ready(function(){
                $(".ms-video-btn").click(function(){
                    $(this).remove();
                    $(".ms-banner-video video").attr("controls", true);
                    // Play the video
                    $(".ms-banner-video video")[0].play();
					e.preventDefault();
                })
            })

            // remove role attr from owl nav buttons
            document.querySelectorAll('.owl-prev[role], .owl-next[role]').forEach(btn => {
                btn.removeAttribute('role');
            });
            // add aria-label on owl nav buttons
            document.querySelector('.owl-prev')?.setAttribute('aria-label', 'Previous Slide');
            document.querySelector('.owl-next')?.setAttribute('aria-label', 'Next Slide');


            // fix the [aria] attribute issue of intellinput
            jQuery($ => {
                const cleanAria = () =>
                    $('.iti__selected-flag').each(function () {
                    const $el = $(this);
                    ['aria-controls', 'aria-owns', 'aria-activedescendant'].forEach(a => 
                        $el.attr(a) && !document.getElementById($el.attr(a)) && $el.removeAttr(a)
                    );
                    $el.attr('aria-label') || $el.attr('aria-label', 'Select country code');
                    $el.attr('role') || $el.attr('role', 'button');
                    });

                setTimeout(cleanAria, 500);
                new MutationObserver(cleanAria).observe(document.body, { childList: true, subtree: true });
            });

    </script>