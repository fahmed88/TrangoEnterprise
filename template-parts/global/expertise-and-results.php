<?php 
$class = isset($args['class']) ? $args['class'] : '';
?>

<section class="section manufacturing-success-stories <?php echo $class; ?>">
    <div class="container position-relative">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo get_field('ms_expertise_results_section_title');?> </h2>
            <p class="section-content text-center"><?php echo get_field('ms_expertise_results_section_text');?></p>
        </div>
        <?php if( have_rows('ms_expertise_results__cards') ): ?>
        <div class="owl-carousel owl-theme manufacturing-success-stories-carousel">
            <?php while( have_rows('ms_expertise_results__cards') ): the_row();?>
                <div class="item">
                    <div class="card h-100">
                        <div class="img-content">
                            <img src="<?php echo get_sub_field('ms_expertise_results__card_icon');?>" alt="..." class="img-fluid">
                        </div>
                        <div class="text-content">
                            <h3> <?php echo get_sub_field('ms_expertise_results__card_title');?></h3>
                            <?php if( have_rows('ms_expertise_results__card_list') ): ?>
                            <?php while( have_rows('ms_expertise_results__card_list') ): the_row();?>

                            <div class="efficiency-parent">
                                <div class="efficiency">
                                    <div class="left">
                                        <div class="txt"><?php echo get_sub_field('ms_expertise_results__list_item');?></div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            
                            <p><?php echo get_sub_field('ms_expertise_results__card_text');?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <?php $cta = get_field('ms_expertise_results_section_cta'); ?>
        <?php if ($cta) : ?>
            <div class="square text-center mt-5 pt-lg-3">
                <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red align-items-center gap-2" <?php echo is_modal_link($cta['url']); ?>>
                    <?php echo $cta['title']; ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>