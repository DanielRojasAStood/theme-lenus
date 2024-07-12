<?php 
$sitename   = get_bloginfo('name');
$banners    = get_field('banner');
?>

<section class="sectionSliderBanner">
    <div class="sectionSliderBanner__bckg">
        <div class="sectionSliderBanner__padding">
            <div class="sectionSliderBanner__grid">
                <div class="sectionSliderBannerInfo">
                    <div class="slickSliderBannerNav">
                        <?php foreach ($banners as $key => $banner) { 
                            extract($banner);
                        ?>
                            <div class="sectionSliderBanner__copy">
                                <?php if ($banner_subtitulo) { ?>
                                    <p class="subheading"><?php echo esc_html($banner_subtitulo) ?></p>
                                <?php } ?>
                                <?php if ($banner_titulo) { ?>
                                    <?php if ($key == 0) { ?>
                                        <h1 class="heading--64 color--fff line line--white"><?php echo esc_html($banner_titulo) ?></h1>
                                    <?php } else { ?>
                                        <h2 class="heading--64 color--fff line line--white"><?php echo esc_html($banner_titulo) ?></h2>
                                    <?php } ?>
                                <?php } ?>
                                
                                <?php if ($banner_texto) { ?>
                                    <p class="heading--18">
                                        <?php echo wp_strip_all_tags($banner_texto) ?>
                                    </p>
                                <?php } ?>

                                <a class="button button--blue">Conoce más</a>
                            </div>
                        <?php   } ?>
                    </div>
                </div>

                <div class="slickSliderBannerFor">
                    <?php foreach ($banners as $key => $images) { 
                        extract($images);
                    ?>
                        <div class="">
                            <?php if ($banner_web) { ?>
                                <img src="<?php echo esc_url($banner_web['url']) ?>" alt="<?php echo esc_attr($banner_titulo . ' ' . $sitename) ?>" title="<?php echo esc_attr($banner_titulo) ?>" width="<?php echo esc_attr($banner_web['width']) ?>" height="<?php echo esc_attr($banner_web['height']) ?>" />
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>


