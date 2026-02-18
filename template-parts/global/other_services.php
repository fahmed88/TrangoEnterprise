<?php
$title = $args['title'];
$content = $args['content'];
$args = array(
    'post_type'           => 'services',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
    'orderby'             => 'desc',
    'order'               => 'desc',
    'tax_query'           => array(array(
        'taxonomy'      => 'services_categories',
        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
        'terms'         => 'other-services',
        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);
$the_query      = new WP_Query( $args);
?>
<section class="animated-row section development-experties flutter shopify-dev">
    <div class="container">
        <div class="text-content" >
            <h2 data-aos="fade-right" data-aos-duration="1000" class="section-title"><?php echo $title ? $title : '<span>Our Other</span>  Services'?></h2>
            <p class="section-content"  aos="fade-left" data-aos-duration="1500"><?php
                echo $content ? $content : "We have everything in the store that you might need to offer an explosive mobile experience. Here are some other mobile app development-related services we offer that can help enhance the performance and development of your products."
                ?>
            </p>

        </div>
        <div class="owl-carousel experties">
            <?php
            if ($the_query->found_posts!=0)
            {
                $i=1;
                while ( $the_query->have_posts() ) : $the_query->the_post();
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    $icon 	        = get_field("icon_image",$post->ID);
                    $icon_hover 	= get_field("icon_hover_image",$post->ID);
                    $page_link 	= get_field("page_link",$post->ID);
                    ?>
                    <div class="item" data-aos="flip-left" data-aos-duration="2000">
                        <div class="card">
                            <div class="card-body">
                                <div class="img-cont">

                                    <img src="<?php echo $icon;?>" class="img-fluid di-hd">
                                    <img src="<?php echo $icon_hover;?>" class="img-fluid di-sh">

                                </div>
                                <div class="text-cont">
                                    <h3><?php echo get_the_title();?></h3>
                                    <p><?php echo get_the_content();?></p>
                                </div>
                                <a href="<?php echo $page_link ? $page_link : "javasript:void(0)"?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff-augmentation/right-arrow.png"></a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                wp_reset_query();
            }?>

        </div>
    </div>
</section>