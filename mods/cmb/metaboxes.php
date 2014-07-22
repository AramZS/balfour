<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {
$prefix = '_cmb_';
$meta_boxes[] = array(
	'id'         => 'page_metabox',
	'title'      => 'Page Header',
	'pages' => array('page'),
	'context'    => 'normal',
	'priority'   => 'high',
	'show_names' => true, // Show field names on the left
	'fields'     => array(
		array(
			'name' => 'Hide page title',
			'desc' => 'This optiion hides the page title',
			'id'   => $prefix . 'title_checkbox',
			'type' => 'checkbox',
		),
		array(
			'name' => 'Page header background image',
			'desc' => 'Upload an image or enter an URL.',
			'id'   => $prefix . 'header_image',
			'type' => 'file',
		),
		array(
			'name' => 'Page header title',
//			'desc' => 'field description (optional)',
			'id'   => $prefix . 'page_title',
			'type' => 'text',
		),
		array(
			'name'    => 'Page header blurb',
//			'desc'    => 'field description (optional)',
			'id'      => $prefix . 'add_content',
			'type'    => 'wysiwyg',
			'options' => array(	'textarea_rows' => 5, ),
		),



			array(
				'name'    => __( 'Test Select', 'cmb' ),
				'desc'    => __( 'field description (optional)', 'cmb' ),
				'id'      => $prefix . 'test_select',
				'type'    => 'select',
				'options' => array(
					'standard' => __( 'Option One', 'cmb' ),
					'custom'   => __( 'Option Two', 'cmb' ),
					'none'     => __( 'Option Three', 'cmb' ),
				),
			),
			array(
				'name'    => __( 'Test Radio inline', 'cmb' ),
				'desc'    => __( 'field description (optional)', 'cmb' ),
				'id'      => $prefix . 'test_radio_inline',
				'type'    => 'radio_inline',
				'options' => array(
					'standard' => __( 'Option One', 'cmb' ),
					'custom'   => __( 'Option Two', 'cmb' ),
					'none'     => __( 'Option Three', 'cmb' ),
				),
			),
			array(
				'name'    => __( 'Test Radio', 'cmb' ),
				'desc'    => __( 'field description (optional)', 'cmb' ),
				'id'      => $prefix . 'test_radio',
				'type'    => 'radio',
				'options' => array(
					'option1' => __( 'Option One', 'cmb' ),
					'option2' => __( 'Option Two', 'cmb' ),
					'option3' => __( 'Option Three', 'cmb' ),
				),
			),


	),
);





//	$meta_boxes['test_metabox'] = array(
//		'id'         => 'test_metabox',
//		'title'      => __( 'Test Metabox', 'cmb' ),
//		'pages'      => array( 'page', ), // Post type
//		'context'    => 'normal',
//		'priority'   => 'high',
//		'show_names' => true, // Show field names on the left
//		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
//		'fields'     => array(
//			array(
//				'name'       => __( 'Test Text', 'cmb' ),
//				'desc'       => __( 'field description (optional)', 'cmb' ),
//				'id'         => $prefix . 'test_text',
//				'type'       => 'text',
//				'show_on_cb' => 'cmb_test_text_show_on_cb', // function should return a bool value
//				// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
//				// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
//				// 'on_front'        => false, // Optionally designate a field to wp-admin only
//				// 'repeatable'      => true,
//			),
//			array(
//				'name' => __( 'Test Text Small', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_textsmall',
//				'type' => 'text_small',
//				// 'repeatable' => true,
//			),
//			array(
//				'name' => __( 'Test Text Medium', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_textmedium',
//				'type' => 'text_medium',
//				// 'repeatable' => true,
//			),
//			array(
//				'name' => __( 'Website URL', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'url',
//				'type' => 'text_url',
//				// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
//				// 'repeatable' => true,
//			),
//			array(
//				'name' => __( 'Test Text Email', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'email',
//				'type' => 'text_email',
//				// 'repeatable' => true,
//			),
//			array(
//				'name' => __( 'Test Time', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_time',
//				'type' => 'text_time',
//			),
//			array(
//				'name' => __( 'Time zone', 'cmb' ),
//				'desc' => __( 'Time zone', 'cmb' ),
//				'id'   => $prefix . 'timezone',
//				'type' => 'select_timezone',
//			),
//			array(
//				'name' => __( 'Test Date Picker', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_textdate',
//				'type' => 'text_date',
//			),
//			array(
//				'name' => __( 'Test Date Picker (UNIX timestamp)', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_textdate_timestamp',
//				'type' => 'text_date_timestamp',
//				// 'timezone_meta_key' => $prefix . 'timezone', // Optionally make this field honor the timezone selected in the select_timezone specified above
//			),
//			array(
//				'name' => __( 'Test Date/Time Picker Combo (UNIX timestamp)', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_datetime_timestamp',
//				'type' => 'text_datetime_timestamp',
//			),
//			// This text_datetime_timestamp_timezone field type
//			// is only compatible with PHP versions 5.3 or above.
//			// Feel free to uncomment and use if your server meets the requirement
//			// array(
//			// 	'name' => __( 'Test Date/Time Picker/Time zone Combo (serialized DateTime object)', 'cmb' ),
//			// 	'desc' => __( 'field description (optional)', 'cmb' ),
//			// 	'id'   => $prefix . 'test_datetime_timestamp_timezone',
//			// 	'type' => 'text_datetime_timestamp_timezone',
//			// ),
//			array(
//				'name' => __( 'Test Money', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_textmoney',
//				'type' => 'text_money',
//				// 'before'     => '£', // override '$' symbol if needed
//				// 'repeatable' => true,
//			),
//			array(
//				'name'    => __( 'Test Color Picker', 'cmb' ),
//				'desc'    => __( 'field description (optional)', 'cmb' ),
//				'id'      => $prefix . 'test_colorpicker',
//				'type'    => 'colorpicker',
//				'default' => '#ffffff'
//			),
//			array(
//				'name' => __( 'Test Text Area', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_textarea',
//				'type' => 'textarea',
//			),
//			array(
//				'name' => __( 'Test Text Area Small', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_textareasmall',
//				'type' => 'textarea_small',
//			),
//			array(
//				'name' => __( 'Test Text Area for Code', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_textarea_code',
//				'type' => 'textarea_code',
//			),
//			array(
//				'name' => __( 'Test Title Weeeee', 'cmb' ),
//				'desc' => __( 'This is a title description', 'cmb' ),
//				'id'   => $prefix . 'test_title',
//				'type' => 'title',
//			),
//			array(
//				'name'    => __( 'Test Select', 'cmb' ),
//				'desc'    => __( 'field description (optional)', 'cmb' ),
//				'id'      => $prefix . 'test_select',
//				'type'    => 'select',
//				'options' => array(
//					'standard' => __( 'Option One', 'cmb' ),
//					'custom'   => __( 'Option Two', 'cmb' ),
//					'none'     => __( 'Option Three', 'cmb' ),
//				),
//			),
//			array(
//				'name'    => __( 'Test Radio inline', 'cmb' ),
//				'desc'    => __( 'field description (optional)', 'cmb' ),
//				'id'      => $prefix . 'test_radio_inline',
//				'type'    => 'radio_inline',
//				'options' => array(
//					'standard' => __( 'Option One', 'cmb' ),
//					'custom'   => __( 'Option Two', 'cmb' ),
//					'none'     => __( 'Option Three', 'cmb' ),
//				),
//			),
//			array(
//				'name'    => __( 'Test Radio', 'cmb' ),
//				'desc'    => __( 'field description (optional)', 'cmb' ),
//				'id'      => $prefix . 'test_radio',
//				'type'    => 'radio',
//				'options' => array(
//					'option1' => __( 'Option One', 'cmb' ),
//					'option2' => __( 'Option Two', 'cmb' ),
//					'option3' => __( 'Option Three', 'cmb' ),
//				),
//			),
//			array(
//				'name'     => __( 'Test Taxonomy Radio', 'cmb' ),
//				'desc'     => __( 'field description (optional)', 'cmb' ),
//				'id'       => $prefix . 'text_taxonomy_radio',
//				'type'     => 'taxonomy_radio',
//				'taxonomy' => 'category', // Taxonomy Slug
//				// 'inline'  => true, // Toggles display to inline
//			),
//			array(
//				'name'     => __( 'Test Taxonomy Select', 'cmb' ),
//				'desc'     => __( 'field description (optional)', 'cmb' ),
//				'id'       => $prefix . 'text_taxonomy_select',
//				'type'     => 'taxonomy_select',
//				'taxonomy' => 'category', // Taxonomy Slug
//			),
//			array(
//				'name'     => __( 'Test Taxonomy Multi Checkbox', 'cmb' ),
//				'desc'     => __( 'field description (optional)', 'cmb' ),
//				'id'       => $prefix . 'test_multitaxonomy',
//				'type'     => 'taxonomy_multicheck',
//				'taxonomy' => 'post_tag', // Taxonomy Slug
//				// 'inline'  => true, // Toggles display to inline
//			),
//			array(
//				'name' => __( 'Test Checkbox', 'cmb' ),
//				'desc' => __( 'field description (optional)', 'cmb' ),
//				'id'   => $prefix . 'test_checkbox',
//				'type' => 'checkbox',
//			),
//			array(
//				'name'    => __( 'Test Multi Checkbox', 'cmb' ),
//				'desc'    => __( 'field description (optional)', 'cmb' ),
//				'id'      => $prefix . 'test_multicheckbox',
//				'type'    => 'multicheck',
//				'options' => array(
//					'check1' => __( 'Check One', 'cmb' ),
//					'check2' => __( 'Check Two', 'cmb' ),
//					'check3' => __( 'Check Three', 'cmb' ),
//				),
//				// 'inline'  => true, // Toggles display to inline
//			),
//			array(
//				'name'    => __( 'Test wysiwyg', 'cmb' ),
//				'desc'    => __( 'field description (optional)', 'cmb' ),
//				'id'      => $prefix . 'test_wysiwyg',
//				'type'    => 'wysiwyg',
//				'options' => array( 'textarea_rows' => 5, ),
//			),
//			array(
//				'name' => __( 'Test Image', 'cmb' ),
//				'desc' => __( 'Upload an image or enter a URL.', 'cmb' ),
//				'id'   => $prefix . 'test_image',
//				'type' => 'file',
//			),
//			array(
//
//				'name'         => __( 'Multiple Files', 'cmb' ),
//				'desc'         => __( 'Upload or add multiple images/attachments.', 'cmb' ),
//				'id'           => $prefix . 'test_file_list',
//				'type'         => 'file_list',
//				'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
//			),
//			array(
//				'name' => __( 'oEmbed', 'cmb' ),
//				'desc' => __( 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.', 'cmb' ),
//				'id'   => $prefix . 'test_embed',
//				'type' => 'oembed',
//			),
//		),
//	);





add_filter( 'cmb_meta_boxes' , 'be_create_metaboxes' );
	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

if ( ! class_exists( 'cmb_Meta_Box' ) )
	require_once locate_template('/mods/cmb/init.php');
}