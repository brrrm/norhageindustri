
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package norhageindustri
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found">
			<div class="page-content">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( '404', 'norhageindustri' ); ?></h1>
				</header><!-- .page-header -->
				<p><?php esc_html_e( 'oh dear, we hadden een cm te kort, deze pagina is gerecycled' ); ?></p>	
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
