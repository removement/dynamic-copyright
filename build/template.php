<p <?php echo wp_kses_data( get_block_wrapper_attributes() ); ?>>
	<?php
	if ( isset( $attributes['copyrightStatement'] ) ) {
		/**
		 * The wp_kses_post function is used to ensure any HTML that is not allowed in a post will be escaped.
		 *
		 * @see https://developer.wordpress.org/reference/functions/wp_kses_post/
		 * @see https://developer.wordpress.org/themes/theme-security/data-sanitization-escaping/#escaping-securing-output
		 */
        echo '&copy;' . date("Y") . ' ';
		echo wp_kses_post( $attributes['copyrightStatement'] );
	}
	?>
</p>