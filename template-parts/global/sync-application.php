<section class="animated-row section sync-application">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_field('dynamics_solutions_image'); ?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-7">
                    <div class="text-cont">
                        <h2><?php echo get_field('dynamics_solutions_title'); ?></h2>
                        <p>
                        <?php echo get_field('dynamics_solutions_content'); ?>
                        </p>
                        <ul>
                            <?php
                        if( have_rows('dynamics_solutions_icons1') ):
                        while ( have_rows('dynamics_solutions_icons1') ) : the_row();
                        $dynamics_solutions_images1= get_sub_field('dynamics_solutions_images1');
                        $dynamics_solutions_text1= get_sub_field('dynamics_solutions_text1');
                        ?>
                            <li>
                                <img src="<?php echo $dynamics_solutions_images1 ?>" class="img-fluid" alt="">
                                <p>
                                   <?php echo $dynamics_solutions_text1; ?>
                                </p> 
                            </li>
                            <?php endwhile; endif; ?>
                           
                        </ul>

                        <a href="<?php echo get_field('dynamics_solutions_button_link'); ?>" data-bs-toggle="modal" data-bs-target="#next-project-modal"><button type="button" class="btn btn-primary square-pulse" data-aos="fade-left" data-aos-duration="1000"><?php echo get_field('dynamics_solutions_button_text'); ?></button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>