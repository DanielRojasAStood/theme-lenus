<?php 
$form_contact = !empty(get_field('form_contact')) ? get_field('form_contact') : '';
?>
<section class="sectionContactForm">
    <div class="container--large">
        <div class="sectionContactForm__grid">
            <div class="sectionContactForm__box">
                <?php echo $form_contact; ?>
            </div>
        </div>
    </div>
</section>