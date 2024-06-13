<?php 
$sitename               = get_bloginfo('name');
$group_charting_course  = get_field('group_charting_course');
$subheading             = isset($group_charting_course['subheading']) ? esc_html($group_charting_course['subheading']) : '';
$heading                = isset($group_charting_course['heading']) ? esc_html($group_charting_course['heading']) : '';
$items                  = isset($group_charting_course['items']) ? $group_charting_course['items'] : [];

?>
<style>
    .columnInversionPregunta li {
        color: var(--jvm-color-text-5);
        font-family: Source Sans Pro;
        font-size: 18px;
        font-weight: 400;
        line-height: 30px;
        letter-spacing: -0.01em;
        text-align: left;
    }
</style>
<section>
    <div class="containerPreguntasEstrategia">
        <?php if($subheading) : ?>
        <span class="titleNuestraHistoria"><?php echo $subheading; ?></span>
        <?php endif ?>

        <?php if($heading) : ?>
        <h2 class="titleContainerEquipo"><?php echo $heading; ?></h2>
        <?php endif ?>

        <?php foreach ($items as $key => $item) { 
            $heading = isset($item['heading']) ? esc_html($item['heading']) : '';
            $copy    = isset($item['copy']) ? $item['copy'] : '';
        ?>
            <div class="columnTwoPro gapFive rowInversionPregunta">
                <div class="column columnInversionPregunta">
                <?php if($heading) : ?>
                    <h3 class="texInversiónPregunta"><?php echo esc_html($heading); ?></h3>
                <?php endif ?>

                </div>
                <div class="column columnInversionPregunta">
                    <?php if($copy) : ?>
                        <?php echo $copy; ?>
                    <?php endif ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>