<?php
/**
 * Headerblock Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$title			= get_field( 'title' );
$text			= get_field( 'intro_text' );
$images			= get_field( 'images' );


// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'productHeaderBlock';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}
?>

<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>" >
	<div class="text-col">
		<h2><?php echo esc_html( $title ); ?></h2>
		<div class="text">
			<?php echo esc_html( $text ); ?>
		</div>
	</div>

	<?php if ( $images ) : ?>
		<div class="image-col">
			<?php foreach( $images as $image ): ?>
			<figure class="header-image">
				<?php echo wp_get_attachment_image( $image['ID'], 'full', '', array( 'class' => 'header-image__img' ) ); ?>
			</figure>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</div>