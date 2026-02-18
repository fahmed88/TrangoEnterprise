<?php
$query = array( 'post_type' => 'certificate', 'tax_query' => array(
    array (
        'taxonomy' => 'certificate_categories',
        'field' => 'slug',
        'terms' => @$args['taxonomy_type'],
    )
), 'posts_per_page' => 1, 'order' => 'asc');
$the_query = new WP_Query( $query ); 
?>   
<section class="animated-row section Ssalesforce-certification">
    <div class="container">
        <div class="text-content">
            <h2 class="section-title">
                <span><?php echo ucfirst(@$args['taxonomy_type']); ?></span>
                Certification
            </h2>
            <p class="section-content">
                Trango Tech helps businesses transform by taking their idea and nurturing it into a physical product that offers measurable and noticeable results.
            </p>
        </div>
        <div class="row justify-content-center">
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php 
                $duration = 1000; 
                if( have_rows('certificate_bullets') ): 
                while( have_rows('certificate_bullets') ) : the_row();
            ?>
               
               <div class="col-md-2 col-sm-6 col-6">
                <div class="img-cont">
                    <img loading="lazy" src="<?php echo get_sub_field('logo'); ?>" class="img-fluid" alt="Certification logo">
                </div>
            </div>
               
            <?php $duration += 500; endwhile; endif; ?>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
</section>