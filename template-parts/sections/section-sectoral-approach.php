<?php 
$sitename                = get_bloginfo('name');
$group_sectoral_approach = get_field('group_sectoral_approach');
$heading                 = isset($group_sectoral_approach['heading']) ? esc_html($group_sectoral_approach['heading']) : '';
$items                   = isset($group_sectoral_approach['items']) ? $group_sectoral_approach['items'] : [];

$image_id                = !empty($group_sectoral_approach["image"]['ID']) ? $group_sectoral_approach["image"]['ID'] : '';
$image_src               = wp_get_attachment_image_url($image_id, 'custom-size-2x');
$image_srcset            = wp_get_attachment_image_srcset($image_id, 'custom-size-2x');
$image_info              = wp_get_attachment_image_src($image_id, 'full');
$image_width             = ($image_info) ? $image_info[1] : '';
$image_height            = ($image_info) ? $image_info[2] : '';
$image_alt               = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
$image_title             = ($image_id) ? get_the_title($image_id) : '';

?>

<section class="sectionImageItems">
    <div class="sectionImageItems__bckg">
        <div class="container--large">
            <div class="sectionImageItems__grid">
                <div class="sectionImageItems__img">
                    <img class="" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" src="<?php echo $image_src; ?>" data-src="<?php echo $image_src; ?>" srcset="<?php echo $image_srcset; ?>" data-srcset="<?php echo $image_srcset; ?>" alt="<?php echo $heading . ' - ' . $sitename; ?>" title="<?php echo $image_title; ?>">
                </div>
                <div class="sectionImageItems__info">
                    <div class="sectionImageItems__title">
                        <h2 class="heading--48 line line--blue"><?php echo $heading; ?></h2>
                    </div>
                    <div class="sectionImageItems__items">
                        <?php foreach ($items as $keyItems => $item) { 
                            $values = $item['items']; ?>
                            <div class="sectionImageItems__item">
                                <h3 class="heading--32"> <?php echo $item['heading']?></h3>
                                <?php foreach ($values as $keyValue => $value) { ?>
                                    <div class="<?php echo $keyItems == 1 ? 'orange' : 'blue' ?>">
                                        <?php if($value['heading']) : ?>
                                        <p class="heading--25"><?php echo $value['heading']?></p>
                                        <?php endif ?>
    
                                        <?php if($value['details']) : ?>
                                        <p class="heading--18"><?php echo $value['details']?></p>
                                        <?php endif ?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>