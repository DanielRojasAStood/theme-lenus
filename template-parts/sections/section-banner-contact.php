<?php 

$sitename             = get_bloginfo('name');
$gruop_banner_contact = get_field('gruop_banner_contact');
$heading              = !empty($gruop_banner_contact['heading']) ? $gruop_banner_contact['heading'] : '';
$copy                 = !empty($gruop_banner_contact['copy']) ? $gruop_banner_contact['copy'] : '';

$cta                  = !empty($gruop_banner_contact['cta']) ? $gruop_banner_contact['cta'] : [];
$cta_url              = !empty($cta['url']) ? $cta['url'] : '';
$cta_title            = !empty($cta['title']) ? $cta['title'] : '';
$cta_target           = !empty($cta['target']) ? $cta['target'] : '';

$image_id      = !empty($gruop_banner_contact["image"]['ID']) ? $gruop_banner_contact["image"]['ID'] : '';
$image_src     = wp_get_attachment_image_url($image_id, 'custom-size-2x');
$image_srcset  = wp_get_attachment_image_srcset($image_id, 'custom-size-2x');
$image_info    = wp_get_attachment_image_src($image_id, 'full');
$image_width   = ($image_info) ? $image_info[1] : '';
$image_height  = ($image_info) ? $image_info[2] : '';
$image_alt     = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
$image_title   = ($image_id) ? get_the_title($image_id) : '';
?>

<section class="sectionContacto">
    <div class="sectionContacto__bckg">
        <div class="container--large">
            <div class="sectionContacto__grid">
                <div class="sectionContacto__info">
                    <?php if ($heading) : ?>
                        <h2 class="heading--48 line line--blue"><?php echo esc_html($heading); ?></h2>
                    <?php endif; ?>
    
                    <?php if ($copy) : ?>
                        <div class="heading--18"><?php echo $copy; ?></div>
                    <?php endif; ?>
    
                    <?php if ($cta_title) : ?>
                        <a href="<?php echo esc_url($cta_url); ?>" class="button button--white" target="<?php echo esc_attr($cta_target); ?>">
                            <?php echo esc_html($cta_title); ?>
                        </a>
                    <?php endif; ?>
                </div>
    
                <div class="sectionContacto__img">
                    <img width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" src="<?php echo $image_src; ?>" data-src="<?php echo $image_src; ?>" srcset="<?php echo $image_srcset; ?>" data-srcset="<?php echo $image_srcset; ?>" alt="<?php echo $image_alt . ' - ' . $sitename; ?>" title="<?php echo $image_title; ?>">
                </div>
            </div>
        </div>
    </div>
</div>