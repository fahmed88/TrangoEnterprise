<section class="section dynamics-integration-banner ms-dynamics-banner">
    <div class="container">
        <div class="row align-items-center mt-lg-3 gx-0">
            <div class="col-lg-6 col-xxl-5">
                <div class="text-cont">
                    <h1 class="banner-title text-lg-start">
                        <?php echo get_field('banner_heading'); ?>
                    </h1>
                    <p class="banner-text text-lg-start ms-lg-0">
                        <?php echo get_field('banner_description'); ?>
                    </p>
                    <div class="btns justify-content-lg-start">
                        <?php
                            $cta_1 = get_field('banner_cta_1');
                            if (is_array($cta_1) && count($cta_1) && isset($cta_1['url'])) echo '<a href="' . $cta_1['url'] . '" class="square-pulse" ' . is_modal_link($cta_1['url']) . '>' . $cta_1['title'] . '</a>';
                            $cta_2 = get_field('banner_cta_2');
                            if (is_array($cta_2) && count($cta_2) && isset($cta_2['url'])) echo '<a href="' . $cta_2['url'] . '" class="btn-white" ' . is_modal_link($cta_2['url']) . '>' . $cta_2['title'] . '</a>';
                        ?>
                    </div>
                    <?php get_template_part('template-parts/global/5-stars-badge');?>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-7">
                <div class="img-cont text-center">
                    <img src="<?php echo get_field('banner_image'); ?>" class="img-fluid" alt="<?php echo strip_tags( get_field('banner_heading') ); ?>">
                </div>
            </div>
        </div>

        <div class="ms-dynamics-counter-wraper mt-4 mt-lg-5 mb-4 mb-lg-0">
            <div class="row justify-content-center gy-3 gy-lg-0">

                <?php $items = get_field('counter_items'); ?>

                <?php if (is_array($items) && count($items)) : ?>
                    <?php foreach ($items as $item) : ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-card">
                                <div class="icon">
                                    <?php echo $item['icon']; ?>
                                </div>
                                <div class="counter"> 
                                    <span class="count" data-counter-lim="<?php echo $item['number']; ?>"><?php echo $item['number']; ?></span> 
                                    <span class="conter-icon">+</span> 
                                    <p><?php echo $item['text']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>