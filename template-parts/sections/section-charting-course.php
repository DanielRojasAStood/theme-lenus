<?php 
$sitename               = get_bloginfo('name');
$group_charting_course  = get_field('group_charting_course');
$subheading             = !empty($group_charting_course['subheading']) ? esc_html($group_charting_course['subheading']) : '';
$heading                = !empty($group_charting_course['heading']) ? esc_html($group_charting_course['heading']) : '';
$items                  = !empty($group_charting_course['items']) ? $group_charting_course['items'] : [];

?>
<section class="sectionChartingCourse">
    <div class="container--large">
        <div class="sectionChartingCourse__title">
            <?php if($subheading) : ?>
            <p class="subheading"><?php echo $subheading; ?></p>
            <?php endif ?>
    
            <?php if($heading) : ?>
            <h2 class="heading--48 line line--blue line--center"><?php echo $heading; ?></h2>
            <?php endif ?>
        </div>

        <?php foreach ($items as $key => $item) { 
            $heading = !empty($item['heading']) ? esc_html($item['heading']) : '';
            $copy    = !empty($item['copy']) ? $item['copy'] : '';
        ?>
            <div class="sectionChartingCourse__items">
                <div class="sectionChartingCourse__item">
                    <?php if($heading) : ?>
                        <h3 class="heading--32"><?php echo esc_html($heading); ?></h3>
                    <?php endif ?>
                </div>
                <div class="sectionChartingCourse__item">
                    <?php if($copy) : ?>
                        <div class="heading--18">
                            <?php echo $copy; ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>