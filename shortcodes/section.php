<?php

if (!function_exists('mb_section_cb')):

function mb_section_cb( $atts, $content ) {

	$default = array(
		'bg_color' => '',
		'bg_img' => '',
		'bg_repeat' => '',
		'bg_position' => '',
		'bg_attachment' => '',
		'bg_size' => '',
		'container' => 'fullwidth', // boxed, fluid, fullwidth
		'id' => '',
		'class' => '',
		'force_fullwidth' => 0,

		'padding_top' => '50px',
		'md_padding_top' => '',
		'sm_padding_top' => '',
		'xs_padding_top' => '',

		'padding_bottom' => '50px',
		'md_padding_bottom' => '',
		'sm_padding_bottom' => '',
		'xs_padding_bottom' => '',

		'padding_left' => '',
		'md_padding_left' => '',
		'sm_padding_left' => '',
		'xs_padding_left' => '',

		'padding_right' => '',
		'md_padding_right' => '',
		'sm_padding_right' => '',
		'xs_padding_right' => '',

		'margin_top' => '',
		'md_margin_top' => '',
		'sm_margin_top' => '',
		'xs_margin_top' => '',

		'margin_bottom' => '',
		'md_margin_bottom' => '',
		'sm_margin_bottom' => '',
		'xs_margin_bottom' => '',

		'margin_left' => '',
		'md_margin_left' => '',
		'sm_margin_left' => '',
		'xs_margin_left' => '',

		'margin_right' => '',
		'md_margin_right' => '',
		'sm_margin_right' => '',
		'xs_margin_right' => '',
	);

	$atts_default = apply_filters( 'mb_section_element_atts', $default );

	$atts = shortcode_atts( $atts_default, $atts );

	$style = '';
	$style_md = '';
	$style_sm = '';
	$style_xs = '';

	$style .= (isset($atts['bg_color']) && !empty($atts['bg_color'])) ? 'background-color:'.$atts['bg_color'].';' : '';
	$style .= (isset($atts['bg_img']) && !empty($atts['bg_img'])) ? 'background-image: url('.$atts['bg_img'].');' : '';
	$style .= (isset($atts['bg_repeat']) && !empty($atts['bg_repeat'])) ? 'background-repeat: '.$atts['bg_repeat'].';' : '';
	$style .= (isset($atts['bg_position']) && !empty($atts['bg_position'])) ? 'background-position: '.$atts['bg_position'].';' : '';
	$style .= (isset($atts['bg_attachment']) && !empty($atts['bg_attachment'])) ? 'background-attachment: '.$atts['bg_attachment'].';' : '';
	$style .= (isset($atts['bg_size']) && !empty($atts['bg_size'])) ? 'background-size: '.$atts['bg_size'].';' : '';

	$style .= (isset($atts['padding_top']) && !empty($atts['padding_top'])) ? 'padding-top:'.$atts['padding_top'].';' : '';
	$style .= (isset($atts['padding_bottom']) && !empty($atts['padding_bottom'])) ? 'padding-bottom:'.$atts['padding_bottom'].';' : '';
	$style .= (isset($atts['padding_left']) && !empty($atts['padding_left'])) ? 'padding-left:'.$atts['padding_left'].';' : '';
	$style .= (isset($atts['padding_right']) && !empty($atts['padding_right'])) ? 'padding-right:'.$atts['padding_right'].';' : '';

	$style .= (isset($atts['margin_top']) && !empty($atts['margin_top'])) ? 'margin-top:'.$atts['margin_top'].';' : '';
	$style .= (isset($atts['margin_bottom']) && !empty($atts['margin_bottom'])) ? 'margin-bottom:'.$atts['margin_bottom'].';' : '';
	$style .= (isset($atts['margin_left']) && !empty($atts['margin_left'])) ? 'margin-left:'.$atts['margin_left'].';' : '';
	$style .= (isset($atts['margin_right']) && !empty($atts['margin_right'])) ? 'margin-right:'.$atts['margin_right'].';' : '';

	$style_md .= (isset($atts['md_padding_top']) && !empty($atts['md_padding_top'])) ? 'padding-top:'.$atts['md_padding_top'].';' : '';
	$style_md .= (isset($atts['md_padding_bottom']) && !empty($atts['md_padding_bottom'])) ? 'padding-bottom:'.$atts['md_padding_bottom'].';' : '';
	$style_md .= (isset($atts['md_padding_left']) && !empty($atts['md_padding_left'])) ? 'padding-left:'.$atts['md_padding_left'].';' : '';
	$style_md .= (isset($atts['md_padding_right']) && !empty($atts['md_padding_right'])) ? 'padding-right:'.$atts['md_padding_right'].';' : '';

	$style_md .= (isset($atts['md_margin_top']) && !empty($atts['md_margin_top'])) ? 'margin-top:'.$atts['md_margin_top'].';' : '';
	$style_md .= (isset($atts['md_margin_bottom']) && !empty($atts['md_margin_bottom'])) ? 'margin-bottom:'.$atts['md_margin_bottom'].';' : '';
	$style_md .= (isset($atts['md_margin_left']) && !empty($atts['md_margin_left'])) ? 'margin-left:'.$atts['md_margin_left'].';' : '';
	$style_md .= (isset($atts['md_margin_right']) && !empty($atts['md_margin_right'])) ? 'margin-right:'.$atts['md_margin_right'].';' : '';

	$style_sm .= (isset($atts['sm_padding_top']) && !empty($atts['sm_padding_top'])) ? 'padding-top:'.$atts['sm_padding_top'].';' : '';
	$style_sm .= (isset($atts['sm_padding_bottom']) && !empty($atts['sm_padding_bottom'])) ? 'padding-bottom:'.$atts['sm_padding_bottom'].';' : '';
	$style_sm .= (isset($atts['sm_padding_left']) && !empty($atts['sm_padding_left'])) ? 'padding-left:'.$atts['sm_padding_left'].';' : '';
	$style_sm .= (isset($atts['sm_padding_right']) && !empty($atts['sm_padding_right'])) ? 'padding-right:'.$atts['sm_padding_right'].';' : '';

	$style_sm .= (isset($atts['sm_margin_top']) && !empty($atts['sm_margin_top'])) ? 'margin-top:'.$atts['sm_margin_top'].';' : '';
	$style_sm .= (isset($atts['sm_margin_bottom']) && !empty($atts['sm_margin_bottom'])) ? 'margin-bottom:'.$atts['sm_margin_bottom'].';' : '';
	$style_sm .= (isset($atts['sm_margin_left']) && !empty($atts['sm_margin_left'])) ? 'margin-left:'.$atts['sm_margin_left'].';' : '';
	$style_sm .= (isset($atts['sm_margin_right']) && !empty($atts['sm_margin_right'])) ? 'margin-right:'.$atts['sm_margin_right'].';' : '';

	$style_xs .= (isset($atts['xs_padding_top']) && !empty($atts['xs_padding_top'])) ? 'padding-top:'.$atts['xs_padding_top'].';' : '';
	$style_xs .= (isset($atts['xs_padding_bottom']) && !empty($atts['xs_padding_bottom'])) ? 'padding-bottom:'.$atts['xs_padding_bottom'].';' : '';
	$style_xs .= (isset($atts['xs_padding_left']) && !empty($atts['xs_padding_left'])) ? 'padding-left:'.$atts['xs_padding_left'].';' : '';
	$style_xs .= (isset($atts['xs_padding_right']) && !empty($atts['xs_padding_right'])) ? 'padding-right:'.$atts['xs_padding_right'].';' : '';

	$style_xs .= (isset($atts['xs_margin_top']) && !empty($atts['xs_margin_top'])) ? 'margin-top:'.$atts['xs_margin_top'].';' : '';
	$style_xs .= (isset($atts['xs_margin_bottom']) && !empty($atts['xs_margin_bottom'])) ? 'margin-bottom:'.$atts['xs_margin_bottom'].';' : '';
	$style_xs .= (isset($atts['xs_margin_left']) && !empty($atts['xs_margin_left'])) ? 'margin-left:'.$atts['xs_margin_left'].';' : '';
	$style_xs .= (isset($atts['xs_margin_right']) && !empty($atts['xs_margin_right'])) ? 'margin-right:'.$atts['xs_margin_right'].';' : '';


	$custom_cls = '';

	

	$container_class = 'container';

	if (isset($atts['container']) && $atts['container'] == 'fluid') {
		$container_class = 'container-fluid';
	}

	$sec_cls = array();

	$sec_cls[] = $atts['class'];

	if (((int) $atts['force_fullwidth']) && ($atts['container'] == 'fluid' || $atts['container'] == 'fullwidth')) {
		$sec_cls[] = 'mb-force-fullwidth';
	}

	$cls = 'mb_section_'.rand(99, 99999);

	if (isset($atts['container']) && $atts['container'] == 'boxed') {
		$container_class = ' '.$cls;
	} else {
		$sec_cls[] = $cls;
	}

	$output = '';

	ob_start();

	?>
	<style type="text/css">
		.<?php echo esc_attr( $cls ); ?>{
			<?php echo esc_attr($style); ?>
		}
		@media (min-width: 992px) and (max-width: 1199px) {
			.<?php echo esc_attr( $cls ); ?>{
				<?php echo esc_attr($style_md); ?>
			}
		}
		@media (min-width: 768px) and (max-width: 991px ){
			.<?php echo esc_attr( $cls ); ?>{
				<?php echo esc_attr($style_sm); ?>
			}
		}
		@media (max-width: 767px) {
			.<?php echo esc_attr( $cls ); ?>{
				<?php echo esc_attr($style_xs); ?>
			}
		}
		
		
	</style>
	<section class="<?php echo esc_attr(implode(' ', $sec_cls)); ?>" id="<?php echo esc_attr($atts['id']); ?>">
		<div class="<?php echo esc_attr($container_class); ?>">
			<?php echo do_shortcode( $content ); ?>
		</div>
	</section>
	
	<?php

	$output =  ob_get_clean();

	$output = apply_filters( 'mb_section_element_output', $output, $atts, $content );

	return $output;
}
add_shortcode( 'mb_section','mb_section_cb' );

