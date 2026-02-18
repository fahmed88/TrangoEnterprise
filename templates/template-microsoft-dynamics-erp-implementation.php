<?php
/*
    Template Name: Dynamics ERP Implementation
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>
<!-- BANNER SECTION START -->
 <?php
 $links = get_field('banner_cta_1');
 $links2 = get_field('banner_cta_2');
 ?>
<section class="section business-central-integration-banner erp-implementation-banner no-lzl-section">
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
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner-img">
                    <img src="<?php echo get_field('banner_image'); ?>" alt="banner" class="img-fluid">
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


<!-- operational challenges section start -->
<?php get_template_part('template-parts/global/operational-challenges-cards')?>
<!-- operational challenges section end -->


<!-- implementation process vertical section start  -->
<?php
$process = ['class' => 'bg-white'];
get_template_part('template-parts/global/implementation-process-vertilce',null,$process);
?>
<!-- implementation process vertical section end  -->

<!-- Comparison Table section start  -->
<section class="section why-business-central offWhite-bg">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo get_field('bcl_table_section_heading'); ?></h2>
            <p class="section-content text-center">
                <?php echo get_field('bcl_table_section_text'); ?>
            </p>
        </div>
        <div class="table-wrapper">
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
        </div>

        <?php $bcl_table_cta_link = get_field('bcl_table_cta'); ?>
        <?php if($bcl_table_cta_link): ?>
        <div class="square text-center mt-5">
            <a href="<?php echo esc_url($bcl_table_cta_link['url']); ?>" class="square-pulse btn btn-red" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo esc_html($bcl_table_cta_link['title']); ?>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- Comparison Table section end  -->


<!-- Why choose section start  -->
<?php
 $whyChooseSec = [
    'class' => 'advanced-customization-services-cards bg-white',
    'row_class' => 'gx-0'
];
 get_template_part('template-parts/global/solution-cards1',null,$whyChooseSec)?>
<!-- Why choose section end  -->


<!-- Transform Erp Cards section start  -->
<?php
$erp_cards = [
    'class' => 'erp-implementation-solutions offWhite-bg'
];
get_template_part('template-parts/global/Transform-erp-cards',null,$erp_cards);
?>
<!-- Transform Erp Cards section end  -->



<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'    => $faqs_heading,
    'content'  => $faqs_content,
    'category' => 'dynamics-erp-implementation',
    'bg_class' => 'pb-lg-5',
    'show_search' => false,

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