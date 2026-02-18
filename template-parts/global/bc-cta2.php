<?php
$class = isset($args['class']) ? $args['class'] : '';
?>

 <section class="section bc-cta-section <?php echo $class;?>">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-lg-7">
                <div class="text-cont">
                    <h2 class="section-title text-white fw-bold">
                        <?php the_field('bc_central_cta_heading2');?>
                    </h2>
                    <div class="square pt-lg-3 mt-4">
                        <a href="javascript:;" class="square-pulse btn btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                        <?php the_field('bc_central_cta_button_text2');?>
                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.02563 11.1938L6.02563 6.19385L1.02563 1.19385" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.02563 11.1938L12.0256 6.19385L7.02563 1.19385" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
