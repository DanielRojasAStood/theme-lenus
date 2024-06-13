<?php 
$sitename                 = get_bloginfo('name');
$grupo_texto_image_banner = get_field('grupo_texto_image_banner');
$heading                  = isset($grupo_texto_image_banner['heading']) ? $grupo_texto_image_banner['heading'] : '';

$image_id                 = !empty($grupo_texto_image_banner["image"]['ID']) ? $grupo_texto_image_banner["image"]['ID'] : '';
$image_src                = wp_get_attachment_image_url($image_id, 'custom-size-2x');
$image_srcset             = wp_get_attachment_image_srcset($image_id, 'custom-size-2x');
$image_info               = wp_get_attachment_image_src($image_id, 'full');
$image_width              = ($image_info) ? $image_info[1] : '';
$image_height             = ($image_info) ? $image_info[2] : '';
$image_alt                = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
$image_title              = ($image_id) ? get_the_title($image_id) : '';
?>
<div class="bgContentBlueTwo">
    <div class="separadorProSix visibleDesktop"></div>
    <div class="separadorProFour visibleMobile"></div>
    <div class="">
        <section class="">
            <div class="columnTwoPro gapTwo columnEstrategia">
                <div class="column columnOneA3">
                    <div class="infoText textCard">
                        <?php if ($heading): ?>
                        <h1 class="textBannerPrincipalEstrategia textWhite"><?php echo $heading; ?></h1>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="column">
                    <?php if ($image_id): ?>
                    <img class="img-fluid w-90"  width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" src="<?php echo $image_src; ?>" data-src="<?php echo $image_src; ?>" srcset="<?php echo $image_srcset; ?>" data-srcset="<?php echo $image_srcset; ?>" alt="<?php echo $heading . ' - ' . $sitename; ?>" title="<?php echo $image_title; ?>">
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</div>