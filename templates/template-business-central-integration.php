<?php
/*
    Template Name: Business Central Integration
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>


<!-- BANNER SECTION START -->
<?php
    $args = [
        'col-class' => ['col-xxl-5', 'col-xxl-7']
    ];
    get_template_part('template-parts/business-central-integration/banner', null, $args);
?>
<!-- BANNER SECTION END -->


<!-- Disconnected Systems and Manual Starts -->
<?php get_template_part('template-parts/business-central-integration/app-issues'); ?>
<!-- Disconnected Systems and Manual Ends -->

<section class="section integration-challenges">
    <div class="container">

        <div class="text-cont text-center">
            <?php if(get_field('integration_section_title')): ?>
                <h2 class="section-title">
                    <strong><?php the_field('integration_section_title'); ?></strong>
                </h2>
            <?php endif; ?>

            <?php if(get_field('integration_section_subtitle')): ?>
                <p class="section-content text-center mb-0">
                    <?php the_field('integration_section_subtitle'); ?>
                </p>
            <?php endif; ?>
        </div>

        <div class="row gx-0">
            <?php if( have_rows('integration_challenges_cards') ): ?>
                <?php while( have_rows('integration_challenges_cards') ): the_row(); ?>

                    <?php
                        $icon_svg = get_sub_field('integration_card_icon_svg');
                        $title    = get_sub_field('integration_card_title');
                        $desc     = get_sub_field('integration_card_description');
                    ?>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card">

                            <?php if($icon_svg): ?>
                                <div class="svg-content">
                                    <?php echo $icon_svg; ?>
                                </div>
                            <?php endif; ?>

                            <div class="text-content">
                                <?php if($title): ?>
                                    <h3><?php echo esc_html($title); ?></h3>
                                <?php endif; ?>

                                <?php if($desc): ?>
                                    <p><?php echo esc_html($desc); ?></p>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <?php
            $btn_text = get_field('integration_section_button_text');
            $btn_url  = get_field('integration_section_button_url');
        ?>

        <?php if($btn_text): ?>
            <div class="square text-center mt-5">
                <a href="<?php echo $btn_url ? esc_url($btn_url) : 'javascript:;'; ?>"
                   class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo esc_html($btn_text); ?>
                </a>
            </div>
        <?php endif; ?>

    </div>
</section>



<section class="section business-central-integration-cta pt-0">
    <div class="container">
        <div class="box">
            <div class="row align-items-lg-center">

                <div class="col-lg-7">
                    <div class="text-cont">

                        <?php if(get_field('bc_cta_section_heading')): ?>
                            <h2><?php the_field('bc_cta_section_heading'); ?></h2>
                        <?php endif; ?>

                        <?php if(get_field('bc_cta_section_description')): ?>
                            <p><?php the_field('bc_cta_section_description'); ?></p>
                        <?php endif; ?>

                        <?php
                            $btn_text = get_field('bc_cta_button_text');
                            $btn_url  = get_field('bc_cta_button_url');
                            $btn_svg  = get_field('bc_cta_button_svg_icon');
                        ?>

                        <?php if($btn_text): ?>
                            <div class="square">
                                <a href="<?php echo $btn_url ? esc_url($btn_url) : 'javascript:;'; ?>"
                                   class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                                    <?php echo esc_html($btn_text); ?>

                                    <?php if($btn_svg): ?>
                                        <?php echo $btn_svg; ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-cont">
                        <?php
                            $img = get_field('bc_cta_side_image');
                            if($img):
                                $img_url = is_array($img) ? $img['url'] : $img;
                                $img_alt = is_array($img) && !empty($img['alt']) ? $img['alt'] : 'cta';
                        ?>
                            <img src="<?php echo esc_url($img_url); ?>"
                                 alt="<?php echo esc_attr($img_alt); ?>"
                                 class="img-fluid"
                                 loading="lazy">
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="section ms-dynamics-erp-challenges">
    <div class="container">

        <div class="text-cont text-center mb-4 mb-lg-5">
            <?php if(get_field('bc_services_section_title')): ?>
                <h2 class="section-title">
                    <strong><?php the_field('bc_services_section_title'); ?></strong>
                </h2>
            <?php endif; ?>

            <?php if(get_field('bc_services_section_subtitle')): ?>
                <p class="section-content text-center">
                    <?php the_field('bc_services_section_subtitle'); ?>
                </p>
            <?php endif; ?>
        </div>

        <div class="row owl-carousel owl-theme business-central-slider">

            <?php if( have_rows('bc_services_slider_items') ): ?>
                <?php while( have_rows('bc_services_slider_items') ): the_row(); ?>

                    <?php
                        $slide_class = get_sub_field('bc_services_slide_class'); // left / right / end-box
                        $slide_title = get_sub_field('bc_services_slide_title');
                    ?>

                    <div class="item">
                        <div class="ms-challenges-box <?php echo $slide_class ? esc_attr($slide_class) : ''; ?>">

                            <?php if($slide_title): ?>
                                <div class="box-header">
                                    <h3 class="title text-center"><?php echo esc_html($slide_title); ?></h3>
                                </div>
                            <?php endif; ?>

                            <div class="box-body">
                                <ul class="list-items">

                                    <?php if( have_rows('bc_services_slide_points') ): ?>
                                        <?php while( have_rows('bc_services_slide_points') ): the_row(); ?>

                                            <?php
                                                $point_title = get_sub_field('bc_services_point_title'); // optional
                                                $point_text  = get_sub_field('bc_services_point_text');  // required
                                                $text_class  = get_sub_field('bc_services_point_text_class'); // optional e.g. ps-md-3
                                            ?>

                                            <li>
                                                <?php if($point_title): ?>
                                                    <h4 class="list-item-title"><?php echo esc_html($point_title); ?></h4>
                                                <?php endif; ?>

                                                <?php if($point_text): ?>
                                                    <p class="list-item-text <?php echo $text_class ? esc_attr($text_class) : ''; ?>">
                                                        <?php echo esc_html($point_text); ?>
                                                    </p>
                                                <?php endif; ?>
                                            </li>

                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </ul>
                            </div>

                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </div>
</section>


<section class="section integrations-we-deliver pt-0">
    <div class="container">

        <div class="text-cont text-center">
            <?php if(get_field('bc_tabs_section_title')): ?>
                <h2 class="section-title">
                    <strong><?php the_field('bc_tabs_section_title'); ?></strong>
                </h2>
            <?php endif; ?>

            <?php if(get_field('bc_tabs_section_subtitle')): ?>
                <p class="section-content text-center">
                    <?php the_field('bc_tabs_section_subtitle'); ?>
                </p>
            <?php endif; ?>
        </div>

        <!-- Tabs Start Here -->
        <div class="responsive-tabs">

            <?php if( have_rows('bc_tabs_items') ): ?>
                <ul class="nav nav-tabs" role="tablist">
                    <?php $i = 0; while( have_rows('bc_tabs_items') ): the_row(); $i++; ?>
                        <?php
                            $tab_nav_title = get_sub_field('bc_tab_nav_title'); // supports <br>
                            $tab_id        = 'bc-tab-' . $i;
                            $pos_id        = 'bc-pos-' . $i;
                        ?>
                        <li class="nav-item">
                            <a id="<?php echo esc_attr($tab_id); ?>"
                               href="#<?php echo esc_attr($pos_id); ?>"
                               class="nav-link <?php echo ($i === 1) ? 'active' : ''; ?>"
                               data-bs-toggle="tab"
                               role="tab">
                                <?php echo wp_kses_post($tab_nav_title); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <div id="content" class="tab-content">

                <?php if( have_rows('bc_tabs_items') ): ?>
                    <?php $j = 0; while( have_rows('bc_tabs_items') ): the_row(); $j++; ?>

                        <?php
                            $tab_id         = 'bc-tab-' . $j;
                            $pos_id         = 'bc-pos-' . $j;
                            $collapse_id    = 'bc-collapse-' . $j;
                            $heading_id     = 'bc-heading-' . $j;

                            $tab_title      = get_sub_field('bc_tab_title');
                            $tab_desc       = get_sub_field('bc_tab_description');
                            $box_title      = get_sub_field('bc_tab_box_title');

                            $img            = get_sub_field('bc_tab_image');
                            $img_url        = is_array($img) ? ($img['url'] ?? '') : $img;
                            $img_alt        = is_array($img) && !empty($img['alt']) ? $img['alt'] : 'Tab';
                        ?>

                        <div id="<?php echo esc_attr($pos_id); ?>"
                             class="card tab-pane fade <?php echo ($j === 1) ? 'show active' : ''; ?>"
                             role="tabpanel"
                             aria-labelledby="<?php echo esc_attr($tab_id); ?>">

                            <div class="card-header" role="tab" id="<?php echo esc_attr($heading_id); ?>">
                                <div class="mb-0">
                                    <a class="<?php echo ($j === 1) ? '' : 'collapsed'; ?>"
                                       data-bs-toggle="collapse"
                                       href="#<?php echo esc_attr($collapse_id); ?>"
                                       aria-expanded="<?php echo ($j === 1) ? 'true' : 'false'; ?>">
                                        <?php echo esc_html($tab_title); ?>
                                    </a>
                                </div>
                            </div>

                            <div id="<?php echo esc_attr($collapse_id); ?>"
                                 class="collapse <?php echo ($j === 1) ? 'show' : ''; ?>"
                                 data-bs-parent="#content"
                                 role="tabpanel"
                                 aria-labelledby="<?php echo esc_attr($heading_id); ?>">

                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="text-content">

                                                <?php if($tab_title): ?>
                                                    <h3><?php echo esc_html($tab_title); ?></h3>
                                                <?php endif; ?>

                                                <?php if($tab_desc): ?>
                                                    <p><?php echo wp_kses_post($tab_desc); ?></p>
                                                <?php endif; ?>

                                                <?php if($box_title || have_rows('bc_tab_bullets')): ?>
                                                    <div class="box">

                                                        <?php if($box_title): ?>
                                                            <h4><?php echo esc_html($box_title); ?></h4>
                                                        <?php endif; ?>

                                                        <?php if( have_rows('bc_tab_bullets') ): ?>
                                                            <ul>
                                                                <?php while( have_rows('bc_tab_bullets') ): the_row(); ?>
                                                                    <?php $bullet = get_sub_field('bc_tab_bullet_text'); ?>
                                                                    <?php if($bullet): ?>
                                                                        <li><?php echo esc_html($bullet); ?></li>
                                                                    <?php endif; ?>
                                                                <?php endwhile; ?>
                                                            </ul>
                                                        <?php endif; ?>

                                                    </div>
                                                <?php endif; ?>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="img-content">
                                                <?php if($img_url): ?>
                                                    <img src="<?php echo esc_url($img_url); ?>"
                                                         alt="<?php echo esc_attr($img_alt); ?>"
                                                         class="img-fluid"
                                                         loading="lazy">
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
        <!-- Tabs END Here -->
    </div>
</section>


<!-- Why Trango Tech Starts -->
<?php get_template_part('template-parts/business-central-integration/why-trango-tech'); ?>
<!-- Why Trango Tech Ends -->

<section class="section technology-stack-we-use">
    <div class="container">

        <div class="text-cont">
            <div class="row">

                <div class="col-lg-7">
                    <?php if(get_field('bc_tech_stack_title')): ?>
                        <h2 class="section-title">
                            <strong><?php echo wp_kses_post(get_field('bc_tech_stack_title')); ?></strong>
                        </h2>
                    <?php endif; ?>
                </div>

                <div class="col-lg-5">
                    <?php if(get_field('bc_tech_stack_subtitle')): ?>
                        <p class="section-content m-0">
                            <?php the_field('bc_tech_stack_subtitle'); ?>
                        </p>
                    <?php endif; ?>
                </div>

            </div>
        </div>

        <?php if( have_rows('bc_tech_stack_items') ): ?>
            <ul>
                <?php while( have_rows('bc_tech_stack_items') ): the_row(); ?>

                    <?php
                        $item_title = get_sub_field('bc_tech_item_title');
                        $item_img   = get_sub_field('bc_tech_item_image');

                        $img_url = is_array($item_img) ? ($item_img['url'] ?? '') : $item_img;
                        $img_alt = is_array($item_img) && !empty($item_img['alt']) ? $item_img['alt'] : ($item_title ? $item_title : 'tech');
                    ?>

                    <li>
                        <?php if($item_title): ?>
                            <h3><?php echo esc_html($item_title); ?></h3>
                        <?php endif; ?>

                        <?php if($img_url): ?>
                            <img src="<?php echo esc_url($img_url); ?>"
                                 alt="<?php echo esc_attr($img_alt); ?>"
                                 class="img-fluid"
                                 loading="lazy">
                        <?php endif; ?>
                    </li>

                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

    </div>
</section>


<section class="section business-central-integration-cta business-central-struggling-cta">
    <div class="container">
        <div class="box">
            <div class="row align-items-lg-center">

                <div class="col-lg-7">
                    <div class="text-cont">

                        <?php if(get_field('bc_struggle_cta_heading')): ?>
                            <h2><?php echo wp_kses_post(get_field('bc_struggle_cta_heading')); ?></h2>
                        <?php endif; ?>

                        <?php if(get_field('bc_struggle_cta_description')): ?>
                            <p><?php echo wp_kses_post(get_field('bc_struggle_cta_description')); ?></p>
                        <?php endif; ?>

                        <?php
                            $btn_text = get_field('bc_struggle_cta_button_text');
                            $btn_url  = get_field('bc_struggle_cta_button_url');
                            $btn_svg  = get_field('bc_struggle_cta_button_svg_icon');
                        ?>

                        <?php if($btn_text): ?>
                            <div class="square">
                                <a href="<?php echo $btn_url ? esc_url($btn_url) : 'javascript:;'; ?>"
                                   class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                                    <?php echo esc_html($btn_text); ?>

                                    <?php if($btn_svg): ?>
                                        <?php echo $btn_svg; ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-cont">
                        <?php
                            $img = get_field('bc_struggle_cta_side_image');
                            if($img):
                                $img_url = is_array($img) ? ($img['url'] ?? '') : $img;
                                $img_alt = is_array($img) && !empty($img['alt']) ? $img['alt'] : 'cta';
                        ?>
                            <img src="<?php echo esc_url($img_url); ?>"
                                 alt="<?php echo esc_attr($img_alt); ?>"
                                 class="img-fluid"
                                 loading="lazy">
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- Why Trango Tech industries -->
<?php get_template_part('template-parts/global/business_industries_section'); ?>
<!-- Why Trango Tech industries Ends -->


  <!-- OUR WINNING APP PORTFOLIO START -->
<?php
    $heading_our_work = get_field('our_work_title');
    $content_our_work = get_field('our_work_content');
    $ourWorkArr = [
        'title'      => $heading_our_work,
        'content'    => $content_our_work,
        'class'      => 'bg-white',
        'classes'    => 'bg-gray',
        'category'   => 'business-central-integration',
		'order'      => 'ASC'
    ];
    get_template_part('template-parts/global/shifam-new-section','',$ourWorkArr);
?>
<!-- OUR WINNING APP PORTFOLIO END -->


<!-- implementation process vertical section start  -->
<?php
$process = [
    'class' => 'dark-gray-bg',
    'class2' => 'bg-white'
    ];
get_template_part('template-parts/global/implementation-process-vertilce-seven',null,$process);
?>
<!-- implementation process vertical section end  -->



<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'       => $faqs_heading,
    'content'     => $faqs_content,
    'category'    => 'business-central-integration',
    'classes'     => 'styled-list',
    'show_search' => false
];
get_template_part('template-parts/global/faqs', null, $faqs);?> 
<!-- ASK-QUESTION  END -->


<!-- Proven Results Starts -->
<?php get_template_part('template-parts/business-central-integration/transform-business'); ?>
<!-- Proven Results Ends -->

<?php get_footer(); ?>
<style>
.prototype-sec-new .counter-box {
    display: flex;
    width: 100%;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: flex-start;
    justify-content: space-evenly;
}
</style>
<script>
    $('.business-central-slider').owlCarousel({
        loop:false,
        margin:25,
        nav:true,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });
    // inspired market leaders section slider js
    $('.inspired-market-leaders-slider').owlCarousel({
        loop:true,
        margin:20,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:1.2
            },
            600:{
                items:2.1
            },
            768:{
                items:2.5
            },
            1200:{
                items:3.5
            },
            1366:{
                items:4.1 ,
                margin : 26
            }
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