<?php

/****************************************************
DESCRIPTION: 	FRAME OPTIONS
OPTION HANDLE: 	canon_options_frame
****************************************************/


	/****************************************************
	REGISTER MENU
	****************************************************/

	add_action('admin_menu', 'register_canon_options_frame');

	function register_canon_options_frame () {
		global $screen_handle_canon_options_frame;	  	//this is the SCREEN handle used to identify the new admin menu page (notice: different than the add_menu_page handle)
		$theme_name = wp_get_theme()->Name;			//get theme name

		// Use this instad if submenu
		$screen_handle_canon_options_frame = add_submenu_page(
			'handle_canon_options',						//the handle of the parent options page. 
			'Header & Footer Settings',					//the submenu title that will appear in browser title area.
			'Header & Footer',							//the on screen name of the submenu
			'manage_options',							//privileges check
			'handle_canon_options_frame',				//the handle of this submenu
			'display_options_frame'						//the callback function to display the actual submenu page content.
		);

		//changing the name of the first submenu which has duplicate name (there are global variables $menu and $submenu which can be used. var_dump them to see content)
		// Put this in the submenu controller. NB: Not in the first add_menu_page controller, but in the first submenu controller with add_submenu_page. It is not defined until then. 
		//global $submenu;	
		//$submenu['handle_canon_options'][0][0] = "General";

	}

	/****************************************************
	INITIALIZE MENU
	****************************************************/

	add_action('admin_init', 'init_canon_options_frame');	
	
	function init_canon_options_frame () {
		register_setting(
			'group_canon_options_frame',				//group name. The group for the fields custom_options_group
			'canon_options_frame',						//the options variabel. THIS IS WEHERE YOUR OPTIONS ARE STORED.
			'validate_canon_options_frame'				//optional 3rd param. Callback /function to sanitize and validate
		);
	}

	/****************************************************
	SET DEFAULTS
	****************************************************/

	add_action('after_setup_theme', 'default_canon_options_frame');	

	function default_canon_options_frame () {

		//if this is first runthrough set default values
		if (get_option('canon_options_frame') == FALSE) {		//trying to get options 'canon_options_frame' which doesn't yet exist results in FALSE
		 	$options = array (

		 			'header_padding_top'			=> 0,
		 			'header_padding_bottom'			=> 0,
		 			'pos_left_element_top'			=> 0,
		 			'pos_left_element_left'			=> 0,
		 			'pos_right_element_top'			=> 0,
		 			'pos_right_element_right'		=> 0,

		 			'use_sticky_preheader'			=> 'unchecked',
		 			'use_sticky_header'				=> 'unchecked',
		 			'use_sticky_postheader'			=> 'unchecked',
		 			'sticky_turn_off_width'			=> '768',

		 			'pre_header_layout'				=> 'off',
		 			'main_header_layout'			=> 'main_custom_left_right',
		 			'main_custom_left'				=> 'logo',
		 			'main_custom_right'				=> 'primary',
		 			'post_header_layout'			=> 'off',

		 			'logo_url'						=> '',
		 			'logo_text_size'				=> 28,
		 			'logo_max_width'				=> 104,

		 			'header_img_homepage_only'		=> 'unchecked',
		 			'header_img_url'				=> '',
					'header_img_bg_color'			=> '#313540',
		 			'header_img_height'				=> 300,
		 			'header_img_use_parallax'		=> 'checked',
		 			'header_img_parallax_ratio'		=> '0.5',
		 			'header_img_text'				=> "<h3>Header Image With Parallax Scrolling - What's Not To Like!</h3>[button]Buy Trades Today[/button]",
		 			'header_img_text_alignment'		=> 'centered',
		 			'header_img_text_margin_top'	=> 150,

		 			'header_banner_code'			=> "<a href='http://www.themeforest.com/?ref=themecanon' target='_blank'><img src='".get_template_directory_uri()."/img/banner_468x60.gif'></a>",
		 			
		 			'header_text'					=> '<ul><li>Call Us:  1300 123 123</li><li>info@trades.com</li></ul>',

					'toolbar_search_button'			=> 'checked',

					'show_social_icons'				=> 'checked',
					'social_in_new'					=> 'checked',
		 			'social_links'					=> array(
		 				'0' => array('fa-facebook-square','https://www.facebook.com/themecanon'),
		 				'1' => array('fa-twitter-square','https://twitter.com/ThemeCanon'),
		 				'2' => array('fa-rss-square', get_bloginfo('rss2_url')),
		 			),

					'show_widgetized_footer'		=> 'checked',
					'show_social_footer'			=> 'checked',
					'footer_text'					=> '© Copyright Trades 2014 by <a href="http://www.themecanon.com" target="_blank">Theme Canon</a>',

				);

			update_option('canon_options_frame', $options);
		}
	}

	/****************************************************
	VALIDATE INPUT AND DISPLAY MENU
	****************************************************/

	//remember this will strip all html php tags, strip slashes and convert quotation marks. This is not always what you want (maybe you want a field for HTML?) why you might want to modify this part.	
	function validate_canon_options_frame ($new_instance) {				
		$old_instance = get_option('canon_options_frame');
		return $new_instance;
	}

	//display the menus
	function display_options_frame () {
		require "options_frame.php";
	}