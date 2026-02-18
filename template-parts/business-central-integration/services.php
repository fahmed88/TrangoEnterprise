<section class="section comprehensive-microsoft">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('comprehensive_services_heading'); ?>
            </h2>
        </div>

        <?php $services = get_field('comprehensive_services_list'); ?>
        <div class="row">
            <?php if (is_array($services) && count($services)) : ?>
                <?php foreach ($services as $service) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-parent">
                            <div class="card">
                                <div class="top-cont">
                                    <h3><?php echo $service['heading']; ?></h3>
                                    <span>
                                        <?php echo $service['icon']; ?>
                                    </span>
                                </div>
                                <div class="bottom-cont">
                                    <p><?php echo str_replace(PHP_EOL, '<br> ', $service['description']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>