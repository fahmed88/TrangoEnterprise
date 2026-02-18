<?php $data = $args['data']; ?>
<section class="section ms-dynamics-cta-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="text-box">
                    <h2 class="section-title">
                        <?php echo $data['heading']; ?>
                    </h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="square mt-4 text-start text-lg-end">
                    <a href="<?php echo $data['cta']['url']; ?>" class="square-pulse btn btn-red align-items-center gap-2" <?php echo is_modal_link($data['cta']['url']); ?>>
                        <?php echo $data['cta']['title']; ?>
                        <span>
                            <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.68597 11.5635L7.1012 6.56348L1.68597 1.56348" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.1842 11.5635L13.5994 6.56348L8.1842 1.56348" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>