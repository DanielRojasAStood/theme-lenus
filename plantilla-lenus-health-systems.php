<?php
/*
Template Name: Plantilla Lenus Health Systems
*/
get_header();

$show_text_image_banner = get_field('show_text_image_banner');
$show_management        = get_field('show_management');

?>

<!-- INICIO CONTENIDO -->
<main>
    <?php if ($show_text_image_banner) { ?>
        <!-- BANNER -->
        <?php get_template_part('template-parts/sections/section', 'text-image-banner')  ?>
        <!-- FIN BANNER -->
    <?php } ?>

    <?php if ($show_management) { ?>
        <!-- MANAGEMENT -->
        <?php get_template_part('template-parts/sections/section', 'management')  ?>
        <!-- FIN MANAGEMENT -->
    <?php } ?>

   
    
</main>
<!-- INICIO CONTENIDO -->

<?php get_footer() ?>