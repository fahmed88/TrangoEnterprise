<?php
$title      = $args['title'];
$content    = $args['content'];
$category   = $args['category'];
$class= $args['class'];
$args = array(
    'post_type'           => 'help_business',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
    'orderby'             => 'asc',
    'order'               => 'asc',
    'tax_query'           => array(array(
        'taxonomy'      => 'help_business_categories',
        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
        'terms'         => $category ? $category : 'mobile',
        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);

$the_query      = new WP_Query( $args );
?>

<section class="animated-row section help-businesses ecommerce-help-businesses">
    <div class="container">
        <div class="row">
            

            <div class="stats-box-wrapper mt-0">
                <div class="row">
                    <?php

                    if ($the_query->found_posts!=0)
                    {
                        $i=1;
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                            $feat_image         = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            $title		        = get_field("title",$post->ID);
                            $sign		        = get_field("sign",$post->ID);
                            $number_counter		= get_field("number_counter",$post->ID);
                            ?>
                            <div class="col-md-3">
                                <div class="stat-box">
                                    <div class="icon-box">
                                        <img src="<?php echo $feat_image?>" />
                                    </div>
                                    <div class="stat-content">
                                    <div class="count" data-counter-lim="<?php echo $title; ?>">0</div>    
                                    <span class="conter-icon"><?php echo $sign;?></span>
                                        <p><?php echo get_the_content();?> </p>
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
        </div>

    </div>

</section>