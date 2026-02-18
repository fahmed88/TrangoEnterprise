<?php
$class = isset($args['class']) ? $args['class'] : '';
$row_class = isset($args['row_class']) ? $args['row_class'] : '';
?>

<section class="section florida-businesses-services <?php echo $class;?>">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('ss_section_title');?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('ss_section_text');?>
            </p>
        </div>
        <?php if( have_rows('ss_services_cards_repeater') ): ?>
            <div class="row gy-4 <?php echo $row_class ? $row_class : 'justify-content-center';?>">
            <?php while( have_rows('ss_services_cards_repeater') ): the_row(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="svg-cont">
                                <?php echo get_sub_field('ss_card_icon');?>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3><?php echo get_sub_field('ss_card_heading');?></h3>
                            <p>
                                <?php echo get_sub_field('ss_card_text');?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php $cta = get_field('ss_section_cta')?>
            <?php if($cta) : ?>
                <div class="square text-center mt-5">
                    <a href="<?php echo esc_url($cta['url'])?>" class="square-pulse btn btn-red"  data-bs-toggle="modal" data-bs-target="#next-project-modal">
                        <?php echo $cta['title']?>
                    </a>
                </div>
            <?php endif; ?>
            </div>
</section>