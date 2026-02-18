<?php 
$class = isset($args['class']) ? $args['class'] : '';
?>

<section class="section trusted-microsoft-partner <?php echo $class; ?>">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php the_field('trusted_ms_partner_section_title'); ?>
            </h2>
            <p class="section-content text-center pb-0 mb-0">
                <?php the_field('trusted_ms_partner_section_content'); ?>
            </p>
        </div>
    </div>
    <div class="container-fluid px-lg-0">
        <div class="owl-carousel owl-theme trusted-microsoft-partner-slider">
            <?php if(have_rows('trusted_ms_partner_slider_items')): ?>
                <?php while(have_rows('trusted_ms_partner_slider_items')): the_row(); ?>
                    <div class="item">
                        <div class="row align-items-center h-100">
                            <div class="col-md-6">
                                <div class="left-wrapper">
                                    <?php echo get_sub_field('trusted_ms_partner_left_svg'); ?>
                                    <h3><?php the_sub_field('trusted_ms_partner_left_title'); ?></h3>
                                </div>
                            </div>
                            <div class="col-md-6 h-100">
                                <div class="right-wrapper">
                                    <ul>
                                        <?php if(have_rows('trusted_ms_partner_right_list')): ?>
                                            <?php while(have_rows('trusted_ms_partner_right_list')): the_row(); ?>
                                                <li>
                                                    <?php echo get_sub_field('trusted_ms_partner_list_svg'); ?>
                                                    <?php the_sub_field('trusted_ms_partner_list_text'); ?>
                                                </li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php $cta = get_field('trusted_ms_partner_cta_button'); ?>
        <?php if ($cta) : ?>
            <div class="square text-center">
                <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red align-items-center gap-2" <?php echo is_modal_link($cta['url']); ?>>
                    <?php echo $cta['title']; ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>