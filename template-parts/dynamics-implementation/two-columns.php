<section class="section ms-dynamics-erp-challenges">
    <div class="container">
        <div class="text-cont text-center mb-4 mb-lg-5">
            <h2 class="section-title"><?php echo get_field('2_col_heading'); ?></h2>
        </div>
        <div class="row">
            <?php
                $columns = get_field('2_col_columns');
                $column_1 = isset($columns[0]) ? $columns[0] : false;
                $column_2 = isset($columns[1]) ? $columns[1] : false;
            ?>

            <?php if ($column_1) : ?>
                <div class="col-lg-6">
                    <div class="ms-challenges-box left mb-4 mb-lg-0">
                        <div class="box-header">
                            <h3 class="title"><?php echo $column_1['heading']; ?></h3>
                        </div>
                        <div class="box-body">
                            <?php if (is_array($column_1['item']) && count($column_1['item'])) : ?>
                                <ul class="list-items">
                                    <?php foreach ($column_1['item'] as $item) : ?>
                                        <li>
                                            <p class="list-item-title mb-2"><?php echo $item['heading']; ?></p>
                                            <p class="list-item-text">
                                                <?php echo $item['description']; ?>
                                            </p>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($column_2) : ?>
                <div class="col-lg-6">
                    <div class="ms-challenges-box right">
                        <div class="box-header">
                            <h3 class="title"><?php echo $column_2['heading']; ?></h3>
                        </div>
                        <div class="box-body">
                            <?php if (is_array($column_2['item']) && count($column_2['item'])) : ?>
                                <ul class="list-items">
                                    <?php foreach ($column_2['item'] as $item) : ?>
                                        <li>
                                            <p class="list-item-title mb-2"><?php echo $item['heading']; ?></p>
                                            <p class="list-item-text ps-md-3">
                                                <?php echo $item['description']; ?>
                                            </p>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>