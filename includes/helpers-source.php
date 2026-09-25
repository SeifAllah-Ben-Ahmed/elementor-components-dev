<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/** Plugin-local copies of source widget control and rendering helpers. */

function seif_component_animate_css_animation_list() {
		$animate_css_animation_list = array(
			'' => '',
			'tm-split-text split-in-fade' => 'Slip Text In Fade',
			'tm-split-text split-in-right' => 'Slip Text In Right',
			'tm-split-text split-in-left'  => 'Slip Text In Left',
			'tm-split-text split-in-up'    => 'Slip Text In Up',
			'tm-split-text split-in-down'  => 'Slip Text In Down',
			'tm-split-text split-in-rotate'  => 'Slip Text In Rotate',
			'tm-split-text split-in-scale'  => 'Slip Text In Scale',
			'wow fadeIn' => 'fadeIn',
			'wow fadeInDown' => 'fadeInDown',
			'wow fadeInDownBig' => 'fadeInDownBig',
			'wow fadeInLeft' => 'fadeInLeft',
			'wow fadeInLeftBig' => 'fadeInLeftBig',
			'wow fadeInRight' => 'fadeInRight',
			'wow fadeInRightBig' => 'fadeInRightBig',
			'wow fadeInUp' => 'fadeInUp',
			'wow fadeInUpBig' => 'fadeInUpBig',
			'wow fadeOut' => 'fadeOut',
			'wow fadeOutDown' => 'fadeOutDown',
			'wow fadeOutDownBig' => 'fadeOutDownBig',
			'wow fadeOutLeft' => 'fadeOutLeft',
			'wow fadeOutLeftBig' => 'fadeOutLeftBig',
			'wow fadeOutRight' => 'fadeOutRight',
			'wow fadeOutRightBig' => 'fadeOutRightBig',
			'wow fadeOutUp' => 'fadeOutUp',
			'wow fadeOutUpBig' => 'fadeOutUpBig',
			'wow bounce' => 'bounce',
			'wow flash' => 'flash',
			'wow pulse' => 'pulse',
			'wow rubberBand' => 'rubberBand',
			'wow shake' => 'shake',
			'wow swing' => 'swing',
			'wow tada' => 'tada',
			'wow wobble' => 'wobble',
			'wow jello' => 'jello',
			'wow bounceIn' => 'bounceIn',
			'wow bounceInDown' => 'bounceInDown',
			'wow bounceInLeft' => 'bounceInLeft',
			'wow bounceInRight' => 'bounceInRight',
			'wow bounceInUp' => 'bounceInUp',
			'wow bounceOut' => 'bounceOut',
			'wow bounceOutDown' => 'bounceOutDown',
			'wow bounceOutLeft' => 'bounceOutLeft',
			'wow bounceOutRight' => 'bounceOutRight',
			'wow bounceOutUp' => 'bounceOutUp',
			'wow flip' => 'flip',
			'wow flipInX' => 'flipInX',
			'wow flipInY' => 'flipInY',
			'wow flipOutX' => 'flipOutX',
			'wow flipOutY' => 'flipOutY',
			'wow lightSpeedIn' => 'lightSpeedIn',
			'wow lightSpeedOut' => 'lightSpeedOut',
			'wow rotateIn' => 'rotateIn',
			'wow rotateInDownLeft' => 'rotateInDownLeft',
			'wow rotateInDownRight' => 'rotateInDownRight',
			'wow rotateInUpLeft' => 'rotateInUpLeft',
			'wow rotateInUpRight' => 'rotateInUpRight',
			'wow rotateOut' => 'rotateOut',
			'wow rotateOutDownLeft' => 'rotateOutDownLeft',
			'wow rotateOutDownRight' => 'rotateOutDownRight',
			'wow rotateOutUpLeft' => 'rotateOutUpLeft',
			'wow rotateOutUpRight' => 'rotateOutUpRight',
			'wow slideInUp' => 'slideInUp',
			'wow slideInDown' => 'slideInDown',
			'wow slideInLeft' => 'slideInLeft',
			'wow slideInRight' => 'slideInRight',
			'wow slideOutUp' => 'slideOutUp',
			'wow slideOutDown' => 'slideOutDown',
			'wow slideOutLeft' => 'slideOutLeft',
			'wow slideOutRight' => 'slideOutRight',
			'wow zoomIn' => 'zoomIn',
			'wow zoomInDown' => 'zoomInDown',
			'wow zoomInLeft' => 'zoomInLeft',
			'wow zoomInRight' => 'zoomInRight',
			'wow zoomInUp' => 'zoomInUp',
			'wow zoomOut' => 'zoomOut',
			'wow zoomOutDown' => 'zoomOutDown',
			'wow zoomOutLeft' => 'zoomOutLeft',
			'wow zoomOutRight' => 'zoomOutRight',
			'wow zoomOutUp' => 'zoomOutUp',
			'wow hinge' => 'hinge',
			'wow rollIn' => 'rollIn',
			'wow rollOut' => 'rollOut',
		);
		return $animate_css_animation_list;
	}

function seif_component_disply_flex_horizontal_align_elementor() {
		$list = array(
			'' => esc_html__( 'Default', 'seifhub-elementor-components' ),
			'flex-start' => esc_html__( 'Start', 'seifhub-elementor-components' ),
			'center' => esc_html__( 'Center', 'seifhub-elementor-components' ),
			'flex-end' => esc_html__( 'End', 'seifhub-elementor-components' ),
			'space-between' => esc_html__( 'Space Between', 'seifhub-elementor-components' ),
			'space-around' => esc_html__( 'Space Around', 'seifhub-elementor-components' ),
			'space-evenly' => esc_html__( 'Space Evenly', 'seifhub-elementor-components' ),
		);
		return $list;
	}

function seif_component_disply_flex_vertical_align_elementor() {
		$list = array(
			'' => esc_html__( 'Default', 'seifhub-elementor-components' ),
			'flex-start' => esc_html__( 'Top', 'seifhub-elementor-components' ),
			'center' => esc_html__( 'Middle', 'seifhub-elementor-components' ),
			'flex-end' => esc_html__( 'Bottom', 'seifhub-elementor-components' ),
		);
		return $list;
	}

function seif_component_disply_type_list_elementor() {
		$list = array(
			'flex' => esc_html__('Flex', 'seifhub-elementor-components'),
			'block' => esc_html__('Block', 'seifhub-elementor-components'),
			'inline' => esc_html__('Inline', 'seifhub-elementor-components'),
			'inline-flex' => esc_html__('Inline Flex', 'seifhub-elementor-components'),
			'inline-block' => esc_html__('Inline Block', 'seifhub-elementor-components'),
			'inherit' => esc_html__('Inherit', 'seifhub-elementor-components'),
			'initial' => esc_html__('Initial', 'seifhub-elementor-components'),
		);
		return $list;
	}

