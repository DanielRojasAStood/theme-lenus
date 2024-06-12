<?php 
$group_faqs = get_field('group_faqs');
$items = isset($group_faqs['items']) && !empty($group_faqs['items']) ? $group_faqs['items'] : [];

?>
<section class="bgBlueSky">
    <div class="container py-5">
        <h2 class="text-center mb-4 textPreguntasFrecuentes">Preguntas Frecuentes</h2>
        <div class="accordion" id="faqAccordion">
            <?php if (!empty($items)) { ?>
                <?php foreach ($items as $key => $item) { ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-<?php echo $key; ?>">
                            <button class="accordion-button collapsed textAccordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $key; ?>">
                                <?php echo $item['question']; ?>
                            </button>
                        </h2>
                        <div id="collapse-<?php echo $key; ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?php echo $key; ?>" data-bs-parent="#faqAccordion">
                            <div class="accordion-body accordionBody">
                            <?php echo $item['answer']; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>