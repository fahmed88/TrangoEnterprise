<section class="our-tech-stack-solutions ms-tech-stack-solution section pb-5 pb-lg-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-cont text-center">
                    <h2 class="section-title mb-3">
                        <?php echo get_field('tech_stack_heading'); ?>
                    </h2>
                    <p class="text-center section-content">
                        <?php echo get_field('tech_stack_content'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php $tabs = get_field('tech_stack_tab_for_logo'); ?>

    <div class="bottom-area">
        <div class="container">
            <div class="responsive-tabs p-0">
                <div class="owl-carousel owl-theme tab-slider nav nav-tabs " role="tablist">
                    <?php $first = true; ?>
                    <?php foreach ($tabs as $tab) : ?>
                        <?php $tab_slug = sanitize_title($tab['tab_name']); ?>
                        <div class="item nav-item">
                            <a id="tab-<?php echo $tab_slug; ?>" href="#pos-<?php echo $tab_slug; ?>" class="nav-link <?php echo $first ? 'active' : ''; ?>" data-bs-toggle="tab"><?php echo $tab['tab_name']; ?></a>
                        </div>
                        <?php $first = false; ?>
                    <?php endforeach; ?>
                </div>

                <div id="content" class="tab-content" role="tablist">

                    <?php $first = true; ?>
                    <?php foreach ($tabs as $tab) : ?>
                        <?php $tab_slug = sanitize_title($tab['tab_name']); ?>
                        <div id="pos-<?php echo $tab_slug; ?>" class="card tab-pane fade <?php echo $first ? 'show active' : ''; ?>" aria-labelledby="tab-<?php echo $tab['tab_name']; ?>">
                            <div class="card-header" role="tab" id="heading-<?php echo $tab_slug; ?>">
                                <div class="mb-0 mobile-accordion-btn">
                                    <a data-bs-toggle="collapse" href="#pos-<?php echo $tab_slug; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $tab_slug; ?>">
                                        <?php echo $tab['tab_name']; ?>
                                    </a>
                                </div>
                            </div>
                            <div id="pos-<?php echo $tab_slug; ?>" class="collapse <?php echo $first ? 'show' : ''; ?>" data-bs-parent="#content" role="tabpanel"
                                aria-labelledby="heading-<?php echo $tab_slug; ?>">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3><?php echo $tab['tab_name']; ?></h3>
                                            </div>
                                        </div>
        
                                        <?php $logos = $tab['boxes_repeater']; ?>
                                        <div class="techlist-parent">
                                            <div class="techlist-child">
                                                <ul>
                                                    <?php if (is_array($logos)) : ?>
                                                        <?php foreach ($logos as $logo) : ?>
                                                            <li>
                                                                <div class="tech-btn-custom">
                                                                    <img src="<?php echo $logo['tech_logo']; ?>" <?php echo get_image_dimensions($logo['tech_logo']); ?>>
                                                                </div>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $first = false; ?>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

</section>