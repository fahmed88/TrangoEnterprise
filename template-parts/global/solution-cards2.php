<?php 
$class = isset($args['class']) ? $args['class'] : '';
$card_class = isset($args['classes']) && $args['classes'] == 'bg-gray' ? 'bg-transparent' : ''; 
?>
<section class="section advanced-delivery-app-cards advanced-customization-services-cards <?php echo $class; ?>">
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
            <div class="row gx-0">
			 <?php $solutions = get_field('solutions_list'); ?>

            <?php if (is_array($solutions)) : ?>
                <?php foreach ($solutions as $solution) : ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card bg-transparent">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo $solution['heading']; ?></h3>
                            <div class="svg-image-wrapper">
                               <?php echo $solution['iconss']; ?> 
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
        </div>
		<?php $cta = get_field('solutions_cta'); ?>
		<?php if (is_array($cta)) : ?>
        <div class="square text-center mt-5">
            <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo $cta['title']; ?>
            </a>
        </div>
		<?php endif; ?>
    </div>
</section>