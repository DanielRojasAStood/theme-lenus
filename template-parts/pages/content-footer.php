<?php 
$sitename           = get_bloginfo('name');
$global_content     = get_page_by_path('global-content')->ID;
$group_footer       = ($global_content) ? get_field('group_footer', $global_content) : null;

$logo               = $group_footer['group_logo']['logo'];
$text               = $group_footer['group_logo']['text'];

$heading            = $group_footer['group_map']['heading'];
$links              = $group_footer['group_map']['links'];

$contact_heading    = $group_footer['group_contactanos']['heading'];
$contact_copy       = $group_footer['group_contactanos']['copy'];

$newsletter_heading = $group_footer['group_newsletter']['heading'];
$formulario_id = $group_footer['group_newsletter']['formulario_id'];
$fellow_heading     = $group_footer['group_newsletter']['fellow_heading'];
$social             = $group_footer['group_newsletter']['social'];

?>
<footer class="footer">
    <div class="footer__bckg">
        <div class="footer__grid">
            <div class="footer__logo">
                <img src="<?php echo IMG_BASE . 'logo-lenu-footer.svg'?>" alt="">
                <p class="copyright color--fff">Todos los derechos reservados Lenus 2024</p>
            </div>
            <div class="footer-menus">
                <div class="footer-menus__grid">
                    <div class="footer-menus__mapa">
                        <h3 class="heading--14 color--58B1F5">MAPA DEL SITIO</h3>
                        <p class="color--fff heading--18">Nosotros</p>
                        <p class="color--fff heading--18">Estrategia de inversión</p>
                        <p class="color--fff heading--18">Recursos</p>
                        <p class="color--fff heading--18">Lenus Health Systems</p>
                        <p class="color--fff heading--18">Políticas de privacidad</p>
                    </div>
                    <div class="footer-menus__contacto">
                        <h3 class="heading--14 color--58B1F5">CONTÁCTANOS</h3>
                        <p class="heading--18 color--fff">contactenos@lenuscp.com </p>
                        <p class="heading--18 color--fff">Cra. 14 # 35 Norte - 18 Oficina 207, Centro Empresarial, Armenia Quindio</p>
                    </div>
                </div>
            </div>
            <div class="footer-menus__email">
                <h2 class="heading--32 color--fff">Únete a nuestro Newsletter </h2>
                <?php echo do_shortcode('[contact-form-7 id="8bb9297" title="Newsletter"]')?>
                <h2 class="heading--32 color--fff">Síguenos en:</h2>
                <div class="footer-menus__social">
                    <a href="#" target="_blank">
                        <?php 
                            get_template_part('template-parts/content', 'icono');
                            display_icon('youtube'); 
                        ?>
                        <span>Youtube</span>
                    </a>
                    <a href="#" target="_blank">
                        <?php 
                            get_template_part('template-parts/content', 'icono');
                            display_icon('linkedin'); 
                        ?>
                        <span>LinkedIn</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>