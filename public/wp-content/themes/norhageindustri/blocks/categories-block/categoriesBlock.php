<?php
/**
 * textImageBlock Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$title			= get_field( 'title' );
$catName		= get_field( 'categories' );
$terms			= get_terms( ['taxonomy' => $catName, 'hide_empty' => false] );


// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'categories-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}
?>


<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>" >
	<h2><?php echo esc_html( $title ); ?></h2>
	<ul class="taxonomy-teasers">
	<?php foreach($terms as $term): ?>
		<?php $image = get_field('image', $term); ?>
		<li class="taxonomy-term teaser">
			<div class="image">
				<?php 
				if(isset($image)){
					echo wp_get_attachment_image( $image['ID'], 'full', '', array( 'class' => 'header-image__img', 'alt' => $image['alt'] ) );
				}
				?>
			</div>
			<div class="text">
				<h3>
					<a href="<?php echo get_term_link( $term ); ?>" title="<?php sprintf( __( 'View all post filed under %s', 'norhageindustri' ), $term->name ); ?>">
						<?php echo $term->name; ?>
					</a>
				</h3>
				<div class="desc"><?php echo term_description($term); ?></div>
			</div>
			
		</li>
	<?php endforeach; ?>
	</ul>	
</div>