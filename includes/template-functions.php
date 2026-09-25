<?php
/** Local template loader and small rendering helpers. */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function seif_component_get_template_part( $path, $name = null, $params = array(), $capture = false ) {
	$path = trim( (string) $path, '/' );
	$name = (string) $name;
	if ( ! preg_match( '/^[a-zA-Z0-9_\/-]+$/', $path ) || ( '' !== $name && ! preg_match( '/^[a-zA-Z0-9_-]+$/', $name ) ) ) {
		return '';
	}
	$candidates = array();
	if ( '' !== $name ) {
		$candidates[] = SEIF_COMPONENT_PATH . $path . '-' . $name . '.php';
	}
	$candidates[] = SEIF_COMPONENT_PATH . $path . '.php';
	foreach ( $candidates as $candidate ) {
		if ( ! is_file( $candidate ) ) {
			continue;
		}
		if ( is_array( $params ) ) {
			extract( $params, EXTR_SKIP );
		}
		if ( $capture ) {
			ob_start();
			include $candidate;
			return ob_get_clean();
		}
		include $candidate;
		return '';
	}
	return '';
}

function seif_component_get_shortcode_template_part( $slug, $name = null, $folder = '', $params = array(), $capture = false ) {
	return seif_component_get_template_part( 'widgets/' . trim( $folder, '/' ) . '/' . $slug, $name, $params, $capture );
}

function seif_component_get_widgetcore_template_part( $slug, $name = null, $folder = '', $params = array(), $capture = false ) {
	return seif_component_get_template_part( 'widgets-core/' . trim( $folder, '/' ) . '/' . $slug, $name, $params, $capture );
}

function seif_component_get_isotope_holder_ID( $prefix = 'seif' ) {
	return sanitize_html_class( $prefix . '-' . wp_unique_id() );
}

function seif_component_no_posts_match_criteria_text() {
	echo '<p class="seif-no-items">' . esc_html__( 'No items found.', 'seifhub-elementor-components' ) . '</p>';
}
