<?php /*
Template Name: ERP Solution Small Business
Template Post Type: page
*/ ?>
<?php get_header('header'); ?>

   
    <!-- BANNER SECTION START -->
<?php $links = get_field('banner_cta_1'); ?>
<section class="section business-central-integration-banner ms-dynamics-shopify-integration-banner no-lzl-section">
    <div class="container">
        <div class="row mt-lg-3 gx-0">
            <div class="col-lg-6">
                <div class="text-cont pt-4">
                    <h1 class="banner-subheading">
                        <?php echo get_field('banner_heading'); ?>
                    </h1>
                     <h2 class="banner-title">
                       <?php echo get_field('banner_heading2'); ?>
                    </h2>
                    <p class="banner-text  ms-lg-0"><?php echo get_field('banner_description'); ?></p>
                    <div class="square mt-5">
                        <a href="<?php echo esc_url($links['url']); ?>" class="square-pulse btn btn-red align-items-center gap-2">
                            <?php echo esc_html($links['title']); ?>
                        </a>
                        <span class="limited-offer ms-3"><?php echo get_field('banner_contact'); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-6">
                <div class="img-cont text-center">
                    <img src="<?php echo get_field('banner_image'); ?>" class="img-fluid" <?php echo get_image_dimensions(get_field('banner_image')); ?>>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BANNER SECTION END -->

   
   <section class="section dynamics-magento-integration-counter mb-xxl-0 mb-xl-5 pt-0">
    <div class="container">
        <div class="ms-dynamics-counter-wraper position-static">
            <div class="row justify-content-center gy-3 gy-lg-0 gx-0">
                <?php if( have_rows('counter_items') ): ?>
                       <?php while( have_rows('counter_items') ): the_row(); 
            $number = get_sub_field('number');
            $counter_sign = get_sub_field('counter_sign');
            $text   = get_sub_field('text');
            $icon_svg   = get_sub_field('icon'); 
        ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-card">
                        <div class="icon">
                           <?php echo $icon_svg; ?>
                        </div>
						<div class="counter">
                      <?php if (is_numeric($number)): ?>
    <span class="count" data-counter-lim="<?php echo esc_attr($number); ?>">
        <?php echo esc_html($number); ?> 
							</span><span class="conter-icon"><?php echo esc_html($counter_sign); ?></span>
							<p><?php echo esc_html($text); ?></p>
<?php else: ?>
   
        
		<span class="conter-icon"><?php echo esc_html($number); ?></span>
    <p><?php echo esc_html($text); ?></p>
   
<?php endif; ?>
						</div>
					
                    </div>
                </div>
               
                 <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php echo do_shortcode('[cost_calculator_form]'); ?>