function seif_component_elementor_grid_responsive_columns( $control_object ) {
			$control_object->add_responsive_control(
				'responsive_columns', [
					'label' => esc_html__( "Responsive Columns Layout", 'seifhub-elementor-components' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'options' => [
						'100'  	=>  '1',
						'49.98' =>  '2',
						'33.2'  =>  '3',
						'24.98' =>  '4',
						'19.98' =>  '5',
						'14.2'  =>  '6',
					],
					'condition' => [
						'display_type!' => array('carousel')
					],
					'selectors' => [
						'{{WRAPPER}} .isotope-layout .isotope-item' => 'width: {{VALUE}}% !important;'
					]
				]
			);
    }

function seif_component_get_available_image_sizes() {
		$size = array();
		$available_image_sizes = seif_component_get_available_image_sizes_array();

		// Create the full array with sizes and crop info
		foreach( $available_image_sizes as $key => $value ) {
			$sizes[ $key ]	=	$key . ( ($value['crop'] == 1) ? ' - cropped' : '') . ' - (' .$value['width'] . 'x' . $value['height'] . ')';
		}
		return $sizes;
	}

function seif_component_get_available_image_sizes_array( $size = '' ) {

		global $_wp_additional_image_sizes;

		$sizes = array();
		$get_intermediate_image_sizes = get_intermediate_image_sizes();

		// Create the full array with sizes and crop info
		foreach( $get_intermediate_image_sizes as $_size ) {
			if ( in_array( $_size, array( 'thumbnail', 'medium', 'medium_large', 'large', 'full' ) ) ) {
				$sizes[ $_size ]['width'] = get_option( $_size . '_size_w' );
				$sizes[ $_size ]['height'] = get_option( $_size . '_size_h' );
				$sizes[ $_size ]['crop'] = (bool) get_option( $_size . '_crop' );
				if ( $_size == 'large' ) {
					$sizes[ 'full' ] ['width'] = 0;
					$sizes[ 'full' ] ['height'] = 0;
					$sizes[ 'full' ] ['crop'] = false;
				}
			} elseif ( isset( $_wp_additional_image_sizes[ $_size ] ) ) {
				$sizes[ $_size ] = array(
					'width' => $_wp_additional_image_sizes[ $_size ]['width'],
					'height' => $_wp_additional_image_sizes[ $_size ]['height'],
					'crop' =>  $_wp_additional_image_sizes[ $_size ]['crop']
				);
			}
		}

		// Get only 1 size if found
		if ( $size ) {
			if( isset( $sizes[ $size ] ) ) {
				return $sizes[ $size ];
			} else {
				return false;
			}
		}
		return $sizes;
	}

function seif_component_get_btn_design_style() {
		$array = array(
			'theme-btn-style-one'	=>	esc_html__( 'Theme Button 1', 'seifhub-elementor-components'),
			'theme-btn-style-two'	=>	esc_html__( 'Theme Button 2', 'seifhub-elementor-components'),
			'btn-circle-arrow'	=>	esc_html__( 'Circle With Arrow', 'seifhub-elementor-components'),
			'btn-plain-text'	=>	esc_html__( 'Plain Text', 'seifhub-elementor-components'),
			'btn-plain-text-with-arrow'	=>	esc_html__( 'Plain Text + Arrow Left', 'seifhub-elementor-components'),
			'btn-plain-text-with-arrow-right'	=>	esc_html__( 'Plain Text + Arrow Right', 'seifhub-elementor-components'),
			'btn-dark'	=>	esc_html__( 'Button Dark', 'seifhub-elementor-components'),
			'btn-light'	=>	esc_html__( 'Button Light', 'seifhub-elementor-components'),
			'btn-modern-white'	=>	esc_html__( 'Button Modern White', 'seifhub-elementor-components'),
			'btn-modern-theme-colored'	=>	esc_html__( 'Button Modern Theme Colored', 'seifhub-elementor-components'),
			'btn-primary'	=>	esc_html__( 'Button Primary', 'seifhub-elementor-components'),
			'btn-secondary'	=>	esc_html__( 'Button Secondary', 'seifhub-elementor-components'),
			'btn-success'	=>	esc_html__( 'Button Success', 'seifhub-elementor-components'),
			'btn-danger'	=>	esc_html__( 'Button Danger', 'seifhub-elementor-components'),
			'btn-warning'	=>	esc_html__( 'Button Warning', 'seifhub-elementor-components'),
			'btn-info'	=>	esc_html__( 'Button Info', 'seifhub-elementor-components'),
			'btn-gray'	=>	esc_html__( 'Button Gray', 'seifhub-elementor-components'),
		);

		$array_theme_color = array();
		for ($i=1; $i <= 4; $i++) {
			$array_theme_color[ 'btn-theme-colored' . $i ] = esc_html__( 'Button Theme Colored', 'seifhub-elementor-components') . ' ' . $i;
		}

		$array = array_merge($array_theme_color, $array);
		return $array;
	}

function seif_component_get_button_arraylist( $control_object, $serial, $prefix = '', $btn_condition = false ) {
		$array = array();

		switch ( $serial ) {
			case '1':
				if( $btn_condition ) {
					$control_object->add_control(
						$prefix . "btn_design_style", [
							'label' => esc_html__( "Button Design Style", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SELECT,
							'options' => seif_component_get_btn_design_style(),
							'default' => 'btn-theme-colored1',
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_control(
						$prefix . "btn_design_style", [
							'label' => esc_html__( "Button Design Style", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SELECT,
							'options' => seif_component_get_btn_design_style(),
							'default' => 'btn-theme-colored1',
						]
					);
				}

				if( $btn_condition ) {
					$control_object->add_control(
						$prefix . "button_size", [
							'label' => esc_html__( "Button Size", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SELECT,
							'options' => seif_component_get_button_size(),
							'default' => '',
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_control(
						$prefix . "button_size", [
							'label' => esc_html__( "Button Size", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SELECT,
							'options' => seif_component_get_button_size(),
							'default' => '',
						]
					);
				}

				if( $btn_condition ) {
					$control_object->add_responsive_control(
						$prefix . "button_alignment", [
							'label' => esc_html__( "Button Alignment", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::CHOOSE,
							'options' => seif_component_text_align_choose(),
							'selectors' => [
								'{{WRAPPER}} .btn-view-details' => 'text-align: {{VALUE}};'
							],
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
					$control_object->add_responsive_control(
						$prefix . "button_text_alignment", [
							'label' => esc_html__( "Button Text Alignment", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::CHOOSE,
							'options' => seif_component_text_align_choose(),
							'selectors' => [
								'{{WRAPPER}} .btn-view-details > a' => 'text-align: {{VALUE}};'
							],
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_responsive_control(
						$prefix . "button_alignment", [
							'label' => esc_html__( "Button Alignment", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::CHOOSE,
							'options' => seif_component_text_align_choose(),
							'selectors' => [
								'{{WRAPPER}} .btn-view-details' => 'text-align: {{VALUE}};'
							],
						]
					);
					$control_object->add_responsive_control(
						$prefix . "button_text_alignment", [
							'label' => esc_html__( "Button Text Alignment", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::CHOOSE,
							'options' => seif_component_text_align_choose(),
							'selectors' => [
								'{{WRAPPER}} .btn-view-details > a' => 'text-align: {{VALUE}};'
							],
						]
					);
				}

				if( $btn_condition ) {
					$control_object->add_control(
						$prefix . "button_hover_animation_effect", [
							'label' => esc_html__( "Animation Effect", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SELECT,
							'options' => array(
								''	=> 	esc_html__( 'None', 'seifhub-elementor-components' ),
								'hvr-sweep-to-right'	=> 	esc_html__( 'Sweep To Right', 'seifhub-elementor-components' ),
								'hvr-bounce-to-right'	=> 	esc_html__( 'Bounce To Right', 'seifhub-elementor-components' ),
								'hvr-shutter-out-horizontal'	=> 	esc_html__( 'Shutter Out Horizontal', 'seifhub-elementor-components' ),
								'btn-arrow-hover-animation'	=> 	esc_html__( 'Arrow Hover Animation', 'seifhub-elementor-components' ),
							),
							'default' => '',
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_control(
						$prefix . "button_hover_animation_effect", [
							'label' => esc_html__( "Animation Effect", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SELECT,
							'options' => array(
								''	=> 	esc_html__( 'None', 'seifhub-elementor-components' ),
								'hvr-sweep-to-right'	=> 	esc_html__( 'Sweep To Right', 'seifhub-elementor-components' ),
								'hvr-bounce-to-right'	=> 	esc_html__( 'Bounce To Right', 'seifhub-elementor-components' ),
								'hvr-shutter-out-horizontal'	=> 	esc_html__( 'Shutter Out Horizontal', 'seifhub-elementor-components' ),
								'btn-arrow-hover-animation'	=> 	esc_html__( 'Arrow Hover Animation', 'seifhub-elementor-components' ),
							),
							'default' => '',
						]
					);
				}

				if( $btn_condition ) {
					$control_object->add_control(
						$prefix . "btn_class", [
							'label' => esc_html__( "Custom CSS Class", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::TEXT,
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_control(
						$prefix . "btn_class", [
							'label' => esc_html__( "Custom CSS Class", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::TEXT,
						]
					);
				}

				if( $btn_condition ) {
					$control_object->add_control(
						$prefix . "btn_outlined", [
							'label' => esc_html__( "Make Button Outlined", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SWITCHER,
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_control(
						$prefix . "btn_outlined", [
							'label' => esc_html__( "Make Button Outlined", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SWITCHER,
						]
					);
				}

				if( $btn_condition ) {
					$control_object->add_control(
						$prefix . "btn_round", [
							'label' => esc_html__( "Make Button Round", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SWITCHER,
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_control(
						$prefix . "btn_round", [
							'label' => esc_html__( "Make Button Round", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SWITCHER,
						]
					);
				}

				if( $btn_condition ) {
					$control_object->add_control(
						$prefix . "btn_flat", [
							'label' => esc_html__( "Make Button Flat", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SWITCHER,
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_control(
						$prefix . "btn_flat", [
							'label' => esc_html__( "Make Button Flat", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SWITCHER,
						]
					);
				}

				if( $btn_condition ) {
					$control_object->add_responsive_control(
						$prefix . "btn_block", [
							'label' => esc_html__( "Button Fullwidth (Block Level Button)", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SWITCHER,
							'selectors' => [
								'{{WRAPPER}} .btn-view-details' => 'display:grid;'
							],
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_responsive_control(
						$prefix . "btn_block", [
							'label' => esc_html__( "Button Fullwidth (Block Level Button)", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SWITCHER,
							'selectors' => [
								'{{WRAPPER}} .btn-view-details' => 'display:grid;'
							],
						]
					);
				}

				if( $btn_condition ) {
					$control_object->add_control(
						$prefix . "btn_threed_effect", [
							'label' => esc_html__( "3D Effect", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SWITCHER,
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_control(
						$prefix . "btn_threed_effect", [
							'label' => esc_html__( "3D Effect", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SWITCHER,
						]
					);
				}

				if( $btn_condition ) {
					$control_object->add_control(
						$prefix . "btn_gradient_effect", [
							'label' => esc_html__( "Gradient Effect", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SWITCHER,
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_control(
						$prefix . "btn_gradient_effect", [
							'label' => esc_html__( "Gradient Effect", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::SWITCHER,
						]
					);
				}

				if( $btn_condition ) {
					$control_object->add_responsive_control(
						$prefix . "btn_link_color", [
							'label' => esc_html__( "Link Color", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .btn-view-details a' => 'color: {{VALUE}};'
							],
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_responsive_control(
						$prefix . "btn_link_color", [
							'label' => esc_html__( "Link Color", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .btn-view-details a' => 'color: {{VALUE}};'
							],
						]
					);
				}
				break;

			case '13':
				if( $btn_condition ) {
					$control_object->add_responsive_control(
						$prefix . "btn_link_color_hover", [
							'label' => esc_html__( "Link Color on Hover", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}}:hover .btn-view-details a' => 'color: {{VALUE}};'
							],
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_responsive_control(
						$prefix . "btn_link_color_hover", [
							'label' => esc_html__( "Link Color on Hover", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}}:hover .btn-view-details a' => 'color: {{VALUE}};'
							],
						]
					);
				}
				break;

			case '14':
				if( $btn_condition ) {
					$control_object->add_responsive_control(
						$prefix . "btn_bg_color", [
							'label' => esc_html__( "Link Background Color", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .btn-view-details a' => 'background-color: {{VALUE}};'
							],
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_responsive_control(
						$prefix . "btn_bg_color", [
							'label' => esc_html__( "Link Background Color", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .btn-view-details a' => 'background-color: {{VALUE}};'
							],
						]
					);
				}
				break;

			case '15':
				if( $btn_condition ) {
					$control_object->add_responsive_control(
						$prefix . "btn_bg_color_hover", [
							'label' => esc_html__( "Link Background Color on Hover", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}}:hover .btn-view-details a' => 'background-color: {{VALUE}};'
							],
							'condition' => [
								$prefix . 'show_view_details_button' => array('yes')
							]
						]
					);
				} else {
					$control_object->add_responsive_control(
						$prefix . "btn_bg_color_hover", [
							'label' => esc_html__( "Link Background Color on Hover", 'seifhub-elementor-components' ),
							'type' => \Elementor\Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}}:hover .btn-view-details a' => 'background-color: {{VALUE}};'
							],
						]
					);
				}
				break;

			default:
				# code...
				break;
		}

		return $array;
	}

function seif_component_get_button_size() {
		$array = array(
			''	=>	esc_html__( 'Default', 'seifhub-elementor-components'),
			'btn-lg'	=>	esc_html__( 'Large', 'seifhub-elementor-components'),
			'btn-sm'	=>	esc_html__( 'Small', 'seifhub-elementor-components'),
			'btn-xs'	=>	esc_html__( 'Extra Small', 'seifhub-elementor-components')
		);
		return $array;
	}

function seif_component_get_button_text_color_typo_arraylist( $control_object, $serial) {
		$array = array();

		switch ( $serial ) {
			case '1':
				$control_object->start_controls_tabs('tabs_button_wrapper_style');
				$control_object->start_controls_tab(
					'button_typo_normal',
					[
						'label' => esc_html__('Normal', 'seifhub-elementor-components'),
					]
				);
				$control_object->add_control(
					'button_bg_custom_color_options',
					[
						'label' => esc_html__( 'Background Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
					]
				);
				$control_object->add_responsive_control(
					'button_bg_custom_color', [
						'label' => esc_html__( "BG Color", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .btn' => 'background-color: {{VALUE}};'
						]
					]
				);
				$control_object->add_responsive_control(
					'button_bg_theme_colored', [
						'label' => esc_html__( "BG Theme Colored", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .btn' => 'background-color: var(--theme-color{{VALUE}});'
						],
					]
				);
				$control_object->add_control(
					'button_text_color_options',
					[
						'label' => esc_html__( 'Text Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_responsive_control(
					'button_text_color', [
						'label' => esc_html__( "Button Text Color", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .btn' => 'color: {{VALUE}} !important;',
						]
					]
				);
				$control_object->add_responsive_control(
					'button_text_theme_colored', [
						'label' => esc_html__( "Button Text Theme Colored", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .btn' => 'color: var(--theme-color{{VALUE}}) !important;'
						],
					]
				);
				$control_object->add_group_control(
					\Elementor\Group_Control_Typography::get_type(), [
						'name' => 'button_text_typography',
						'label' => esc_html__( 'Button Text Typography', 'seifhub-elementor-components' ),
						'selector' => '{{WRAPPER}} .btn',
					]
				);
				$control_object->add_control(
					'button_arrow_color_options',
					[
						'label' => esc_html__( 'Arrow Color Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_responsive_control(
					'button_arrow_color', [
						'label' => esc_html__( "Arrow Color", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .btn:after' => 'color: {{VALUE}} !important;',
							'{{WRAPPER}} .btn:before' => 'color: {{VALUE}} !important;',
						]
					]
				);
				$control_object->add_responsive_control(
					'button_arrow_theme_colored', [
						'label' => esc_html__( "Arrow Theme Colored", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .btn:after' => 'color: var(--theme-color{{VALUE}}) !important;',
							'{{WRAPPER}} .btn:before' => 'color: var(--theme-color{{VALUE}}) !important;',
						],
					]
				);
				$control_object->add_control(
					'btn_border_options',
					[
						'label' => esc_html__( 'Border Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_group_control(
					\Elementor\Group_Control_Border::get_type(),
					[
						'name' => 'btn_border',
						'label' => esc_html__( 'Border', 'seifhub-elementor-components' ),
						'selector' => '{{WRAPPER}} .btn',
					]
				);
				$control_object->add_responsive_control(
					'btn_border_radius',
					[
						'label' => esc_html__( "Border Radius", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
						]
					]
				);
				$control_object->add_responsive_control(
					'btn_border_custom_color', [
						'label' => esc_html__( "Border Color", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .btn' => 'border-color: {{VALUE}} !important;'
						]
					]
				);
				$control_object->add_responsive_control(
					'btn_border_theme_colored', [
						'label' => esc_html__( "Border Theme Colored", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .btn' => 'border-color: var(--theme-color{{VALUE}}) !important;'
						],
					]
				);



				$control_object->add_control(
					'btn_boxshadow_options',
					[
						'label' => esc_html__( 'Box Shadow Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_group_control(
					\Elementor\Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'btn_boxshadow',
						'label' => esc_html__( 'Box Shadow', 'seifhub-elementor-components' ),
						'selector' => '{{WRAPPER}} .btn',
					]
				);
				$control_object->add_control(
					'btn_padding_options',
					[
						'label' => esc_html__( 'Padding Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_responsive_control(
					'btn_padding',
					[
						'label' => esc_html__( 'Button Padding', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				$control_object->add_responsive_control(
					'btn_margin',
					[
						'label' => esc_html__( 'Button Margin', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				$control_object->add_control(
					'button_icon_color_options',
					[
						'label' => esc_html__( 'Icon Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_responsive_control(
					'button_icon_color', [
						'label' => esc_html__( "Button Icon Color", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .btn:after, {{WRAPPER}} .btn:before' => 'color: {{VALUE}};'
						]
					]
				);
				$control_object->add_responsive_control(
					'button_icon_theme_colored', [
						'label' => esc_html__( "Button Icon Theme Colored", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .btn:after, {{WRAPPER}} .btn:before' => 'color: var(--theme-color{{VALUE}});'
						],
					]
				);
				$control_object->end_controls_tab();









				$control_object->start_controls_tab(
					'button_typo_hover',
					[
						'label' => esc_html__('Hover', 'seifhub-elementor-components'),
					]
				);
				$control_object->add_control(
					'button_bg_custom_color_options_hover',
					[
						'label' => esc_html__( 'Background Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
					]
				);
				$control_object->add_responsive_control(
					'button_bg_color_hover', [
						'label' => esc_html__( "BG Color (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .btn:hover,{{WRAPPER}} .btn:focus' => 'background-color: {{VALUE}};'
						]
					]
				);
				$control_object->add_responsive_control(
					'button_bg_color_hover_animated', [
						'label' => esc_html__( "BG Color (Hover Animated)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .btn:hover:before,{{WRAPPER}} .btn:focus:before' => 'background-color: {{VALUE}};'
						]
					]
				);
				$control_object->add_responsive_control(
					'button_bg_theme_colored_hover', [
						'label' => esc_html__( "BG Theme Colored (Hover Animated)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .btn:hover:before' => 'background-color: var(--theme-color{{VALUE}});',
							'{{WRAPPER}} .btn:hover:after' => 'background-color: var(--theme-color{{VALUE}});'
						],
					]
				);
				$control_object->add_responsive_control(
					'button_bg_theme_colored_hover_only', [
						'label' => esc_html__( "BG Theme Colored (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .btn:hover' => 'background-color: var(--theme-color{{VALUE}});'
						],
					]
				);
				$control_object->add_control(
					'button_text_color_options_hover',
					[
						'label' => esc_html__( 'Text Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_responsive_control(
					'button_text_color_hover', [
						'label' => esc_html__( "Button Text Color (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .btn:hover' => 'color: {{VALUE}} !important;',
							'{{WRAPPER}} .btn:focus' => 'color: {{VALUE}} !important;',
						]
					]
				);
				$control_object->add_responsive_control(
					'button_text_theme_colored_hover', [
						'label' => esc_html__( "Button Text Theme Colored (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .btn:hover' => 'color: var(--theme-color{{VALUE}}) !important;',
							'{{WRAPPER}} .btn:focus' => 'color: var(--theme-color{{VALUE}}) !important;'
						],
					]
				);
				$control_object->add_control(
					'button_arrow_color_options_hover',
					[
						'label' => esc_html__( 'Arrow Color Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_responsive_control(
					'button_arrow_color_hover', [
						'label' => esc_html__( "Arrow Color (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .btn:hover:after' => 'color: {{VALUE}} !important;',
							'{{WRAPPER}} .btn:focus:after' => 'color: {{VALUE}} !important;',
							'{{WRAPPER}} .btn:hover:before' => 'color: {{VALUE}} !important;',
							'{{WRAPPER}} .btn:focus:before' => 'color: {{VALUE}} !important;',
						]
					]
				);
				$control_object->add_responsive_control(
					'button_arrow_theme_colored_hover', [
						'label' => esc_html__( "Arrow Theme Colored (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .btn:hover:after' => 'color: var(--theme-color{{VALUE}}) !important;',
							'{{WRAPPER}} .btn:focus:after' => 'color: var(--theme-color{{VALUE}}) !important;',
							'{{WRAPPER}} .btn:hover:before' => 'color: var(--theme-color{{VALUE}}) !important;',
							'{{WRAPPER}} .btn:focus:before' => 'color: var(--theme-color{{VALUE}}) !important;',
						],
					]
				);
				$control_object->add_control(
					'btn_border_options_hover',
					[
						'label' => esc_html__( 'Border Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_responsive_control(
					'btn_border_custom_color_hover', [
						'label' => esc_html__( "Border Color (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .btn:hover' => 'border-color: {{VALUE}} !important;',
							'{{WRAPPER}} .btn:focus' => 'border-color: {{VALUE}} !important;',
						]
					]
				);
				$control_object->add_responsive_control(
					'btn_border_theme_colored_hover', [
						'label' => esc_html__( "Border Theme Colored (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .btn:hover' => 'border-color: var(--theme-color{{VALUE}}) !important;',
							'{{WRAPPER}} .btn:focus' => 'border-color: var(--theme-color{{VALUE}}) !important;'
						],
					]
				);
				$control_object->add_control(
					'btn_boxshadow_options_hover',
					[
						'label' => esc_html__( 'Box Shadow Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_group_control(
					\Elementor\Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'btn_boxshadow_hover',
						'label' => esc_html__( 'Box Shadow(Hover)', 'seifhub-elementor-components' ),
						'selector' => '{{WRAPPER}} .btn:hover',
					]
				);
				$control_object->add_control(
					'button_icon_color_options_hover',
					[
						'label' => esc_html__( 'Icon Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_responsive_control(
					'button_icon_color_hover', [
						'label' => esc_html__( "Button Icon Color (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .btn:hover:after, {{WRAPPER}} .btn:hover:before' => 'color: {{VALUE}};'
						]
					]
				);
				$control_object->add_responsive_control(
					'button_icon_theme_colored_hover', [
						'label' => esc_html__( "Button Icon Theme Colored (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .btn:hover:after, {{WRAPPER}} .btn:hover:before' => 'color: var(--theme-color{{VALUE}});'
						],
					]
				);
				$control_object->end_controls_tab();




				$control_object->start_controls_tab(
					'button_typo_wrapper_hover',
					[
						'label' => esc_html__('Wrapper Hover', 'seifhub-elementor-components'),
					]
				);
				$control_object->add_control(
					'button_bg_custom_color_options_wrapper_hover',
					[
						'label' => esc_html__( 'Background Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
					]
				);
				$control_object->add_responsive_control(
					'button_bg_color_wrapper_hover', [
						'label' => esc_html__( "BG Color (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}}:hover .btn' => 'background-color: {{VALUE}};'
						]
					]
				);
				$control_object->add_responsive_control(
					'button_bg_theme_colored_wrapper_hover', [
						'label' => esc_html__( "BG Theme Colored (Hover Animated)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}}:hover .btn:before' => 'background-color: var(--theme-color{{VALUE}});',
							'{{WRAPPER}}:hover .btn:after' => 'background-color: var(--theme-color{{VALUE}});'
						],
					]
				);
				$control_object->add_responsive_control(
					'button_bg_theme_colored_hoverwrapper__only', [
						'label' => esc_html__( "BG Theme Colored (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}}:hover .btn' => 'background-color: var(--theme-color{{VALUE}});'
						],
					]
				);
				$control_object->add_control(
					'button_text_color_options_wrapper_hover',
					[
						'label' => esc_html__( 'Text Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_responsive_control(
					'button_text_color_wrapper_hover', [
						'label' => esc_html__( "Button Text Color (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}}:hover .btn' => 'color: {{VALUE}} !important;',
						]
					]
				);
				$control_object->add_responsive_control(
					'button_text_theme_colored_wrapper_hover', [
						'label' => esc_html__( "Button Text Theme Colored (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}}:hover .btn' => 'color: var(--theme-color{{VALUE}}) !important;',
						],
					]
				);
				$control_object->add_control(
					'button_arrow_color_options_wrapper_hover',
					[
						'label' => esc_html__( 'Arrow Color Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_responsive_control(
					'button_arrow_color_wrapper_hover', [
						'label' => esc_html__( "Arrow Color (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}}:hover .btn:after' => 'color: {{VALUE}} !important;',
							'{{WRAPPER}}:hover .btn:before' => 'color: {{VALUE}} !important;',
						]
					]
				);
				$control_object->add_responsive_control(
					'button_arrow_theme_colored_wrapper_hover', [
						'label' => esc_html__( "Arrow Theme Colored (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}}:hover .btn:after' => 'color: var(--theme-color{{VALUE}}) !important;',
							'{{WRAPPER}}:hover .btn:before' => 'color: var(--theme-color{{VALUE}}) !important;',
						],
					]
				);
				$control_object->add_control(
					'btn_border_options_wrapper_hover',
					[
						'label' => esc_html__( 'Border Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_responsive_control(
					'btn_border_custom_color_wrapper_hover', [
						'label' => esc_html__( "Border Color (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}}:hover .btn' => 'border-color: {{VALUE}} !important;',
						]
					]
				);
				$control_object->add_responsive_control(
					'btn_border_theme_colored_wrapper_hover', [
						'label' => esc_html__( "Border Theme Colored (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}}:hover .btn' => 'border-color: var(--theme-color{{VALUE}}) !important;',
						],
					]
				);
				$control_object->add_control(
					'btn_boxshadow_options_wrapper_hover',
					[
						'label' => esc_html__( 'Box Shadow Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_group_control(
					\Elementor\Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'btn_boxshadow_wrapper_hover',
						'label' => esc_html__( 'Box Shadow(Hover)', 'seifhub-elementor-components' ),
						'selector' => '{{WRAPPER}}:hover .btn',
					]
				);
				$control_object->add_control(
					'button_icon_color_options_wrapper_hover',
					[
						'label' => esc_html__( 'Icon Options', 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);
				$control_object->add_responsive_control(
					'button_icon_color_wrapper_hover', [
						'label' => esc_html__( "Button Icon Color (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}}:hover .btn:after, {{WRAPPER}}:hover .btn:before' => 'color: {{VALUE}};'
						]
					]
				);
				$control_object->add_responsive_control(
					'button_icon_theme_colored_wrapper_hover', [
						'label' => esc_html__( "Button Icon Theme Colored (Hover)", 'seifhub-elementor-components' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => seif_component_theme_color_list(),
						'default' => '',
						'selectors' => [
							'{{WRAPPER}}:hover .btn:after, {{WRAPPER}}:hover .btn:before' => 'color: var(--theme-color{{VALUE}});'
						],
					]
				);
				$control_object->end_controls_tab();
				$control_object->end_controls_tabs();
				break;
			default:
				# code...
				break;
		}

		return $array;
	}

function seif_component_get_inline_attributes( $values, $attribute, $glue = '' ) {
		if( $values != '' ) {
			if( is_array( $values ) && count( $values ) ) {
				$properties = implode( $glue, $values );
			} elseif( $values !== '' ) {
				$properties = $values;
			}

			return $attribute . '="' . esc_attr($properties) . '"';
		}
		return '';
	}

function seif_component_get_swiper_slider_arraylist( $control_object, $serial, $prefix = '', $dependency = array() ) {
		$array = array();

		//Swiper Slider Options
		$control_object->start_controls_section(
			'carousel_options', [
				'label' => esc_html__( 'Carousel/Slider Options', 'seifhub-elementor-components' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => $dependency
			]
		);
		$control_object->add_responsive_control(
			'list_margin',
			[
				'label' => esc_html__( 'Item Margin', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .swiper-wrapper .swiper-slide > div' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$control_object->add_control(
			$prefix . "xxl_swiper_items", [
				'label' => esc_html__( "Items Extra Extra Large (Over 1400px)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'1'  =>  '1',
					'2'  =>  '2',
					'3'  =>  '3',
					'4'  =>  '4',
					'5'  =>  '5',
					'6'  =>  '6',
				],
				'default' => '4',
				'condition' => $dependency
			]
		);
		$control_object->add_control(
			$prefix . "swiper_items", [
				'label' => esc_html__( "Items Extra Large(Over 1200px)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'1'  =>  '1',
					'2'  =>  '2',
					'3'  =>  '3',
					'4'  =>  '4',
					'5'  =>  '5',
					'6'  =>  '6',
				],
				'default' => '4',
				'condition' => $dependency
			]
		);
		$control_object->add_control(
			$prefix . "lg_swiper_items", [
				'label' => esc_html__( "Items Large (Between 992px to 1200px)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'1'  =>  '1',
					'2'  =>  '2',
					'3'  =>  '3',
					'4'  =>  '4',
					'5'  =>  '5',
					'6'  =>  '6',
				],
				'default' => '3',
				'condition' => $dependency
			]
		);
		$control_object->add_control(
			$prefix . "md_swiper_items", [
				'label' => esc_html__( "Items Medium (Over 768px)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'1'  =>  '1',
					'2'  =>  '2',
					'3'  =>  '3',
					'4'  =>  '4',
					'5'  =>  '5',
					'6'  =>  '6',
				],
				'default' => '2',
				'condition' => $dependency
			]
		);
		$control_object->add_control(
			$prefix . "sm_swiper_items", [
				'label' => esc_html__( "Items Small (Over 576px)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'1'  =>  '1',
					'2'  =>  '2',
					'3'  =>  '3',
					'4'  =>  '4',
					'5'  =>  '5',
					'6'  =>  '6',
				],
				'default' => '1',
				'condition' => $dependency
			]
		);
		$control_object->add_control(
			$prefix . "xs_swiper_items", [
				'label' => esc_html__( "Items Extra Small (Below 576px)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'1'  =>  '1',
					'2'  =>  '2',
					'3'  =>  '3',
					'4'  =>  '4',
					'5'  =>  '5',
					'6'  =>  '6',
				],
				'default' => '1',
				'condition' => $dependency
			]
		);


		$control_object->add_control(
			$prefix . "arrow", [
				'label' => esc_html__( "Show Arrow", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => $dependency
			]
		);
		$control_object->add_control(
			$prefix . "bullets", [
				'label' => esc_html__( "Show Pagination/Bullets", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => $dependency
			]
		);
		$control_object->add_control(
			$prefix . 'pagination_type', [
				'label' => esc_html__( "Pagination/Bullets Type", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'bullets' => esc_html__( 'Bullets', 'seifhub-elementor-components' ),
					'fraction' => esc_html__( 'Fraction', 'seifhub-elementor-components' ),
					'progressbar' => esc_html__( 'Progressbar', 'seifhub-elementor-components' ),
				],
				'default' => 'bullets',
				'condition' => [
					$prefix . "bullets" => array('yes')
				]
			]
		);

		$control_object->add_control(
			$prefix . "autoplay", [
				'label' => esc_html__( "Autoplay", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => $dependency
			]
		);
		$control_object->add_control(
			$prefix . 'delay',
			[
				'label' => esc_html__( 'Delay (ms)', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 3000,
				'condition' => [
						'autoplay' => 'yes',
				],
			]
		);
		$control_object->add_control(
			$prefix . "loop", [
				'label' => esc_html__( "Infinite Loop", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => $dependency
			]
		);
		$control_object->add_control(
			$prefix . "centered", [
				'label' => esc_html__( "Enabled Centered", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => $dependency
			]
		);
		$control_object->add_control(
			$prefix . 'space',
			[
				'label' => esc_html__( 'Space (px)', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 30,
				],
				'condition' => $dependency
			]
		);


		$control_object->add_control(
			$prefix . 'speed',
			[
				'label' => esc_html__( 'Animation Speed (ms)', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 300,
				'condition' => $dependency
			]
		);
		$control_object->add_control(
			$prefix . "freemod", [
				'label' => esc_html__( "Free Mode", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'no',
				'condition' => $dependency
			]
		);
		$control_object->add_control(
			$prefix . "reversedir", [
				'label' => esc_html__( "Reverse Direction", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'no',
				'condition' => $dependency
			]
		);
		$control_object->end_controls_section();

		return $array;
	}

function seif_component_get_swiper_slider_dots_arraylist( $control_object, $serial, $prefix = '', $dependency = array() ) {
		$array = array();

		$control_object->start_controls_section(
			'swiper_dots_options', [
				'label' => esc_html__( 'Carousel/Slider Dots Styling', 'seifhub-elementor-components' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => $dependency
			]
		);
		$control_object->add_responsive_control(
			$prefix . "dots_display_visibility", [
				'label' => esc_html__( "Visibility in Responsive (Show/Hide)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'block' => [
						'title' => __( 'Show', 'seifhub-elementor-components' ),
						'icon' => 'eicon-check',
					],
					'none' => [
						'title' => __( 'Hide', 'seifhub-elementor-components' ),
						'icon' => 'eicon-ban',
					],
				],
				'default' => 'block',
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination' => 'display: {{VALUE}};'
				],
			]
		);
		$control_object->add_control(
			$prefix . 'swiper_dots_pos_options',
			[
				'label' => esc_html__( 'Bullets/Dots Position', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$control_object->add_control(
			$prefix . 'swiper_dots_pos_center', [
				'label' => esc_html__( "Dots Position Horizontal Center", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes',
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination' => 'left: 50%; bottom: -75px; transform: translate(-50%, -50%);'
				],
			]
		);
		$control_object->add_responsive_control(
			'swiper_dots_pos_vertical',
			[
				'label' => __( 'Vertical Orientation', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'top' => [
						'title' => __( 'Top', 'seifhub-elementor-components' ),
						'icon' => 'eicon-v-align-top',
					],
					'bottom' => [
						'title' => __( 'Bottom', 'seifhub-elementor-components' ),
						'icon' => 'eicon-v-align-bottom',
					],
				],
				'default' => 'top',
				'toggle' => false,
			]
		);
		$control_object->add_responsive_control(
			$prefix . 'swiper_dots_pos_offset_y',
			[
				'label' => __( 'Offset', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px' ],
				'range' => [
					'px' => [
						'min' => -1300,
						'max' => 1300,
						'step' => 1,
					],
					'%' => [
						'min' => -250,
						'max' => 250,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination' =>
							'{{swiper_dots_pos_vertical.VALUE}}: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$control_object->add_responsive_control(
			$prefix . 'swiper_dots_pos_horizontal',
			[
				'label' => __( 'Horizontal Orientation', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => is_rtl() ? 'right' : 'left',
				'options' => [
					'left' => [
						'title' => __( 'Left', 'seifhub-elementor-components' ),
						'icon' => 'eicon-h-align-left',
					],
					'right' => [
						'title' => __( 'Right', 'seifhub-elementor-components' ),
						'icon' => 'eicon-h-align-right',
					],
				],
				'toggle' => false,
			]
		);
		$control_object->add_responsive_control(
			$prefix . 'swiper_dots_pos_offset_x',
			[
				'label' => __( 'Offset', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px' ],
				'range' => [
					'px' => [
						'min' => -1300,
						'max' => 1300,
						'step' => 1,
					],
					'%' => [
						'min' => -250,
						'max' => 250,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination' =>
							'{{swiper_dots_pos_horizontal.VALUE}}: {{SIZE}}{{UNIT}};',
				],
			]
		);




		$control_object->start_controls_tabs('tabs_swiper_dots_styling');
		$control_object->start_controls_tab(
			'tabs_swiper_dots_styling_normal',
			[
				'label' => esc_html__('Normal', 'seifhub-elementor-components'),
			]
		);
		$control_object->add_control(
			$prefix . 'swiper_dots_bg_options',
			[
				'label' => esc_html__( 'Bullets/Dots BG Options', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$control_object->add_responsive_control(
			$prefix . 'swiper_dots_bg_color',
			[
				'label' => esc_html__( "BG Color", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet' => 'background-color: {{VALUE}};'
				],
			]
		);
		$control_object->add_responsive_control(
			$prefix . 'swiper_dots_bg_theme_color',
			[
				'label' => esc_html__( "BG Theme Color", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => seif_component_theme_color_list(),
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet' => 'background-color: var(--theme-color{{VALUE}});'
				],
			]
		);
		$control_object->add_control(
			$prefix . 'swiper_dots_size_options',
			[
				'label' => esc_html__( 'Bullet Size', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$control_object->add_responsive_control(
			$prefix . 'swiper_dots_width',
			[
				'label' => esc_html__( 'Width', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$control_object->add_responsive_control(
			$prefix . 'swiper_dots_height',
			[
				'label' => esc_html__( 'Height', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$control_object->add_responsive_control(
			'swiper_dots_border_radius',
			[
				'label' => esc_html__( "Border Radius", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
				]
			]
		);
		$control_object->end_controls_tab();

		$control_object->start_controls_tab(
			'tabs_swiper_dots_styling_hover',
			[
				'label' => esc_html__('Active', 'seifhub-elementor-components'),
			]
		);
		$control_object->add_responsive_control(
			$prefix . 'swiper_dots_bg_color_hover',
			[
				'label' => esc_html__( "BG Color (Active)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet:hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'background-color: {{VALUE}};'
				],
			]
		);
		$control_object->add_responsive_control(
			$prefix . 'swiper_dots_bg_theme_color_hover',
			[
				'label' => esc_html__( "BG Theme Color (Active)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => seif_component_theme_color_list(),
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet:hover' => 'background-color: var(--theme-color{{VALUE}});',
					'{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'background-color: var(--theme-color{{VALUE}});'
				],
			]
		);
		$control_object->add_responsive_control(
			$prefix . 'swiper_dots_width_active',
			[
				'label' => esc_html__( 'Width (Active)', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet:hover' => 'width: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$control_object->add_responsive_control(
			$prefix . 'swiper_dots_height_active',
			[
				'label' => esc_html__( 'Height (Active)', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet:hover' => 'height: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$control_object->end_controls_tab();
		$control_object->end_controls_tabs();

		$control_object->end_controls_section();

		return $array;
	}

function seif_component_get_swiper_slider_nav_arraylist( $control_object, $serial, $prefix = '', $dependency = array() ) {
		$array = array();
		$control_object->start_controls_section(
			'swiper_arrow_styling', [
				'label' => esc_html__( 'Carousel/Slider Arrow Styling', 'seifhub-elementor-components' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => $dependency
			]
		);
		$control_object->add_responsive_control(
			"swiper_arrow_display_visibility", [
				'label' => esc_html__( "Visibility (Show/Hide)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'flex' => [
						'title' => __( 'Show', 'seifhub-elementor-components' ),
						'icon' => 'eicon-check',
					],
					'none' => [
						'title' => __( 'Hide', 'seifhub-elementor-components' ),
						'icon' => 'eicon-ban',
					],
				],
				'default' => 'flex',
				'selectors' => [
					'{{WRAPPER}} .tm-swiper-button-wrap' => 'display: {{VALUE}};'
				],
			]
		);

		$control_object->start_controls_tabs('tabs_swiper_arrow_styling');
		$control_object->start_controls_tab(
			'tabs_swiper_arrow_styling_normal',
			[
				'label' => esc_html__('Normal', 'seifhub-elementor-components'),
			]
		);
		$control_object->add_control(
			'swiper_arrow_bg_options',
			[
				'label' => esc_html__( 'Arrow BG Options', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$control_object->add_responsive_control(
			'swiper_arrow_bg_color',
			[
				'label' => esc_html__( "Arrow BG Color", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow' => 'background-color: {{VALUE}};'
				],
			]
		);

		$control_object->add_responsive_control(
			'swiper_arrow_bg_theme_color',
			[
				'label' => esc_html__( "Arrow BG Theme Color", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => seif_component_theme_color_list(),
				'selectors' => [
					'{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow' => 'background-color: var(--theme-color{{VALUE}});'
				],
			]
		);

		$control_object->add_control(
			'swiper_arrow_text_options',
			[
				'label' => esc_html__( 'Arrow Text Options', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$control_object->add_responsive_control(
			'swiper_arrow_text_color',
			[
				'label' => esc_html__( "Arrow Text Color", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow i' => 'color: {{VALUE}};'
				],
			]
		);
		$control_object->add_responsive_control(
			'swiper_arrow_text_theme_color',
			[
				'label' => esc_html__( "Arrow Text Theme Color", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => seif_component_theme_color_list(),
				'selectors' => [
					'{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow i' => 'color: var(--theme-color{{VALUE}});'
				],
			]
		);


		$control_object->add_control(
			'swiper_arrow_size_options',
			[
				'label' => esc_html__( 'Arrow Size & Border', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$control_object->add_responsive_control(
			'swiper_arrow_widthheight',
			[
				'label' => esc_html__( 'Dimension (Width and Height)', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 20,
						'max' => 120,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$control_object->add_responsive_control(
			'swiper_arrow_border_radius',
			[
				'label' => esc_html__( "Border Radius", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
				]
			]
		);
		$control_object->add_control(
			'swiper_arrow_border_title',
			[
				'label' => esc_html__( 'Border', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$control_object->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'swiper_arrow_border',
				'label' => esc_html__( 'Border', 'seifhub-elementor-components' ),
				'selector' => '{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow',
			]
		);

		$control_object->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'swiper_arrow_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'seifhub-elementor-components' ),
				'separator' => 'before',
				'selector' => '{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow',
			]
		);

		$control_object->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'swiper_arrow_typography',
				'label' => esc_html__( 'Typography', 'seifhub-elementor-components' ),
				'selector' => '{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow i',
			]
		);

		$control_object->add_control(
			'swiper_arrow_opacity_options',
			[
				'label' => esc_html__( 'Arrow Opacity', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$control_object->add_responsive_control(
			'swiper_arrow_opacity',
			[
				'label' => esc_html__( 'Opacity', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 1,
						'min' => 0.10,
						'step' => 0.01,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow' => 'opacity: {{SIZE}};'
				]
			]
		);
		$control_object->end_controls_tab();

		$control_object->start_controls_tab(
			'tabs_swiper_arrow_styling_hover',
			[
				'label' => esc_html__('Hover', 'seifhub-elementor-components'),
			]
		);
		$control_object->add_responsive_control(
			'swiper_arrow_bg_color_hover',
			[
				'label' => esc_html__( "Arrow BG Color (Hover)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow:hover' => 'background-color: {{VALUE}};'
				],
			]
		);

		$control_object->add_responsive_control(
			'swiper_arrow_bg_theme_color_hover',
			[
				'label' => esc_html__( "Arrow BG Theme Color (Hover)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => seif_component_theme_color_list(),
				'selectors' => [
					'{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow:hover' => 'background-color: var(--theme-color{{VALUE}});'
				],
			]
		);
		$control_object->add_responsive_control(
			'swiper_arrow_text_color_hover',
			[
				'label' => esc_html__( "Arrow Text Color (Hover)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow:hover i' => 'color: {{VALUE}};'
				],
			]
		);
		$control_object->add_responsive_control(
			'swiper_arrow_text_theme_color_hover',
			[
				'label' => esc_html__( "Arrow Text Theme Color (Hover)", 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => seif_component_theme_color_list(),
				'selectors' => [
					'{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow:hover i' => 'color: var(--theme-color{{VALUE}});'
				],
			]
		);
		$control_object->add_control(
			'swiper_arrow_border_hover',
			[
				'label' => esc_html__( 'Border (Hover)', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$control_object->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'swiper_arrow_border_hover',
				'label' => esc_html__( 'Border', 'seifhub-elementor-components' ),
				'selector' => '{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow:hover',
			]
		);
		$control_object->add_responsive_control(
			'swiper_arrow_opacity_hover',
			[
				'label' => esc_html__( 'Opacity (hover)', 'seifhub-elementor-components' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 1,
						'min' => 0.10,
						'step' => 0.01,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .tm-swiper-button-wrap .tm-swiper-arrow:hover' => 'opacity: {{SIZE}};'
				]
			]
		);
		$control_object->end_controls_tab();
		$control_object->end_controls_tabs();
		$control_object->end_controls_section();
		return $array;
	}

function seif_component_get_viewdetails_button_arraylist( $control_object, $serial, $btn_text = '', $prefix = '', $std = 'true' ) {
		$array = array();
		if( $btn_text == '' ) $btn_text = esc_html__( 'Read More', 'seifhub-elementor-components' );

		switch ( $serial ) {
			case '1':
				$control_object->add_control(
					$prefix . "show_view_details_button", [
						'label' => sprintf( esc_html__( "Show %s Button", 'seifhub-elementor-components' ), $btn_text ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'default' => 'no',
					]
				);
				break;

			case '2':
				$control_object->add_control(
					$prefix . "view_details_button_text", [
						'label' => sprintf( esc_html__( "%s Button Text", 'seifhub-elementor-components' ), $btn_text ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html( $btn_text ),
						'condition' => [
							$prefix . 'show_view_details_button' => array('yes')
						]
					]
				);
				break;

			default:
				# code...
				break;
		}
	}

function seif_component_heading_tag_list() {
		$heading_tag_list = array(
			''  	=>  '',
			'h1' => 'h1',
			'h2' => 'h2',
			'h3' => 'h3',
			'h4' => 'h4',
			'h5' => 'h5',
			'h6' => 'h6',
			'p'  => 'p',
			'a'  => 'a',
			'span'  => 'span',
			'div'  => 'div',
		);
		return $heading_tag_list;
	}

function seif_component_isotope_gutter_list_elementor() {
		$gutter_list = array(
			'gutter' 		=>  esc_html__( 'Default', 'seifhub-elementor-components' ),
			'gutter-0'		=>  '0',
			'gutter-2'  	=>  '2px',
			'gutter-5'  	=>  '5px',
			'gutter-10'  	=>  '10px',
			'gutter-15'  	=>  '15px',
			'gutter-20'  	=>  '20px',
			'gutter-30'  	=>  '30px',
			'gutter-40'  	=>  '40px',
			'gutter-50'  	=>  '50px',
			'gutter-60'  	=>  '60px',
		);
		return $gutter_list;
	}

function seif_component_prepare_button_classes_from_params( $params = array(), $prefix = '' ) {
		$btn_classes = array();

		$btn_classes[] = 'btn';
		if( filter_var( $params[$prefix . 'btn_outlined'], FILTER_VALIDATE_BOOLEAN ) == true ) {
			$oldstr = $params[$prefix . 'btn_design_style'];
			$newstr = substr_replace($oldstr, 'outline-', 4, 0);
			$btn_classes[] = $newstr;
			$btn_classes[] = 'btn-outline';
		} else if( filter_var( $params[$prefix . 'btn_gradient_effect'], FILTER_VALIDATE_BOOLEAN ) == true ) {
			$oldstr = $params[$prefix . 'btn_design_style'];
			$newstr = substr_replace($oldstr, 'gradient-', 4, 0);
			$btn_classes[] = $newstr;
			$btn_classes[] = 'btn-outline';
		} else if ( $params[$prefix . 'btn_design_style'] ) {
			$btn_classes[] = $params[$prefix . 'btn_design_style'];
		}

		if( $params[$prefix . 'button_size'] != "" ) {
			$btn_classes[] = $params[$prefix . 'button_size'];
		}
		if( filter_var( $params[$prefix . 'btn_round'], FILTER_VALIDATE_BOOLEAN ) == true ) {
			$btn_classes[] = 'btn-round';
		}
		if( filter_var( $params[$prefix . 'btn_flat'], FILTER_VALIDATE_BOOLEAN ) == true ) {
			$btn_classes[] = 'btn-flat';
		}
		if( isset($params[$prefix . 'btn_block']) && filter_var( $params[$prefix . 'btn_block'], FILTER_VALIDATE_BOOLEAN ) == true ) {
			$btn_classes[] = 'btn-block';
		}
		if( filter_var( $params[$prefix . 'btn_threed_effect'], FILTER_VALIDATE_BOOLEAN ) == true ) {
			$btn_classes[] = 'btn-3d';
		}
		if( $params[$prefix . 'button_hover_animation_effect'] != "" ) {
			$btn_classes[] = $params[$prefix . 'button_hover_animation_effect'];
		}
		if( $params[$prefix . 'btn_class'] != "" ) {
			$btn_classes[] = $params[$prefix . 'btn_class'];
		}

		return $btn_classes;
	}

function seif_component_swiper_data_params( $params = array(), $prefix = '' ) {
		$swiper_data = array();


		if( isset($params[$prefix . 'swiper_items']) && $params[$prefix . 'swiper_items'] > -1 ) {
			$swiper_data[] = 'data-items="' . esc_attr( $params[$prefix . 'swiper_items'] ) . '"';
		}
		if( isset($params[$prefix . 'space']['size']) && $params[$prefix . 'space']['size'] > -1 ) {
			$swiper_data[] = 'data-space="' . esc_attr( $params[$prefix . 'space']['size'] ) . '"';
		}
		if( isset($params[$prefix . 'autoplay']) && filter_var( $params[$prefix . 'autoplay'], FILTER_VALIDATE_BOOLEAN ) == true ) {
			$swiper_data[] = 'data-autoplay="true"';
		} else {
			$swiper_data[] = 'data-autoplay="false"';
		}
		if( isset($params[$prefix . 'loop']) && filter_var( $params[$prefix . 'loop'], FILTER_VALIDATE_BOOLEAN ) == true ) {
			$swiper_data[] = 'data-loop="true"';
		} else {
			$swiper_data[] = 'data-loop="false"';
		}
		if( isset($params[$prefix . 'centered']) && filter_var( $params[$prefix . 'centered'], FILTER_VALIDATE_BOOLEAN ) == true ) {
			$swiper_data[] = 'data-centered="true"';
		} else {
			$swiper_data[] = 'data-centered="false"';
		}
		if( isset($params[$prefix . 'arrow']) && filter_var( $params[$prefix . 'arrow'], FILTER_VALIDATE_BOOLEAN ) == true ) {
			$swiper_data[] = 'data-arrow="true"';
		} else {
			$swiper_data[] = 'data-arrow="false"';
		}
		if( isset($params[$prefix . 'bullets']) && filter_var( $params[$prefix . 'bullets'], FILTER_VALIDATE_BOOLEAN ) == true ) {
			$swiper_data[] = 'data-bullets="true"';
		} else {
			$swiper_data[] = 'data-bullets="false"';
		}

		if( isset($params[$prefix . 'pagination_type']) && $params[$prefix . 'pagination_type'] > -1 ) {
			$swiper_data[] = 'data-pagination-type="' . esc_attr( $params[$prefix . 'pagination_type'] ) . '"';
		}


		if( isset($params[$prefix . 'xxl_swiper_items']) && $params[$prefix . 'xxl_swiper_items'] > -1 ) {
			$swiper_data[] = 'data-xxl-items="' . esc_attr( $params[$prefix . 'xxl_swiper_items'] ) . '"';
		}
		if( isset($params[$prefix . 'lg_swiper_items']) && $params[$prefix . 'lg_swiper_items'] > -1 ) {
			$swiper_data[] = 'data-lg-items="' . esc_attr( $params[$prefix . 'lg_swiper_items'] ) . '"';
		}
		if( isset($params[$prefix . 'md_swiper_items']) && $params[$prefix . 'md_swiper_items'] > -1 ) {
			$swiper_data[] = 'data-md-items="' . esc_attr( $params[$prefix . 'md_swiper_items'] ) . '"';
		}
		if( isset($params[$prefix . 'sm_swiper_items']) && $params[$prefix . 'sm_swiper_items'] > -1 ) {
			$swiper_data[] = 'data-sm-items="' . esc_attr( $params[$prefix . 'sm_swiper_items'] ) . '"';
		}
		if( isset($params[$prefix . 'xs_swiper_items']) && $params[$prefix . 'xs_swiper_items'] > -1 ) {
			$swiper_data[] = 'data-xs-items="' . esc_attr( $params[$prefix . 'xs_swiper_items'] ) . '"';
		}

		if( isset($params[$prefix . 'delay']) && $params[$prefix . 'delay'] > -1 ) {
			$swiper_data[] = 'data-delay="' . esc_attr( $params[$prefix . 'delay'] ) . '"';
		}
		if( isset($params[$prefix . 'speed']) && $params[$prefix . 'speed'] > -1 ) {
			$swiper_data[] = 'data-speed="' . esc_attr( $params[$prefix . 'speed'] ) . '"';
		}

		if( isset($params[$prefix . 'freemod']) && filter_var( $params[$prefix . 'freemod'], FILTER_VALIDATE_BOOLEAN ) == true ) {
			$swiper_data[] = 'data-freemod="true"';
		} else {
			$swiper_data[] = 'data-freemod="false"';
		}
		if( isset($params[$prefix . 'reversedir']) && filter_var( $params[$prefix . 'reversedir'], FILTER_VALIDATE_BOOLEAN ) == true ) {
			$swiper_data[] = 'data-reversedir="true"';
		} else {
			$swiper_data[] = 'data-reversedir="false"';
		}

		return $swiper_data;
	}

function seif_component_text_align_choose() {
		$alignment_list = array(
			'left' => [
				'title' => esc_html__('Left', 'seifhub-elementor-components'),
				'icon' => 'eicon-h-align-left',
			],
			'center' => [
				'title' => esc_html__('Center', 'seifhub-elementor-components'),
				'icon' => 'eicon-h-align-center',
			],
			'right' => [
				'title' => esc_html__('Right', 'seifhub-elementor-components'),
				'icon' => 'eicon-h-align-right',
			],
		);
		return $alignment_list;
	}

function seif_component_theme_color_list() {
		$theme_color_list = array(
			'' => esc_html__( 'No', 'seifhub-elementor-components' ),
			'1' => esc_html__( 'Theme Color 1', 'seifhub-elementor-components' ),
			'2' => esc_html__( 'Theme Color 2', 'seifhub-elementor-components' ),
			'3' => esc_html__( 'Theme Color 3', 'seifhub-elementor-components' ),
			'4' => esc_html__( 'Theme Color 4', 'seifhub-elementor-components' )
		);
		return $theme_color_list;
	}

