<section class="animated-row section portfolio-slides-full-sec pb-0">
    <div class="container">
        <div class="text-cont">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title" data-aos="fade-left" data-aos-duration="1500">
                    <?php echo get_field('portfolio_slider_heading'); ?>
                    </h2>
                </div>
                <div class="col-md-6">
                    <p class="section-content mb-0">
                        <?php echo get_field('portfolio_slider_description'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="sec-wraper">
        <div class="portfolio-slider-full owl-carousel owl-theme">
            <?php $slides = get_field('portolio-slides'); ?>

            <?php if (is_array($slides)) : ?>
                <?php foreach ($slides as $slide) : ?>
                    <div class="item <?php echo $slide['classes']; ?>">
                        <div class="container p-0">
                            <div class="row align-items-center">
                                <div class="col-lg-6 p-lg-0">
                                    <div class="bg-img-sec">
                                        <img src="<?php echo $slide['image']; ?>" class="img-fluid" alt="<?php echo strip_tags( $slide['heading'] ); ?>" loading="lazy">
                                    </div>
                                </div>
        
                                <div class="col-lg-6">
                                    <div class="txt_sec_area ahyon-text">
                                        <h3 class="title">
                                            <?php echo $slide['heading']; ?>
                                        </h3>
                                        <div class="para_sec">
                                            <?php echo $slide['content']; ?>
                                        </div>
        
                                        <?php if (is_array($slide['highlights']) && count($slide['highlights'])) : ?>
                                            <div class="counter-box">
                                                <?php foreach ($slide['highlights'] as $highlight) : $highlight = $highlight['highlight']; ?>
                                                    <div class="counter">
                                                        <p><?php echo $highlight; ?></p>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                <?php endforeach; ?>                
            <?php endif; ?>

        </div>

        <?php if (is_array($slides) && count($slides) > 1) '<div id="slides-counter" class="owl-counter"></div>'; ?>
    </div>
</section>