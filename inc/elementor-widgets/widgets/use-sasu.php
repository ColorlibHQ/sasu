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
 * Sasu elementor Who Can Use Sasu section widget.
 *
 * @since 1.0
 */
class Sasu_Use_Sasu extends Widget_Base {

	public function get_name() {
		return 'sasu-use-sasu';
	}

	public function get_title() {
		return __( 'Use Sasu', 'sasu' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'sasu-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Use Sasu Section ------------------------------
        $this->start_controls_section(
            'use_sasus_heading',
            [
                'label' => __( 'Use Sasu Heading', 'sasu' ),
            ]
        );
        $this->add_control(
            'use_sasu_header',
            [
                'label'         => esc_html__( 'Use Sasu Header', 'sasu' ),
                'description'   => esc_html__('Use <br> tag for line break', 'sasu'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h2>Who can use Sasu?</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices </p>', 'sasu' )
            ]
        );
        $this->add_control(
            'sasu_contents', [
                'label' => __( 'Create New', 'sasu' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ title }}}',
                'fields' => [
                    [
                        'name'      => 'use_sasu_img',
                        'label'     => __( 'Use Sasu Image', 'sasu' ),
                        'type'      => Controls_Manager::MEDIA,
                    ],
                    [
                        'name'  => 'title',
                        'label' => __( 'Use Sasu Title', 'sasu' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'A Volunteer', 'sasu' )
                    ],
                    [
                        'name'      => 'desc',
                        'label'     => __( 'Use Sasu Text', 'sasu' ),
                        'type'      => Controls_Manager::TEXTAREA,
                        'default'   => __( 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor', 'sasu' )
                    ],
                ],
            ]
        );

        $this->end_controls_section(); // End section top content
        
		

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
                'label'     => __( 'Big Title Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .use_sasu .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'color_sub_ttitle', [
                'label'     => __( 'Text Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .use_sasu .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        );    
        
        $this->end_controls_section();


        // Single Use Sasu Color Settings ==============================
        $this->start_controls_section(
            'single_serv_color_sett', [
                'label' => __( 'Single Use Sasu Color Settings', 'sasu' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
  
        $this->add_control(
            'item_title_color', [
                'label'     => __( 'Item Title Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .use_sasu .single_feature_part h4' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'item_text_color', [
                'label'     => __( 'Item Text Color', 'sasu' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .use_sasu .single_feature_part p' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    $use_sasu_header = !empty( $settings['use_sasu_header'] ) ? $settings['use_sasu_header'] : '';
    $sasu_contents = !empty( $settings['sasu_contents'] ) ? $settings['sasu_contents'] : '';
    $dynamic_class = is_front_page() ? 'use_sasu' : 'use_sasu padding_top';

    $shape_14 = SASU_DIR_ANIMATE_ICON_IMG_URI . 'shape-14.png';
    $shape_10 = SASU_DIR_ANIMATE_ICON_IMG_URI . 'shape-10.png';
    $shape    = SASU_DIR_ANIMATE_ICON_IMG_URI . 'shape.png';
    $shape_13 = SASU_DIR_ANIMATE_ICON_IMG_URI . 'shape-13.png';

    function single_sasu_item( $use_sasu_img, $title, $desc ){ ?>
        <div class="col-lg-3 col-sm-6">
            <div class="single_feature">
                <div class="single_feature_part">
                    <?php
                        if( $use_sasu_img ){
                            echo wp_kses_post( $use_sasu_img );
                        }

                        echo '<h4>' .esc_html( $title ) . '</h4>';
                        echo '<p>' .esc_html( $desc ) . '</p>';
                    ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- use sasu part end-->
    <section class="<?php echo esc_attr($dynamic_class)?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <?php
                            // Use Sasu Header =============
                            if( $use_sasu_header ){
                                echo wp_kses_post( wpautop( $use_sasu_header ) );
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                if( is_array( $sasu_contents ) && count( $sasu_contents ) > 0 ){
                    foreach ( $sasu_contents as $sasu_content ) {
                        $use_sasu_img = !empty( $sasu_content['use_sasu_img']['id'] ) ? wp_get_attachment_image($sasu_content['use_sasu_img']['id'], 'sasu_feature_img3_75x65', false, ['alt' => 'sasu icon']) : '';
                        $title = !empty( $sasu_content['title'] ) ? $sasu_content['title'] : '';
                        $desc = !empty( $sasu_content['desc'] ) ? $sasu_content['desc'] : '';
                        
                        single_sasu_item( $use_sasu_img, $title, $desc );
                    }
                }
                ?>
                
                
            </div>
        </div>
        <img src="<?php echo $shape_14?>" alt="feature icon 1" class="feature_icon_1">
        <img src="<?php echo $shape_10?>" alt="feature icon 2" class="feature_icon_2">
        <img src="<?php echo $shape?>" alt="feature icon 3" class="feature_icon_3">
        <img src="<?php echo $shape_13?>" alt="feature icon 4" class="feature_icon_4">
    </section>
    <!-- use sasu part end-->
    <?php
    }
}
