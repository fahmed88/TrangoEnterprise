  
<?php
$category    = $args['category'];

$args = array(
    'post_type'           => 'questionnaire',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
    'order'               => 'asc',
    'tax_query'           => array(array(
        'taxonomy'      => 'questionnaire',
        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
        'terms'         =>  $category ? $category : 'new-york-development',
        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);

$the_query = new WP_Query( $args );

?> 
 <?php 
            if( get_field('question_title') ) { 
            ?>
<section class="animated-row section new-york-hire constructionpage_custom_faqs_section" id="hireobserverID">
        
            
                <div class="bg-white-heading-custom">
                        <div class="container">
                            <div class="row white-bg-heading-custom-row">
                                <div class="col-md-12 text-center">
                                    <h2 class="section-title" data-aos="fade-right" data-aos-duration="1000">
                                        <?php echo get_field('question_title')?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
           
      

        <div class="container">
            <div class="row"> 
                <div class="col-md-4">
                    <nav id="sidenavcustomnavccnav" class="sidenavcustomnavccnav">
                        <ul class="faq_section">
                                <?php
                                $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
                                $host = $_SERVER['HTTP_HOST'];
                                $uri = $_SERVER['REQUEST_URI'];
                                if ($the_query->have_posts()) :
                                    $i=0;
                                    $j=1;
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?> 
                                    <?php $postid = get_the_ID(); ?>
                                    <li><a href="<?php echo $uri; ?>#section-<?php echo $j; ?>"  class="hire-tabs <?php echo $j == 1 ? 'current' : ''; ?>"><?php the_title(); ?></a></li>
                                    <?php
                                    $j++;
                                    $i++;
                                    endwhile;
                                wp_reset_postdata();
                                endif; ?>

                            </ul>
                        <div class="custombottomsidebarbox">
                            <h3 class="sidenavcustomnavccnavhead">Share on:</h3>
                            
                            <ul class="newyork-hiring-socialicons">
                                 <li class="social-button" id="facebook-share">
                                    <button>
                                        <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.80859 10.375L10.3008 7.14062H7.17188V5.03125C7.17188 4.11719 7.59375 3.27344 9 3.27344H10.4414V0.496094C10.4414 0.496094 9.14062 0.25 7.91016 0.25C5.34375 0.25 3.65625 1.83203 3.65625 4.64453V7.14062H0.773438V10.375H3.65625V18.25H7.17188V10.375H9.80859Z" fill="#DE253A"/>
                                        </svg>                                    
                                    </button>
                                </li>
                                <li class="social-button" id="linkedin-share">
                                     <?php 
                                     $linkedin_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                        ?>
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $linkedin_link; ?>" target="_blank">
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.51562 17H0.246094V6.48828H3.51562V17ZM1.86328 5.08203C0.84375 5.08203 0 4.20312 0 3.14844C0 1.70703 1.54688 0.792969 2.8125 1.53125C3.41016 1.84766 3.76172 2.48047 3.76172 3.14844C3.76172 4.20312 2.91797 5.08203 1.86328 5.08203ZM15.7148 17H12.4805V11.9023C12.4805 10.6719 12.4453 9.125 10.7578 9.125C9.07031 9.125 8.82422 10.4258 8.82422 11.7969V17H5.55469V6.48828H8.68359V7.92969H8.71875C9.17578 7.12109 10.2305 6.24219 11.8125 6.24219C15.1172 6.24219 15.75 8.42188 15.75 11.2344V17H15.7148Z" fill="#DE253A"/>
                                        </svg>                                                                                                        
                                    </a>
                                </li>
                                    <li class="social-button" id="whatsapp-share">
                                            <?php 
                                                 $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                                ?>
                                            <a href="https://web.whatsapp.com/send?text=<?php echo $actual_link; ?>" target="_blank"> 
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.3594 2.69531C11.918 1.21875 9.94922 0.375 7.83984 0.375C3.55078 0.375 0.0351562 3.89062 0.0351562 8.17969C0.0351562 9.58594 0.421875 10.9219 1.08984 12.082L0 16.125L4.11328 15.0703C5.27344 15.668 6.53906 16.0195 7.83984 16.0195C12.1641 16.0195 15.75 12.5039 15.75 8.21484C15.75 6.10547 14.8359 4.17188 13.3594 2.69531ZM7.83984 14.6836C6.67969 14.6836 5.55469 14.3672 4.53516 13.7695L4.32422 13.6289L1.86328 14.2969L2.53125 11.9062L2.35547 11.6602C1.72266 10.6055 1.37109 9.41016 1.37109 8.17969C1.37109 4.62891 4.28906 1.71094 7.875 1.71094C9.59766 1.71094 11.2148 2.37891 12.4453 3.60938C13.6758 4.83984 14.4141 6.45703 14.4141 8.21484C14.4141 11.7656 11.4258 14.6836 7.83984 14.6836ZM11.4258 9.83203C11.2148 9.72656 10.2656 9.26953 10.0898 9.19922C9.91406 9.12891 9.77344 9.09375 9.63281 9.30469C9.52734 9.48047 9.14062 9.9375 9.03516 10.0781C8.89453 10.1836 8.78906 10.2188 8.61328 10.1133C7.45312 9.55078 6.71484 9.09375 5.94141 7.79297C5.73047 7.44141 6.15234 7.47656 6.50391 6.73828C6.57422 6.59766 6.53906 6.49219 6.50391 6.38672C6.46875 6.28125 6.04688 5.33203 5.90625 4.94531C5.73047 4.55859 5.58984 4.59375 5.44922 4.59375C5.34375 4.59375 5.20312 4.59375 5.09766 4.59375C4.95703 4.59375 4.74609 4.62891 4.57031 4.83984C4.39453 5.05078 3.90234 5.50781 3.90234 6.45703C3.90234 7.44141 4.57031 8.35547 4.67578 8.49609C4.78125 8.60156 6.04688 10.5703 8.01562 11.4141C9.24609 11.9766 9.73828 12.0117 10.3711 11.9062C10.7227 11.8711 11.4961 11.4492 11.6719 10.9922C11.8477 10.5352 11.8477 10.1484 11.7773 10.0781C11.7422 9.97266 11.6016 9.9375 11.4258 9.83203Z" fill="#DE253A"/>
                                                </svg>
                                            </a>
                                    </li>
                                <li class="social-button" id="twitter-share">
                                    <button>
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.1367 4.24081C16.1367 4.4166 16.1367 4.55722 16.1367 4.733C16.1367 9.61972 12.4453 15.2096 5.66016 15.2096C3.55078 15.2096 1.61719 14.6119 0 13.5572C0.28125 13.5924 0.5625 13.6275 0.878906 13.6275C2.60156 13.6275 4.18359 13.0299 5.44922 12.0455C3.83203 12.0103 2.46094 10.9557 2.00391 9.4791C2.25 9.51425 2.46094 9.54941 2.70703 9.54941C3.02344 9.54941 3.375 9.4791 3.65625 9.40878C1.96875 9.05722 0.703125 7.58066 0.703125 5.78769V5.75253C1.19531 6.03378 1.79297 6.17441 2.39062 6.20956C1.37109 5.5416 0.738281 4.4166 0.738281 3.15097C0.738281 2.44785 0.914062 1.81503 1.23047 1.28769C3.05859 3.50253 5.80078 4.9791 8.85938 5.15488C8.78906 4.87363 8.75391 4.59238 8.75391 4.31113C8.75391 2.27206 10.4062 0.61972 12.4453 0.61972C13.5 0.61972 14.4492 1.0416 15.1523 1.77988C15.9609 1.6041 16.7695 1.28769 17.4727 0.865814C17.1914 1.74472 16.6289 2.44785 15.8555 2.90488C16.5938 2.83456 17.332 2.62363 17.9648 2.34238C17.4727 3.08066 16.8398 3.71347 16.1367 4.24081Z" fill="#DE253A"/>
                                            </svg>
                                                                            
                                    </button>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
                <div class="col-md-8">
                    <main>
                    <?php
                            if ($the_query->have_posts()) :
                                $i=0;
                                $j=1;
                                while ($the_query->have_posts()) : $the_query->the_post(); ?> 
                        <section class="sec-info" id="section-<?php echo $j; ?>">
                            <h2><?php the_title(); ?></h2>
                            <ul>
                            <?php the_content(); ?>
                            </ul>
                        </section>
                       
                                <?php
                                $j++;
                                $i++;
                                endwhile;
                            wp_reset_postdata();
                            endif; ?>
                       
                    </main>
                </div>
            </div>
        </div>
    </section>
     <?php
            }
            ?>