<section class="section business-central-integration-banner <?php echo isset($args['class']) && $args['class'] ? $args['class'] : ''; ?> no-lzl-section">
    <div class="container">
        <div class="row align-items-center mt-lg-3 gx-0">
            <div class="col-lg-6 <?php echo isset($args['col-class'][0]) && $args['col-class'][0] ? $args['col-class'][0] : 'col-xxl-6'; ?>">
                <div class="text-cont">
                    <?php if (get_field('banner_top_subheadig')) : ?>
                        <h1 class="banner-subheading"><?php echo get_field('banner_top_subheadig');?></h1>
                    <?php endif; ?>
                    <h2 class="banner-title">
                        <?php echo get_field('banner_heading'); ?>
                    </h2>
                    <?php echo get_field('banner_description'); ?>
                    <div class="btns justify-content-lg-start">
                        <?php $cta_1 = get_field('banner_cta_1'); ?>
                        <?php if (is_array($cta_1) && count($cta_1) && isset($cta_1['url'])) : ?>
                            <?php
                                $cta_1_label = get_field('cta_1_label');
                                $cta_1_label = !empty($cta_1_label) ? $cta_1_label : $cta_1['title'];
                            ?>
                            <a class="square-pulse btn-red" href="<?php echo $cta_1['url']; ?>" <?php echo is_modal_link($cta_1['url']); ?>><?php echo $cta_1_label; ?></a>
                        <?php endif; ?>

                        <?php $cta_2 = get_field('banner_cta_2'); ?>
                        <?php if (is_array($cta_2) && count($cta_2) && isset($cta_2['url'])) echo '<a class="btn-pink" href="' . $cta_2['url'] . '" ' . is_modal_link($cta_2['url']) . '>' . $cta_2['title'] . '</a>'; ?>
                    </div>
                    <span class="limited-offer">
                        <?php echo get_field('banner_contact'); ?>
                    </span>
                    <?php
                    $baners = [
        'row_class'      =>'justify-content-lg-center justify-content-lg-start',
    ]; ?>
                    <?php get_template_part('template-parts/global/5-stars-badge','',$baners);?>
                </div>
            </div>
            <div class="col-lg-6 <?php echo isset($args['col-class'][1]) && $args['col-class'][1] ? $args['col-class'][1] : 'col-xxl-6'; ?>">
                <div class="img-cont text-center">
                    <?php
                    $desktop_banner_image = get_field('banner_image');
                    $mobile_banner_image = get_field('banner__mobile_image');

                    if($desktop_banner_image || $mobile_banner_image ): ?>
                    <picture class="no-lazy">
                        <source media="(max-width:767px)" srcset="<?php echo $mobile_banner_image ? $mobile_banner_image : $desktop_banner_image; ?>">
                        <img src="<?php echo $desktop_banner_image; ?>" alt="<?php echo wp_strip_all_tags(get_field('banner_heading'))?>" loading="eager" fetchpriority="high" decoding="async" class="img-fluid no-lazy">
                    </picture>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>