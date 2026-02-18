<?php
/*
    Template Name: Business Central Migration
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>


<!-- BANNER SECTION START -->
 <?php $links = get_field('banner_cta_1'); ?>
<section class="section business-central-integration-banner business-central-migration-banner no-lzl-section">
    <div class="container">
        <div class="row mt-lg-3 gx-0">
            <div class="col-lg-6">
                <div class="text-cont pt-4">
                    <?php if (get_field('banner_top_subheadig')) : ?>
                        <h1 class="banner-subheading"><?php echo get_field('banner_top_subheadig');?></h1>
                    <?php endif; ?>
                    <h2 class="banner-title">
                        <?php echo get_field('banner_heading'); ?>
                    </h2>
                    <p class="banner-text  ms-lg-0">
                       <?php echo get_field('banner_description'); ?>
                    </p>
                    <div class="square mt-4">
                        <a href="<?php echo esc_url($links['url']); ?>" class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                           <?php echo esc_html($links['title']); ?>
                        </a>
                        <span class="limited-offer ms-3"><?php echo get_field('banner_contact'); ?></span>
                    </div>
                    <?php get_template_part('template-parts/global/5-stars-badge');?>
                </div>
            </div>
            <div class="col-lg-6">
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

<section class="dynamics-magento-integration-counter successful-operations-counter business-central-migration-counter">
    <div class="container position-relative">
        <div class="ms-dynamics-counter-wraper">
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


        </div>
    </div>
</section>


<section class="section ms-dynamics-shopify-connector business-central-migration-connector">
    <div class="container">
        <div class="text-content text-center mb-5">
            <h2 class="section-title"><?php echo get_field('connector_solutions_heading'); ?></h2>
            <p class="section-content text-center">
                <?php echo get_field('connector_solutions_description'); ?>
            </p>
        </div>

        <?php $cards = get_field('connector_solutions_cards'); ?>
        <?php if (!empty($cards)) : ?>
            
                <?php foreach ($cards as $index => $card) : ?>
                    <?php if ($index % 3 == 0) : ?>
		<div class="connector-cards-wraper mt-4">
                       
                        <div class="row gx-0 gy-3 justify-content-center"> 
                    <?php endif; ?>

                    <?php
                        $position_in_row = $index % 3;
                        $is_center = $position_in_row === 1;
                    ?>

                    <div class="col-lg-4 col-md-6">
                        <div class="connector-card <?php echo $is_center ? 'center' : ''; ?>">
                            <div class="card-header">
                                <?php if (is_array($card['icon'])) : ?>
                                    <div class="icon">
                                        <img src="<?php echo esc_url($card['icon']['url']); ?>" alt="<?php echo esc_attr($card['icon']['alt']); ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><?php echo esc_html($card['heading']); ?></h3>
                                <?php echo wpautop($card['description']); ?>
                            </div>
                        </div>
                    </div>

                    <?php if (($index + 1) % 3 == 0 || $index + 1 == count($cards)) : ?>
                        </div><!-- /.row -->
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="square text-center mt-5">
            <a href="<?php echo esc_url(get_field('connector_button_link')); ?>" class="square-pulse btn btn-red text-capitalize px-5" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo esc_html(get_field('connector_button_text')); ?>
            </a>
        </div>
    </div>
</section>




<section class="section our-proven-migration-process">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('section_description'); ?>
            </p>
        </div>
        <div class="row gy-4">
            <?php if( have_rows('migration_steps') ): ?>
                <?php while( have_rows('migration_steps') ): the_row(); 
                    $step_number = get_sub_field('step_number');
                    $step_title = get_sub_field('step_title');
                    $step_description = get_sub_field('step_description');
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="top-wrapper">
                            <div class="step-number"><span>Step</span><?php echo str_pad($step_number, 2, '0', STR_PAD_LEFT); ?></div>
                        </div>
                        <div class="bottom-wrapper">
                            <h3 class="step-title"><?php echo esc_html($step_title); ?></h3>
                            <p><?php echo esc_html($step_description); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php if (get_field('process_button_text') && get_field('process_button_link')): ?>
        <div class="square text-center mt-5">
            <a href="<?php echo get_field('process_button_link'); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('process_button_text'); ?>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>


<!-- why partner with trango section start -->
<section class="section why-partner-trango-microsoft bg-gray pb-lg-0">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('central_section_heading'); ?> 
            </h2>
            <p class="section-content"><?php echo get_field('central_highlighted_text_in_content'); ?></p>
        </div>

        <div class="why-partner-trango-wrapper">
            <div class="row">
                <?php if( have_rows('why_partner_cards') ): ?>
                    <?php while( have_rows('why_partner_cards') ): the_row(); ?>
                        <div class="col-lg-6">
                            <div class="why-partner-trango-card">
                                <div class="svg-wrapper">
                                    <?php echo get_sub_field('card_icon_svg'); ?>
                                </div>
                                <h3 class="card-title"><?php echo get_sub_field('card_title'); ?></h3>
                                <p class="card-description"><?php echo get_sub_field('card_description'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- why partner with trango section end -->

<section class="section why-business-central">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('comparison_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('comparison_content'); ?>
            </p>
        </div>

        <?php if (have_rows('table_rows')) : ?>
            <div class="table-wrapper">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <?php if (have_rows('table_headers')) :
                                while (have_rows('table_headers')) : the_row(); ?>
                                    <th><?php echo get_sub_field('header_name'); ?></th>
                                <?php endwhile;
                            endif; ?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php while (have_rows('table_rows')) : the_row(); ?>
                            <tr>
                                <td><?php echo get_sub_field('feature_name'); ?></td>

                                <?php if (have_rows('feature_values')) :
                                    while (have_rows('feature_values')) : the_row(); 
                                        $value = get_sub_field('value');
                                        $color = get_sub_field('color');
                                        $class = '';
                                        if ($color === 'green') {
                                            $class = 'green';
                                        } elseif ($color === 'red') {
                                            $class = 'red';
                                        }
                                    ?>
                                    <td class="<?php echo esc_attr($class); ?>">
                                        <?php echo esc_html($value); ?>
                                    </td>
                                <?php endwhile; endif; ?>
                            </tr>
                        <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>

        <?php
        $cta_text = get_field('cta_button_text');
        $cta_url = get_field('cta_button_url');
        if ($cta_text && $cta_url) : ?>
            <div class="square text-center mt-5">
                <a href="<?php echo esc_url($cta_url); ?>" class="square-pulse btn btn-red text-capitalize px-5" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo esc_html($cta_text); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>



<section class="section why-business-central pt-0 neew">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo get_field('fc_heading'); ?></h2>
            <p class="section-content text-center"><?php echo get_field('fc_description'); ?></p>
        </div>
        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>Business Central</th>
                            <th>NetSuite</th>
                            <th>SAP Business One</th>
                            <th>QuickBooks Enterprise</th>
                            <th>Acumatica</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (have_rows('fc_table')): ?>
                            <?php while (have_rows('fc_table')): the_row(); ?>
                                <tr>
                                    <td><?php echo get_sub_field('feature_title'); ?></td>
                                    <td class="<?php echo get_sub_field('business_central_highlight'); ?>">
                                        <?php echo get_sub_field('business_central_text'); ?>
                                    </td>
                                    <td class="<?php echo get_sub_field('netsuite_highlight'); ?>">
                                        <?php echo get_sub_field('netsuite_text'); ?>
                                    </td>
                                    <td class="<?php echo get_sub_field('sap_highlight'); ?>">
                                        <?php echo get_sub_field('sap_text'); ?>
                                    </td>
                                    <td class="<?php echo get_sub_field('quickbooks_highlight'); ?>">
                                        <?php echo get_sub_field('quickbooks_text'); ?>
                                    </td>
                                    <td class="<?php echo get_sub_field('acumatica_highlight'); ?>">
                                        <?php echo get_sub_field('acumatica_text'); ?>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="square text-center mt-5">
            <a href="<?php echo get_field('fc_button_link'); ?>" class="square-pulse btn btn-red text-capitalize px-5" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('fc_button_text'); ?>
            </a>
        </div>
    </div>
</section>



<section class="section why-business-central pt-0">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('table_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('table_section_description'); ?>
            </p>
        </div>

        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Solution</th>
                        <th>Starting Price</th>
                        <th>User License</th>
                        <th>Implementation</th>
                        <th>Annual Maintenance</th>
                        <th>Total Year 1 (10 users)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (have_rows('table_feature_table')): ?>
                        <?php while (have_rows('table_feature_table')): the_row(); ?>
                            <tr>
                                <td><?php echo get_sub_field('table_feature_name'); ?></td>
                                <td><?php echo get_sub_field('table_business_central'); ?></td>
                                <td><?php echo get_sub_field('table_netsuite'); ?></td>
                                <td><?php echo get_sub_field('table_sap_business_one'); ?></td>
                                <td><?php echo get_sub_field('quickbooks_enterprise'); ?></td>
                                <td><?php echo get_sub_field('acumatica'); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <p><span>*</span><?php echo get_field('table_disclaimer_note'); ?></p>
        </div>

        <div class="square text-center mt-5">
            <?php
            $link = get_field('table_button_link');
            if ($link):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ?: '_self';
                ?>
                <a class="square-pulse btn btn-red text-capitalize"
                   href="<?php echo esc_url($link_url); ?>"
                   target="<?php echo esc_attr($link_target); ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo esc_html($link_title); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="section why-business-central pt-0">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('migration_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('migration_section_content'); ?>
            </p>
        </div>
        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>From System</th>
                            <th>To Business Central</th>
                            <th>Complexity Level</th>
                            <th>Typical Timeline</th>
                            <th>Data Preservation</th>
                            <th>Custom Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if( have_rows('migration_comparison_table') ): ?>
                            <?php while( have_rows('migration_comparison_table') ): the_row(); 
                                $feature = get_sub_field('migration_feature_name');
                                $bc = get_sub_field('migration_business_central_value');
                                $highlight = get_sub_field('migration_highlight_bc');
                                $netsuite = get_sub_field('migration_netsuite_value');
                                $sap = get_sub_field('migration_sap_value');
                                $quickbooks = get_sub_field('migration_quickbooks_value');
                                $acumatica = get_sub_field('migration_acumatica_value');
                            ?>
                                <tr>
                                    <td><?php echo esc_html($feature); ?></td>
                                    <td class="<?php echo $highlight ? 'green' : ''; ?>"><?php echo esc_html($bc); ?></td>
                                    <td><?php echo esc_html($netsuite); ?></td>
                                    <td><?php echo esc_html($sap); ?></td>
                                    <td><?php echo esc_html($quickbooks); ?></td>
                                    <td><?php echo esc_html($acumatica); ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="square text-center mt-5">
            <a href="<?php echo get_field('migration_button_link'); ?>" class="square-pulse btn btn-red text-capitalize px-5" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo get_field('migration_button_text'); ?>
            </a>
        </div>
    </div>
</section>

<!-- Integration Solutions Starts -->
 <?php
 $args= [
    'classes' => 'bg-gray',
    ]; ?>
<?php get_template_part('template-parts/global/solution-cards1',null,$args);?>
<!-- Integration Solutions Ends -->
<!-- Integration cards section start -->

<!-- Integration cards section end -->

<!-- testimonials section start -->
<?php
    $args = [
        'category' => 'business-central-migration',
    ];
    get_template_part('template-parts/dynamics-implementation/testimonials', null, $args);
?>
<!-- testimonials section end -->


 <!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'    => $faqs_heading,
    'content'  => $faqs_content,
    'category' => 'business-central-migration',
];
get_template_part('template-parts/global/faq-new', null, $faqs);?> 
<!-- ASK-QUESTION  END -->


<!-- ASK-QUESTION  END -->

<!-- Transform Business START -->
<?php
	 get_template_part('template-parts/business-central-integration/transform-business', null, $faqs);
?> 
<!-- Transform Business  END -->



<?php get_footer(); ?>
<style>
.why-business-central.neew .table-wrapper .table tbody tr:nth-child(1){
    background:#f4f4f4;
}
.why-business-central.neew .table-wrapper .table tbody tr:nth-child(7){
    background:#f4f4f4;
}
.why-business-central.neew .table-wrapper .table tbody tr:nth-child(12){
    background:#f4f4f4;
}
.why-business-central.neew .table-wrapper .table tbody tr:nth-child(16){
    background:#f4f4f4;
}
	.ms-dynamics-shopify-connector .connector-cards-wraper {
    background: transparent;
    border: 0px solid #e5e5e5;
    border-radius: 33px;
    box-shadow: none;
    overflow: hidden;
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
</script>