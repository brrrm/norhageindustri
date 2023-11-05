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

// If no posts have been selected, load all the posts from this project's post-type.
if(!$projects || empty($projects)){
	global $post; 
	$post_type = $context['postType'];
	if($post_type != 'page'){
		$post_taxonomies = get_object_taxonomies($post_type);
		$terms = get_the_terms($post->ID, $post_taxonomies[2]);
		$projects = get_posts([
	    	'post_type'		=> $post_type,
	    	'numberposts'	=> -1,
	    	'exclude'		=> $post->ID,
	    	/*
	    	'tax_query'		=> [
	    		[
	        		'taxonomy'		=> $post_taxonomies[2],
	        		'field'			=> 'term_id',
	        		'terms'			=> $terms[0]->term_id
	        	]
	    	]
	    	*/
	    ]);
	}
}

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
if($text_snippet){
	$class_name .= ' with-text-snippets';
}
?>


<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>" >
	<div class="title-col">
		<h2><?php echo esc_html( $title ); ?></h2>
		<ul class="slider-nav">
			<li><button class="left"><?php _e('Left', 'norhageindustri'); ?></button></li>
			<li><button class="right"><?php _e('Right', 'norhageindustri'); ?></button></li>
		</ul>
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
					<?php echo $thumb; ?>
					<h3 ><a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a></h3>
					<?php if($text_snippet): ?>
						<p class="excerpt"><?php echo wp_strip_all_tags(get_the_excerpt()); ?></p>
						<p><a href="<?php echo esc_url( $permalink ); ?>"><?php echo __( 'Read more ->' ); ?></a></p>
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