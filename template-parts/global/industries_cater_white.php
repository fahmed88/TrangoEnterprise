<section class="animated-row section industries-we-cater bg-white">
        <div class="container">
            <div class="row mb-lg-3">
                <div class="col-lg-6 col-md-12">
                    <div class="text-cont" data-aos="fade-right" data-aos-duration="1500">
                        <h2 class="section-title">
                           <?php echo get_field('industries_cater_heading'); ?>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="text-cont" data-aos="fade-left" data-aos-duration="1500">
                        <p class="section-content">
                        <?php echo get_field('industries_cater_content'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <ul class="cater-list">
            <?php
                $i=1;
                        if( have_rows('industries_cater_repeater') ):
                        while ( have_rows('industries_cater_repeater') ) : the_row(); 
                        $industries_cater_images= get_sub_field('industries_cater_images');
                        $industries_cater_text= get_sub_field('industries_cater_text');
                        $industries_cater_link= get_sub_field('industries_cater_link');
                        ?>
                <li data-aos="zoom-in" data-aos-duration="1500">
                    <div class="img-content">
                        <img src="<?php echo $industries_cater_images; ?>" alt="industries" class="img-fluid">
                    </div>
                    <div class="text-content">
                        <h3><?php echo $industries_cater_text; ?></h3>
                    </div>
                </li>
                <?php endwhile; endif; ?>
               
            </ul>
        </div>
    </section>