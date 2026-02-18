<?php
$title      = $args['title'];
$content    = $args['content'];
$category    = $args['category'];
$cities_class = $args['class'];

$args = array(
    'post_type'           => 'industry',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
    'orderby'             => 'ASC',
    'order'               => 'ASC',
    'tax_query'           => array(array(
        'taxonomy'      => 'industry_categories',
        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
        'terms'         => $category ? $category : 'mobile',
        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);

$the_query = new WP_Query( $args );
?>

<section class="animated-row section industries-we-cater <?php echo $cities_class ? $cities_class : 'bg-white'?>">
    <div class="container">
        <div class="row mb-lg-3">
            <div class="col-lg-6 col-md-12">
                <div class="text-cont" data-aos="fade-right" data-aos-duration="1500">
                    <h2 class="section-title">
                    <?php echo $title ? $title :'<span>Industries we Cater as an Eminent</span> Microsoft Dynamics Partner'; ?>
                    </h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="text-cont" data-aos="fade-left" data-aos-duration="1500">
                    <p class="section-content">
                    <?php echo $content ? $content :'Stop settling for generic Dynamics 365 solutions! Trango Tech goes beyond one-size-fits-all. We are industry professionals who focus on a diverse range of industries. Through our comprehensive offerings in manufacturing, retail, healthcare, and finance, we offer customized solutions that focus on profit maximization, turnover escalation and success expansion. Work along with us and allow our professionals to handle all the Microsoft Dynamics operations for you.'; ?>
                    </p>
                </div>
            </div>
        </div>
        

        
    <ul class="cater-list">
    <?php
                if ($the_query->found_posts!=0)
                {
                   
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    $post_id=get_the_ID();
                        $title  = get_the_title();
                        $content = get_the_content(); 
                        $featured_image_url = get_the_post_thumbnail_url($post_id, 'full'); 
                        $industries_link= get_field('industries_link'); 
                        $has_link = (is_null($industries_link) || $industries_link == '#' || empty($industries_link)) ? false : $industries_link;
                        ?>
        <li data-aos="zoom-in" data-aos-duration="1500">
                <div class="img-content">
                    <img src="<?php echo $featured_image_url; ?>" alt="Thumbnail of <?php echo strip_tags( $title ); ?>" class="img-fluid" <?php echo get_image_dimensions($featured_image_url, 'url', false); ?>>
                </div>
                <div class="text-content">
                    <h3><?php echo $title; ?></h3>
                    <?php if ($has_link) { ?>
                        <span>
                            <a href="<?php echo $industries_link; ?>" target="_blank">
                           
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="transform: rotate(0);">
<rect x="22" y="22" width="22" height="22" transform="rotate(180 22 22)" fill="url(#pattern<?php echo get_the_ID(); ?>)"/>
<defs>
<pattern id="pattern<?php echo get_the_ID(); ?>" patternContentUnits="objectBoundingBox" width="1" height="1">
<use xlink:href="#image0_1987_2258" transform="scale(0.0111111)"/>
</pattern>
<image id="image0_1987_2258" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAACPUlEQVR4nO3aP4sTQRyH8e9vL7e5NJIXoIUYq7wCX4EEEbzCQsRCBBWEQwQLX4CFpdorKIfNqWU4sLDzFaTKIYL23oGYf3c7FnIhe56bze7chhueT7lsZoeHEDKzIwEAAAAAAAAAAAAAAAAAAmG+Buq3OvUV7T2V6bbk6pJtrg7cw3M/vgx8PeM0q/kYpN/q1CPtfpRZ5+8Vk6S7k4ZJ0j0fzzjtorIDHEa2aeSUG2XHD0Wp0HMiS1JSZvyQFA6dI7LM3Kui44em0G90nsjOue6Baz4pPrWwrCz6gV67HceJ2zKzKxm3bUf79fULXz+NSswtKAv9veu123FjfGZLsqsZt23bJL52/tvnYcm5BSV3aCKXkys0kcubG5rIfmSGJrI//w1NZL+ODU1k//4JTeSTkQr9/eylxnhN77NWfJhrV842V4fJ49kt4tQSfLJmL8xE5HKaMvdg3Ihqku4fXpxuKjkpkunmUqYWIJO75Wb6Ht298/bGBWnT0CYlcnq7zMmExMm9sZn9+NQ32vbjDedct/ppBcT0U9LLeKBH6ctH8PfuZLBgqQhL8IqwqVQRtkkrwsZ/RXiVVRFezlZk4SU3sYtZ+KRSu9cbH7jm9TkryMtJbfSh3+rUS8wtKIWOhF3c6Y4SNdezYptZJ7K9Z8WnFpbCZ+9yxZbuOHYEJZU8TZojdk2EluThfHRWbJPeGUd3JXkILc3Elp5L+iVpaNLr33G84WN8HMNJxu8yAAAAAAAAAAAAAAAAACzDH62oFPT8HD/9AAAAAElFTkSuQmCC"/>
</defs>
</svg>

                            </a> 
                        </span>
                        <?php } ?>
                </div>
            </li>
            <?php
                      
                    endwhile;
                    wp_reset_postdata();
                    wp_reset_query();
                }
                ?>
    </ul>

            
    </div>
</section>