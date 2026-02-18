<?php
$class = isset($args['class']) ? $args['class'] : '';
?>

<section class="section start-your-journey-cta">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-cont">
                    <h2 class="section-title"><?php echo get_field('all_in_one_cta_heading');?></h2>
                    <p class="section-content mb-2"><?php echo get_field('all_in_one_cta_text');?></p>
                    <?php $cta = get_field('all_in_one_cta_button'); ?>
                    <?php if (is_array($cta)) : ?>
                        <div class="square">
                            <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red align-items-center gap-2" <?php echo is_modal_link($cta['url']); ?> data-bs-toggle="modal" data-bs-target="#next-project-modal">
                                <?php echo $cta['title']; ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

