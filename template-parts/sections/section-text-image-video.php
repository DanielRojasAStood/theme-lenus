<?php 
$sitename                   = get_bloginfo('name');
$group_text_image_video     = get_field('group_text_image_video');

$subheading                 = isset($group_text_image_video['subheading']) && !empty($group_text_image_video['subheading']) ? $group_text_image_video['subheading'] : '';
$heading                    = isset($group_text_image_video['heading']) && !empty($group_text_image_video['heading']) ? $group_text_image_video['heading'] : '';
$copy                       = isset($group_text_image_video['copy']) && !empty($group_text_image_video['copy']) ? $group_text_image_video['copy'] : '';

$image_id      = !empty($group_text_image_video["image"]['ID']) ? $group_text_image_video["image"]['ID'] : '';
$image_src     = wp_get_attachment_image_url($image_id, 'custom-size-2x');
$image_srcset  = wp_get_attachment_image_srcset($image_id, 'custom-size-2x');
$image_info    = wp_get_attachment_image_src($image_id, 'full');
$image_width   = ($image_info) ? $image_info[1] : '';
$image_height  = ($image_info) ? $image_info[2] : '';
$image_alt     = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
$image_title   = ($image_id) ? get_the_title($image_id) : '';
?>
<div class="bgContentBlue">
    <div class="separadorProSix visibleDesktop"></div>
    <div class="separadorProEight visibleMobile"></div>
    <div class="container">
        <section class="moduloA1">
            <div class="columnTwoPro gapTwo">
                <div class="column">
                    <div class="infoText textCard">
                        <?php if($subheading) { ?>
                            <span class="textSmall-upp"><?php echo $subheading; ?></span>
                        <?php } ?>

                        <?php if($heading) { ?>
                        <h2 class="text-bienvendido"><?php echo $heading; ?></h2>
                        <?php } ?>

                        <?php if($copy) { ?>
                        <p class="subtext-bienvendido"> <?php echo $copy; ?> </p>
                        <?php } ?>
                    </div>
                </div>
                <div class="column">
                    <?php if($image_id) { ?>
                        <img class="img-fluid w-100 image-bienvendidos visibleDesktop"  width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" src="<?php echo $image_src; ?>" data-src="<?php echo $image_src; ?>" srcset="<?php echo $image_srcset; ?>" data-srcset="<?php echo $image_srcset; ?>" alt="<?php echo $image_alt . ' - ' . $sitename; ?>" title="<?php echo $image_title; ?>">
                        <img class="img-fluid w-100 visibleMobile" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" src="<?php echo $image_src; ?>" data-src="<?php echo $image_src; ?>" srcset="<?php echo $image_srcset; ?>" data-srcset="<?php echo $image_srcset; ?>" alt="<?php echo $image_alt . ' - ' . $sitename; ?>" title="<?php echo $image_title; ?>">
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
</div>