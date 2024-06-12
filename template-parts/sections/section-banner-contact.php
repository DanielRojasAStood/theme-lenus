<?php 

$sitename             = get_bloginfo('name');
$gruop_banner_contact = get_field('gruop_banner_contact');
$heading              = isset($gruop_banner_contact['heading']) ? $gruop_banner_contact['heading'] : '';
$copy                 = isset($gruop_banner_contact['copy']) ? $gruop_banner_contact['copy'] : '';

$cta                  = isset($gruop_banner_contact['cta']) ? $gruop_banner_contact['cta'] : [];
$cta_url              = isset($cta['url']) ? $cta['url'] : '';
$cta_title            = isset($cta['title']) ? $cta['title'] : '';
$cta_target           = isset($cta['target']) ? $cta['target'] : '';

$image_id      = !empty($gruop_banner_contact["image"]['ID']) ? $gruop_banner_contact["image"]['ID'] : '';
$image_src     = wp_get_attachment_image_url($image_id, 'custom-size-2x');
$image_srcset  = wp_get_attachment_image_srcset($image_id, 'custom-size-2x');
$image_info    = wp_get_attachment_image_src($image_id, 'full');
$image_width   = ($image_info) ? $image_info[1] : '';
$image_height  = ($image_info) ? $image_info[2] : '';
$image_alt     = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
$image_title   = ($image_id) ? get_the_title($image_id) : '';
?>
<div class="bannerCtaNosotros columnTwoPro">
    <div class="column">
        <?php if (!empty($heading)) : ?>
            <h2 class="titleCtaNosotros"><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>

        <?php if (!empty($copy)) : ?>
            <p class="textCtaNostros"><?php echo $copy; ?></p>
        <?php endif; ?>

        <?php if (!empty($cta_title)) : ?>
            <div class="btnProTwo">
                <a href="<?php echo esc_url($cta_url); ?>" class="btn cta" target="<?php echo esc_attr($cta_target); ?>">
                    <?php echo esc_html($cta_title); ?>
                </a>
            </div>
        <?php endif; ?>

    </div>
    <div class="column">
        <img class="img-fluid imageCtaNosotros visibleDesktop"  width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" src="<?php echo $image_src; ?>" data-src="<?php echo $image_src; ?>" srcset="<?php echo $image_srcset; ?>" data-srcset="<?php echo $image_srcset; ?>" alt="<?php echo $image_alt . ' - ' . $sitename; ?>" title="<?php echo $image_title; ?>">
    </div>
</div>