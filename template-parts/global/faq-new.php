<?php
$title       = $args['title'];
$content     = $args['content'];
$category    = $args['category'];
$classes     = isset($args['classes']) ? $args['classes'] : '';
$bg_class    = isset($args['bg_class']) ? $args['bg_class'] : 'bg-white';
$show_search = isset($args['show_search']) ? $args['show_search'] : true;

$args = array(
    'post_type'           => 'faqs',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
    'orderby'             => 'asc',
    'order'               => 'asc',
    'tax_query'           => array(array(
        'taxonomy'      => 'faqs_categories',
        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
        'terms'         => $category ? $category : 'mobile',
        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);

$the_query      = new WP_Query( $args );
$titlefaq=get_field('faqs_heading');
?>
<section class="animated-row section ask-question  bg-gray no-lzl-section">
    <div class="container">
        <div class="text-cont text-center mb-5">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">
                        <?php echo $title ? $title : '<span>Ask</span> Any Questions' ?></h2>
                </div>
            </div>
        </div>
		<?php
		if ($the_query->found_posts!=0)
{
    $i=1;
    while ( $the_query->have_posts() ) : $the_query->the_post();
        $feat_image         = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        $client_title		    = get_the_title($post->ID);
        ?>
        <button type="button" class="collapsible"><?php echo $client_title; ?>
        </button>
        <div class="content">
            <p><?php the_content(); ?></p>
        </div>
		<?php
                        $i++;
                    endwhile;
                    wp_reset_postdata();
                    wp_reset_query();
                }?>
        
    </div>
</section>