<section class="section agile-development-process">
    <div class="container">
        <div class="tect-cont text-center">
            <h2 class="section-title"><?php echo get_field('qa_process_heading'); ?></h2>
            <?php $description = get_field('qa_process_description'); ?>
            <?php if (!empty($description)) echo '<p class="section-content text-center">' . $description . '</p>'; ?>
        </div>

        <?php $steps = get_field('qa_process_steps'); ?>
        <?php if (is_array($steps) && count($steps)) : ?>
            <ul class="wraper">
                <?php for ($i=0; $i < count((array)$steps); $i++) : ?>
                    <li>
                        <div class="number-box">0<?php echo ($i + 1); ?></div>
                        <div class="text-box">
                            <span>
                                <?php if (($i + 1) % 2 == 0) : ?>
                                    <svg width="19" height="41" viewBox="0 0 19 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="7.21875" y="0.381348" width="3.25057" height="31.5718" fill="#D9D9D9"></rect>
                                        <circle cx="9.38107" cy="31.9528" r="8.66817" fill="black"></circle>
                                    </svg>
                                <?php else : ?>
                                    <svg width="18" height="106" viewBox="0 0 18 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="7.36914" y="0.875488" width="3.25057" height="95.7745" fill="#D9D9D9"/>
                                        <circle cx="8.99435" cy="96.6501" r="8.66817" fill="#C40025"/>
                                    </svg>
                                <?php endif; ?>
                            </span>
                            <?php echo $steps[$i]['text']; ?>
                        </div>
                    </li>
                <?php endfor; ?>
            </ul>
        <?php endif; ?>

        <?php $cta = get_field('qa_process_cta'); ?>
        <?php if (is_array($cta) && count($cta) && isset($cta['url'])) : ?>
            <div class="square mt-4 mt-lg-5 pt-lg-3 text-center">
                <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red align-items-center gap-2" <?php echo is_modal_link($cta['url']); ?>>
                    <?php echo $cta['title']; ?>
                </a>
            </div>
        <?php endif; ?>

    </div>
</section>