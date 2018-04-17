<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MEU
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'meu' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php

			$meu_description = get_bloginfo( 'description', 'display' );
			if ( $meu_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $meu_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

<div class="topnav">

	<div class="logo">
	<a  href="http://mobile-eyes-us.itp.io:8000" title="Mobil-Eyes Us"><img id="site-logo" src="http://mobile-eyes-us.itp.io:8000/wp-content/uploads/2017/05/MOBIL-EYES-US_GIF_Logo.gif" alt="Mobil-Eyes Us" title="Mobil-Eyes Us" /></a>
	</div>
		
<button class="btn" id="logout-button" id="wp-admin-bar-logout"><a class="ab-item" href="http://mobile-eyes-us.itp.io/logout">Log Out</a>		</button>
	
</div>