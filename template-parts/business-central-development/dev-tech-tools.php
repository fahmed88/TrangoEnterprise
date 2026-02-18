<section class="section develoment-technologies">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo get_field('dev_tools_heading'); ?></h2>

            <?php $description = get_field('dev_tools_description'); ?>
            <?php if (!empty($description)) echo '<p class="section-content text-center mb-0 pb-0">' . $description . '</p>'; ?>
        </div>

        <?php $logos = get_field('dev_tools'); ?>
        <?php if (is_array($logos) && count($logos)) : ?>
            <ul>
                <?php foreach ($logos as $logo) : ?>
                    <li>
                        <img src="<?php echo $logo['image']; ?>" <?php echo get_image_dimensions($logo['image']); ?> class="img-fluid">
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>