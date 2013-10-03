<?php
/**
 * Header template
 *
 * @package Portfolio Press
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
	<header id="branding">
        
			<?php
				// Check to see if the header image has been removed
				$header_image = get_header_image();
				if ( ! empty( $header_image ) ) :
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
			</a>
			<?php endif; // end check for removed header image ?>	
			
			
		
		<!-- <nav id="navigation">
			<h3 class="menu-toggle"><?php // _e( 'Menu', 'portfoliopress' ); ?></h3>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php // esc_attr_e( 'Skip to content', 'portfoliopress' ); ?>"><?php // _e( 'Skip to content', 'portfoliopress' ); ?></a></div>
	
			<?php // wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
		</nav> -->
		<!-- #access -->
    
	</header><!-- #branding -->

	<div id="main">
    	<div class="col-width">