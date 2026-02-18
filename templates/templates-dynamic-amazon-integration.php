<?php
/*
    Template Name: Dynamics Amazon Integration
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>


<!-- BANNER SECTION START -->
<?php $links = get_field('banner_cta_1'); ?>
<section class="section business-central-integration-banner ms-dynamics-shopify-integration-banner no-lzl-section">
    <div class="container">
        <div class="row align-items-center mt-lg-3 gx-0">
            <div class="col-lg-6 col-xxl-6">
                <div class="text-cont pt-4">
                    <h1 class="banner-title">
                        <?php echo get_field('banner_heading'); ?>
                    </h1>
                    <?php echo get_field('banner_description'); ?>
                    <div class="square mt-5">
                        <a href="<?php echo esc_url($links['url']); ?>" class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo esc_html($links['title']); ?>
                        </a>
                        <span class="limited-offer ms-3"><?php echo get_field('banner_contact'); ?></span>
                    </div>
                    <?php get_template_part('template-parts/global/5-stars-badge');?>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-6">
                <div class="img-cont text-center">
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


<section class="dynamics-magento-integration-counter mb-0">
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


        </div>
    </div>
</section>

<section class="section disconnected-systems-limiting">
    <div class="container">
        <div class="text-cont text-center ">
            <h2 class="section-title"><?php echo get_field('expandable_columns_heading'); ?></h2>
            <p class="section-content text-center mb-0">
                <?php echo get_field('expandable_columns_description'); ?>
            </p>
        </div>
<?php
 $expandable_columns_cta = get_field('expandable_columns_cta');
 ?>
        <div class="row gy-4 justify-content-center mt-xl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-3">
            <?php if( have_rows('expandable_columns') ): ?>
    <?php $i = 0; // loop index ?>
    <?php while( have_rows('expandable_columns') ): the_row(); 
        $headings = get_sub_field('heading');
        $descriptions = get_sub_field('description');
        $imagess = get_sub_field('image'); 
        $iconss = get_sub_field('icon'); 

        // Assign class based on index
        $col_class = '';
        if ($i % 3 === 0) {
            $col_class = 'col-xl-4';
        } elseif ($i % 3 === 1) {
            $col_class = 'col-xl-3';
        } else {
            $col_class = 'col-xl-5';
        }
    ?>
        <div class="<?php echo $col_class; ?> col-lg-6 col-md-6">
            <div class="card">
                <div class="img-content">
                    <img src="<?php echo esc_url($imagess); ?>" alt="<?php echo strip_tags($headings); ?>" class="img-fluid">
                </div>
                <div class="text-content">
                    <span>
                        <img src="<?php echo esc_url($iconss); ?>" alt="" class="img-fluid">
                    </span>
                    <h3><?php echo esc_html($headings); ?></h3>
                    <p><?php echo esc_html($descriptions); ?></p>
                </div>
            </div>
        </div>
    <?php $i++; endwhile; ?>
<?php endif; ?>

            
            
        </div>

        <div class="text-center">
            <p class="section-content text-center my-3">
                <?php echo get_field('expandable_columns_description_2'); ?>
            </p>
        </div>
        <div class="square text-center">
            <a href="<?php echo esc_url($expandable_columns_cta['url']); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo esc_html($expandable_columns_cta['title']); ?>
            </a>
        </div>
    </div>
</section>

<section class="section ms-dynamics-shopify-connector">
    <div class="container">
        <div class="text-content text-center mb-5">
            <h2 class="section-title"><?php echo get_field('connector_solutions_heading'); ?></h2>
            <p class="section-content text-center">
                <?php echo get_field('connector_solutions_description'); ?>
            </p>
        </div>

        <?php $cards = get_field('connector_solutions_cards'); ?>
        <div class="connector-cards-wraper">
            <div class="row gx-0 gy-3 justify-content-center">
                <?php for ($i=0; $i < count((array)$cards); $i++) : ?>
                    <?php $card = $cards[$i]; ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="connector-card <?php echo $i == 1 ? 'center' : ''; ?>">
                            <div class="card-header">
                                <?php if (is_array($card['icon'])) : ?>
                                    <div class="icon">
                                        <img src="<?php echo $card['icon']['url']; ?>" alt="<?php echo $card['icon']['alt']; ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $card['heading']; ?></h3>
                                <?php echo wpautop($card['description']); ?>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

    </div>
</section>


<section class="section magento-integration-solutions ms-dynamics-shopify-integration-solutions">
    <div class="container">
        <div class="text-cont">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="section-title">
                        <?php echo get_field('solutions_heading'); ?>
                    </h2>
                </div>
                <div class="col-md-5">
                    <p class="section-content pt-0 mt-0">
                        <?php echo get_field('solutions_description'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-wrapper">
        <div class="container">
            <div class="row justify-content-end wrapper">
                <div class="col-xl-9 col-lg-10">
                    <div class="row">
                         <?php
                         $cta_linss = get_field('solutions_cta');
                         if( have_rows('solutions_list') ): ?>
                <?php while( have_rows('solutions_list') ): the_row(); 
            $icon_integration = get_sub_field('icon');
            $heading_integration   = get_sub_field('heading');
            $content_integration   = get_sub_field('description'); 
            
        ?>
                        <div class="col-md-6 p-0">
                            <div class="card">
                                <div class="d-flex gap-4 align-items-center title-box">
                                    <h3><?php echo $heading_integration; ?></h3>
                                </div>
                                <?php echo $content_integration; ?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="square text-center mt-5">
        <a href="<?php echo esc_url($cta_linss['url']); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
           <?php echo esc_html($cta_linss['title']); ?>
        </a>
    </div>
</section>



<section class="section why-choose-ms-dynamics-shopify-integration">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="text-cont">
                    <h2 class="section-title"><?php echo get_field('why_choose_heading'); ?></h2>
                    <p class="section-content">
                        <?php echo get_field('why_choose_description'); ?>
                    </p>
                    <?php $cta = get_field('why_choose_cta'); ?>
                    <?php if (is_array($cta)) : ?>
                        <div class="square">
                            <a href="<?php echo $cta['url']; ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal" class="square-pulse btn btn-red text-capitalize" <?php echo is_modal_link($cta['url']); ?>>
                                <?php echo $cta['title']; ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    
                    <?php $highlights = get_field('why_choose_highlights'); ?>
                    <ul>
                        <?php foreach ($highlights as $highlight) : ?>
                            <li>
                                <span>
                                    <img src="<?php echo $highlight['image']; ?>" alt="<?php echo $highlight['text']; ?>" class="img-fluid">
                                </span>
                                <?php echo $highlight['text']; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <?php $results = get_field('why_choose_results'); ?>
            <div class="col-lg-6 col-md-12">
                <div class="right-wrapper">
                    <ul>
                        <?php foreach ($results as $result) : ?>
                            <li>
                                <div class="left">
                                    <span class="numb"><?php echo $result['figure']; ?></span>
                                </div>
                                <div class="right">
                                    <span class="numb-title"><?php echo $result['heading']; ?></span>
                                    <?php echo wpautop($result['description']); ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Compare Integration Provider Table section start -->
<section class="section ms-integ-provider-table-section ms-shopify-integ-provider-table-section">
    <div class="container">
        <div class="text-content text-center mb-4">
            <h2 class="section-title">
                <?php echo get_field('comparison_heading'); ?>
            </h2>
            <p class="section-content text-center">
               <?php echo get_field('comparison_description'); ?>
            </p>
        </div>

        <div class="table-responsive">
    <table class="table align-middle ms-integ-provider-table">
        <?php if (have_rows('comparison_table')) : ?>
    <thead>
        <tr>
            <?php
            // Store the rows temporarily to access the first row
            $comparison_rows = get_field('comparison_table');
            if (!empty($comparison_rows)) {
                $first_row = $comparison_rows[0]['row'];
                if (!empty($first_row)) {
                    foreach ($first_row as $sub_row) {
                        echo '<th>' . esc_html($sub_row['column']) . '</th>';
                    }
                }
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $row_index = 0;
        while (have_rows('comparison_table')) : the_row();
            if ($row_index === 0) {
                $row_index++;
                continue; // Skip first row (used in header)
            }
            echo '<tr>';
            if (have_rows('row')) :
                while (have_rows('row')) : the_row();
                    $column_value = get_sub_field('column');
                    echo '<td>' . esc_html($column_value) . '</td>';
                endwhile;
            endif;
            echo '</tr>';
        endwhile;
        ?>
    </tbody>
<?php endif; ?>

    </table>
</div>

        <?php $table_link = get_field('comparison_cta'); ?>
        <div class="square text-center mt-5 pt-lg-3">
            <a href="<?php echo esc_url($table_link['url']); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo esc_html($table_link['title']); ?>
            </a>
        </div>

    </div>
</section>



<section class="section integration-works">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="text-cont">
                    <h2 class="section-title">
                        <?php echo get_field('how_it_works_heading'); ?>
                    </h2>
                    <p class="section-content">
                        <?php echo get_field('how_it_works_description'); ?>
                    </p>
                    <?php
                    $cta_works = get_field('how_it_works_cta'); ?>
                    <div class="square mt-4">
                        <a href="<?php echo esc_url($cta_works['url']); ?>" class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo esc_html($cta_works['title']); ?>
                        </a>
                        <span class="limited-offer ms-3"><?php echo get_field('how_it_works_under_cta'); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="img-cont">
                    <img src="<?php echo get_field('how_it_works_image'); ?>" alt="..." class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Common ERP Chaallenges section start -->
<section class="section ms-common-erp-challenges-section ms-amazon-integ-challenges-section">
    <div class="container">
        <div class="text-content text-center mb-4">
            <h2 class="section-title"><?php echo get_field('dynamics_solutions_heading'); ?></h2>
            <p class="section-content text-center">
               <?php echo get_field('dynamics_solutions_description'); ?>
            </p>
        </div>
        <div class="row gy-4 gy-lg-0">

            

            <?php if (have_rows('dynamics_solutions_cards')): ?>
    <?php $card_index = 0; ?>
    <?php while (have_rows('dynamics_solutions_cards')): the_row();
        $heading = get_sub_field('heading');
        $logo = get_sub_field('logo');
        $list_groups = get_sub_field('list_groups');

        // Alternate left/right classes
        $side_class = ($card_index % 2 === 0) ? 'left' : 'right';
    ?>
        <div class="col-lg-6">
            <div class="ms-erp-challenges-box <?php echo $side_class; ?>">
                <div class="header-box">
                    <div class="icon">
                        <?php if (!empty($logo)): ?>
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="img-fluid" loading="lazy">
                        <?php endif; ?>
                    </div>
                    <?php if ($heading): ?>
                        <h3 class="head-title"><?php echo esc_html($heading); ?></h3>
                    <?php endif; ?>
                </div>
                <div class="body">
                    <div class="row">
                        <?php if (have_rows('list_groups')): ?>
                            <?php while (have_rows('list_groups')): the_row(); 
                                $group_heading = get_sub_field('heading');
                            ?>
                                <div class="col-md-12">
                                    <div class="ms-erp-list-box">
                                        <?php if ($group_heading): ?>
                                            <h4 class="list-title"><?php echo esc_html($group_heading); ?></h4>
                                        <?php endif; ?>
                                        <ul class="ms-erp-lists">
                                            <?php if (have_rows('list')): ?>
                                                <?php while (have_rows('list')): the_row(); 
                                                    $item = get_sub_field('item');
                                                ?>
                                                    <?php if ($item): ?>
                                                        <li><?php echo esc_html($item); ?></li>
                                                    <?php endif; ?>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $card_index++; ?>
    <?php endwhile; ?>
<?php endif; ?>



        </div>
        <?php $cta_solutions = get_field('dynamics_solutions_cta'); ?>                                                 
        <div class="square text-center mt-5 pt-lg-3">
            <a href="<?php echo esc_url($cta_solutions['url']); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
               <?php echo esc_html($cta_solutions['title']); ?>
            </a>
        </div>

    </div>
</section>

<section class="section delivers-measurable-business shopify-measurable-business">
    <div class="container position-relative">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('testimonials_heading'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('testimonials_description'); ?>
            </p>
        </div>
        <div class="row gy-4">
           <?php if (have_rows('testimonials_list')): ?>
    <?php while (have_rows('testimonials_list')): the_row();
        $heading_list     = get_sub_field('heading');
        $logo_list        = get_sub_field('logo');
        $logo_list_url = (is_array($logo_list) && isset($logo_list['url'])) ? esc_url($logo_list['url']) : '';
        $slogan_list      = get_sub_field('slogan');
        $description_list = get_sub_field('description');
    ?>
        <div class="col-lg-4 col-md-6">
            <div class="card h-100">
                <div class="img-content">
                    <?php if (!empty($logo_list)): ?>
                        <img src="<?php echo $logo_list; ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
                <div class="text-content">
                    <?php if ($heading_list): ?>
                        <h3><?php echo esc_html($heading_list); ?></h3>
                    <?php endif; ?>

                    <div class="efficiency-parent">
                        <?php if (have_rows('figures')): ?>
                            <?php while (have_rows('figures')): the_row(); 
                                $text_efficiency = get_sub_field('text');
                                $up = get_sub_field('up');
                                $down = get_sub_field('down');
                                ?>
                                <div class="efficiency">
                                    <div class="left">
                                        <?php echo $text_efficiency; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <?php if ($description_list): ?>
                        <p><?php echo $description_list; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
         </div>
         <p class="section-content text-center mt-4">
            <?php echo get_field('testimonials_description_2'); ?></p>
<?php
$quote = get_field('testimonials_quote');
if ($quote) :
     $content_testimonial = $quote['content'] ?? '';
    $person_testimonial = $quote['person'] ?? '';
    $image_testimonial = $quote['image'] ?? null;
     if ($image_testimonial && isset($image_testimonial['url'])) {
        $image_url = esc_url($image_testimonial['url']);
    } else {
        $image_url = ''; // fallback
    }
    ?>
        <div class="review">
            <p><?php echo esc_html($content_testimonial); ?></p>
            <div class="user-avatar">
                <img src="<?php echo $image_testimonial; ?>" alt="" class="img-fluid">
                <?php echo $person_testimonial; ?></div>
        </div>
         <?php endif; ?>
    </div>
</section>


<section class="section technical-architecture technical-architecture-shopify-integ bg-white">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo get_field('technical_architecture_heading'); ?></h2>
            <p class="section-content text-center">
                <?php echo get_field('technical_architecture_description'); ?>
            </p>
        </div>

        <div class="row gy-4">
             <?php
                       
                         if( have_rows('technical_architecture_cards') ): ?>
                <?php while( have_rows('technical_architecture_cards') ): the_row(); 
            $icon_technical = get_sub_field('icon');
            $icon_technical_url = $icon_technical['url'];
            $image_urlsss = (is_array($icon_technical_url) && isset($icon_technical_url['url'])) ? $icon_technical_url['url'] : '';
            $icon_technical_alt = $icon_technical['alt'];
            $heading_technical   = get_sub_field('heading');
           $description_technical = get_sub_field('description'); 
            
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card-parent">
                    <div class="card">
                        <div class="img-content">
                            <img src="<?php echo $icon_technical_url; ?>" alt="" class="img-fluid">
                        </div>
                        <div class="text-content">
                            <h3><?php echo $heading_technical; ?></h3>
                            <p><?php echo $description_technical; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            
            
            
        </div>
        <?php
        $technical_cta = get_field('technical_architecture_cta'); ?>
        <?php if (is_array($technical_cta)) : ?>
            <div class="square text-center mt-5">
                <a href="<?php echo esc_url($technical_cta['url']); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo esc_html($technical_cta['title']); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>


<section class="section synchronization-features pt-xl-5">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo get_field('sync_features_heading'); ?></h2>
            <p class="section-content text-center"><?php echo get_field('sync_features_description'); ?>
            </p>
        </div>
        <div class="row gy-4 justify-content-center">
           <?php
                       
                         if( have_rows('sync_features_cards') ): ?>
                <?php while( have_rows('sync_features_cards') ): the_row(); 
            $heading_sync = get_sub_field('heading');
            $description_sync   = get_sub_field('description');
           $icon_sync = get_sub_field('icon'); 
            
        ?>                 
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="box">
                    <div class="svg-content">
                        <?php echo $icon_sync; ?>
                    </div>
                    <div class="text-content">
                        <h3><?php echo $heading_sync; ?></h3>
                        <p><?php echo $description_sync; ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        
            
        </div>
    </div>
</section>
<section class="animated-row section our-amazon-integration-process">
    <div class="container">
        <div class="text-center text-cont">
            <h2 class="section-title"><?php echo get_field('amazon_title'); ?></h2>
            <p class="section-content text-center">
                <?php echo get_field('amazon_content'); ?>
            </p>
        </div>

        <div class="tabs-wrapper">
            <!-- Tabs Start Here -->
            <div class=" responsive-tabs">
                <?php if( have_rows('amazon_weeks') ): ?>
    <ul class="nav nav-tabs" role="tablist">
        <?php $i = 0; while( have_rows('amazon_weeks') ): the_row(); 
            $week_title = get_sub_field('week_title');
            $heading = get_sub_field('heading');
        ?>
        <li class="nav-item">
            <a id="tab-<?php echo $i; ?>" href="#pos-<?php echo $i; ?>" class="nav-link <?php if($i==0) echo 'active'; ?>" data-bs-toggle="tab" role="tab">
                <span><?php echo esc_html($week_title); ?></span>
                <?php echo esc_html($heading); ?>
            </a>
        </li>
        <?php $i++; endwhile; ?>
    </ul>

    <div id="content" class="tab-content" role="tablist">
        <?php $j = 0;  while( have_rows('amazon_weeks') ): the_row(); 
            $week_title = get_sub_field('week_title');
            $heading = get_sub_field('heading');
            $description = get_sub_field('description');
        ?>
        <div id="pos-<?php echo $j; ?>" class="card tab-pane fade <?php if($j==0) echo 'show active'; ?>" role="tabpanel" aria-labelledby="tab-<?php echo $j; ?>">
            <div class="card-header">
                <div class="mb-0">
                    <a data-bs-toggle="collapse" href="#pos-collapse-<?php echo $j; ?>" aria-expanded="<?php echo $j == 0 ? 'true' : 'false'; ?>">
                        <span><?php echo esc_html($week_title); ?></span>
                        <?php echo esc_html($heading); ?>
                    </a>
                </div>
            </div>
            <div id="pos-collapse-<?php echo $j; ?>" class="collapse <?php if($j==0) echo 'show'; ?>" data-bs-parent="#content">
                <div class="card-body">
                    <h3><?php echo esc_html($heading); ?></h3>
                    <p><?php echo esc_html($description); ?></p>
                    <?php if( have_rows('key_points') ): ?>
                        <ul>
                            <?php while( have_rows('key_points') ): the_row(); ?>
                                <li><?php the_sub_field('point'); ?></li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php $j++; endwhile; ?>
    </div>
<?php endif; ?>


            </div>
            <!-- Tabs END Here -->
        </div>

    </div>
</section>

<section class="animated-row section our-process">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo get_field('our_process_title'); ?></h2>
            <p class="section-content text-center">
                <?php echo get_field('our_process_content'); ?>
            </p>
        </div>
        <?php if( have_rows('our_process_items') ): 
            $i=1;
            ?>
    <div class="row gy-4 gx-3">
        <?php while( have_rows('our_process_items') ): the_row(); 
            $svg_icon = get_sub_field('svg_icon');
            $title = get_sub_field('title');
            $desc = get_sub_field('description');
        ?>
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card card-<?php echo $i; ?>">
                <?php if ($svg_icon): ?>
                   <?php echo $svg_icon; ?>
                <?php endif; ?>
                <h3><?php echo esc_html($title); ?></h3>
                <p><?php echo esc_html($desc); ?></p>
            </div>
        </div>
        <?php 
     $i++;
    endwhile; ?>
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
    'category' => 'dynamics-amazon-integration',
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