<div class="header__top">
    <?php echo do_shortcode('[language-switcher]')?>
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
        <a href="">
            <?php 
                get_template_part('template-parts/content', 'icono');
                display_icon('user'); 
            ?>
            Inversionistas
        </a>
       
    </div>
</header>