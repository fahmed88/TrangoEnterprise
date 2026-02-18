<?php
$args = array('taxonomy' => 'partner_categories','orderby' => 'name','order'   => 'ASC');
$cats = get_categories($args);
?>
<section class="animated-row section customers-and-partners">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title" data-aos="fade-right" data-aos-duration="1000">
                    <span>Trusted Customers</span> and Partners
                </h2>
                <p class="section-content" data-aos="fade-left" data-aos-duration="1500">
                    Our customers and partners are the lifeblood of our company, and we're grateful for their support.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php
                    if(!empty($cats)){
                        $i=1;
                        foreach($cats as $cat) {
                            $slug = $cat->slug;
                            ?>
                            <li class="nav-item" role="presentation"  data-aos="flip-up" data-aos-duration="1500">
                                <a class="nav-link  <?php echo $i==1 ? 'active' : ''?>" id="<?php echo $slug; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $slug; ?>" type="button" role="tab" aria-controls="<?php echo $slug; ?>" aria-selected="true"> <?php echo $cat->name; ?></a>
                            </li>
                            <?php
                         $i++;
                        }

                    }
                    ?>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <?php
                    if(!empty($cats)){
                        $i =1;
                        foreach($cats as $cat) {
                            $slug = $cat->slug;
                            ?>
                            <div class="tab-pane fade show <?php echo $i==1 ? 'active' : ''?>" id="<?php echo $slug; ?>" role="tabpanel" aria-labelledby="<?php echo $slug; ?>-tab">
                                <ul>
                                    <?php
                                    $args = array(
                                        'post_type'     => 'partner',
                                        'order'         => 'ASC',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'partner_categories',
                                                'field' => 'slug',
                                                'terms' => $slug,
                                            )
                                        ),
                                        'posts_per_page' => -1
                                    );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                        $imgurl     = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                                        $title      = get_the_title($post->ID);
                                        ?>
                                        <li  data-aos="fade-right" data-aos-duration="1000">
                                            <img type="<?php echo $title ?>" alt="<?php echo $title;?>" src="<?php echo $imgurl;?>" class="img-fluid" />
                                        </li>
                                        <?php
                                     endwhile;
                                    wp_reset_postdata();
                                    wp_reset_query();
                                    ?>


                                </ul>
                            </div>
                            <?php
                            $i++;
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>