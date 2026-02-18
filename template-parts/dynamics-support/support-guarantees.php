<section class="section our-support-cards-section bg-gray">
    <div class="container">
        <div class="text-content text-center mb-4 mb-lg-0">
            <h2 class="section-title"><?php echo get_field('support_guarantees_heading'); ?></h2>
            <?php $description = get_field('support_guarantees_description'); ?>
            <?php if (!empty($description)) : ?>
                <p class="section-content text-center">
                   <?php echo $description; ?>
                </p>
            <?php endif; ?>
        </div>
        <?php $cards = get_field('support_guarantees_cards'); ?>

        <?php if (is_array($cards) && count($cards)) : ?>
            <div class="row gy-lg-0 gy-4">

                <?php foreach ($cards as $card) : ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="support-card-main">
                            <div class="icon">
                                <?php echo $card['icon']; ?>
                            </div>
                            <p class="card-title"><?php echo $card['text']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>