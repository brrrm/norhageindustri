<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package norhageindustri
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PNMZTBMN');</script>
	<!-- End Google Tag Manager -->
	
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<!-- link rel="manifest" href="/site.webmanifest" -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PNMZTBMN"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'norhageindustri' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php 
			$norhageindustri_description = get_bloginfo( 'description', 'display' );
			if ( $norhageindustri_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $norhageindustri_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
			<a href="/" title="Home">
				<svg id="logo" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 500 351" style="enable-background:new 0 0 500 351;" xml:space="preserve">
				<style type="text/css">
					.logo-st0{fill:#FFFFFF;}
				</style>
				<g>
					<path class="logo-st0" d="M50.2,298c-2.2,0-3.8-1-4.6-2.9l-24.1-52.2h-0.3v51.3c0,2.5-1.4,3.9-3.9,3.9H3.9c-2.5,0-3.9-1.4-3.9-3.9v-84.7
						c0-2.5,1.4-3.9,3.9-3.9h15.9c2.2,0,3.8,1,4.6,2.9l22.4,48.6h0.3v-47.6c0-2.5,1.4-3.9,3.9-3.9h13.4c2.5,0,3.9,1.4,3.9,3.9v84.7
						c0,2.5-1.4,3.9-3.9,3.9H50.2z"/>
					<path class="logo-st0" d="M146,253.5V273c0,17.1-10,26.7-28.1,26.7c-18.1,0-28.1-9.6-28.1-26.7v-19.5c0-17.1,10-26.7,28.1-26.7
						C136,226.7,146,236.3,146,253.5z M126.2,254.6c0-7.2-2.8-10.9-8.4-10.9c-5.6,0-8.4,3.6-8.4,10.9v17.3c0,7.2,2.8,10.9,8.4,10.9
						c5.6,0,8.4-3.6,8.4-10.9V254.6z"/>
					<path class="logo-st0" d="M165,254.2c0-18,8.8-27.4,25.5-27.4c6,0,11.1,1.3,15.7,3.6c2.2,1.1,2.6,3.1,1.5,5.3l-3.9,7.9
						c-1.1,2.4-2.9,2.6-5.3,1.5c-2-1-3.9-1.4-5.9-1.4c-5.2,0-7.9,3.3-7.9,9.3v41.1c0,2.5-1.4,3.9-3.9,3.9h-12c-2.5,0-3.9-1.4-3.9-3.9
						V254.2z"/>
					<path class="logo-st0" d="M279,253v41.1c0,2.5-1.4,3.9-3.9,3.9h-12c-2.5,0-3.9-1.4-3.9-3.9V254c0-7-2.5-10.3-7.8-10.3
						c-5.2,0-7.8,3.5-7.8,10.3v40.1c0,2.5-1.4,3.9-3.9,3.9h-12c-2.5,0-3.9-1.4-3.9-3.9v-89.7c0-2.5,1.4-3.9,3.9-3.9h12
						c2.5,0,3.9,1.4,3.9,3.9v26.2h0.3c2.9-2.5,7.1-3.9,12.1-3.9C270.8,226.7,279,236.1,279,253z"/>
					<path class="logo-st0" d="M352,255v18c0,17.1-10,26.7-28.1,26.7c-17.8,0-27.2-7.8-27.2-22.7c0-13.8,8.8-21.3,25.5-21.3h10
						c0-8.6-3.8-12-11.1-12c-3.8,0-7.7,1.3-11,3.3c-2.2,1.4-4,1.1-5.3-1.1l-4.3-7.9c-1.3-2.1-0.8-3.9,1.1-5.3c6.4-4,13.2-6,21.5-6
						C341.6,226.7,352,236.3,352,255z M332.3,271.9v-2.9H325c-5.3,0-8.5,2.6-8.5,7c0,4.3,2.8,6.8,7.4,6.8
						C329.5,282.7,332.3,279.1,332.3,271.9z"/>
					<path class="logo-st0" d="M425.9,253.5v42.4c0,16.4-10.6,26.2-28.6,26.2c-9.1,0-17.1-2.4-23-6.7c-2-1.5-2.2-3.3-1-5.4l4.7-7.9
						c1.4-2.4,3.2-2.6,5.4-1.1c4.2,2.9,8.4,4.3,12.5,4.3c6.7,0,10-3.2,10-9.6v-2.6h-0.3c-2.9,2.5-7,3.9-11.8,3.9
						c-15.7,0-24.4-9.6-24.4-26.7v-16.6c0-17.1,10-26.7,28.1-26.7C415.9,226.7,425.9,236.3,425.9,253.5z M406.1,268.9v-14.3
						c0-7.2-2.8-10.9-8.4-10.9c-5.6,0-8.4,3.6-8.4,10.9v14.3c0,7.2,2.8,10.9,8.4,10.9C403.2,279.8,406.1,276,406.1,268.9z"/>
					<path class="logo-st0" d="M500,253.5V265c0,2.5-1.4,3.9-3.9,3.9h-31.5v1.5c0,8.8,3.5,12.3,11.3,12.3c3.9,0,7.4-1.1,10.7-3.5
						c2.2-1.5,4-1.4,5.4,0.8l4.9,7.4c1.3,2.1,1.1,3.9-0.8,5.4c-5.6,4.3-13.1,6.8-20.8,6.8c-20.1,0-30.5-9.2-30.5-28.3v-18
						c0-17.1,9.9-26.7,27.6-26.7C490.1,226.7,500,236.3,500,253.5z M481.3,254.6c0-7.2-2.8-10.9-8.4-10.9c-5.6,0-8.4,3.6-8.4,10.9v1.1
						h16.7V254.6z"/>
				</g>
				<g>
					<path class="logo-st0" d="M6.5,349.4c0,0.7-0.4,1.1-1.1,1.1H2c-0.7,0-1.1-0.4-1.1-1.1v-28.8c0-0.7,0.4-1.1,1.1-1.1h3.5
						c0.7,0,1.1,0.4,1.1,1.1V349.4z"/>
					<path class="logo-st0" d="M58.8,319.5c0.7,0,1.1,0.4,1.1,1.1v28.8c0,0.7-0.4,1.1-1.1,1.1H55c-0.6,0-1-0.2-1.3-0.7L43.2,329h-0.1v20.4
						c0,0.7-0.4,1.1-1.1,1.1h-3.3c-0.7,0-1.1-0.4-1.1-1.1v-28.8c0-0.7,0.4-1.1,1.1-1.1h4.2c0.6,0,1,0.2,1.3,0.7L54.3,340h0.1v-19.5
						c0-0.7,0.4-1.1,1.1-1.1H58.8z"/>
					<path class="logo-st0" d="M101.4,319.5c7.6,0,11.4,3.5,11.4,10.7v9.5c0,7.2-3.8,10.8-11.4,10.8H92c-0.7,0-1.1-0.4-1.1-1.1v-28.8
						c0-0.7,0.4-1.1,1.1-1.1H101.4z M107.2,330.7c0-4.3-1.9-6.4-6.1-6.4h-4.5v21.3h4.5c4.2,0,6.1-2.1,6.1-6.4V330.7z"/>
					<path class="logo-st0" d="M164,340.2c0,7-3.8,10.8-10.8,10.8c-6.9,0-10.8-3.8-10.8-10.8v-19.6c0-0.7,0.4-1.1,1.1-1.1h3.5
						c0.7,0,1.1,0.4,1.1,1.1v19.2c0,4.3,1.7,6.4,5.2,6.4c3.6,0,5.3-2.1,5.3-6.4v-19.2c0-0.7,0.4-1.1,1.1-1.1h3.3c0.7,0,1.1,0.4,1.1,1.1
						V340.2z"/>
					<path class="logo-st0" d="M212.9,322.5c0.5,0.5,0.4,1-0.1,1.5l-2.1,2c-0.5,0.5-1,0.5-1.5,0c-1.5-1.5-3.4-2.2-5.6-2.2
						c-3,0-4.8,1.6-4.8,4.3c0,2.3,1.4,3.5,6.1,4.2c6.9,1.2,9.5,4,9.5,9.3c0,5.6-4,9.3-10.1,9.3c-4.8,0-8.5-1.4-11.1-4.3
						c-0.5-0.5-0.4-1,0-1.5l2.1-2.1c0.5-0.5,1-0.5,1.5,0c1.9,2,4.2,2.9,7.1,2.9c3,0,4.8-1.6,4.8-4.3c0-2.3-1.4-3.4-6.1-4.2
						c-6.9-1.2-9.5-3.8-9.5-9.3c0-5.6,4-9.3,10.1-9.3C207.5,318.9,210.7,320.1,212.9,322.5z"/>
					<path class="logo-st0" d="M254.2,349.4c0,0.7-0.4,1.1-1.1,1.1h-3.5c-0.7,0-1.1-0.4-1.1-1.1v-25h-6.9c-0.7,0-1.1-0.4-1.1-1.1v-2.7
						c0-0.7,0.4-1.1,1.1-1.1h19.6c0.7,0,1.1,0.4,1.1,1.1v2.7c0,0.7-0.4,1.1-1.1,1.1h-7V349.4z"/>
					<path class="logo-st0" d="M296.5,349.4c0,0.7-0.4,1.1-1.1,1.1H292c-0.7,0-1.1-0.4-1.1-1.1v-28.8c0-0.7,0.4-1.1,1.1-1.1h8.6
						c7.6,0,11.2,3.1,11.2,9.6c0,4.8-2,7.9-6.2,9.1l6.3,11c0.4,0.7,0.1,1.3-0.7,1.3h-4c-0.6,0-1-0.2-1.3-0.7l-5.7-10.9h-3.7V349.4z
						 M300.6,333.9c3.9,0,5.6-1.5,5.6-4.8c0-3.3-1.7-4.8-5.6-4.8h-4.1v9.6H300.6z"/>
					<path class="logo-st0" d="M347.4,349.4c0,0.7-0.4,1.1-1.1,1.1h-3.5c-0.7,0-1.1-0.4-1.1-1.1v-28.8c0-0.7,0.4-1.1,1.1-1.1h3.5
						c0.7,0,1.1,0.4,1.1,1.1V349.4z"/>
				</g>
				<path class="logo-st0" d="M235.4,0c-68.1,0-123.4,55.2-123.4,123.4c0,19.9,4.7,38.7,13.1,55.3c29.8-8.3,66.2-17.2,114-26.4
					c0.4-1.8,2.7-3.9,5-4.6c0.2-0.1,0.3-0.1,0.5-0.1c-0.2-13.4-0.3-28.1-0.2-30.3c0.1-6.2-0.1-12.4-1-18.5c-0.9-5.9-2.5-11.8-4.8-17.3
					c-2.3-5.4-5.6-10.2-9.4-14.5c-4-4.4-8.5-8.3-13.4-11.7c-5.3-3.7-10.9-7.1-16.8-9.7c-11.5-5-23.5-6.2-36.5-5.7
					c17.8,11.7,32.6,41.7,49.9,48.6c7.6,3,15.3,1.5,22.2,3c1.1,0.2,2.2,0.6,2.9,0.9c-0.1-2.5-2.1-5.4-3-6.9
					c-5.1-8.6-10.3-12.7-18.2-18.7c-12.6-9.6-16.2-13.8-41.7-23c9.5,2.5,18.7,6,27.4,10.5c11.4,5.9,22,13.8,30.3,23.6
					c2.8,3.3,3.2,4.2,5.3,8c1.3,2.3,2.5,6.4,2.5,9.2c-8.5,1.4-15.5,4.7-24.1,3.2c-6.6-1.2-13.1-3.8-18.1-8.5c-2.3-2.2-4.1-4.9-5.9-7.5
					c-1.8-2.7-3.6-5.4-5.5-8.1c-8.4-12.6-17.2-25.3-29.2-34.8c4.2-1.3,21.2-1.2,32.9,1.2c6.9,1.5,13.4,3.6,19.5,7.2
					c10.6,6.3,20.8,14.4,27.5,25c6.4,10,9.1,22,9.8,33.8c0.2-1.2,0.4-2.4,0.7-3.5c1.5-5.7,4.2-11,8.2-15.4c4-4.3,8.9-7.5,14.1-10
					c5.3-2.6,10.1-4.1,15.7-5.6c9.4-2.6,15.6-3.1,17.8-2.6c-0.4,1-4.4,11.1-7.2,16.2c-3.5,6.2-7.8,11.7-13.9,15.5
					c-9,5.5-26.6,7.6-29,5.5c2.7-6.2,7.7-16.1,18.3-22.6c10.9-6.7,24.3-10.4,24.4-10.1c0.1,0.3-12.7,4.4-22.7,11.5
					c-7.7,5.5-13.4,13.1-16.3,19.4c3.7-2.7,7.8-3.1,14.5-4.7c18-4.5,27.8-19.8,30.5-29.7c-1.5,0.1-3,0.3-4.4,0.6
					c-5.7,1-11.4,2.7-16.9,4.6c-5.2,1.8-11.3,5.4-15.9,8.5c-4.5,3-8.4,6.8-11.1,11.5c-2.9,5.3-4.3,11.4-4.6,17.4
					c-0.2,3.9-1.4,11.7-2,20.9c-0.2,2.5-0.4,7.4-0.8,13.4c2.4-0.1,4.9,0.7,5.4,2.3c0,0.1,0,0.2,0.1,0.3c30.6-5.7,65.7-11.6,106.5-17.5
					c0.2-3,0.3-6,0.3-9C358.8,55.2,303.6,0,235.4,0z"/>
				</svg>
			</a>
		</div><!-- .site-branding -->

		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'norhageindustri' ); ?></button>
		
		<nav id="site-navigation" class="main-navigation">
			
			<h2><?php _e('Navigation', 'norhageindustri'); ?></h2>

			<aside class="search">
				<?php get_search_form(); ?>
			</aside>

			<?php
			wp_nav_menu([
				'theme_location' 	=> 'menu-1',
				'menu_id'        	=> 'primary-menu',
				'container_class'	=> 'menu-main-navigation-container menu-container'
			]);
			?>
			<?php
			wp_nav_menu([
				'theme_location' 	=> 'menu-2',
				'container_class'	=> 'menu-secondary-menu-container menu-container'
			]);
			?>

			<aside class="contact">
				<h3><?php _e('Contact us today', 'norhageindustri'); ?></h3>
				<a href="mailto:<?php _e('info@norhageindustri.com', 'norhageindustri'); ?>"><?php _e('info@norhageindustri.com', 'norhageindustri'); ?></a>
			</aside>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
