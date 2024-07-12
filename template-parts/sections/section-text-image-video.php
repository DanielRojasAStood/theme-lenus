<?php 
$sitename                   = get_bloginfo('name');
$group_text_image_video     = get_field('group_text_image_video');

$subheading                 = !empty($group_text_image_video['subheading']) ? $group_text_image_video['subheading'] : '';
$heading                    = !empty($group_text_image_video['heading']) ? $group_text_image_video['heading'] : '';
$copy                       = !empty($group_text_image_video['copy']) ? $group_text_image_video['copy'] : '';

$image_id      = !empty($group_text_image_video["image"]['ID']) ? $group_text_image_video["image"]['ID'] : '';
$image_src     = wp_get_attachment_image_url($image_id, 'custom-size-2x');
$image_srcset  = wp_get_attachment_image_srcset($image_id, 'custom-size-2x');
$image_info    = wp_get_attachment_image_src($image_id, 'full');
$image_width   = ($image_info) ? $image_info[1] : '';
$image_height  = ($image_info) ? $image_info[2] : '';
$image_alt     = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
$image_title   = ($image_id) ? get_the_title($image_id) : '';
?>

<section class="sectionTextImagesVideo">
    <div class="sectionTextImagesVideo__bckg">
        <div class="container--large">
            <div class="sectionTextImagesVideo__grid">
                <div class="sectionTextImagesVideo__info">
                    <?php if($subheading) : ?>
                        <p class="subheading"><?php echo $subheading; ?></p>
                    <?php endif; ?>
    
                    <?php if($heading) : ?>
                        <h2 class="heading--32 color--fff line line--white"><?php echo $heading; ?></h2>
                    <?php endif; ?>
    
                    <?php if($copy) : ?>
                        <p class="heading--18 color--fff"><?php echo $copy; ?></p>
                    <?php endif; ?>
                </div>
                <div class="sectionTextImagesVideo__img">
                    <img width="<?php echo $image_width ?>" height="<?php echo $image_height ?>" src="<?php echo $image_src ?>" data-src="<?php echo $image_src ?>" srcset="<?php echo $image_srcset ?>" data-srcset="<?php echo $image_srcset ?>" alt="<?php echo $heading . ' - ' . $sitename; ?> " title="<?php echo $heading ?>">
                </div>
            </div>
        </div>
    </div>

</section>