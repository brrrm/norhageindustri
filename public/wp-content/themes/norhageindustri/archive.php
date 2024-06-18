<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package norhageindustri
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="entry-header">
				<?php
					if ( function_exists('yoast_breadcrumb') && !$is_preview ) {
						yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
				?>
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<div class="entry-content">
				<ul class="product-teasers alignwide">
				<?php
				/* Start the Loop */
				while ( have_posts() ) : ?>
					<li class="product mini-teaser image-button">
					<?php the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content-teaser', get_post_type() ); ?>
					</li>
				<?php endwhile; ?>
				</ul>
				
				<div class="pagination alignwide">
					<?php echo paginate_links(['mid_size' => 10, 'show_all' => true, 'type' => 'list']); ?>
				</div>
				
				<?php
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</div>

		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
