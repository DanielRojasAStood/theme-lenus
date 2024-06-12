<?php 
$sitename   = get_bloginfo('name');
$banners    = get_field('banner');
?>

<div id="carousel1" class="carousel slide bannerLenus" data-bs-ride="carousel">
    <?php if (count($banners) >= 1) { ?>
        <div class="carousel-inner">
            <?php foreach ($banners as $key => $banner) { 
                $active_class   = ($key == 0) ? 'active' : '';
                extract($banner);
                ?>
                <div class="carousel-item <?php echo esc_attr($active_class) ?> carouselImageItem">
                    <section>
                        <div class="columnTwoPro bannerContainerSlider">
                            <div class="column columnItemSlider">
                                <div class="infoText columnOneBannerSlider">
                                    <?php if ($banner_subtitulo) { ?>
                                        <span class="textSmall-upp"><?php echo esc_html($banner_subtitulo) ?></span>
                                    <?php } ?>
                                    <?php if ($banner_titulo) { ?>
                                        <h1 class="titleBannerItem textWhite"><?php echo esc_html($banner_titulo) ?></h1>
                                    <?php } ?>
                                    <p class="textBannerItem textWhite">
                                        <?php echo wp_strip_all_tags($banner_texto) ?>
                                    </p>
                                    <div id="slideIndicator<?php echo esc_attr($key + 1) ?>" class="carousel-indicator textWhite"></div>
                                    <?php if (count($banners) > 1) { ?>
                                        <ol class="carousel-indicators textWhite">
                                            <?php foreach ($banners as $key_i => $value) { 
                                                $active_class_indicators    = ($key_i == 0) ? 'active' : '';
                                                ?>
                                                <li data-bs-target="#carousel1" data-bs-slide-to="<?php echo esc_attr($key_i) ?>" class="<?php echo esc_attr($active_class_indicators) ?>"></li>
                                            <?php } ?>
                                        </ol>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="column columnItemSliderImage">
                                <?php if ($banner_web) { ?>
                                    <img src="<?php echo esc_url($banner_web['url']) ?>" class="img-fluid w-50" alt="<?php echo esc_attr($banner_titulo . ' ' . $sitename) ?>" title="<?php echo esc_attr($banner_titulo) ?>" width="<?php echo esc_attr($banner_web['width']) ?>" height="<?php echo esc_attr($banner_web['height']) ?>" />
                                <?php } ?>
                            </div>
                        </div>
                    </section>
                </div>
            <?php } ?>>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    <?php } ?>
</div>