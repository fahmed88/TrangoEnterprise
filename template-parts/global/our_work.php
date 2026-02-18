<?php
$title = $args['title'];
$content = $args['content'];
?>
<section class="animated-row section our-work">
    <div class="container">
        <div class="row">
            <div class="col-md-8" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="section-title"><?php echo $title ? $title : "<span>Why Clients Love</span> Working With Us!"?></h2>
            </div>
            <div class="col-md-4" data-aos="fade-right" data-aos-duration="2500">
                <a target="_blank" href="https://trangotech.com/portfolio" class="view-all-proj">View ALL PROJECTS
                    <svg width="40" height="40" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect x="74" width="74" height="74" transform="rotate(90 74 0)" fill="url(#pattern0)"></rect>
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_327_37" transform="scale(0.01)"></use>
                            </pattern>
                            <image id="image0_327_37" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAADL0lEQVR4nO3dP2tTURzG8ed3a5vW3UFRmpo4dFbBSRAqOAr1RUhFMG0H9QVUQVrHvomCvgFxdahSqGNujbVZhEKh0KRJk+PSKzVt/rS5yXkOPt/xnkPODz7chJsMAZRSKpjM9wD9Fk9MzsLZLADnzK3lKz8/+J6pn4IGiTPZFRgKJ685Z8v5wx+Lvmbqt8j3ABctHs8utWIAgJlbiDPZFR8zpVGQd0g8nl0C8KrjJof3ucPS/HAmSq/gQHrCSAoQJSiQc2EkBYYSDMiFMJICQgkCpC+MpEBQ6EFSwUgKAIUaJFWMJHIUWpCBYCQRo1A+GBYzk+/QHePggmuAoXB8Bl10IPF4dsnMOn/14bABh4V2ywZ7Abj1Ti9hZouMT/RUID0+gW/UxuozFtlu2z2GvahqD7uhwFBgQ6EBOQ/G9H65PcZxUygFiUIBkjZGUogo3kEGhZEUGopXkEFjJIWE4g2kmJl6jiFgJE2htFcbPXoEh42OGw2FODM51+95F83fHWLuZcf1FDGSpvfLu7Wx+kx3FHud1pnnzQvIOm6PGnC17YYBYCT1iHLtM3Ap7bN7yQvIHXytw7B55uIAMZK6ohg2HwBHgzq/U/7eslxzHsBhy8X1QWMk/UU5/UFfdc6d+q1+WHm5LQEgV93+FI/dvIsR9xTOXYG5L2OVxmquWq4Ma4bp/fLuL1y/X58YmXNN3EMU/XaNaDVfi78Pa4bWvIEAQK62tQngmc8ZbmCnggqWfc5wMu8PhurfBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCywgVptv5/VY9r5AUL4iLbANA8Y6nRiEa+DXuetAoWJFfZ2nawt63XDe7NrUpxx8dMaWS+B+i34uXsY2vaEwBwkVvLH5Q++p5JKaX+k/4Assc5bL5z+p4AAAAASUVORK5CYII="></image>
                        </defs>
                    </svg>
                </a>
            </div>
            <p class="section-content"  data-aos="fade-left" data-aos-duration="1500">
                <?php
                echo $content ? $content : "TrangoTech has been a part of the development and design industry for over a decade. Our team comprises over 100+ certified and trained developers with experience of 15 years or more, making them the best at what they do. No matter what your company size or needs are, our team knows how to create a spectacular app. Here are some of our clients from various industries who’ve been with us since the start.   "
                ?>
            </p>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="ecommerce-ourWork-carousel owl-carousel owl-theme">

                    <?php
                    $paged          = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $post_per_page  = -1;
                    $the_query      = new WP_Query( array('posts_per_page' => $post_per_page, 'post_type' => 'projects', 'paged' => $paged,'order'=>'DESC',  )  );
                    if ($the_query->found_posts!=0)
                    {
                        $i=1;
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                            $feat_image         = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            $logo		        = @get_field('logo')['url'];
                            $page_link	        = get_field("page_link",get_the_ID());
                            $industry	        = get_field("industry",get_the_ID());
                            $platform	        = get_field("platform",get_the_ID());
                            ?>
                            <div class="card ">
                                <img loading="lazy" class="lazy card-img-top img-fluid" alt="" src="<?php echo $feat_image ?>" >
                                <div class="tag"><?php echo $industry ? $industry: ""?></div>
                                <div class="card-block">
                                    <div class="card-block-inner" data-aos="fade-down" data-aos-duration="2500">

                                       <?php
                                        if($logo){
                                            ?>
                                            <img loading="lazy" class="lazy company-logo" alt="" src="<?php echo $logo?>" >
                                            <?php
                                        }
                                        ?>
                                        <h3 class="card-title"><?php echo get_the_title();?></h3>
                                        <p class="card-text"><?php echo get_the_content();?></p>
                                        <h4>Platform</h4>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <?php
                                                //$term_list = get_the_terms($post->ID, 'project_categories');?>

                                                <p><?php //echo !empty($term_list[0]) ? $term_list[0]->name : ""?>
                                                    <?php echo $platform ? $platform: ""?>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <a <?php echo $page_link ? 'target="_blank"' : ""?> href="<?php echo $page_link ? $page_link : "javascript:void(0)"?>" class="btn btn-primary square-pulse"><svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <rect width="44" height="44" fill="url(#pattern03)"/>
                                                        <defs>
                                                            <pattern id="pattern03" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                                <use xlink:href="#image0_514_159" transform="scale(0.0111111)"/>
                                                            </pattern>
                                                            <image id="image0_514_159" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAACHUlEQVR4nO3asWsTYRjH8d9zbRNjpXZwEhehTh2d/BMOEdTRgEMHB0HQQXDxL1CkiKsoujgIukU3/wmnOgiCc4ZCYmPvcbi0XGKubbw3b+z1+4EOvTe8vHxJy92TSAAAAAAAAAAAAAAAAACAmrB5H+B/8ePCldagZZuStyXrSf5q11cfX/rW+RVi/yTEJnWQR9YdyZYlnZPsYaLuh621tBlif0JL8vwv+9b4dTNLQ8UmtCSTXPnP32uBYhN6yGUvy9ZCxCb0UOYrj9y9U7ZeNTZ3HQVf19cbrZ2V95JdO+Bln23QuH7x+5f+NHsTesysYhN6glnEJnSJ0LEJfYCQsQl9iFCxCX0EIWIT+oiqxib0FKrEHgn98/zl0/0zzSdytSWdncVhTwJ37yS/mzeLsUcewXvLp57JdVdErsTMUl/ceV68th/apcTkt+Mfq6ZMbS/0ZagUyX5okzKXvZnnYerEZW9NyvZ+H3lHN3rZA7m/kNSNfrI6MfuUDJbuj1ya11mOo2C3dyjHA0sEPIJHwFApAsakETD4j4CPsiLgw9kIZvl1g4WKZ6uNrbW0ubTrH83satlrhuPPG9NGlqTFaserjwV1n8osLVufNGOeBtM75SNimW2UrleMLBG6aGILd+9kWv2nfxeHbn7S5CNivRu/vhc5xLf+CT3UbzTuufRaUl/Stss2Q0XGBM4tLwAAAAAAAAAAAAAAAIBj6w8WpxmFjCtlJgAAAABJRU5ErkJggg=="/>
                                                        </defs>
                                                    </svg>
                                                </a>
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
        </div>
    </div>
</section>

