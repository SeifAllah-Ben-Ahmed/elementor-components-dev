<?php
/** Local template loader and small rendering helpers (same behaviour as the Mascot Core originals). */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function seif_component_get_template_part( $template_path, $name = null, $params = array(), $shortcode_ob_start = false ) {

	$output_html = '';

	if( is_array($params) && count($params) ) {
		extract($params);
	}

	$templates = array();
	$name = (string) $name;
	if ( '' !== $name )
		$templates[] = "{$template_path}-{$name}.php";

	$templates[] = "{$template_path}.php";

	$located = '';
	foreach ( $templates as $template ) {
		$template = ltrim( $template, '/' );
		if ( false === strpos( $template, '..' ) && is_file( SEIF_COMPONENT_PATH . $template ) ) {
			$located = SEIF_COMPONENT_PATH . $template;
			break;
		}
	}

	if($located) {
		if( $shortcode_ob_start ) {
			ob_start();
			include($located);
			$output_html = ob_get_clean();
		} else {
			include($located);
		}
	}

	return $output_html;
}

function seif_component_get_shortcode_template_part( $slug, $name = null, $folder = '', $params = array(), $shortcode_ob_start = false ) {
	$template_path = 'widgets/' . $folder . '/' . $slug;
	return seif_component_get_template_part( $template_path, $name, $params, $shortcode_ob_start );
}

function seif_component_get_widgetcore_template_part( $slug, $name = null, $folder = '', $params = array(), $shortcode_ob_start = false ) {
	$template_path = 'widgets-core/' . $folder . '/' . $slug;
	return seif_component_get_template_part( $template_path, $name, $params, $shortcode_ob_start );
}

function seif_component_get_isotope_holder_ID( $id_prefix = 'id' ) {
	$random_number = wp_rand( 111111, 999999 );
	$holder_id = $id_prefix . '-holder-' . $random_number;
	return $holder_id;
}

function seif_component_no_posts_match_criteria_text() {
	return '<p>' . esc_html_e( 'Sorry, no posts matched your criteria.', 'seifhub-elementor-components' ) . '</p>';
}
