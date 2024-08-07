<?php
function theme_prefix_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100, 
        'width'       => 400, 
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'theme_prefix_setup');

/* 
*   Habilitación subida de SVG
*/
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

/* 
*   Resoluciones de imagenes
*/
function img_setup_theme() {
    add_image_size('custom-size', 423, 519, true); // Normal resolution
    add_image_size('custom-size-2x', 846, 1038, true); // High resolution
}
add_action('after_img_setup_theme', 'setup_theme');

/* 
* Guarda archivos JSON de ACF en la carpeta '/acf-json' dentro del tema activo.
*/
function my_acf_json_save_point( $path ) {
	return get_stylesheet_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );

/* 
* Eliminar las etiquetas <p>
*/
add_filter('wpcf7_autop_or_not', '__return_false');

/* 
* SEO
*/
if ( ! function_exists('legger_seo_head_scripts') ) {
    function legger_seo_head_scripts()
    {
        $homepage           = get_option('page_on_front');
        $queried_object     = get_queried_object();
        $seo_keywords       = ($queried_object instanceof WP_Term) ? get_field('seo_keywords', $queried_object->taxonomy . '_' . $queried_object->term_id) : get_field('seo_keywords');
        $seo_description    = ($queried_object instanceof WP_Term) ? get_field('seo_description', $queried_object->taxonomy . '_' . $queried_object->term_id) : get_field('seo_description');
        $og                 = ($queried_object instanceof WP_Term) ? get_field('seo_opengraph', $queried_object->taxonomy . '_' . $queried_object->term_id) : get_field('seo_opengraph');
        $og_image           = (!empty($og['image'])) ? $og['image']['sizes']['large'] : '';
        $og_description     = (!empty($og['description'])) ? $og['description'] : $seo_description ;
        $seo_author         = get_field('seo_author', $homepage) ;
        $seo_publisher      = get_field('seo_publisher', $homepage) ;
        ?>
            <meta name="author" content="<?php echo esc_attr($seo_author) ?>" />
            <meta name="publisher" content="<?php echo esc_attr($seo_publisher) ?>" />
            <?php if (!empty($seo_description)) { ?>
                <meta name="description" content="<?php echo esc_attr($seo_description) ?>" />
            <?php } ?>
            <?php if (!empty($seo_keywords)) { ?>
                <meta name="keywords" content="<?php echo esc_attr($seo_keywords) ?>" />
            <?php } ?>
            <?php if (!empty($og)) { ?>
                <meta name="og:image" content="<?php echo esc_url($og_image) ?>">
                <meta name="og:description" content="<?php echo esc_attr($og_description) ?>">
            <?php } ?>
        <?php 
    }
}
add_action('wp_head', 'legger_seo_head_scripts');

function agregar_clase_current_a_menu($classes, $item, $args) {
    // Verifica si el elemento del menú es el elemento actual
    if (in_array('current-menu-item', $item->classes)) {
        $classes[] = 'current';
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'agregar_clase_current_a_menu', 10, 3);
