<?php
/*
Template Name: Plantilla Página Nosotros
*/
get_header();

$show_banner            = get_field('show_banner');
$show_team              = get_field('show_team');
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
    
</main>
<!-- INICIO CONTENIDO -->

<?php get_footer() ?>