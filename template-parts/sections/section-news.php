<?php 
$sitename       = get_bloginfo('name');
$global_content = get_page_by_path('global-content')->ID;
$group_news     = ($global_content) ? get_field('group_news', $global_content) : null;

$subheading     = isset($group_news['subheading']) && !empty($group_news['subheading']) ? $group_news['subheading'] : '';
$heading        = isset($group_news['heading']) && !empty($group_news['heading']) ? $group_news['heading'] : '';

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
);
$posts_query = new WP_Query($args);
?>
<section class="sectionCarouselHome2">
    <div class="textCenter">
        <?php if($subheading) {?>
        <span class="titleNuestraHistoria"> <?php echo $subheading; ?></span>
        <?php } ?>

        <?php if($heading) {?>
        <h2 class="titleContainerEquipo"> <?php echo $heading; ?></h2>
        <?php } ?>

        <section class="moduloA2 container">
            <div class="modulo-HU02-3 slide mrgt2-5">
                <?php if ($posts_query->have_posts()) :
                    while ($posts_query->have_posts()) : $posts_query->the_post(); 
                    $id             = get_the_ID();
                    $title          = get_the_title();
                    $link           = get_the_permalink();
                    $excerpt        = !empty(get_the_excerpt($id)) ? esc_html(get_the_excerpt($id)) : 'Sin descripción';
                    $excerpt        = substr( $excerpt, 0, 96 );
                    $short_excerpt  = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );

                    $img_id         = get_post_thumbnail_id($id);
                    $img_src        = wp_get_attachment_image_url($img_id, 'custom-size');
                    $img_srcset     = wp_get_attachment_image_srcset($img_id, 'custom-size');
                    $image          = wp_get_attachment_image_src( get_post_thumbnail_id($id), "full" );
                ?>
                <div>
                    <a href="<?php echo $link?>" title="<?php echo $title; ?>">
                        <div class="cardComponent">
                            <div class="image imageCardHome">
                                <img class="img-fluid" src="<?php echo $img_src ?>" data-src="<?php echo $img_src ?>" srcset="<?php echo $img_srcset ?>" data-srcset="<?php echo $img_srcset ?>" alt="<?php echo $title . ' - ' . $sitename; ?> " title="<?php echo $title ?>" width="<?php echo $image[1]; ?>"  height="<?php echo $image[2]; ?>">
                            </div>
                            <div class="body cardBodyCarousel">
                                <p class="tagCardCarousel">Inversiones en salud</p>
                                <?php if($title) { ?>
                                <h3 class="titleCards2"><?php echo $title; ?></h3>
                                <?php } ?>

                                <?php if($short_excerpt) { ?>
                                <h5 class="subtitleCard2"><?php echo $short_excerpt; ?></h5>
                                <?php } ?>

                                <?php if($link) { ?>
                                <p class="textCardCarousel2"> Seguir leyendo </p>
                                <?php } ?>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endwhile;
                    wp_reset_postdata();
                    else : ?>
                    <p><?php _e('No se encontraron Noticias.', 'textdomain'); ?></p>
                <?php endif; ?>
            </div>
            <div class="slider-navigation">
                <div class="slider-dots "></div>
                <div class="slider-info">
                    <span id="current-slide">1</span> /<span id="total-slides">4</span>
                </div>
            </div>
        </section>
    </div>
</section>