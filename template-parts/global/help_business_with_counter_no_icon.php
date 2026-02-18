<?php
$title      = $args['title'];
$content    = $args['content'];
$category   = $args['category'];
$class      = isset($args['class']) ? $args['class'] : '';

$args = array(
    'post_type'           => 'help_business',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      => -1,
    'orderby'             => 'asc',
    'order'               => 'asc',
    'tax_query'           => array(array(
        'taxonomy'  => 'help_business_categories',
        'field'     => 'slug',
        'terms'     => $category ? $category : 'home',
        'operator'  => 'IN'
    ))
);

$the_query = new WP_Query($args);
?>

<section class="section successful-delivered-projects <?php echo $class; ?>">
    <div class="container">
        <div class="successful-projects-wrapper">
            <div class="text-cont text-center">
                <?php if ($title) : ?>
                    <h2 class="section-title"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if ($content) : ?>
                    <p class="section-content text-center"><?php echo $content; ?></p>
                <?php endif; ?>
            </div>

            <div class="row gy-4 justify-content-center">
                <?php
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $feat_image     = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                        $title          = get_field("title", $post->ID);
                        $sign           = get_field("sign", $post->ID);
                        $time_limit     = get_field("time__limit", $post->ID);
                        $number_counter = get_field("number_counter", $post->ID);
                        ?>
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="project-count-wrapper">
                                <div class="stat-content">
                                    <div>
                                <div class="<?php 
    $classes = [];

   
    if ($number_counter === 'no') {
        $classes[] = 'disabled';
    }

   
    if ($title === '24/7') {
        $classes[] = 'coutn';
    } else {
      
        $classes[] = 'count';
    }

    echo implode(' ', $classes);
?>"
<?php 
    
    if ($number_counter === 'yes' && is_numeric($title) && $title !== '24/7') {
        echo ' data-counter-lim="' . esc_attr($title) . '"';
    }
?>>
    <?php echo esc_html($title); ?>
</div>




                                        <!-- <div class="count" <?php // echo ($number_counter == 'yes') ? 'data-counter-lim="' . $title . '"' : ''; ?>><?php // echo $title; ?></div> -->
                                        <span class="conter-icon"><?php echo $sign; ?></span>
                                        <span class="years"><?php echo $time_limit; ?></span>
                                    </div>
                                    <p><?php echo get_the_content(); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<style>
.coutn {
    font-weight: 600;
    font-size: 65px;
    line-height: 1.2;
    margin-bottom: 10px;
    color: #fff;
}
    </style>