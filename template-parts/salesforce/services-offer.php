<?php
$iconArr    = $args['iconArr'];

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
        'terms'         => 'salesforce',
        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);

$the_query = new WP_Query( $args );

?>
<section class="animated-row section salesforce-services">
    <div class="container">
        <div class="text-content">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="section-title"><span>Service</span> We Offer</h2>
                </div>
                <div class="col-md-8">
                    <p class="section-content">
                       Our Salesforce Services and Consultancy helps solve complex problems through holistic data-driven strategies, slowly helping shape the future of businesses. No matter what your needs entail, we’ll make sure to give you a bang for your buck!
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
                    <?php
                    if ($the_query->found_posts!=0)
                    {
                        $data = [];
                        $i=1;
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                            $icon 		            = get_field("icon",$post->ID);
                            $icon_html		        = get_field("icon_html",$post->ID);

                            // $heading_line_1 		= get_field("heading_line_1",$post->ID);
                            // $heading_line_2 	    = get_field("heading_line_2",$post->ID);
                            ?>



                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="boxes">
                                        <div class="row">
                                            <div class="col-xl-8 col-lg-12 pl-0">
                                                <div class="text-cont">
                                                    <h3><?php echo get_the_title(); ?></h4>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-12 pl-0">
                                                <div class="svg-cont">
                                                <?php echo $icon_html; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <p><?php echo get_the_content(); ?></p>
                                    </div>
                                </div>


                            <?php
                        $i++;
                        endwhile;
                        wp_reset_postdata();
                        wp_reset_query();
                    }
                    ?>

        </div>
        <div class="button">			
            <a href="#lets-level-up-form" class="btn btn-success square-pulse">TALK TO AN EXPERT</a>            
        </div>
    </div>
</section>