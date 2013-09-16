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
	<div id="main">
    
    <div id="coluna-esquerda">
    <hgroup id="logo">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
         TARIK<br />
	KLEIN
        </a>
    </hgroup>
          
    <div id="menu-brasa">
        <ul>
            <?php
			$classe_design = null;
			$classe_web = null;
			$classe_cultura = null;
            $wpurl = get_bloginfo ('wpurl');
         
            if (strpos($wpurl,'design') !== false) {
                $classe_design = ' atual-design';
            }
            if (strpos($wpurl,'web') !== false) {
                $classe_web = ' atual-web';
            }
            if (strpos($wpurl,'cultura') !== false) {
                $classe_cultura = ' atual-cultura';
            }
             ?>
        </ul>
    </div><!-- #menu-brasa -->
    
    <nav id="navigation">
    
        <h3 class="menu-toggle"><?php _e( 'Menu', 'portfoliopress' ); ?></h3>    
        <?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
    </nav><!-- #access -->
</div><!-- #coluna-esquerda -->
