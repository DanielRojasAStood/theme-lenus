<?php 
$sitename       = get_bloginfo('name');
$group_future   = get_field('group_future');
$heading        = isset($group_future['heading']) ? esc_html($group_future['heading']) : '';
$countries      = isset($group_future['countries']) ? $group_future['countries'] : [];
?>
<section class="sectionFuture">
    <div class="sectionFuture__bckg">
        <div class="sectionFuture__container">
            <div class="sectionFuture__title">
                <?php if($heading) : ?>
                <h2 class="heading--48 color--fff"><?php echo $heading; ?></h2>
                <?php endif ?>
            </div>
            <div class="slickSliderFuture">
                <?php foreach ($countries as $key => $item) { 
                    $country = isset($item['country']) ? esc_html($item['country']) : '';
                    $details = isset($item['details']) ? esc_html($item['details']) : '';
                ?>
                <div class="slickSliderFuture__item">
                    <div class="slickSliderFuture__card <?php echo $key == 0 ? 'green' : 'orange'; ?>">
                        <?php if($country) : ?>
                        <h3 class="heading--25 color--fff"><?php echo $country; ?></h3>
                        <?php endif ?>
                        
                        <?php if($details) : ?>
                        <p class="heading--18 color--fff"><?php echo $details; ?></p>
                        <?php endif ?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="slider-pagination">
                <div class="seccionSliderClass__counter"></div>
                <div class="slick-dots"></div>
            </div>
        </div>
    </div>
</section>