<section class="animated-row section compatible-dynamics">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('compatible_dynamics_heading'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('compatible_dynamics_content'); ?>
            </p>
        </div>
        <div class="row">

            <?php 
               $args = array(
                'post_type'           => 'dynamics_erp',
                'post_status'         => 'publish',
                'ignore_sticky_posts' => 1,
                'posts_per_page'      =>-1,
                'orderby'             => 'ASC',
                'order'               => 'ASC',
                'tax_query'           => array(array(
                    'taxonomy'      => 'dynamics_erp_categories',
                    'field'         => 'slug', //This is optional, as it defaults to 'term_id'
                    'terms'         => 'magento-integration',
                    'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                ))
            );
            
            $the_query = new WP_Query( $args );
                $count2=0;
            ?> 
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="col-md-3 col-sm-6">
                    <div class="img-content">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="icon">
                    </div>
                    <div class="text-content">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </div>

            <?php $count2++; endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            
        </div>
    </div>
</section>