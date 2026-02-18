<?php
/*
    Template Name: ERP For Finance & Accounting
    Template Post Type: page
*/
?>

<?php get_header('header'); ?>
<!-- BANNER SECTION START -->
 <?php
 $links = get_field('banner_cta_1');
 $links2 = get_field('banner_cta_2');
 ?>
<section class="section business-central-integration-banner erp-for-finance-accounting-banner no-lzl-section">
    <div class="container">
        <div class="row align-items-center mt-lg-3 gx-0">
            <div class="col-lg-7">
                <div class="text-cont pt-4">
                    <h1 class="banner-subheading"><?php echo get_field('banner_top_subheadig'); ?></h1>
                    <h2 class="banner-title">
                        <?php echo get_field('banner_heading'); ?>
                    </h2>
                    <?php echo get_field('banner_description'); ?>
                    <div class="btns justify-content-lg-start">
                        <?php if($links): ?>
                        <a href="<?php echo esc_url($links['url']); ?>" class="square-pulse btn-red align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo esc_html($links['title']); ?>
                        </a>
                        <?php endif; ?>
                        <?php if($links2): ?>
                        <a href="<?php echo esc_url($links2['url']); ?>" class="btn-pink" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                            <?php echo esc_html($links2['title']); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                    <p class="mt-3"><?php echo get_field('banner_contact'); ?></p>
                    <?php get_template_part('template-parts/global/5-stars-badge');?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner-img">
                    <picture class="no-lazy">
                        <?php
                        $desktop_banner_image = get_field('banner_image');
                        $mobile_banner_image = get_field('banner__mobile_image');
                        ?>
                        <source media="(max-width:767px)" srcset="<?php echo $mobile_banner_image ? $mobile_banner_image : $desktop_banner_image; ?>">
                        <img src="<?php echo $desktop_banner_image; ?>" alt="<?php echo wp_strip_all_tags(get_field('banner_heading'))?>" loading="eager" fetchpriority="high" decoding="async" class="img-fluid no-lazy">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BANNER SECTION END -->

<section class="section dynamics-magento-integration-counter mb-xxl-0 mb-xl-0 pt-0">
    <div class="container">
        <div class="ms-dynamics-counter-wraper position-static">
            <div class="row justify-content-center gy-3 gy-lg-0">
                <?php if( have_rows('counter_items') ): ?>
                       <?php while( have_rows('counter_items') ): the_row(); 
            $number = get_sub_field('number');
            $counter_sign = get_sub_field('counter_sign');
            $text   = get_sub_field('text');
            $icon_svg   = get_sub_field('icon'); 
        ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-card">
                        <div class="icon">
                           <?php echo $icon_svg; ?>
                        </div>
						<div class="counter">
                      <?php if (is_numeric($number)): ?>
    <span class="count" data-counter-lim="<?php echo esc_attr($number); ?>">
        <?php echo esc_html($number); ?> 
							</span><span class="conter-icon"><?php echo esc_html($counter_sign); ?></span>
							<p><?php echo esc_html($text); ?></p>
<?php else: ?>
   
        
		<span class="conter-icon"><?php echo esc_html($number); ?></span>
    <p><?php echo esc_html($text); ?></p>
   
