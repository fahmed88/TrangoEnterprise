<?php
/*
    Template Name: Business Central Customization
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>
<!-- BANNER SECTION START -->
<section class="section business-central-integration-banner customization-services-banner no-lzl-section">
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
<?php 
    $cardSec = ['class' => 'bg-gray'];
get_template_part('template-parts/global/operational-challenges-cards',null,$cardSec)?>
<!-- operational challenges section end -->


<!-- Why choose section start  -->
<?php
 $whyChooseSec = ['class' => 'bg-white'];
 get_template_part('template-parts/global/solution-cards2',null,$whyChooseSec)?>
<!-- Why choose section end  -->

<!-- industries section start  -->
<?php
 $industries = [
    'class' => 'pb-5 bc-partner-industries-carousels-section',
    'text_alignment' => 'text-left'
];
 get_template_part('template-parts/industries-new',null,$industries)?>
<!-- industries section end  -->

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
                                   <p class="numb-title mb-2"><?php echo $result['heading']; ?></p>
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


<section class="section manufacturing-success-stories customization-services-success-stories">
    <div class="container position-relative">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php the_field('mss_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php the_field('mss_section_description'); ?>
            </p>
        </div>

        <?php if( have_rows('mss_success_stories') ): ?>
            <div class="owl-carousel owl-theme manufacturing-success-stories-carousel">
                <?php while( have_rows('mss_success_stories') ): the_row(); ?>
                    <div class="item">
                        <div class="card h-100">
                            <div class="img-content">
                                <?php the_sub_field('mss_story_icon'); ?>
                            </div>
                            <div class="text-content">
                                <h3 class="card-title"><?php the_sub_field('mss_story_title'); ?></h3>
                                <?php if( have_rows('mss_story_points') ): ?>
                                    <ul>
                                        <?php while( have_rows('mss_story_points') ): the_row(); ?>
                                            <li><?php the_sub_field('mss_story_point_text'); ?></li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>

                            <div class="bottom-wrapper">
                                <span>
                                    <p class="percent mb-1"><?php the_sub_field('mss_efficiency_value'); ?></p>
                                    <p><?php the_sub_field('mss_efficiency_label'); ?></p>
                                </span>
                                <span>
                                    <p class="percent mb-1"><?php the_sub_field('mss_roi_value'); ?></p>
                                    <p><?php the_sub_field('mss_roi_label'); ?></p>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if( get_field('mss_button_text') && get_field('mss_button_link') ): ?>
            <div class="square text-center mt-5">
                <a href="<?php the_field('mss_button_link'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php the_field('mss_button_text'); ?>
                </a>
            </div>
        <?php endif; ?>
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
<section class="section five-phase-implementation-process dark-gray-bg">
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
                                            <h3 class="implementation-card-subtitle"><?= $phase['subtitle']; ?></h3>
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
                                            <h3 class="implementation-card-subtitle"><?= $phase['subtitle']; ?></h3>
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


<section class="section why-business-central">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php the_field('wbc_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php the_field('wbc_section_description'); ?>
            </p>
        </div>

        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <?php $hero = get_field('wbc_table_header'); ?>
                        <tr>
                            <th><?php echo $hero['wbc_header_customization']; ?></th>
                            <th><?php echo $hero['wbc_header_scope']; ?></th>
                            <th><?php echo $hero['wbc_header_timeline']; ?></th>
                            <th><?php echo $hero['wbc_header_investment']; ?></th>
                            <th><?php echo $hero['wbc_header_roi']; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if( have_rows('wbc_table_rows_2') ): ?>
                            <?php while( have_rows('wbc_table_rows_2') ): the_row(); ?>
                                <tr>
                                    <td><?php the_sub_field('wbc_customization_level'); ?></td>
                                    <td><?php the_sub_field('wbc_scope'); ?></td>
                                    <td><?php the_sub_field('wbc_timeline'); ?></td>
                                    <td><?php the_sub_field('wbc_investment_range'); ?></td>
                                    <td><?php the_sub_field('wbc_roi_timeline'); ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php if( get_field('wbc_button_text') && get_field('wbc_button_link') ): ?>
            <div class="square text-center mt-5">
                <a href="<?php the_field('wbc_button_link'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php the_field('wbc_button_text'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>



<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'    => $faqs_heading,
    'content'  => $faqs_content,
    'category' => 'business-central-customization',
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
<script>
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

    // manufacturing-success-stories-carousel
    $('.manufacturing-success-stories-carousel').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        dots: false,
        nav: true,
        navText: [
            '<svg width="28" height="15" viewBox="0 0 28 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.66848 8.16361C0.28644 7.76478 0.300049 7.13176 0.698877 6.74972L7.19816 0.524017C7.59698 0.141977 8.23 0.155586 8.61204 0.554414C8.99408 0.953242 8.98047 1.58626 8.58164 1.9683L2.80451 7.50226L8.33847 13.2794C8.72051 13.6782 8.7069 14.3112 8.30807 14.6933C7.90924 15.0753 7.27622 15.0617 6.89418 14.6629L0.66848 8.16361ZM27.2963 8.02881L27.2748 9.02858L1.36913 8.47163L1.39062 7.47186L1.41212 6.47209L27.3178 7.02904L27.2963 8.02881Z" fill="white"/></svg>',
            '<svg width="28" height="15" viewBox="0 0 28 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M27.1722 8.16361C27.5542 7.76478 27.5406 7.13176 27.1418 6.74972L20.6425 0.524017C20.2437 0.141977 19.6106 0.155586 19.2286 0.554414C18.8466 0.953242 18.8602 1.58626 19.259 1.9683L25.0361 7.50226L19.5022 13.2794C19.1201 13.6782 19.1338 14.3112 19.5326 14.6933C19.9314 15.0753 20.5644 15.0617 20.9465 14.6629L27.1722 8.16361ZM0.544312 8.02881L0.565806 9.02858L26.4715 8.47163L26.45 7.47186L26.4285 6.47209L0.522818 7.02904L0.544312 8.02881Z" fill="white"/></svg>'
        ],
        responsive: {
            0: {
                loop: true,
                items: 1.3 ,
                center: true ,
                margin: 10
            },
            425 : {
                loop: true,
                items: 1.4 ,
                center : true
            },
            768: {
                loop: true,
                items: 2 ,
                center: false
            },
            1000: {
                items: 3 ,
                margin: 30
            }
        }
    });

</script>