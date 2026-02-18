<?php
$title          = $args['title'];
$content        = $args['content'];
$category       = isset($args['category']) ? $args['category'] : 'all';
$extraclass     = $args['class'];
$classes        = isset($args['classes']) ? $args['classes'] : '';
$orderby        = isset($args['orderby']) ? $args['orderby'] : 'ASC';
$order        = isset($args['order']) ? $args['order'] : 'DESC';

$args = array(
    'post_type'           => 'portfolio_new',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
    'orderby'             => $orderby,
    'order'               => $order,
    'tax_query'           => array(array(
        'taxonomy'      => 'portfolio_new_categories',
        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
        'terms'         => $category,
        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);

$the_query = new WP_Query( $args ); ?>
<section class="section Shifaam-at-greek-root prototype-sec-new pb-0 <?php echo $extraclass; ?> ">
    <div class="container">

        <?php $categories = ['microsoft-dynamics','business-central-integration']; ?>

		<?php if( in_array($category, $categories) ){ ?> 

		 <div class="text-cont">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title" data-aos="fade-left" data-aos-duration="1500">
                        <?php echo $title; ?>
                    </h2>
                </div>
                <div class="col-md-6">
                    <p class="section-content">
                        <?php echo $content; ?>
                    </p>
					<?php if(get_field('our_work_button_text') != ''){ ?>
					<div class="square mt-4 aos-init aos-animate" data-aos-duration="1500" data-aos="fade-up">
                <a href="<?php echo get_field('our_work_button_link'); ?>" class="square-pulse btn btn-red" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                   <?php echo get_field('our_work_button_text'); ?>
                    <svg width="30" height="24" viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 17L15 12L10 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 17L21 12L16 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
            </div><?php } ?>
                </div>
            </div>
        </div>
		
		<?php }else{ ?>
        <div class="text-cont">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title" data-aos="fade-left" data-aos-duration="1500">
                        <?php echo $title; ?>
                    </h2>
                </div>
                <div class="col-md-6 order-3 order-md-0">
                    <div class="view-btn-box">
                        <a href="https://trangotech.com/portfolio/" class="view-all">
                            View ALL PROJECTS 
                            <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect x="40" y="0.8125" width="40" height="40" transform="rotate(90 40 0.8125)" fill="url(#pattern0_9_7350)"/>
                                <defs>
                                <pattern id="pattern0_9_7350" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_9_7350" transform="scale(0.0111111)"/>
                                </pattern>
                                <image id="image0_9_7350" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAACyElEQVR4nO3dTWsTURTG8XNCaHXS5GuVWYiNOF0pFF3bnXR7t4ILxQ9g8AWlI1pwMdYvpZBpabvIcWEulDJJJtPpc++0z385N3BOfrSZJoVWhDEWMOdcT0Q09B7r1pmFsyy73+v13pnZExExEfmYJMn+ZDI5C71bnToBnabp5tbW1g9VTa8c/UqSZNwF7OihsyzbUNVvIvKg6tzMfg8Gg4exY0cNvQrZ1wXsaKHrIvtix44Sel1kX8zY0UE3RfbFih0V9HWRfTFiRwPdFrIvNuwooNtGvtRxkiQ7MWD3Qi+QpummiBzJEmQzK5qcicj2ycnJ9729vXvXWLGVgkJnWbYxHA7zind8lzseDAaPlpzviMjPRYeqmp6enh6Fxg4GXfPlYuW3fp7nF2b2WJZgi8h2aOwg0G0h+7qADYduG9kXOzYUuu6NbzqdNvqxLM/zi+l0mtW5Qc53gQWFHo1Gr5fd+MysKMtyXBTFedMZRVGcl2U5XoatquloNHrVdEaTYNDOuZ6ZPVt03gayrw62mT0X4PsI9Gt05bw2kX01sPvOudsH7ZybqerXq9dvAtm3AvuLc27W9sxFQb+iZ7PZC1WdiMiZiJQi8uamkH0eW1Xfzmeeich7M9u/qZlVhfqsQ+X/L1hrt7u7W/n4w8PDdZ6Df+xas9uojx44D/5EA88N/6HSXYnQoAgNitCgCA2K0KAIDYrQoAgNitCgCA2K0KAIDYrQoAgNitCgCA2K0KAIDYrQoAgNitCgCA2K0KAIDYrQoAgNitCgCA2K0KAIDYrQoAgNitCgCA2K0KAIDYrQoAgNitCgCA2K0KAIDYrQoAgNitCgCA2K0KAIDYrQoAgNitCgCA2K0KAIDYrQoAgNitCgugT9t+LaH/gWDesS9OeKa5/gWzQs1B+BXTsze6mqfRF5Or/0wcwOQu5021OJ5F9PMXZ3+weOb02/vOFurgAAAABJRU5ErkJggg=="/>
                                </defs>
                            </svg>                                
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <p class="section-content">
                        <?php echo $content; ?>
                    </p>
                </div>
            </div>
        </div> <?php } ?>
    </div>
    <div class="sec-wraper">
        <div class="owl-carousel  owl-theme prototype-slider-new">
		<?php

if ($the_query->found_posts!=0)
{
    ?>
	<?php
                    $k=1;
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        $top_heading_line_1 		= get_field("top_heading_line_1",$post->ID);
                        $top_heading_line_2 	    = get_field("top_heading_line_2",$post->ID);
                        $bg__image  = get_field('portfolio_background_image');

						

    // Loop through rows.
    
        
                        ?>
            <article class="item <?php echo get_field('portfolio_class_name'); ?>" <?php echo $bg__image ? 'style="background-image: url('. esc_url($bg__image) .'); background-repeat:no-repeat; background-size:cover" ' : ''; ?> >
                <div class="container p-0">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="bg-img-sec">
                                <img src="<?php echo $feat_image; ?>" class="img-fluid" alt="<?php echo strip_tags( get_the_title() ); ?>" loading="lazy" <?php echo get_image_dimensions($feat_image, 'url', false); ?>>
                            </div>
                        </div>
    
                        <div class="col-lg-6 p-0">
                            <div class="txt_sec_area ahyon-text">
                                <h3>
                                    <?php echo get_the_title(); ?>
                                </h3>
                                <div class="para_sec">
                                    <p>
                                        <?php echo get_the_content(); ?>
                                    </p>
                                </div>
    
                                <div class="counter-box">
								<?php
									while( have_rows('portfolio_analysis') ) : the_row();
					$analysis_counter = get_sub_field('analysis_counter');
					$analysis_content = get_sub_field('analysis_content'); ?>
                                    <div class="counter">
									
                                        <p><span><?php echo $analysis_counter; ?></span>
                                        <?php echo $analysis_content; ?></p>
                                    </div><?php endwhile; ?>
                                    
                                </div>
    							  <?php if(get_field('portfolio_store')) :?>
                                <ul class="downlaod-btns">
                                    <li><p>Available on :</p></li>
									<?php
									while( have_rows('portfolio_store') ) : the_row();
		 $portfolio_store_image = get_sub_field('portfolio_store_image');
         $portfolio_store_link = get_sub_field('portfolio_store_link'); ?>
                                    <li>
                                        <a href="<?php echo $portfolio_store_link; ?>" aria-label="apple store">
                                            <img src="<?php echo $portfolio_store_image; ?>" alt="apple stroe button" loading="lazy" class="img-fluid">
                                        </a>
                                    </li>
									<?php endwhile; ?>
                                    
                                </ul><?php endif; ?>
                                <?php if(get_field('portfolio_case_study_link')) :?>
                                <a href="<?php echo get_field('portfolio_case_study_link'); ?>" class="view-case-study">
                                    View Full Case study 
                                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.09 1.31544L16.8766 2.111M16.8766 2.111L16.081 7.89755M16.8766 2.111L1.07948 14.0894" stroke="white" stroke-width="1.65208" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                    
                                </a>
                                <?php endif; ?>
    
                            </div>
                        </div>
                    </div>
    
                </div>
                                </article>
			<?php
                        $k++;
					endwhile; 
					
					 }
                    wp_reset_postdata();
                    wp_reset_query();
                    ?>
            
            
        </div>
        <div id="counter" class="owl-counter"></div> 
    </div>
</section>

