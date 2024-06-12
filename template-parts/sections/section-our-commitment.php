<?php 
$sitename               = get_bloginfo('name');
$group_our_commitment   = get_field('group_our_commitment');
$subheading             = isset($group_our_commitment['subheading']) && !empty($group_our_commitment['subheading']) ? $group_our_commitment['subheading'] : '';
$heading                = isset($group_our_commitment['heading']) && !empty($group_our_commitment['heading']) ? $group_our_commitment['heading'] : '';
$copy                   = isset($group_our_commitment['copy']) && !empty($group_our_commitment['copy']) ? $group_our_commitment['copy'] : '';
$counters               = isset($group_our_commitment['counter']) && !empty($group_our_commitment['counter']) ? $group_our_commitment['counter'] : [];

$image_id      = !empty($group_our_commitment["image"]['ID']) ? $group_our_commitment["image"]['ID'] : '';
$image_src     = wp_get_attachment_image_url($image_id, 'custom-size-2x');
$image_srcset  = wp_get_attachment_image_srcset($image_id, 'custom-size-2x');
$image_info    = wp_get_attachment_image_src($image_id, 'full');
$image_width   = ($image_info) ? $image_info[1] : '';
$image_height  = ($image_info) ? $image_info[2] : '';
$image_alt     = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
$image_title   = ($image_id) ? get_the_title($image_id) : '';
?>
<style>
    .moduloA3 {
        position: relative;
        z-index: 1;
    }
</style>
<div class="separadorProSix visibleDesktop"></div>
<div class="separadorProFour visibleMobile"></div>
<section class="moduloA3">
    <div class="columnTwoPro">
        <div class="column columnOneA3">
            <?php if($subheading) { ?>
            <span class="textSmall-upp"><?php echo $subheading; ?></span>
            <?php } ?>

            <?php if($heading) { ?>
            <h2 class="title-section3"><?php echo $heading; ?></h2>
            <?php } ?>

            <?php if($copy) { ?>
            <p class="subtitleCenterA3"><?php echo $copy; ?></p>
            <?php } ?>

            <img class="img-fluid image-doctor visibleDesktop"  width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" src="<?php echo $image_src; ?>" data-src="<?php echo $image_src; ?>" srcset="<?php echo $image_srcset; ?>" data-srcset="<?php echo $image_srcset; ?>" alt="<?php echo $image_alt . ' - ' . $sitename; ?>" title="<?php echo $image_title; ?>">
        </div>
        <div class="column">
            <?php 
            foreach ($counters as $key => $counter) { ?>
                <div class="columnTwoPro column-indicadores">
                    <div class="col-2">
                        <h2 class="numberText"> <?php echo $counter['number'] ?> </h2>
                    </div>
                    <div class="col-9">
                        <p class="text-list-lenus"> <?php echo $counter['text'] ?> </p>
                    </div>
                </div>
            <?php } ?>
            
        </div>
    </div>
</section>