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
                <video controls="false" class="sectionTextImagesVideo__video" src="<?php echo IMG_BASE . 'video.mp4'; ?>" width="100%" height="317" controls>
                    <p>Su navegador no soporta vídeos HTML5.</p>
                </video>
            </div>
        </div>
    </div>
</section>