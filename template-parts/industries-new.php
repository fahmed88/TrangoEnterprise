 <?php 
 $class = isset($args['class']) ? $args['class'] : '';
 $text_alignment = isset($args['text_alignment']) ? $args['text_alignment'] : '';
 ?>
 
 <section class="section ms-industries-carousels-section <?php echo $class?>">
    <div class="container">
        <div class="text-cont mb-lg-0 mb-4">
            <h2 class="section-title <?php echo $text_alignment;?>"><?php echo get_field('industries_heading'); ?></h2>
            <p class="section-content pt-lg-0 <?php echo $text_alignment;?>"><?php echo get_field('industries_description'); ?></p>
        </div>
    </div>
    <div class="carousel-wraper">
        <div class="ms-industries-carousel owl-carousel owl-theme">
		<?php $cards = get_field('cards'); ?>
            <?php if (is_array($cards) && count($cards)) : ?>
                <?php foreach ($cards as $card) : ?>
            <div class="itme">
                <div class="ms-indus-card">
                    <div class="featured-image">
                        <img src="<?php echo $card['image']; ?>" alt="<?php echo strip_tags($card['heading']); ?>" class="img-fluid">
                    </div>
                    <div class="text-box">
                        <?php echo $card['heading'] ? '<h3 class="indus-title">' . $card['heading'] .'</h3>' : '' ?>
                        
                        <?php echo $card['description'] ? '<p class="indus-desc">' . $card['description'] .'</p>' : '' ?>

                    </div>
                    <ul class="bottom-text-box">
					<?php foreach ($card['highlights'] as $highlight) : ?>
                        <li>
                            <?php echo $highlight['figures'] ? '<span class="percent-num d-block">' . $highlight['figures'] .'</span>' : '' ?>
                            <?php echo $highlight['caption'] ? '<p>' . $highlight['caption'] .'</p>' : '' ?>
                        </li>
						 <?php endforeach; ?>
                       
                    </ul>
                </div>
            </div>
			 <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php if(get_field('industries_button_text')): ?>
    <div class="square text-center">
        <a href="<?php echo get_field('industries_button_link'); ?>" class="square-pulse btn btn-red" data-bs-toggle="modal" data-bs-target="#next-project-modal">
            <?php echo get_field('industries_button_text'); ?>
        </a>
    </div>
    <?php endif; ?>
 </section>