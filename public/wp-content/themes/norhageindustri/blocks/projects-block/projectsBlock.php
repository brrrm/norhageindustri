<?php
/**
 * Headerblock Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$title			= get_field( 'title' );
$projects		= get_field( 'projects' );
$text_snippet	= get_field( 'show_text_snippet' );


// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'projects-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}
?>


<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>" >
	<div class="title-col">
		<h2><?php echo esc_html( $title ); ?></h2>
	</div>
	<div class="projects-col">
		<?php if($projects): ?>
			<ul>

			<?php foreach($projects as $project):
				$permalink = get_permalink( $project->ID );
        		$title = get_the_title( $project->ID );
        		$thumb = get_the_post_thumbnail($project->ID);
        	?>
				<li>
					<h3><a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a></h3>
					<?php echo $thumb; ?>
					<?php if($text_snippet): ?>
						<p class="excerpt"><?php echo wp_strip_all_tags(get_the_excerpt()); ?></p>
						<p><a href="<?php echo esc_url( $permalink ); ?>"><?php echo __( 'Read more' ); ?></a></p>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
			</ul>
			<?php 
		    // Reset the global post object so that the rest of the page works correctly.
		    wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
</div>