<?php endif; ?>
						</div>
						
						
						
						
						
						



                    </div>
                </div>
               
                 <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<section class="section technical-architecture technical-architecture-shopify-integ bg-white pt-0">
        <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo get_field('discover_erp_cards__heading'); ?></h2>
            <p class="section-content text-center">
                <?php echo get_field('discover_erp_cards__description'); ?>
            </p>
        </div>

        <div class="row gy-4">
             <?php
                       
                         if( have_rows('discover_erp_cards__repeater') ): ?>
                <?php while( have_rows('discover_erp_cards__repeater') ): the_row(); 
            $icon_technical = get_sub_field('discover_erp_cards__repeater_icon');
            $icon_technical_url = $icon_technical['url'];
            $image_urlsss = (is_array($icon_technical_url) && isset($icon_technical_url['url'])) ? $icon_technical_url['url'] : '';
            $icon_technical_alt = $icon_technical['alt'];
            $heading_technical   = get_sub_field('discover_erp_cards__repeater_heading');
           $description_technical = get_sub_field('discover_erp_cards__repeater_description'); 
            
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card-parent">
                    <div class="card">
                        <div class="img-content">
                            <img src="<?php echo $icon_technical_url; ?>" alt="" class="img-fluid">
                        </div>
                        <div class="text-content">
                            <h3><?php echo $heading_technical; ?></h3>
                            <p><?php echo $description_technical; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            
            
            
        </div>
        <?php
        $techn_cta = get_field('discover_erp_cards__cta'); ?>
        <div class="square text-center mt-5">
            <a href="<?php echo esc_url($techn_cta['url']); ?>" class="square-pulse btn btn-red text-capitalize" <?php echo is_modal_link($techn_cta['url']); ?>>
                <?php echo esc_html($techn_cta['title']); ?>
            </a>
        </div>
    </div>
</section>




<!-- operational challenges section start -->
<?php $cardsS = ['row_class' => 'justify-content-start']; 
get_template_part('template-parts/global/operational-challenges-cards',null,$cardsS)?>
<!-- operational challenges section end -->


<!-- Scaled Business Cards section start -->
<?php $scaleBusiness = ['class' => 'pb-lg-5']; 
get_template_part('template-parts/global/scaled-business-cards',null,$scaleBusiness)?>
<!-- Scaled Business Cards section end -->

<hr class="erp-implementation-hr">

<section class="section technical-architecture technical-architecture-shopify-integ bg-white pt-lg-5">
        <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo get_field('technical_architecture_heading'); ?></h2>
            <p class="section-content text-center">
                <?php echo get_field('technical_architecture_description'); ?>
            </p>
        </div>

        <div class="row gy-4">
             <?php
                       
                         if( have_rows('technical_architecture_cards') ): ?>
                <?php while( have_rows('technical_architecture_cards') ): the_row(); 
            $icon_technical = get_sub_field('icon');
            $icon_technical_url = $icon_technical['url'];
            $image_urlsss = (is_array($icon_technical_url) && isset($icon_technical_url['url'])) ? $icon_technical_url['url'] : '';
            $icon_technical_alt = $icon_technical['alt'];
            $heading_technical   = get_sub_field('heading');
           $description_technical = get_sub_field('description'); 
            
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card-parent">
                    <div class="card">
                        <div class="img-content">
                            <img src="<?php echo $icon_technical_url; ?>" alt="" class="img-fluid">
                        </div>
                        <div class="text-content">
                            <h3><?php echo $heading_technical; ?></h3>
                            <p><?php echo $description_technical; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            
            
            
        </div>
        <?php
        $technical_cta = get_field('technical_architecture_cta'); ?>
        <div class="square text-center mt-5">
            <a href="<?php echo esc_url($technical_cta['url']); ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo esc_html($technical_cta['title']); ?>
            </a>
        </div>
    </div>
</section>


