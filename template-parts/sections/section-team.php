<?php 
$sitename       = get_bloginfo('name');
$group_team     = get_field('group_team');
$heading        = !empty($group_team['heading']) ? $group_team['heading'] : '';
$copy           = !empty($group_team['copy']) ? $group_team['copy'] : '';
$teams          = !empty($group_team['teams']) ? $group_team['teams'] : array(); 

$image_id     = !empty($group_team['image']['ID']) ? $group_team['image']['ID'] : '';
$image_src    = wp_get_attachment_image_url($image_id, 'custom-size');
$image_srcset = wp_get_attachment_image_srcset($image_id, 'custom-size');
$image_info   = wp_get_attachment_image_src($image_id, 'full');
$image_width  = ($image_info) ? $image_info[1] : '';
$image_height = ($image_info) ? $image_info[2] : '';
$image_alt    = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
$image_title  = ($image_id) ? get_the_title($image_id) : '';

?>

<section class="sectionTeam">
    <div class="sectionTeam__bckg">
        <div class="sectionTeam__container">
            <div class="sectionTeam__title">
                <?php if($heading) { ?>
                    <h2 class="heading--48 line line--blue line--center">
                        <?php echo $heading; ?>
                    </h2>
                    <?php if($copy) { ?>
                        <p class="heading--18"><?php echo $copy; ?></p>
                    <?php } ?>
                    <?php if($image_id) { ?>
                        <img width="<?php echo $image_width ?>" height="<?php echo $image_height ?>" src="<?php echo $image_src ?>" data-src="<?php echo $image_src ?>" srcset="<?php echo $image_srcset ?>" data-srcset="<?php echo $image_srcset ?>" alt="<?php echo $heading . ' - ' . $sitename; ?> " title="<?php echo $heading ?>">
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="sectionTeam__teams-bckg">
            <div class="sectionTeam__teams-container">
                <div class="slickSliderTeams">
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
                        <a href="#">
                            <div class="sectionTeam__teams-img">
                                <img class="img-fluid" width="<?php echo $image_width ?>" height="<?php echo $image_height ?>" src="<?php echo $image_src ?>" data-src="<?php echo $image_src ?>" srcset="<?php echo $image_srcset ?>" data-srcset="<?php echo $image_srcset ?>" alt="<?php echo $heading . ' - ' . $sitename; ?> " title="<?php echo $heading ?>">
                            </div>
                            <div class="sectionTeam__teams-info">
                                <?php if($team['name']) { ?>
                                <h1 class="heading--19 color--fff"><?php echo $team['name']; ?></h1>
                                <?php } ?>

                                <?php if($team['role']) { ?>
                                <div class="heading--14"><?php echo $team['role']; ?></div>
                                <?php } ?>
                            </div>
                        </a>
                    <?php } ?>
                </div>
                <div class="slider-pagination">
                    <div class="seccionSliderClass__counter"></div>
                    <div class="slick-dots"></div>
                </div>
            </div>
        </div>
    </div>
</section>