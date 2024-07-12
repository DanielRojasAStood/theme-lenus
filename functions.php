<?php

defined('ABSPATH') || exit;

define('URL_BASE', get_stylesheet_directory_uri() . '/');
define('IMG_BASE', URL_BASE . 'assets/img/');
$incPath = get_template_directory() . '/inc/';
require_once($incPath . 'theme-setup.php');
require_once($incPath . 'custom-postype.php');

/* 
*   Configuración tema
*/
if ( ! function_exists('legger_setup')) {
    function legger_setup()
    {
        if (function_exists('add_theme_support')) {
            add_theme_support('post-thumbnails'); // Soporte imagenes destacadas
            add_theme_support('title-tag'); // Soporte títulos de páginas
            add_theme_support('custom-logo'); // Soporte para logo
        }
    }
}
add_action('after_setup_theme', 'legger_setup');

if ( ! function_exists('legger_add_theme_scripts') ) {
    function legger_add_theme_scripts()
    {
        // Styles
        wp_enqueue_style('lg_bootstrap_min_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.2.0');
        wp_enqueue_style('lg_normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '8.0.1');
        wp_enqueue_style('lg_root', get_template_directory_uri() . '/assets/css/root.css', array(), '1.0');
        wp_enqueue_style('lg_menu', get_template_directory_uri() . '/assets/css/menu.css', array('lg_root'), '1.0');
        wp_enqueue_style('lg_style', get_stylesheet_uri(), array('lg_normalize', 'lg_root'), '1.0.0');
        wp_enqueue_style('lg_slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.0');
        wp_enqueue_style('lg_slick_theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css', array(), '1.0');
        
        wp_enqueue_style('lg_main', get_template_directory_uri() . '/assets/css/main.css', array(), '0.0.1');

        // Scripts
        wp_enqueue_script('lg_jquery_min_js', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '3.3.1', true);
        wp_enqueue_script('lg_bootstrap_min_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.1', true);
        wp_enqueue_script('lg_custom_js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('lg_slick_min_js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('lg_scripts-footer', get_template_directory_uri() . '/assets/js/scripts-footer.js', array('jquery'), '1.0.0', true);

    }
}
add_action('wp_enqueue_scripts', 'legger_add_theme_scripts');

/* 
*   Habilitación de menu
*/
function legger_menus()
{
    register_nav_menus(array(
        'menu-principal' => 'Menu Principal',
    ));
}
add_action('init', 'legger_menus');

/* 
*   Deshabilitar editor Gutenberg
*/
add_filter('use_block_editor_for_post', '__return_false', 10);

class Custom_Nav_Walker extends Walker_Nav_Menu
{
    // Sobreescribir el método start_el para generar el enlace sin la etiqueta <li>
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $output .= '<a href="' . $item->url . '" class="textMenu';

        if ($item->url === get_permalink()) {
            $output .= ' active';
        }

        $output .= '">' . $item->title . '</a>';
    }
}