<?php
/* 
Template Name: Plantilla Inicio
*/

get_header();

$show_banner           = get_field('show_banner');
$show_text_image_video = get_field('show_text_image_video');
$show_clinics          = get_field('show_clinics');
$show_our_commitment   = get_field('show_our_commitment');
$show_invest           = get_field('show_invest');
$show_news             = get_field('show_news');
$show_faqs             = get_field('show_faqs');
?>

<!-- INICIO CONTENIDO -->
<main>

    <?php if ($show_banner) { ?>
        <!-- SECCION BANNER -->
        <?php get_template_part('template-parts/sections/section', 'banner')  ?>
        <!-- FIN SECCION BANNER -->
    <?php } ?>
    
    
    <?php if ($show_text_image_video) { ?>
        <!-- SECCION TRANSFORMANDO -->
        <?php get_template_part('template-parts/sections/section', 'text-image-video')  ?>
        <!-- FIN SECCION TRANSFORMANDO -->
    <?php } ?>

    <?php if ($show_clinics) { ?>
        <!-- SECCION CLINICAS -->
        <?php get_template_part('template-parts/sections/section', 'clinics')  ?>
        <!-- FIN SECCION CLINICAS -->
    <?php } ?>

    <?php if ($show_our_commitment) { ?>
        <!-- SECCION NUESTRO COMPROMISO-->
        <?php get_template_part('template-parts/sections/section', 'our-commitment')  ?>
        <!-- FIN SECCION NUESTRO COMPROMISO-->
    <?php } ?>

    <?php if ($show_invest) { ?>
        <!-- INVERTIR-->
        <?php get_template_part('template-parts/sections/section', 'invest')  ?>
        <!-- FIN INVERTIR-->
    <?php } ?>

    <?php if ($show_news) { ?>
        <!-- NOTICIAS-->
        <?php get_template_part('template-parts/sections/section', 'news')  ?>
        <!-- FIN NOTICIAS-->
    <?php } ?>

    <?php if ($show_faqs) { ?>
        <!-- PREGUNTAS FRECUENTES-->
        <?php get_template_part('template-parts/sections/section', 'faqs')  ?>
        <!-- FIN PREGUNTAS FRECUENTES-->
    <?php } ?>

</main>
<!-- INICIO CONTENIDO -->

<?php get_footer() ?>