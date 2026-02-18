<section class="section dynamics-integration-banner ms-dynamics-banner business-central-banner">
    <div class="container position-relative">
        <div class="row align-items-center mt-lg-5 gx-0">
            <div class="col-lg-9 col-xxl-8">
                <div class="text-cont">
                    <h1 class="banner-title text-lg-start">
                        <?php echo get_field('banner_heading'); ?>
                    </h1>
                    <p class="banner-text text-lg-start ms-lg-0">
                        <?php echo get_field('banner_description'); ?>
                    </p>
                    <div class="btns justify-content-lg-start gap-3">
                        <?php $cta_1 = get_field('banner_cta_1'); ?>
                        <?php if (is_array($cta_1) && count($cta_1) && isset($cta_1['url'])) echo '<a href="' . $cta_1['url'] . '" class="square-pulse mx-0" ' . is_modal_link($cta_1['url']) . '>' . $cta_1['title'] . '</a>'; ?>
                        <?php $cta_2 = get_field('banner_cta_2'); ?>
                        <?php if (is_array($cta_2) && count($cta_2) && isset($cta_2['url'])) echo '<a href="' . $cta_2['url'] . '" class="btn-white mx-0" ' . is_modal_link($cta_2['url']) . '>' . $cta_2['title'] . '</a>'; ?>
                    </div>
                    <h2 class="phone-number text-center text-lg-start">
                        <?php echo get_field('banner_contact'); ?>
                    </h2>
                    <?php get_template_part('template-parts/global/5-stars-badge');?>
                </div>
            </div>
        </div>

        <?php $columns = get_field('text_columns'); ?>
        <div class="checklist-section">
            <div class="row">
                <?php foreach ($columns as $column) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="text-card ">
                            <div class="text">
                                <h3><?php echo $column['heading']; ?></h3>
                                <?php echo wpautop($column['text']); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>