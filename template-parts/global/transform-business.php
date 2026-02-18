<section class="section transform-business-microsoft transform-business-integration bg-white">
    <div class="container">
        <div class="transform-business-wrapper">
            <div class="row gy-3 gy-lg-0 align-items-center align-items-lg-start align-items-xxl-start">
                <div class="col-lg-5">
                    <div class="img-cont">
                        <img src="<?php echo get_field('transform_business_image'); ?>" class="img-fluid" alt="Transform Business" loading="lazy">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="transform-business-content-wrapper">
                        <h2 class="transform-card-title">
                           <?php echo get_field('transform_business_heading'); ?>
                        </h2>

                        <p class="business-description"><?php echo get_field('transform_business_description'); ?></p>


                        <div class="btns-wrapper">
                            <?php $cta_transform = get_field('transform_business_cta_link'); ?>
                            <a href="<?php echo $cta_transform; ?>" class="shedule-business-btn" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                                <?php echo get_field('transform_business_cta_label'); ?>
                            </a>
                        </div>

                        <ul class="call-now">
                             <?php
$contact_group = get_field('transform_business_contact');
if ($contact_group):
    // Call Group
    $call = $contact_group['call'];
    $email = $contact_group['email'];
    $chat = $contact_group['chat'];
    ?>
                            <li>
                                <span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business-central-integration/call.webp" alt="icon" class="img-fluid">
                                    Call Now</span>
                                <a href="tel:<?php echo $call; ?>"><?php echo $call; ?></a>
                            </li>
                            <li>
                                <span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business-central-integration/email.webp" alt="icon" class="img-fluid">
                                    Email Us</span>
                                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                            </li>
                            <li>
                                <span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business-central-integration/chat.webp" alt="icon" class="img-fluid">
                                    Live Chat</span>
                                <a href="javascript:void(Tawk_API.toggle())"><?php echo $chat; ?></a>
                            </li>
                            
                            <?php endif; ?>
                           
                        </ul>

                        <ul class="satisfaction">
                             <?php
                       
                         if( have_rows('transform_business_highlights') ): ?>
                <?php while( have_rows('transform_business_highlights') ): the_row(); 
            $icon_transform = get_sub_field('icon');
            $text_transform  = get_sub_field('text');
          
            
        ?>
                            <li>
                                <img src="<?php echo $icon_transform; ?>" alt="icon" class="img-fluid">
                               <?php echo $text_transform; ?>
                               
                            </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>