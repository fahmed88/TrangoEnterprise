<?php
$class = isset($args['class']) ? $args['class'] : '';

?>

<section class="section ms-integ-provider-table-section <?php echo $class;?>">
    <div class="container">
        <div class="text-content text-center mb-4">
            <h2 class="section-title">
                <?php echo get_field('comparison_heading'); ?>
            </h2>
            <p class="section-content text-center">
                <?php echo get_field('comparison_description'); ?>
            </p>
        </div>

        <div class="table-responsive">
            <table class="table align-middle ms-integ-provider-table">
            <?php if (have_rows('comparison_table')) : ?>
                <thead>
                <tr>
                <?php
                    // Store the rows temporarily to access the first row
                    $comparison_rows = get_field('comparison_table');
                    if (!empty($comparison_rows)) {
                        $first_row = $comparison_rows[0]['row'];
                        if (!empty($first_row)) {
                            foreach ($first_row as $sub_row) {
                                echo '<th>' . $sub_row['column'] . '</th>';
                            }
                        }
                    }
                ?>
                </tr>
                </thead>
                <tbody>
                <?php
                    $row_index = 0;
                    while (have_rows('comparison_table')) : the_row();
                        if ($row_index === 0) {
                            $row_index++;
                            continue; // Skip first row (used in header)
                        }
                        echo '<tr>';
                        if (have_rows('row')) :
                            while (have_rows('row')) : the_row();
                                $column_value = get_sub_field('column');
                                echo '<td>' . $column_value . '</td>';
                            endwhile;
                        endif;
                        echo '</tr>';
                    endwhile;
                ?>
                </tbody>
                <?php endif; ?>
            </table>
        </div>
        
        <?php $table_link = get_field('comparison_cta'); ?>
        <div class="square text-center mt-5 pt-lg-3">
            <a href="<?php echo esc_url($table_link['url']); ?>" class="square-pulse btn btn-red" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo esc_html($table_link['title']); ?>
            </a>
        </div>
        
    </div>
</section>