<?php 
$sitename       = get_bloginfo('name');
$group_invest   = get_field('group_invest');

$heading        = isset($group_invest['heading']) && !empty($group_invest['heading']) ? $group_invest['heading'] : '';
$copy           = isset($group_invest['copy']) && !empty($group_invest['copy']) ? $group_invest['copy'] : '';
$bckg           = isset($group_invest['bckg']) && !empty($group_invest['bckg']) ? $group_invest['bckg'] : '';
$items          = isset($group_invest['items']) && !empty($group_invest['items']) ? $group_invest['items'] : [];
$enlace         = isset($group_invest['cta']) && !empty($group_invest['cta']) ? $group_invest['cta'] : [];

$cta_title      = isset($enlace['title']) && !empty($enlace['title']) ? $enlace['title'] : '';
$cta_link       = isset($enlace['url']) && !empty($enlace['url']) ? $enlace['url'] : '';
$cta_target     = isset($enlace['target']) && !empty($enlace['target']) ? $enlace['target'] : '';

?>
<style>
    .bgBlueHome2 {
        position: relative;
    }

    .bgBlueHome2.bgBlue:before {
        content:"";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(8 40 64 / 80%);
    }

    .cardHomeBannerBlue {
        position: relative;
    }
</style>
<div class="separadorProOne visibleDesktop"></div>
<div class="separadorProOne visibleMobile"></div>
<section class="moduloBnnrIcon">
    <div class="bgBlueHome2 bgBlue" style="background-image: url(<?php echo $bckg; ?>)">
        <div class="container">
            <div class="content">
                <div class="info textCard cardHomeBannerBlue">
                    <?php if($heading) { ?>
                    <h2 class="textHomeBlue textWhite"><?php echo $heading; ?></h2>
                    <?php } ?>

                    <?php if($copy) { ?>
                    <p class=" textWhite textHomeWhite"><?php echo $copy; ?></p>
                    <?php } ?>

                    <div class="row">
                        <?php 
                        foreach ($items as $key => $item) { ?>
                            <div class="col">
                                <img class="img-fluid visibleDesktop" width="" height="" src="<?php echo $item['icon']; ?>" alt="<?php echo $item['detail']; ?>" title="<?php echo $item['detail']; ?>">
                                <p class="textHomeIcon textWhite"><?php echo $item['detail']; ?></p>
                            </div>
                        <?php } ?>
                       
                    </div>
                    <div class="btnProOne btnConoceMas">
                        <?php if($cta_link) { ?>
                        <a href="<?php echo $cta_link; ?>" class="btn btn-primary cta" target="<?php echo $cta_target; ?>" title="<?php echo $cta_title; ?>"><?php echo $cta_title; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>