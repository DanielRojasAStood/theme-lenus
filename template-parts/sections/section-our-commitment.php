<?php 
$sitename               = get_bloginfo('name');
$group_our_commitment   = get_field('group_our_commitment');
$subheading             = !empty($group_our_commitment['subheading']) ? $group_our_commitment['subheading'] : '';
$heading                = !empty($group_our_commitment['heading']) ? $group_our_commitment['heading'] : '';
$copy                   = !empty($group_our_commitment['copy']) ? $group_our_commitment['copy'] : '';
$counters               = !empty($group_our_commitment['counter']) ? $group_our_commitment['counter'] : [];

$image_id      = !empty($group_our_commitment["image"]['ID']) ? $group_our_commitment["image"]['ID'] : '';
$image_src     = wp_get_attachment_image_url($image_id, 'custom-size-2x');
$image_srcset  = wp_get_attachment_image_srcset($image_id, 'custom-size-2x');
$image_info    = wp_get_attachment_image_src($image_id, 'full');
$image_width   = ($image_info) ? $image_info[1] : '';
$image_height  = ($image_info) ? $image_info[2] : '';
$image_alt     = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
$image_title   = ($image_id) ? get_the_title($image_id) : '';
?>

<section class="sectionCommitment">
    <div class="container--large">
        <div class="sectionCommitment__grid">
            <div class="sectionCommitment__info">
                <?php if($subheading) { ?>
                <p class="subheading"><?php echo $subheading; ?></p>
                <?php } ?>

                <?php if($heading) { ?>
                <h2 class="heading--48 line line--blue"><?php echo $heading; ?></h2>
                <?php } ?>

                <?php if($copy) { ?>
                <p class="heading--18"><?php echo $copy; ?></p>
                <?php } ?>

                <div class="sectionCommitment__img">
                    <img width="<?php echo $image_width ?>" height="<?php echo $image_height ?>" src="<?php echo $image_src ?>" data-src="<?php echo $image_src ?>" srcset="<?php echo $image_srcset ?>" data-srcset="<?php echo $image_srcset ?>" alt="<?php echo $heading . ' - ' . $sitename; ?> " title="<?php echo $heading ?>">
                </div>
            </div>
            <div class="sectionCommitment__items">
                <?php foreach ($counters as $key => $counter) { ?>
                    <div class="sectionCommitment__item">
                        <p class="heading--64"><?php echo $counter['number'] ?></p>
                        <p class="heading--40"><?php echo $counter['text'] ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>