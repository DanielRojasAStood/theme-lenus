<?php 
$sitename       = get_bloginfo('name');

$global_content = get_page_by_path('global-content')->ID;
$group_clinics  = ($global_content) ? get_field('group_clinics', $global_content) : null;

$title          = isset($group_clinics['heading']) && !empty($group_clinics['heading']) ? $group_clinics['heading'] : '';
$copy           = isset($group_clinics['copy']) && !empty($group_clinics['copy']) ? $group_clinics['copy'] : '';

$args = array(
    'post_type' => 'clinics',
    'posts_per_page' => -1,
);
$clinics_query = new WP_Query($args);
?>

<section class="sectionSliderSedes">
    <div class="sectionSliderSedes__bckg">
        <div class="sectionSliderSedes__padding">
            <div class="container--large">
                <div class="sectionSliderSedes__title">
                    <?php if($title) :?>
                        <h2 class="heading--48 line line--blue line--center"><?php echo $title; ?></h2>
                    <?php endif; ?>
                    
                    <?php if($copy) :?>
                        <p class="heading--18"><?php echo $copy; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="sectionSliderSedes__container">
                <div class="slickSliderSedes">
                    <?php if ($clinics_query->have_posts()): ?>
                        <?php while ($clinics_query->have_posts()): ?>
                            <?php $clinics_query->the_post(); ?>
                            <?php $grupo_sedes = get_field('grupo_sedes'); ?>

                            <?php if (is_array($grupo_sedes) && isset($grupo_sedes['sedes'])): ?>
                                <?php $sedes = $grupo_sedes['sedes']; ?>

                                <?php if (is_array($sedes)): ?>
                                    <?php foreach ($sedes as $sede): ?>
                                        <?php 
                                        $image_id      = !empty($sede["imagen"]['ID']) ? $sede["imagen"]['ID'] : '';
                                        $image_src     = wp_get_attachment_image_url($image_id, 'custom-size');
                                        $image_srcset  = wp_get_attachment_image_srcset($image_id, 'custom-size');
                                        $image_info    = wp_get_attachment_image_src($image_id, 'full');
                                        $image_width   = ($image_info) ? $image_info[1] : '';
                                        $image_height  = ($image_info) ? $image_info[2] : '';
                                        $image_alt     = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
                                        $image_title   = ($image_id) ? get_the_title($image_id) : '';
                                        ?>
                                        <a href="">
                                            <div class="sectionSliderSedes__card">
                                                <div class="sectionSliderSedes__img">
                                                <img width="<?php echo $image_width ?>" height="<?php echo $image_height ?>" src="<?php echo $image_src ?>" data-src="<?php echo $image_src ?>" srcset="<?php echo $image_srcset ?>" data-srcset="<?php echo $image_srcset ?>" alt="<?php echo $sede['sede'] . ' - ' . $sitename; ?> " title="<?php echo $sede['sede'] ?>">
                                                </div>
                                                <div class="sectionSliderSedes__info">
                                                    <h3 class="heading--25"><?php the_title(); ?></h3>
                                                    <p class="heading--25 sede"><?php echo $sede['sede']; ?></p>
                                                    <p class="heading--18 city"><?php echo $sede['ciudad']; ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
                <div class="slider-pagination">
                    <div class="seccionSliderClass__counter"></div>
                    <div class="slick-dots"></div>
                </div>
            </div>
        </div>
    </div>
</section>
