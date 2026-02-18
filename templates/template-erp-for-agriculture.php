<?php
/*
    Template Name: ERP Agriculture
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>
<!-- BANNER SECTION START -->
 <?php
 $links = get_field('banner_cta_1');
 $links2 = get_field('banner_cta_2');
 ?>
<section class="section business-central-integration-banner erp-agriculture-banner no-lzl-section">
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


<!-- operational challenges section start -->
<?php 
    $cardSec = ['class' => ''];
get_template_part('template-parts/global/operational-challenges-cards',null,$cardSec)?>
<!-- operational challenges section end -->

<!-- Why choose section start  -->
<?php
 $whyChooseSec = [
    'class' => 'advanced-customization-services-cards bg-white',
    'row_class' => 'gx-0'
];
 get_template_part('template-parts/global/solution-cards1',null,$whyChooseSec)?>
<!-- Why choose section end  -->
<!-- implementation process vertical section start  -->


<section class="section seamless-healthcare-system">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('shs_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('shs_section_description'); ?>
            </p>
        </div>

        <!-- EHR Integrations -->
        <div class="box">
            <h3><?php echo get_field('shs_ehr_heading'); ?></h3>
            <div class="row gy-4">
                <?php if( have_rows('shs_ehr_integrations') ): ?>
                    <?php while( have_rows('shs_ehr_integrations') ): the_row(); ?>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="left"><?php echo get_sub_field('ehr_number'); ?></div>
                                <div class="right">
                                    <span class="card-title d-block mb-1"><?php echo get_sub_field('ehr_title'); ?></span>
                                    <p><?php echo get_sub_field('ehr_description'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- PACS Integrations -->
        <div class="box">
            <h3><?php echo get_field('shs_pacs_heading'); ?></h3>
            <div class="row gy-4">
                <?php if( have_rows('shs_pacs_integrations') ): ?>
                    <?php while( have_rows('shs_pacs_integrations') ): the_row(); ?>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="left">
                                    <?php echo get_sub_field('pacs_svg'); ?>
                                </div>
                                <div class="right">
                                    <span class="card-title d-block mb-1"><?php echo get_sub_field('pacs_title'); ?></span>
                                    <p><?php echo get_sub_field('pacs_description'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Button -->
        <div class="square text-center mt-5">
            <a href="<?php echo get_field('shs_demo_button_url'); ?>" class="square-pulse btn btn-red text-capitalize"  data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('shs_demo_button_text'); ?>
            </a>
        </div>
    </div>
</section>

<section class="section dynamic-365-solutions erp-implementation-solutions erp-ecommerce-solutions bg-white">
    <div class="container">
        <div class="text-cont">
            <h2 class="section-title text-center"><?php echo get_field('d365_solution_cards_section_title');?></h2>
            <p class="section-content text-center"><?php echo get_field('d365_solution_cards_section_text');?></p>
        </div>
        <div class="row gy-4">
            <?php if (have_rows('d365_solution_cards')): ?>
                <?php while (have_rows('d365_solution_cards')): the_row(); ?>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><?php echo get_sub_field('d365_card_title'); ?></h3>
                            </div>
                            <div class="card-body">
                                <div class="key-features">
                                    <ul>
                                        <?php if (have_rows('d365_card_features')): ?>
                                            <?php while (have_rows('d365_card_features')): the_row(); ?>
                                                <li><p class="list-title"><?php echo get_sub_field('d365_feature_title'); ?></p></li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <?php
        $btn_text = get_field('d365_button_text');
        $btn_link = get_field('d365_button_link');
        if ($btn_text && $btn_link):
        ?>
            <div class="square text-center mt-5">
                <a href="<?php echo esc_url($btn_link); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo esc_html($btn_text); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- implementation process vertical section start  -->
<?php
$process = ['class' => 'dark-gray-bg'];
get_template_part('template-parts/global/implementation-process-vertilce',null,$process);
?>
<!-- implementation process vertical section end  -->

<section class="section roi-analysis bg-white">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('roi_analysis_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('roi_analysis_description'); ?>
            </p>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><?php echo get_field('roi_analysis_table_head_col1'); ?></th>
                        <th scope="col"><?php echo get_field('roi_analysis_table_head_col2'); ?></th>
                        <th scope="col"><?php echo get_field('roi_analysis_table_head_col3'); ?></th>
                        <th scope="col"><?php echo get_field('roi_analysis_table_head_col4'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (have_rows('roi_analysis_table')) : ?>
                        <?php while (have_rows('roi_analysis_table')) : the_row(); 
                            $highlight = get_sub_field('roi_analysis_row_highlight');
                        ?>
                            <tr class="<?php echo $highlight ? 'bright-grey' : ''; ?>">
                                <td><?php echo get_sub_field('roi_analysis_financial_impact'); ?></td>
                                <td><?php echo get_sub_field('roi_analysis_description_text'); ?></td>
                                <td><?php echo get_sub_field('roi_analysis_annual_amount'); ?></td>
                                <td><?php echo get_sub_field('roi_analysis_percentage'); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="square text-center mt-5">
            <?php 
            $cta_text = get_field('roi_analysis_cta_text');
            $cta_link = get_field('roi_analysis_cta_link');
            if ($cta_text && $cta_link): ?>
                <a href="<?php echo esc_url($cta_link); ?>" class="square-pulse btn btn-red text-capitalize px-5" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo esc_html($cta_text); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Instant Cost Estimates section start -->
<section class="section why-business-central diverse-business-needs investment-options-healthcare dark-gray-bg">
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
                                <th><?php echo get_sub_field('dbn_table_header_label'); ?></th>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while(have_rows('dbn_packages')): the_row(); ?>
                        <tr class="<?php echo get_sub_field('dbn_package_class'); ?>">
                            <td><?php echo get_sub_field('dbn_package_name'); ?></td>
                            <td><?php echo get_sub_field('dbn_package_audience'); ?></td>
                           <?php //echo wp_kses_post(get_sub_field('dbn_package_capabilities')); ?>
                            <td><?php echo get_sub_field('dbn_package_investment'); ?></td>
                            <td><?php echo get_sub_field('dbn_package_timeline'); ?></td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php endif; ?>

        
    </div>
</section>
<!-- Instant Cost Estimates section End -->

<section class="section why-business-central cost-key-factors legacy-healthcare-erps bg-white">
    <div class="container">
        <div class="text-cont text-center mb-3">
            <h2 class="section-title">
                <?php echo get_field('bcp_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('bcp_section_description'); ?>
            </p>
        </div>

        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <?php if (have_rows('bcp_table_headings')): ?>
                                <?php while (have_rows('bcp_table_headings')): the_row(); ?>
                                    <th><?php echo get_sub_field('bcp_heading_text'); ?></th>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (have_rows('bcp_table_rows')): ?>
                            <?php while (have_rows('bcp_table_rows')): the_row(); ?>
                                <tr>
                                    <td><?php echo get_sub_field('bcp_row_label'); ?></td>
                                    <?php if (have_rows('bcp_row_values')): ?>
                                        <?php while (have_rows('bcp_row_values')): the_row(); ?>
                                            <td>
                                                <?php 
                                                    $value_text = get_sub_field('bcp_value_text');
                                                    $value_rating = get_sub_field('bcp_value_rating');
                                                ?>
                                                
                                                <?php if ($value_text): ?>
                                                    <?php echo esc_html($value_text); ?>
                                                <?php endif; ?>

                                                <?php if ($value_rating): ?>
                                                    <div class="rating-stars">
                                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                                            <?php if ($i <= $value_rating): ?>
                                                                <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.5188 0.0976562L12.8331 7.22049H20.3225L14.2635 11.6226L16.5778 18.7455L10.5188 14.3433L4.45973 18.7455L6.77408 11.6226L0.715033 7.22049H8.20442L10.5188 0.0976562Z" fill="#FFB900"/>
                                                                </svg>
                                                            <?php else: ?>
                                                                <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.5188 0.0976562L12.8331 7.22049H20.3225L14.2635 11.6226L16.5778 18.7455L10.5188 14.3433L4.45973 18.7455L6.77408 11.6226L0.715033 7.22049H8.20442L10.5188 0.0976562Z" fill="#ccc"/>
                                                                </svg>
                                                            <?php endif; ?>
                                                        <?php endfor; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </td>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="square text-center mt-5">
            <?php if (get_field('bcp_cta_text')): ?>
                <a href="<?php echo get_field('bcp_cta_link'); ?>" class="square-pulse btn btn-red text-capitalize px-5"  data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo get_field('bcp_cta_text'); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>


<section class="section patient-satisfaction ecommerce-satisfaction">
    <div class="container">

        <!-- Section Title & Description -->
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('erp_implementation_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('erp_implementation_subtitle'); ?>
            </p>
        </div>

        <!-- Repeater: ERP Implementation Cards -->
        <?php if (have_rows('erp_implementation_cards')): ?>
            <div class="row gy-4">
                <?php while (have_rows('erp_implementation_cards')): the_row(); ?>
                    <div class="col-lg-4">
                        <div class="card">
                            <h3><?php echo get_sub_field('erp_implementation_card_title'); ?></h3>
                            <?php if (have_rows('erp_implementation_card_items')): ?>
                                <ul>
                                    <?php while (have_rows('erp_implementation_card_items')): the_row(); ?>
                                        <li><?php echo get_sub_field('erp_implementation_card_item_text'); ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <!-- Button -->
        <?php 
        $button_text = get_field('erp_implementation_button_text');
        $button_link = get_field('erp_implementation_button_link');
        if ($button_text): ?>
            <div class="square text-center mt-5">
                <a href="<?php echo esc_url($button_link ?: 'javascript:;'); ?>" class="square-pulse btn btn-red text-capitalize px-5" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo esc_html($button_text); ?>
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
    'category' => 'erp-agriculture',
    'bg_class' => '',
    'show_search' => false,

];
get_template_part('template-parts/global/faqs', null, $faqs);?> 
<!-- ASK-QUESTION  END -->


<!-- Transform Business START -->
<?php
$business = [
    'classes' => 'bg-white pt-0'
];
	 get_template_part('template-parts/business-central-integration/transform-business', null, $business);
?> 
<!-- Transform Business  END -->
<?php get_footer(); ?>


