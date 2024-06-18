<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package norhageindustri
 */

?>
	<?php
	$tld = pathinfo($_SERVER['SERVER_NAME'], PATHINFO_EXTENSION);
	?>
	<footer id="colophon" class="site-footer">
		<div class="company-info">
			<h2><?php _e('Norhage Industri', 'norhageindustri'); ?></h2>
			<p><?php _e('Our experts are available to assist and advise you on your industrial project. Don\'t hesitate to contact us', 'norhageindustri'); ?></p>
			<dl>
				<dt><?php _e('Address', 'norhageindustri'); ?></dt>
				<dd>
					TEHI AS <br />
					Postboks 195 <br />
					4350 Kleppe <br />
					Norge
				</dd>
				
				<dt><?php _e('Email', 'norhageindustri'); ?></dt>
				<dd><a href="mailto:<?php _e('info@norhageindustri.com', 'norhageindustri'); ?>"><?php _e('info@norhageindustri.com', 'norhageindustri'); ?></a></dd>
				
				<dt><?php _e('Phone', 'norhageindustri'); ?></dt>
				<dd>
					<a href="tel:<?php echo str_replace(' ', '', __('+47 967 59 359', 'norhageindustri')); ?>"><?php _e('+47 967 59 359', 'norhageindustri'); ?></a> <br />
					<a href="tel:<?php echo str_replace(' ', '', __('+47 983 67 181', 'norhageindustri')); ?>"><?php _e('+47 983 67 181', 'norhageindustri'); ?></a>
				</dd>

				<dt><?php _e('B2C webshop', 'norhageindustri'); ?></dt>
				<dd><a href="<?php _e('https://norhage.com', 'norhageindustri'); ?>" target="_blank"><?php _e('norhage.com', 'norhageindustri'); ?></a></dd>
			</dl>
		</div>
		<nav id="footer-navigation" class="sitemap">
			<h2><?php _e('Sitemap', 'norhageindustri'); ?></h2>
			<button class="menu-toggle" aria-controls="sitemap" aria-expanded="false"><?php _e( 'Sitemap', 'norhageindustri' ); ?></button>
			<?php wp_nav_menu([
				'theme_location' => 'menu-3',
				'container_class'	=> 'menu-footer-menu-container'
			]); ?>

		</nav><!-- #site-navigation -->

		<nav id="socials-navigation">
			<h3><?php _e('Norhage Industri can also be found on:', 'norhageindustri'); ?></h3>
			<ul>
				<li class="facebook">
					<a href="https://www.facebook.com/people/Norhage-Industri/61551080051832/" target="_blank" rel="nofollow">Facebook</a>
				</li>
				<li class="instagram">
					<a href="https://www.instagram.com/norhage_industri/" target="_blank" rel="nofollow">Instagram</a>
				</li>
			</ul>
		</nav>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
