<?php
$title      = $args['title'];
$content    = $args['content'];
$category   = $args['category'];

$args = array(
    'post_type'           => 'dynamics_tabs',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
    'orderby'             => 'asc',
    'order'               => 'asc',
    'tax_query'           => array(array(
        'taxonomy'      => 'dynamics_categories',
        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
        'terms'         => $category ? $category : 'mobile',
        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);

$the_query      = new WP_Query( $args );
?>
<section class="animated-row section reputable-and-trustable">
        <div class="container">
            <div class="row mb-lg-3">
                <div class="col-lg-6 col-md-12">
                    <div class="text-cont aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500">
                        <h2 class="section-title">
                        <?php
                    echo $title ? $title : '<span>Robust and Complete
                    Dynamics</span> Integration Solutions';
                    ?>
                        </h2>
                    </div>
                    <div class=" responsive-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                        <?php

if ($the_query->found_posts!=0)
{
    $i=1;
    while ( $the_query->have_posts() ) : $the_query->the_post();
       // $feat_image         = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        $tab_title		    = get_the_title($post->ID);
        $svg_icon		    = get_field('svg_icon',$post->ID);
        ?>
                            <li class="nav-item">
                                <a id="tab-<?php echo $i; ?>" href="#posa-<?php echo $i; ?>" class="nav-link <?php echo $i==1 ? 'active' : ''?>" data-bs-toggle="tab" role="tab">
                                     <?php echo $svg_icon; ?>          
                                    <?php echo $tab_title; ?>
                                </a>
                            </li>
                            <?php
                        $i++;
                    endwhile;
                    wp_reset_postdata();
                    wp_reset_query();
                }?>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="text-cont aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500">
                        <p class="section-content">
                        <?php
                    echo $content ? $content : 'Streamline Business Processes,Centralize Data,and automate accounting, HR, supply chain and other functions with Dynamics Integration Solutions.';
                    ?> 
                        </p>
                    </div>
                    <div class=" responsive-tabs">
                        <div id="content" class="tab-content" role="tablist">

                        <?php

if ($the_query->found_posts!=0)
{
    $i=1;
    while ( $the_query->have_posts() ) : $the_query->the_post();
       // $feat_image         = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        $tab_inner_title    = get_field('dynamic_tab_inner_title',$post->ID);
        $tab_inner_content		    = get_the_content($post->ID);
        $dynamics_button_text		    = get_field('dynamics_button_text',$post->ID);
        $dynamics_button_link		    = get_field('dynamics_button_link',$post->ID);
        ?>

                            <div id="posa-<?php echo $i; ?>" class="card tab-pane fade show <?php echo $i==1 ? 'active' : ''?>" role="tabpanel" aria-labelledby="tab-<?php echo $i; ?>">
                                <div class="card-header" role="tab" id="heading-<?php echo $i; ?>">
                                    <div class="mb-0">
                                        <a data-bs-toggle="collapse" href="#pos-collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $i; ?>">
                                            <?php echo $tab_inner_title; ?>
                                        </a>
                                    </div>
                                </div>
                                <div id="pos-collapse-<?php echo $i; ?>" class="collapse show" data-bs-parent="#content" role="tabpanel"
                                    aria-labelledby="heading-<?php echo $i; ?>">
                                    <div class="card-body">
                                        <div class="pos-collapse-parent-cst">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h3 class="content-title">
                                                    <?php echo $tab_inner_title; ?>
</h3>
                                                    <p>
                                                        <?php echo  $tab_inner_content; ?>
                                                    </p>
                                                   <a href="<?php echo $dynamics_button_link; ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal"> <button type="button" class="btn btn-primary square-pulse" data-aos="fade-left" data-aos-duration="1000"><?php echo $dynamics_button_text; ?></button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php $i++; endwhile;  } wp_reset_postdata();
                        wp_reset_query();?>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>