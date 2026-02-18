<?php
/*
    Template Name: Business Central Development
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>

<!-- BANNER SECTION START -->
<?php get_template_part('template-parts/business-central-integration/banner'); ?>
<!-- BANNER SECTION END -->


<!-- Disconnected Systems and Manual Starts -->
<?php get_template_part('template-parts/business-central-integration/app-issues'); ?>
<!-- Disconnected Systems and Manual Ends -->


<!-- Complete Digital Transformation Solution Starts -->
<?php
    $args = [
        'class' => 'digital-transformation-solution-dev'
    ];
    get_template_part('template-parts/business-central-integration/solution', null, $args);
?>
<!-- Complete Digital Transformation Solution Ends -->

<!-- CTA Section 1 Start -->
<?php 
    $cta1 = [
        'class' => 'bc-cta1'
    ];
    get_template_part('template-parts/global/bc-cta1', null, $cta1);
    ?>

<!-- CTA Section 1 End -->

<div class="spacer"></div>

<!-- Development Methodology Starts -->
<?php get_template_part('template-parts/business-central-development/dev-steps'); ?>
<!-- Development Methodology Ends -->

<!-- why industy leaders start -->
<?php 
    $args = [
        'class' => 'why-industry-leaders-bc bg-white'
    ];
    get_template_part('template-parts/business-central-integration/why-trango-tech', null, $args); 
?>
<!-- why industy leaders end -->



<!-- Development Methodology Starts -->
<?php get_template_part('template-parts/business-central-development/dev-tech-tools'); ?>
<!-- Development Methodology Ends -->


<?php 
    $args = [
        'class' => 'central-licensing-table pb-lg-3'
    ];
    get_template_part('template-parts/global/comparision-table', null, $args); 
?>


<!-- Development Methodology Starts -->
<?php get_template_part('template-parts/business-central-development/services-portfolio'); ?>
<!-- Development Methodology Ends -->


<!-- CTA Section 2 Start -->
<?php 
    $cta2 = [
        'class' => 'bc-cta2'
    ];
    get_template_part('template-parts/global/bc-cta2', null, $cta2);
?>
<!-- CTA Section 2 Start -->

<!-- Testimonials Start -->
<?php 
    $testi = [
        'category' => 'business-central-development',
        'class' => 'bg-gray'
    ];
    get_template_part('template-parts/global/new-testimonials', null, $testi); 
?>
<!-- Testimonials End -->

<!-- Quality Assurance Starts -->
<?php // get_template_part('template-parts/business-central-development/qa-process'); ?>
<!-- Quality Assurance Ends -->


<?php
    $args = [
        'classes' => 'bg-white'
    ];
    get_template_part('template-parts/business-central-integration/proven-results', null, $args);
?>


<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'       => $faqs_heading,
    'content'     => $faqs_content,
    'category'    => 'business-central-development',
    'classes'     => 'styled-list',
    'bg_class'    => 'bg-gray',
    'show_search' => false
];
get_template_part('template-parts/global/faqs', null, $faqs);?> 
<!-- ASK-QUESTION  END -->


<!-- Proven Results Starts -->
<?php
    $args = [
        'classes' => 'bg-white'
    ];
    get_template_part('template-parts/business-central-integration/transform-business', null, $args);
?>
<!-- Proven Results Ends -->


<?php get_footer(); ?>

<script>
    $('.clients-adore-slider').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        dots:true,
        responsive:{
            0:{
                items:1,
                autoHeight:true
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