<?php
$category = $args['category']; ?>
<section class="animated-row section streamline-operations">
    <div class="container">
        <div class="row align-items-center mb-lg-3">
            <div class="col-lg-4">
                <div class="text-cont aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500">
                    <h2 class="section-title">
                        <?php echo get_field('streamline_operations_heading'); ?>
                    </h2>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="text-cont aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500">
                    <p class="section-content">
                    <?php echo get_field('streamline_operations_content'); ?>
                    </p>
                </div>
            </div>
        </div> 

        <div class="row align-items-center">
            
            <div class=" responsive-tabs">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                        <?php 
                            $args = array(
                                'post_type'           => 'mobility_solutions',
                                'post_status'         => 'publish',
                                'ignore_sticky_posts' => 1,
                                'posts_per_page'      =>-1,
                                'orderby'             => 'ASC',
                                'order'               => 'ASC',
                                'tax_query'           => array(array(
                                    'taxonomy'      => 'mobility_solutions_categories',
                                    'field'         => 'slug', //This is optional, as it defaults to 'term_id'
                                    'terms'         =>  $category ? $category : 'magento-integration',
                                    'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                                ))
                            );
                            
                            $the_query = new WP_Query( $args );
                            $i=0;
                        ?> 
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <li class="nav-item">
                                <a id="tab-<?php echo $i; ?>" href="#poss-<?php echo $i; ?>" class="nav-link <?php echo $i==0 ? 'active' : '' ?>" data-bs-toggle="tab" role="tab">                                        
                                <?php the_title(); ?>
                                </a>
                            </li>
                            
                        <?php $i++; endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                            
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div id="contentSO" class="tab-content" role="tablist">
                        <?php 
                             $args = array(
                                'post_type'           => 'mobility_solutions',
                                'post_status'         => 'publish',
                                'ignore_sticky_posts' => 1,
                                'posts_per_page'      =>-1,
                                'orderby'             => 'ASC',
                                'order'               => 'ASC',
                                'tax_query'           => array(array(
                                    'taxonomy'      => 'mobility_solutions_categories',
                                    'field'         => 'slug', //This is optional, as it defaults to 'term_id'
                                    'terms'         =>  $category ? $category : 'magento-integration',
                                    'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                                ))
                            );
                            
                            $the_query = new WP_Query( $args );
                            $ii=0;
                        ?> 
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <div id="poss-<?php echo $ii; ?>" class="card tab-pane fade <?php echo $ii==0 ? 'active show' : '' ?>" role="tabpanel" aria-labelledby="tab-<?php echo $ii; ?>">
                                <div class="card-header" role="tab" id="heading-<?php echo $ii; ?>">
                                    <div class="mb-0">
                                       <a class="d-flex justify-content-between align-items-center <?php echo $ii==0 ? '' : 'collapsed'; ?>"
   data-bs-toggle="collapse" 
   href="#pos-collapse-<?php echo $ii; ?>" 
   aria-expanded="<?php echo $ii==0 ? 'true' : 'false'; ?>" 
   aria-controls="collapse-<?php echo $ii; ?>">

    <span><?php the_title(); ?></span>
    <span class="arrow-icon"></span>

</a>
                                    </div>
                                </div>
                                <div id="pos-collapse-<?php echo $ii; ?>" 
     class="collapse <?php echo $ii==0 ? 'show' : ''; ?>" 
     data-bs-parent="#contentSO" 
     role="tabpanel"
     aria-labelledby="heading-<?php echo $ii; ?>">

                                    <div class="card-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h3 class="sales-tabs-title">
                                                        <?php echo get_field('heading'); ?>
                                                    </h3>
                                                    <p>
                                                        <?php echo get_field('content'); ?>
                                                    </p>
                                                    <a href="<?php echo get_field('button_link'); ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal"> 
                                                    <button type="button" class="btn btn-primary square-pulse" data-aos="fade-left" data-aos-duration="1000"><?php echo get_field('button_text'); ?></button>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <img src="<?php echo get_field('image')['url']; ?>" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php $ii++; endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</section>
