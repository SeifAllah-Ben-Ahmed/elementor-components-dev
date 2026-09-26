<?php
namespace SeifComponent\Widgets\ServiceBlock\Skins;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;
use Elementor\Skin_Base as Elementor_Skin_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Skin_Creative1 extends Elementor_Skin_Base {

	protected function _register_controls_actions() {
		add_action( 'elementor/element/seif-service-block/tm_general/after_section_end', [ $this, 'register_layout_controls' ] );
	}

	public function get_id() {
		return 'skin-creative1';
	}


	public function get_title() {
		return __( 'Skin Creative 1', 'seifhub-elementor-components' );
	}


	public function register_layout_controls( Widget_Base $widget ) {
		$this->parent = $widget;



		$this->start_controls_section(
			'current_skin_bg_styling',
			[
				'label' => esc_html__( 'Current Skin Styling', 'seifhub-elementor-components' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'current_skin_link_color_options',
			[
				'label' => esc_html__( 'Link Color Options', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$this->start_controls_tabs('tabs_current_theme_styling');
		$this->start_controls_tab(
			'tabs_current_theme_styling_normal',
			[
				'label' => esc_html__('Normal', 'seifhub-elementor-components'),
			]
		);
		$this->add_responsive_control(
			'current_skin_link_color',
			[
				'label' => esc_html__( "Link Color", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-item .link-block svg' => 'fill: {{VALUE}}; color: {{VALUE}};'
				]
			]
		);
		$this->add_responsive_control(
			'current_skin_link_theme_colored',
			[
				'label' => esc_html__( "Link Theme Colored", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => seif_component_theme_color_list(),
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .service-item .link-block svg' => 'fill: var(--theme-color{{VALUE}}); color: var(--theme-color{{VALUE}});'
				],
			]
		);
		$this->add_control(
			'current_skin_each_item_options',
			[
				'label' => esc_html__( 'Each Item Options', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'each_item_margin',
			[
				'label' => esc_html__( 'Margin', 'seifhub-elementor-components' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .service-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'each_item_padding',
			[
				'label' => esc_html__( 'Padding', 'seifhub-elementor-components' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .service-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'each_item_border',
				'label' => esc_html__( 'List Border', 'seifhub-elementor-components' ),
				'selector' => '{{WRAPPER}} .service-item',
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'tabs_current_theme_styling_hover',
			[
				'label' => esc_html__('Hover/Active', 'seifhub-elementor-components'),
			]
		);
		$this->add_responsive_control(
			'current_skin_link_color_hover',
			[
				'label' => esc_html__( "Link Color", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-item.current .link-block a svg, {{WRAPPER}} .service-item .link-block a:hover svg' => 'fill: {{VALUE}}; color: {{VALUE}};'
				]
			]
		);
		$this->add_responsive_control(
			'current_skin_link_theme_colored_hover',
			[
				'label' => esc_html__( "Link Theme Colored", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => seif_component_theme_color_list(),
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .service-item.current .link-block a svg, {{WRAPPER}} .service-item .link-block a:hover svg' => 'fill: var(--theme-color{{VALUE}}); color: var(--theme-color{{VALUE}});'
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
	}

	public function render() {
		$settings = $this->parent->get_settings_for_display();

		$direction_suffix = is_rtl() ? '.rtl' : '';
		wp_enqueue_style( 'seif-service-creative1' );
		wp_enqueue_script( 'seif-service-block-creative1' );


		//classes
		$classes = array();
		if ( ! empty( $settings['animate_icon_on_hover'] ) ) {
			$classes[] = 'animate-hover animate-icon-' . $settings['animate_icon_on_hover'];
		}
		$settings['classes'] = $classes;

		//icon classes
		$icon_classes = array();
		$settings['icon_classes'] = $icon_classes;

		//button classes
		$settings['btn_classes'] = seif_component_prepare_button_classes_from_params( $settings );


		//icon classes
		$icon_classes = array();
		$settings['icon_classes'] = $icon_classes;

		$settings['holder_id'] = seif_component_get_isotope_holder_ID('service-block');

		$settings['settings'] = $settings;

		//Produce HTML version by using the parameters (filename, variation, folder name, parameters, shortcode_ob_start)
		$html = seif_component_get_shortcode_template_part( 'service-item', $settings['_skin'], 'service-block/tpl', $settings, true );

		echo $html;
	}
}
