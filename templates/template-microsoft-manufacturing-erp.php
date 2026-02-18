<?php
/*
    Template Name: Manufacturing ERP
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>
<!-- BANNER SECTION START -->
 <?php
 $links = get_field('banner_cta_1');
 $links2 = get_field('banner_cta_2');
 ?>
<section class="section business-central-integration-banner microsoft-manufacturing-erp-banner no-lzl-section">
    <div class="container">
        <div class="row align-items-center mt-lg-3 gx-0">
            <div class="col-lg-7">
                <div class="text-cont pt-4">
                    <h1 class="banner-subheading"><?php echo get_field('banner_top_subheadig'); ?></h1>
                    <h2 class="banner-title">
                        <?php echo get_field('banner_heading'); ?>
                    </h2>
                    <?php echo get_field('banner_description'); ?>
                    <div class="btns justify-content-lg-start">
                        <?php if($links): ?>
                        <a href="<?php echo esc_url($links['url']); ?>" class="square-pulse btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo esc_html($links['title']); ?>
                        </a>
                        <?php endif; ?>
                        <?php if($links2): ?>
                        <a href="<?php echo esc_url($links2['url']); ?>" class="btn-pink" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo esc_html($links2['title']); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                    <p class="mt-3"><?php echo get_field('banner_contact'); ?></p>
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

<section class="section dynamics-magento-integration-counter mb-xxl-0 mb-xl-0 pt-0 mt-lg-5">
    <div class="container">
        <div class="ms-dynamics-counter-wraper position-static">
            <div class="row justify-content-center gy-3 gy-lg-0">
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


<!-- finance and operations pricing and licensing section start -->
<?php 
$pricing = ['class' => 'pb-5'];
get_template_part('template-parts/global/finance-operations-pricing',null,$pricing);?>
<!-- finance and operations pricing and licensing section End -->




<!-- operational challenges section start -->
<?php 
    $cardSec = ['class' => 'bg-white'];
get_template_part('template-parts/global/operational-challenges-cards',null,$cardSec)?>
<!-- operational challenges section end -->


<!-- Why choose section start  -->
<?php
 $whyChooseSec = ['class' => 'bg-gray'];
 get_template_part('template-parts/global/solution-cards1',null,$whyChooseSec)?>
<!-- Why choose section end  -->


<!-- Comparison Table section start  -->
<section class="section business-central-licensing price-and-cost-analysis">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo get_field('bcl_table_section_heading'); ?></h2>
            <p class="section-content text-center">
                <?php echo get_field('bcl_table_section_text'); ?>
            </p>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
            <?php if( have_rows('bcl_table_head') ): ?>
                <thead class="">
                    <tr>
                        <?php while( have_rows('bcl_table_head') ): the_row();?>
                            <th><?php echo get_sub_field('bcl_table_head_column');?></th>
                        <?php endwhile; ?>
                    </tr>
            </thead>
            <?php endif; ?>
            <?php if( have_rows('bcl_table_body') ): ?>

                <tbody>
                <?php while( have_rows('bcl_table_body') ): the_row();?>
                <tr>
                    <td>
                        <?php echo get_sub_field('bcl_table_body_column_1');?>
                    </td>
                    <td>
                        <?php echo get_sub_field('bcl_table_body_column_2');?>
                    </td>
                    <td>
                        <?php echo get_sub_field('bcl_table_body_column_3');?>
                    </td>
                    <td>
                        <?php echo get_sub_field('bcl_table_body_column_4');?>
                    </td>
                </tr>
                <?php endwhile; ?>

                </tbody>
            <?php endif; ?>

            </table>
        </div>

        <?php $bcl_table_cta_link = get_field('bcl_table_cta'); ?>
        <?php if($bcl_table_cta_link): ?>
        <div class="square text-center mt-5">
            <a href="<?php echo esc_url($bcl_table_cta_link['url']); ?>" class="square-pulse btn btn-red" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo esc_html($bcl_table_cta_link['title']); ?>
            </a>
        </div>
        <?php endif; ?>

        <div class="fact">
            <ul>
                <li>
                    <img src="<?php echo get_field('bcl_table_bottom_icon')?>" alt="fact" class="img-fluid">
                </li>
                <li>
                    <span class="fact-title"><?php echo get_field('bcl_table_bottom_heading')?></span>
                </li>
                <li>
                    <p><?php echo get_field('bcl_table_bottom_text')?></p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Comparison Table section end  -->


<!-- expertise and results section start  -->
<?php
$expertise = ['class' => 'dark-gray-bg pb-lg-5'];
get_template_part('template-parts/global/expertise-and-results',null,$expertise);
?>
<!-- expertise  section end  -->


<!-- implementation process vertical section start  -->
<?php
$process = ['class' => 'bg-white'];
get_template_part('template-parts/global/implementation-process-vertilce',null,$process);
?>
<!-- implementation process vertical section end  -->


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
    'category' => 'manufacturing-erp',
    // 'bg_class' => 'bg-gray',
    'show_search' => false,
    'styles' => 'background: linear-gradient(180deg, #FFFFFF 0%, #F5F5F5 100%) !important;',

];
get_template_part('template-parts/global/faqs', null, $faqs);?> 
<!-- ASK-QUESTION  END -->

<!-- Transform Business START -->
<?php
	 get_template_part('template-parts/business-central-integration/transform-business', null, $faqs);
?> 
<!-- Transform Business  END -->

<script>
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.count');

    counters.forEach(counter => {
        const targetAttr = counter.getAttribute('data-counter-lim');
        const target = parseFloat(targetAttr);

        if (isNaN(target)) return;

        let count = 0;
        const speed = 20;

        const updateCount = () => {
            const increment = (target - count) / 10;
            count += increment;

            if (count < target) {
                displayNumber(count);
                requestAnimationFrame(updateCount);
            } else {
                displayNumber(target);
            }
        };

        const displayNumber = (val) => {
            // Check if the value is whole number or not
            const isWhole = Math.round(val * 10) % 10 === 0;
            counter.textContent = isWhole ? Math.round(val) : val.toFixed(1);
        };

        updateCount();
    });
});
</script>


<?php get_footer(); ?>
<script>
    $('.trusted-microsoft-partner-slider').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        center:true,
        dots:false,
         autoplay:false,
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


    // manufacturing-success-stories-carousel
    $('.manufacturing-success-stories-carousel').owlCarousel({    
        loop: false,
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