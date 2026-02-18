<section class="animated-row section help-businesses">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title" data-aos="fade-down" data-aos-duration="1500">
                    Foster Growth Through Impeccable  
                    <span>Adobe Commerce Support Services</span>
                </h2>
                <p class="section-content text-center" data-aos="zoom-in" data-aos-duration="2000">
                We're here to nurture your ideas and transform them into unstoppable products and services that take the industry by storm.
                </p>
            </div>
        </div>
        <div class="row">
            <?php
            $paged          = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $post_per_page  = -1;
            $the_query      = new WP_Query( array('posts_per_page' => $post_per_page, 'post_type' => 'help_business', 'paged' => $paged,'order'=>'DESC',  )  );
            if ($the_query->found_posts!=0)
            {
                $i=1;
                while ( $the_query->have_posts() ) : $the_query->the_post();
                    $feat_image         = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    $title		        = get_field("title",$post->ID);
                    $sign		        = get_field("sign",$post->ID);
                    $number_counter		= get_field("number_counter",$post->ID);
                    ?>
                    <div class="col-md-6 col-lg-3 col-12 mb-md-15" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="v-center">
                                            <img src="<?php echo $feat_image?>" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="col-9 plr-0">
                                        <div class="countNew"><span class="<?php echo $number_counter ? "we-hlep-countttt" : ""?>"><?php echo $title;?></span><?php echo $sign;?></div>
                                        <p><?php echo get_the_content();?></p>
                                    </div>
                                </div>
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

</section>