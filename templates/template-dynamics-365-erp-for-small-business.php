<?php /*
Template Name: Dynamics 365 erp for small business
Template Post Type: page
*/ ?>
<?php get_header('header'); ?>

   
     <!-- BANNER SECTION START -->
    <section class="animated-row section salesforce-banner erp-solutions-banner no-lzl-section">
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
        'category' =>'dynamics-erp',
        'class'    => 'd-none',
        'class2' => 'py-5',
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
        'category' =>'dynamics-erp',
    ];
    get_template_part('template-parts/global/dynamics_partner','',$dynamics);
?>
<!-- REPUTABLE AND TRUSTABLE -->


<!-- TECH STACK SECTION END -->
    <!-- SYNC APPLICATION -->
    <?php get_template_part('template-parts/global/sync-application');?>
    <!-- SYNC APPLICATION -->

    <?php
    $streamline_operations_heading = get_field('streamline_operations_heading');
    $streamline_operations_content = get_field('streamline_operations_content');
    $streamline = [
        'title'      =>$streamline_operations_heading,
        'content'    =>$streamline_operations_content,
        'category' =>'dynamics-erp',
    ];
   get_template_part('template-parts/global/streamline_operations','', $streamline);?>
<!-- MS DYNAMICS INTEGRATION -->


    <!-- BUSINESS OPERATIONS -->
    <?php
    $OPERATIONS = [
       'category' =>'dynamics-erp',
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
        'category' =>'dynamics-erp',
		'class' => 'bg-gray'
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
        'category' =>'dynamics-erp',
		'class' => 'bg-white'
    ];
    get_template_part('template-parts/global/benchmark_partner','',$clientlogo);
?>
<!-- STANDARD APPS SECTION END -->

<!-- Shifaam-at-greek-root START -->
    <section class="animated-row section Shifaam-at-greek-root prototype-sec-new  microsoft-portfolio-new  pb-0">
        <div class="container">
            <div class="text-cont">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <h2 class="section-title">
                             <?php echo get_field('portfolio_slider_heading'); ?>
                        </h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="section-content">
                             <?php echo get_field('portfolio_slider_description'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-wraper">
            <div class="owl-carousel owl-theme prototype-slider-new ">
			<?php $slides = get_field('portolio-slides'); ?>

            <?php if (is_array($slides)) : ?>
                <?php foreach ($slides as $slide) : ?>
                <div class="item <?php echo $slide['classes']; ?>">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-lg-6 p-0">
                                <div class="bg-img-sec">
                                    <img src="<?php echo $slide['image']; ?>" class="img-fluid" alt="<?php echo strip_tags( $slide['heading'] ); ?>" class="img-fluid" alt="..." loading="lazy">
                                </div>
                            </div>
                            <div class="col-lg-6 p-0">
                                <div class="txt_sec_area">
                                    <h2><?php echo $slide['heading']; ?></h2>
                                   <?php echo $slide['content']; ?>
									<?php if (is_array($slide['highlights']) && count($slide['highlights'])) : ?>
                                    <div class="bottom-box-points">
									<?php foreach ($slide['highlights'] as $highlight) : $highlight = $highlight['highlight']; ?>
                                        <p><?php echo $highlight; ?></p>
										 <?php endforeach; ?>
                                    </div>
									 <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
				  <?php endforeach; ?>                
            <?php endif; ?>
                
                
            </div>
           <?php if (is_array($slides) && count($slides) > 1) '<div id="slides-counter" class="owl-counter"></div>'; ?>
        </div>
    </section>
    <!-- Shifaam-at-greek-root end -->

<?php 
$clients_heading = get_field('dynamics_partner_heading');
$clients_content = get_field('dynamics_partner_content');
$clients = [
    'title'      =>$clients_heading,
    'content'    =>$clients_content,
    'category' =>'dynamics-erp',
];
get_template_part('template-parts/global/client_testimonial','',$clients);?>         
    

   <!-- TRUSTED CUSTOMERS SECTION START -->
<?php 
$affiliations_heading = get_field('partnership_heading');
$affiliations_content = get_field('partnership_content');
$affiliations = [
    'title'      =>$affiliations_heading,
    'content'    =>$affiliations_content,
    'category' =>'dynamics-erp',
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
    'category' =>'dynamics-erp',
];
get_template_part('template-parts/global/faqs','',$faqs);?> 
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
        .portfolio-slides-full-sec .retailer {
    background: linear-gradient(257.35deg, #10365D 1.18%, #01DEE5 73.32%);
}

.portfolio-slides-full-sec .retailer .counter-box {
    background: rgba(6, 70, 77, 0.54);
}
.portfolio-slides-full-sec .educational {
    background: linear-gradient(257.35deg, #0B58A2 1.18%, #34B6EC 73.32%);
}
.portfolio-slides-full-sec .educational .counter-box {
    background: rgba(11, 66, 105, 0.54);
}
        @media only screen and (max-width: 767px) {
            .counter:nth-child(1) p {
    border-bottom: 1px solid #ffffff;
    padding-bottom: 10px;
}
.counter:nth-child(2) p {
    border-bottom: 1px solid #ffffff;
    padding-bottom: 10px;
}
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
            
            $('.share-point-slider').owlCarousel({
            loop:false,
            margin:30,
            nav:false,
            responsive:{
                0:{
                    items:2
                },
                767:{
                    items:3
                },
                1200:{
                    items:4
                },
            }
        });

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
    });
		
		 // prototype-slider-food-app Start Script _____________
        $(function(){
            var owl = $('.prototype-slider-new');
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
                $('#counter').html(" <span>" + item + " </span> " + "<span>" + items + "</span>");
            }
            // $('#counter,  .prototype-slider-food-app .owl-dots,  .prototype-slider-food-app .owl-nav').wrapAll('<div class="owl-wrapper"></div>');
        });
        // prototype-slider-food-app Script End

    </script>


   