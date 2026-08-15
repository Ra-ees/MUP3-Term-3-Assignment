<?php
/**
 * ======================================================
 * Élan Wellness Spa Theme Functions
 * ======================================================
 *
 * @package ElanWellnessSpa
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/* ======================================================
   THEME CONSTANTS
====================================================== */


define(
	'ELAN_THEME_VERSION',
	wp_get_theme()->get( 'Version' )
);


define(
	'ELAN_THEME_PATH',
	get_template_directory()
);


define(
	'ELAN_THEME_URI',
	get_template_directory_uri()
);



/* ======================================================
   THEME SETUP
====================================================== */


function elan_theme_setup() {


	/*
	 * Translation Support
	 */

	load_theme_textdomain(
		'elan-wellness-spa',
		ELAN_THEME_PATH . '/languages'
	);



	/*
	 * WordPress Features
	 */

	add_theme_support(
		'title-tag'
	);


	add_theme_support(
		'post-thumbnails'
	);


	add_theme_support(
		'automatic-feed-links'
	);



	/*
	 * HTML5 Support
	 */

	add_theme_support(
		'html5',
		array(

			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',

		)
	);



	/*
	 * Custom Logo Support
	 */

	add_theme_support(
		'custom-logo',
		array(

			'height'      => 120,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,

		)
	);



	/*
	 * Responsive Media
	 */

	add_theme_support(
		'responsive-embeds'
	);



	/*
	 * Wide Alignment Support
	 */

	add_theme_support(
		'align-wide'
	);



	/*
	 * Editor Styling
	 */

	add_theme_support(
		'editor-styles'
	);



}

add_action(
	'after_setup_theme',
	'elan_theme_setup'
);




/* ======================================================
   CONTENT WIDTH
====================================================== */


function elan_content_width() {


	$GLOBALS['content_width'] = apply_filters(
		'elan_content_width',
		1200
	);


}


add_action(
	'after_setup_theme',
	'elan_content_width',
	0
);





/* ======================================================
   REGISTER NAVIGATION MENUS
====================================================== */


function elan_register_menus() {


	register_nav_menus(

		array(

			'primary' => esc_html__(
				'Primary Navigation',
				'elan-wellness-spa'
			),


			'footer' => esc_html__(
				'Footer Navigation',
				'elan-wellness-spa'
			)

		)

	);


}


add_action(
	'after_setup_theme',
	'elan_register_menus'
);





/* ======================================================
   CUSTOM IMAGE SIZES
====================================================== */


function elan_image_sizes() {


	add_image_size(
		'elan-hero',
		1920,
		1080,
		true
	);



	add_image_size(
		'elan-service',
		700,
		500,
		true
	);



	add_image_size(
		'elan-treatment',
		900,
		700,
		true
	);



	add_image_size(
		'elan-profile',
		600,
		600,
		true
	);



}


add_action(
	'after_setup_theme',
	'elan_image_sizes'
);

/* ======================================================
   ENQUEUE THEME STYLES & SCRIPTS
====================================================== */


function elan_enqueue_assets() {


	/*
	|--------------------------------------------------------------------------
	| Theme Stylesheet
	|--------------------------------------------------------------------------
	*/

	wp_enqueue_style(

		'elan-style',

		get_stylesheet_uri(),

		array(),

		ELAN_THEME_VERSION

	);



	/*
	|--------------------------------------------------------------------------
	| Tailwind Compiled CSS
	|--------------------------------------------------------------------------
	*/

	$output_css = ELAN_THEME_PATH . '/assets/css/output.css';


	if ( file_exists( $output_css ) ) {


		wp_enqueue_style(

			'elan-tailwind',

			ELAN_THEME_URI . '/assets/css/output.css',

			array(
				'elan-style'
			),

			filemtime( $output_css )

		);


	}




	/*
	|--------------------------------------------------------------------------
	| Google Fonts
	|--------------------------------------------------------------------------
	*/

	wp_enqueue_style(

		'elan-google-fonts',

		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap',

		array(),

		null

	);





	/*
	|--------------------------------------------------------------------------
	| Font Awesome
	|--------------------------------------------------------------------------
	*/

	wp_enqueue_style(

		'elan-fontawesome',

		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',

		array(),

		'6.7.2'

	);






	/*
	|--------------------------------------------------------------------------
	| Main JavaScript
	|--------------------------------------------------------------------------
	*/


	$elan_script = ELAN_THEME_PATH . '/assets/js/script.js';


	if ( file_exists( $elan_script ) ) {


		wp_enqueue_script(

			'elan-script',

			ELAN_THEME_URI . '/assets/js/script.js',

			array(),

			filemtime( $elan_script ),

			true

		);


	}





	/*
	|--------------------------------------------------------------------------
	| WordPress Comment Reply
	|--------------------------------------------------------------------------
	*/

	if (

		is_singular()

		&& comments_open()

		&& get_option( 'thread_comments' )

	) {


		wp_enqueue_script(
			'comment-reply'
		);


	}


}


add_action(

	'wp_enqueue_scripts',

	'elan_enqueue_assets'

);

/* ======================================================
   BODY CLASS CUSTOMIZATION
====================================================== */


function elan_body_classes( $classes ) {


	/*
	 * Homepage class
	 */

	if ( is_front_page() ) {

		$classes[] = 'elan-home';

	}



	/*
	 * Pages class
	 */

	if ( is_page() ) {

		$classes[] = 'elan-page';

	}



	/*
	 * Blog / Single Content
	 */

	if ( is_single() ) {

		$classes[] = 'elan-single';

	}



	return $classes;


}


