<?php /*
 
    // funcion para contar las letras de cada post en la introduccion en el index
     function custom_excerpt_length( $length ) {
      return 80;
       }
      add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
 
    // funcion para habilitar la opcion para subir imagenes destacadas a cada post
      add_theme_support( 'post-thumbnails' );
 
    // esto nos añade las funciones para los RSS
    automatic_feed_links();
 
    // cargamos jQuery
    if ( !is_admin() ) {
       wp_deregister_script('jquery');
       wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
       wp_enqueue_script('jquery');
    }
 
    // Declaramos el sidebar como zona acta para añadir widgets
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Sidebar Widgets',
            'id'   => 'sidebar-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }
*/
?>