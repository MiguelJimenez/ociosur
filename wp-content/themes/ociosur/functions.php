<?php

// Función para agregar los menús
register_nav_menus( array(
'menu' => 'Menu superior',
'menu2' => 'Menú provincias'
));


// Función para agregar la funcionalidad "Imagen destacada" y tamaño personalizado de imágenes
add_theme_support( 'post-thumbnails');
add_image_size( 'slider_thumbs', 470, 300, true );
add_image_size( 'list_articles_thumbs', 450, 370, true );	


// Funcion para registrar los sidebars
register_sidebar(array(
 'name' => 'Sidebar',
 'before_widget' => '<section class="widget">',
 'after_widget' => '</section>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));

register_sidebar(array(
 'name' => 'Footer',
 'before_widget' => '<section class="widget">',
 'after_widget' => '</section>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));


// Función para agregar el "leer más" en los extractos
function extracto_mas()
{
	$enlace = " <a href='".get_permalink()."'><b>...leer más...</b></a>";
	return $enlace;
}

add_filter("excerpt_more", "extracto_mas");

// Para cargar estilos
function cargar_estilos()
{
	wp_enqueue_style('principal', get_stylesheet_uri() );
	wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:700,300,800,400');
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css' );
}

add_action( 'wp_enqueue_scripts', 'cargar_estilos');

?>