<?php
/*
    Template Name: Dynamics Integration New
    Template Post Type: page
*/

$ctas = get_field('sections_for_ctas');

?>
<?php get_header('header'); ?>

<!-- BANNER SECTION START -->
<?php get_template_part('template-parts/business-central-integration/banner'); ?>
<!-- BANNER SECTION END -->


<!-- Tech Stack Starts -->
<?php get_template_part('template-parts/global/tech-stack'); ?>
<!-- Tech Stack Ends -->


<!-- Connect with us Starts -->
<?php
    $args = ['data' => $ctas[0]];
    get_template_part('template-parts/dynamics-integration/connect-with-us', null, $args);
?>
<!-- Connect with us Ends -->


<!-- Dynamics Connector Features Section Start -->
<?php get_template_part('template-parts/global/alternative-columns');?>
<!-- Dynamics Connector Features Section End -->



<!-- Book a Integration demo Starts -->
 <?php
    $args = ['data' => $ctas[1]];
    get_template_part('template-parts/dynamics-integration/book-a-demo', null, $args);
?>
<!-- Book a Integration demo Ends -->


<!-- Integration Solutions Starts -->
<?php get_template_part('template-parts/global/solutions-cards');?>
<!-- Integration Solutions Ends -->


<!-- Trango Tech is Setting the Benchmark Starts -->
 <?php
    $industries_cater_heading = get_field('industries_cater_heading');
    $industries_cater_content = get_field('industries_cater_content');
    $arr = [
        'title'      => $industries_cater_heading,
        'content'    => $industries_cater_content,
        'category'   => 'dynamics-integration',
		'class'      => 'bg-gray'
    ];
    get_template_part('template-parts/global/industries_cater', null, $arr);
?>
<!-- Trango Tech is Setting the Benchmark Ends -->


<!-- STANDARD APPS SECTION START -->
<?php
    $clients_logo_heading = get_field('clients_logo_heading');
    $clients_logo_content = get_field('clients_logo_content');
    $clientlogo = [
        'title'    => $clients_logo_heading,
        'content'  => $clients_logo_content,
        'category' => 'dynamics-integration',
		'class'    => 'bg-white'
    ];
    get_template_part('template-parts/global/benchmark_partner','',$clientlogo);
?>
<!-- STANDARD APPS SECTION END -->


<!-- Portfolio Full Slider start -->
<?php get_template_part('template-parts/global/portfolio-slider');?>
<!-- Portfolio Full Slider end -->


<!-- Testimonials Start -->
 <?php 
$clients_heading = get_field('dynamics_partner_heading');
$clients_content = get_field('dynamics_partner_content');
$clients = [
    'title'    => $clients_heading,
    'content'  => $clients_content,
    'category' => 'dynamics-integration',
];
get_template_part('template-parts/global/client_testimonial','',$clients);?> 
<!-- Testimonials End -->



<!-- TRUSTED CUSTOMERS SECTION START -->
<?php 
$affiliations_heading = get_field('partnership_heading');
$affiliations_content = get_field('partnership_content');
$affiliations = [
    'title'      =>$affiliations_heading,
    'content'    =>$affiliations_content,
    'category' =>'microsoft-share-point',
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
    'title'    => $faqs_heading,
    'content'  => $faqs_content,
    'category' => 'dynamics-integration',
    'classes'  => 'styled-list'
];
get_template_part('template-parts/global/faqs', null, $faqs);?> 
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


</script>