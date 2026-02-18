<?php 
$class = isset($args['class']) ? $args['class'] : '';
$card_class = isset($args['classes']) && $args['classes'] == 'bg-gray' ? 'bg-transparent' : ''; 
$row_class = isset($args['row_class']) ? $args['row_class'] : '';
?>
<section class="section advanced-delivery-app-cards bg-gray <?php echo $class?>">
<div class="container">
    <div class="text-cont text-center">
        <h2 class="section-title">
            <?php echo get_field('solutions_heading'); ?>
        </h2>
        <p class="section-content text-center">
            <?php echo get_field('solutions_description'); ?>
        </p>
    </div>

    <div class="cards-parent-wrapper mt-4">
        <div class="row <?php echo $row_class;?>">
            <?php $solutions = get_field('solutions_list'); ?>

            <?php if (is_array($solutions)) : ?>
                <?php foreach ($solutions as $solution) : ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card bg-transparent" data-aos="fade-up" data-aos-duration="1000">
                            <div class="card-header">
                                <h3 class="card-title"><?php echo $solution['heading']; ?></h3>
                                <div class="svg-image-wrapper">
                                    <?php echo $solution['iconss']; ?>                                                                  
                                    <?php if($solution['icon']) : ?>
                                        <img src="<?php echo $solution['icon']?>" alt="icon" class="img-fluid">
                                    <?php endif; ?>                                                                  
                                </div>
                            </div>
                            <div class="card-description">
                                <p><?php echo $solution['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <?php $cta = get_field('solutions_cta'); ?>
        <?php if (is_array($cta)) : ?>
            <div class="square mt-3 mb-3 mb-lg-0 mt-lg-5 text-center">
                <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red align-items-center gap-2" <?php echo is_modal_link($cta['url']); ?> data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo $cta['title']; ?>
                </a>
            </div>
        <?php endif; ?>

    </div>
</div>
</section>