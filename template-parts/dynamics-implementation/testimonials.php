<?php
$category   = $args['category'];
$class      = isset($args['class']) ? $args['class'] : '';
$query_args = array(
    'post_type'           => 'testimonials_tabs',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
    'orderby'             => 'asc',
    'order'               => 'asc',
    'tax_query'           => array(array(
        'taxonomy'      => 'testimonials_categories',
        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
        'terms'         => $category ? $category : 'mobile',
        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);

$testimonials = new WP_Query( $query_args );
?>

<section class="animated-row section why-our-clients-love-trango <?php echo $class; ?>">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title mb-4" data-aos="fade-right" data-aos-duration="1000"><?php echo get_field('testimonials_heading'); ?></h2>
            <p data-aos="fade-left" data-aos-duration="1500" class="section-content"><?php echo get_field('testimonials_description'); ?></p>
        </div>

        <?php $logos = get_field('testimonials_logos'); ?>
        <div class="container mt-5">
            <div class="owl-carousel testimonial-carousel-for-mobile-only">    
                <?php if (is_array($logos) && count($logos)) : ?>
                    <?php foreach ($logos as $logo) : ?>
                        <?php $logo = $logo['logo']; ?>
                        <div class="logo-box">
                            <img src="<?php echo $logo; ?>" class="img-fluid" <?php echo get_image_dimensions($logo); ?>>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?> 
            </div>
        </div>

        <div class="row">
            <div class="owl-carousel why-our-clients owl-theme">
                <!-- ****  **** -->
                <?php if ( $testimonials->have_posts() ) : ?>
                    <?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
                        <article class="card">
                            <div class="d-flex b-bottom">
                                <div class="card-head">
                                    <div class="d-flex">
                                        <a href="#"><?php echo get_field('client_name'); ?></a>
                                        <div class="review-cont">
                                            <?php $rating = get_field('client_rating'); ?>
                                            <?php for ($i=0; $i < 5; $i++) : ?>
                                                <?php if ($i < $rating) : ?>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.35631 13.1882L4.42892 15.5395C4.25542 15.6493 4.07403 15.6963 3.88476 15.6806C3.69549 15.6649 3.52988 15.6022 3.38792 15.4925C3.24597 15.3828 3.13556 15.2458 3.0567 15.0815C2.97783 14.9166 2.96206 14.7323 3.00938 14.5285L4.05037 10.0845L0.572504 7.09827C0.414777 6.95719 0.316356 6.79636 0.27724 6.61578C0.237493 6.43583 0.249164 6.25963 0.312255 6.0872C0.375346 5.91477 0.469981 5.77369 0.596163 5.66396C0.722344 5.55423 0.895843 5.48369 1.11666 5.45234L5.7065 5.05262L7.48093 0.867252C7.55979 0.679146 7.68218 0.538066 7.84811 0.444013C8.01341 0.349959 8.18281 0.302933 8.35631 0.302933C8.52981 0.302933 8.69952 0.349959 8.86545 0.444013C9.03075 0.538066 9.15283 0.679146 9.23169 0.867252L11.0061 5.05262L15.596 5.45234C15.8168 5.48369 15.9903 5.55423 16.1165 5.66396C16.2426 5.77369 16.3373 5.91477 16.4004 6.0872C16.4635 6.25963 16.4754 6.43583 16.4363 6.61578C16.3966 6.79636 16.2978 6.95719 16.1401 7.09827L12.6622 10.0845L13.7032 14.5285C13.7506 14.7323 13.7348 14.9166 13.6559 15.0815C13.5771 15.2458 13.4666 15.3828 13.3247 15.4925C13.1827 15.6022 13.0171 15.6649 12.8279 15.6806C12.6386 15.6963 12.4572 15.6493 12.2837 15.5395L8.35631 13.1882Z" fill="#F09409"/>
                                                    </svg>
                                                <?php else : ?>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.90051 12.7592L8.64368 12.6055L8.38684 12.7592L4.45945 15.1106L4.45937 15.1104L4.44903 15.117C4.35952 15.1736 4.28539 15.1883 4.2134 15.1823C4.11445 15.1741 4.04206 15.1441 3.98108 15.0969C3.90187 15.0357 3.84073 14.9606 3.79504 14.8656C3.77216 14.8176 3.7583 14.7516 3.78371 14.6419C3.78373 14.6418 3.78376 14.6417 3.78379 14.6416L4.82456 10.1985L4.89381 9.90289L4.66346 9.70511L1.18992 6.72264C1.10139 6.6425 1.06674 6.5721 1.05328 6.50993L1.05284 6.50794C1.03357 6.42071 1.03898 6.34156 1.06918 6.25901C1.10615 6.15796 1.15531 6.09023 1.21163 6.04126C1.24359 6.01346 1.31401 5.97185 1.46213 5.94918L6.03725 5.55073L6.33683 5.52464L6.45421 5.24778L8.22863 1.06242L8.22864 1.06242L8.22941 1.06057C8.26865 0.966984 8.31931 0.914551 8.38204 0.878994L8.38275 0.878589C8.48013 0.82318 8.56506 0.802933 8.64368 0.802933C8.72224 0.802933 8.80762 0.82316 8.90585 0.878761C8.96788 0.914134 9.01853 0.96657 9.05794 1.06058L9.05872 1.06242L10.8331 5.24778L10.9505 5.52464L11.2501 5.55073L15.8252 5.94918C15.9733 5.97185 16.0438 6.01346 16.0757 6.04126C16.132 6.09023 16.1812 6.15796 16.2182 6.25901C16.2485 6.34195 16.2541 6.42153 16.2352 6.50891C16.2213 6.57174 16.186 6.6425 16.0974 6.72265L12.6239 9.70511L12.3935 9.90289L12.4628 10.1985L13.5036 14.6416C13.5036 14.6416 13.5036 14.6416 13.5036 14.6416C13.5291 14.7515 13.5152 14.8175 13.4923 14.8655C13.4467 14.9605 13.3855 15.0357 13.3063 15.0969C13.2453 15.1441 13.1729 15.1741 13.074 15.1823C13.002 15.1883 12.9278 15.1736 12.8383 15.117L12.8384 15.1168L12.8279 15.1106L8.90051 12.7592Z" fill="white" stroke="#929292"/>
                                                    </svg>
                                                <?php endif; ?>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <p><?php echo get_field('client_designation'); ?></p>
                                </div>
                            </div>
                            <div class="card-body">
                                <h3 class="quote-title"><?php echo get_the_title(); ?></h3>
                                <p><?php echo get_the_content(); ?></p>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
        <?php if (get_field('testimonials_button_text')) : ?>
        <div class="square text-center mt-5">
            <a href="<?php echo get_field('testimonials_button_link'); ?>" class="square-pulse btn btn-red text-capitalize px-5">
                <?php echo get_field('testimonials_button_text'); ?>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>