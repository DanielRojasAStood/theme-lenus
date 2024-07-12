<?php 
$group_principles = get_field('group_principles');
$subheading       = !empty($group_principles['subheading']) ? $group_principles['subheading'] : '';
$heading          = !empty($group_principles['heading']) ? $group_principles['heading'] : '';
$principles       = !empty($group_principles['principles']) ? $group_principles['principles'] : [];
?>

<section class="sectionPrinciples">
    <div class="sectionPrinciples__bckg">
        <div class="container--large">
            <div class="sectionPrinciples__title">
                <?php if ($subheading) : ?>
                <p class="subheading"><?php echo $subheading; ?></p>
                 <?php endif; ?>

                <?php if ($heading) : ?>
                <p class="heading--48 line line--blue line--center"><?php echo $heading; ?></p>
                 <?php endif; ?>
            </div>

            <div class="sectionPrinciples__items">
                <?php foreach ($principles as $key => $item) { 
                    $principle = !empty($item['principle']) ? $item['principle'] : '';
                    $copy      = !empty($item['copy']) ? $item['copy'] : '';
                ?>
                    <div class="sectionPrinciples__item">
                        <div class="sectionPrinciples__name">
                            <h3 class="heading--25"><?php echo esc_html($principle); ?></h3>
                        </div>
                        <div class="sectionPrinciples__detail">
                            <div class="heading--18"><?php echo $copy; ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>