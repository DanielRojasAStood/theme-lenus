<div class="header__top">
    <?php
        wp_nav_menu(array(
            'theme_location' => 'menu-idioma',
            'menu_id' => '',
            'container' => 'ul',
            'menu_class' => 'menu',
        ));
    ?>
</div>
<header class="header">
    <div class="header__logo">
        <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
        ?>
    </div>
    <div class="header__menu">
        <nav class="primary-menu">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-principal',
                    'menu_id' => '',
                    'container' => 'ul',
                    'menu_class' => 'menu',
                ));
            ?>
        </nav>
    </div>
    <div class="header__account">
        <a href="" class="header__account-user">
            <?php 
                get_template_part('template-parts/content', 'icono');
                display_icon('user'); 
            ?>
            <span>Inversionistas</span>
        </a>
        <div class="">
            <a href="#" target="_blank">
                <?php 
                    get_template_part('template-parts/content', 'icono');
                    display_icon('facebook'); 
                ?>
            </a>
            <a href="#" target="_blank">
                <?php 
                    get_template_part('template-parts/content', 'icono');
                    display_icon('linkedin'); 
                ?>
            </a>
        </div>
    </div>
    <button class="header__open-menu" type="button" id="open-menu-mobile">
        <?php 
            get_template_part('template-parts/content', 'icono');
            display_icon('menu'); 
        ?>
   </button>
</header>

<!-- Menu Mobile -->
<section class="sectionHeaderMobile">
    <div class="header__menu">
        <nav class="primary-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'menu_id' => '',
                'container' => 'ul',
                'menu_class' => 'menu',
            ));
        ?>
        </nav>
    </div>
    <a href="" class="header__account-user">
        <?php 
            get_template_part('template-parts/content', 'icono');
            display_icon('user'); 
        ?>
        <span>Ingreso inversionistas</span>
    </a>
    <div class="sectionHeaderMobile__social">
        <p class="heading--22 color--fff">Síguenos en:</p>
        <div class="sectionHeaderMobile__items">
            <a href="#" target="_blank">
                <?php 
                    get_template_part('template-parts/content', 'icono');
                    display_icon('facebook'); 
                ?>
                <span class="heading--14">Youtube</span>
            </a>
            <a href="#" target="_blank">
                <?php 
                    get_template_part('template-parts/content', 'icono');
                    display_icon('linkedin'); 
                ?>
                <span class="heading--14">LinkedIn</span>
            </a>
        </div>
        <p class="heading--14 color--fff">Todos los derechos reservados Lenus 2024</p>
    </div>

</section>