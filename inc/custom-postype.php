<?php
/* 
  1 - Clinicas
  2 - Historia
*/
// 1 - Clinicas
function my_custom_post_clinics() {
  $labels = array(
      'name'               => _x('Clínicas', 'nombre general del tipo de entrada', 'textdomain'),
      'singular_name'      => _x('Clínica', 'nombre singular del tipo de entrada', 'textdomain'),
      'add_new'            => _x('Agregar nueva', 'clínica', 'textdomain'),
      'add_new_item'       => __('Agregar nueva Clínica', 'textdomain'),
      'edit_item'          => __('Editar Clínica', 'textdomain'),
      'new_item'           => __('Nueva Clínica', 'textdomain'),
      'all_items'          => __('Todas las Clínicas', 'textdomain'),
      'view_item'          => __('Ver Clínica', 'textdomain'),
      'search_items'       => __('Buscar Clínicas', 'textdomain'),
      'not_found'          => __('No se encontraron Clínicas', 'textdomain'),
      'not_found_in_trash' => __('No se encontraron Clínicas en la papelera', 'textdomain'),
      'parent_item_colon'  => '',
      'menu_name'          => 'Clínicas'
  );
  $args = array(
      'labels'        => $labels,
      'description'   => 'Contiene nuestras clínicas y datos específicos de las mismas',
      'public'        => true,
      'menu_position' => 5,
      'menu_icon'     => 'dashicons-building',
      'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
      'has_archive'   => true,
      'taxonomies'    => array('category')  // Usando la taxonomía personalizada
  );
  register_post_type('clinics', $args); 
}
add_action('init', 'my_custom_post_clinics');

// 2 - Historia
function my_custom_post_stories() {
  $labels = array(
      'name'               => _x('Historias', 'nombre general del tipo de entrada', 'textdomain'),
      'singular_name'      => _x('Historia', 'nombre singular del tipo de entrada', 'textdomain'),
      'add_new'            => _x('Agregar nueva', 'historia', 'textdomain'),
      'add_new_item'       => __('Agregar nueva Historia', 'textdomain'),
      'edit_item'          => __('Editar Historia', 'textdomain'),
      'new_item'           => __('Nueva Historia', 'textdomain'),
      'all_items'          => __('Todas las Historias', 'textdomain'),
      'view_item'          => __('Ver Historia', 'textdomain'),
      'search_items'       => __('Buscar Historias', 'textdomain'),
      'not_found'          => __('No se encontraron Historias', 'textdomain'),
      'not_found_in_trash' => __('No se encontraron Historias en la papelera', 'textdomain'),
      'parent_item_colon'  => '',
      'menu_name'          => 'Historias'
  );
  $args = array(
      'labels'        => $labels,
      'description'   => 'Contiene nuestras historias y datos específicos de las mismas',
      'public'        => true,
      'menu_position' => 6,
      'menu_icon'     => 'dashicons-book-alt',
      'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
      'has_archive'   => true,
      'taxonomies'    => array('category')  // Usando la taxonomía personalizada
  );
  register_post_type('stories', $args); 
}
add_action('init', 'my_custom_post_stories');

// 3 - Sedes
function my_custom_post_sedes() {
  $labels = array(
      'name'               => _x('Sedes', 'nombre general del tipo de entrada', 'textdomain'),
      'singular_name'      => _x('Sede', 'nombre singular del tipo de entrada', 'textdomain'),
      'add_new'            => _x('Agregar nueva', 'sede', 'textdomain'),
      'add_new_item'       => __('Agregar nueva Sede', 'textdomain'),
      'edit_item'          => __('Editar Sede', 'textdomain'),
      'new_item'           => __('Nueva Sede', 'textdomain'),
      'all_items'          => __('Todas las Sedes', 'textdomain'),
      'view_item'          => __('Ver Sede', 'textdomain'),
      'search_items'       => __('Buscar Sedes', 'textdomain'),
      'not_found'          => __('No se encontraron Sedes', 'textdomain'),
      'not_found_in_trash' => __('No se encontraron Sedes en la papelera', 'textdomain'),
      'parent_item_colon'  => '',
      'menu_name'          => 'Sedes'
  );
  $args = array(
      'labels'        => $labels,
      'description'   => 'Contiene nuestras sedes y datos específicos de las mismas',
      'public'        => true,
      'menu_position' => 6,
      'menu_icon'     => 'dashicons-admin-multisite',
      'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
      'has_archive'   => true,
      'taxonomies'    => array('category')  // Usando la taxonomía personalizada
  );
  register_post_type('sedes', $args); 
}
add_action('init', 'my_custom_post_sedes');



