<?php 

$sitename           = get_bloginfo('name');
$grupo_management   = get_field('grupo_management');
$subheading         = !empty($grupo_management['subheading']) ? esc_html($grupo_management['subheading']) : '';
$heading            = !empty($grupo_management['heading']) ? esc_html($grupo_management['heading']) : '';
$copy               = !empty($grupo_management['copy']) ? $grupo_management['copy'] : '';

$enlace_title   = !empty($enlace['title']) ? esc_html($enlace['title']) : '';
$enlace_url     = !empty($enlace['url']) ? esc_url($enlace['url']) : '';
$enlace_target  = !empty($enlace['target']) ? esc_html($enlace['target']) : '';

$image_id        = !empty($grupo_management["image"]['ID']) ? $grupo_management["image"]['ID'] : '';
$image_src       = wp_get_attachment_image_url($image_id, 'custom-size-2x');
$image_srcset    = wp_get_attachment_image_srcset($image_id, 'custom-size-2x');
$image_info      = wp_get_attachment_image_src($image_id, 'full');
$image_width     = ($image_info) ? $image_info[1] : '';
$image_height    = ($image_info) ? $image_info[2] : '';
$image_alt       = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
$image_title     = ($image_id) ? get_the_title($image_id) : '';

?>

<section class="sectionManagement">
    <div class="sectionManagement__bckg">
        <div class="container--large">
            <div class="sectionManagement__title">
                <?php if($subheading) : ?>
                <p class="subheading">
                    <?php echo $subheading; ?>
                </p>
                <?php endif; ?>

                <?php if($heading) : ?>
                <h2 class="heading--48 color--fff line line--white line--center">
                    <?php echo $heading; ?>
                </h2>
                <?php endif; ?>
            </div>

            <div class="sectionManagement__grid">
                <div class="sectionManagement__copy">
                    <?php if($copy) : ?>
                    <div class="color--fff">
                        <?php echo $copy; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="sectionManagement__img">
                    <?php if ($image_id) { ?>
                        <img width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" src="<?php echo $image_src; ?>" data-src="<?php echo $image_src; ?>" srcset="<?php echo $image_srcset; ?>" data-srcset="<?php echo $image_srcset; ?>" alt="<?php echo $heading . ' - ' . $sitename; ?>" title="<?php echo $image_title; ?>">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</section>