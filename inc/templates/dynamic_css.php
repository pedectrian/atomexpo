<?php 

	function canon_dynamic_css() {
			

		$canon_options = get_option('canon_options');
		$canon_options_frame = get_option('canon_options_frame');
		$canon_options_appearance = get_option('canon_options_appearance');
		$canon_options_advanced = get_option('canon_options_advanced');

	    // dev mode options
	    if ($canon_options['dev_mode'] == "checked") {
	        if (isset($_GET['anim_menus'])) { $canon_options_appearance['anim_menus'] = wp_filter_nohtml_kses($_GET['anim_menus']); }
	    }
		

 ?>

	<style type="text/css">
	
	
/* ==========================================================================
   THEME COLOURS
   ========================================================================== */	
	
	
	
	/* -----------------------------------|||||||||| BODY TEXT ||||||||||------------------------------------ */
	/* ------------------------------------------------------------------------------------------------------ */
	
	/* GENERAL BODY TEXT */
	html, body, button, input, select, textarea, a, aside .tweet, ul.tab-nav li, ul.accordion li, .accordion-btn,  ul.toggle li, footer.outter-wrapper,
	
	/* WOO COMMERCE */
	.woocommerce-tabs .comment-text .description, #payment ul.payment_methods.methods p { 
		color: #666666;
	   	<?php if (!empty($canon_options_appearance['color_general_text'])) echo "color: ".$canon_options_appearance['color_general_text'].";"; ?>
	}
	
	
	
	
	
	/* -----------------------------------||||||||| FEATURE TEXT 1 |||||||||||------------------------------------ */
	/* ----------------------------------------------------------------------------------------------------------- */
	
	/* FEATURE COLOUR 1  */
	.feature-link:after, .more:before, .main ul li:before, footer ul.social-link a:hover em:before, h1 span, h2 span, h1 span, h2 span, h3 span, h6 span, ul.toggle .toggle-btn.active, .tab-nav li.active, .widget-footer .tab-nav li.active, .statistics li span, .statistics li em, .more:before, ol > li:before, h3.v_active, .accordion-btn.active,  aside .tweet a, .twitter_theme_design .tweet a, .logo-text:hover, .comment-reply-link:before, .comment-edit-link:before, #cancel-comment-reply-link:before, .sc_accordion-btn.active, .price-cell .inwrap:after,  .widget-footer .tab-content-block h3.v_nav.v_active, ul.accordion li a.accordion-btn:before, ul.toggle li a.toggle-btn:before, .error[generated=true],  .comments .more:before, nav a.active, #nav a:hover, #nav ul a:hover, ul.pagination li a.active, #scrollUp:hover, .header-container .nav li:before, .pre-header-container .nav li:before, .post-header-container .nav li:before, .main .accordion-btn:hover,  .main .toggle-btn:hover, .main .more:hover,  .main .feature-link:hover, .main .comment-reply-link:hover, .main .comment-edit-link:hover, .main #cancel-comment-reply-link:hover, .highlight, .toolbar-search-btn:hover em, div.media_links a:hover, .countdown_section, .canon_animated_number h1,
	 
	 /* WOO COMMERCE */
	 .shipping_calculator h2 a, .woocommerce table.cart a.remove, .woocommerce #content table.cart a.remove, .woocommerce-page table.cart a.remove, .woocommerce-page #content table.cart a.remove, .woocommerce form .form-row .required, .woocommerce-page form .form-row .required, .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce #content div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce-page div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce .star-rating span:before, .woocommerce-page .star-rating span:before, .woocommerce div.product .stock, .woocommerce #content div.product .stock, .woocommerce-page div.product .stock, .woocommerce-page #content div.product .stock, .woocommerce div.product .out-of-stock, .woocommerce #content div.product .out-of-stock, .woocommerce-page div.product .out-of-stock, .woocommerce-page #content div.product .out-of-stock,
	 
	 /* BBPRESS*/
	 #bbpress-forums .bbp-forum-title:hover, #bbpress-forums .bbp-topic-permalink:hover, .bbp-forum-header a.bbp-forum-permalink:hover, .bbp-topic-header a.bbp-topic-permalink:hover, .bbp-reply-header a.bbp-reply-permalink:hover, #bbpress-forums .bbp-topic-header .bbp-meta a.bbp-topic-permalink:hover, #bbpress-forums #bbp-single-user-details #bbp-user-navigation li a:hover, .widget_display_stats dl dd strong,
	 
	 /* BUDDYPRESS */
	 #buddypress div.item-list-tabs ul li.selected a, #buddypress div.item-list-tabs ul li.current a,
	 
	 /* EVENTS CALENDAR */
	 #tribe-bar-collapse-toggle:hover
	{
		color: #ffc000;
	   	<?php if (!empty($canon_options_appearance['color_feat_text_1'])) echo "color: ".$canon_options_appearance['color_feat_text_1'].";"; ?>
	}
	
	
	
	
	
	/* -----------------------------------||||||||| FEATURE TEXT 2|||||||||||------------------------------------ */
	/* ---------------------------------------------------------------------------------------------------------- */
	
	/* FEATURE COLOUR 2  */
	.main a:hover, .main h1 a:hover, a:hover span, #fittext1, h4.fittext, .boxed h5, .icon-thirds li:hover em:before,  h4 span, ul.comments h5 a, .boxed ul.social-link a:hover, .meta.option-set a.selected, .page-numbers.current, span.wpcf7-not-valid-tip, .current-cat,  .main .btn.white-btn:hover, .main a.btn.white-btn:hover, .main .owlCustomNavigation .btn:hover, .iconBlock .fa, .media_links a, .pb_gallery .main .isotope_filter_menu li a:hover,  .owlCustomNavigation .btn:hover,
	
	/* BBPRESS */
	#bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a,
	
	/* EVENTS CALENDAR */
	.tribe-events-list-separator-month span, .tribe-events-sub-nav li a, .tribe-events-tooltip .date-start.dtstart, .tribe-events-tooltip .date-end.dtend, .single-tribe_events .tribe-events-schedule .tribe-events-cost
	{
		color: #4170a9;
	   	<?php if (!empty($canon_options_appearance['color_feat_text_2'])) echo "color: ".$canon_options_appearance['color_feat_text_2'].";"; ?>
	}
	
	
	
	
	
	/* -----------------------------------|||||||||| MENU TEXT ||||||||||------------------------------------ */
	/* ------------------------------------------------------------------------------------------------------ */
	
	/* MENU ITEM */
	.nav a:hover, .nav li.current-menu-ancestor > a, #nav .sub-menu li.current-menu-ancestor > a:hover,  nav li.current-menu-item > a, .pre-header-container a:hover
	 {
		color: #ffc000;
	   	<?php if (!empty($canon_options_appearance['color_menu_nav'])) echo "color: ".$canon_options_appearance['color_menu_nav'].";"; ?>
	}
	@media only screen and (max-width: 768px) { 
		#nav .donate a:hover{
			color: #ffc000;
			<?php if (!empty($canon_options_appearance['color_menu_nav'])) echo "color: ".$canon_options_appearance['color_menu_nav'].";"; ?>
		}
	
	}
	
	
	
	
	
	/* -----------------------------------|||||||||| PRE/POST MENU TEXT ||||||||||------------------------------------ */
	/* ------------------------------------------------------------------------------------------------------ */
	
	/*  PRE/POST MENU TEXT */
	.pre-header-container, .pre-header-container *, .post-header-container ul a, .post-header-container, .header-container * 
	 {
		color: #bec0c7;
	   	<?php if (!empty($canon_options_appearance['color_premenu_nav'])) echo "color: ".$canon_options_appearance['color_premenu_nav'].";"; ?>
	}
	
	
	
	
	
	/* -----------------------------------|||||||||| HEADINGS ||||||||||------------------------------------ */
	/* ----------------------------------------------------------------------------------------------------- */
	
	/* HEADINGS */
	h1, h1 a, h2, h2 a, h3, h3 a, h4, h4 a, h5, h6, .lead, strong, b, .feature-link, .more, pre, .icon-thirds li em:before, .countdown_amount,  cite, .caption-cite, .sc_accordion-btn, .accordion-btn, .toggle-btn, .sc_toggle-btn, .comment-reply-link, .comment-edit-link, #cancel-comment-reply-link,
	
	/* WOO COMMERCE */
	.woocommerce ul.products li.product .price, .woocommerce-page ul.products li.product .price, .woocommerce table.cart a.remove:hover, .woocommerce #content table.cart a.remove:hover, .woocommerce-page table.cart a.remove:hover, .woocommerce-page #content table.cart a.remove:hover, .summary.entry-summary .price span,  .woocommerce div.product .woocommerce-tabs ul.tabs li a, .woocommerce #content div.product .woocommerce-tabs ul.tabs li a, .woocommerce-page div.product .woocommerce-tabs ul.tabs li a, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a, mark,
	
	/* BBPRESS*/
	#bbpress-forums .bbp-forum-title, #bbpress-forums .bbp-topic-permalink,
	
	/* BUDDYPRESS */
	#buddypress .activity-meta a.bp-primary-action span,
	
	/* EVENTS CALENDAR */
	.single-tribe_events .tribe-events-schedule *
	
	{
		color: #1d2028;
	   	<?php if (!empty($canon_options_appearance['color_headings'])) echo "color: ".$canon_options_appearance['color_headings'].";"; ?>
	}
	
	
	
	
	
	
	/* -----------------------------------|||||||||| META ||||||||||------------------------------------ */
	/* ------------------------------------------------------------------------------------------------- */
	
	/* META */
	 aside ul li a, aside ul li, .meta, .meta a, ul.link-list li a, caption, .wp-caption-text, .multi_navigation_hint, .tweet:before,  .white-btn, a.white-btn, aside .tweet .meta:before, .twitter_theme_design .tweet .meta:before, .post-type-tweet:before, blockquote, .text-seperator h5, .owlCustomNavigation .btn,
	
	/* WOO COMMERCE */
	 .woocommerce-result-count, .woocommerce ul.products li.product .price del, .woocommerce-page ul.products li.product .price del, .summary.entry-summary .price del span,  .woocommerce .cart-collaterals .cart_totals p small, .woocommerce-page .cart-collaterals .cart_totals p small, .woocommerce .star-rating:before, .woocommerce-page .star-rating:before,
	
	/* BBPRESS*/
	  .bbp-forum-header a.bbp-forum-permalink, .bbp-topic-header a.bbp-topic-permalink, .bbp-reply-header a.bbp-reply-permalink,
	  #bbpress-forums .bbp-topic-header .bbp-meta a.bbp-topic-permalink, #bbpress-forums #bbp-single-user-details #bbp-user-navigation a,
	
	/* BUDDYPRESS */
	  #buddypress div#item-header div#item-meta,
	
	/* EVENTS CALENDAR */
	  .tribe-events-sub-nav li a:hover, .tribe-events-event-meta .tribe-events-venue-details, .tribe-events-thismonth div:first-child, .tribe-events-list-widget ol li .duration
	  
	   {
	 	color: #9c9fa4;
	   	<?php if (!empty($canon_options_appearance['color_meta'])) echo "color: ".$canon_options_appearance['color_meta'].";"; ?>
	 }
	 
	 
	 
	 
	 
	 
	 
	 /* -----------------------------------||||||||| WHITE TEXT |||||||||||------------------------------------ */
	 /* ------------------------------------------------------------------------------------------------------- */
	 
	 /* WHITE TEXT */
	 .parallax-block h4, .parallax-block h5, .callout-block h5, .nav a, .nav .donate a:hover, .widget-footer strong, .btn, input[type=button], input[type=submit], .price h3, ol.graphs > li div, #menu-icon, ul.pagination .left a:hover, ul.pagination .right a:hover, ul.paging a:hover span, .tp-caption.btn a, a.tp-button, #scrollUp, .feature-heading *, ul.pagination .left a, ul.pagination .right a, ul.paging a span, ul.page-numbers li a.next, ul.page-numbers li a.prev, ul.paging span, .logo-text, .widget-footer .tab-nav li, nav li.donate.current-menu-item > a,  .timeline_load_more:hover h4, .main a.btn:hover, .price h3 span, .price-table-feature .price-cell.feature h3, .price-table-feature .price-cell h3 span, .price-cell.feature h3, .price-cell h3 span, .widget-footer .tab-content-block h3.v_nav, .download-table .fa, .button, a.button:hover, a.btn:hover, .btn:hover .ficon, .ui-autocomplete li a, .ui-state-focus,
	 
	 /* WOO COMMERCE */
	 .woocommerce span.onsale, .woocommerce-page span.onsale,
	 
	 /* BBPRESS*/
	 #bbp_reply_submit, button.button, .bbp-pagination-links a.next.page-numbers, .bbp-pagination-links a.prev.page-numbers, .bbp-logged-in .button.logout-link,
	 
	 /* BUDDYPRESS */
	 #buddypress button, #buddypress a.button, #buddypress input[type="submit"], #buddypress input[type="button"], #buddypress input[type="reset"], #buddypress ul.button-nav li a, #buddypress div.generic-button a, #buddypress .comment-reply-link, a.bp-title-button, #buddypress button:hover, #buddypress a.button:hover, #buddypress input[type="submit"]:hover, #buddypress input[type="button"]:hover, #buddypress input[type="reset"]:hover, #buddypress ul.button-nav li a:hover, #buddypress div.generic-button a:hover, #buddypress .comment-reply-link:hover, a.bp-title-button:hover, #buddypress #profile-edit-form ul.button-nav li a, .bp-login-widget-user-links .bp-login-widget-user-logout a,
	 
	 /* EVENTS CALENDAR */
	 .tribe-events-event-cost span, a.tribe-events-read-more, a.tribe-events-read-more:hover, .tribe-events-list-widget .tribe-events-widget-link a
	  {
	 	color: #fff;
	    	<?php if (!empty($canon_options_appearance['color_white_text'])) echo "color: ".$canon_options_appearance['color_white_text'].";"; ?>
	 }
	 
	
	
	
	
	
	
	/* -----------------------------------||||||||| BODY BACKGROUND |||||||||||------------------------------------ */
	/* ------------------------------------------------------------------------------------------------------------ */
	
	/* BODY BACKGROUND */
	 body{
	   	background: #ffffff;  
	   	<?php if (!empty($canon_options_appearance['color_body'])) echo "background: ".$canon_options_appearance['color_body']."!important;"; ?>
	}
	
	


	
	
	
	/* -----------------------------------||||||||| PLATE BACKGROUND |||||||||||------------------------------------ */
	/* ------------------------------------------------------------------------------------------------------------- */
	
	/* PLATE */
	 .outter-wrapper, .price:hover, .price.price-feature, .price-table:hover, .price-table.price-table-feature, fieldset fieldset, .main table, 
	
	 /* WOO COMMERCE */
	 .woocommerce #payment div.payment_box, .woocommerce-page #payment div.payment_box, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active,
	 
	 /* BUDDYPRESS */
	 #buddypress div.item-list-tabs ul li.selected, #buddypress div.item-list-tabs ul li.current, #buddypress div.item-list-tabs ul li.selected a, #buddypress div.item-list-tabs ul li.current a, #buddypress .item-list-tabs.activity-type-tabs ul li.selected, #bbpress-forums div.odd, #bbpress-forums ul.odd,
	 
	 /* EVENTS CALENDAR */
	 .tribe-events-list-separator-month span, .single-tribe_events .tribe-events-schedule .tribe-events-cost
	  {
	   	background: #fff;  
	   	<?php if (!empty($canon_options_appearance['color_plate'])) echo "background: ".$canon_options_appearance['color_plate'].";"; ?>
	}
	
	
	
	
	
	
	/* -----------------------------------||||||||| HEADER BACKGROUND |||||||||||------------------------------------ */
	/* -------------------------------------------------------------------------------------------------------------- */
	
	/* HEADER */
	.outter-wrapper.header-container, .header-container .nav ul, .price h3, ol.graphs > li div.grey-btn, .btn.grey-btn, .price-cell.feature, .outter-wrapper.search-header-container, .ui-autocomplete li  {
		background: #1d2028;
	   	<?php if (!empty($canon_options_appearance['color_header_nav'])) echo "background: ".$canon_options_appearance['color_header_nav'].";"; ?>
	}
	
	
	
	
	
	
	/* -----------------------------------||||||||| PRE-HEADER BACKGROUND |||||||||||------------------------------------ */
	/* ------------------------------------------------------------------------------------------------------------------ */
	
	/* PRE/POST HEADER */
	.pre-header-container, .post-header-container, .pre-header-container ul, .post-header-container .nav ul, .pre-header-container .nav ul {
		background: #313540;
	   	<?php if (!empty($canon_options_appearance['color_preheader'])) echo "background: ".$canon_options_appearance['color_preheader'].";"; ?>
	}
	
	
	
	
	
	
	
	/* -----------------------------------||||||||| TERTIARY MENU BACKGROUND |||||||||||------------------------------------ */
	/* --------------------------------------------------------------------------------------------------------------------- */
	
	/* TERTIARY MENU BACKGROUND */
	.header-container .nav li:hover ul ul, .header-container .nav li:hover ul ul:before, .tp-bullets.simplebullets.round .bullet{
		background: #313540;
	   	<?php if (!empty($canon_options_appearance['color_third_nav'])) echo "background: ".$canon_options_appearance['color_third_nav'].";"; ?>
	}
	
	
	
	
	/* -----------------------------------||||||||| PRE/POST TERTIARY MENU BACKGROUND |||||||||||------------------------------------ */
	/* --------------------------------------------------------------------------------------------------------------------- */
	
	/* PRE/POST TERTIARY MENU BACKGROUND */
	 .pre-header-container ul ul.sub-menu ul.sub-menu, .post-header-container .nav li:hover ul ul, .post-header-container .nav li:hover ul ul:before, .pre-header-container ul li:hover ul ul:before{
		background: #242931;
	   	<?php if (!empty($canon_options_appearance['color_third_prenav'])) echo "background: ".$canon_options_appearance['color_third_prenav'].";"; ?>
	}
	
	
	
	
	
	
	/* -----------------------------------||||||||| FEATURE COLOUR BACKGROUND |||||||||||------------------------------------ */
	/* ---------------------------------------------------------------------------------------------------------------------- */
	
	/* FEATURE BACKGROUND */
	.header-container .nav .donate a:hover, feat-1, a.feat-1, .btn.orange-btn, a.btn.orange-btn, .btn:hover, .btn.hover, a.btn:hover, input[type=button]:hover, input[type=submit]:hover, .btn.active, .tp-caption.btn a:hover, a.tp-button,
	ol.graphs > li div, #menu-icon, ul.pagination .left a:hover, ul.pagination .right a:hover, ul.paging a:hover span, .tp-caption.btn a, ul.paging a span:hover, ul.page-numbers li a.next:hover, ul.page-numbers li a.prev:hover, ul.paging span:hover, .tp-button.default, .purchase.default, .purchase:hover.default, .price-feature .btn:hover, .price-feature a.btn:hover, .tp-bullets.simplebullets.round .bullet.selected, .skin_earth .pb_supporters .btn,  .skin_corporate .price-table-feature .price-cell.last .btn:hover,  .skin_earth .price-table-feature .price-cell.last .btn:hover, .owl-theme .owl-controls .owl-page.active span,
	.owl-theme .owl-controls.clickable .owl-page:hover span, .search_controls li.search_control_search,  .ui-state-focus,
	
	/* WOO COMMERCE */
	.woocommerce a.button:hover, .woocommerce button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce #content input.button:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce-page input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page #content input.button:hover, .woocommerce .shop_table.cart td.actions .button, .woocommerce .shop_table.cart td.actions .button.alt:hover, .woocommerce .woocommerce-message a.button,  .product .cart button.single_add_to_cart_button:hover, #place_order:hover, .woocommerce span.onsale, .woocommerce-page span.onsale,
	
	/* BBPRESS */
	#bbp_reply_submit:hover, button.button:hover, .bbp-pagination-links a.next.page-numbers:hover, .bbp-pagination-links a.prev.page-numbers:hover, .bbp-logged-in .button.logout-link:hover,
	
	/* BUDDYPRESS */
	#buddypress button:hover, #buddypress a.button:hover, #buddypress input[type="submit"]:hover, #buddypress input[type="button"]:hover, #buddypress input[type="reset"]:hover, #buddypress ul.button-nav li a:hover, #buddypress div.generic-button a:hover, #buddypress .comment-reply-link:hover, a.bp-title-button:hover, #buddypress #profile-edit-form ul.button-nav li a:hover, .bp-login-widget-user-logout a:hover,
	
	/* EVENTS CALENDAR */
	.tribe-events-read-more:hover, .tribe-events-list-widget .tribe-events-widget-link a:hover,  .tribe-events-event-cost span,
	
	/* GRAVITY FORMS */
	.gf_progressbar_percentage
	
	{
		background-color: #ffc000;
	   	<?php if (!empty($canon_options_appearance['color_feature_1'])) echo "background-color: ".$canon_options_appearance['color_feature_1'].";"; ?>
	}
	
	
	
	
	
	
	
	/* -----------------------------------||||||||| FEATURE COLOUR BACKGROUND 2 |||||||||||------------------------------------ */
	/* ------------------------------------------------------------------------------------------------------------------------ */
	
	/* FEATURE BACKGROUND 2 */
	.feat-2, a.feat-2, .btn, a.btn, input[type=button], input[type=submit], .flex-control-paging li a.flex-active, .price.price-feature h3,
	ol.graphs > li div.feat-2, a.tp-button:hover, .tp-button.blue, .purchase.blue, .purchase:hover.blue, .price-table-feature .price-cell.feature,  .skin_corporate .tp-button, .skin_earth .pb_supporters .btn:hover, .skin_earth .pb_supporters .btn.feat-3:hover, .search_controls li.search_control_close,  .search_controls li.search_control_search:hover, .search_controls li.search_control_close:hover,
	
	/* WOO COMMERCE */
	p.demo_store, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button,  .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt, .woocommerce-message:before, .woocommerce .shop_table.cart td.actions .button.alt, .woocommerce .shop_table.cart td.actions .button:hover, .woocommerce .woocommerce-message a.button:hover,
	
	/* BBPRESS */
	#bbp_reply_submit, button.button, .bbp-logged-in .button.logout-link,
	
	/* BUDDYPRESS */
	#buddypress button, #buddypress a.button, #buddypress input[type="submit"], #buddypress input[type="button"], #buddypress input[type="reset"], #buddypress ul.button-nav li a, #buddypress div.generic-button a, #buddypress .comment-reply-link, a.bp-title-button, #buddypress #profile-edit-form ul.button-nav li a, .bp-login-widget-user-logout a,
	
	/* EVENTS CALENDAR */
	.tribe-events-list-widget .tribe-events-widget-link a, .tribe-events-read-more
	{
		background: #4170a9;
	   	<?php if (!empty($canon_options_appearance['color_feature_2'])) echo "background: ".$canon_options_appearance['color_feature_2'].";"; ?>
	}
	
	
	
	
	
	
	
	/* -----------------------------------||||||||| FEATURE COLOUR BACKGROUND 3 |||||||||||------------------------------------ */
	/* ------------------------------------------------------------------------------------------------------------------------ */
	
	/* FEATURE BACKGROUND 3 */
	 .tp-caption.btn a:hover, ol.graphs > li div.feat-3, .btn.feat-3, .feat-3,  .vert-line:before, .vert-line:after, .timeline_load_more:hover, .tp-button.green,  .skin_earth .tp-button:hover,
	.purchase.green, .purchase:hover.green, .price-feature .btn, .price-feature a.btn, .skin_corporate .tp-button:hover,  .skin_corporate .price.price-feature h3, .skin_earth .price.price-feature h3, .skin_corporate .price-table-feature .price-cell.feature, .skin_corporate .price-table-feature .price-cell.last .btn, .skin_earth .price-table-feature .price-cell.feature, .skin_earth .price-table-feature .price-cell.last .btn, .search_controls li.search_control_close
	
	
	{
		background: #2f353f;
	   	<?php if (!empty($canon_options_appearance['color_feature_3'])) echo "background: ".$canon_options_appearance['color_feature_3'].";"; ?>
	}
	
	
	
	
	
	
	
	/* -----------------------------------||||||||| FEATURE COLOUR BACKGROUND 4 |||||||||||------------------------------------ */
	/* ------------------------------------------------------------------------------------------------------------------------ */
	
	/* FEATURE BACKGROUND 4 */
	.donate, .feat-3, a.feat-3, .skin_earth .pb_supporters .btn.feat-3 {
		background: #2f353f;
	   	<?php if (!empty($canon_options_appearance['color_feature_4'])) echo "background: ".$canon_options_appearance['color_feature_4'].";"; ?>
	}
	
	
	
	
	
	
	
	/* -----------------------------------||||||||| LIGHT BUTTON BACKGROUND |||||||||||------------------------------------ */
	/* ------------------------------------------------------------------------------------------------------------- */
	
	/* LIGHT BUTTON BACKGROUND */
	ul.pagination .left a, ul.pagination .right a, ul.paging a span, ul.page-numbers li a.next, ul.page-numbers li a.prev, ul.paging span, ul.tab-nav li, .vert-line, .owl-theme .owl-controls .owl-page span,
	
	/* BBPRESS */
	.bbp-pagination-links a.next.page-numbers, .bbp-pagination-links a.prev.page-numbers
	{
		background: #E8E8E8;
	   	<?php if (!empty($canon_options_appearance['color_light_button'])) echo "background: ".$canon_options_appearance['color_light_button'].";"; ?>
	}
	
	
	
	
	
	
	/* -----------------------------------||||||||| WHITE BACKGROUND |||||||||||------------------------------------ */
	/* ------------------------------------------------------------------------------------------------------------- */
	
	/* WHITE BACKGROUND */
	.white-btn, a.white-btn, .white-btn:hover, a.white-btn:hover, .owlCustomNavigation .btn, .owlCustomNavigation .btn:hover, .pb_gallery .main .isotope_filter_menu li a,
	
	/* EVENTS CALENDAR */
	.tribe-events-sub-nav li a
	{
		background: #ffffff;
	   	<?php if (!empty($canon_options_appearance['color_white_button'])) echo "background: ".$canon_options_appearance['color_white_button'].";"; ?>
	}
	
	
	
	
	
	
	
	/* -----------------------------------||||||||| DARK BACKGROUND |||||||||||------------------------------------- */
	/* ------------------------------------------------------------------------------------------------------------- */
	
	/* DARK BACKGROUND */
	#pax, .tp-button.darkgrey, .tp-button.grey, .tp-button:hover.grey, .purchase.darkgrey, .purchase:hover.darkgrey, .skin_corporate .price h3, .skin_corporate .price-cell.feature{
		background: #344158;
	   	<?php if (!empty($canon_options_appearance['color_dark_button'])) echo "background-color: ".$canon_options_appearance['color_dark_button'].";"; ?>
	}
	
	
	
	
	
	
	/* -----------------------------------||||||||| LIGHT BACKGROUND |||||||||||------------------------------------- */
	/* -------------------------------------------------------------------------------------------------------------- */
	
	/* LIGHT BACKGROUND */
	.price, .price-table, .timeline_load_more, .main table tr:nth-child(2n+1), .main table th, ul.sitemap li a, .boxed, 
	
	/* BUDDYPRESS */
	#bbpress-forums li.bbp-header, #bbpress-forums div.even, #bbpress-forums ul.even, #bbpress-forums li.bbp-header, #bbpress-forums li.bbp-footer, #bbpress-forums div.bbp-forum-header, #bbpress-forums div.bbp-topic-header, #bbpress-forums div.bbp-reply-header,
	
	/* EVENTS CALENDAR */
	.tribe-events-sub-nav li a:hover
	
	{
		background: #f7f7f7;
	   	<?php if (!empty($canon_options_appearance['color_price_table'])) echo "background: ".$canon_options_appearance['color_price_table'].";"; ?>
	}
	
	
	
	
	
	
	
	
	/* -----------------------------------||||||||| LIGHT BACKGROUND 2 |||||||||||------------------------------------- */
	/* -------------------------------------------------------------------------------------------------------------- */
	
	/* LIGHT BACKGROUND 2 */
	ul.timeline > li, ul.tab-nav li.active, .tab-content-block, ul.comments .odd, ol.graphs > li,
	
	/* EVENTS CALENDAR */
	.tribe-events-loop .hentry, .tribe-events-tcblock
	{
		background: #fbfbfb;
	   	<?php if (!empty($canon_options_appearance['color_elements'])) echo "background: ".$canon_options_appearance['color_elements'].";"; ?>
	}
	
	
	
	
	
	
	
	/* -----------------------------------||||||||| FORM ELEMENTS BACKGROUND |||||||||||------------------------------------- */
	/* ---------------------------------------------------------------------------------------------------------------------- */
	
	/* FORM ELEMENTS */
	input[type=text],  input[type=email], input[type=password], textarea, input[type=tel],  input[type=range], input[type=url], input[type=number],
	
	/* WOO COMMERCE */
	input.input-text, .woocommerce ul.products li.product, .woocommerce ul.products li.product.last .woocommerce-page ul.products li.product, .col2-set.addresses .address, .woocommerce-message, .woocommerce div.product .woocommerce-tabs ul.tabs li, .woocommerce #content div.product .woocommerce-tabs ul.tabs li, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li, .woocommerce #payment, .woocommerce-page #payment, .woocommerce-main-image img, input#coupon_code,
	
	/* BUDDYPRESS */
	#buddypress .item-list-tabs ul li, #buddypress .standard-form textarea, #buddypress .standard-form input[type="text"], #buddypress .standard-form input[type="text"], #buddypress .standard-form input[type="color"], #buddypress .standard-form input[type="date"], #buddypress .standard-form input[type="datetime"], #buddypress .standard-form input[type="datetime-local"], #buddypress .standard-form input[type="email"], #buddypress .standard-form input[type="month"], #buddypress .standard-form input[type="number"], #buddypress .standard-form input[type="range"], #buddypress .standard-form input[type="search"], #buddypress .standard-form input[type="tel"], #buddypress .standard-form input[type="time"], #buddypress .standard-form input[type="url"], #buddypress .standard-form input[type="week"], #buddypress .standard-form select, #buddypress .standard-form input[type="password"], #buddypress .dir-search input[type="search"], #buddypress .dir-search input[type="text"], #buddypress form#whats-new-form textarea, #buddypress div.activity-comments form textarea, #buddypress div.item-list-tabs ul li.selected a span, #buddypress div.item-list-tabs ul li.current a span
	{
		background: #f2f2f2;
	   	<?php if (!empty($canon_options_appearance['color_form_fields_bg'])) echo "background: ".$canon_options_appearance['color_form_fields_bg'].";"; ?>
		color: #969ca5;
	   	<?php if (!empty($canon_options_appearance['color_form_fields_text'])) echo "color: ".$canon_options_appearance['color_form_fields_text'].";"; ?>
	}
	
	
	
	
	
	
	
	/* -----------------------------------------||||||||| BORDERS |||||||||||------------------------------------- */
	/* ----------------------------------------------------------------------------------------------------------- */
	
	/* BORDERS */
	hr, .right-aside, blockquote.right, fieldset, .main table, .main table th, .main table td, .main ul.meta li, .text-seperator .line em, .tab-nav li.active, .tab-content-block, .tab-nav li, ul.toggle li, .boxed ul.social-link, .btn.white-btn, a.btn.white-btn,  a.white-btn, #fittext2, caption, .wp-caption-text, .tab-content-block, h3.v_nav, .message.promo, ul.timeline > li, ul.accordion li, .timeline_load_more,  li.tl_right:before, li.tl_left:before, .widget.trades_fact p, .cpt_people .social-link, ul.toggle li:first-child, ul.accordion li:first-child, ul.sc_accordion li, .price-detail ul li, .price-detail ul li:last-child, .price-cell, .hr-temp, aside ul li, ul.link-list li, ul.statistics li, .multi_nav_control, .highlight:after, blockquote, .owlCustomNavigation .btn, .pb_media .media_wrapper, .media_links, .pb_gallery .main .isotope_filter_menu li a, .text-seperator .line em,
	
	/* WOO COMMERCE */
	ul.products li .price, ul.products li h3, .woocommerce #payment div.payment_box, .woocommerce-page #payment div.payment_box, .col2-set.addresses .address, p.myaccount_user, .summary.entry-summary .price,  .summary.entry-summary .price, .product_meta .sku_wrapper, .product_meta .posted_in, .product_meta .tagged_as, .product_meta span:first-child, .woocommerce-message, .related.products, .woocommerce .widget_shopping_cart .total, .woocommerce-page .widget_shopping_cart .total, .woocommerce div.product .woocommerce-tabs ul.tabs li, .woocommerce #content div.product .woocommerce-tabs ul.tabs li, .woocommerce-page div.product .woocommerce-tabs ul.tabs li, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li, .woocommerce div.product .woocommerce-tabs ul.tabs:before, .woocommerce #content div.product .woocommerce-tabs ul.tabs:before, .woocommerce-page div.product .woocommerce-tabs ul.tabs:before, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs:before, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active, .woocommerce #reviews #comments ol.commentlist li img.avatar, .woocommerce-page #reviews #comments ol.commentlist li img.avatar, .woocommerce #reviews #comments ol.commentlist li .comment-text, .woocommerce-page #reviews #comments ol.commentlist li .comment-text, .upsells.products, .woocommerce #payment ul.payment_methods, .woocommerce-page #payment ul.payment_methods, .woocommerce form.login, .woocommerce form.checkout_coupon, .woocommerce form.register, .woocommerce-page form.login, .woocommerce-page form.checkout_coupon, .woocommerce-page form.register,
	
	/* BBPRESS */
	#bbp-user-navigation ul li, .widget_display_stats dl dt, .widget_display_stats dl dd, #bbpress-forums ul.bbp-lead-topic, #bbpress-forums ul.bbp-topics, #bbpress-forums ul.bbp-forums, #bbpress-forums ul.bbp-replies, #bbpress-forums ul.bbp-search-results, #bbpress-forums li.bbp-body ul.forum, #bbpress-forums li.bbp-body ul.topic, #bbpress-forums li.bbp-header, #bbpress-forums li.bbp-footer, div.bbp-forum-header, div.bbp-topic-header, div.bbp-reply-header,
	
	/* BUDDYPRESS */
	#buddypress .item-list-tabs ul li, #buddypress #item-nav .item-list-tabs ul, #buddypress div#subnav.item-list-tabs, #buddypress #subnav.item-list-tabs li, #bp-login-widget-form, #buddypress #members-directory-form div.item-list-tabs ul li, #buddypress #members-directory-form div.item-list-tabs ul, #buddypress .activity-comments ul li, #buddypress div.activity-comments > ul > li:first-child, #buddypress .item-list-tabs.activity-type-tabs ul, #buddypress div.item-list-tabs ul li a span,
	
	/* EVENTS CALENDAR */
	#tribe-bar-form, #tribe-bar-views, .tribe-events-list-separator-month, .tribe-events-loop .hentry, .tribe-events-sub-nav li a, .events-archive.events-gridview #tribe-events-content table .vevent, .single-tribe_events .tribe-events-schedule, .tribe-events-single-section.tribe-events-event-meta, .single-tribe_events #tribe-events-footer, .tribe-events-list-widget ol li, .tribe-events-tcblock,
	
	/* GRAVITY FORMS */
	.gf_progressbar 
	 {
		border-color: #eaeaea!important;
	   	<?php if (!empty($canon_options_appearance['color_lines'])) echo "border-color: ".$canon_options_appearance['color_lines']."!important;"; ?>
	}
	
	
	
	
	
	
	
	/* -----------------------------------||||||||| FOOTER BACKGROUND |||||||||||-------------------------------------------- */
	/* ---------------------------------------------------------------------------------------------------------------------- */
	
	/* FOOTER BACKGROUND */
	.widget-footer, .widget-footer table {
		background: #313540;
	   	<?php if (!empty($canon_options_appearance['color_footer_block'])) echo "background: ".$canon_options_appearance['color_footer_block'].";"; ?>
	}
	
	
	
	
	
	
	
	/* -----------------------------------||||||||| FOOTER BASE BACKGROUND |||||||||||-------------------------------------------- */
	/* --------------------------------------------------------------------------------------------------------------------------- */
	
	/* FOOTER BASE BACKGROUND */
		footer.outter-wrapper, .widget-footer ul.tab-nav li.active, .widget-footer .tab-content-block, .widget-footer table th, .widget-footer table tr:nth-child(2n+1), .widget-footer .tab-content-block h3.v_nav.v_active{
			background: #1d2028;
		   	<?php if (!empty($canon_options_appearance['color_footer_base'])) echo "background: ".$canon_options_appearance['color_footer_base'].";"; ?>
		}
	
	
	
	
	
	
	/* -----------------------------------||||||||| FOOTER HEADINGS |||||||||||-------------------------------------------- */
	/* -------------------------------------------------------------------------------------------------------------------- */
	
	/* FOOTER HEADINGS */
	.widget-footer h3, .time-date{
		color: #ffffff;
	   	<?php if (!empty($canon_options_appearance['color_footer_headings'])) echo "color: ".$canon_options_appearance['color_footer_headings'].";"; ?>
	}
	
	
	
	
	
	/* -----------------------------------||||||||| FOOTER TEXT |||||||||||-------------------------------------------- */
	/* ---------------------------------------------------------------------------------------------------------------- */
	
	/* FOOTER TEXT */
	.widget-footer, .widget-footer .tweet, .widget-footer a, footer ul.social-link a em:before, .widget-footer ul.accordion li, .widget-footer blockquote, footer .foot.left, footer .foot.left a, .widget-footer .tweet a, .widget-footer .tweet a *{
		color: #bdc0c6;
	   	<?php if (!empty($canon_options_appearance['color_footer_text'])) echo "color: ".$canon_options_appearance['color_footer_text'].";"; ?>
	}
	
	
	
	
	
	
	
	/* -----------------------------------||||||||| FOOTER FEATURE TEXT |||||||||||-------------------------------------------- */
	/* ------------------------------------------------------------------------------------------------------------------------ */
	
	/* FOOTER TEXT */
	.widget-footer a:hover, .widget-footer ul li:before,  .widget-footer .tweet:before,  .widget-footer .tweet > p:before, footer .foot.left a:hover, ul.social-link a:hover em:before, .widget-footer .tweet a:hover, .widget-footer .tweet a:hover * {
		color: #ffc000;
	   	<?php if (!empty($canon_options_appearance['color_footer_featuretext'])) echo "color: ".$canon_options_appearance['color_footer_featuretext'].";"; ?>
	}
	
	
	
	
	
	
	/* -----------------------------------||||||||| FOOTER BUTTONS |||||||||||-------------------------------------------- */
	/* ------------------------------------------------------------------------------------------------------------------- */
	
	/* FOOTER BUTTONS */
	.widget-footer a.btn, .widget-footer .btn{
		background: #4ec6e9;
		<?php if (!empty($canon_options_appearance['color_footer_button'])) echo "background: ".$canon_options_appearance['color_footer_button'].";"; ?>
	}
	
	
	
	
	
	
	/* -----------------------------------||||||||| FOOTER FORM FIELDS |||||||||||-------------------------------------------- */
	/* ----------------------------------------------------------------------------------------------------------------------- */
	
	/* FOOTER FORM FIELDS */
	.widget-footer input[type=text],  .widget-footer input[type=email], .widget-footer input[type=password], .widget-footer input[type=tel], .widget-footer textarea{
		background: #828995;
	   	<?php if (!empty($canon_options_appearance['color_footer_form_fields_bg'])) echo "background: ".$canon_options_appearance['color_footer_form_fields_bg'].";"; ?>
		color: #fff;
	   	<?php if (!empty($canon_options_appearance['color_footer_form_fields_text'])) echo "color: ".$canon_options_appearance['color_footer_form_fields_text'].";"; ?>
	}
	
	
	
	
	
	
	
	/* -----------------------------------||||||||| FOOTER FORM FIELDS FOCUS |||||||||||-------------------------------------------- */
	/* ----------------------------------------------------------------------------------------------------------------------------- */
	
	/* FOOTER FORM FIELDS FOCUS */
	.widget-footer input[type=text]:focus,  .widget-footer input[type=email]:focus, .widget-footer input[type=password]:focus, .widget-footer ul.tab-nav li, .widget-footer input[type=tel]:focus, .widget-footer textarea:focus,  .widget-footer .tab-content-block h3.v_nav, .pb_posts_graph {
		background: #6d7482;
	   	<?php if (!empty($canon_options_appearance['color_footer_form_fields_focus'])) echo "background: ".$canon_options_appearance['color_footer_form_fields_focus'].";"; ?>
	}
	
	
	
	
	
	
	/* -----------------------------------||||||||| FOOTER BORDERS |||||||||||------------------------------------------------ */
	/* ----------------------------------------------------------------------------------------------------------------------- */	
	
	/* FOOTER BORDERS */
	.widget-footer ul.tab-nav li, .widget-footer .tab-content-block, .widget-footer ul.accordion li, .widget-footer ul.link-list li, .widget-footer ul.statistics li, .widget-footer #bp-login-widget-form, .widget-footer .bbp-login-form fieldset, .widget-footer fieldset, .widget-footer .widget_display_stats dl dd, .widget-footer table, .widget-footer table th, .widget-footer table td, .widget-footer caption, .widget-footer .tab-content-block h3.v_nav{
		border-color: #4B525D!important;
	   	<?php if (!empty($canon_options_appearance['color_footlines'])) echo "border-color: ".$canon_options_appearance['color_footlines']."!important;"; ?>
	}
	@media only screen and (max-width: 768px) { 
		.widget-footer .widget{
			border-color: #4B525D!important;
			<?php if (!empty($canon_options_appearance['color_footlines'])) echo "border-color: ".$canon_options_appearance['color_footlines']."!important;"; ?>
		}
	
	}
	
	
	
	
	
		/* Feature block - Blue */
		.callout-block {
			background: #f1f1f1;
		   	<?php if (!empty($canon_options_appearance['color_feature_block'])) echo "background: ".$canon_options_appearance['color_feature_block'].";"; ?>
		}
	

	
	
		/* Feature block 2 - Light Blue */
		.social-block{
			background: #e1f5fb;	
		   	<?php if (!empty($canon_options_appearance['color_feature_block_2'])) echo "background: ".$canon_options_appearance['color_feature_block_2'].";"; ?>
		}
		
	
	
	
	
	
	
	
	
	
	
	/* ==========================================================================
	   HEADER
	   ========================================================================== */
	
	/* LOGO MAX WIDTH */

		.logo{
			max-width: 104px; 
			<?php if (!empty($canon_options_frame['logo_max_width'])) echo "max-width: ".$canon_options_frame['logo_max_width']."px;"; ?>
		}

	/* HEADER PADDING*/

		.header-container .wrapper{
			padding-top: 0px;
			<?php if ($canon_options_frame['header_padding_top'] > -1) echo "padding-top: ".$canon_options_frame['header_padding_top']."px;"; ?>

			padding-bottom: 0px;
			<?php if ($canon_options_frame['header_padding_bottom'] > -1) echo "padding-bottom: ".$canon_options_frame['header_padding_bottom']."px;"; ?>
		}   

	/* HEADER ELEMENTS POSITIONING */

		.main-header.left {
			position: relative;	
			top: 0px;
			<?php if (!empty($canon_options_frame['pos_left_element_top'])) echo "top: ".$canon_options_frame['pos_left_element_top']."px;"; ?>
			left: 0px;
			<?php if (!empty($canon_options_frame['pos_left_element_left'])) echo "left: ".$canon_options_frame['pos_left_element_left']."px;"; ?>
		}

		.main-header.right {
			position: relative;	
			top: 0px;
			<?php if (!empty($canon_options_frame['pos_right_element_top'])) echo "top: ".$canon_options_frame['pos_right_element_top']."px;"; ?>
			right: 0px;
			<?php if (!empty($canon_options_frame['pos_right_element_right'])) echo "right: ".$canon_options_frame['pos_right_element_right']."px;"; ?>
		}

	/* TEXT AS LOGO SIZE */

		.logo-text {
			<?php if (isset($canon_options_frame['logo_text_size'])) echo "font-size: ".$canon_options_frame['logo_text_size']."px;"; ?>
		}


	/* ANIMATE MENUS */

		<?php if (isset($canon_options_appearance['anim_menus'])) {echo $canon_options_appearance['anim_menus'];} ?> > li {
			opacity: 0;
			<?php 
				$anim_menus_enter = (isset($canon_options_appearance['anim_menus_enter'])) ? $canon_options_appearance['anim_menus_enter'] : 'left';
				$anim_menus_move = (isset($canon_options_appearance['anim_menus_move'])) ? $canon_options_appearance['anim_menus_move'] : '0';

				if ($anim_menus_enter == 'right') {
					$anim_menus_enter = 'left';
					$anim_menus_move = '-' . $anim_menus_move;
				}
				if ($anim_menus_enter == 'bottom') {
					$anim_menus_enter = 'top';
					$anim_menus_move = '-' . $anim_menus_move;
				}

				printf('%s: %spx;', $anim_menus_enter, $anim_menus_move);
			?>
		}












	/* ==========================================================================
		Theme Fonts
	========================================================================== */



		
		/* ----------------------------------------||||||||| BODY TEXT |||||||||||------------------------------------------------ */
		/* ----------------------------------------------------------------------------------------------------------------------- */
		
		/* BODY TEXT */  
		body, h3.v_nav, ul.accordion li, #bbpress-forums, .main .fa *, ul.accordion li a.accordion-btn:before, ul.toggle li a.toggle-btn:before,
		
		/* BBRESS */
		.bbp-topic-header .bbp-meta, #bbpress-forums .bbp-topic-header .bbp-meta a.bbp-topic-permalink {
			 font-family: 'robotolight';
			<?php if ($canon_options_appearance['font_main'][0] != 'canon_default') echo mb_get_css_from_google_webfonts_settings_array($canon_options_appearance['font_main']); ?>
		}
		
		
		
		
		
		/* ----------------------------------------||||||||| QUOTE TEXT |||||||||||------------------------------------------------ */
		/* ------------------------------------------------------------------------------------------------------------------------ */
		
		/* QUOTE TEXT */   
		blockquote, .tweet, .post-type-quote, .tweet b, aside .tweet, .widget-footer .tweet, .post-type-tweet, .parallax-block h4, .parallax-block h5, .callout-block h5,
		
		/* BUDDYPRESS */
		#buddypress div#item-header div#item-meta
		{
			 font-family: 'merriweatherlight_italic';
			<?php if ($canon_options_appearance['font_quote'][0] != 'canon_default') echo mb_get_css_from_google_webfonts_settings_array($canon_options_appearance['font_quote']); ?>
		}
		
		
		
		
		/* ----------------------------------------||||||||| LEAD TEXT |||||||||||------------------------------------------------- */
		/* ------------------------------------------------------------------------------------------------------------------------ */
		
		/* LEADIN TEXT */ 
		.lead{
			   font-family: 'roboto_slablight';
			<?php if ($canon_options_appearance['font_lead'][0] != 'canon_default') echo mb_get_css_from_google_webfonts_settings_array($canon_options_appearance['font_lead']); ?>
		}
		
		
		
		
		
		/* ----------------------------------------||||||||| LOGO TEXT |||||||||||------------------------------------------------- */
		/* ------------------------------------------------------------------------------------------------------------------------ */
		
		/* LOGO TEXT */
		.logo-text{
			 font-family: 'robotolight';
			<?php if ($canon_options_appearance['font_logotext'][0] != 'canon_default') echo mb_get_css_from_google_webfonts_settings_array($canon_options_appearance['font_logotext']); ?>
		}
		
		
		
		
		/* ----------------------------------------||||||||| BOLD TEXT |||||||||||------------------------------------------------- */
		/* ------------------------------------------------------------------------------------------------------------------------ */
					
		/* BOLD TEXT */ 
		strong, h5, h6, b, .more, ol > li:before, .comment-reply-link, .comment-edit-link, ul.pagination li, ul.paging li, ul.page-numbers li, .link-pages p, #comments_pagination, ol.graphs > li, label, .price h3 span, .feature-link, legend, ul.tab-nav li,
		
		/* WOO COMMERCE*/
		.woocommerce span.onsale, .woocommerce-page span.onsale,
		
		/* BBPRESS*/
		#bbpress-forums .bbp-forum-title, #bbpress-forums .bbp-topic-permalink, #bbpress-forums div.bbp-forum-title h3, #bbpress-forums div.bbp-topic-title h3, #bbpress-forums div.bbp-reply-title h3, .bbp-pagination-links a, .bbp-pagination-links span.current,
		
		/* BUDDYPRESS */
		#buddypress .activity-meta a.bp-primary-action span
		  {
			 font-family: 'robotomedium';
			<?php if ($canon_options_appearance['font_bold'][0] != 'canon_default') echo mb_get_css_from_google_webfonts_settings_array($canon_options_appearance['font_bold']); ?>
		}
		
		
		
		
		
		/* ----------------------------------------||||||||| BUTTON TEXT |||||||||||------------------------------------------------- */
		/* -------------------------------------------------------------------------------------------------------------------------- */
		
		/* BUTTON TEXT */
		.btn, .tp-button, ol.graphs > li, .btn, input[type=button], input[type=submit], .button, cite,
		
		/* BUDDYPRESS */
		 #buddypress #profile-edit-form ul.button-nav li a, .bp-login-widget-user-logout a, #buddypress button, #buddypress a.button, #buddypress input[type="submit"], #buddypress input[type="button"], #buddypress input[type="reset"], #buddypress ul.button-nav li a, #buddypress div.generic-button a, #buddypress .comment-reply-link, a.bp-title-button, #buddypress #profile-edit-form ul.button-nav li a, .bp-login-widget-user-logout a,
		 
		 /* EVENTS CALENDAR */
		 .tribe-events-read-more, .tribe-events-list-widget .tribe-events-widget-link a
		 {
			font-family: 'robotoregular';
			<?php if ($canon_options_appearance['font_button'][0] != 'canon_default') echo mb_get_css_from_google_webfonts_settings_array($canon_options_appearance['font_button']); ?>
		}
		
		
		
		
		
		/* ----------------------------------------||||||||| ITALIC TEXT |||||||||||------------------------------------------------- */
		/* -------------------------------------------------------------------------------------------------------------------------- */
		
		/* ITALIC TEXT */ 
		.error[generated=true], .wp-caption-text, span.wpcf7-not-valid-tip{
			 font-family: 'robotolight_italic';
			<?php if ($canon_options_appearance['font_italic'][0] != 'canon_default') echo mb_get_css_from_google_webfonts_settings_array($canon_options_appearance['font_italic']); ?>
		}
		
		
		
		
		
		/* ----------------------------------------||||||||| MAIN HEADINGS TEXT |||||||||||------------------------------------------------- */
		/* --------------------------------------------------------------------------------------------------------------------------------- */
		
		/* MAIN HEADING TEXT */ 
		h1, h2, .coms h4, .countdown_section, h4, blockquote.bq2 cite, .widget-footer h3, .callout-block h4,
		
		 /* EVENTS CALENDAR */
		.tribe-events-tooltip h4, .single-tribe_events .tribe-events-schedule .tribe-events-cost
		{
			 font-family: 'merriweatherregular';
			<?php if ($canon_options_appearance['font_heading'][0] != 'canon_default') echo mb_get_css_from_google_webfonts_settings_array($canon_options_appearance['font_heading']); ?>
		}
		
		
		
		
		
		/* ----------------------------------------||||||||| SECOND HEADINGS TEXT |||||||||||------------------------------------------------- */
		/* ----------------------------------------------------------------------------------------------------------------------------------- */
		
		/* SECOND HEADINGS TEXT */
		h3, h5, h6, .text-seperator h5, h3 label, .widget-title, .sc_accordion-btn, .accordion-btn, .toggle-btn, .sc_toggle-btn, .canon_animated_number h1, .countdown_amount, h4.fittext
		{
			  font-family: 'merriweatherbold';
			<?php if ($canon_options_appearance['font_heading2'][0] != 'canon_default') echo mb_get_css_from_google_webfonts_settings_array($canon_options_appearance['font_heading2']); ?>
		}
		
		
		
		
		
		
		/* ----------------------------------------------------||||||||| NAV TEXT |||||||||||------------------------------------------------- */
		/* ----------------------------------------------------------------------------------------------------------------------------------- */
		
		/* NAV STYLE TEXT */ 
		.nav a, #menu-icon, .main ul.meta li, aside ul li, .boxed h5, .feature-heading p.heading, aside ul li, ul.link-list li, ul.statistics li,
		ul.comments h5, ul.comments h6, input[type=text],  input[type=email], input[type=password], textarea, input[type=tel], input[type=url], input[type=date], input[type=range], .error[generated=true], .corner-date, h3.title, #scrollUp,  .widget-footer .tab-content-block h3.v_nav,  .pre-header-container,
		
		/* BBPRESS */
		#bbpress-forums .forum-titles li, .forums.bbp-replies li.bbp-header div, .forums.bbp-replies li.bbp-footer div, #bbpress-forums .forums.bbp-search-results li.bbp-header div, #bbpress-forums .forums.bbp-search-results li.bbp-footer div, #bbpress-forums #bbp-user-wrapper h2.entry-title, #bbpress-forums #bbp-single-user-details #bbp-user-navigation a, .bbp-logged-in h4, .widget_display_stats dl dt,
		
		/* BUDDYPRESS */
		#buddypress .item-list-tabs ul li, #buddypress table th, #buddypress table tr td.label, .widget.buddypress .bp-login-widget-user-links > div.bp-login-widget-user-link a, #buddypress div.activity-comments form div.ac-reply-content a,
		
		/* EVENTS CALENDAR */
		.tribe-events-list-separator-month span, .tribe-events-sub-nav li a, .tribe-events-event-cost span, .tribe-events-event-meta .time-details, .tribe-events-event-meta .tribe-events-venue-details *, .tribe-events-tooltip .date-start.dtstart, .tribe-events-tooltip .date-end.dtend, .tribe-events-list-widget ol li .duration
		 {
			font-family: 'robotoregular';
			<?php if ($canon_options_appearance['font_nav'][0] != 'canon_default') echo mb_get_css_from_google_webfonts_settings_array($canon_options_appearance['font_nav']); ?>
		}
		
		
		
		
		
		/* ----------------------------------------------------||||||||| NAV TEXT |||||||||||------------------------------------------------- */
		/* ----------------------------------------------------------------------------------------------------------------------------------- */
		
		/* WIDGET FOOTER TEXT */ 
		.widget-footer, footer, .widget-footer ul.accordion li {
			font-family: 'robotolight';
			<?php if ($canon_options_appearance['font_widget_footer'][0] != 'canon_default') echo mb_get_css_from_google_webfonts_settings_array($canon_options_appearance['font_widget_footer']); ?>
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	/* ==========================================================================
	   Background
	   ========================================================================== */
		   
		 /*Background Option for Site */
		body{
			<?php if (!empty($canon_options_appearance['bg_img_url'])) echo 'background-image: url("' . $canon_options_appearance['bg_img_url'] . '")!important;'; ?>
			<?php if (isset($canon_options_appearance['bg_repeat'])) echo 'background-repeat: ' . $canon_options_appearance['bg_repeat'] . '!important;'; ?>
			<?php if (isset($canon_options_appearance['bg_attachment'])) echo 'background-attachment: ' . $canon_options_appearance['bg_attachment'] .'!important;'; ?>
			background-position: top center;
			<?php if (isset($canon_options_appearance['bg_link'])) { if (!empty($canon_options_appearance['bg_link'])) { echo "cursor: pointer;"; } } ;?>
		} 

		body div {
			cursor: auto;	
		}
		
		@media only screen and (max-width: 768px) { 
				#primary_menu, #primary_menu ul, #primary_menu, #menu-icon.active  {
					background-color: #282D36; 
					<?php if (!empty($canon_options_appearance['color_responsive_menu'])) echo "background-color: ".$canon_options_appearance['color_responsive_menu'].";"; ?>
				}
				
		}  

		    
	/* ==========================================================================
	   FINAL CALL CSS
	   ========================================================================== */
		   
		
		/* FINAL CALL CSS */
		<?php if ($canon_options_advanced['use_final_call_css'] == "checked" && !empty($canon_options_advanced['final_call_css'])) { echo $canon_options_advanced['final_call_css']; } ?>


	</style>


<?php 

        // dev_mode
        if ($canon_options['dev_mode'] == "checked") {
            if (isset($_GET['preview_style'])) { 
                get_template_part('inc/templates/preview/'.wp_filter_nohtml_kses($_GET['preview_style']));
            }
        }


	} // end function canon_dynamic_css