<section class="section ms-dynamics-comprehensive-tabs-section fo-implementation-services supply-chain-modules-tabs mt-0 dark-gray-bg">
    <div class="container">
        <div class="text-content text-center">
            <h2 class="section-title mb-lg-2">
                <?php the_field('mdcts_section_heading'); ?>
            </h2>
            <p class="section-content text-center pt-lg-0">
                <?php the_field('mdcts_section_description'); ?>
            </p>
        </div>

        <?php if( have_rows('mdcts_tabs_repeater') ): ?>
        <div class="ms-dynamics-comprehensive-tabs">
            <div class="row">
                <!-- LEFT SIDE (Tabs) -->
                <div class="col-md-4 col-lg-4 tabs-column">
                     <div class="scroll-btns">
                        <a href="javascript:;" class="scroll-up">
                            <svg width="16" height="25" viewBox="0 0 16 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.45397 0.911036C8.06345 0.520512 7.43028 0.520512 7.03976 0.911036L0.675796 7.275C0.285271 7.66552 0.285271 8.29869 0.675796 8.68921C1.06632 9.07974 1.69949 9.07974 2.09001 8.68921L7.74686 3.03236L13.4037 8.68921C13.7942 9.07973 14.4274 9.07973 14.8179 8.68921C15.2085 8.29869 15.2085 7.66552 14.8179 7.275L8.45397 0.911036ZM7.74686 24.1731L8.74686 24.1731L8.74686 1.61814L7.74686 1.61814L6.74686 1.61814L6.74686 24.1731L7.74686 24.1731Z" fill="black"/>
                            </svg>
                        </a>
                        <a href="javascript:;" class="scroll-down">
                            <svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.03976 23.4527C7.43028 23.8433 8.06345 23.8433 8.45397 23.4527L14.8179 17.0888C15.2085 16.6982 15.2085 16.0651 14.8179 15.6746C14.4274 15.284 13.7942 15.284 13.4037 15.6746L7.74686 21.3314L2.09001 15.6746C1.69949 15.284 1.06632 15.284 0.675797 15.6746C0.285272 16.0651 0.285272 16.6982 0.675797 17.0888L7.03976 23.4527ZM7.74686 0.190674L6.74686 0.190674L6.74686 22.7456L7.74686 22.7456L8.74686 22.7456L8.74686 0.190674L7.74686 0.190674Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                    <ul class="nav nav-tabs scroll-content border-0" role="tablist">
                        <?php 
                        $i=0; 
                        while( have_rows('mdcts_tabs_repeater') ): the_row(); 
                            $tab_title = get_sub_field('mdcts_tab_title');
                        ?>
                        <li class="nav-item">
                            <a id="cross-plat-<?php echo $i; ?>" href="#tab-<?php echo $i; ?>" class="nav-link <?php echo $i==0?'active':''; ?>" data-bs-toggle="tab" role="tab">
                                <?php echo $tab_title; ?>
                                 <span class="icon">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.83077 0.944824L14.3846 13.4987L14.3846 2.25252L17 2.25252L17 17.9448L1.30769 17.9448L1.30769 15.3294L12.5538 15.3294L5.81212e-07 2.77559L1.83077 0.944824Z" fill="black"/>
                                            </svg>
                                        </span>
                            </a>
                        </li>
                        <?php $i++; endwhile; ?>
                    </ul>
                </div>

                <!-- RIGHT SIDE (Tab Content) -->
                <div class="col-md-8 col-lg-8 right-tabs-column">
                     <div id="content" class="tab-content" role="tablist">
                        <?php 
                        $j=0; 
                        while( have_rows('mdcts_tabs_repeater') ): the_row(); 
                            $tab_heading      = get_sub_field('mdcts_tab_heading');
                            $tab_subheading   = get_sub_field('mdcts_tab_subheading');
                            $tab_description  = get_sub_field('mdcts_tab_description');
                            $tab_image        = get_sub_field('mdcts_tab_image');
                            $tab_button_text  = get_sub_field('mdcts_tab_button_text');
                            $tab_button_link  = get_sub_field('mdcts_tab_button_link');
                        ?>
                        <div id="tab-<?php echo $j; ?>" class="card tab-pane fade <?php echo $j==0?'show active':''; ?>" role="tabpanel">
                             <div class="card-header" role="tab" id="cross-plat-heading-<?php echo $j; ?>">
                                <div class="mb-0 mobile-accordion-btn">
                                    <a data-bs-toggle="collapse" href="#cross-plat-collapse-<?php echo $j; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $j; ?>">
                                        <?php echo $tab_heading; ?>
                                    </a>
                                </div>
                            </div>
                            <div id="tab-<?php echo $j; ?>" class="card tab-pane fade show active" role="tabpanel">
                            <div class="card-body p-lg-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="txt-cnt">
                                            <?php if($tab_image): ?>
                                                <div class="cont-img">
                                                    <img src="<?php echo esc_url($tab_image['url']); ?>" alt="<?php echo esc_attr($tab_image['alt']); ?>" class="img-fluid">
                                                </div>
                                            <?php endif; ?>
                                            <div class="inner-text-box">
                                                <?php if($tab_heading): ?>
                                                <h3><?php echo $tab_heading; ?></h3>
                                                <?php endif; ?>
                                                <?php if($tab_subheading): ?>
                                                <h4><?php echo $tab_subheading; ?></h4>
                                                <?php endif; ?>
                                                <?php if($tab_description): ?>
                                                <p><?php echo $tab_description; ?></p>
                                                <?php endif; ?>
                                                
                                                <?php if( have_rows('mdcts_tab_features') ): ?>
                                                <ul>
                                                    <?php while( have_rows('mdcts_tab_features') ): the_row(); ?>
                                                        <li><?php the_sub_field('mdcts_feature_item'); ?></li>
                                                    <?php endwhile; ?>
                                                </ul>
                                                <?php endif; ?>

                                                <?php if($tab_button_text): ?>
                                                <div class="square mt-4 mb-3">
                                                    <a href="<?php echo $tab_button_link; ?>" class="square-pulse btn btn-red text-capitalize" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                                                        <?php echo $tab_button_text; ?>
                                                    </a>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                </div>
                        <?php $j++; endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>


