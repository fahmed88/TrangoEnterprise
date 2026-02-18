<section class="animated-row section ms-dynamics">
   <div class="container">
       <div class="ms-tabs">
           <!-- Tabs Start Here -->
           <div class=" responsive-tabs">

               <div id="ms-tabs" class="tab-content" role="tablist">

                <?php 
                   $args = array(
                    'post_type'           => 'dynamics_integration',
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => 1,
                    'posts_per_page'      =>-1,
                    'orderby'             => 'ASC',
                    'order'               => 'ASC',
                    'tax_query'           => array(array(
                        'taxonomy'      => 'dynamics_integration_categories',
                        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
                        'terms'         =>  $category ? $category : 'magento-integration',
                        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                    ))
                );
                
                $the_query = new WP_Query( $args );
                    $count=0;
                ?> 
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div id="pos-AA<?php echo $count; ?>" class="card tab-pane fade <?php if($count == 0){echo 'show active'; } ?>" role="tabpanel" aria-labelledby="tab-AA<?php echo $count; ?>">
                       <div class="card-header" role="tab" id="heading-AA<?php echo $count; ?>">
                           <div class="mb-0">
                               <a data-bs-toggle="collapse" href="#pos-collapse-AA<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse-AA<?php echo $count; ?>">
                                <?php the_title(); ?>
                               </a>
                           </div>
                       </div>
                       <div id="pos-collapse-AA<?php echo $count; ?>" class="collapse show" data-bs-parent="#ms-tabs" role="tabpanel"
                            aria-labelledby="heading-AA<?php echo $count; ?>">
                           <div class="card-body">
                               <div class="row">
                                   <div class="col-md-7">
                                       <div class="text-cont">
                                           <h2 class="section-title">
                                           <?php echo get_field('heading'); ?>
                                           </h2>
                                           <?php echo get_field('content'); ?>
                                       </div>
                                   </div>
                                   <div class="col-md-5">
                                       <div class="img-cont">
                                           <img src="<?php echo get_field('image')['url']; ?>" alt="ms-tabs" class="img-fluid">
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>

                <?php $count++; endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>


               </div>

               <ul class="nav nav-tabs" role="tablist">

                    <?php 
                        $args = array(
                            'post_type'           => 'dynamics_integration',
                            'post_status'         => 'publish',
                            'ignore_sticky_posts' => 1,
                            'posts_per_page'      =>-1,
                            'orderby'             => 'ASC',
                            'order'               => 'ASC',
                            'tax_query'           => array(array(
                                'taxonomy'      => 'dynamics_integration_categories',
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

                        <li class="nav-item">
                        <a id="tab-AA<?php echo $count2; ?>" href="#pos-AA<?php echo $count2; ?>" class="nav-link <?php if($count2 == 0){echo 'active'; } ?>" data-bs-toggle="tab" role="tab">
                                <?php echo get_field('tab_name'); ?>
                        </a>
                        </li>

                    <?php $count2++; endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                    
               </ul>
           </div>
           <!-- Tabs END Here -->

       </div>
   </div>
</section>