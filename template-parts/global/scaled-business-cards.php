<?php 
$class = isset($args['class']) ? $args['class'] : '';
?>
<section class="section perfectly-scaled-every-business <?php echo $class;?>">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('scaled_business_cards_section__title');?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('scaled_business_cards_section__text');?>
            </p>
        </div>
        <?php if( have_rows('scaled_business_section_cards__repeater') ): ?>
        <div class="perfectly-scaled-cards-wrapper">
            <div class="row gy-4">
            <?php while( have_rows('scaled_business_section_cards__repeater') ): the_row(); ?>
                <div class="col-md-6 col-xl-3">
                    <div class="perfectly-scaled-card">
                        <span class="perfectly-scaled-price-title"><?php echo get_sub_field('scaled_business_section_repeater__card_heading1');?></span>
                        <p class="revenue-text"><?php echo get_sub_field('scaled_business_section_repeater__card_text_1');?></p>

                        <h3 class="perfectly-scaled-card-title"><?php echo get_sub_field('scaled_business_section_repeater__card_heading_2');?></h3>
                        <p class="perfectly-scaled-employess"><?php echo get_sub_field('scaled_business_section_repeater__card_text_2');?></p>

                        <?php if( have_rows('scaled_business_section__card_lists_repeater') ): ?>
                        <ul class="perfectly-scaled-card-list">
                        <?php while( have_rows('scaled_business_section__card_lists_repeater') ): the_row(); ?>
                            <li><?php echo get_sub_field('scaled_business_section__card_list_item');?></li>
                        <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>

                        <?php $button = get_sub_field('scaled_business_section_repeater__card_button');?>
                        <div class="square text-center">
                            <a href="<?php echo esc_url($button['url'])?>" class="square-pulse btn btn-red text-capitalize" <?php echo is_modal_link($button['url']); ?>>
                                <?php echo $button['title'];?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>