<!-- implementation process vertical section start  -->
<?php
$process = ['class' => 'bg-white'];
get_template_part('template-parts/global/implementation-process-vertilce',null,$process);
?>
<!-- implementation process vertical section end  -->

<!-- Why choose trango implementation section Start -->
<?php
$args = ['class' => 'banner-secondry-bg'];
get_template_part('template-parts/global/why-choose-trango-implementation',null,$args);
?>
<!-- Why choose trango implementation section End -->



<!-- Why choose section start  -->
<?php
 $whyChooseSec = [
    'class' => 'advanced-customization-services-cards bg-white',
    'row_class' => 'gx-0'
];
 get_template_part('template-parts/global/solution-cards1',null,$whyChooseSec)?>
<!-- Why choose section end  -->

<!-- Testimonials Start -->
<?php 
    $testi = [
        'category' => 'erp-finance-accounting',
        'class' => 'bg-gray'
    ];
    get_template_part('template-parts/global/new-testimonials', null, $testi); 
?>
<!-- Testimonials End -->

<!-- Transform Erp Cards section start  -->
<?php
$erp_cards = [
    'class' => 'erp-implementation-solutions pb-lg-5'
];
get_template_part('template-parts/global/Transform-erp-cards',null,$erp_cards);
?>
<!-- Transform Erp Cards section end  -->

<hr class="erp-implementation-hr">


<!-- Comparison Table section start  -->
<section class="section why-business-central pt-lg-5">
    <div class="container">
        <div class="text-cont text-center">
            <h2 class="section-title"><?php echo get_field('bcl_table_section_heading'); ?></h2>
            <p class="section-content text-center">
                <?php echo get_field('bcl_table_section_text'); ?>
            </p>
        </div>
        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-bordered">
                <?php if( have_rows('bcl_table_head') ): ?>
                    <thead class="">
                        <tr>
                            <?php while( have_rows('bcl_table_head') ): the_row();?>
                                <th><?php echo get_sub_field('bcl_table_head_column');?></th>
                            <?php endwhile; ?>
                        </tr>
                </thead>
                <?php endif; ?>
                <?php if( have_rows('bcl_table_body') ): ?>

                    <tbody>
                    <?php while( have_rows('bcl_table_body') ): the_row();?>
                    <tr>
                        <td>
                            <?php echo get_sub_field('bcl_table_body_column_1');?>
                        </td>
                        <td>
                            <?php echo get_sub_field('bcl_table_body_column_2');?>
                        </td>
                        <td>
                            <?php echo get_sub_field('bcl_table_body_column_3');?>
                        </td>
                        <?php if (get_sub_field('bcl_table_body_column_4')): ?>
                            <td>
                                <?php echo get_sub_field('bcl_table_body_column_4'); ?>
                            </td>
                        <?php endif; ?>
                    </tr>
                    <?php endwhile; ?>

                    </tbody>
                <?php endif; ?>

                </table>
            </div>
        </div>

        <?php $bcl_table_cta_link = get_field('bcl_table_cta'); ?>
        <?php if($bcl_table_cta_link): ?>
        <div class="square text-center mt-5">
            <a href="<?php echo esc_url($bcl_table_cta_link['url']); ?>" class="square-pulse btn btn-red" data-bs-toggle="modal" data-bs-target="#next-project-modal">
                <?php echo esc_html($bcl_table_cta_link['title']); ?>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- Comparison Table section end  -->


