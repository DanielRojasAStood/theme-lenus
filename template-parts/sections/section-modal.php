<?php 
$group_text_image_video = get_field('group_text_image_video');
$video                  = !empty($group_text_image_video['video']) ? $group_text_image_video['video'] : '';
?>
<section class="sectionModal" style="display: none">
    <div class="sectionModal__overlay">
        <div class="sectionModal__content">
            <button type="button" class="sectionModal__close" id="close">
                <?php 
                    get_template_part('template-parts/content', 'icono');
                    display_icon('plus-circle'); 
                ?>
            </button>
            <div class="container--large">
                <?php echo $video; ?>
            </div>
        </div>
    </div>
</section>