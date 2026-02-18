<section class="section inspired-market-leaders industries-we-serve-new">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title">
                <?php the_field('industries_section_title'); ?>
            </h2>
            <p class="section-content text-center">
                <?php the_field('industries_section_description'); ?>
            </p>
        </div>
    </div>

    <div class="container-fluid p-0">
        <?php if (have_rows('industry_cards')) : ?>
            <div class="owl-carousel owl-theme inspired-market-leaders-slider">
                <?php while (have_rows('industry_cards')) : the_row(); 
                    $image = get_sub_field('industry_image');
                    $title = get_sub_field('industry_title');
                    $description = get_sub_field('industry_description');
                ?>
                    <div class="item">
                        <div class="card">
                            <div class="img-content">
                                <?php if ($image) : ?>
                                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>" class="img-fluid">
                                <?php endif; ?>
                            </div>
                            <div class="text-content">
                                <?php if ($title) : ?><h3><?php echo esc_html($title); ?></h3><?php endif; ?>
                                <?php if ($description) : ?><p><?php echo $description; ?></p><?php endif; ?>
								<?php 
$industry_link = get_sub_field('industry_link');
$is_modal = empty($industry_link) || $industry_link == '#';
?>

<div class="square mt-4">
  <a href="<?php echo $is_modal ? '#next-project-modal' : esc_url($industry_link); ?>" 
     class="square-pulse btn btn-red gt"
     <?php if ($is_modal): ?>
       data-bs-toggle="modal" 
       data-bs-target="#next-project-modal"
     <?php endif; ?>>
    LEARN MORE
  </a>
</div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
	<?php if(get_field('industries_section_button_link')){ ?>
    <div class="container">
            <div class="square text-center mt-4">
                <a href="<?php echo get_field('industries_section_button_link'); ?>" class="square-pulse btn btn-red"  data-bs-toggle="modal" data-bs-target="#next-project-modal">
                    <?php echo get_field('industries_section_button_text'); ?>
                    <svg width="30" height="24" viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 17L15 12L10 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M16 17L21 12L16 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
	<?php } ?>
</section>