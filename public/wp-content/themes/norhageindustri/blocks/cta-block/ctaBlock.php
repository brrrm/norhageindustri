<?php
/**
 * textImageBlock Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$title			= get_field( 'title' );
$text			= get_field( 'text' );
$phone			= get_field( 'phone_number' );
$email			= get_field( 'email' );
$contact_form	= get_field( 'contact_form' );


// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'cta-block norhage-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( empty( $block['align'] ) ) {
	$class_name .= ' alignfull';
}else{
    $class_name .= ' align' . $block['align'];
}
?>


<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>">
    <div class="text-col">
        <h2><?php echo esc_html( $title ); ?></h2>
        <div class="text"><?php echo $text; ?></div>
        <?php if ( $phone ) : ?>
            <p><a href="tel:<?php echo trim( esc_html( $phone ) ); ?>" class="cta-phone button"><?php echo esc_html( $phone ); ?></a></p>
        <?php endif; ?>
        <?php if ( $email ) : ?>
            <p><a href="mailto:<?php echo trim( esc_html( $email ) ); ?>" class="cta-email button"><?php echo esc_html( $email ); ?></a></p>
        <?php endif; ?>
    </div>
    <div class="form-col">
        <?php
        if ( $contact_form ) {
            $hash = get_post_meta( $contact_form, '_hash', true );
            $form_id = substr( $hash, 0, 7 );
            echo apply_shortcodes( sprintf( '[contact-form-7 id="%s"]', $form_id ) );
        }
        ?>
    </div>
</div>