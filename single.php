<?php
$sitename       = get_bloginfo('name');
$grupo_banner_destacado  = get_field("grupo_banner_destacado");

$image_id      = !empty($grupo_banner_destacado["imagen"]['ID']) ? $grupo_banner_destacado["imagen"]['ID'] : '';
$image_src     = wp_get_attachment_image_url($image_id, 'custom-size-2x');
$image_srcset  = wp_get_attachment_image_srcset($image_id, 'custom-size-2x');
$image_info    = wp_get_attachment_image_src($image_id, 'full');
$image_width   = ($image_info) ? $image_info[1] : '';
$image_height  = ($image_info) ? $image_info[2] : '';
$image_alt     = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
$image_title   = ($image_id) ? get_the_title($image_id) : '';

$pagina_id      = get_page_by_path('inicio')->ID;
$show_news      = ($pagina_id) ? get_field('show_news', $pagina_id) : null;

$grupo_texto_caja_azul  = get_field("grupo_texto_caja_azul");
$texto_caja_azul        = !empty($grupo_texto_caja_azul['texto']) ? $grupo_texto_caja_azul['texto'] : '';

get_header(); 

// Obtener la primera categoría
$categories = get_the_category();
$first_category = !empty($categories) ? $categories[0]->name : 'Sin categoría';
?>

<main id="primary" class="site-main">
    <?php while (have_posts()) : the_post(); ?>

    <section class="sectionInternaBlog__banner">
        <img width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" src="<?php echo $image_src; ?>" data-src="<?php echo $image_src; ?>" srcset="<?php echo $image_srcset; ?>" data-srcset="<?php echo $image_srcset; ?>" alt="<?php echo $image_alt . ' - ' . $sitename; ?>" title="<?php echo $image_title; ?>">
    </section>

    <section class="sectionInternaBlog__container">
        <div class="sectionInternaBlog__social">
            <p class="categoria"><?php echo $first_category; ?></p>
            <div class="sectionInternaBlog__compartir">
                <p>Compartir en:</p>
                <div class="">
                    <a href="">
                        <?php 
                            get_template_part('template-parts/content', 'icono');
                            display_icon('facebook'); 
                        ?>
                    </a>
                    <a href="">
                        <?php 
                            get_template_part('template-parts/content', 'icono');
                            display_icon('whatsapp'); 
                        ?>
                    </a>
                    <a href="">
                        <?php 
                            get_template_part('template-parts/content', 'icono');
                            display_icon('email'); 
                        ?>
                    </a>
                </div>
            </div>
        </div>

        <h1 class="heading--32"><?php the_title();?></h1>

        <p class="sectionInternaBlog__fecha"><?php echo get_the_date('j \d\e F \d\e Y'); ?></p>

        <?php the_content();?>

        <?php if($texto_caja_azul) : ?>
        <p class="sectionInternaBlog__caja">
            <?php echo $texto_caja_azul; ?>
        </p>
        <?php endif; ?>
    </section>
    <?php endwhile; ?>

    <?php if ($show_news) { ?>
        <!-- NOTICIAS-->
        <?php get_template_part('template-parts/sections/section', 'news')  ?>
        <!-- FIN NOTICIAS-->
    <?php } ?>
</main>
<?php get_footer(); ?>