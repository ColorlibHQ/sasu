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
class Sasu_Banner extends Widget_Base {

	public function get_name() {
		return 'sasu-banner';
	}

	public function get_title() {
		return __( 'Banner', 'sasu' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'sasu-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  content ------------------------------
        $this->start_controls_section(
            'banner_section',
            [
                'label' => __( 'Banner Section Content', 'sasu' ),
            ]
        );
        $this->add_control(
            'banner_content',
            [
                'label'         => esc_html__( 'Banner Content', 'sasu' ),
                'type'          => Controls_Manager::WYSIWYG,
                'default'       => __( '<h1>Drive More Customers Through Digital</h1><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>', 'sasu' )
            ]
        );
        $this->add_control(
            'banner_btnlabel1',
            [
                'label'         => esc_html__( 'Button1 Label', 'sasu' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Get Started', 'sasu' )
            ]
        );
        $this->add_control(
            'banner_btnurl1',
            [
                'label'         => esc_html__( 'Button1 Url', 'sasu' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );
        $this->add_control(
            'banner_btnlabel2',
            [
                'label'         => esc_html__( 'Button2 Label', 'sasu' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Sign up for free', 'sasu' )
            ]
        );
        $this->add_control(
            'banner_btnurl2',
            [
                'label'         => esc_html__( 'Button2 Url', 'sasu' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
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
                'label' => __( 'Banner Heading Style', 'sasu' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Big  Title Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text h1' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'sub_title_color', [
                'label'     => __( 'Text Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text p' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn_1' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'btnn1_bg_color', [
                'label' => __( 'Button1 BG Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn_1' => 'background: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'btnn2_txt_color', [
                'label' => __( 'Button2 Text Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn_2' => 'color: {{VALUE}}; border-color: {{VALUE}}',
                ],
            ]
        ); 
        $this->add_control(
            'btnn2_bg_color', [
                'label' => __( 'Button2 BG Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn_2' => 'background: {{VALUE}};',
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
                'label' => __( 'Button1 Text Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn_1:hover' => 'color: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'btnn1_hvr_bg_color', [
                'label' => __( 'Button1 BG Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn_1:hover' => 'background: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'btnn2_hvr_txt_color', [
                'label' => __( 'Button2 Text Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn_2:hover' => 'color: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'btnn2_hvr_bg_color', [
                'label' => __( 'Button2 BG Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn_2:hover' => 'background: {{VALUE}}!important; border-color: transparent!important;',
                ],
            ]
        ); 
        $this->end_controls_section();


        // Background Style ==============================
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'sasu' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'sasu' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .banner_part',
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
        $settings = $this->get_settings();
        $ban_content = !empty( $settings['banner_content'] ) ? $settings['banner_content'] : '';
        $button_label1 = !empty( $settings['banner_btnlabel1'] ) ? $settings['banner_btnlabel1'] : '';
        $button_url1 = !empty( $settings['banner_btnurl1']['url'] ) ? $settings['banner_btnurl1']['url'] : '';
        $button_label2 = !empty( $settings['banner_btnlabel2'] ) ? $settings['banner_btnlabel2'] : '';
        $button_url2 = !empty( $settings['banner_btnurl2']['url'] ) ? $settings['banner_btnurl2']['url'] : '';
        $right_img   = !empty( $settings['right_img']['id'] ) ? wp_get_attachment_image( $settings['right_img']['id'], 'sasu_banner_right_img_567x641', false, array( 'alt' => 'banner right image' ) ) : '';
    ?>

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <?php
                                //Content ==============
                                if( $ban_content ){
                                    echo wp_kses_post( wpautop( $ban_content ) );
                                }
                                // Buttons =============
                                if( $button_label1 ){
                                    echo '<a class="btn_2 banner_btn_1" href="'. esc_url( $button_url1 ) .'">'. esc_html( $button_label1 ) .'</a>';
                                }
                                if( $button_label2 ){
                                    echo '<a class="btn_2 banner_btn_2" href="'. esc_url( $button_url2 ) .'">'. esc_html( $button_label2 ) .'</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner_img d-none d-lg-block">
                        <?php
                            if( $right_img ){
                                echo wp_kses_post( $right_img );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start--> 
    <?php

    }
	
}
