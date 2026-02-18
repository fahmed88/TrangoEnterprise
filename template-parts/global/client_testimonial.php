<?php
$title      = $args['title'];
$content    = $args['content'];
$category   = $args['category'];

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

$the_query      = new WP_Query( $query_args );
?>
<section class="animated-row section testimonials-section">
        <div class="container">
            <div class="text-cont mt-4" data-aos="fade-right" data-aos-duration="1500">
                <h2 class="section-title">
                    <?php echo $title ? $title : '<span>300+ Satisfied Customers</span> and
Counting' ?>
                </h2>
                <p>
                <?php echo $content ? $content : 'As a leading Microsoft Dynamics partner, we bring over two decades of expertise to the table, ensuring your journey to digital transformation is seamless and rewarding. Discover why businesses worldwide choose us as their trusted choice for innovative solutions and unparalleled support.' ?>
                </p>
            </div>
            <div class="row">
            
                <div class="col-lg-6">
                <video controls poster="<?php echo get_template_directory_uri(); ?>/assets/img/video.png" width="100%" height="100%" controls="0">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/img/microsoft/ms-dynamics.mp4" type="video/mp4"></video>


                        
                </div>
                


                <div class="col-lg-6">
                    <h3> Testimonials </h3>
                    
                    <div class="owl-carousel owl-theme single-testimonials-carousel">
                    <?php

if ($the_query->found_posts!=0)
{
    $i=1;
    while ( $the_query->have_posts() ) : $the_query->the_post();
        $feat_image         = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        $client_title		    = get_the_title($post->ID);
        $client_description		    = get_the_content($post->ID);
        $client_designation		    = get_field('client_designation',$post->ID);
        ?>
                        <div class="item">
                            <p>
                                <?php echo $client_description; ?>
                            </p>
                            <p class="testimonial-name"><?php echo $client_title; ?></p>
                            <p class="testimonial-designation"><?php echo $client_designation; ?></p>
                        </div>
                        <?php
                        $i++;
                    endwhile;
                    wp_reset_postdata();
                    wp_reset_query();
                }?>


                       
                    </div>
                    
                </div>
                
            </div>
            <?php
$title      = $args['title'];
$content    = $args['content'];
$category   = $args['category'];

$query_args = array(
    'post_type'           => 'clientlogos',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
    'orderby'             => 'asc',
    'order'               => 'asc'
);

$the_query      = new WP_Query( $query_args );
?>
             <div class="row mt-5">
             <?php

if ($the_query->found_posts!=0)
{
    $i=1;
    while ( $the_query->have_posts() ) : $the_query->the_post();
        $feat_image         = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        $tab_inner_title    = get_field('dynamic_tab_inner_title',$post->ID);
        $tab_inner_content		    = get_the_content($post->ID);
        $dynamics_button_text		    = get_field('dynamics_button_text',$post->ID);
        $dynamics_button_link		    = get_field('dynamics_button_link',$post->ID);
        ?>
                <div class="col-md-3 col-sm-6">
                    <div class="img-wrapper">
                        <img src="<?php echo $feat_image; ?>" class="img-fluid" alt="">
                    </div>
                </div>
                <?php $i++; endwhile; wp_reset_postdata();
                    wp_reset_query();  } ?>
               
            </div>
        </div>
    </section>