add_filter(
	'body_class',
	'elan_body_classes'
);





/* ======================================================
   SVG UPLOAD SUPPORT
====================================================== */


function elan_allow_svg_uploads( $mimes ) {


	$mimes['svg'] = 'image/svg+xml';


	return $mimes;


}


add_filter(
	'upload_mimes',
	'elan_allow_svg_uploads'
);






/* ======================================================
   CUSTOM LOGIN PAGE LOGO
====================================================== */


function elan_login_logo() {

?>

<style>

.login h1 a {

	background-image:
	url('<?php echo esc_url( ELAN_THEME_URI . "/assets/images/logo.png" ); ?>');

	background-size: contain;

	background-repeat: no-repeat;

	width: 280px;

	height: 100px;

}

</style>


<?php

}


add_action(
	'login_enqueue_scripts',
	'elan_login_logo'
);






/* ======================================================
   LOGIN LOGO LINK
====================================================== */


function elan_login_logo_url() {


	return home_url();


}


add_filter(
	'login_headerurl',
	'elan_login_logo_url'
);






/* ======================================================
   LOGIN LOGO TITLE
====================================================== */


function elan_login_logo_title() {


	return get_bloginfo(
		'name'
	);


}


add_filter(
	'login_headertext',
	'elan_login_logo_title'
);







/* ======================================================
   FOOTER COPYRIGHT FUNCTION
====================================================== */


function elan_footer_copyright() {


	$copyright = get_theme_mod(

		'elan_footer_copyright',

		'© ' . date('Y') . ' Élan Wellness Spa. All Rights Reserved.'

	);



	echo esc_html(
		$copyright
	);


}





/* ======================================================
   IMAGE QUALITY OPTIMIZATION
====================================================== */


function elan_image_quality() {


	return 90;


}


add_filter(
	'jpeg_quality',
	'elan_image_quality'
);





/* ======================================================
   ADD LAZY LOADING SUPPORT
====================================================== */


function elan_lazy_loading_attributes( $attr ) {


	$attr['loading'] = 'lazy';


	return $attr;


}


add_filter(
	'wp_get_attachment_image_attributes',
	'elan_lazy_loading_attributes'
);

/* ======================================================
   REMOVE WORDPRESS EMOJI SCRIPTS
====================================================== */


function elan_disable_emojis() {


	remove_action(
		'wp_head',
		'print_emoji_detection_script',
		7
	);


	remove_action(
		'wp_print_styles',
		'print_emoji_styles'
	);


}


add_action(
	'init',
	'elan_disable_emojis'
);





/* ======================================================
   CLEAN WORDPRESS HEADER OUTPUT
====================================================== */


function elan_cleanup_head() {


	/*
	 * Remove WordPress version
	 */

	remove_action(
		'wp_head',
		'wp_generator'
	);



	/*
	 * Remove REST API links
	 */

	remove_action(
		'wp_head',
		'rest_output_link_wp_head'
	);



	/*
	 * Remove Windows Live Writer
	 */

	remove_action(
		'wp_head',
		'wlwmanifest_link'
	);



	/*
	 * Remove Really Simple Discovery
	 */

	remove_action(
		'wp_head',
		'rsd_link'
	);



	/*
	 * Remove shortlink
	 */

	remove_action(
		'wp_head',
		'wp_shortlink_wp_head'
	);


}


add_action(
	'init',
	'elan_cleanup_head'
);







/* ======================================================
   REMOVE WORDPRESS VERSION FROM ASSETS
====================================================== */


function elan_remove_version_query( $src ) {


	if (

		strpos(
			$src,
			'ver='
		)

	!== false

	) {


		$src = remove_query_arg(
			'ver',
			$src
		);


	}


	return $src;


}


add_filter(
	'style_loader_src',
	'elan_remove_version_query',
	9999
);


add_filter(
	'script_loader_src',
	'elan_remove_version_query',
	9999
);






/* ======================================================
   DISABLE XML-RPC
====================================================== */


add_filter(
	'xmlrpc_enabled',
	'__return_false'
);







/* ======================================================
   ADD THEME SUPPORT FOR TITLE TAG FALLBACK
====================================================== */


function elan_document_title_separator( $separator ) {


	return '|';


}


add_filter(
	'document_title_separator',
	'elan_document_title_separator'
);






/* ======================================================
   ADD SECURITY HEADERS
====================================================== */


function elan_security_headers() {


	if ( ! is_admin() ) {


		header(
			'X-Content-Type-Options: nosniff'
		);


		header(
			'X-Frame-Options: SAMEORIGIN'
		);


		header(
			'Referrer-Policy: strict-origin-when-cross-origin'
		);


	}


}


add_action(
	'send_headers',
	'elan_security_headers'
);







/* ======================================================
   DISABLE GUTENBERG BLOCK CSS
====================================================== */


function elan_remove_block_css() {


	wp_dequeue_style(
		'wp-block-library'
	);


	wp_dequeue_style(
		'wp-block-library-theme'
	);


}


add_action(
	'wp_enqueue_scripts',
	'elan_remove_block_css',
	100
);







/* ======================================================
   END OF ÉLAN WELLNESS SPA FUNCTIONS
====================================================== */
