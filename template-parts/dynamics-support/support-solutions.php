<section class="section ms-dynamics-support-card-section" id="ms-dynamics-support-card-section">
    <div class="container">
        <div class="text-content  text-center mb-4 mb-lg-0">
            <h2 class="section-title">
                <?php echo get_field('comprehensive_support_heading'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('comprehensive_support_description'); ?>
            </p>
        </div>

        <?php $cards = get_field('comprehensive_support_cards'); ?>
        <?php if (is_array($cards) && count($cards)) : ?>
            
            <div class="row gy-4 gy-xl-0 justify-content-center">
                <?php foreach ($cards as $card) : ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="ms-support-card">
                            <div class="icon">
                                <?php echo $card['icon']; ?>
                            </div>
                            <div class="text-box">
                                <h3 class="title"><?php echo $card['heading']; ?></h3>
                                <?php echo $card['content']; ?>
                                <?php $cta = $card['cta']; ?>
                                <?php if (is_array($cta)) : ?>
                                    <a href="<?php echo $cta['url']; ?>" class="ms-support-label" <?php echo is_modal_link($cta['url']); ?>>
                                        <?php echo $cta['title']; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        <?php endif; ?>

    </div>
</section>