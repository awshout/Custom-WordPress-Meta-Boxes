Reusable Custom WordPress Meta Boxes
====================================

Version: 0.4

Contributors: 
[tammyhart](http://github.com/tammyhart)
[awshout](http://github.com/awshout)

Original Tutorial Series: (http://wp.tutsplus.com/author/tammy/)

Description
-----------

I spent quite a bit of time working with this awesome code and tutorial written by Tammy Hart. The idea was to include options for a page template in the meta. When a template is selected for a page, the corresponding meta box would be displayed with JavaScript.

I was working with 5 page templates, each with their own meta box, and it was adding a bunch of clutter to the database. The solution was to save each box as an array. This cut the clutter down a bunch, but it still saved each meta box for every page in database.

I ended up scrapping this because I couldn't access the meta or "page template options" outside the page id. I still wanted to put it out there for anyone looking to save custom meta boxes as an array or hide them based on page template.
-Anthony Wilhelm


This project was originally a tutorial for WPTuts+, but as I continued to use the code in my own 
projects, I kept improving it and making the resusable part even better. Rather than update the 
tutorial, I decided to make it an open source project here where developers can keep up with 
improvements as well as contribute their own.

This project creates a class which makes it easy to create a custom meta box for any 
post type using a master switch case for the meta box and fields HTML and an array containing 
the data for the fields you want to use.


### Fields Included

* Text Input (types: text,tel, email, url, number)
* Textarea
* WYSIWYG Editor
* Single checkbox
* Select
* Radio group
* Checkbox group
* Taxonomy Select box and Checkboxes
* Post select with support for "multiple"
* Post Checkboxes
* jQuery UI Date input
* jQuery UI Slider
* Color chooser
* Post Drag and Drop Sort
* Image upload/select
* File upload/select
* Sortable Repeatable area with ability to use any of the above mentioned fields (with caution and reason)

### Notes

Not all fields are covered in the included example, but they are in the [Wiki](https://github.com/tammyhart/Reusable-Custom-WordPress-Meta-Boxes/wiki)


Usage
-----

These files are written from the perspecitve of being used in a theme. 

1. Add the metaboxes directory in your theme or plugin.
2. Include metaboxes/meta_box.php in your functions.php.
4. Use the class to create and add meta boxes to any post type (see Examples section below or the [Wiki](https://github.com/tammyhart/Reusable-Custom-WordPress-Meta-Boxes/wiki)
)


Examples
--------

### Create an array that contains the field data (full examples of each filed type found in inc/sample.php)

	$prefix = 'sample_';
	
	$fields = array(
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
		)
	);

### Instantiate the class with all required variables

	/**
	 * Instantiate the class with all variables to create a meta box
	 * var $id string meta box id
	 * var $title string title
	 * var $fields array fields
	 * var $page string|array post type to add meta box to
	 * var $js bool including javascript or not
	 */
	$sample_box = new custom_add_meta_box( 'sample_box', 'Sample Box', $fields, 'post', true );


Changelog
---------

### 0.4 (January 8, 2013)
* Cleaned up docs
* Cleaned up js
* Cleaned up the field output and nested repeatables
* Fixed several bugs 

### 0.3 (November 10, 2012)
* Added file field
* Added function to simplify the add file and add image thickbox
* added more fields to the Repeatable
* Added "chosen" and "multiple" options to select fields

### 0.2 (September 11, 2012)
* Functions combined into a class
* Major code cleanup and some docing added

### 0.1 (March 31, 2012)
* First release
