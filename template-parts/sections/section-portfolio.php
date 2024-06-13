<?php 

$sitename        = get_bloginfo('name');
$group_portfolio = get_field('group_portfolio');
$heading         = isset($group_portfolio['heading']) ? esc_html($group_portfolio['heading']) : '';

$enlace         = $group_portfolio['download'];
$enlace_title   = isset($enlace['title']) ? esc_html($enlace['title']) : '';
$enlace_url     = isset($enlace['url']) ? esc_url($enlace['url']) : '';
$enlace_target  = isset($enlace['target']) ? esc_html($enlace['target']) : '';

$image_id        = !empty($group_portfolio["image"]['ID']) ? $group_portfolio["image"]['ID'] : '';
$image_src       = wp_get_attachment_image_url($image_id, 'custom-size-2x');
$image_srcset    = wp_get_attachment_image_srcset($image_id, 'custom-size-2x');
$image_info      = wp_get_attachment_image_src($image_id, 'full');
$image_width     = ($image_info) ? $image_info[1] : '';
$image_height    = ($image_info) ? $image_info[2] : '';
$image_alt       = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
$image_title     = ($image_id) ? get_the_title($image_id) : '';

?>
<section class="sectionPortafolio">
    <?php if($heading) :?>
    <h2 class="titleContainerEquipo"><?php echo $heading; ?></h2>
    <?php endif; ?>

    <?php if($enlace_title) : ?>
    <div class="btnProOne btnConoceMas">
        <a href="<?php echo $enlace_url; ?>" class="btn btn-primary cta" title="<?php echo $enlace_title; ?>" target="<?php echo $enlace_target; ?>"><?php echo $enlace_title; ?></a>
    </div>
    <?php endif; ?>
    <img class="" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" src="<?php echo $image_src; ?>" data-src="<?php echo $image_src; ?>" srcset="<?php echo $image_srcset; ?>" data-srcset="<?php echo $image_srcset; ?>" alt="<?php echo $heading . ' - ' . $sitename; ?>" title="<?php echo $image_title; ?>">
</section>