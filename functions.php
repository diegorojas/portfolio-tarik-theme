<?php
// Adiciona o tamanho de imagem GALERIA
if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'galeria', 500, 500, true );
}


// Funчуo do Carousel na Unha.
function load_caroufredsel() {
	$path_theme = get_bloginfo('stylesheet_directory');
    wp_register_script( 'caroufredsel', $path_theme . '/js/jquery.carouFredSel-6.1.0-packed.js', array( 'jquery' ), '6.1.0', true );
    wp_enqueue_script( 'caroufredsel_pre', $path_theme . '/js/caroufredsel_pre.js', array( 'caroufredsel' ), '', true );
    wp_enqueue_script( 'custom-hover', $path_theme . '/js/custom-hover.js');
}
add_action( 'wp_enqueue_scripts', 'load_caroufredsel' );


// Funчуo para usar o Thickbox nativo do WP no tema Portfolio Brasa
function add_themescript(){
    if(!is_admin()){
    wp_enqueue_script('jquery');
    wp_enqueue_script('thickbox',null,array('jquery'));
    wp_enqueue_style('thickbox.css', '/'.WPINC.'/js/thickbox/thickbox.css', null, '1.0');
    }
}
add_action('init','add_themescript');

// Insere os metaboxes (MetaBrasa) no CPT Portolio
// require_once (get_stylesheet_directory() . '/metaboxes-portfolio.php');


	// Add support for custom headers.

	$custom_header_support = array(

		// The default header text color.

		'default-text-color' => '000',

		// The height and width of our custom header.

		'width' => apply_filters( 'twentyeleven_header_image_width', 1000 ),

		'height' => apply_filters( 'twentyeleven_header_image_height', 288 ),

		// Support flexible heights.

		'flex-height' => true,

		// Random image rotation by default.

		'random-default' => true,
	);



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