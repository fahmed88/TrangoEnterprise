<section class="section dynamics-connector-features business-central-connectors-sec pb-lg-0">
    
    <div class="container">
        <div class="text-cont">
            <h2 class="section-title text-center mb-0"><?php echo get_field('alternative_columns_heading'); ?></h2>
        </div>
    </div>

    <?php $rows = get_field('alternative_columns_rows'); ?>
    <?php if (is_array($rows)) : ?>
        <?php $odd_row = true; ?>
        <?php foreach ($rows as $row) : ?>

            <div class="data-automation-wrapper <?php echo !$odd_row ? 'data-inventory-wraper' : ''; ?>">
                <div class="data-automation-child-wrapper">
                    <div class="marquee-text-wrapper">
                        <marquee class="data-sync-text" <?php echo $odd_row ? 'direction="right"' : ''; ?>><?php echo $row['marquee']; ?></marquee>
                    </div>
                    <div class="container">
                        <div class="row gy-3 align-items-center <?php echo !$odd_row ? '' : 'flex-lg-row-reverse'; ?>">
                            <div class="col-lg-6 col-xl-7">
                                <div class="img-cont">
                                    <img src="<?php echo $row['image']; ?>" loading="lazy" class="img-fluid" <?php echo get_image_dimensions($row['image']); ?>>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="features-content-wrapper">
                                    <h3 class="features-title"><?php echo $row['heading']; ?></h3>
                                    <?php echo $row['content']; ?>
                                    <?php if (is_array($row['cta'])) : ?>
                                        <div class="square mt-3 mt-lg-5" data-aos-duration="1500" data-aos="fade-up">
                                            <a href="<?php echo $row['cta']['url']; ?>" class="square-pulse btn btn-red" <?php echo is_modal_link($row['cta']['url']); ?>>
                                                <?php echo $row['cta']['title']; ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $odd_row = $odd_row ? false : true; ?>
        <?php endforeach; ?>
    <?php endif; ?>

</section>