endif;

if (class_exists('MB_Element')) {

	$section_map = array(
		'title' => 'Section',
		'subtitle' => 'Section Element',
		'code' => 'mb_section',
		'hascontent' => true,
		'layout' => true,
		'icon' => '',
		'options' => array(
			array(
				'id' => 'container',
				'label'    => __( 'Container', 'mighty-builder' ),
				'subtitle'    => __( 'Please select container type', 'mighty-builder' ),
				'type'     => 'radio_button',
				'default' => 'fullwidth',
                'choices' => array(
                    'boxed' => 'Boxed',
                    'fluid' => 'Fluid',
                    'fullwidth' => 'Fullwidth'
                ),
                'tab' => 'Settings'
			),
			array(
				'id' => 'force_fullwidth',
				'label'    => __( 'Force Fullwidth', 'mighty-builder' ),
				'subtitle'    => __( 'Only work with only Fluid and Fullwidth Container', 'mighty-builder' ),
				'type'     => 'radio',
				'default' => '0',
				'choices' => array(
					'0' => __('Disable', 'mighty-builder'),
					'1' => __('Enable', 'mighty-builder'),
				),
				'tab' => 'Settings'
			),
			array(
				'id' => 'id',
				'label'    => __( 'Section ID', 'mighty-builder' ),
				'type'     => 'text',
				'default' => '',
                'tab' => 'Settings'
			),
			array(
				'id' => 'class',
				'label'    => __( 'Extra Class', 'mighty-builder' ),
				'type'     => 'text',
				'default' => '',
                'tab' => 'Settings'
			),
			array(
				'id' => 'bg_color',
				'label'    => __( 'Color', 'mighty-builder' ),
				'subtitle'    => __( 'Background color', 'mighty-builder' ),
				'type'     => 'color',
				'default' => '',
				'tab' => 'Background'
			),
			array(
				'id' => 'bg_img',
				'label'    => __( 'Image', 'mighty-builder' ),
				'subtitle'    => __( 'Background image', 'mighty-builder' ),
				'type'     => 'image',
				'default' => '',
				'tab' => 'Background'
			),
			array(
				'id' => 'bg_repeat',
				'label'    => __( 'Repeat', 'mighty-builder' ),
				'subtitle'    => __( 'Background Repeat', 'mighty-builder' ),
				'type'     => 'select',
				'default' => '',
                'choices' => array(
                    'repeat' => 'Repeat',
                    'no-repeat' => 'No Repeat',
                    'repeat-x' => 'Repeat Horizontally',
                    'repeat-y' => 'Repeat Vertically',
                ),
                'tab' => 'Background'
			),
			array(
				'id' => 'bg_size',
				'label'    => __( 'Size', 'mighty-builder' ),
				'subtitle'    => __( 'Background Size', 'mighty-builder' ),
				'type'     => 'select',
				'default' => '',
                'choices' => array(
                    'auto' => 'Auto',
                    'cover' => 'Cover',
                    'contain' => 'Contain',
                ),
                'tab' => 'Background'
			),
			array(
				'id' => 'bg_position',
				'label'    => __( 'Position', 'mighty-builder' ),
				'subtitle'    => __( 'Background Position', 'mighty-builder' ),
				'type'     => 'select',
				'default' => '',
                'choices' => array(
                    'left top' => 'Left Top',
					'left center' => 'Left Center',
					'left bottom' => 'Left Bottom',
					'right top' => 'Right Top',
					'right center' => 'Right Center',
					'right bottom' => 'Right Bottom',
					'center top' => 'Center Top',
					'center center' => 'Center Center',
					'center bottom' => 'Center Bottom',
                ),
                'tab' => 'Background'
			),
			array(
				'id' => 'bg_attachment',
				'label'    => __( 'Attachment', 'mighty-builder' ),
				'subtitle'    => __( 'Background Attachment', 'mighty-builder' ),
				'type'     => 'select',
				'default' => '',
                'choices' => array(
                    'scroll' => 'Scroll',
                    'fixed' => 'Fixed',
                ),
                'tab' => 'Background'
			),
			array(
				'id' => 'padding_top',
				'label'    => __( 'Padding Top', 'mighty-builder' ),
				'type'     => 'dimension',
				'default' => '50px',
				'choices' => array( 'units' => array( 'px', 'em', 'rem' ) ),
				'tab' => 'Spacing',
				'responsive' => true,
			),
			array(
				'id' => 'padding_bottom',
				'label'    => __( 'Padding Bottom', 'mighty-builder' ),
				'type'     => 'dimension',
				'default' => '50px',
				'choices' => array( 'units' => array( 'px', 'em', 'rem' ) ),
				'tab' => 'Spacing',
				'responsive' => true,
			),
			array(
				'id' => 'padding_left',
				'label'    => __( 'Padding Left', 'mighty-builder' ),
				'type'     => 'dimension',
				'default' => '',
				'choices' => array( 'units' => array( 'px', 'em', 'rem' ) ),
				'tab' => 'Spacing',
				'responsive' => true,
			),
			array(
				'id' => 'padding_right',
				'label'    => __( 'Padding Right', 'mighty-builder' ),
				'type'     => 'dimension',
				'default' => '',
				'choices' => array( 'units' => array( 'px', 'em', 'rem' ) ),
				'tab' => 'Spacing',
				'responsive' => true,
			),
			array(
				'id' => 'margin_top',
				'label'    => __( 'Margin Top', 'mighty-builder' ),
				'type'     => 'dimension',
				'default' => '',
				'responsive' => true,
				'tab' => 'Spacing'
			),
			array(
				'id' => 'margin_bottom',
				'label'    => __( 'Margin Bottom', 'mighty-builder' ),
				'type'     => 'dimension',
				'default' => '',
				'responsive' => true,
				'tab' => 'Spacing'
			),
			array(
				'id' => 'margin_left',
				'label'    => __( 'Margin Left', 'mighty-builder' ),
				'type'     => 'dimension',
				'default' => '',
				'responsive' => true,
				'tab' => 'Spacing'
			),
			array(
				'id' => 'margin_right',
				'label'    => __( 'Margin Right', 'mighty-builder' ),
				'type'     => 'dimension',
				'default' => '',
				'responsive' => true,
				'tab' => 'Spacing'
			),
		)
	);

	$section_map = apply_filters( 'mb_section_map', $section_map );

	MB_Element::add($section_map);
}