<section class="section ms-industries-carousels-section bg-white">
    <div class="container">
        <div class="text-cont mb-lg-0 mb-4">
            <h2 class="section-title"><?php echo get_field('industries_heading'); ?></h2>
            <p class="section-content pt-lg-0"><?php echo get_field('industries_description'); ?></p>
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
                                <h3 class="indus-title"><?php echo $card['heading']; ?></h3>
                                <p class="indus-desc">
                                    <?php echo $card['description']; ?>
                                </p>
       
                                <div class="row">
                                    <?php foreach ($card['highlights'] as $highlight) : ?>
                                        <div class="col-4">
                                            <div class="count-box">
                                                <span><?php echo $highlight['figures']; ?></span>
                                                <p><?php echo $highlight['caption']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="square text-center">
        <a href="<?php echo get_field('industries_button_link'); ?>" class="square-pulse btn btn-red" data-bs-toggle="modal" data-bs-target="#next-project-modal">
          <?php echo get_field('industries_button_text'); ?>
        </a>
    </div>
</section>