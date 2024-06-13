<?php 
$sitename       = get_bloginfo('name');
$group_future   = get_field('group_future');
$heading        = isset($group_future['heading']) ? esc_html($group_future['heading']) : '';
$countries      = isset($group_future['countries']) ? $group_future['countries'] : [];
?>
<section>
    <div class="sectionPresente">
        <?php if($heading) : ?>
        <h2 class="titleSectionPresente textWhite"><?php echo $heading; ?></h2>
        <?php endif ?>
        <div class="">
            <div class="row rowSectionPresente">
                <?php foreach ($countries as $key => $item) { 
                    $country = isset($item['country']) ? esc_html($item['country']) : '';
                    $details = isset($item['details']) ? esc_html($item['details']) : '';
                ?>
                    <div class="col <?php echo $key == 0 ? 'colPaisesPresente' : 'colPaisesPresenteOr'; ?>">
                        <?php if($country) : ?>
                        <h3 class="titleColPresente textWhite"><?php echo $country; ?></h3>
                        <?php endif ?>
                        
                        <?php if($details) : ?>
                        <p class="textColPresente textWhite"><?php echo $details; ?></p>
                        <?php endif ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>