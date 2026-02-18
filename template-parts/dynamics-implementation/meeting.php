<section class="section transform-business-microsoft bg-gray">
    <div class="container">
        <div class="transform-business-wrapper">
            <div class="row gy-3 gy-lg-0 align-items-center align-items-lg-start align-items-xxl-start">
                <div class="col-lg-5">
                    <div class="img-cont">
                        <img src="<?php echo get_field('meeting_image'); ?>" class="img-fluid" alt="<?php echo get_field('meeting_heading'); ?>" <?php echo get_image_dimensions(get_field('meeting_image'), 'url', false); ?> loading="lazy">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="transform-business-content-wrapper">
                        <h2 class="transform-card-title"><?php echo get_field('meeting_heading'); ?></h2>

                        <p class="business-description"><?php echo get_field('meeting_description'); ?></p>

                        <?php $items = get_field('highlights'); ?>
                        <ul class="transform-business-features">
                            <?php if (is_array($items) && count($items)) : ?>
                                <?php foreach ($items as $item) : ?>
                                    <li><?php echo $item['item']; ?></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>

                        <div class="btns-wrapper">
                            <?php
                                $cta_1 = get_field('meeting_cta1');
                                if (is_array($cta_1) && count($cta_1) && isset($cta_1['url'])) echo '<a href="' . $cta_1['url'] . '" class="square-pulse shedule-business-btn" ' . is_modal_link($cta_1['url']) . '>' . $cta_1['title'] . '</a>';
                                $cta_2 = get_field('meeting_cta2');
                                if (is_array($cta_2) && count($cta_2) && isset($cta_2['url'])) echo '<a href="' . $cta_2['url'] . '" class="erp-guide-btn" ' . is_modal_link($cta_2['url']) . '>' . $cta_2['title'] . '</a>';
                            ?>
                        </div>

                        <p class="call-erp-experts"><?php echo get_field('meeting_contact'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>