<?php
/*
    Template Name: Erp Construction
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>
<!-- BANNER SECTION START -->
<section class="section business-central-integration-banner microsoft-construction-erp-banner no-lzl-section">
    <div class="container">
       <div class="row mt-lg-3 gx-0">
             <div class="col-lg-7">
                <div class="text-cont pt-5">
                    <?php if (get_field('banner_top_subheadig')) : ?>
                        <h1 class="banner-subheading"><?php echo get_field('banner_top_subheadig');?></h1>
                    <?php endif; ?>
                    <h2 class="banner-title">
                        <?php echo get_field('banner_heading'); ?>
                    </h2>
                    <p class="banner-text"><?php echo get_field('banner_description'); ?></p>
                    <div class="btns justify-content-lg-start">
                        <?php $cta_1 = get_field('banner_cta_1'); ?>
                        <?php if (is_array($cta_1) && count($cta_1) && isset($cta_1['url'])) : ?>
                            <?php
                                $cta_1_label = get_field('cta_1_label');
                                $cta_1_label = !empty($cta_1_label) ? $cta_1_label : $cta_1['title'];
                            ?>
                            <a class="text-capitalize btn-red square-pulse" href="<?php echo $cta_1['url']; ?>" <?php echo is_modal_link($cta_1['url']); ?>><?php echo $cta_1_label; ?></a>
                        <?php endif; ?>

                        <?php $cta_2 = get_field('banner_cta_2'); ?>
                        <?php if (is_array($cta_2) && count($cta_2) && isset($cta_2['url'])) echo '<a class="text-capitalize btn-pink " href="' . $cta_2['url'] . '" ' . is_modal_link($cta_2['url']) . '>' . $cta_2['title'] . '</a>'; ?>
                    </div>
                    <?php get_template_part('template-parts/global/5-stars-badge');?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner-img">
                    <picture class="no-lazy">
                        <?php
                        $desktop_banner_image = get_field('banner_image');
                        $mobile_banner_image = get_field('banner__mobile_image');
                        ?>
                        <source media="(max-width:767px)" srcset="<?php echo $mobile_banner_image ? $mobile_banner_image : $desktop_banner_image; ?>">
                        <img src="<?php echo $desktop_banner_image; ?>" alt="<?php echo wp_strip_all_tags(get_field('banner_heading'))?>" loading="eager" fetchpriority="high" decoding="async" class="img-fluid no-lazy">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BANNER SECTION END -->

<section class="section dynamics-magento-integration-counter mb-xxl-0 mb-xl-0 pt-0">
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

<!-- operational challenges section start -->

<!-- finance and operations pricing and licensing section start -->
<section class="section finance-and-operations-pricing <?php echo $class; ?>">
    <div class="container">

        <?php if (get_field('finance_pricing_title') || get_field('finance_pricing_subtitle')): ?>
            <div class="text-cont">
                <?php if (get_field('finance_pricing_title')): ?>
                    <h2 class="section-title text-center">
                        <?php echo get_field('finance_pricing_title'); ?>
                    </h2>
                <?php endif; ?>

                <?php if (get_field('finance_pricing_subtitle')): ?>
                    <p class="section-content text-center mt-0 pt-0">
                        <?php echo get_field('finance_pricing_subtitle'); ?>
                    </p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('finance_pricing_cards')): ?>
            <div class="finance-operations-pricing-wrapper">
                <div class="row gy-3 gx-3">
                    <?php while (have_rows('finance_pricing_cards')): the_row(); ?>
                        <?php
                        $price        = get_sub_field('plan_price');
                        $user_text    = get_sub_field('plan_user_text');
                        $plan_name    = get_sub_field('plan_name');
                        $button_text  = get_sub_field('plan_button_text');
                        $button_link  = get_sub_field('plan_button_link');
                        $bottom_text  = get_sub_field('plan_bottom_text');
                        $bottom_icon  = get_sub_field('plan_bottom_icon');
                        $is_popular   = get_sub_field('plan_is_popular');
                        $users_limit   = get_sub_field('users_limit');
                        ?>

                        <div class="col-xl-4 <?php echo $is_popular ? 'px-xl-0' : ''; ?>">
                            <div class="finance-operations-pricing-card <?php if( get_row_index() == 3 ) echo 'last-card'; ?>  
                                <?php echo $is_popular ? 'most-popular' : ''; ?>">
                                
                                <?php if ($is_popular): ?>
                                    <div class="most-popular-tag">MOST POPULAR</div>
                                <?php endif; ?>

                                <?php if ($price): ?>
                                    <span class="finance-pricing-text"><?php echo esc_html($price); ?></span>
                                <?php endif; ?>

                                <?php if ($user_text): ?>
                                    <p class="user-month"><?php echo esc_html($user_text); ?></p>
                                <?php endif; ?>

                                <?php if ($plan_name): ?>
                                    <h3 class="finance-operations-main-title"><?php echo esc_html($plan_name); ?></h3>
                                <?php endif; ?>

                                <?php if ($users_limit): ?>
                                    <span class="user-sizes d-block"><?php echo $users_limit; ?></span>
                                <?php endif; ?>

                                <?php if (have_rows('plan_features')): ?>
                                    <ul class="financial-management-lists">
                                        <?php while (have_rows('plan_features')): the_row(); ?>
                                            <?php if (get_sub_field('feature_text')): ?>
                                                <li><?php echo esc_html(get_sub_field('feature_text')); ?></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>

                                <?php if ($button_text): ?>
                                    <div class="btn-wrapper">
                                        <a href="<?php echo $button_link ? esc_url($button_link) : 'javascript:;'; ?>" 
                                           class="get-started-btn" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                                           <?php echo esc_html($button_text); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if ($bottom_text): ?>
                                    <p class="bottom-line-text">
                                        <?php if ($bottom_icon): ?>
                                            <img src="<?php echo esc_url($bottom_icon); ?>" alt="icon" class="img-fluid">
                                        <?php endif; ?>
                                        <?php echo esc_html($bottom_text); ?>
                                    </p>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
<div class="square text-center mt-5">
            <a href="javascript:;" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                Get a Free Demo
            </a>
        </div>
    </div>
</section>

<!-- finance and operations pricing and licensing section End -->


<?php 
    $cardSec = ['class' => 'bg-white'];
get_template_part('template-parts/global/operational-challenges-cards',null,$cardSec)?>
<!-- operational challenges section end -->

<!-- Why choose section start  -->
<?php
 $whyChooseSec = ['class' => 'bg-gray'];
 get_template_part('template-parts/global/solution-cards2',null,$whyChooseSec)?>
<!-- Why choose section end  -->

<section class="section business-central-licensing price-and-cost-analysis">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php the_field('bclp_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php the_field('bclp_section_description'); ?>
            </p>
        </div>
		<?php $hero = get_field('bclp_table_headers'); ?>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th><?php echo $hero['bclp_header_license_type']; ?></th>
                    <th><?php echo $hero['bclp_header_monthly_cost']; ?></th>
                    <th><?php echo $hero['bclp_header_best_for']; ?></th>
                    <th><?php echo $hero['bclp_header_key_features']; ?></th>
                </tr>
                </thead>
                <tbody>
                <?php if( have_rows('bclp_licenses') ): ?>
                    <?php while( have_rows('bclp_licenses') ): the_row(); ?>
                        <tr>
                            <td><?php the_sub_field('bclp_license_type'); ?></td>
                            <td><?php the_sub_field('bclp_monthly_cost'); ?></td>
                            <td><?php the_sub_field('bclp_best_for'); ?></td>
                            <td><?php the_sub_field('bclp_key_features'); ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if( get_field('bclp_fact_image') || get_field('bclp_fact_title') || get_field('bclp_fact_description') ): ?>
        <div class="fact">
            <ul>
                <?php if( get_field('bclp_fact_image') ): ?>
                    <li>
                        <img src="<?php the_field('bclp_fact_image'); ?>" alt="fact" class="img-fluid">
                    </li>
                <?php endif; ?>
                <?php if( get_field('bclp_fact_title') ): ?>
                    <li>
                        <span class="fact-title"><?php the_field('bclp_fact_title'); ?></span>
                    </li>
                <?php endif; ?>
                <?php if( get_field('bclp_fact_description') ): ?>
                    <li>
                        <p><?php the_field('bclp_fact_description'); ?></p>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</section>

<section class="section why-choose-ms-dynamics-shopify-integration certified-microsoft-solutions dynamic-houston-solutions dynamic-construction-solutions">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-lg-6 col-md-12">
                <div class="text-cont">
                    <h2 class="section-title">
                        <?php echo get_field('why_choose_heading'); ?>
                    </h2>
                    <p class="section-content">
                        <?php echo get_field('why_choose_description'); ?>
                    </p>
					<?php $cta = get_field('why_choose_cta'); ?>
                    <?php if (is_array($cta)) : ?>
                    <div class="square">
                        <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo $cta['title']; ?>
                        </a>
                    </div>
					<?php endif; ?>
                </div>
            </div>
			<?php $results = get_field('why_choose_results'); ?>
            <div class="col-lg-6 col-md-12">
                <div class="right-wrapper">
                   <div class="scroll-wrapper">
                       <ul id="scrollList">
					   <?php foreach ($results as $result) : ?>
                           <li>
                               <div class="left">
                                <span class="numb">
                                    <?php echo $result['icon']; ?>
                                 
                               </span>
                               </div>
                               <div class="right">
                                   <h3 class="numb-title"><?php echo $result['heading']; ?></h3>
                                   <p><?php echo wpautop($result['description']); ?></p>
                               </div>
                           </li>
						   <?php endforeach; ?>
                          
                       </ul>
                   </div>
                    <!-- Control Scroll Height -->
                    <div class="scroll-height-control">
                        <div class="track-div"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Collect all repeater rows
$phases = [];
if( have_rows('fpip_phases') ):
    while( have_rows('fpip_phases') ): the_row();
        $phases[] = [
            'time' => get_sub_field('fpip_phase_time'),
            'subtitle' => get_sub_field('fpip_phase_subtitle'),
            'description' => get_sub_field('fpip_phase_description'),
        ];
    endwhile;
endif;
?>

<?php if( !empty($phases) ): ?>
<section class="section five-phase-implementation-process bg-white">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php the_field('fpip_section_title'); ?></h2>
            <p class="section-content text-center"><?php the_field('fpip_section_description'); ?></p>
        </div>

        <div class="phase-implementation-process-wrapper">
            <div class="row gy-1 gy-md-3 align-items-center">

                <!-- Left Column (Odd phases: 1,3,5...) -->
                <div class="col-lg-4">
                    <div class="phase-implementation-process">
                        <div class="row gy-3 gy-lg-4 gy-xl-5 align-items-center">
                            <?php foreach($phases as $i => $phase): ?>
                                <?php if( ($i+1) % 2 != 0 ): ?>
                                    <div class="col-lg-12">
                                        <div class="implementation-process-card ms-lg-auto">
                                            <h3 class="implementation-card-title"><?= $phase['time']; ?></h3>
                                            <p class="implementation-card-subtitle"><?= $phase['subtitle']; ?></p>
                                            <p class="implementation-card-content"><?= $phase['description']; ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Middle Column (All numbers stacked) -->
                <div class="col-lg-4">
                    <div class="phasging-stages">
                        <?php $i=1; foreach($phases as $phase): ?>
                            <div class="phasing-stage">
                                <span class="stages-number"><?= str_pad($i, 2, '0', STR_PAD_LEFT); ?></span>
                            </div>
                        <?php $i++; endforeach; ?>
                    </div>
                </div>

                <!-- Right Column (Even phases: 2,4,6...) -->
                <div class="col-lg-4">
                    <div class="phase-implementation-process">
                        <div class="row gy-3 gy-lg-4 gy-xl-5 align-items-center">
                            <?php foreach($phases as $i => $phase): ?>
                                <?php if( ($i+1) % 2 == 0 ): ?>
                                    <div class="col-lg-12">
                                        <div class="implementation-process-card">
                                            <h3 class="implementation-card-title"><?= $phase['time']; ?></h3>
                                            <p class="implementation-card-subtitle"><?= $phase['subtitle']; ?></p>
                                            <p class="implementation-card-content"><?= $phase['description']; ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php if( get_field('fpip_button_text') && get_field('fpip_button_link') ): ?>
            <div class="square text-center mt-5">
                <a href="<?php the_field('fpip_button_link'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php the_field('fpip_button_text'); ?>
                </a>
            </div>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>

<!-- Trsuted microsoft partner section start  -->
<?php
$trusted_partner_section = ['class' => 'trangotech-erp-patrner dark-gray-bg'];
get_template_part('template-parts/global/microsoft-trusted-partner-section',null,$trusted_partner_section);
?>
<!-- Trsuted microsoft partner section end  -->

<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'    => $faqs_heading,
    'content'  => $faqs_content,
    'category' => 'erp-construction',
    'bg_class' => 'bg-gray',
    'show_search' => false
];
get_template_part('template-parts/global/faqs', null, $faqs);?> 
<!-- ASK-QUESTION  END -->

<!-- Transform Business START -->
<?php
	 get_template_part('template-parts/business-central-integration/transform-business', null, $faqs);
?> 
<!-- Transform Business  END -->

<?php get_footer(); ?>
<style>
.finance-and-operations-pricing .finance-operations-pricing-wrapper .finance-operations-pricing-card .get-started-btn {
   padding: 17px 28px;
}
.finance-and-operations-pricing .finance-operations-pricing-wrapper .finance-operations-pricing-card .user-sizes {
    font-size: 20px;
}
    </style>
<script>

$('.trusted-microsoft-partner-slider').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        center:true,
        dots:false,
         autoplay:true,
        // stagePadding: 300,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1.3
            },
            1000:{
                items:1.6
            },
            1400:{
                items:2.2
            },
            1600:{
                items:2.5
            },
            1800:{
                items:2.8
            }

        }
    });


    $('.ms-industries-carousel').owlCarousel({
        loop: false,
        margin: 30,
        autoplay: false,
        dots: true,
        nav: true,
        // navText: ["", "<i class='fa fa-long-arrow-right'></i>"],
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        responsive: {
            0: {
                loop: true,
                items: 1
            },
            600: {
                loop: true,
                items: 2
            },
            1000: {
                items: 2.9
            }
        }
    });

    $(document).ready(function(){
        let windowWidth = $(window).innerWidth();

        if(windowWidth < 768){
            $(".ms-industries-carousels-section .carousel-wraper").each(function(){
                $(this).removeClass("carousel-wraper").addClass("container");
            });
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const scrollList = document.querySelector("#scrollList");
        const scrollTrack = document.querySelector(".scroll-height-control");
        const trackDiv = scrollTrack.querySelector(".track-div");

        function updateScrollIndicator() {
            const contentHeight = scrollList.scrollHeight; // total content height
            const visibleHeight = scrollList.clientHeight; // visible area
            const scrollTop = scrollList.scrollTop; // how much scrolled
            const trackHeight = scrollTrack.offsetHeight;

            // thumb (track-div) ka height calculate
            const thumbHeight = Math.max(
                (visibleHeight / contentHeight) * trackHeight,
                30 // min size
            );
            trackDiv.style.height = thumbHeight + "px";

            // thumb ki position calculate
            const maxThumbTop = trackHeight - thumbHeight;
            const thumbTop =
                (scrollTop / (contentHeight - visibleHeight)) * maxThumbTop;

            trackDiv.style.top = thumbTop + "px";
        }

        // Initial set
        updateScrollIndicator();

        // Jab bhi scroll ho
        scrollList.addEventListener("scroll", updateScrollIndicator);

        // Resize pe bhi re-calc
        window.addEventListener("resize", updateScrollIndicator);
    });

</script>