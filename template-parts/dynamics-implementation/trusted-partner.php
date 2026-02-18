<section class="section trusted-ms-dynamics-section banner-secondry-bg">
    <div class="container">
        <div class="text-cont text-center mb-4">
            <h2 class="section-title">
                <?php echo get_field('review_platforms_heading'); ?>
            </h2>
        </div>
        <?php $logos = get_field('review_platforms_logos'); ?>
        <?php if (is_array($logos) && count($logos)) : ?>
            <div class="ms-dynamics-logos">
                <div class="row pt-4 mb-4">
                    <?php foreach ($logos as $logo) : ?>
                        <?php $logo = $logo['image']; ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="img-wrapper bg-white">
                                <img src="<?php echo $logo; ?>" class="img-fluid" <?php echo get_image_dimensions($logo); ?>>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php $summary = get_field('review_platforms_summary'); ?>
        <?php if (is_array($summary)) : ?>
            <div class="trusted-ms-content-wraper">
                <div class="row align-items-center gx-lg-5">
                    <div class="col-lg-6">
                        <div class="ms-review-box">
                            <div class="img-box">
                                <img src="<?php echo $summary['image']; ?>" alt="<?php echo $summary['text']; ?>" class="img-fluid">
                            </div>
                            <p class="ms-title mb-0"><?php echo $summary['text']; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php $features = get_field('review_platforms_features'); ?>
                        <ul class="ms-icons-lists">
                                <?php foreach ($features as $feature) : ?>
                                    <li>
                                        <div class="icon">
                                            <img src="<?php echo $feature['icon']; ?>" alt="<?php echo $feature['heading']; ?>" class="img-fluid">
                                        </div>
                                        <div class="text-box">
                                            <span class="number"><?php echo $feature['heading']; ?></span>
                                            <p><?php echo $feature['description']; ?></p>
                                        </div>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    </div>
</section>