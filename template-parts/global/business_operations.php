<?php $enable = get_field('business_operations_enable'); ?>

<?php if ($enable) : // if enable starts ?>
    <?php
        $title      = $args['title'];
        $content    = $args['content'];
        $category   = $args['category'];

        $args = array(
            'post_type'           => 'dynamics_erp',
            'post_status'         => 'publish',
            'ignore_sticky_posts' => 1,
            'posts_per_page'      =>-1,
            'orderby'             => 'asc',
            'order'               => 'asc',
            'tax_query'           => array(array(
                'taxonomy'      => 'dynamics_erp_categories',
                'field'         => 'slug', //This is optional, as it defaults to 'term_id'
                'terms'         => $category ? $category : 'microsoft-dynamics',
                'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
            ))
        );
        $the_query = new WP_Query( $args );
    ?>
<section class="animated-row section business-operations">
        <div class="container">
            <div class="text-cont aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500">
                <h2 class="section-title">
                    <?php echo get_field('business_operations_heading'); ?>
                </h2>
                <p>
                <?php echo get_field('business_operations_content'); ?>
                </p>
            </div>

            <!-- Tabs Start Here -->
            <div class=" responsive-tabs">
                <ul class="nav nav-tabs" role="tablist">
                <?php

            if ($the_query->found_posts!=0)
            {
                $i=1;
                while ( $the_query->have_posts() ) : $the_query->the_post();
                    $feat_image         = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    $erp_title		    = get_the_title($post->ID);
                    $erp_description		    = get_the_content($post->ID);
                    $dynamics_erp_image		    = get_field('dynamics_erp_image',$post->ID);
                    ?>
                    <li class="nav-item">
                        <a id="tab-<?php echo $i; ?>" href="#pose-<?php echo $i; ?>" class="nav-link <?php echo $i==1 ? 'active' : '' ?>" data-bs-toggle="tab" role="tab"><?php echo  $erp_title; ?></a>
                    </li>
                    <?php
                        $i++;
                    endwhile;
                    wp_reset_postdata();
                    wp_reset_query();
                }?>
                    
                </ul>

                <div id="contentBO" class="tab-content" role="tablist">
                
               

<?php

if ($the_query->found_posts!=0)
{
    $i=1;
    while ( $the_query->have_posts() ) : $the_query->the_post();
        $feat_image         = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        $erp_title		    = get_the_title($post->ID);
        $erp_description		    = get_the_content($post->ID);
        $dynamics_erp_image		    = get_field('dynamics_erp_image',$post->ID);
        $dynamics_button_link		    = get_field('dynamics_button_link',$post->ID);
        ?>
                    <div id="pose-<?php echo $i; ?>" class="card tab-pane fade show <?php echo $i==1 ? 'active' : '' ?>" role="tabpanel" aria-labelledby="tab-<?php echo $i; ?>">
                        <div class="card-header" role="tab" id="heading-<?php echo $i; ?>">
                            <div class="mb-0">
                                <a data-bs-toggle="collapse" href="#pos-collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $i; ?>">
                                    <?php echo $erp_title; ?>
                                </a>
                            </div>
                        </div>
                        <div id="pos-collapse-<?php echo $i; ?>" class="collapse show" data-bs-parent="#contentBO" role="tabpanel"
                            aria-labelledby="heading-<?php echo $i; ?>">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <img src="<?php echo $dynamics_erp_image; ?>" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-6">
                                        <h3 class="business-opr-icon">
                                        <img src="<?php echo  $feat_image ; ?>" class="img-fluid" alt="">
                                            <?php echo $erp_title; ?>
                                        </h3>
                                        <p>
                                        <?php echo $erp_description; ?>
                                        </p>
                                        <?php 
                                        $dynamic_button_text = get_field('dynamic_button_text');
                                        $dynamic_button_link = get_field('dynamic_button_link');
                                        if(!empty($dynamic_button_text) || !empty($dynamic_button_link)){
                                        ?>
                                         <a href="<?php echo $dynamic_button_link; ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal"><button type="button" class="btn btn-primary square-pulse" data-aos="fade-left" data-aos-duration="1000"><?php echo $dynamic_button_text; ?></button></a>   
                                        <?php }else{ ?>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#next-project-modal"><button type="button" class="btn btn-primary square-pulse" data-aos="fade-left" data-aos-duration="1000">TALK WITH US</button></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $i++;
                    endwhile;
                    wp_reset_postdata();
                    wp_reset_query();
                }?>
                   
                </div>
            </div>
            <!-- Tabs END Here -->

        </div>
</section>

<?php endif; // if enable ends ?>