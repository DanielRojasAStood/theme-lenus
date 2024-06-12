<header>
    <div class="header-top">
        <a> Aquí va el select</a>
    </div>
    <div class="header">
        <div class="logo">
            <a href="#">
                <h1 class="logo-lenus-up"> Lenus</h1>
                <h1 class="logo-lenus-down"> Capital Partners</h1>
            </a>
        </div>
        <div class="menuLenus-d visibleDesktop">
            <?php
            $args = array(
                'menu'              => 'menu-principal',
                'container'         => 'div',
                'items_wrap'        => '%3$s',
                'container_class'   => 'topnav',
                'container_id'      => 'myTopnav',
                'walker'            => new Custom_Nav_Walker()
            );
            wp_nav_menu($args);
            ?>
        </div>
        <div class="textInversionistas visibleDesktop">
            <a href="./login.php" class="textInversionistas">Inversionistas</a>
        </div>
    </div>
    <div class="acordeonBio-d visibleMobile">
        <div class="hamburger filletHamburger">
            <div class="_layer -top"></div>
            <div class="_layer -mid"></div>
            <div class="_layer -bottom"></div>
        </div>
        <nav class="menuppal">
            <?php
            $args = array(
                'menu'          => 'menu-principal',
                'container'     => false,
                'items_wrap'    => '<ul>%3$s</ul>'
            );
            wp_nav_menu($args);
            ?>
        </nav>
    </div>
</header>