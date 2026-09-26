<?php
namespace SeifComponent\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class TM_Elementor_List extends Widget_Base {
	public function __construct($data = [], $args = null) {
		parent::__construct($data, $args);
		$direction_suffix = is_rtl() ? '.rtl' : '';

		seif_component_register_assets();
	}

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'seif-lists';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Lists', 'seifhub-elementor-components' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'tm-elementor-widget-icon';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'seifhub-elementor-components' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return array();
	}

	public function get_style_depends() {
		return [ 'seif-list-style' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function register_controls() {
		//Features
		$this->start_controls_section(
			'list_repeater',
			[
				'label' => esc_html__( 'Features List', 'seifhub-elementor-components' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'disable_feature', [
				'label' => esc_html__( "Disable This Feature?", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'line_through', [
				'label' => esc_html__( "Add Line Through Text?", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'content',
			[
				'label' => esc_html__( "Single Line Text", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => ''
			]
		);
		$repeater->add_control(
			'list_icon_individual',
			[
				'label' => esc_html__( 'Individual Icon', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);
		$this->add_control(
			'list',
			[
				'label' => esc_html__( "Features Items", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			]
		);
		$this->add_control(
			'custom_css_class',
			[
				'label' => esc_html__( "Custom CSS class", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
		$this->end_controls_section();





		//Features
		$this->start_controls_section(
			'list_icon_options',
			[
				'label' => esc_html__( 'Features List Icons Options', 'seifhub-elementor-components' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'iconbox_wrapper_overflow_hidden',
			[
				'label' => esc_html__( "Hide Icon", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list i' => 'display: none;'
				]
			]
		);
		$this->add_control(
			'list_icon',
			[
				'label' => esc_html__( 'Common Icon for All', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'far fa-check-circle',
					'library' => 'solid',
				],
			]
		);
		$this->add_control(
			'list_icon_color',
			[
				'label' => esc_html__( "Color", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list i' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			'list_icon_color_hover',
			[
				'label' => esc_html__( "Color (Hover)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list li:hover i' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			'list_icon_theme_colored',
			[
				'label' => esc_html__( "Make Icon Theme Colored", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => seif_component_theme_color_list(),
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list li i' => 'color: var(--theme-color{{VALUE}});'
				],
			]
		);
		$this->add_control(
			'list_icon_theme_colored_hover',
			[
				'label' => esc_html__( "Make Icon Theme Colored (Hover)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => seif_component_theme_color_list(),
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list li:hover i' => 'color: var(--theme-color{{VALUE}});'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'list_icon_typography',
				'label' => esc_html__( 'Typography', 'seifhub-elementor-components' ),
				'selector' => '{{WRAPPER}} .tm-sc-list i',
			]
		);
		$this->add_responsive_control(
			'list_icon_margin',
			[
				'label' => esc_html__( 'Icon Margin', 'seifhub-elementor-components' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();




		//Features
		$this->start_controls_section(
			'list_styling',
			[
				'label' => esc_html__( 'Features List Styling', 'seifhub-elementor-components' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'animate_icon_on_hover',
			[
				'label' => esc_html__( "Animate Icon on Hover", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'' => esc_html__( 'None', 'seifhub-elementor-components' ),
					'rotate' => esc_html__( 'Rotate', 'seifhub-elementor-components' ),
					'rotate-x' => esc_html__( 'Rotate X', 'seifhub-elementor-components' ),
					'rotate-y' => esc_html__( 'Rotate Y', 'seifhub-elementor-components' ),
					'scale'  => esc_html__( 'Scale', 'seifhub-elementor-components' ),
					'translate'  => esc_html__( 'Translate', 'seifhub-elementor-components' ),
					'translate-x'  => esc_html__( 'Translate X', 'seifhub-elementor-components' ),
					'translate-y'  => esc_html__( 'Translate Y', 'seifhub-elementor-components' ),
				],
			]
		);
		$this->add_control(
			'list_text_color',
			[
				'label' => esc_html__( "Text Color", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list li' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			'list_text_color_hover',
			[
				'label' => esc_html__( "Text Color (Hover)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list li:hover' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			'list_text_theme_colored',
			[
				'label' => esc_html__( "Make Text Theme Colored", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => seif_component_theme_color_list(),
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list li' => 'color: var(--theme-color{{VALUE}});'
				],
			]
		);
		$this->add_control(
			'list_text_theme_colored_hover',
			[
				'label' => esc_html__( "Make Text Theme Colored (Hover)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => seif_component_theme_color_list(),
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list li:hover' => 'color: var(--theme-color{{VALUE}});'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'list__typography',
				'label' => esc_html__( 'Typography', 'seifhub-elementor-components' ),
				'selector' => '{{WRAPPER}} .tm-sc-list li',
			]
		);
		$this->add_control(
			'list_bordered',
			[
				'label' => esc_html__( "Make List(ul, li) Border Bottom?", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'list_border',
				'label' => esc_html__( 'List Border', 'seifhub-elementor-components' ),
				'selector' => '{{WRAPPER}} .tm-sc-list li',
			]
		);
		$this->add_control(
			'list_border_color_default',
			[
				'label' => esc_html__( "Border Bottom Color", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'list_bordered' => array('yes')
				],
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list li' => 'border-color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			'list_border_color_hover',
			[
				'label' => esc_html__( "Border Bottom Color (Hover)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}:hover .tm-sc-list li' => 'border-color: {{VALUE}};'
				]
			]
		);
		$this->add_responsive_control(
			'list_margin',
			[
				'label' => esc_html__( 'Margin', 'seifhub-elementor-components' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'list_padding',
			[
				'label' => esc_html__( 'Padding', 'seifhub-elementor-components' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();




		//Features
		$this->start_controls_section(
			'list_styling_last_item',
			[
				'label' => esc_html__( 'List Styling (Last Item)', 'seifhub-elementor-components' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'list_border_last_item',
				'label' => esc_html__( 'List Border', 'seifhub-elementor-components' ),
				'selector' => '{{WRAPPER}} .tm-sc-list li:last-child',
			]
		);
		$this->add_control(
			'list_border_color_default_last_item',
			[
				'label' => esc_html__( "Border Bottom Color", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'list_bordered' => array('yes')
				],
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list li:last-child' => 'border-color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			'list_border_color_hover_last_item',
			[
				'label' => esc_html__( "Border Bottom Color (Hover)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}:hover .tm-sc-list li:last-child' => 'border-color: {{VALUE}};'
				]
			]
		);
		$this->add_responsive_control(
			'list_margin_last_item',
			[
				'label' => esc_html__( 'Margin', 'seifhub-elementor-components' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list li:last-child' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'list_padding_last_item',
			[
				'label' => esc_html__( 'Padding', 'seifhub-elementor-components' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .tm-sc-list li:last-child' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

		//classes
		$classes = array();
		$classes[] = 'tm-sc-list';
		$classes[] = $settings['custom_css_class'];

		if ( ! empty( $settings['animate_icon_on_hover'] ) ) {
			$classes[] = 'tm-animate-hover icon-' . $settings['animate_icon_on_hover'];
		}

		$settings['classes'] = $classes;

		//Produce HTML version by using the parameters (filename, variation, folder name, parameters, shortcode_ob_start)
		$html = seif_component_get_widgetcore_template_part( 'list', null, 'list/tpl', $settings, true );

		echo $html;
	}
}
