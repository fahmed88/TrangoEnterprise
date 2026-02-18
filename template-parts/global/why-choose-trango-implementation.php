<?php 
$class = isset($args['class']) ? $args['class'] : '';
?>


<section class="section why-choose-trango-implementation-section <?php echo $class;?>">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo get_field('why_choose_trango_implementation__section_title');?></h2>
            <p class="section-content text-center pt-0"><?php echo get_field('why_choose_trango_implementation__section_text');?></p>
        </div>

        <div class="our-track-record-main-wrapper">
            <div class="row g-4 gx-xl-5">
                <div class="col-lg-6">
                    <div class="why-choose-list-wrapper h-100">
                    <?php if( have_rows('why_choose_trango_implementation_lists__repeater') ): ?>
                        <ul>
                        <?php while( have_rows('why_choose_trango_implementation_lists__repeater') ): the_row();?>
                            <li>
                                <?php echo get_sub_field('why_choose_trango_implementation_lists__repeater__item');?>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="our-track-record-wrapper h-100">
                        <h3 class="our-track-record-title"><?php echo get_field('why_choose_trango_implementation__section__right_heading');?></h3>

                        <?php if( have_rows('why_choose_trango_implementation__section_counter__repeater') ): ?>
                        <div class="row g-3">
                        <?php while( have_rows('why_choose_trango_implementation__section_counter__repeater') ): the_row();?>
                            <div class="col-6">
                                <div class="track-box">
                                    <div class="track-record-content">
                                    <?php 
                                        $count_number = get_sub_field('why_choose_trango_implementation__section_counter__repeater_count_number'); 
                                        ?>
                                        <span class="<?php echo str_contains($count_number, '/') || str_contains($count_number, '.') ? 'no-iterate' : 'count'; ?>" data-counter-lim="<?php echo $count_number; ?>"><?php echo $count_number; ?></span>
                                        <span class="conter-icon"><?php echo get_sub_field('why_choose_trango_implementation__section_counter__repeater_count_sign');?></span>
                                        <p><?php echo get_sub_field('why_choose_trango_implementation__section_counter__repeater_count_text');?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php $button = get_field('why_choose_trango_implementation__section_title__cta');
        if($button) :
        ?>
        <div class="square text-center">
            <a href="<?php echo esc_url($button['url']);?>" class="square-pulse btn btn-red text-capitalize" <?php echo is_modal_link($button['url']); ?>>
                <?php echo $button['title'];?>
            </a>
        </div>
        <?php endif;?>
    </div>
</section>