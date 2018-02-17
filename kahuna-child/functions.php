<?php
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
  wp_enqueue_style( ResponsiveStyle, get_stylesheet_directory_uri() . '/ResponsiveStyle.css' );
  wp_enqueue_style( SinglePageStyle, get_stylesheet_directory_uri() . '/SinglePageStyle.css' );
  wp_enqueue_style( SinglePost, get_stylesheet_directory_uri() . '/SinglePost.css' );
  wp_enqueue_style( EventPage, get_stylesheet_directory_uri() . '/EventPage.css' );
  wp_enqueue_style( DonateNowStyle, get_stylesheet_directory_uri() . '/DonateNowStyle.css' );
  
  
}


add_action('wp_enqueue_scripts', 'child_scripts');

function child_scripts() {
	wp_enqueue_script('MyScripts', get_stylesheet_directory_uri() . '/scripts/scripts.js',  array('jquery'), null, true);

}


//Adds widget area for "Our Story"
add_action( 'widgets_init', 'our_story_widget_area' );

function our_story_widget_area() {

	register_sidebar( array(
		'name'          => 'Our Story Widget Area',
		'id'            => 'our_story_box',
		
	) );

}

//Adds widget are for video
add_action( 'widgets_init', 'video_widget_area' );

function video_widget_area() {

	register_sidebar( array(
		'name'          => 'Video Widget Area',
		'id'            => 'video_box',
		
	) );

}




//Adds widget area for "About NCCELC"
add_action( 'widgets_init', 'about_nccelc_widget_area' );

function about_nccelc_widget_area() {

	register_sidebar( array(
		'name'          => 'About NCCELC Widget Area',
		'id'            => 'about_nccelc_box',
		
	) );

}


//Adds widget area for Recent News
add_action( 'widgets_init', 'recent_news_widget_area' );

function recent_news_widget_area() {

	register_sidebar( array(
		'name'          => 'Recent News Widget Area',
		'id'            => 'recent_news_box',
		
	) );

}



//Adds widget area for Recent News
add_action( 'widgets_init', 'support_widget_area' );

function support_widget_area() {

	register_sidebar( array(
		'name'          => 'Your Support Matters Widget Area',
		'id'            => 'support_matters_box',
		
	) );

}


//Creates navbar for bottom area
function register_menu_bottom() {
  register_nav_menu('new-menu',__( 'Bottom Nav Menu' ));
}
add_action( 'init', 'register_menu_bottom' );



 


//Creates widget area to add social icons in footer
add_action( 'widgets_init', 'social_widget_area' );

function social_widget_area() {

	register_sidebar( array(
		'name'          => 'Social Media Widget Area Footer',
		'id'            => 'social_box',
		
	) );

}



//Creates widget area for individual page side bar 
add_action( 'widgets_init', 'sidebar_page_area' );

function sidebar_page_area() {

	register_sidebar( array(
		'name'          => 'Individual Page Widget Area',
		'id'            => 'indiv_sidebar_box',
		
	) );

}





//Creates widget area for individual page side bar 
add_action( 'widgets_init', 'Leadership_page_area' );
function Leadership_page_area() {
	register_sidebar( array(
		'name'          => 'Leadership Page Widget Area',
		'id'            => 'leadership_sidebar_box'
		
	)

	);

}






//Creates widget area for individual page side bar 
add_action( 'widgets_init', 'DonationExplanation' );


function DonationExplanation() {
	register_sidebar( array(
		'name'          => 'Donation Explanation Widget Area',
		'id'            => 'donation_sidebar_box'
		
	)

	);

}







function custom_theme_setup() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function my_custom_post_types() {
	register_post_type( 'leadership', 
		array( 'public' => true, 
				'label' => 'Leadership',
				'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions')
		) );
}
add_action( 'init', 'my_custom_post_types' );






?>