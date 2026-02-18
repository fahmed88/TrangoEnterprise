<section class="section why-industry-leaders ms-support-performance-metrics pb-lg-4">
    <div class="container">
        <div class="text-cont text-center mb-4 mb-lg-0">
            <h2 class="section-title">
                <?php echo get_field('performance_metrics_heading'); ?>
            </h2>
            <?php $description = get_field('performance_metrics_description'); ?>

            <?php if (!empty($description)) : ?>
                <p class="section-content text-center">
                    <?php echo $description; ?>
                </p>
            <?php endif; ?>
        </div>

        <?php $cards = get_field('performance_metrics_cards'); ?>

        <?php if (is_array($cards) && count($cards)) : ?>
            <ul class="card-item">

                <?php foreach ($cards as $card) : ?>
                    <li>
                       <div class="card">
                            <div class="left">
                                <?php echo $card['icon']; ?>
                            </div>
                           <div class="right">
                            <span class="title d-block"><?php echo $card['heading']; ?></span>
                            <p><?php echo $card['caption']; ?></p>
                        </div>
                       </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            
        <?php endif; ?>
    </div>
</section>