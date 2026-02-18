<section class="section digital-transformation-solution <?php echo isset($args['class']) ? $args['class'] : ''; ?>">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php echo get_field('solutions_chart_heading'); ?>
            </h2>

            <?php $description = get_field('solutions_chart_description'); ?>
            <?php if (!empty($description)) echo '<p class="section-content text-center">' . $description . '</p>'; ?>
        </div>
        <?php $solutions = get_field('solutions_chart_list'); ?>
        <div class="row align-items-center">
            <div class="col-md-4">
                <ul class="left-sight">
                    <?php if (is_array($solutions) && count($solutions)) : ?>
                        <?php for ($i=0; $i < min(count($solutions), 2); $i++) : ?>
                            <li class="text-xl-end text-lg-end text-md-end text-sm-center ">
                                <?php echo $solutions[$i]['item']; ?>
                            </li>
                        <?php endfor; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-md-4 text-center">
                <img src="<?php echo get_field('solutions_chart_image'); ?>" <?php echo get_image_dimensions(get_field('solutions_chart_image')); ?> class="img-fluid">
            </div>
            <div class="col-md-4">
                <ul class="right-sight">
                    <?php if (is_array($solutions) && isset($solutions[2])) : ?>
                        <?php for ($i=2; $i < max(count($solutions), 4); $i++) : ?>
                            <li>
                                <?php echo $solutions[$i]['item']; ?>
                            </li>
                        <?php endfor; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

        <?php $highlights = get_field('solutions_chart_highlights'); ?>
        <?php if (is_array($highlights) && count($highlights)) : ?>
            <ul class="bottom-list">
                <?php foreach ($highlights as $highlight) : ?>
                    <?php $highlight = $highlight['item']; ?>
                    <li>
                        <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.8692 17.922C3.8692 17.7266 3.83162 17.6289 3.75647 17.6289L3.23791 17.8769C3.23791 17.7717 3.17778 17.6965 3.05754 17.6514L2.87717 17.6289C2.75692 17.6289 2.60662 17.6815 2.42625 17.7867C2.39619 17.7115 2.35861 17.6364 2.31352 17.5612C2.26843 17.4861 2.23085 17.4184 2.20079 17.3583C2.00539 16.9825 1.80999 16.5692 1.61459 16.1183C1.43422 15.6523 1.26137 15.2089 1.09603 14.7881C0.945726 14.3672 0.825481 14.0365 0.735297 13.796C0.675174 13.6006 0.607536 13.3075 0.532382 12.9167C0.457229 12.5259 0.382075 12.0299 0.306922 11.4287C0.47226 11.5339 0.60002 11.5865 0.690205 11.5865C0.795419 11.5865 0.893119 11.4287 0.983303 11.1131C1.0284 11.1732 1.11106 11.2032 1.23131 11.2032C1.32149 11.2032 1.38913 11.1732 1.43422 11.1131L1.79496 10.5719L2.20079 10.7072H2.22334C2.2534 10.7072 2.28346 10.6922 2.31352 10.6621C2.34358 10.6321 2.38867 10.602 2.4488 10.5719C2.56904 10.4968 2.65923 10.4592 2.71935 10.4592L2.78699 10.4818C3.16275 10.6621 3.40324 10.9928 3.50846 11.4738C3.77901 12.6161 4.04956 13.1873 4.32012 13.1873C4.59067 13.1873 4.90631 12.9017 5.26705 12.3305C5.44742 12.045 5.62779 11.7143 5.80816 11.3385C6.00355 10.9627 6.19895 10.5419 6.39435 10.0759C6.42441 10.2563 6.45448 10.3465 6.48454 10.3465C6.55969 10.3465 6.68745 10.1586 6.86782 9.78284C7.06322 9.40707 7.37135 8.88851 7.79221 8.22716C8.0327 7.82133 8.33331 7.3629 8.69405 6.85185C9.06982 6.34081 9.46813 5.81473 9.88899 5.27363C10.3098 4.73252 10.7157 4.22148 11.1065 3.7405C11.5123 3.25952 11.873 2.84617 12.1887 2.50047C12.5043 2.15476 12.7373 1.9293 12.8876 1.82409C13.4588 1.43329 13.9097 1.05752 14.2404 0.696784C14.2253 0.801998 14.2028 0.899698 14.1727 0.989883C14.1577 1.06504 14.1502 1.11764 14.1502 1.1477C14.1502 1.20783 14.1803 1.23789 14.2404 1.23789L14.8717 0.922244V1.01243C14.8717 1.13267 14.9017 1.1928 14.9618 1.1928C15.0069 1.1928 15.0971 1.12516 15.2324 0.989883C15.3677 0.854606 15.4428 0.756907 15.4579 0.696784L15.4128 1.01243L16.1793 0.561508L15.999 0.967337C16.2395 0.801999 16.4123 0.71933 16.5175 0.71933C16.5776 0.71933 16.6227 0.756906 16.6528 0.83206C16.6829 0.892183 16.6979 0.952305 16.6979 1.01243C16.6979 1.10261 16.6603 1.20783 16.5852 1.32807C16.51 1.44832 16.4123 1.59111 16.2921 1.75645C16.2019 1.87669 16.0516 2.05706 15.8411 2.29755C15.6457 2.52301 15.3451 2.8612 14.9393 3.31212C14.5335 3.74801 13.9924 4.35676 13.316 5.13835C13.1356 5.33375 12.8576 5.67946 12.4818 6.17547C12.106 6.65645 11.6776 7.2201 11.1967 7.86642C10.7307 8.49771 10.2648 9.13652 9.7988 9.78284C9.33285 10.4292 8.91951 11.0154 8.55877 11.5414C8.19804 12.0525 7.94251 12.4358 7.79221 12.6913L6.39435 15.0586C6.09374 15.5697 5.84573 15.9905 5.65033 16.3212C5.45493 16.6368 5.30463 16.8548 5.19941 16.975C4.97395 17.2456 4.72595 17.4861 4.45539 17.6965L4.25248 17.5838L4.07211 17.6965L3.8692 17.922Z" fill="#DE253A"/>
                        </svg>
                        <?php echo $highlight; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php $cta = get_field('solutions_chart_cta'); ?>
        <?php if (is_array($cta) && count($cta) && isset($cta['url'])) : ?>
            <div class="square text-center mt-3 mt-lg-5">
                <a href="<?php echo $cta['url']; ?>" class="square-pulse btn btn-red align-items-center gap-2" <?php echo is_modal_link($cta['url']); ?>>
                    <?php echo $cta['title']; ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>