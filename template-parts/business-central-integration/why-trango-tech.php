<?php
$class = isset($args['class']) ? $args['class'] : '';
?>

<section class="section why-industry-leaders <?php echo $class;?>">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('why_tt_heading'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('why_tt_description'); ?>
            </p>
        </div>

        <?php $reasons = get_field('why_tt_reasons'); ?>
        <ul class="card-item">
            <?php if (is_array($reasons) && count($reasons)) : ?>
                <?php foreach ($reasons as $reason) : ?>
                    <li>
                       <div class="card">
                            <span class="left">
                                <?php echo $reason['icon']; ?>
                            </span>
                            <span class="right">
                                <h3><?php echo $reason['heading']; ?></h3>
                                <p><?php echo $reason['description']; ?></p>
                            </span>
                       </div>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>

        </ul>

        <?php $highlights = get_field('why_tt_highlights'); ?>
        <ul class="bottom-list">
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
</section>