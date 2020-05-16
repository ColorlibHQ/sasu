<?php
namespace Sasuelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * Sasu elementor Team Member section widget.
 *
 * @since 1.0
 */
class Sasu_Features extends Widget_Base {

	public function get_name() {
		return 'sasu-features';
	}

	public function get_title() {
		return __( 'Features', 'sasu' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'sasu-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Feature Section ------------------------------
        $this->start_controls_section(
            'features_heading',
            [
                'label' => __( 'Feature Heading', 'sasu' ),
            ]
        );
        $this->add_control(
            'feature_header',
            [
                'label'         => esc_html__( 'Feature Header', 'sasu' ),
                'description'   => esc_html__('Use <br> tag for line break', 'sasu'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h2>featured</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus com odo viverra maecenas accumsan lacus vel facilisis accumsan.</p>', 'sasu' )
            ]
        );
        $this->add_control(
            'counter_contents', [
                'label' => __( 'Create Counter', 'sasu' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ counter_label }}}',
                'fields' => [
                    [
                        'name'  => 'counter_val',
                        'label' => __( 'Counter Value', 'sasu' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( '50K', 'sasu' )
                    ],
                    [
                        'name'  => 'counter_label',
                        'label' => __( 'Counter Label', 'sasu' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Total Volunteer', 'sasu' )
                    ],
                ],
            ]
        );
        $this->add_control(
            'ser_btn_label',
            [
                'label'         => esc_html__( 'Feature Button Label', 'sasu' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'learn more', 'sasu' )
            ]
        );
        $this->add_control(
            'ser_btn_url',
            [
                'label'         => esc_html__( 'Feature Button URL', 'sasu' ),
                'type'          => Controls_Manager::URL,
                'label_block'   => true,
                'default'       => [
                    'url'       => '#'
                ]
            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ----------------------------------------   Features content ------------------------------
		$this->start_controls_section(
			'features_block',
			[
				'label' => __( 'Features', 'sasu' ),
			]
		);
		$this->add_control(
            'features_content', [
                'label' => __( 'Create Feature', 'sasu' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ title }}}',
                'fields' => [
                    [
                        'name'      => 'feature_img',
                        'label'     => __( 'Feature Image', 'sasu' ),
                        'type'      => Controls_Manager::MEDIA,
                    ],
                    [
                        'name'  => 'title',
                        'label' => __( 'Feature Title', 'sasu' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'A Volunteer', 'sasu' )
                    ],
                    [
                        'name'      => 'desc',
                        'label'     => __( 'Feature Text', 'sasu' ),
                        'type'      => Controls_Manager::TEXTAREA,
                        'default'   => __( 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor', 'sasu' )
                    ],
                ],
            ]
        );

		$this->end_controls_section(); // End Features content

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Heading Style ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Style Heading', 'sasu' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_sec_ttitle', [
                'label'     => __( 'Title Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature_part .feature_part_text h2, .feature_part .single_feature_part h4, .feature_part .feature_part_text .feature_part_text_iner h4' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'color_sub_ttitle', [
                'label'     => __( 'Text Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature_part .feature_part_text p, .feature_part .single_feature_part p, .feature_part .feature_part_text .feature_part_text_iner p' => 'color: {{VALUE}};',
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
            'anc_txt_color', [
                'label' => __( 'Anchor Text Hover Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature_part .feature_part_text .btn_4' => 'color: {{VALUE}};',
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
            'btnn_hover_txt_color', [
                'label' => __( 'Anchor Text Hover Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature_part .feature_part_text .btn_4:hover' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->end_controls_section();

        // Single Feature Color Settings ==============================
        $this->start_controls_section(
            'single_serv_color_sett', [
                'label' => __( 'Single Feature Color Settings', 'sasu' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'item_border_color', [
                'label'     => __( 'Item Border Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature_part .feature_part_text .feature_part_text_iner' => 'border-color: {{VALUE}};',
                ],
            ]
        );    
        
        $this->add_control(
            'item_hvr_separator',
            [
                'label'     => __( 'Hover Styles', 'sasu' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
            'item_hvr_border_color', [
                'label'     => __( 'Item Hover Border Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature_part .feature_part_text .feature_part_text_iner:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );   

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    $feature_header = !empty( $settings['feature_header'] ) ? $settings['feature_header'] : '';
    $counter_contents = !empty( $settings['counter_contents'] ) ? $settings['counter_contents'] : '';
    $ser_btn_label = !empty( $settings['ser_btn_label'] ) ? $settings['ser_btn_label'] : '';
    $ser_btn_url = !empty( $settings['ser_btn_url']['url'] ) ? $settings['ser_btn_url']['url'] : '';
    $features = !empty( $settings['features_content'] ) ? $settings['features_content'] : '';
    
    $shape_1 = SASU_DIR_ANIMATE_ICON_IMG_URI . 'shape-1.png';
    $shape_14 = SASU_DIR_ANIMATE_ICON_IMG_URI . 'shape-14.png';
    $shape = SASU_DIR_ANIMATE_ICON_IMG_URI . 'shape.png';
    $shape_3 = SASU_DIR_ANIMATE_ICON_IMG_URI . 'shape-3.png';
    $count = 0;

    function single_fet_item( $title, $desc, $feature_img ){ ?>
        <div class="single_feature">
            <div class="single_feature_part">
                <?php
                    if( $feature_img ){
                        echo wp_kses_post( $feature_img );
                    }

                    echo '<h4>' .esc_html( $title ) . '</h4>';
                    echo '<p>' .esc_html( $desc ) . '</p>';
                ?>
            </div>
        </div>
    <?php
    }

    function single_counter_item( $counter_val, $counter_label ){ ?>
        <div class="col-sm-6 col-md-4 col-lg-5">
            <div class="feature_part_text_iner">
                <?php
                    echo '<h4>' .esc_html( $counter_val ) . '</h4>';
                    echo '<p>' .esc_html( $counter_label ) . '</p>';
                ?>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- feature_part start-->
    <sestion class="feature_part padding_top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 ">
                    <div class="row align-items-center">
                        <?php
                        if( is_array( $features ) && count( $features ) > 0 ){
                            foreach ( $features as $feature ) {
                                $feature_img = !empty( $feature['feature_img']['id'] ) ? wp_get_attachment_image($feature['feature_img']['id'], 'sasu_feature_img3_75x65', false, ['alt' => 'feature icon']) : '';
                                $title = !empty( $feature['title'] ) ? $feature['title'] : '';
                                $desc = !empty( $feature['desc'] ) ? $feature['desc'] : '';
                                $count++;
                                if ( $count == 1 ) {
                                ?>
                                <div class="col-lg-6 col-sm-6">
                                    <?php single_fet_item( $title, $desc, $feature_img )?>
                                </div>
                                
                                <div class="col-lg-6 col-sm-6">
                                <?php
                                } else { 
                                    single_fet_item( $title, $desc, $feature_img );
                                }
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_text">
                        <?php
                            // Feature Header =============
                            if( $feature_header ){
                                echo wp_kses_post( wpautop( $feature_header ) );
                            }
                        ?>
                        <div class="row">
                            <?php
                            if( is_array( $counter_contents ) && count( $counter_contents ) > 0 || count( $counter_contents ) <= 2 ){
                                foreach ( $counter_contents as $single ) {
                                    $counter_val = !empty( $single['counter_val'] ) ? $single['counter_val'] : '';
                                    $counter_label = !empty( $single['counter_label'] ) ? $single['counter_label'] : '';
                                    single_counter_item( $counter_val, $counter_label );
                                }
                            }
                            ?>
                        </div>
                        <?php
                            // Button =============
                            if( $ser_btn_label ){
                                echo "<a href='". esc_url($ser_btn_url) . "' class='btn_4'>".esc_html( $ser_btn_label )." <i class='flaticon-right-arrow'></i></a>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
        <img src="<?php echo $shape_1?>" alt="feature icon 1" class="feature_icon_1">
        <img src="<?php echo $shape_14?>" alt="feature icon 2" class="feature_icon_2">
        <img src="<?php echo $shape?>" alt="feature icon 3" class="feature_icon_3">
        <img src="<?php echo $shape_3?>" alt="feature icon 4" class="feature_icon_4">
    </section>
    <!-- upcoming_event part start-->
    <?php
    }
}
