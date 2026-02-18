<?php
$title      = $args['title'];
$content    = $args['content'];
$category   = $args['category'];

$args = array(
    'post_type'           => 'integration_tabs',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
<<<<<<< HEAD
    'orderby'             => 'asc',
    'order'               => 'asc',
=======
    'orderby'             => 'desc',
    'order'               => 'desc',
>>>>>>> 6a6975e828b4d859fbde948b097eac97c9a19ada
    'tax_query'           => array(array(
        'taxonomy'      => 'integration_categories',
        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
        'terms'         => $category ? $category : 'mobile',
        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);

$the_query      = new WP_Query( $args );
?>
<section class="animated-row section integration-connectors">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo $title ? $title : '<span>Application, SaaS and B2B/EDI Integration
Connectors</span> To Power Your Enterprise'; ?>
            </h2>
            <p class="section-content text-center">
            <?php echo $content ? $content : 'We have 15+ years of extensive development expertise in Dynamics AX 2009, 2012, Dynamics NAV and Dynamics 365 integration solutions'; ?>
            </p>
        </div>

        <div class="integration-tabs">
            <!-- Tabs Start Here -->
            <div class=" responsive-tabs">
                <ul class="nav nav-tabs" role="tablist">
                  

<?php

if ($the_query->found_posts!=0)
{
    $i=1;
    while ( $the_query->have_posts() ) : $the_query->the_post();
       // $feat_image         = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        $tab_title		    = get_field("tab_title",$post->ID);
       
        ?>
                        
                        <li class="nav-item">
                            <a id="tab-<?php echo $i; ?>" href="#pos-<?php echo $i; ?>" class="nav-link <?php if($i == 1){echo 'active'; } ?>" 
                            data-bs-toggle="tab" role="tab">
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

                <div id="integration-tabs" class="tab-content" role="tablist">
                    
                <?php

                    if ($the_query->found_posts!=0)
                    {
                        $i=1;
                        while ( $the_query->have_posts() ) : $the_query->the_post();

                        
                        
                            the_row();
                           // $feat_image         = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            
                            $tab_title		    = get_field("tab_title",$post->ID);
                            ?>
                    <div id="pos-<?php echo $i; ?>" class="card tab-pane fade <?php if($i == 1){echo 'show active'; } ?>" role="tabpanel" aria-labelledby="tab-<?php echo $i; ?>">
                        <div class="card-header" role="tab" id="heading-AA<?php echo $i; ?>">
                            <div class="mb-0">
                                <a data-bs-toggle="collapse" href="#pos-collapse-<?php echo $i; ?>" aria-expanded="true"
                                   aria-controls="collapse-<?php echo $i; ?>">
                                    <?php echo $tab_title; ?>
                                </a>
                            </div>
                        </div>
                        <div id="pos-collapse-<?php echo $i; ?>" class="collapse show" data-bs-parent="#integration-tabs"
                             role="tabpanel"
                             aria-labelledby="heading-<?php echo $i; ?>">
                            <div class="card-body">
                                <ul>
                                <?php
                                    // Check rows exists.
                                    while( have_rows('integration_tabs') ) {
                                        the_row();
                                        $logos		        = get_sub_field("integration_tabs_logos");
                                ?>
                                    <li>
                                        <img src="<?php echo $logos; ?>" alt="logo" class="img-fluid">
                                    </li>
                                <?php } ?>
                                </ul>
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
    </div>
</section>
<!-- connection features end -->