<section class="section ms-dynamics-comprehensive-tabs-section">
    <div class="container">
        <div class="text-content text-center">
            <h2 class="section-title mb-lg-2">
                <?php echo get_field('tabs_section_heading'); ?>
            </h2>
            <p class="section-content text-center pt-lg-0"><?php echo get_field('tabs_section_description'); ?></p>
        </div>

        <?php $tabs = get_field('tabs_list'); ?>
        <div class="ms-dynamics-comprehensive-tabs">
            <div class="row">
                <div class="col-md-4 col-lg-4 tabs-column">
                    <ul class="nav nav-tabs border-0" role="tablist">
                        <?php if (is_array($tabs) && count($tabs)) : ?>
                            <?php $first_tab = true; ?>
                            <?php foreach ($tabs as $tab) : ?>
                                <?php $tab_slug = sanitize_title($tab['label']); ?>
                                <li class="nav-item">
                                    <a id="cross-plat-tab-A" href="#<?php echo $tab_slug; ?>" class="nav-link <?php echo isset($first_tab) && $first_tab ? 'active' : ''; ?>" data-bs-toggle="tab" role="tab">
                                        <?php echo $tab['label']; ?>
                                        <span class="icon">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.83077 0.944824L14.3846 13.4987L14.3846 2.25252L17 2.25252L17 17.9448L1.30769 17.9448L1.30769 15.3294L12.5538 15.3294L5.81212e-07 2.77559L1.83077 0.944824Z" fill="black"/>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <?php $first_tab = false; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col-md-8 col-lg-8 right-tabs-column">
                    <div id="content" class="tab-content" role="tablist">
                        <?php if (is_array($tabs) && count($tabs)) : ?>
                            <?php $first_tab = true; ?>
                            <?php foreach ($tabs as $tab) : ?>
                                <?php $tab_slug = sanitize_title($tab['label']); ?>
                                <div id="<?php echo $tab_slug; ?>" class="card tab-pane fade <?php echo isset($first_tab) && $first_tab ? 'show active' : ''; ?>" role="tabpanel" aria-labelledby="cross-plat-tab-A">
                                    <div class="card-header" role="tab" id="cross-plat-heading-A">
                                        <div class="mb-0 mobile-accordion-btn">
                                            <a data-bs-toggle="collapse" href="#cross-plat-collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                                <?php echo $tab['label']; ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="cross-plat-collapse-A" class="collapse <?php echo isset($first_tab) && $first_tab ? 'show' : ''; ?>" data-bs-parent="#content" role="tabpanel" aria-labelledby="cross-plat-heading-A">
                                        <div class="card-body p-lg-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="txt-cnt">
                                                        <div class="cont-img">
                                                            <img src="<?php echo $tab['image']; ?>" class="img-fluid" alt="<?php echo $tab['label']; ?>">
                                                        </div>
                                                        <div class="inner-text-box">
                                                            <?php echo $tab['content']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $first_tab = false; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>