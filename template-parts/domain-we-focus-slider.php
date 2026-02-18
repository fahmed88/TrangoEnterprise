<?php
$title           = $args['title'];
$content         = $args['content'];
$extraclass      = isset($args['class']) ? $args['class'] :"";
$viewMore        = isset($args['viewMoreLink']) ? $args['viewMoreLink'] : "";

$args = array(
    'post_type'           => 'domain',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>8,
    'order'               => 'ASC',

);

$the_query = new WP_Query( $args );


?>

<section class="animated-row section mob-app-dev-domain-we-focus staff-augmented <?php echo $extraclass;?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <h2 class="section-title" data-aos="fade-right" data-aos-duration="1000">
                        <?php echo $title ? $title: "<span>Domain</span> We Focus"?>
                    </h2>
                    <p class="section-content" data-aos="fade-left" data-aos-duration="1500">
                       <?php echo $content ? $content : ""?>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="cont-part">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12 pr-0">
                    <div class="health-care">
                        <div class="row g-0">
                            <div class="col-12 pr-0">
                                <article class="tabbed-content tabs-side">
                                    <div class="tabs-column">
                                        <nav class="tabs">
                                            <ul>
                                                <?php if ( $the_query->have_posts() ) : ?>
                                                    <?php
                                                    $j=1000;
                                                    $i = 0; while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                                        <li><a data-aos="fade-right" data-aos-duration="<?php echo $j;?>" href="#side_tab<?php echo $post->ID; ?>" class="<?php echo $i == 0 ? 'active' : ''; ?>"><?php the_title(); ?></a></li>
                                                        <?php
                                                        $j+=300;
                                                        $i++;
                                                    endwhile; wp_reset_postdata(); ?>
                                                <?php endif; ?>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="tabs-content-column">
                                        <?php if ( $the_query->have_posts() ) : ?>
                                        <?php $i = 0; while ( $the_query->have_posts() ) : $the_query->the_post();
                                                $slider_images	= get_field("slider_image",get_the_ID());
                                                $page_link	= get_field("page_link",get_the_ID());
                                                $pageId =get_the_ID();
                                        ?>
                                        <section id="side_tab<?php echo $post->ID; ?>" class="item <?php echo $i == 0 ? 'active' : ''; ?>" data-title="Tab 1">
                                            <div class="item-content">
                                                <div class="row g-0">
                                                    <div class="col-lg-6">
                                                        <div class="tab-content-col" <?php echo $i==0 ? 'data-aos="fade-down" data-aos-duration="1500"' : ""?>>
                                                            <h3>
                                                                <?php echo get_the_title(); ?>
                                                            </h4>

                                                            <p>
                                                                <?php echo get_the_content(); ?>
                                                            </p>
                                                            <a <?php echo $page_link ? 'target="_blank"' : ""?> href="<?php echo $viewMore ? $viewMore : ($page_link ? $page_link : "#lets-level-up-form")?>" class="text-lnk">
                                                                LEARN MORE
                                                                <svg width="32" height="32" viewBox="0 0 32 32"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <rect x="32" width="32" height="32"
                                                                          transform="rotate(90 32 0)"
                                                                          fill="url(#pattern0)"></rect>
                                                                    <defs>
                                                                        <pattern id="pattern0"
                                                                                 patternContentUnits="objectBoundingBox"
                                                                                 width="1" height="1">
                                                                            <use xlink:href="#image0_34_2160"
                                                                                 transform="scale(0.01)"></use>
                                                                        </pattern>
                                                                        <image id="image0_34_2160" width="100"
                                                                               height="100"
                                                                               xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAADL0lEQVR4nO3dP2tTURzG8ed3a5vW3UFRmpo4dFbBSRAqOAr1RUhFMG0H9QVUQVrHvomCvgFxdahSqGNujbVZhEKh0KRJk+PSKzVt/rS5yXkOPt/xnkPODz7chJsMAZRSKpjM9wD9Fk9MzsLZLADnzK3lKz8/+J6pn4IGiTPZFRgKJ685Z8v5wx+Lvmbqt8j3ABctHs8utWIAgJlbiDPZFR8zpVGQd0g8nl0C8KrjJof3ucPS/HAmSq/gQHrCSAoQJSiQc2EkBYYSDMiFMJICQgkCpC+MpEBQ6EFSwUgKAIUaJFWMJHIUWpCBYCQRo1A+GBYzk+/QHePggmuAoXB8Bl10IPF4dsnMOn/14bABh4V2ywZ7Abj1Ti9hZouMT/RUID0+gW/UxuozFtlu2z2GvahqD7uhwFBgQ6EBOQ/G9H65PcZxUygFiUIBkjZGUogo3kEGhZEUGopXkEFjJIWE4g2kmJl6jiFgJE2htFcbPXoEh42OGw2FODM51+95F83fHWLuZcf1FDGSpvfLu7Wx+kx3FHud1pnnzQvIOm6PGnC17YYBYCT1iHLtM3Ap7bN7yQvIHXytw7B55uIAMZK6ohg2HwBHgzq/U/7eslxzHsBhy8X1QWMk/UU5/UFfdc6d+q1+WHm5LQEgV93+FI/dvIsR9xTOXYG5L2OVxmquWq4Ma4bp/fLuL1y/X58YmXNN3EMU/XaNaDVfi78Pa4bWvIEAQK62tQngmc8ZbmCnggqWfc5wMu8PhurfBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCywgVptv5/VY9r5AUL4iLbANA8Y6nRiEa+DXuetAoWJFfZ2nawt63XDe7NrUpxx8dMaWS+B+i34uXsY2vaEwBwkVvLH5Q++p5JKaX+k/4Assc5bL5z+p4AAAAASUVORK5CYII="></image>
                                                                    </defs>
                                                                </svg>
                                                            </a>
                                                            <ul class="tab-tra-lo-li">
                                                                <li>
                                                                    <svg width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_34_1811<?php echo $pageId?>)">
                                                                            <path d="M48 28.5086L48 4.19629e-06L0 0L-1.13178e-06 12.9461L14.9579 12.9461L-2.44421e-06 27.9586L-4.02145e-06 46L24 21.7923L24 46L48 46L24 21.7923L32.7706 12.9461L48 28.5086Z" fill="#F7F7F7"/>
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_34_1811<?php echo $pageId?>">
                                                                                <rect width="48" height="46" fill="white"/>
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </li>
                                                                <li>
                                                                    <svg width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_34_1811<?php echo $pageId?>)">
                                                                            <path d="M48 28.5086L48 4.19629e-06L0 0L-1.13178e-06 12.9461L14.9579 12.9461L-2.44421e-06 27.9586L-4.02145e-06 46L24 21.7923L24 46L48 46L24 21.7923L32.7706 12.9461L48 28.5086Z" fill="#F7F7F7"/>
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_34_1811<?php echo $pageId?>">
                                                                                <rect width="48" height="46" fill="white"/>
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </li>
                                                                <li>
                                                                    <svg width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_34_1811<?php echo $pageId?>)">
                                                                            <path d="M48 28.5086L48 4.19629e-06L0 0L-1.13178e-06 12.9461L14.9579 12.9461L-2.44421e-06 27.9586L-4.02145e-06 46L24 21.7923L24 46L48 46L24 21.7923L32.7706 12.9461L48 28.5086Z" fill="#F7F7F7"/>
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_34_1811<?php echo $pageId?>">
                                                                                <rect width="48" height="46" fill="white"/>
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </li>
                                                                <li>
                                                                    <svg width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_34_1811<?php echo $pageId?>)">
                                                                            <path d="M48 28.5086L48 4.19629e-06L0 0L-1.13178e-06 12.9461L14.9579 12.9461L-2.44421e-06 27.9586L-4.02145e-06 46L24 21.7923L24 46L48 46L24 21.7923L32.7706 12.9461L48 28.5086Z" fill="#F7F7F7"/>
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_34_1811<?php echo $pageId?>">
                                                                                <rect width="48" height="46" fill="white"/>
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </li>
                                                                <li>
                                                                    <svg width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_34_1811<?php echo $pageId?>)">
                                                                            <path d="M48 28.5086L48 4.19629e-06L0 0L-1.13178e-06 12.9461L14.9579 12.9461L-2.44421e-06 27.9586L-4.02145e-06 46L24 21.7923L24 46L48 46L24 21.7923L32.7706 12.9461L48 28.5086Z" fill="#F7F7F7"/>
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_34_1811<?php echo $pageId?>">
                                                                                <rect width="48" height="46" fill="white"/>
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </li>
                                                                <li>
                                                                    <svg width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_34_1811<?php echo $pageId?>)">
                                                                            <path d="M48 28.5086L48 4.19629e-06L0 0L-1.13178e-06 12.9461L14.9579 12.9461L-2.44421e-06 27.9586L-4.02145e-06 46L24 21.7923L24 46L48 46L24 21.7923L32.7706 12.9461L48 28.5086Z" fill="#F7F7F7"/>
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_34_1811<?php echo $pageId?>">
                                                                                <rect width="48" height="46" fill="white"/>
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </li>
                                                                <li>
                                                                    <svg width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_34_1811<?php echo $pageId?>)">
                                                                            <path d="M48 28.5086L48 4.19629e-06L0 0L-1.13178e-06 12.9461L14.9579 12.9461L-2.44421e-06 27.9586L-4.02145e-06 46L24 21.7923L24 46L48 46L24 21.7923L32.7706 12.9461L48 28.5086Z" fill="#F7F7F7"/>
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_34_1811<?php echo $pageId?>">
                                                                                <rect width="48" height="46" fill="white"/>
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </li>
                                                                <li>
                                                                    <svg width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_34_1811<?php echo $pageId?>)">
                                                                            <path d="M48 28.5086L48 4.19629e-06L0 0L-1.13178e-06 12.9461L14.9579 12.9461L-2.44421e-06 27.9586L-4.02145e-06 46L24 21.7923L24 46L48 46L24 21.7923L32.7706 12.9461L48 28.5086Z" fill="#F7F7F7"/>
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_34_1811<?php echo $pageId?>">
                                                                                <rect width="48" height="46" fill="white"/>
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </li>
                                                                <li>
                                                                    <svg width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_34_1811<?php echo $pageId?>)">
                                                                            <path d="M48 28.5086L48 4.19629e-06L0 0L-1.13178e-06 12.9461L14.9579 12.9461L-2.44421e-06 27.9586L-4.02145e-06 46L24 21.7923L24 46L48 46L24 21.7923L32.7706 12.9461L48 28.5086Z" fill="#F7F7F7"/>
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_34_1811<?php echo $pageId?>">
                                                                                <rect width="48" height="46" fill="white"/>
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </li>
                                                                <li>
                                                                    <svg width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_34_1811<?php echo $pageId?>)">
                                                                            <path d="M48 28.5086L48 4.19629e-06L0 0L-1.13178e-06 12.9461L14.9579 12.9461L-2.44421e-06 27.9586L-4.02145e-06 46L24 21.7923L24 46L48 46L24 21.7923L32.7706 12.9461L48 28.5086Z" fill="#F7F7F7"/>
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_34_1811<?php echo $pageId?>">
                                                                                <rect width="48" height="46" fill="white"/>
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </li>
                                                                <li>
                                                                    <svg width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_34_1811<?php echo $pageId?>)">
                                                                            <path d="M48 28.5086L48 4.19629e-06L0 0L-1.13178e-06 12.9461L14.9579 12.9461L-2.44421e-06 27.9586L-4.02145e-06 46L24 21.7923L24 46L48 46L24 21.7923L32.7706 12.9461L48 28.5086Z" fill="#F7F7F7"/>
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_34_1811<?php echo $pageId?>">
                                                                                <rect width="48" height="46" fill="white"/>
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </li>
                                                                <li>
                                                                    <svg width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_34_1811<?php echo $pageId?>)">
                                                                            <path d="M48 28.5086L48 4.19629e-06L0 0L-1.13178e-06 12.9461L14.9579 12.9461L-2.44421e-06 27.9586L-4.02145e-06 46L24 21.7923L24 46L48 46L24 21.7923L32.7706 12.9461L48 28.5086Z" fill="#F7F7F7"/>
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_34_1811<?php echo $pageId?>">
                                                                                <rect width="48" height="46" fill="white"/>
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 ">
                                                        <div class="slide-ara">
                                                            <div class="mob-carousel owl-carousel owl-theme">
                                                                <?php
                                                                if(!empty($slider_images)){
                                                                    foreach($slider_images as $img){
                                                                       ?>
                                                                        <div class="item">
                                                                            <div class="img-cont">
                                                                                <img class="lazy" loading="lazy" src="<?php echo $img['image']?>" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                }
                                                                ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <?php $i++; endwhile; wp_reset_postdata(); ?>
                                        <?php endif; ?>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>