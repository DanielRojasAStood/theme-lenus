<?php 
$sitename                 = get_bloginfo('name');
$group_copy_image_banner  = get_field('group_copy_image_banner');
$heading                  = !empty($group_copy_image_banner['heading']) ? $group_copy_image_banner['heading'] : '';
$copy                     = !empty($group_copy_image_banner['copy']) ? $group_copy_image_banner['copy'] : '';

$image_id                 = !empty($group_copy_image_banner["image"]['ID']) ? $group_copy_image_banner["image"]['ID'] : '';
$image_src                = wp_get_attachment_image_url($image_id, 'custom-size-2x');
$image_srcset             = wp_get_attachment_image_srcset($image_id, 'custom-size-2x');
$image_info               = wp_get_attachment_image_src($image_id, 'full');
$image_width              = ($image_info) ? $image_info[1] : '';
$image_height             = ($image_info) ? $image_info[2] : '';
$image_alt                = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
$image_title              = ($image_id) ? get_the_title($image_id) : '';
?>

<section class="sectionContactBanner">
    <div class="sectionContactBanner__bckg">
        <div class="container--large">
            <div class="sectionContactBanner__grid">
                <div class="sectionContactBanner__info">
                    <?php if ($heading): ?>
                    <h1 class="heading--64 color--fff line line--white"><?php echo esc_html($heading) ?></h1>
                    <?php endif; ?>

                    <?php if ($copy): ?>
                    <div class="heading--18 color--fff">
                    <?php echo $copy; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if ($image_id): ?>
                    <div class="sectionContactBanner__img">
                        <img  width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" src="<?php echo $image_src; ?>" data-src="<?php echo $image_src; ?>" srcset="<?php echo $image_srcset; ?>" data-srcset="<?php echo $image_srcset; ?>" alt="<?php echo $heading . ' - ' . $sitename; ?>" title="<?php echo $image_title; ?>">
                    </div>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
</section>