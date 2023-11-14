<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package norhageindustri
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(!has_block('norhageindustri/headerblock') && !has_block('norhageindustri/product-header-block')){ ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php } ?>

	<?php
		/*
		wp_nav_menu([
			'theme_location' 	=> 'menu-1',
			'menu_id'        	=> 'primary-menu',
			'show_submenu'		=> true,
			'container_class'	=> 'menu-main-navigation-container menu-container'
		]);
		*/
	?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'norhageindustri' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
