<section class="section transform-business-microsoft transform-business-integration <?php echo isset($args['classes']) ? $args['classes'] : ''; ?>">
    <div class="container">
        <div class="transform-business-wrapper">
            <div class="row gy-3 gy-lg-0 align-items-center">
                <div class="col-lg-5">
                    <div class="img-cont">
                        <img src="<?php echo get_field('transform_business_image'); ?>" class="img-fluid" alt="<?php echo strip_tags(get_field('transform_business_heading')); ?>" loading="lazy">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="transform-business-content-wrapper">
                        <h2 class="transform-card-title">
                            <?php echo get_field('transform_business_heading'); ?>
                        </h2>

                        <p class="business-description"><?php echo get_field('transform_business_description'); ?></p>

                        <div class="btns-wrapper">
                            <a href="<?php echo get_field('transform_business_cta_link'); ?>" class="shedule-business-btn" <?php echo is_modal_link(get_field('transform_business_cta_link')); ?>>
                                <?php echo get_field('transform_business_cta_label'); ?>
                            </a>
                        </div>

                        <?php $contact = get_field('transform_business_contact'); ?>
                        <ul class="call-now">
                            <li>
                                <span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business-central-integration/call.webp" alt="icon" class="img-fluid">
                                    Call Now</span>
                                <a href="tel:<?php echo $contact['call']; ?>"><?php echo $contact['call']; ?></a>
                            </li>
                            <li>
                                <span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business-central-integration/email.webp" alt="icon" class="img-fluid">
                                    Email Us</span>
                                <a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a>
                            </li>
                            <li>
                                <span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business-central-integration/chat.webp" alt="icon" class="img-fluid">
                                    Live Chat</span>
                                <a href="javascript:void(Tawk_API.toggle())">Available 24/7</a>
                            </li>
                        </ul>

                        <?php $highlights = get_field('transform_business_highlights'); ?>
                        <ul class="satisfaction">
                            <?php if (is_array($highlights) && count($highlights)) : ?>
                                <?php foreach ($highlights as $highlight) : ?>
                                    <li>
                                        <img src="<?php echo $highlight['icon']; ?>" alt="<?php echo strip_tags($highlight['text']); ?>" class="img-fluid">
                                        <?php echo $highlight['text']; ?>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>