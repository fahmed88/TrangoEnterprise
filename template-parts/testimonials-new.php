<?php
$category   = $args['category'];
$class      = isset($args['class']) ? $args['class'] : '';
$query_args = array(
    'post_type'           => 'testimonials_tabs',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
    'orderby'             => 'asc',
    'order'               => 'asc',
    'tax_query'           => array(array(
        'taxonomy'      => 'testimonials_categories',
        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
        'terms'         => $category ? $category : 'mobile',
        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);

$testimonials = new WP_Query( $query_args );
?>
<section class="section why-our-clients-love-trango customer-success-stories-section <?php echo $class; ?>">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title mb-0">
                <?php echo get_field('testimonials_heading'); ?>
            </h2>
            <p class="section-content text-center pt-0">
                <?php echo get_field('testimonials_description'); ?>
            </p>
        </div>
		<?php $logos = get_field('testimonials_logos'); ?>
        <div class="testimonial-carousel-for-mobile-wrapper mt-5">
            <div class="owl-carousel testimonial-carousel-for-mobile-only">
			<?php if (is_array($logos) && count($logos)) : ?>
                    <?php foreach ($logos as $logo) : ?>
                        <?php $logo = $logo['logo']; ?>
                <div class="logo-box d-flex justify-content-center">
                    <img src="<?php echo $logo; ?>" class="img-fluid" <?php echo get_image_dimensions($logo); ?> alt="Clutch">
                </div>
				  <?php endforeach; ?>
                <?php endif; ?> 
                
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel why-our-clients owl-theme">
			 <?php if ( $testimonials->have_posts() ) : ?>
                    <?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
                <div class="card">
                    <div class="card-body">
                        <?php echo get_field('testimonials_svg'); ?>
                        <h3 class="quote-title"><?php echo get_field('client_name'); ?></h3>
                        <p class="health-title-text"><?php echo get_field('client_designation'); ?></p>
                        <p><?php echo get_the_content(); ?>
                        </p>
                        <ul class="inventory-cost-reduction">
<?php					
					if( have_rows('cost_reduction') ):

    // Loop through rows.
    while( have_rows('cost_reduction') ) : the_row();

        // Load sub field value.
        $cost_reduction_title = get_sub_field('cost_reduction_title');
        $cost_reduction_content = get_sub_field('cost_reduction_content');
       ?>
	   
	   <li>
                                <strong><?php echo $cost_reduction_title; ?></strong>
                                <?php echo $cost_reduction_content; ?>
                            </li>
	   <?php
    endwhile;

endif; ?>
                            
                        </ul>
                    </div>
                </div>
				 <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                
            </div>
        </div>
        <p class="bottom-text"><?php echo get_field('testimonials_bottom_text'); ?></p>
    </div>

</section>