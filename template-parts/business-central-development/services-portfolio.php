<section class="section microsoft-services-portfolio">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('dev_services_heading'); ?>
            </h2>
            <?php $description = get_field('dev_services_description'); ?>
            <?php if (!empty($description)) echo '<p class="section-content text-center">' . $description . '</p>'; ?>
        </div>


        <!-- business central development cards -->
        <div class="business-central-development-wrapper">
            <?php $services = get_field('dev_services'); ?>
            <?php if (is_array($services) && count($services)) : ?>
                <div class="row gy-4 justify-content-center">
                    <?php foreach ($services as $service) : ?>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="business-central-development-card">
                                <div class="card-header-wrapper">
                                    <h3 class="card-title"><?php echo $service['heading']; ?></h3>
        
                                    <div class="svg-wrapper">
                                        <?php echo $service['icon']; ?>
                                    </div>
                                </div>
        
                                <div class="card-body-wrapper">
                                    <?php echo $service['content']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php $cta = get_field('dev_services_cta'); ?>
            <?php if (is_array($cta) && count($cta) && isset($cta['url'])) : ?>
                <div class="square mt-4 mt-lg-5 text-center" data-aos-duration="1500" data-aos="fade-up">
                    <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red align-items-center gap-2" <?php echo is_modal_link($cta['url']); ?>>
                        <?php echo $cta['title']; ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>