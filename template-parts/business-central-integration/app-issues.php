<section class="section business-trapped">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('cards_icon_links_heading'); ?>
            </h2>
            
            <?php $top_description = get_field('cards_with_icon_top_description'); ?>
            <?php if (!empty($top_description)) echo '<p class="section-content text-center">' . $top_description . '</p>'; ?>
        </div>
        <div class="row business-trapped-cards gy-4">
            <?php $cards = get_field('cards_icon_links_cards'); ?>
            <?php if (is_array($cards) && count($cards)) : ?>
                <?php foreach ($cards as $card) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card d-flex h-100">
                            <div class="svg-content">
                                <img src="<?php echo $card['icon']; ?>" <?php echo get_image_dimensions($card['icon']); ?>>
                            </div>
                            <div class="text-content">
                                <h3><?php echo $card['heading']; ?></h3>
                                <?php echo $card['description']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="fact">
            <ul>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business-central-integration/fact.webp" alt="fact" class="img-fluid">
                </li>
                <li>
                    <span class="fact-title">Fact</span>
                </li>
                <li>
                    <?php echo wpautop(get_field('cards_icon_links_description')); ?>
                </li>
            </ul>
        </div>

        <?php $cta = get_field('cards_icon_links_cta'); ?>
        <?php if (is_array($cta) && count($cta) && isset($cta['url'])) : ?>
            <div class="square pt-lg-4 mt-4 text-center">
                <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red align-items-center gap-2" <?php echo is_modal_link($cta['url']); ?>>
                    <?php echo $cta['title']; ?>
                </a>
            </div>
        <?php endif; ?>

    </div>
</section>