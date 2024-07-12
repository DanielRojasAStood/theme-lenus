<?php
/*
Template Name: Plantilla Estrategia
*/
get_header();

$show_text_image_banner = get_field('show_text_image_banner');
$show_future            = get_field('show_future');
$show_sectoral_approach = get_field('show_sectoral_approach');
$show_charting_course   = get_field('show_charting_course');
$show_strategy_2        = get_field('show_strategy_2');
$show_portfolio         = get_field('show_portfolio');
$show_banner_contact    = get_field('show_banner_contact');
?>

<!-- INICIO CONTENIDO -->
<main>
    <?php if ($show_text_image_banner) { ?>
        <!-- BANNER -->
        <?php get_template_part('template-parts/sections/section', 'text-image-banner')  ?>
        <!-- FIN BANNER -->
    <?php } ?>

    <?php if ($show_future) { ?>
        <!-- NUESTRO PRESENTE -->
        <?php get_template_part('template-parts/sections/section', 'future')  ?>
        <!-- FIN NUESTRO PRESENTE -->
    <?php } ?>

    <?php if ($show_sectoral_approach) { ?>
        <!-- ENFOQUE SECTORIAL -->
        <?php get_template_part('template-parts/sections/section', 'sectoral-approach')  ?>
        <!-- FIN ENFOQUE SECTORIAL -->
    <?php } ?>

    <?php if ($show_charting_course) { ?>
        <!-- TRAZANDO UN RUMBO -->
        <?php get_template_part('template-parts/sections/section', 'charting-course')  ?>
        <!-- FIN TRAZANDO UN RUMBO -->
    <?php } ?>

    <?php if ($show_strategy_2) { ?>
        <!-- ESTRATEGIA -->
        <?php get_template_part('template-parts/sections/section', 'strategy')  ?>
        <!-- FIN ESTRATEGIA -->
    <?php } ?>

    <?php if ($show_portfolio) { ?>
        <!-- PORTAFOLIO -->
        <?php get_template_part('template-parts/sections/section', 'portfolio')  ?>
        <!-- FIN PORTAFOLIO -->
    <?php } ?>

    <?php if ($show_banner_contact) { ?>
        <!-- BANNER CONTACTO -->
    <?php get_template_part('template-parts/sections/section', 'banner-contact')  ?>
        <!-- FIN BANNER CONTACTO -->
    <?php } ?>
    
</main>
<!-- INICIO CONTENIDO -->

<?php get_footer() ?>