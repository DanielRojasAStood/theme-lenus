<?php 
$group_principles = get_field('group_principles');
$subheading       = isset($group_principles['subheading']) ? $group_principles['subheading'] : '';
$heading          = isset($group_principles['heading']) ? $group_principles['heading'] : '';
$principles       = isset($group_principles['principles']) ? $group_principles['principles'] : [];
?>

<style>
    .textContainerNos2 p {
        font-family: Source Sans Pro;
        font-size: 18px;
        text-align: left;
        color: var(--jvm-color-text-5);
    }
</style>
<div class="containerNuestrosValores">
    <?php if (!empty($subheading)) : ?>
    <span class="titleNuestraHistoria"><?php echo $subheading; ?></span>
     <?php endif; ?>

    <?php if (!empty($heading)) : ?>
    <h2 class="titleContainerValores"> <?php echo $heading; ?></h2>
     <?php endif; ?>
    <div class="container text-left">
        <div class="row row-cols-2">
            <?php foreach ($principles as $key => $item) { 
                $principle = isset($item['principle']) ? $item['principle'] : '';
                $copy      = isset($item['copy']) ? $item['copy'] : '';
            ?>
                <div class="col colOneNos">
                    <div class="containerTitleNos">
                        <h5 class="titleContainerNos"><?php echo esc_html($principle); ?></h5>
                    </div>
                    <div class="containerTitleNos2">
                        <div class="textContainerNos2"><?php echo $copy; ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>