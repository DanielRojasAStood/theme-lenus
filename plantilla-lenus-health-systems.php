<?php
/*
Template Name: Plantilla Lenus Health Systems
*/
get_header();

$sitename               = get_bloginfo('name');
$show_text_image_banner = get_field('show_text_image_banner');
$show_management        = get_field('show_management');

$args = array(
    'post_type' => 'clinics',
    'posts_per_page' => -1,
);
$clinics_query = new WP_Query($args);



?>

<!-- INICIO CONTENIDO -->
<main>
    <?php if ($show_text_image_banner) { ?>
        <!-- BANNER -->
        <?php get_template_part('template-parts/sections/section', 'text-image-banner')  ?>
        <!-- FIN BANNER -->
    <?php } ?>

    <?php if ($show_management) { ?>
        <!-- MANAGEMENT -->
        <?php get_template_part('template-parts/sections/section', 'management')  ?>
        <!-- FIN MANAGEMENT -->
    <?php } ?>

    <section class="sectionSedes">
        <div class="container--large">
            <div class="sectionSedes__title">
                <h2 class="heading--48 color--0B2F4B">Nuestra presencia</h2>
            </div>
            <div class="sectionSedes__tabs">
                <?php if ($clinics_query->have_posts()): ?>
                    <?php $tab_counter = 1; ?>
                    <?php while ($clinics_query->have_posts()): ?>
                        <?php $clinics_query->the_post(); ?>
                        <button type="button" class="tab-button <?php echo $tab_counter === 1 ? 'active' : ''; ?>" data-tab="tab<?php echo $tab_counter; ?>">
                            <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name);
                                }
                            ?>
                        </button>
                        <?php $tab_counter++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="tab-contents">
            <?php if ($clinics_query->have_posts()): ?>
                <?php $tab_counter = 1; ?>
                <?php while ($clinics_query->have_posts()): ?>
                    <?php $clinics_query->the_post(); ?>
                    <div class="tab-content <?php echo $tab_counter === 1 ? 'active' : ''; ?>" id="tab<?php echo $tab_counter; ?>">
                        <?php 
                            $grupo_informacion_general  = get_field('grupo_informacion_general'); 
                            $subheading             = !empty($grupo_informacion_general['subheading']) ? esc_html($grupo_informacion_general['subheading']) : '';
                            $heading                = !empty($grupo_informacion_general['heading']) ? esc_html($grupo_informacion_general['heading']) : '';
                            $city                   = !empty($grupo_informacion_general['city']) ? esc_html($grupo_informacion_general['city']) : '';
                            $copy                   = !empty($grupo_informacion_general['copy']) ? esc_html($grupo_informacion_general['copy']) : '';

                            $grupo_detalle  = get_field('grupo_detalle'); 

                            $image_id      = !empty($grupo_detalle["imagen"]['ID']) ? $grupo_detalle["imagen"]['ID'] : '';
                            $image_src     = wp_get_attachment_image_url($image_id, 'custom-size-2x');
                            $image_srcset  = wp_get_attachment_image_srcset($image_id, 'custom-size-2x');
                            $image_info    = wp_get_attachment_image_src($image_id, 'full');
                            $image_width   = ($image_info) ? $image_info[1] : '';
                            $image_height  = ($image_info) ? $image_info[2] : '';
                            $image_alt     = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
                            $image_title   = ($image_id) ? get_the_title($image_id) : '';

                            $pacientes       = !empty($grupo_detalle['pacientes_atendidos']) ? $grupo_detalle['pacientes_atendidos'] : '';
                            $poblacion       = !empty($grupo_detalle['poblacion_impactada']) ? $grupo_detalle['poblacion_impactada'] : '';
                            $camas           = !empty($grupo_detalle['camas']) ? $grupo_detalle['camas'] : '';
                            $sillas          = !empty($grupo_detalle['sillas_de__quimioterapia']) ? $grupo_detalle['sillas_de__quimioterapia'] : '';
                            $colaboradores   = !empty($grupo_detalle['colaboradores']) ? $grupo_detalle['colaboradores'] : '';
                            $infraestructura = !empty($grupo_detalle['infraestructura']) ? $grupo_detalle['infraestructura'] : '';
                            $colaboradores   = !empty($grupo_detalle['colaboradores']) ? $grupo_detalle['colaboradores'] : '';
                            $infraestructura = !empty($grupo_detalle['infraestructura']) ? $grupo_detalle['infraestructura'] : '';
                            $clinicas        = !empty($grupo_detalle['clinicas_y_centros_ambulatorios']) ? $grupo_detalle['clinicas_y_centros_ambulatorios'] : '';
                            $salas           = !empty($grupo_detalle['salas_de_cirugia']) ? $grupo_detalle['salas_de_cirugia'] : '';
                            $centro          = !empty($grupo_detalle['centro_ambulatorio']) ? $grupo_detalle['centro_ambulatorio'] : '';

                            $grupo_sedes                = get_field('grupo_sedes'); 
                        ?>

                            <div class="sectionSedes__tabs-info">
                                <?php if($subheading) : ?>
                                <p class="subheading"><?php echo $subheading; ?></p>
                                <?php endif ?>
                        
                                <?php if($heading) : ?>
                                    <h2 class="heading--48 color--0B2F4B"><?php echo $heading; ?></h2>
                                <?php endif ?>
        
                                <?php if($city) : ?>
                                    <p class="heading--14 color--0B2F4B"><?php echo $city; ?></p>
                                <?php endif ?>
                                
                                <div class="line line--blue line--center"></div>

                                <?php if($copy) : ?>
                                    <p class="heading--18 color--0B2F4B"><?php echo $copy; ?></p>
                                <?php endif ?>

                                <div class="sectionSedesDetails">
                                    <div class="sectionSedesDetails__grid">
                                        <div class="sectionSedesDetails__left">
                                            <?php if($pacientes) :?>
                                            <div>
                                                <p class="heading--40"><?php echo $pacientes; ?></p>
                                                <p class="heading--18">Pacientes atendidos</p>
                                            </div>
                                            <?php endif; ?>

                                            <?php if($poblacion) :?>
                                            <div>
                                                <p class="heading--40"><?php echo $poblacion; ?></p>
                                                <p class="heading--18">población impactada</p>
                                            </div>
                                            <?php endif; ?>
                                            <div class="sectionSedesDetails__grid-2">
                                                <?php if($camas) :?>
                                                <div>
                                                    <p class="heading--40"><?php echo $camas; ?></p>
                                                    <p class="heading--18">camas</p>
                                                </div>
                                                <?php endif; ?>

                                                <?php if($sillas) :?>
                                                <div>
                                                    <p class="heading--40"><?php echo $sillas; ?></p>
                                                    <p class="heading--18">sillas de <br> quimioterapia</p>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="sectionSedesDetails__center">
                                            <img width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" src="<?php echo $image_src; ?>" data-src="<?php echo $image_src; ?>" srcset="<?php echo $image_srcset; ?>" data-srcset="<?php echo $image_srcset; ?>" alt="<?php echo $image_alt . ' - ' . $sitename; ?>" title="<?php echo $image_title; ?>">
                                        </div>
                                        <div class="sectionSedesDetails__right">
                                            <?php if($colaboradores) :?>
                                            <div>
                                                <p class="heading--40"><?php echo $colaboradores; ?></p>
                                                <p class="heading--18">colaboradores</p>
                                            </div>
                                            <?php endif; ?>

                                            <?php if($infraestructura) :?>
                                            <div>
                                                <p class="heading--40"><?php echo $infraestructura; ?></p>
                                                <p class="heading--18">de infraestructura</p>
                                            </div>
                                            <?php endif; ?>


                                            <div class="sectionSedesDetails__grid-3">
                                                <?php if($clinicas) :?>
                                                <div>
                                                    <p class="heading--40"><?php echo $clinicas; ?></p>
                                                    <p class="heading--18">Clinicas y centros <br> ambulatorios</p>
                                                </div>
                                                <?php endif; ?>

                                                <?php if($salas) :?>
                                                <div>
                                                    <p class="heading--40"><?php echo $salas; ?></p>
                                                    <p class="heading--18">salas de <br> cirugía</p>
                                                </div>
                                                <?php endif; ?>

                                                <?php if($centro) :?>
                                                <div>
                                                    <p class="heading--40"><?php echo $centro; ?></p>
                                                    <p class="heading--18">Centro <br> ambulatorio</p>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            </div>

                        <?php if (is_array($grupo_sedes) && isset($grupo_sedes['sedes'])): ?>
                            <?php $sedes = $grupo_sedes['sedes']; ?>

                            <?php if (is_array($sedes)): ?>
                                <div class="sectionSliderSedes pageLenusHealth">
                                    <div class="sectionSliderSedes__bckg">
                                        <div class="sectionSliderSedes__padding">
                                            <h2 class="heading--48">
                                                <?php
                                                    $categories = get_the_category();
                                                    if (!empty($categories)) {
                                                        echo 'Conoce nuestras sedes en el ' . esc_html($categories[0]->name);
                                                    }
                                                ?>
                                            </h2>
                                            <div class="slickSliderSedes">
                                                <?php foreach ($sedes as $sede): ?>
                                                    <?php 
                                                    $image_id      = !empty($sede["imagen"]['ID']) ? $sede["imagen"]['ID'] : '';
                                                    $image_src     = wp_get_attachment_image_url($image_id, 'custom-size');
                                                    $image_srcset  = wp_get_attachment_image_srcset($image_id, 'custom-size');
                                                    $image_info    = wp_get_attachment_image_src($image_id, 'full');
                                                    $image_width   = ($image_info) ? $image_info[1] : '';
                                                    $image_height  = ($image_info) ? $image_info[2] : '';
                                                    $image_alt     = ($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : ''; 
                                                    $image_title   = ($image_id) ? get_the_title($image_id) : '';
                                                    ?>
                                                    <a href="">
                                                        <div class="sectionSliderSedes__card">
                                                            <div class="sectionSliderSedes__img">
                                                                <img width="<?php echo $image_width ?>" height="<?php echo $image_height ?>" src="<?php echo $image_src ?>" data-src="<?php echo $image_src ?>" srcset="<?php echo $image_srcset ?>" data-srcset="<?php echo $image_srcset ?>" alt="<?php echo $sede['sede'] . ' - ' . $sitename; ?> " title="<?php echo $sede['sede'] ?>">
                                                            </div>
                                                            <div class="sectionSliderSedes__info">
                                                                <h3 class="heading--25"><?php the_title(); ?></h3>
                                                                <p class="heading--25 sede"><?php echo $sede['sede']; ?></p>
                                                                <p class="heading--18 city"><?php echo $sede['ciudad']; ?></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                            <!-- <div class="slider-pagination">
                                                <div class="seccionSliderClass__counter"></div>
                                                <div class="slick-dots"></div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <?php $tab_counter++; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>

   
    
</main>
<!-- INICIO CONTENIDO -->

<?php get_footer() ?>