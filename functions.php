<?php
// Adiciona o tamanho de imagem GALERIA
if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'galeria', 500, 500, true );
}

add_theme_support( 'custom-header', $custom_header_support );

	if ( ! function_exists( 'get_custom_header' ) ) {

		// This is all for compatibility with versions of WordPress prior to 3.4.

		define( 'HEADER_TEXTCOLOR', $custom_header_support['default-text-color'] );

		define( 'HEADER_IMAGE', '' );

		define( 'HEADER_IMAGE_WIDTH', $custom_header_support['width'] );

		define( 'HEADER_IMAGE_HEIGHT', $custom_header_support['height'] );

		add_custom_image_header( $custom_header_support['wp-head-callback'], $custom_header_support['admin-head-callback'], $custom_header_support['admin-preview-callback'] );

		add_custom_background();

	}

?>