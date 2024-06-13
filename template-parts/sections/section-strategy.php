<?php 
$sitename        = get_bloginfo('name');
$group_strategy_2  = get_field('group_strategy_2');
$subheading      = isset($group_strategy_2['subheading']) ? esc_html($group_strategy_2['subheading']) : '';
$heading         = isset($group_strategy_2['heading']) ? esc_html($group_strategy_2['heading']) : '';
$items           = isset($group_strategy_2['items']) ? $group_strategy_2['items'] : [];
?>

<style>
    .rowCreacionValor p,
    .rowCreacionValor li {
        font-family: Source Sans Pro;
        font-size: 18px;
        color: var(--jvm-color-text-1) !important;
        line-height: 24px;
        letter-spacing: 0.015em;
        text-align: left;
        margin-top: 15px;
        width: 70%;
    }
</style>
<section class="bgContentBlueTwo text-center sectionCreacionValor">
    <?php if($subheading) : ?>
    <span class="titleNuestraHistoria"><?php echo $subheading; ?></span>
    <?php endif ?>

    <?php if($heading) : ?>
    <h2 class="textWhite textCreacionValor "><?php echo $heading; ?></h2>
    <?php endif ?>

    <div class="row rowCreacionValor">
        <?php foreach ($items as $key => $item) { 
            $heading = isset($item['heading']) ? esc_html($item['heading']) : '';
            $copy    = isset($item['copy']) ? $item['copy'] : '';
        ?>
            <div class="col">
                <?php if($heading) : ?>
                    <h5 class="titleOperaciones textWhite"><?php echo esc_html($heading); ?></h5>
                <?php endif ?>

                <?php if($copy) : ?>
                    <?php echo $copy; ?>
                <?php endif ?>
            </div>
        <?php } ?>
    </div>
</section>