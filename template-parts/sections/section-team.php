<?php 
$sitename       = get_bloginfo('name');
$group_team     = get_field('group_team');
$heading        = isset($group_team['heading']) && !empty($group_team['heading']) ? $group_team['heading'] : '';
$copy           = isset($group_team['copy']) && !empty($group_team['copy']) ? $group_team['copy'] : '';
$teams          = isset($group_team['teams']) && !empty($group_team['teams']) ? $group_team['teams'] : array(); 

$image_id     = !empty($group_team['image']['ID']) ? $group_team['image']['ID'] : '';
$image_src    = wp_get_attachment_image_url($image_id, 'custom-size');
$image_srcset = wp_get_attachment_image_srcset($image_id, 'custom-size');
$image_info   = wp_get_attachment_image_src($image_id, 'full');
$image_width  = ($image_info) ? $image_info[1] : '';
$image_height = ($image_info) ? $image_info[2] : '';
$image_alt    = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
$image_title  = ($image_id) ? get_the_title($image_id) : '';

?>
<div class="containerEquipo">
    <?php if($heading) { ?>
    <h2 class="titleContainerEquipo">
        <?php echo $heading; ?>
    </h2>
    <?php } ?>

    <div class="container containertextContainerEquipo">
        <?php if($copy) { ?>
        <p class="textContainerEquipo"><?php echo $copy; ?></p>
        <?php } ?>
        
        <?php if($image_id) { ?>
        <img class="img-fluid w-100 visibleDesktop" width="<?php echo $image_width ?>" height="<?php echo $image_height ?>" src="<?php echo $image_src ?>" data-src="<?php echo $image_src ?>" srcset="<?php echo $image_srcset ?>" data-srcset="<?php echo $image_srcset ?>" alt="<?php echo $heading . ' - ' . $sitename; ?> " title="<?php echo $heading ?>">
        <?php } ?>
    </div>
</div>
<div class="containerEquipoSlider">
    <section class="moduloA2 container">
        <div class="modulo-HU02-5 slide mrgt2-5">
            <?php foreach ($teams as $key => $team) { 
                $image_id     = !empty($team['image']['ID']) ? $team['image']['ID'] : '';
                $image_src    = wp_get_attachment_image_url($image_id, 'custom-size');
                $image_srcset = wp_get_attachment_image_srcset($image_id, 'custom-size');
                $image_info   = wp_get_attachment_image_src($image_id, 'full');
                $image_width  = ($image_info) ? $image_info[1] : '';
                $image_height = ($image_info) ? $image_info[2] : '';
                $image_alt    = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
                $image_title  = ($image_id) ? get_the_title($image_id) : '';
            ?>
                <div>
                    <a href="#">
                        <div class="cardComponent">
                            <div class="image imageCardHome">
                                <img class="img-fluid" width="<?php echo $image_width ?>" height="<?php echo $image_height ?>" src="<?php echo $image_src ?>" data-src="<?php echo $image_src ?>" srcset="<?php echo $image_srcset ?>" data-srcset="<?php echo $image_srcset ?>" alt="<?php echo $heading . ' - ' . $sitename; ?> " title="<?php echo $heading ?>">
                            </div>
                            <div class="bodTwo cardBodyCarousel">
                                <?php if($team['name']) { ?>
                                <h1 class="titleCardCar"><?php echo $team['name']; ?></h1>
                                <?php } ?>

                                <?php if($team['role']) { ?>
                                <div class="textCardCar"><?php echo $team['role']; ?></div>
                                <?php } ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="slider-navigation">
            <div class="slider-dots "></div>
            <div class="slider-info">
                <span id="current-slide">1</span> /
                <span id="total-slides"><?php echo count($teams); ?></span>
            </div>
        </div>
    </section>
</div>