<!-- Instant Cost Estimates section start -->
<section class="section why-business-central diverse-business-needs">
    <div class="container">
        <div class="text-cont text-center mb-3">
            <h2 class="section-title">
                <?php echo get_field('dbn_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('dbn_section_description'); ?>
            </p>
        </div>

        <?php if (have_rows('dbn_packages')): ?>
        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <?php if (have_rows('dbn_table_headers')): ?>
                            <?php while (have_rows('dbn_table_headers')): the_row(); ?>
                                <th><?php echo esc_html(get_sub_field('dbn_table_header_label')); ?></th>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while(have_rows('dbn_packages')): the_row(); ?>
                        <tr class="<?php echo get_sub_field('dbn_package_class'); ?>">
                            <td><?php echo esc_html(get_sub_field('dbn_package_name')); ?></td>
                            <td><?php echo esc_html(get_sub_field('dbn_package_audience')); ?></td>
                            <td><?php echo wp_kses_post(get_sub_field('dbn_package_capabilities')); ?></td>
                            <td><?php echo esc_html(get_sub_field('dbn_package_investment')); ?></td>
                            <td><?php echo esc_html(get_sub_field('dbn_package_timeline')); ?></td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php endif; ?>

        <div class="square text-center mt-5">
            <a href="<?php echo esc_url(get_field('dbn_button_link')); ?>" class="square-pulse btn btn-red text-capitalize px-5">
                <?php echo esc_html(get_field('dbn_button_text')); ?>
            </a>
        </div>
    </div>
</section>

<!-- Instant Cost Estimates section End -->


<section class="section why-business-central cost-key-factors dark-gray-bg">
    <div class="container">
        <div class="text-cont text-center mb-3">
            <h2 class="section-title">
                <?php echo get_field('bcp_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('bcp_section_description'); ?>
            </p>
        </div>

        <?php if (have_rows('bcp_pricing_plans')): ?>
        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <?php if (have_rows('bcp_table_headers')): ?>
                                <?php while (have_rows('bcp_table_headers')): the_row(); ?>
                                    <th><?php echo esc_html(get_sub_field('bcp_table_header_label')); ?></th>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while (have_rows('bcp_pricing_plans')): the_row(); ?>
                            <tr>
                                <td><?php echo esc_html(get_sub_field('bcp_plan_license_type')); ?></td>
                                <td><?php echo esc_html(get_sub_field('bcp_plan_billing')); ?></td>
                                <td><?php echo esc_html(get_sub_field('bcp_plan_price')); ?></td>
                                <td><?php echo esc_html(get_sub_field('bcp_plan_description')); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php endif; ?>

        <div class="square text-center mt-5">
            <a href="<?php echo esc_url(get_field('bcp_button_link')); ?>" class="square-pulse btn btn-red text-capitalize px-5">
                <?php echo esc_html(get_field('bcp_button_text')); ?>
            </a>
        </div>
    </div>
</section>


<!-- Business Central Support Plans Section Start -->
<section class="section business-central-support-plans">
    <div class="container">
        <div class="text-cont text-center mb-3">
            <h2 class="section-title">
                <?php echo get_field('support_plans_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('support_plans_description'); ?>
            </p>
        </div>
    </div>

    <div class="support-plans-wrapper">
        <div class="owl-carousel owl-theme support-plans-carousel">
            <?php if (have_rows('support_plans')): ?>
                <?php while (have_rows('support_plans')): the_row(); ?>
                    <div class="item">
                        <div class="support-plan-card">
                            <div class="svg-wrapper">
                                <?php echo get_sub_field('plan_icon'); // SVG code ?>
                            </div>

                            <div class="support-plan-card-content">
                                <h2 class="support-plan-card-title">
                                    <?php echo esc_html(get_sub_field('plan_title')); ?>
                                </h2>
                                <h2 class="support-plan-card-subtitle">
                                    <?php echo esc_html(get_sub_field('plan_subtitle')); ?>
                                </h2>
                                <p class="hour-response">
                                    <?php echo esc_html(get_sub_field('plan_response_time')); ?>
                                </p>
                                <p class="basic-support-text">
                                    <?php echo esc_html(get_sub_field('plan_description')); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="square text-center mt-4 mt-lg-5">
        <?php 
        $cta_text = get_field('support_plans_cta_text');
        $cta_link = get_field('support_plans_cta_link');
        if ($cta_text && $cta_link): ?>
            <a href="<?php echo esc_url($cta_link); ?>" class="square-pulse btn btn-red text-capitalize px-5">
                <?php echo esc_html($cta_text); ?>
            </a>
        <?php endif; ?>
    </div>
</section>

<!-- Business Central Support Plans Section End -->

<!-- Business Central Implementation Costs Section Start -->
<section class="section why-business-central cost-key-factors dark-gray-bg">
    <div class="container">
        <div class="text-cont text-center mb-3">
            <h2 class="section-title">
                <?php echo get_field('cost_factors_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('cost_factors_description'); ?>
            </p>
        </div>

        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <?php if ($header = get_field('cost_factors_table_header')): ?>
                                <th><?php echo esc_html($header['header_col1']); ?></th>
                                <th><?php echo esc_html($header['header_col2']); ?></th>
                                <th><?php echo esc_html($header['header_col3']); ?></th>
                                <th><?php echo esc_html($header['header_col4']); ?></th>
                                <th><?php echo esc_html($header['header_col5']); ?></th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (have_rows('cost_factors_table')): ?>
                            <?php while (have_rows('cost_factors_table')): the_row(); ?>
                                <tr>
                                    <td><?php echo esc_html(get_sub_field('factor_title')); ?></td>
                                    <td><?php echo esc_html(get_sub_field('factor_low')); ?></td>
                                    <td><?php echo esc_html(get_sub_field('factor_medium')); ?></td>
                                    <td><?php echo esc_html(get_sub_field('factor_high')); ?></td>
                                    <td><?php echo esc_html(get_sub_field('factor_primary')); ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="square text-center mt-5">
            <?php 
            $cta_text = get_field('cost_factors_cta_text');
            $cta_link = get_field('cost_factors_cta_link');
            if ($cta_text && $cta_link): ?>
                <a href="<?php echo esc_url($cta_link); ?>" class="square-pulse btn btn-red text-capitalize px-5">
                    <?php echo esc_html($cta_text); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Business Central Implementation Costs Section End -->


<!-- Microsoft Copilot and Ai Capabilities section start -->
<section class="section copilot-ai-capabilities business-central-roi mt-0 bg-white">
    <div class="container">
        <div class="text-cont">
            <h2 class="section-title">
                <?php echo get_field('roi_section_title'); ?>
            </h2>
            <p class="section-content pt-0 mt-0 text-center">
                <?php echo get_field('roi_section_description'); ?>
            </p>
        </div>

        <div class="copilot-card-wrapper">
            <div class="row gy-3">
                <?php if(have_rows('roi_cards')): ?>
                    <?php while(have_rows('roi_cards')): the_row(); ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="copilot-card">
                                <div class="svg-wrapper">
                                    <?php 
                                    $icon = get_sub_field('roi_icon'); 
                                    if($icon): ?>
                                        <img src="<?php echo esc_url($icon); ?>" class="img-fluid" loading="lazy" alt="<?php echo esc_attr(get_sub_field('roi_card_title')); ?>">
                                    <?php endif; ?>
                                </div>
                                <h2 class="copilot-card-title"><?php the_sub_field('roi_card_title'); ?></h2>
                                <p class="copilot-card-content"><?php the_sub_field('roi_card_content'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <?php if(get_field('roi_button_text')): ?>
                <div class="square mt-3 mt-lg-4 pt-3 text-center">
                    <a href="<?php echo esc_url(get_field('roi_button_link')); ?>" class="square-pulse btn btn-red">
                        <?php echo esc_html(get_field('roi_button_text')); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Microsoft Copilot and Ai Capabilities section End -->


<section class="animated-row section our-amazon-integration-process erp-small-business-integration-process trango-implementation-partner">
    <div class="container">
        <?php if (get_field('trango_partner_section_title') || get_field('trango_partner_section_description')): ?>
            <div class="text-center text-cont">
                <?php if (get_field('trango_partner_section_title')): ?>
                    <h2 class="section-title">
                        <?php echo wp_kses_post(get_field('trango_partner_section_title')); ?>
                    </h2>
                <?php endif; ?>

                <?php if (get_field('trango_partner_section_description')): ?>
                    <p class="section-content text-center">
                        <?php echo wp_kses_post(get_field('trango_partner_section_description')); ?>
                    </p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('trango_partner_tabs')): ?>
            <div class="tabs-wrapper">
                <div class="responsive-tabs">
                    <!-- Tabs Navigation -->
                    <ul class="nav nav-tabs" role="tablist">
                        <?php $tab_count = 0; ?>
                        <?php while (have_rows('trango_partner_tabs')): the_row(); ?>
                            <?php $tab_count++; ?>
                            <li class="nav-item">
                                <a id="tab-<?php echo $tab_count; ?>"
                                   href="#pos-<?php echo $tab_count; ?>"
                                   class="nav-link <?php echo ($tab_count === 1) ? 'active' : ''; ?>"
                                   data-bs-toggle="tab" role="tab">
                                    <span><?php echo esc_html(get_sub_field('trango_partner_tab_title')); ?></span>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>

                    <!-- Tabs Content -->
                    <div id="content" class="tab-content" role="tablist">
                        <?php $tab_count = 0; ?>
                        <?php while (have_rows('trango_partner_tabs')): the_row(); ?>
                            <?php $tab_count++; ?>
                            <div id="pos-<?php echo $tab_count; ?>"
                                 class="card tab-pane fade <?php echo ($tab_count === 1) ? 'show active' : ''; ?>"
                                 role="tabpanel"
                                 aria-labelledby="tab-<?php echo $tab_count; ?>">

                                <div class="card-header" role="tab" id="heading-<?php echo $tab_count; ?>">
                                    <h5 class="mb-0">
                                        <a data-bs-toggle="collapse"
                                           href="#pos-collapse-<?php echo $tab_count; ?>"
                                           aria-expanded="<?php echo ($tab_count === 1) ? 'true' : 'false'; ?>"
                                           aria-controls="collapse-<?php echo $tab_count; ?>">
                                            <span><?php echo esc_html(get_sub_field('trango_partner_tab_title')); ?></span>
                                        </a>
                                    </h5>
                                </div>

                                <div id="pos-collapse-<?php echo $tab_count; ?>"
                                     class="collapse <?php echo ($tab_count === 1) ? 'show' : ''; ?>"
                                     data-bs-parent="#content"
                                     role="tabpanel"
                                     aria-labelledby="heading-<?php echo $tab_count; ?>">

                                    <div class="card-body">
                                        <div class="row gx-3">
                                            <?php if (have_rows('trango_partner_tab_boxes')): ?>
                                                <?php while (have_rows('trango_partner_tab_boxes')): the_row(); ?>
                                                    <div class="col-lg-12">
                                                        <div class="box">
                                                            <div class="left">
                                                                <h2 class="cost-saving-text">
                                                                    <?php echo esc_html(get_sub_field('trango_partner_box_left_title')); ?>
                                                                </h2>
                                                            </div>
                                                            <div class="right">
                                                                <?php if (get_sub_field('trango_partner_box_right_heading')): ?>
                                                                    <h4><?php echo esc_html(get_sub_field('trango_partner_box_right_heading')); ?></h4>
                                                                <?php endif; ?>

                                                                <?php if (get_sub_field('trango_partner_box_right_description')): ?>
                                                                    <p><?php echo esc_html(get_sub_field('trango_partner_box_right_description')); ?></p>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="square pt-lg-4 mt-4 text-center">
            <a href="<?php echo get_field('trango_partner_button_link'); ?>" class="square-pulse btn btn-red align-items-center gap-2">
               <?php echo get_field('trango_partner_button_text'); ?>
            </a>
        </div>
    </div>
</section>


<section class="section delivers-measurable-business shopify-measurable-business proven-expertise-and-results">
    <div class="container position-relative">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('mb_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('mb_section_description'); ?>
            </p>
        </div>

        <div class="row gy-4">
            <?php if (have_rows('mb_cards')): ?>
                <?php while (have_rows('mb_cards')): the_row(); 
                    $card_img   = get_sub_field('mb_card_image');
                    $card_title = get_sub_field('mb_card_title');
                    $card_desc  = get_sub_field('mb_card_description');
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="img-content">
                            <?php if($card_img): ?>
                                <img src="<?php echo esc_url($card_img['url']); ?>" alt="<?php echo esc_attr($card_img['alt']); ?>" class="img-fluid">
                            <?php endif; ?>
                        </div>
                        <div class="text-content">
                            <h3><?php echo esc_html($card_title); ?></h3>
                            <div class="efficiency-parent">
                                <div class="efficiency">
                                    <?php if (have_rows('mb_card_points')): ?>
                                        <?php while (have_rows('mb_card_points')): the_row(); ?>
                                            <span class="left">
                                                <!-- static icon -->
                                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="7.47791" cy="8.20447" r="7.07947" fill="url(#paint0_linear_4027_80)" stroke="#DC0019" stroke-width="0.5"></circle>
                                                    <circle cx="7.47717" cy="8.20374" r="4.7467" fill="#FF0000"></circle>
                                                </svg>
                                                <h6><?php the_sub_field('mb_point_text'); ?></h6>
                                            </span>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <p><?php echo esc_html($card_desc); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="bottom-text text-center">
            <p><?php echo esc_html(get_field('mb_bottom_text')); ?></p>
        </div>

        <?php $review = get_field('mb_review'); if($review): ?>
        <div class="review shadow-none">
            <p><?php echo esc_html($review['mb_review_text']); ?></p>
            <h3>
                <?php if($review['mb_review_author_image']): ?>
                    <img src="<?php echo esc_url($review['mb_review_author_image']['url']); ?>" alt="..." class="img-fluid">
                <?php endif; ?>
                <?php echo esc_html($review['mb_review_author_name']); ?>
            </h3>
        </div>
        <?php endif; ?>
    </div>
</section>


<!-- testimonials section start -->
<?php
    $args = [
        'category' => 'erp-solution-small-business',
        'class'   => 'bg-gray'
    ];
    get_template_part('template-parts/dynamics-implementation/testimonials', null, $args);
?>
<!-- testimonials section end --> 



<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'       => $faqs_heading,
    'content'     => $faqs_content,
    'category'    => 'erp-solution-small-business',
    'classes'     => 'styled-list',
    'bg_class'    => 'bg-white',
    'show_search' => false
];
get_template_part('template-parts/global/faqs', null, $faqs);?> 
<!-- ASK-QUESTION  END -->


<!-- Transform Business START -->
<?php
	// get_template_part('template-parts/business-central-integration/transform-business', null, $faqs);
?> 
<!-- Transform Business  END -->




		
	<?php get_footer(); ?>
    <div class="cursor"></div>
    <div class="cursor2"></div>
<style>
.package-list {
    width:522px;
    max-width: 100%;    /* responsive */
    padding-left: 20px; /* bullets ke liye */
    margin: 0 auto;     /* center alignment */
    word-wrap: break-word; /* long text wrap kare */
    overflow-wrap: break-word; /* compatibility */
    box-sizing: border-box; /* padding ko width mai include kare */
}
.package-list li {
    white-space: normal; /* long line break kare */
}

</style>
<script>  
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
    $('.testimonial-carousel-for-mobile-only').owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                loop: false,
                dots: false,
                nav: false,
                autoHeight: true
            },
            768: {
                items: 2,
                margin: 20
            },
            1000: {
                items: 3,
                margin: 20
            }

        }
    });
    $('.support-plans-carousel').owlCarousel({
        autoplay: false,
        loop: true,
        margin: 27,
        autoplay: false,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1.2,
                stagePadding: 5 ,
                margin: 15
            },
            600: {
                items: 1.7,
            },
            1024: {
                items: 2.5,
            },
            1600 : {
                items: 3.2
            }
        }
    });
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    function updateTotal() {
        let total = 0;

        document.querySelectorAll(".package-checkbox:checked").forEach(cb => {
            total += parseFloat(cb.dataset.price || 0);
        });

        document.querySelectorAll(".select-package-checkbox:checked").forEach(cb => {
            total += parseFloat(cb.dataset.price || 0);
        });

        document.getElementById("total-amount").textContent = "$" + total.toLocaleString();
    }

    // === Main Package Checkbox Toggle ===
    document.querySelectorAll(".package-checkbox").forEach(cb => {
        cb.addEventListener("change", function() {
            let wrapper = cb.closest(".package-row")?.querySelector(".select-packages-wrapper");

            if (wrapper) {
                if (cb.checked) {
                    wrapper.style.display = "block"; // show sub-options
                } else {
                    wrapper.style.display = "none"; // hide
                    wrapper.querySelectorAll(".select-package-checkbox").forEach(opt => opt.checked = false);
                }
            }

            updateTotal();
        });
    });

    // Sub-options
    document.querySelectorAll(".select-package-checkbox").forEach(opt => {
        opt.addEventListener("change", updateTotal);
    });

    // Init
    updateTotal();
});
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".see-more-btn").forEach(function(btn) {
        btn.addEventListener("click", function() {
            const list = this.previousElementSibling;

            if (list.style.display === "none" || list.style.display === "") {
                list.style.display = "block";
                this.textContent = "See Less";
            } else {
                list.style.display = "none";
                this.textContent = "See More";
            }
        });
    });
});


</script>