<!-- TRUSTED CUSTOMERS SECTION START -->
<?php 
$affiliations_heading = get_field('partnership_heading');
$affiliations_content = get_field('partnership_content');
$affiliations = [
    'title'      =>$affiliations_heading,
    'content'    =>$affiliations_content,
    'category' =>'microsoft-home',
];
get_template_part('template-parts/global/partnership','',$affiliations);?> 
<!-- TRUSTED CUSTOMERS SECTION END -->

<!-- NEW YORJK HIRE SECTION  -->
    <?php 
    $scroller_section = [
        'category'  =>'finance-accounting',
    ];
    get_template_part('template-parts/business-central-integration/hire-scroll','',$scroller_section);?>


<!-- ASK-QUESTION  START -->
<?php
$faqs_heading = get_field('faqs_heading');
$faqs_content = get_field('faqs_content');
$faqs = [
    'title'    => $faqs_heading,
    'content'  => $faqs_content,
    'category' => 'erp-finance-accounting',
    'bg_class' => 'pb-lg-5 bg-f5f5f5',
    'show_search' => false,

];
get_template_part('template-parts/global/faqs', null, $faqs);?> 
<!-- ASK-QUESTION  END -->

 
<!-- Transform Business START -->
<?php
	 get_template_part('template-parts/business-central-integration/transform-business', null, $faqs);
?> 
<!-- Transform Business  END -->



<?php get_footer(); ?>


<script>
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.count');

    counters.forEach(counter => {
        const targetAttr = counter.getAttribute('data-counter-lim');
        const target = parseFloat(targetAttr);

        if (isNaN(target)) return;

        let count = 0;
        const speed = 20;

        const updateCount = () => {
            const increment = (target - count) / 10;
            count += increment;

            if (count < target) {
                displayNumber(count);
                requestAnimationFrame(updateCount);
            } else {
                displayNumber(target);
            }
        };

        const displayNumber = (val) => {
            // Check if the value is whole number or not
            const isWhole = Math.round(val * 10) % 10 === 0;
            counter.textContent = isWhole ? Math.round(val) : val.toFixed(1);
        };

        updateCount();
    });
});
</script>

<script>
   

    $('.clients-adore-slider').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        dots:true,
        responsive:{
            0:{
                items:1,
                autoHeight:true
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
     // // THIS SCRIPT IS FOR NEW-YORK PAGE ---> Hire SECTION
     const tabs = document.querySelectorAll(".hire-tabs")
        const pages = document.querySelectorAll(".sec-info")
        const scrollToTop = document.querySelector("#hireobserverID")
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // console.log(entry.target);
                    const index = Array.from(pages).indexOf(entry.target)
                    tabs.forEach(tab => {
                        tab.classList.remove("current");
                        $('.current').removeAttr('id','currentIDRRRRRRR');
                    })
                    tabs[index].classList.add("current");
                    $('.current').attr('id','currentIDRRRRRRR');
                    console.log(index);
                    if(index <= 6){
                        var a = $('#sidenavcustomnavccnav ul').scrollTop(0);
                    }
                    if(index == 7){
                        var a = $('#sidenavcustomnavccnav ul').scrollTop(500);
                    }
                    if(index == 14){
                        var a = $('#sidenavcustomnavccnav ul').scrollTop(1000);
                    }
                    if(index == 22){
                        var a = $('#sidenavcustomnavccnav ul').scrollTop(1500);
                    }
                }
            })
        }, {
            threshold: 0.25,
        });
        pages.forEach(page => {
            observer.observe(page)
        });

</script>
