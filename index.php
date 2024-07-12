<?php

defined('ABSPATH') || exit;

get_header();
$sitename       = get_bloginfo('name');
$pagina_id       = get_page_by_path('inicio')->ID;
$show_news    = ($pagina_id) ? get_field('show_news', $pagina_id) : null;
$grupo_banner    = ($pagina_id) ? get_field('grupo_banner', $pagina_id) : null;

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
);
$posts_query = new WP_Query($args);
// Obtener todas las categorías
$categories = get_categories();
?>
<!-- INICIO CONTENIDO -->
<main>
    <section class="sectionBlogBanner">
        <div class="sectionBlogBanner__bckg">
            <div class="sectionBlogBanner__title">
                <p class="subheading">BIENVENIDO A NUESTRO BLOG</p>
                <h1 class="heading--64 color--fff line line--white line--center"> Entérate de lo último en Lenus</h1>
            </div>
        </div>
    </section>

    <div class="sectionBlogTabCategories">
        <div class="container--large">
            <?php foreach ($categories as $category) : ?>
                <button class="tab-category" data-category-id="<?php echo $category->term_id; ?>">
                    <?php echo $category->name; ?>
                </button>
            <?php endforeach; ?>
        </div>
    </div>

    <section class="sectionBlogArticles">
        <div class="container--large">
            <div class="sectionBlogArticles__articles" id="filtered-posts">
                <?php if ($posts_query->have_posts()) :
                    $idx = 0; ?>
        
                    <div class="first-post">
                        <?php while ($posts_query->have_posts()) : $posts_query->the_post();
                            $id = get_the_ID();
                            $title = get_the_title();
                            $link = get_the_permalink();
                            $excerpt = !empty(get_the_excerpt($id)) ? esc_html(get_the_excerpt($id)) : 'Sin descripción';
                            $excerpt = substr($excerpt, 0, 96);
                            $short_excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));

                            // Obtener la primera categoría
                            $categories = get_the_category();
                            $first_category = !empty($categories) ? $categories[0]->name : 'Sin categoría';
        
                            $img_id = get_post_thumbnail_id($id);
                            $img_src = wp_get_attachment_image_url($img_id, 'custom-size');
                            $img_srcset = wp_get_attachment_image_srcset($img_id, 'custom-size');
                            $image = wp_get_attachment_image_url($img_id, "full");

                            // Obtener la fecha de publicación
                            $published_date = get_the_date('j \d\e F');
        
                            if ($idx == 0) : ?>
                                <article class="sectionBlogArticles__article">
                                    <a href="<?php echo $link; ?>" title="<?php echo $title; ?>">
                                        <div class="sectionBlogArticles__img">
                                            <img src="<?php echo $img_src ?>" data-src="<?php echo $img_src ?>" srcset="<?php echo $img_srcset ?>" data-srcset="<?php echo $img_srcset ?>" alt="<?php echo $title . ' - ' . $sitename; ?> " title="<?php echo $title ?>" width="<?php echo $image[1]; ?>"  height="<?php echo $image[2]; ?>">
                                        </div>
                                        <div class="sectionSliderNews__info">
                                            <p class="heading--12"><?php echo $first_category; ?></p>

                                            <?php if($title) { ?>
                                            <h3 class="heading--32"><?php echo $title; ?></h3>
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
                                    </a>
                                </article>
                            <?php else : ?>
                                <?php if ($idx == 1) : ?>
                                    </div> <!-- Cerrar el div de la primera publicación -->
                                    <div class="other-posts"> <!-- Abrir el div de las demás publicaciones -->
                                    <h2 class="heading--48">Noticias destacadas</h2>
                                <?php endif; ?>
                                <article class="sectionBlogArticles__article">
                                    
                                    <a href="<?php echo $link; ?>" title="<?php echo $title; ?>">
                                        <div class="sectionSliderNews__info">
                                            <p class="heading--12"><?php echo $first_category; ?></p>

                                            <?php if($title) { ?>
                                            <h3 class="heading--19"><?php echo $title; ?></h3>
                                            <?php } ?>

                                            <p class="heading--14">Publicado el <?php echo $published_date; ?></p>

                                        </div>
                                        <div class="sectionBlogArticles__img">
                                            <img src="<?php echo $img_src ?>" data-src="<?php echo $img_src ?>" srcset="<?php echo $img_srcset ?>" data-srcset="<?php echo $img_srcset ?>" alt="<?php echo $title . ' - ' . $sitename; ?> " title="<?php echo $title ?>" width="<?php echo $image[1]; ?>"  height="<?php echo $image[2]; ?>">
                                        </div>
                                    </a>
                                </article>
                            <?php endif;
                            $idx++;
                        endwhile; ?>
                    </div> <!-- Cerrar el div de las demás publicaciones -->
        
                    <?php wp_reset_postdata();
                else : ?>
                    <p><?php _e('No se encontraron clínicas.', 'textdomain'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    
    <?php if ($show_news) { ?>
        <!-- NOTICIAS-->
        <?php get_template_part('template-parts/sections/section', 'news')  ?>
        <!-- FIN NOTICIAS-->
    <?php } ?>
</main>
<!-- INICIO CONTENIDO -->
<?php get_footer() ?>