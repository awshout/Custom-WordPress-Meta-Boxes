<?php
/**
 * Meta Box Fields
 *
 * @author Tammy Hart (@tammyhart / tammyhartdesigns.com)
 * @author Anthony Wilhelm (@awshout / anthonywilhelm.com)
 * @license GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 */
 
	$layouts = array(
		'0side-cm' => __('No Sidebars'),
		'1side-cl' => __('1 Sidebar - Content Left'),
		'1side-cr' => __('1 Sidebar - Content Right'),
		'2side-cl' => __('2 Sidebars - Content Left'),
		'2side-cr' => __('2 Sidebars - Content Right'),
		'2side-cm' => __('2 Sidebars - Content Middle'),
	);
	
	$post_columns = array(
		'one'   => __('1 Column'),
		'two'   => __('2 Columns'),
		'three' => __('3 Columns'),
		'four'  => __('4 Columns'),
	);
	
	$prefix = 'sample_';


/**
 * Variables above this line
 * --------------------------------------------
 */
 
		/**
		 * Field arrays for custom meta boxes
		 *
		 * @since 1.0.0
		 */
		 $sample_fields = array(
			array( // Text Input
				'label'	=> 'Text Input', // <label>
				'desc'	=> 'A description for the field.', // description
				'id'	=> $prefix.'text', // field id and name
				'type'	=> 'text' // type of field
			),
			array( // Textarea
				'label'	=> 'Textarea', // <label>
				'desc'	=> 'A description for the field.', // description
				'id'	=> $prefix.'textarea', // field id and name
				'type'	=> 'textarea' // type of field
			),
			array( // Single checkbox
				'label'	=> 'Checkbox Input', // <label>
				'desc'	=> 'A description for the field.', // description
				'id'	=> $prefix.'checkbox', // field id and name
				'type'	=> 'checkbox' // type of field
			),
			array( // Textarea
				'label'	=> 'Color', // <label>
				'desc'	=> 'A description for the field.', // description
				'id'	=> $prefix.'color', // field id and name
				'type'	=> 'color' // type of field
			),
			array( // Select box
				'label'	=> 'Select Box', // <label>
				'desc'	=> 'A description for the field.', // description
				'id'	=> $prefix.'select', // field id and name
				'type'	=> 'select', // type of field
				'options' => array ( // array of options
					'one'   => 'Option One', 
					'two'   => 'Option Two',
					'three' => 'Option Three',
					)
			),
			array ( // Radio group
				'label'	=> 'Radio Group', // <label>
				'desc'	=> 'A description for the field.', // description
				'id'	=> $prefix.'radio', // field id and name
				'type'	=> 'radio', // type of field
				'options' => array ( // array of options
					'one'   => 'Option One', 
					'two'   => 'Option Two',
					'three' => 'Option Three',
					)
			),
			array ( // Checkbox group
				'label'	=> 'Checkbox Group', // <label>
				'desc'	=> 'A description for the field.', // description
				'id'	=> $prefix.'checkbox_group', // field id and name
				'type'	=> 'checkbox_group', // type of field
				'options' => array ( // array of options
					'one'   => 'Option One', 
					'two'   => 'Option Two',
					'three' => 'Option Three',
					)
			),
			array( // Taxonomy Select box
				'label'	=> 'Category', // <label>
				// the description is created in the callback function with a link to Manage the taxonomy terms
				'id'	   => $prefix.'category', // field id and name, needs to be the exact name of the taxonomy
				'type'	   => 'tax_select', // type of field
				'taxonomy' => 'category', // taxonomy to use for options
			),
			array( // Post ID select box
				'label'     => 'Post List', // <label>
				'desc'	    => 'A description for the field.', // description
				'id'	    =>  $prefix.'post_id', // field id and name
				'type'	    => 'post_select', // type of field
				'post_type' => array('post','page') // post types to display, options are prefixed with their post type
			),
			array( // jQuery UI Date input
				'label'	=> 'Date', // <label>
				'desc'	=> 'A description for the field.', // description
				'id'	=> $prefix.'date', // field id and name
				'type'	=> 'date' // type of field
			),
			array( // jQuery UI Slider
				'label'	=> 'Slider', // <label>
				'desc'	=> 'A description for the field.', // description
				'id'	=> $prefix.'slider', // field id and name
				'type'	=> 'slider', // type of field
				'min'	=> '0', // lowest possible number
				'max'	=> '100', // highest possible number
				'step'	=> '5' // how the slider steps as it is dragged
			),
			array( // Image ID field
				'label'	=> 'Image', // <label>
				'desc'	=> 'A description for the field.', // description
				'id'	=> $prefix.'image', // field id and name
				'type'	=> 'image' // type of field
			),
			array( // Repeatable & Sortable Text inputs
				'label'	=> 'Repeatable', // <label>
				'desc'	=> 'A description for the field.', // description
				'id'	=> $prefix.'repeatable', // field id and name
				'type'	=> 'repeatable', // type of field
				'sanitizer' => array( // array of sanitizers with matching kets to next array
					'featured' => 'meta_box_santitize_boolean',
					'title' => 'sanitize_text_field',
					'desc' => 'wp_kses_data'
				),
				'repeatable_fields' => array ( // array of fields to be repeated
					'featured'  => array(
						'label' => 'Featured?',
						'id'    => 'featured',
						'type'  => 'checkbox'
					),
					array( // Image ID field
						'label'	=> 'Image', // <label>
						'id'	=> 'image', // field id and name
						'type'	=> 'image' // type of field
					),
					'title' => array(
						'label' => 'Title',
						'id' => 'title',
						'type' => 'text'
					),
					'desc' => array(
						'label' => 'Description',
						'id' => 'desc',
						'type' => 'textarea'
					)
				)
			)
		 );

 
		$page_template_fields = array(
			array( 
				'label'    => __('Posts Category'),
				'desc'     => __('Select a category of posts'),
				'id'       => 'template_post_category',
				'type'     => 'tax_select',
				'taxonomy' => 'category',
				'std'      => '',
			 ),
			array( 
				'label'    => __('Slider Category'),
				'desc'     => __('Select a category of slides'),
				'id'       => 'template_slider_category',
				'type'     => 'tax_select',
				'taxonomy' => 'slide-category',
				'std'      => '',
			 ),
			array(
				'label'   => __('Page Layout'),
				'desc'    => __('Select a layout for content'),
				'id'      => 'template_page_layout',
				'type'    => 'select',
				'options' => $layouts,
				'std'     => '0side-cm',
			 ),
			array(
				'label'   => __('Post Columns'),
				'desc'    => __('The number of columns for posts'),
				'id'      => 'template_post_columns',
				'type'    => 'select',
				'options' => $post_columns,
				'std'     => 'three',
			 ),
			array(
				'label'   => __('Number of Posts'),
				'desc'    => __('The number posts to display'),
				'id'      => 'template_number_posts',
				'type'    => 'text',
				'size'    => '10',
				'std'     => 3,
			 ),
			array(
				'label'   => __('Post Titles'),
				'desc'    => __('Show the post titles / Link title to the post'),
				'id'      => 'template_post_titles',
				'type'    => 'checkbox_group',
				'options' => array(
					'show' => __('Show Titles'),
					'link' => __('Link Titles'),
				),
				'std'  => array('show'),
			 ),
			array(
				'label' => __('Post Meta'),
				'desc'  => __('Show post author, date, and categories'),
				'id'    => 'template_post_meta',
				'type'  => 'checkbox',
				'std'   => 0,
			 ),
			array(
				'label' => __('Comments Link'),
				'desc'  => __('Show link to comments'),
				'id'    => 'template_comments_link',
				'type'  => 'checkbox',
				'std'   => 0,
			 ),
			array(
				'label' => __('Page Links'),
				'desc'  => __('Show post pagination or next/prev links'),
				'id'    => 'template_page_links',
				'type'  => 'checkbox',
				'std'   => 0,
			 ),
			array(
				'label'     => __('Call To Action'),
				'desc'      => __('Add some content to display the Call to Action area'),
				'id'        => 'template_call_to_action',
				'type'      => 'editor',
				'sanitizer' => 'wp_kses_post',
				'options'   => array(
				    'textarea_rows' => 5,
				),
			 ), 
		);


/**
 * Instantiate the class to create a meta box
 *
 * @since 1.0.0
 *
 * var $id string meta box id
 * var $title string title
 * var $page string|array post type to add meta box to
 * var $show_on option to show the meta box on specific page template 
 * var $fields array meta box fields
 */
$sample_meta_box = new custom_add_meta_box( '_sample_box', 'Sample Box', 'page', null, $sample_fields  );
$page_template_meta = new custom_add_meta_box( '_page_template_meta', 'Page Template Options', 'page', 'page_template.php', $page_template_fields );