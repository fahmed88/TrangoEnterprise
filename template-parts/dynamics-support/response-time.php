<section class="section response-time-section bg-gray">
    <div class="container">
        <div class="text-content text-center mb-4 mb-lg-0">
            <h2 class="section-title"><?php echo get_field('response_time_heading'); ?></h2>
            <p class="section-content text-center">
                <?php echo get_field('response_time_description'); ?>
            </p>
        </div>
        <?php echo get_field('response_time_list'); ?>


        <?php $cta = get_field('response_time_cta'); ?>
        <?php if (is_array($cta) && count($cta) && isset($cta['url'])) : ?>
            <div class="square text-center pt-lg-3 mt-5">
                <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red align-items-center gap-2" <?php echo is_modal_link($cta['url']); ?>>
                    <?php echo $cta['title']; ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>