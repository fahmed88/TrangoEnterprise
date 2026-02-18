<!-- why choose us start -->
<?php
$title      = $args['title'];
$content    = $args['content'];
$category   = $args['category'];

$args = array(
    'post_type'           => 'why_choose_us',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
    'order'               =>'ASC',
    'tax_query'           => array(array(
        'taxonomy'        => 'why_choose_us_categories',
        'field'           => 'slug', //This is optional, as it defaults to 'term_id'
        'terms'           => $category ? $category : 'mobile',
        'operator'        => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);
$the_query = new WP_Query( $args );

?>


<section class="flutter-why-choose section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="section-title" data-aos="fade-right" data-aos-duration="1000">
                    <?php echo $title ? $title: "<span>Why </span>Trango Tech"?>
                </h2>

                <p class="section-content text-center" data-aos="fade-left" data-aos-duration="1500">
                    <?php echo $content ? $content : "Because We Create And Deliver Valuable Moments That Matter To Our Clients"?>
                </p>
            </div>
        </div>
        <div class="why-choose-cards">
            <div class="row justify-content-between">
                <?php
                if ($the_query->found_posts!=0)
                {
                    $i=1;
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                        $icon 		= get_field("icon",$post->ID);
                        $iconHtml   = get_field("icon_html",$post->ID);
                        $otherCls = '';
                        $dataAnimation = 'fade-right';
                        if($i % 2 == 0){
                            $otherCls = 'ml-auto';
                            $dataAnimation = 'fade-left';
                        }
                        ?>
                        <div class="col-lg-6" data-aos="<?php echo $dataAnimation;?>" data-aos-duration="1000">
                            <div class="why-choose-cards__item <?php echo $otherCls;?>">
                                <p class="why-choose-cards__item__para"><?php echo get_the_content();?></p>
                                <h3 class="why-choose-cards__item__title"><?php echo get_the_title();?></h4>
                                <div class="why-choose-cards__item__icon">
                                    <?php echo $iconHtml  ?   $iconHtml  : "" ?>
                                </div>
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
        </div>
    </div>
</section>
<!-- why choose us end -->