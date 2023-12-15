<?php
/**
 * textImageBlock Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$catName		= get_field( 'categories' );
$terms			= get_terms( ['taxonomy' => $catName, 'hide_empty' => false] );


// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'categories-block norhage-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}
?>


<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>" >
	<ul class="taxonomy-teasers">
	<?php foreach($terms as $term): ?>
		<?php $image = get_field('image', $term); ?>
		<li class="taxonomy-term teaser image-button">
			<a href="<?php echo get_term_link( $term ); ?>" title="<?php sprintf( __( 'View all post filed under %s', 'norhageindustri' ), $term->name ); ?>">
				<?php 
				if($image){
					echo wp_get_attachment_image( $image['ID'], 'full', '', array( 'class' => 'header-image__img', 'alt' => $image['alt'] ) );
				}
				?>
			</a>
			<h3 class="title">
				<a href="<?php echo get_term_link( $term ); ?>" title="<?php sprintf( __( 'View all post filed under %s', 'norhageindustri' ), $term->name ); ?>">
					<?php echo $term->name; ?>
				</a>
			</h3>
			
		</li>
	<?php endforeach; ?>
	</ul>	
</div>