<?php
$class = isset($args['class']) ? $args['class'] : '';

?>

<section class="section finance-and-operations-pricing <?php echo $class; ?>">
    <div class="container">

        <?php if (get_field('finance_pricing_title') || get_field('finance_pricing_subtitle')): ?>
            <div class="text-cont">
                <?php if (get_field('finance_pricing_title')): ?>
                    <h2 class="section-title text-center">
                        <?php echo get_field('finance_pricing_title'); ?>
                    </h2>
                <?php endif; ?>

                <?php if (get_field('finance_pricing_subtitle')): ?>
                    <p class="section-content text-center mt-0 pt-0">
                        <?php echo get_field('finance_pricing_subtitle'); ?>
                    </p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('finance_pricing_cards')): ?>
            <div class="finance-operations-pricing-wrapper">
                <div class="row gy-3 gx-3">
                    <?php while (have_rows('finance_pricing_cards')): the_row(); ?>
                        <?php
                        $price        = get_sub_field('plan_price');
                        $user_text    = get_sub_field('plan_user_text');
                        $plan_name    = get_sub_field('plan_name');
                        $button_text  = get_sub_field('plan_button_text');
                        $button_link  = get_sub_field('plan_button_link');
                        $bottom_text  = get_sub_field('plan_bottom_text');
                        $bottom_icon  = get_sub_field('plan_bottom_icon');
                        $is_popular   = get_sub_field('plan_is_popular');
                        $users_limit   = get_sub_field('users_limit');
                        ?>

                        <div class="col-xl-4 <?php echo $is_popular ? 'px-xl-0' : ''; ?>">
                            <div class="finance-operations-pricing-card <?php if( get_row_index() == 3 ) echo 'last-card'; ?>  
                                <?php echo $is_popular ? 'most-popular' : ''; ?>">
                                
                                <?php if ($is_popular): ?>
                                    <div class="most-popular-tag">MOST POPULAR</div>
                                <?php endif; ?>

                                <?php if ($price): ?>
                                    <span class="finance-pricing-text"><?php echo esc_html($price); ?></span>
                                <?php endif; ?>

                                <?php if ($user_text): ?>
                                    <p class="user-month"><?php echo esc_html($user_text); ?></p>
                                <?php endif; ?>

                                <?php if ($plan_name): ?>
                                    <h3 class="finance-operations-main-title"><?php echo esc_html($plan_name); ?></h3>
                                <?php endif; ?>

                                <?php if ($users_limit): ?>
                                    <span class="user-sizes d-block"><?php echo $users_limit; ?></span>
                                <?php endif; ?>

                                <?php if (have_rows('plan_features')): ?>
                                    <ul class="financial-management-lists">
                                        <?php while (have_rows('plan_features')): the_row(); ?>
                                            <?php if (get_sub_field('feature_text')): ?>
                                                <li><?php echo esc_html(get_sub_field('feature_text')); ?></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>

                                <?php if ($button_text): ?>
                                    <div class="btn-wrapper">
                                        <a href="<?php echo $button_link ? esc_url($button_link) : 'javascript:;'; ?>" 
                                           class="get-started-btn" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                                           <?php echo esc_html($button_text); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if ($bottom_text): ?>
                                    <p class="bottom-line-text">
                                        <?php if ($bottom_icon): ?>
                                            <img src="<?php echo esc_url($bottom_icon); ?>" alt="icon" class="img-fluid">
                                        <?php endif; ?>
                                        <?php echo esc_html($bottom_text); ?>
                                    </p>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>