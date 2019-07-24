<?php
register_nav_menus( array(
		'menu-uc' => __( 'menu-uc'),
		'menu-ppal' => __( 'menu-ppal'),
		'menu-local' => __( 'menu-local'),
) );

/*add_action('init', 'my_init_method'); */

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

/*  Diferentes tipos de sidebar (que van en el Footer) */
register_sidebar(array(
  'name' => 'footer area 1 mobile',
  'id' => 'footer1_mobile',
	'before_widget' => '<div class="col-sm-4 hidden-sm hidden-md hidden-lg"><div class="container__widget">',
  'after_widget' => '</div></div>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>',
));
register_sidebar(array(
  'name' => 'footer area 1 ',
  'id' => 'footer1',
	'before_widget' => '<div class="col-sm-6 col-md-4 hidden-xs"><div class="container__widget">',
  'after_widget' => '</div></div>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>',
));
register_sidebar(array(
  'name' => 'footer area 2 mobile',
  'id' => 'footer2_mobile',
	'before_widget' => '<div class="col-sm-4 hidden-sm hidden-md hidden-lg"><div class="container__widget">',
  'after_widget' => '</div></div>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>',
));
register_sidebar(array(
  'name' => 'footer area 2 desktop',
  'id' => 'footer2_desktop',
	'before_widget' => '<div class="col-sm-6 col-md-4 col-md-4 hidden-xs"><div class="container__widget">',
  'after_widget' => '</div></div>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>',
));
register_sidebar(array(
  'name' => 'footer area 3',
  'id' => 'footer3',
	'before_widget' => '<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0"><div class="container__widget">',
  'after_widget' => '</div></div>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>',
));
?>
