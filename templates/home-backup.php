<?php /*
Template Name: Home Backup
Template Post Type: page
*/ ?>
<?php get_header('header'); ?>

   
     <!-- BANNER SECTION START -->
    <section class="animated-row section salesforce-banner">
        <div class="container">
            <div class="text-cont">
                <h1>
                   <?php echo get_field('banner_title'); ?>
                </h1>
                <p>
                <?php echo get_field('banner_content'); ?>
                </p>
                <a href="<?php echo get_field('banner_button_link'); ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal"><button type="button" class="btn btn-primary square-pulse"><?php echo get_field('banner_button_text'); ?></button></a>
                <?php $badges = [
                    'row_class' => 'justify-content-center',
                    'col_left' => 'col-sm-6 col-md-5 col-lg-4',
                    'col_right' => 'col-sm-6 col-md-5 col-lg-3'
                ]; 
                get_template_part('template-parts/global/5-stars-badge',null,$badges);?>
            </div>
            <!-- <div class="img-cont">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dynamics/fax.png" class="img-fluid" data-aos="fade-up" data-aos-duration="1000">
            </div> -->
        </div>
    </section>
    <!-- BANNER SECTION END -->

   
    <!-- counter section -->
    <!-- counter section -->
 <?php
    $counter_heading = get_field('counter_heading');
    $counter_content = get_field('counter_content');
    $arr = [
        'title'      =>$counter_heading,
        'content'    =>$counter_content,
        'category' =>'microsoft-dynamics',
    ];
    get_template_part('template-parts/global/help_business_with_counter','',$arr);
?>
    <!-- help-businesses SECTION END-->


    <!-- REPUTABLE AND TRUSTABLE -->
<?php
    $dynamics_heading = get_field('dynamic_partner_heading');
    $dynamics_content = get_field('dynamic_partner_content');
    $dynamics = [
        'title'      =>$dynamics_heading,
        'content'    =>$dynamics_content,
        'category' =>'microsoft-dynamics',
    ];
    get_template_part('template-parts/global/dynamics_partner','',$dynamics);
?>
<!-- REPUTABLE AND TRUSTABLE -->


    <!-- SYNC APPLICATION -->
    <?php get_template_part('template-parts/global/sync-application');?>
    <!-- SYNC APPLICATION -->

    <?php
    $streamline_operations_heading = get_field('streamline_operations_heading');
    $streamline_operations_content = get_field('streamline_operations_content');
    $streamline = [
        'title'      =>$streamline_operations_heading,
        'content'    =>$streamline_operations_content,
        'category' =>'microsoft-dynamics',
    ];
   get_template_part('template-parts/global/streamline_operations','', $streamline);?>
<!-- MS DYNAMICS INTEGRATION -->


    <!-- BUSINESS OPERATIONS -->
    <?php
    $OPERATIONS = [
       'category' =>'microsoft-dynamics',
    ];
     get_template_part('template-parts/global/business_operations','',$OPERATIONS);?>
    <!-- BUSINESS OPERATIONS -->


    <!-- INDUSTRIES SECTION START -->

<?php
    $industries_cater_heading = get_field('industries_cater_heading');
    $industries_cater_content = get_field('industries_cater_content');
    $arr = [
        'title'      =>$industries_cater_heading,
        'content'    =>$industries_cater_content,
        'category' =>'microsoft-dynamics',
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
        'category' =>'microsoft-dynamics',
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
    'category' =>'microsoft-dynamics',
];
get_template_part('template-parts/global/client_testimonial','',$clients);?>         
    

   <!-- TRUSTED CUSTOMERS SECTION START -->
<?php 
$affiliations_heading = get_field('partnership_heading');
$affiliations_content = get_field('partnership_content');
$affiliations = [
    'title'      =>$affiliations_heading,
    'content'    =>$affiliations_content,
    'category' =>'microsoft-dynamics',
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
    'category' =>'microsoft-dynamics',
];
get_template_part('template-parts/global/faqs','',$faqs);?> 
<!-- ASK-QUESTION  END -->

<style>

.salesforce-banner {
    height: auto !important;
    background-position: bottom center !important;
    background-color: #f9f9f9;
}

.salesforce-banner .text-cont {
    padding-bottom: 33%;
}
@media(max-width:767px){
	.salesforce-banner .text-cont{
		padding-bottom: 50px;
	}
}	
	
</style>
		
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
    			autoplayHoverPause:true,
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


   