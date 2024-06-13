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
<section>
    <div class="columnTwoPro containerEnfoque bgBlueSky">
        <div class="column">
            <img class="" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" src="<?php echo $image_src; ?>" data-src="<?php echo $image_src; ?>" srcset="<?php echo $image_srcset; ?>" data-srcset="<?php echo $image_srcset; ?>" alt="<?php echo $heading . ' - ' . $sitename; ?>" title="<?php echo $image_title; ?>">
        </div>
        <div class="column">
            <?php if($heading) : ?>
            <h2 class="titleContainerEstrategia"><?php echo $heading; ?></h2>
            <?php endif ?>
            <div class="columnTwoPro gapFive columnEstrategiaContainer ">
                <?php foreach ($items as $keyItems => $item) { 
                    $values = $item['items']; ?>
                    <div class="column">
                        <h4 class="textEquipoColumn"> <?php echo $item['heading']?></h4>
                        <?php foreach ($values as $keyValue => $value) { ?>
                            <div class="colSectionEquipoText<?php echo $keyItems == 1 ? ' colSectionEquipoTextTwo' : '' ?>">
                                <?php if($value['heading']) : ?>
                                <h5 class="textImpEquipo"><?php echo $value['heading']?></h5>
                                <?php endif ?>

                                <?php if($value['details']) : ?>
                                <p class="subtextImpEquipo"><?php echo $value['details']?></p>
                                <?php endif ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>