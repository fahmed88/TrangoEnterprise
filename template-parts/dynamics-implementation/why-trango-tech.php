<section class="section why-partner-trango-microsoft bg-gray pb-lg-0">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('why_tt_heading'); ?>
            </h2>

            <p class="section-content"><?php echo get_field('why_tt_description'); ?></p>
        </div>

        <?php $reasons = get_field('why_tt_reasons'); ?>
        <div class="why-partner-trango-wrapper">
            <div class="row">
                <?php if (is_array($reasons) && count($reasons)) : ?>
                    <?php foreach ($reasons as $reason) : ?>
                        <div class="col-lg-6">
                            <div class="why-partner-trango-card">
                                <div class="svg-wrapper">
                                    <?php echo $reason['icon']; ?>
                                </div>
                                <h3 class="card-title"><?php echo $reason['heading']; ?></h3>
                    
                                <p class="card-description">
                                    <?php echo $reason['description']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>