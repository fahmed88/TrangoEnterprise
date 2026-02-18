<?php
$title       = $args['title'];
$content     = $args['content'];
$category    = $args['category'];
$classes     = isset($args['classes']) ? $args['classes'] : '';
$bg_class    = isset($args['bg_class']) ? $args['bg_class'] : 'bg-white';
$show_search = isset($args['show_search']) ? $args['show_search'] : true;
$styles = isset($args['styles']) ? $args['styles'] : '';

$args = array(
    'post_type'           => 'faqs',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      =>-1,
    'orderby'             => 'asc',
    'order'               => 'asc',
    'tax_query'           => array(array(
        'taxonomy'      => 'faqs_categories',
        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
        'terms'         => $category ? $category : 'mobile',
        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
    ))
);

$the_query      = new WP_Query( $args );
$titlefaq=get_field('faqs_heading');
?>
<section class="animated-row section ask-question no-lzl-section <?php echo $bg_class; ?> <?php echo $classes; ?>" <?php echo $styles ? 'style="'. $styles .'"': ''; ?>>
        <div class="container">
            <div class="text-cont">
                <div class="row">

                    <div class="<?php echo $show_search ? 'col-md-8' : 'col-md-12'; ?>">
                        <h2 class="section-title <?php echo !$show_search ? 'text-center' : ''; ?>"><?php echo $title ? $title : '<span>Ask</span> Any Questions' ?></h2>
                    </div>
                    <?php if ($show_search) : ?>
                        <div class="col-md-4">
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control" placeholder="Type your question here.."
                                    aria-label="Username" aria-describedby="addon-wrapping">
                                <span class="input-group-text" id="addon-wrapping">
                                    <a href="#" aria-label="Faqs Search Button"><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="28"
                                                    viewBox="0 0 28 28">
                                        <image id="Layer_0" data-name="Layer 0" x="2" y="2" width="24" height="24"
                                            xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAByFBMVEUAAAD/AADlIz7jJTzdJjvcKTrMMzPfIEDeJjjeJTreJTrdJTrdJTnfJDreJTreJTrfIDjbJDveJTrfJTrdJDrfJTneJTrdJTrdJTrfJjzdJDvdJTreJDrjJjnbJjvdJTrdJTrhJTjbJDneJzfeJDnhJTrfIDDdJTreJTrbIzfeKTrdJDreJTvgIznfJTrcJDr/gIDeJTndJDrbJDveJTrfJTrpITfbJDrdJTrdJTreJjrhJDjkJDveJDreJTreJDneJjrhJjveJDnfJTvcJTneJDvZIDndJTrfJjrgJTvdJTr/MzPeJTneJTndIjfeJTneJTvaJTjeJTrfJTrfKDjeJTreJjnhJDvUKireJDrdJTnfJDvdJDrbJDfqFUDfJjrdJTnoFy4AAADdJTreJTrfJTrdJjfeJTnqKirqKkDdIzreJDrfJTvfJTvdIjncIzngJTreJTrdJTneJTrdJDnfJTnfIDXcJzreJTrdJTnhJjr/AP/eITffJDrfJDrcJjncJTneJjveJjrZJTzbJCTUIDXdJDrcJDnfKjXfJTrfJDrYFDvEJyfdJTrfJTrMGTPYJzveJTneJTrfJDvjKjnhJDfeJToAAAB8A9e/AAAAlnRSTlMAAR03PCwFEHrP7vv+9dqRIE7l16umyf76gHHyoxt66qdEVS7TkBDm/E8f4vg6bpoCZrkr6fUXI/HclU04/Kxrczz9pWd6KPPFi2EF1s4lmYI3/s4g8+crDNJZhtIcDK+tCwGk7WA8yQwMiffdn29mg9j6s8TIGEKxyl0BF769UXV6XSIHGL2/GMfFDQ3JxgoNwfE4EipFN/TpAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAAd0SU1FB+YIHg46EL7/2kUAAAEfSURBVCjPbY/VdsMwEEStsuumzClDmjIzpMyYMjMzpeQyM8/3NkeOYqvH+zJXM9rVShCUIi6ubu4ewv/y9BK9JR+Dr58/7wcEAkHBIaFhCI/Q+pGSMYpejY6JRRxx+vGSMYFxYhKSGZtSzKlqd1p6RqYDs5Cdo5mbizxlGBGRr32QFBQWUSguKeVXLEM51YrKKj6woJpqTW0dH9SjgWpjUzMftKCValu72cQ93iF1KtSFbm3QY+11/L2vf2BQ9YeGMcJ4FGPjjCcmMTXNDjOzmJun7WRBBBaXnO3LK6tYW9/Y3Nq27uzuYd+mbnJwaIC9pKPjE/kUZ7JmGdv5xeXV9Y2dbu9w/yDolfyIp2fd5OUVb++6ycfn17duIPz8kj/XIz80TEbCMwAAAABJRU5ErkJggg=="/>
                                        </svg>
                                    </a>
                                </span>
                            </div>
                        </div>
                    <?php endif; ?>
                    <p class="<?php echo !$show_search ? 'text-center' : ''; ?>">
                        <?php echo $content ? $content : ''; ?>
                    </p>
                </div>
            </div>
            <?php

if ($the_query->found_posts!=0)
{
    $i=1;
    while ( $the_query->have_posts() ) : $the_query->the_post();
        $feat_image         = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        $client_title		    = get_the_title($post->ID);
        ?>
            <button type="button" class="collapsible"><?php echo $client_title; ?>
            </button>
            <div class="content">
                <?php the_content(); ?>
            </div>

            <?php
                        $i++;
                    endwhile;
                    wp_reset_postdata();
                    wp_reset_query();
                }?>
            
           
            
        </div>
    </section>