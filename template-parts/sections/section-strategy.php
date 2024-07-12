<?php 
$sitename        = get_bloginfo('name');
$group_strategy_2  = get_field('group_strategy_2');
$subheading      = isset($group_strategy_2['subheading']) ? esc_html($group_strategy_2['subheading']) : '';
$heading         = isset($group_strategy_2['heading']) ? esc_html($group_strategy_2['heading']) : '';
$items           = isset($group_strategy_2['items']) ? $group_strategy_2['items'] : [];
?>


<section class="sectionStrategy">
    <div class="sectionStrategy__bckg">
        <div class="sectionStrategy__container">
            <div class="sectionStrategy__title">
                <?php if($subheading) : ?>
                <p class="subheading"><?php echo $subheading; ?></p>
                <?php endif ?>
                <?php if($heading) : ?>
                <h2 class="heading--48 color--fff line line--white line--center"><?php echo $heading; ?></h2>
                <?php endif ?>
            </div>
            <div class="slickSliderStrategy">
                <?php foreach ($items as $key => $item) { 
                    $heading = isset($item['heading']) ? esc_html($item['heading']) : '';
                    $copy    = isset($item['copy']) ? $item['copy'] : '';
                ?>
                    <div class="sectionStrategy__item">
                        <?php if($heading) : ?>
                            <h3 class="heading--25 color--fff"><?php echo esc_html($heading); ?></h3>
                        <?php endif ?>

                        <?php if($copy) : ?>
                            <div class="heading--18 color--fff">
                                <?php echo $copy; ?>
                            </div>
                        <?php endif ?>
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