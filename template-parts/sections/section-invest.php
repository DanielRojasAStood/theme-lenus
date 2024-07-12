<?php 
$sitename       = get_bloginfo('name');
$group_invest   = get_field('group_invest');

$heading        = !empty($group_invest['heading']) ? $group_invest['heading'] : '';
$copy           = !empty($group_invest['copy']) ? $group_invest['copy'] : '';
$bckg           = !empty($group_invest['bckg']) ? $group_invest['bckg'] : '';
$items          = !empty($group_invest['items']) ? $group_invest['items'] : [];
$enlace         = !empty($group_invest['cta']) ? $group_invest['cta'] : [];

$cta_title      = !empty($enlace['title']) ? $enlace['title'] : '';
$cta_link       = !empty($enlace['url']) ? $enlace['url'] : '';
$cta_target     = !empty($enlace['target']) ? $enlace['target'] : '';

?>

<section class="sectionInvest">
    <div class="sectionInvest__bckg" style="background-image: url(<?php echo $bckg; ?>)">
        <div class="container--large">
            <div class="sectionInvest__title">
                <?php if($heading) { ?>
                <h2 class="heading--48 line line--white line--center"><?php echo $heading; ?></h2>
                <?php } ?>
    
                <?php if($copy) { ?>
                <p class="heading--18"><?php echo $copy; ?></p>
                <?php } ?>
            </div>

            <div class="sectionInvest__items">
                <?php foreach ($items as $key => $item) { ?>
                    <div class="sectionInvest__item">
                        <img height="" src="<?php echo $item['icon']; ?>" alt="<?php echo $item['detail']; ?>" title="<?php echo $item['detail']; ?>">
                        <p class="heading--19"><?php echo $item['detail']; ?></p>
                    </div>
                <?php } ?>
            </div>
            <?php if($cta_link) { ?>
                <div class="sectionInvest__cta">
                    <a class="button button--blue button--center" href="<?php echo $cta_link; ?>" class="btn btn-primary cta" target="<?php echo $cta_target; ?>" title="<?php echo $cta_title; ?>"><?php echo $cta_title; ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


                    

                       
