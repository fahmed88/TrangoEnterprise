<?php
$class = isset($args['class']) ? $args['class'] : '';
<<<<<<< HEAD
$class1 = isset($args['class1']) ? $args['class1'] : '';
=======
>>>>>>> 6a6975e828b4d859fbde948b097eac97c9a19ada
?>

<section class="section proven-development-methodology-lists-section <?php echo $class;?>">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('process_steps_heading'); ?>
            </h2>
            <?php $description = get_field('process_steps_description'); ?>
            <?php if (!empty($description)) echo '<p class="section-content text-center">' . $description . '</p>'; ?>
        </div>

        <?php $steps = get_field('steps'); ?>
        <?php if (is_array($steps) && count($steps)) : ?>
<<<<<<< HEAD
            <div class="num-lists-wraper <?php echo $class1;?>">
=======
            <div class="num-lists-wraper">
>>>>>>> 6a6975e828b4d859fbde948b097eac97c9a19ada
                <ul>
                    <?php for ($i=0; $i < count((array)$steps); $i++) : ?>
                        <li>
                            <div class="timeline-bg">
                                <div class="num-box">0<?php echo ($i + 1); ?></div>
                            </div>

                            <div class="num-text">
                                <div class="svg-wrapper">
                                    <svg width="22" height="62" viewBox="0 0 22 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10.1003" y="0.827148" width="1.22711" height="53.9928" fill="#D9D9D9"/>
                                        <circle cx="10.7143" cy="51.1491" r="10.6784" fill="#C40025"/>
                                    </svg>
                                </div>
                                <h3 class="title"><?php echo $steps[$i]['heading']; ?></h3>
                                <p class="text"><?php echo $steps[$i]['text']; ?></p>
                            </div>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php // $cta = get_field('qa_process_cta'); ?>
        <?php $cta = get_field('process_steps_cta'); ?>
        <?php if (is_array($cta) && count($cta) && isset($cta['url'])) : ?>
            <div class="square text-center pt-lg-3">
                <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red align-items-center gap-2" <?php echo is_modal_link($cta['url']); ?>>
                    <?php echo $cta['title']; ?>
                </a>
            </div>
        <?php endif; ?>

    </div>
</section>