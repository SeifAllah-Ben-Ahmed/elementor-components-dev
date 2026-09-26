<?php
/**
 * Plugin Name: SeifHub UI Elements
 * Plugin URI: https://seifhub.com/
 * Description: Standalone Elementor widgets including custom counter and list components.
 * Version: 1.0.0
 * Author: SeifHub
 * Author URI: https://seifhub.com/
 * Requires at least: 6.5
 * Requires Plugins: elementor
 * Requires PHP: 7.4
 * Text Domain: seifhub-elementor-components
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SEIF_COMPONENT_VERSION', '1.0.0' );
define( 'SEIF_COMPONENT_PATH', plugin_dir_path( __FILE__ ) );
define( 'SEIF_COMPONENT_ASSETS_URL', plugin_dir_url( __FILE__ ) . 'assets' );

require_once SEIF_COMPONENT_PATH . 'includes/template-functions.php';
require_once SEIF_COMPONENT_PATH . 'includes/helpers-source.php';

/** Register files without loading them on pages that do not use a Seif widget. */
function seif_component_register_assets() {
	$rtl = is_rtl() ? '.rtl' : '';
	$css = SEIF_COMPONENT_ASSETS_URL . '/css/';
	$js  = SEIF_COMPONENT_ASSETS_URL . '/js/';

	wp_register_style( 'seif-core', $css . 'core' . $rtl . '.css', array(), SEIF_COMPONENT_VERSION );
	wp_register_style( 'seif-base', $css . 'base.css', array( 'seif-core' ), SEIF_COMPONENT_VERSION );
	wp_register_style( 'seif-fontawesome', $css . 'font-awesome5.min.css', array(), SEIF_COMPONENT_VERSION );
	wp_register_style( 'seif-architecture-icons', SEIF_COMPONENT_ASSETS_URL . '/flaticon-set-architecture/style.css', array(), SEIF_COMPONENT_VERSION );
	wp_register_style( 'seif-common-icons', SEIF_COMPONENT_ASSETS_URL . '/flaticons-common/style.css', array(), SEIF_COMPONENT_VERSION );
	wp_register_style( 'seif-linear-icons', SEIF_COMPONENT_ASSETS_URL . '/fonts/linear-icons/style.css', array(), SEIF_COMPONENT_VERSION );
	wp_register_style( 'seif-animate', $css . 'animate.min.css', array(), SEIF_COMPONENT_VERSION );
	wp_register_style( 'seif-swiper', $js . 'plugins/swiper/swiper.min.css', array(), SEIF_COMPONENT_VERSION );
	// Shared Service Block assets (the theme loaded these globally).
	wp_register_style( 'seif-service-common', false, array( 'seif-swiper', 'seif-base', 'seif-fontawesome', 'seif-architecture-icons', 'seif-common-icons', 'seif-linear-icons', 'seif-animate' ), SEIF_COMPONENT_VERSION );
	// All skins in one file: only loaded in the Elementor preview, as in the original.
	wp_register_style( 'seif-service-loader', $css . 'shortcodes/service-block/service-block-loader' . $rtl . '.css', array( 'seif-service-common', 'seif-floating-info' ), SEIF_COMPONENT_VERSION );
	wp_register_style( 'seif-floating-info', $css . 'floating-info' . $rtl . '.css', array(), SEIF_COMPONENT_VERSION );
	foreach ( array( 'style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'creative1', 'cursor-floating-info' ) as $style ) {
		$deps = 'cursor-floating-info' === $style ? array( 'seif-service-common', 'seif-floating-info' ) : array( 'seif-service-common' );
		wp_register_style( 'seif-service-' . $style, $css . 'shortcodes/service-block/service-block-' . $style . $rtl . '.css', $deps, SEIF_COMPONENT_VERSION );
	}
	wp_register_style( 'seif-funfacts-style', $css . 'widgets-core/funfacts' . $rtl . '.css', array( 'seif-base', 'seif-fontawesome', 'seif-architecture-icons', 'seif-common-icons' ), SEIF_COMPONENT_VERSION );
	wp_register_style( 'seif-list-style', $css . 'widgets-core/list' . $rtl . '.css', array( 'seif-base', 'seif-fontawesome', 'seif-architecture-icons', 'seif-common-icons' ), SEIF_COMPONENT_VERSION );

	// Libraries the theme loaded globally.
	wp_register_script( 'seif-swiper', $js . 'plugins/swiper/swiper.min.js', array(), SEIF_COMPONENT_VERSION, true );
	wp_register_script( 'seif-isotope', $js . 'plugins/isotope.pkgd.min.js', array( 'jquery' ), SEIF_COMPONENT_VERSION, true );
	wp_register_script( 'seif-appear', $js . 'plugins/jquery.appear.js', array( 'jquery' ), SEIF_COMPONENT_VERSION, true );
	wp_register_script( 'seif-animatenumbers', $js . 'plugins/jquery.animatenumbers.min.js', array( 'jquery' ), SEIF_COMPONENT_VERSION, true );
	wp_register_script( 'seif-wow', $js . 'plugins/wow.min.js', array(), SEIF_COMPONENT_VERSION, true );
	// Theme custom.js behaviour (isotope, swiper, WOW, floating info).
	wp_register_script( 'seif-frontend', $js . 'frontend.js', array( 'jquery', 'imagesloaded', 'seif-wow' ), SEIF_COMPONENT_VERSION, true );
	// Mascot Core widget scripts.
	foreach ( array( 'service-block', 'service-block-creative1', 'service-block-bg-image', 'service-block-item4-active', 'service-block10-bg-image', 'service-block-item10-active', 'funfact-animate-number' ) as $handle ) {
		$deps = 'funfact-animate-number' === $handle ? array( 'jquery', 'seif-appear', 'seif-animatenumbers' ) : array( 'jquery' );
		wp_register_script( 'seif-' . $handle, $js . 'widgets/' . $handle . '.js', $deps, SEIF_COMPONENT_VERSION, true );
	}
}
add_action( 'wp_enqueue_scripts', 'seif_component_register_assets' );
add_action( 'elementor/editor/before_enqueue_scripts', 'seif_component_register_assets' );

// Elementor panel icon for the widgets (same as the original).
add_action( 'elementor/editor/before_enqueue_scripts', function () {
	wp_enqueue_style( 'seif-editor', SEIF_COMPONENT_ASSETS_URL . '/css/editor.css', array(), SEIF_COMPONENT_VERSION );
} );

add_action( 'elementor/elements/categories_registered', function ( $elements_manager ) {
	$elements_manager->add_category( 'seifhub-elementor-components', array(
		'title' => esc_html__( 'SeifHub UI Elements', 'seifhub-elementor-components' ),
		'icon'  => 'fa fa-plug',
	) );
} );

add_action( 'elementor/widgets/register', function ( $widgets_manager ) {
	seif_component_register_assets();
	require_once SEIF_COMPONENT_PATH . 'widgets/service-block/widget.php';
	foreach ( glob( SEIF_COMPONENT_PATH . 'widgets/service-block/skins/*.php' ) as $skin ) {
		require_once $skin;
	}
	require_once SEIF_COMPONENT_PATH . 'widgets-core/funfact-counter/widget.php';
	require_once SEIF_COMPONENT_PATH . 'widgets-core/list/widget.php';
	$widgets_manager->register( new \SeifComponent\Widgets\ServiceBlock\TM_Elementor_ServiceBlock() );
	$widgets_manager->register( new \SeifComponent\Widgets\TM_Elementor_Funfact_Counter() );
	$widgets_manager->register( new \SeifComponent\Widgets\TM_Elementor_List() );
} );

// Same library settings as the original theme: icon-list.js holds full class names, so no prefix.
add_action( 'elementor/icons_manager/additional_tabs', function ( $tabs ) {
	$tabs['flaticon-set-architecture'] = array(
		'name'          => 'flaticon-set-architecture',
		'label'         => esc_html__( 'SeifHub Icon Set', 'seifhub-elementor-components' ),
		'url'           => '',
		'enqueue'       => array( SEIF_COMPONENT_ASSETS_URL . '/flaticon-set-architecture/style.css' ),
		'prefix'        => '',
		'displayPrefix' => '',
		'labelIcon'     => 'flaticon-set-architecture-sketch',
		'ver'           => '1.0',
		'fetchJson'     => SEIF_COMPONENT_ASSETS_URL . '/flaticon-set-architecture/icon-list.js',
		'native'        => 1,
	);
	$tabs['mascot-flaticon-common'] = array(
		'name'          => 'mascot-flaticon-common',
		'label'         => esc_html__( 'SeifHub Common Icons', 'seifhub-elementor-components' ),
		'url'           => '',
		'enqueue'       => array( SEIF_COMPONENT_ASSETS_URL . '/flaticons-common/style.css' ),
		'prefix'        => '',
		'displayPrefix' => '',
		'labelIcon'     => 'flaticon-common-139-tick',
		'ver'           => '1.0',
		'fetchJson'     => SEIF_COMPONENT_ASSETS_URL . '/flaticons-common/icon-list.js',
		'native'        => 1,
	);
	return $tabs;
} );
