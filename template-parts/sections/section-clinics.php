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

<div class="sectionA2">
    <div class="separadorProSix visibleDesktop"></div>
    <div class="separadorProFour visibleMobile"></div>
    <section class="moduloA2 container">
        <?php if($title) { ?>
        <h2 class="titleCenter"><?php echo $title; ?></h2>
        <?php } ?>

        <?php if($copy) { ?>
        <p class="subtitleCenter"><?php echo $copy; ?></p>
        <?php } ?>

        <div class="modulo-HU02-3 slide mrgt2-5">
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
                    <div class="cardComponent">
                        <div class="image imageCardHome">
                            <img class="img-fluid" src="<?php echo $img_src ?>" data-src="<?php echo $img_src ?>" srcset="<?php echo $img_srcset ?>" data-srcset="<?php echo $img_srcset ?>" alt="<?php echo $title . ' - ' . $sitename; ?> " title="<?php echo $title ?>" width="<?php echo $image[1]; ?>"  height="<?php echo $image[2]; ?>">
                        </div>
                        <div class="body">
                            <h1 class="titleCards"><?php echo $title ?></h1>
                            <h5 class="subtitleCard"> <?php echo $office ?></h5>
                            <p class="textCardCarousel"> <?php echo $location ?></p>
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
        <div class="slider-navigation">
            <div class="slider-dots "></div>
            <div class="slider-info">
                <span id="current-slide">1</span> /<span id="total-slides"><?php echo $totalpost; ?></span>
                
            </div>
        </div>
    </section>
</div>
    