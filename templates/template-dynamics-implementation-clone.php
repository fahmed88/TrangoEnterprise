<?php
/*
    Template Name: Dynamics Implementation clone

    Template Post Type: page
*/

?>
<?php get_header('header'); ?>

<!-- BANNER SECTION START -->
<section class="section dynamics-integration-banner business-central-integration-banner ms-dynamics-banner business-central-banner no-lzl-section">
    <div class="container position-relative">
        <div class="row align-items-center mt-lg-5 gx-0">
            <div class="col-lg-9 col-xxl-8">
                <div class="text-cont">
                    <h1 class="banner-subheading"><?php echo get_field('banner_top_subheadig'); ?></h1>
                    <h2 class="banner-title">
                       <?php echo get_field('banner_heading'); ?>
                    </h2>
                    <p class="banner-text text-lg-start ms-lg-0">
                        <?php echo get_field('banner_description'); ?>
                    </p>
                                            <?php echo get_field('banner_description2'); ?>
											<?php $badges = [
                    'col_left' => 'col-sm-6 col-md-5 col-lg-4',
                    'col_right' => 'col-sm-6 col-md-5 col-lg-3',
					'row_class' => 'justify-content-lg-start'
                ]; 
                get_template_part('template-parts/global/5-stars-badge',null,$badges);?>
                    <div class="btns justify-content-lg-start gap-3">
                        <?php $cta_1 = get_field('banner_cta_1'); ?>
                        <?php if (is_array($cta_1) && count($cta_1) && isset($cta_1['url'])) echo '<a href="' . $cta_1['url'] . '" class="text-capitalize mx-0" ' . is_modal_link($cta_1['url']) . '>' . $cta_1['title'] . '</a>'; ?>
                        
						<?php $cta_2 = get_field('banner_cta_2'); ?>
                        <?php if (is_array($cta_2) && count($cta_2) && isset($cta_2['url'])) echo '<a href="' . $cta_2['url'] . '" class="text-capitalize btn-white mx-0" ' . is_modal_link($cta_2['url']) . '>' . $cta_2['title'] . '</a>'; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $columns = get_field('text_columns'); ?>
        <div class="checklist-section">
            <div class="row">
                <?php foreach ($columns as $column) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="text-card ">
                            <div class="text">
                                <h3><?php echo $column['heading']; ?></h3>
                                <?php echo wpautop($column['text']); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>
<!-- BANNER SECTION END -->


<!-- Dynamics Connector Features Section Start -->
<?php get_template_part('template-parts/dynamics-implementation/alternative-columns'); ?>
<!-- Dynamics Connector Features Section End -->


<!-- Trusted Microsoft Dynamics Section Start -->
<?php get_template_part('template-parts/dynamics-implementation/trusted-partner'); ?>
<!-- Trusted Microsoft Dynamics Section End -->


<!-- Microsoft Dynamics ERP Challenges Section Start -->
<?php get_template_part('template-parts/dynamics-implementation/two-columns'); ?>
<!-- Microsoft Dynamics ERP Challenges Section End -->


<!-- Integration Solutions Starts -->
<?php
    $args = [
        'classes' => 'bg-gray'
    ];
    get_template_part('template-parts/global/solutions-cards', null, $args);
?>
<!-- Integration Solutions Ends -->


<!-- Types-Of-Mobility START -->
<?php get_template_part('template-parts/dynamics-implementation/services-tabs'); ?>
<!-- Types-Of-Mobility END-->


<!-- industries carouser section start -->
<?php get_template_part('template-parts/dynamics-implementation/industries'); ?>
<!-- industries carouser section end -->


<!-- why partner with trango section start -->
<?php get_template_part('template-parts/dynamics-implementation/why-trango-tech'); ?>
<!-- why partner with trango section end -->


<!-- testimonials section start -->
<?php
    $args = [
        'category' => 'dynamics-implementation'
    ];
    get_template_part('template-parts/dynamics-implementation/testimonials', null, $args);
?>
<!-- testimonials section end -->


<!-- Transform your business with microsoft section Start -->
<?php get_template_part('template-parts/dynamics-implementation/meeting'); ?>
<!-- Transform your business with microsoft section End -->


<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'    => $faqs_heading,
    'content'  => $faqs_content,
    'category' => 'dynamics-implementation',
    'classes'  => 'styled-list'
];
get_template_part('template-parts/global/faqs', null, $faqs);?> 
<!-- ASK-QUESTION  END -->


<?php get_footer(); ?>

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

        $('.ms-industries-carousel').owlCarousel({
            loop: false,
            margin: 30,
            autoplay: false,
            dots: false,
            nav: true,
            // navText: ["", "<i class='fa fa-long-arrow-right'></i>"],
            navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2.9
                }
            }
        });
    });
    // End
    // portfolio slider full end
</script>

<script>


    $(document).ready(function(){
        let windowWidth = $(window).innerWidth();

        if(windowWidth < 768){
            $(".ms-industries-carousels-section .carousel-wraper").each(function(){
                $(this).removeClass("carousel-wraper").addClass("container");
            });
        }
    });

</script>