<?php 
$class = isset($args['class']) ? $args['class'] : '';
$class2 = isset($args['class2']) ? $args['class2'] : '';
?>


<section class="section five-phase-implementation-process <?php echo $class; ?>">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo get_field('imp_process_v_section_heading');?></h2>
            <p class="section-content text-center"><?php echo get_field('imp_process_v_section_text');?></p>
        </div>

        <!-- five-phase-implementation-process -->
        <div class="phase-implementation-process-wrapper">
            <div class="row gy-1 gy-md-3 align-items-center">
                <div class="col-lg-4">
                    <div class="phase-implementation-process">
                        <?php if( have_rows('implementation_process_v__repeater') ): ?>
                        <div class="row gy-3 gy-lg-4 gy-xl-5 align-items-center">
                            <?php 
                            $card_left = 1;    
                            while( have_rows('implementation_process_v__repeater') ): the_row();?>
                            <?php if($card_left <= 3):?>
                            <div class="col-lg-12">
                                <div class="implementation-process-card ms-lg-auto <?php echo $class2; ?>">
                                    <?php if(get_sub_field('imp_process_v__process_card_title')):?>
                                        <h3 class="implementation-card-title"><?php echo get_sub_field('imp_process_v__process_card_title');?></h3>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('imp_process_v__process_card_subtitle')):?>
                                    <p class="implementation-card-subtitle"><?php echo get_sub_field('imp_process_v__process_card_subtitle');?></p>
                                    <?php endif; ?>
                                        <?php if(get_sub_field('imp_process_v__process_card_text')):?>
                                            <p class="implementation-card-content"><?php echo get_sub_field('imp_process_v__process_card_text');?></p>
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                            <?php endif;?>
                            <?php 
                            $card_left++;
                            endwhile; 
                            ?>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-lg-4">
                <?php if( have_rows('implementation_process_v__repeater') ): ?>
                    <div class="phasging-stages">
                    <?php 
                        $steps = 1;    
                        while( have_rows('implementation_process_v__repeater') ): the_row();?>
                            <div class="phasing-stage">
                                <span class="stages-number"><?php echo $steps < 10 ? '0' . $steps : $steps;?></span>
                            </div>
                            <?php 
                        $steps++;
                    endwhile; 
                    ?>
                    </div>
                <?php endif; ?>
                </div>
                <div class="col-lg-4">
                    <div class="phase-implementation-process">
                        <?php if( have_rows('implementation_process_v__repeater') ): ?>
                        <div class="row gy-3 gy-lg-4 gy-xl-5 align-items-center">
                            <?php 
                            $card_right = 1;    
                            while( have_rows('implementation_process_v__repeater') ): the_row();?>
                            <?php if($card_right >= 4 && $card_right <= 6):?>
                            <div class="col-lg-12 <?php echo $card_right == 4 ? 'mt-0' : '';?>">
                                <div class="implementation-process-card <?php echo $class2; ?>">
                                    <h3 class="implementation-card-title"><?php echo get_sub_field('imp_process_v__process_card_title');?></h3>
<<<<<<< HEAD
                                    <p class="implementation-card-subtitle"><?php echo get_sub_field('imp_process_v__process_card_subtitle');?></p>
                                    <p class="implementation-card-content"><?php echo get_sub_field('imp_process_v__process_card_text');?></p>
=======
									<?php endif;?>
									<?php if(get_sub_field('imp_process_v__process_card_subtitle')):?>
                                    <h3 class="implementation-card-subtitle"><?php echo get_sub_field('imp_process_v__process_card_subtitle');?></h3>
									<?php endif;?>
									<?php if(get_sub_field('imp_process_v__process_card_text')):?>

                                    <p class="implementation-card-content"><?php echo get_sub_field('imp_process_v__process_card_text');?></p>
									<?php endif;?>
>>>>>>> 6a6975e828b4d859fbde948b097eac97c9a19ada
                                </div>
                            </div>
                            <?php endif;?>
                            <?php 
                            $card_right++;
                            endwhile; 
                            ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $cta = get_field('implementation_process_v_cta'); ?>
        <?php if ($cta) : ?>
            <div class="square text-center mt-5 pt-lg-3">
                <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red align-items-center gap-2" <?php echo is_modal_link($cta['url']); ?>>
                    <?php echo $cta['title']; ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>