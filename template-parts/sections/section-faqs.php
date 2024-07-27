<?php 
$group_faqs = get_field('group_faqs');
$heading    = $group_faqs['heading'];
$items      = !empty($group_faqs['items']) ? $group_faqs['items'] : [];

?>
<section class="sectionFaqs">
    <div class="sectionFaqs__bckg">
        <div class="container--large">
            <div class="sectionFaqs__container">
                <?php if($heading) : ?>
                    <div class="sectionFaqs__title">
                        <h2 class="heading--48"><?php echo $heading; ?></h2>
                    </div>
                <?php endif; ?>
    
                <?php if ($items) { ?>
                    <div class="accordion" id="faqAccordion">
                        <?php foreach ($items as $key => $item) { ?>
                            <div class="sectionFaqs__item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $key; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $key; ?>">
                                    <?php echo $item['question']; ?>
                                    <span class="accordion-icon plus-circle">
                                        <?php 
                                            get_template_part('template-parts/content', 'icono');
                                            display_icon('plus-circle'); 
                                        ?>
                                    </span>
                                    <span class="accordion-icon minus-circle">
                                        <?php 
                                            get_template_part('template-parts/content', 'icono');
                                            display_icon('minus-circle'); 
                                        ?>
                                    </span> 
                                </button>
                                <div id="collapse-<?php echo $key; ?>" class="collapse" aria-labelledby="heading-<?php echo $key; ?>" data-bs-parent="#faqAccordion">
                                    <p class="heading--18">
                                        <?php echo $item['answer']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
</section>