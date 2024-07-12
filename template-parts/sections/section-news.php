<?php 
$sitename       = get_bloginfo('name');
$global_content = get_page_by_path('global-content')->ID;
$group_news     = ($global_content) ? get_field('group_news', $global_content) : null;

$subheading     = !empty($group_news['subheading']) ? $group_news['subheading'] : '';
$heading        = !empty($group_news['heading']) ? $group_news['heading'] : '';
$blog_heading   = !empty($group_news['blog_heading']) ? $group_news['blog_heading'] : '';
$interna_title  = !empty($group_news['interna_title']) ? $group_news['interna_title'] : '';

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'orderby' => 'rand',
);
$posts_query = new WP_Query($args);
?>
<section class="sectionSliderNews">
    <div class="sectionSliderNews__bckg">
        <div class="sectionSliderNews__padding">
            <div class="container--large">
                <?php if(is_page('inicio')) { ?>
                    <div class="sectionSliderNews__title">
                    <?php if($subheading) {?>
                    <p class="subheading"> <?php echo $subheading; ?></p>
                    <?php } ?>
                    
                    <?php if($heading) {?>
                    <p class="heading--48 line line--blue line--center"> <?php echo $heading; ?></p>
                    <?php } ?>
                    </div>
                <?php } elseif(is_single()) {?>
                    <div class="sectionSliderNewsInterna__title">
                    <?php if($blog_heading) {?>
                    <p class="heading--48"> <?php echo $interna_title; ?></p>
                    <?php } ?>
                    </div>
                <?php } else {?>
                    <div class="sectionSliderNewsBlog__title">
                    <?php if($blog_heading) {?>
                    <p class="heading--48"> <?php echo $blog_heading; ?></p>
                    <?php } ?>
                    </div>
                <?php }?>
                
            </div>

            <div class="sectionSliderNews__container">
                <div class="slickSliderNews">
                    <?php if ($posts_query->have_posts()) :
                        while ($posts_query->have_posts()) : $posts_query->the_post(); 
                        $id             = get_the_ID();
                        $title          = get_the_title();
                        $link           = get_the_permalink();
                        $excerpt        = !empty(get_the_excerpt($id)) ? esc_html(get_the_excerpt($id)) : 'Sin descripción';
                        $excerpt        = substr( $excerpt, 0, 96 );
                        $short_excerpt  = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );

                        // Obtener la primera categoría
                        $categories = get_the_category();
                        $first_category = !empty($categories) ? $categories[0]->name : 'Sin categoría';

                        $img_id         = get_post_thumbnail_id($id);
                        $img_src        = wp_get_attachment_image_url($img_id, 'custom-size');
                        $img_srcset     = wp_get_attachment_image_srcset($img_id, 'custom-size');
                        $image          = wp_get_attachment_image_src( get_post_thumbnail_id($id), "full" );
                    ?>
                        <article aria-label="<?php echo $title; ?>">
                            <a href="<?php echo $link?>" title="<?php echo $title; ?>">
                                <div class="sectionSliderNews__card">
                                    <div class="sectionSliderNews__img">
                                        <img src="<?php echo $img_src ?>" data-src="<?php echo $img_src ?>" srcset="<?php echo $img_srcset ?>" data-srcset="<?php echo $img_srcset ?>" alt="<?php echo $title . ' - ' . $sitename; ?> " title="<?php echo $title ?>" width="<?php echo $image[1]; ?>"  height="<?php echo $image[2]; ?>">
                                    </div>
                                    <div class="sectionSliderNews__info">
                                        <p class="heading--12"><?php echo $first_category; ?></p>

                                        <?php if($title) { ?>
                                        <h3 class="heading--19"><?php echo $title; ?></h3>
                                        <?php } ?>

                                        <?php if($short_excerpt) { ?>
                                        <p class="heading--18"><?php echo $short_excerpt; ?></p>
                                        <?php } ?>

                                        <?php if($link) { ?>
                                        <span class="leer-mas">
                                            <span>Seguir leyendo</span>
                                            <?php 
                                                get_template_part('template-parts/content', 'icono');
                                                display_icon('arrow-next'); 
                                            ?>
                                        </span>
                                        <?php } ?>
                                    </div>
                                </div>
                            </a>
                        </article>
                        <?php endwhile;
                            wp_reset_postdata();
                            else : ?>
                            <p><?php _e('No se encontraron clínicas.', 'textdomain'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="slider-pagination">
                    <div class="seccionSliderClass__counter"></div>
                    <div class="slick-dots"></div>
                </div>
            </div>
        </div>
    </div>
</section>