<?php 
$class = isset($args['class']) ? $args['class'] : '';
$row_class = isset($args['row_class']) ? $args['row_class'] : '';
?>
<section class="section dynamic-365-solutions erp-implementation-solutions <?php echo $class?>">
<div class="container">
    <div class="text-cont text-center">
        <h2 class="section-title">
            <?php echo get_field('transform_erp_cards_section__title'); ?>
        </h2>
        <p class="section-content text-center">
            <?php echo get_field('transform_erp_cards_section__text'); ?>
        </p>
    </div>

    <?php if( have_rows('transform_erp_cards__repeater') ): ?>
    <div class="row <?php echo $row_class;?>">
        <?php while( have_rows('transform_erp_cards__repeater') ): the_row(); ?>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo get_sub_field('transform_erp_card__heading');?></h3>
                    </div>
                    <div class="card-body">
                        <?php 
                        $card_body_content = get_sub_field('transform_erp_card_body__content'); 
                        echo (str_contains($card_body_content, '<ul') || str_contains($card_body_content, '<ol')) 
                            ? '<div class="key-features">' . $card_body_content . '</div>' 
                            : $card_body_content;
                        ?>
                    </div>
                    <?php if(get_sub_field('transform_erp_card__footer')) : ?>
                    <div class="card-footer">
                        <p><?php echo get_sub_field('transform_erp_card__footer');?></p>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>

    <?php $cta = get_field('transform_erp_cards_section__cta'); ?>
    <?php if ($cta) : ?>
        <div class="square mt-3 mb-3 mb-lg-0 mt-lg-5 text-center">
            <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red align-items-center gap-2" <?php echo is_modal_link($cta['url']); ?> data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo $cta['title']; ?>
            </a>
        </div>
    <?php endif; ?>

</div>
</section>