<?php
$title      = $args['title'];
$content    = $args['content'];
$category   = $args['category'];

$args = array(
    'post_type'           => 'affiliations_logos',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
    'orderby'             => 'asc',
    'order'               => 'asc',
    'tax_query'           => array(array(
        'taxonomy'      => 'affiliations_categories',
        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
        'terms'         => $category ? $category : 'mobile',
        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);

$the_query      = new WP_Query( $args );
?>
<section class="animated-row section customers-and-partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title" data-aos="fade-right" data-aos-duration="1000">
                    <?php echo $title ? $title : '<span>Our Esteemed Affiliations &</span> Partnerships'; ?>
                    </h2>
                    <p class="section-content" data-aos="fade-left" data-aos-duration="1500">
                    <?php echo $content ? $content : 'Our Microsoft experts at Trango Tech have 20+ years of experience working with diverse Microsoft ERPs, CRMs, and Modules.'; ?>
                    </p>
                </div>
            </div>
            <div class="row">
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
                <div class="col-md-3 col-sm-6">
                    <div class="img-wrapper">
                        <img src="<?php echo $feat_image; ?>" class="img-fluid" alt="">
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
    </section>