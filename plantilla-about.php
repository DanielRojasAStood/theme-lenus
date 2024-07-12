<?php
/*
Template Name: Plantilla Nosotros
*/
get_header();

$show_banner            = get_field('show_banner');
$show_team              = get_field('show_team');
$show_history           = get_field('show_history');
$show_principles        = get_field('show_principles');
$show_banner_contact    = get_field('show_banner_contact');
?>

<!-- INICIO CONTENIDO -->
<main>
    <?php if ($show_banner) { ?>
        <!-- BANNER -->
        <?php get_template_part('template-parts/sections/section', 'banner')  ?>
        <!-- FIN BANNER -->
    <?php } ?>

    <?php if ($show_team) { ?>
        <!-- NUESTRO EQUIPO -->
        <?php get_template_part('template-parts/sections/section', 'team')  ?>
        <!-- FIN NUESTRO EQUIPO -->
    <?php } ?>

    <?php if ($show_history) { ?>
        <!-- HISTORIA -->
    <?php get_template_part('template-parts/sections/section', 'history')  ?>
        <!-- FIN HISTORIA -->
    <?php } ?>

    <?php if ($show_principles) { ?>
        <!-- NUESTROS VALORES -->
    <?php get_template_part('template-parts/sections/section', 'principles')  ?>
        <!-- FIN NUESTROS VALORES -->
    <?php } ?>

    <?php if ($show_banner_contact) { ?>
        <!-- BANNER CONTACTO -->
    <?php get_template_part('template-parts/sections/section', 'banner-contact')  ?>
        <!-- FIN BANNER CONTACTO -->
    <?php } ?>
    
</main>
<!-- INICIO CONTENIDO -->

<?php get_footer() ?>