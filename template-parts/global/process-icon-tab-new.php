<?php
$title              = $args['title'];
$content            = $args['content'];
$category           = $args['category'];
$cities_class       = $args['class'];
$show_title_in_card = isset($args['show_title_in_card']) ? $args['show_title_in_card'] : true;
$show_modal_cta     = isset($args['show_modal_cta']) ? $args['show_modal_cta'] : true;
$orderby            = isset($args['orderby']) ? $args['orderby'] : 'date';
$order = $args['orderr'];

$args = array(
    'post_type'           => 'dev_process',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
    'orderby'             => $orderby,
    'order'               => $order ? $order : 'desc',
    'tax_query'           => array(array(
        'taxonomy'      => 'dev_process_categories',
        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
        'terms'         => $category ? $category : 'mobile',
        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);

$the_query = new WP_Query( $args );
?>
<section class="animated-row section mobile-app-dev-process microsoft-power-bi-app-dev-process pb-0">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo $title; ?></h2>
            <p class="section-content text-center">
                <?php echo $content; ?>
            </p>
        </div>

        <!-- Tabs Start Here -->
        <div class=" responsive-tabs">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="nav nav-tabs" role="tablist">
                    <?php
                    $k=1;
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        $top_heading_line_1 		= get_field("top_heading_line_1",$post->ID);
                        $top_heading_line_2 	    = get_field("top_heading_line_2",$post->ID);
                        ?>
                        <li class="nav-item">
                            <a id="tab-<?php echo $k; ?>" href="#posm-<?php echo $k; ?>" class="nav-link <?php echo $k==1 ? 'active' : ''?>" data-bs-toggle="tab" role="tab">
                            <div class="icon">
                                    <?php echo get_field('icon_html'); ?>                         
                                </div>      
                            <?php echo get_the_title(); ?>
                            </a>
                        </li>
                        <?php
                        $k++;
                    endwhile;
                    wp_reset_postdata();
                    wp_reset_query();
                    ?>
                        
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div id="content-dev" class="tab-content" role="tablist">
                    <?php
                    $k=1;
                    while ( $the_query->have_posts() ) : $the_query->the_post();

                        $bold_heading 		        = get_field("bold_heading",$post->ID);
                        $normal_heading 	        = get_field("normal_heading",$post->ID);
                        ?>
                        <div id="posm-<?php echo $k; ?>" class="card tab-pane fade show <?php echo $k==1 ? 'active' : ""?>" role="tabpanel" aria-labelledby="tab-<?php echo $k; ?>">
                            <div class="card-header" role="tab" id="heading-<?php echo $k; ?>">
                                <div class="mb-0">
                                    <a data-bs-toggle="collapse" href="#pos-collapse-<?php echo $k; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $k; ?>">
                                    <div class="icon">
                                    <?php echo get_field('icon_html'); ?>                         
                                </div>  
                                    <?php echo get_the_title(); ?>
                                    </a>
                                </div>
                            </div>
                            <div id="pos-collapse-<?php echo $k; ?>" class="collapse <?php echo $k==1 ? 'show' : ""?>" data-bs-parent="#content-dev" role="tabpanel"
                                 aria-labelledby="heading-<?php echo $k; ?>">
                                <div class="card-body">
                                    <div class="text-cont">
                                        <?php if ($show_title_in_card) : ?>
                                            <h3><?php echo get_field('top_heading_line_1'); ?></h3>
                                        <?php endif; ?>
                                        <p>
                                            <?php echo get_the_content(); ?>
                                        </p>
										<?php
										$btntext= get_field('process_tab_button_text');
										if($btntext && $show_modal_cta){ ?>
                                        <a class="btin" href="<?php echo get_field('process_tab_button_link'); ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal"><?php echo get_field('process_tab_button_text'); ?></a>
										<?php } ?>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $k++;
                    endwhile;
                    wp_reset_postdata();
                    wp_reset_query();
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tabs END Here -->
    </div>
</section>