<?php 
$sitename       = get_bloginfo('name');

$global_content = get_page_by_path('global-content')->ID;
$group_clinics  = ($global_content) ? get_field('group_clinics', $global_content) : null;

$title          = isset($group_clinics['heading']) && !empty($group_clinics['heading']) ? $group_clinics['heading'] : '';
$copy           = isset($group_clinics['copy']) && !empty($group_clinics['copy']) ? $group_clinics['copy'] : '';

$args = array(
    'post_type' => 'clinics',
    'posts_per_page' => 10,
);
$clinics_query = new WP_Query($args);
$totalpost = $clinics_query->found_posts; 
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
                    <?php if ($clinics_query->have_posts()) :
                        while ($clinics_query->have_posts()) : $clinics_query->the_post(); 
                        $totalpost = $clinics_query->found_posts; 
                        $title = get_the_title();
                        $group_additional_information = get_field('group_additional_information');
                        $office = $group_additional_information['office'];
                        $location = $group_additional_information['location'];
        
                        $img_id         = get_post_thumbnail_id($id);
                        $img_src        = wp_get_attachment_image_url($img_id, 'custom-size');
                        $img_srcset     = wp_get_attachment_image_srcset($img_id, 'custom-size');
                        $image          = wp_get_attachment_image_src( get_post_thumbnail_id($id), "full" );
                        ?>
                        <div>
                            <a href="#">
                                <div class="sectionSliderSedes__card">
                                    <div class="sectionSliderSedes__img">
                                        <img class="img-fluid" src="<?php echo $img_src ?>" data-src="<?php echo $img_src ?>" srcset="<?php echo $img_srcset ?>" data-srcset="<?php echo $img_srcset ?>" alt="<?php echo $title . ' - ' . $sitename; ?> " title="<?php echo $title ?>" width="<?php echo $image[1]; ?>"  height="<?php echo $image[2]; ?>">
                                    </div>
                                    <div class="sectionSliderSedes__info">
                                        <h3 class="heading--25"><?php echo $title ?></h3>
                                        <p class="heading--25 sede"> <?php echo $office ?></p>
                                        <p class="heading--18 city"> <?php echo $location ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endwhile;
                            wp_reset_postdata();
                            else : ?>
                            <p><?php _e('No se encontraron clínicas.', 'textdomain'); ?></p>
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