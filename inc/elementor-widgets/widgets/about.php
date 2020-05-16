<?php
namespace Sasuelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Utils;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;  
}


/**
 *
 * Sasu elementor about us section widget.
 *
 * @since 1.0
 */
class Sasu_About_Us extends Widget_Base {

	public function get_name() {
		return 'sasu-about-us';
	}

	public function get_title() {
		return __( 'About Us', 'sasu' );
	}

	public function get_icon() {
		return 'eicon-thumbnails-half';
	}

	public function get_categories() {
		return [ 'sasu-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  content ------------------------------
        $this->start_controls_section(
            'about_section',
            [
                'label' => __( 'About Us Section Content', 'sasu' ),
            ]
        );
        $this->add_control(
            'about_content',
            [
                'label'         => esc_html__( 'About Us Content', 'sasu' ),
                'type'          => Controls_Manager::WYSIWYG,
                'default'       => __( '<h2>Right people at the Right time.</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>', 'sasu' )
            ]
        );
        $this->add_control(
            'about_btnlabel1',
            [
                'label'         => esc_html__( 'Button1 Label', 'sasu' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Get Started', 'sasu' )
            ]
        );
        $this->add_control(
            'about_btnurl1',
            [
                'label'         => esc_html__( 'Button1 Url', 'sasu' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );
        $this->add_control(
            'about_btnlabel2',
            [
                'label'         => esc_html__( 'Button2 Label', 'sasu' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Sign up free', 'sasu' )
            ]
        );
        $this->add_control(
            'about_btnurl2',
            [
                'label'         => esc_html__( 'Button2 Url', 'sasu' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );
        $this->add_control(
            'img_position',
            [
                'label'         => esc_html__( 'Change Image Position', 'sasu' ),
                'type'          => Controls_Manager::SWITCHER,
                'label_block'   => false,
				'label_on'      => 'LEFT',
				'label_off'     => 'RIGHT',
                'default'       => 'no',
                'options'       => [
                    'no'      => 'LEFT',
                    'yes'     => 'RIGHT'
                ]
            ]
        );

        $this->add_control(
			'right_img',
			[
				'label'         => esc_html__( 'Right Image', 'sasu' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
        );

        $this->end_controls_section(); // End content


        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */

        // Heading Style ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'About Us Heading Style', 'sasu' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Big  Title Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text h2' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'sub_title_color', [
                'label'     => __( 'Text Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text p' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        $this->end_controls_section();


        
        // Button Style ==============================
        $this->start_controls_section(
            'btn_styles', [
                'label' => __( 'Button Styles', 'sasu' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'btnn1_txt_color', [
                'label' => __( 'Button1 Text Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text .btn_1' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'btnn1_bg_color', [
                'label' => __( 'Button1 BG Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text .btn_1' => 'background: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'btnn2_txt_color', [
                'label' => __( 'Button2 Text Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text .btn_2' => 'color: {{VALUE}}; border-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'btnn2_bg_color', [
                'label' => __( 'Button2 BG Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text .btn_2' => 'background: {{VALUE}};',
                ],
            ]
        ); 

        $this->add_control(
            'btn_hvr_separator',
            [
                'label'     => __( 'Hover Styles', 'sasu' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
            'btnn1_hvr_txt_color', [
                'label' => __( 'Button1 Hover Text Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text .btn_1:hover' => 'color: {{VALUE}}!important',
                ],
            ]
        ); 
        $this->add_control(
            'btnn1_hvr_bg_color', [
                'label' => __( 'Button1 Hover BG Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text .btn_1:hover' => 'background: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'btnn2_hvr_txt_color', [
                'label' => __( 'Button2 Hover Text Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text .btn_2:hover' => 'color: {{VALUE}}!important; border-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'btnn2_hvr_bg_color', [
                'label' => __( 'Button2 Hover BG Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text .btn_2:hover' => 'background: {{VALUE}};',
                ],
            ]
        ); 
        $this->end_controls_section();

	}

	protected function render() {
        $settings = $this->get_settings();
        $ban_content = !empty( $settings['about_content'] ) ? $settings['about_content'] : '';
        $button_label1 = !empty( $settings['about_btnlabel1'] ) ? $settings['about_btnlabel1'] : '';
        $button_url1 = !empty( $settings['about_btnurl1']['url'] ) ? $settings['about_btnurl1']['url'] : '';
        $button_label2 = !empty( $settings['about_btnlabel2'] ) ? $settings['about_btnlabel2'] : '';
        $button_url2 = !empty( $settings['about_btnurl2']['url'] ) ? $settings['about_btnurl2']['url'] : '';
        $right_img   = !empty( $settings['right_img']['id'] ) ? wp_get_attachment_image( $settings['right_img']['id'], 'sasu_about_img_555x422', false, array( 'alt' => 'about right image' ) ) : '';
        $img_position = !empty( $settings['img_position'] ) ? $settings['img_position'] : '';

        $left_sharp  = SASU_DIR_ASSETS_URI . 'img/left_sharp.png';
        $about_shape = SASU_DIR_ASSETS_URI . 'img/about_shape.png';
        $shape_16    = SASU_DIR_ANIMATE_ICON_IMG_URI . 'shape-16.png';
        $shape_1     = SASU_DIR_ANIMATE_ICON_IMG_URI . 'shape-1.png';
    ?>

    <!-- about_us part start-->
    <section class="about_us section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <?php if ( $img_position == 'yes' ) { ?>
                        <div class="col-md-6 col-lg-6">
                            <div class="learning_img">
                                <?php
                                    if( $right_img ){
                                        echo wp_kses_post( $right_img );
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                ?>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <?php
                            //Content ==============
                            if( $ban_content ){
                                echo wp_kses_post( wpautop( $ban_content ) );
                            }
                            // Buttons =============
                            if( $button_label1 ){
                                echo '<a class="btn_1" href="'. esc_url( $button_url1 ) .'">'. esc_html( $button_label1 ) .'</a>';
                            }
                            if( $button_label2 ){
                                echo '<a class="btn_2" href="'. esc_url( $button_url2 ) .'">'. esc_html( $button_label2 ) .'</a>';
                            }
                        ?>
                    </div>
                </div>
                
                <?php if ( $img_position != 'yes' ) { ?>
                        <div class="col-md-6 col-lg-6">
                            <div class="learning_img">
                                <?php
                                    if( $right_img ){
                                        echo wp_kses_post( $right_img );
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
        <img src="<?php echo $left_sharp?>" alt="feature image" class="left_shape_1">
        <img src="<?php echo $about_shape?>" alt="feature image" class="about_shape_1">
        <img src="<?php echo $shape_16?>" alt="feature image" class="feature_icon_1">
        <img src="<?php echo $shape_1?>" alt="feature image" class="feature_icon_4">
    </section>
    <!-- about_us part end-->
    <?php

    }
	
}
