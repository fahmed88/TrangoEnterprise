<?php
/*
    Template Name: Dynamics Support
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>

<!-- BANNER SECTION START -->
<?php
    $args = [
        'class'     => 'ms-dynamics-support-banner'
    ];
    get_template_part('template-parts/business-central-integration/banner', null, $args);
?>
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


<!-- Development Methodology Starts -->
<<<<<<< HEAD
<?php
$args = [
        'class1' => 'mtpps'
    ];
 get_template_part('template-parts/business-central-development/dev-steps', null, $args); ?>
=======
<?php get_template_part('template-parts/business-central-development/dev-steps'); ?>
>>>>>>> 6a6975e828b4d859fbde948b097eac97c9a19ada
<!-- Development Methodology Ends -->


<!-- Response Time Section Start -->
<?php get_template_part('template-parts/dynamics-support/response-time'); ?>
<!-- Response Time Section End -->


<!-- ms dynamics support cards section start -->
<?php get_template_part('template-parts/dynamics-support/support-solutions'); ?>
<!-- ms dynamics support cards section end -->


<!-- support guarantees start -->
<?php get_template_part('template-parts/dynamics-support/support-guarantees'); ?>
<!-- support guarantees end -->


<!-- Proven Results Starts -->
<?php
    $args = [
        'classes' => 'bg-white transform-integratoin-testimonials'
    ];
    get_template_part('template-parts/business-central-integration/proven-results', null, $args);
?>
<!-- Proven Results Ends -->


<!-- Performance Metrics start -->
<?php get_template_part('template-parts/dynamics-support/performance-metrics'); ?>
<!-- Performance Metrics end -->


<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'       => $faqs_heading,
    'content'     => $faqs_content,
    'category'    => 'dynamics-support',
    'bg_class'    => 'bg-white',
    'show_search' => false
];
get_template_part('template-parts/global/faqs', null, $faqs);?> 
<!-- ASK-QUESTION  END -->


<!-- Proven Results Starts -->
<?php get_template_part('template-parts/business-central-integration/transform-business'); ?>
<!-- Proven Results Ends -->
<<<<<<< HEAD
<style>
	.mtpps{
		padding-top: 252px !important;
	}
</style>
=======

>>>>>>> 6a6975e828b4d859fbde948b097eac97c9a19ada

<?php get_footer(); ?>