<?php 
function import_styles() {
 	//stylesheeet
 	wp_enqueue_style('main_style',get_stylesheet_uri());
 	wp_enqueue_style('style_fileone',get_template_directory_uri().'/css/bootstrap.min.css');
 	wp_enqueue_style('style_filetwo',get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');
 	wp_enqueue_style('style_filethree',get_template_directory_uri().'/css/style.css');
 	wp_enqueue_style('style_filefour',get_template_directory_uri().'/fonts/antonio-exotic/stylesheet.css');
 	wp_enqueue_style('style_filethree',get_template_directory_uri().'/css/lightbox.min.css');
 	wp_enqueue_style('style_filefive',get_template_directory_uri().'/css/responsive.css');
 	wp_enqueue_style('style_filesix',get_template_directory_uri().'/images/icons/favicon.png');

 	



 	//javascript
 	wp_enqueue_script('jquery.min.js',get_template_directory_uri().'/js/jquery.min.js',array(),'1.1',true);
 	wp_enqueue_script('bootstrap.bundle.min.js',get_template_directory_uri().'/js/bootstrap.min.js',array(),'1.1',true);
 	wp_enqueue_script('jquery.easing.min.js',get_template_directory_uri().'/js/lightbox-plus-jquery.min.js',array(),'1.1',true);
 	wp_enqueue_script('jqBootstrapValidation.js',get_template_directory_uri().'/js/instafeed.min.js',array(),'1.1',true);
 	wp_enqueue_script('contact_me.js',get_template_directory_uri().'/js/custom.js',array(),'1.1',true);

  }
 //attach files with action hook

 add_action("wp_enqueue_scripts","import_styles");

 //for featured image hook

 //add_theme_support("post-thumbnails");

 function featured_image() {
 	add_theme_support("post-thumbnails");
 	add_image_size("small-thumbnail",120,90,true);
 	add_image_size("banner-thumbnail",700,350,true);

 	//post formates
 	add_theme_support("post-formats", array("aside", "gallery", "link","video"));

 }

add_action("after_setup_theme","featured_image");


function create_custom_post(){

	$args = array(
     'public' => true,
     'label'=>'Movies',
     'show_in_nav_menus'=> true,
     'has_archive' => false,
     'supports'=>array('title','editor','excerpt','author','comments')
	);
   register_post_type('movie', $args);

   //single-movie.php
 }
//attach hook for custom post project registration

 add_action("init","create_custom_post");

 function register_theme_menu() {
        register_nav_menus(
          array(
             'header' =>__('Primary Menu'),
             'footer-menu' =>__('Footer Menu')
          )
        );
       
 }

 //attach hook for menu registration 

 add_action("init","register_theme_menu");

 //styling purpose

 


 /*function wpdocs_channel_nav_class( $classes, $item, $args ) {
 
    
        $classes[] = "network-menu-item";
 
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'wpdocs_channel_nav_class' , 10, 4 );*/

function custom_theme_sidebar() {
   register_sidebar(array(
    'name' => __('Primary Sidebar','theme_name'),
    'id' =>'sidebar-1',
    'before_widget'=>'<aside id= "%1$s" class="widget %2$s">',
    'after_widget' =>'</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
   ));

   register_sidebar(array(
    'name' => __('Secondary Sidebar','theme_name'),
    'id' =>'sidebar-2',
    'before_widget'=>'<aside id= "%1$s" class="widget %2$s">',
    'after_widget' =>'</aside>',
    'before_title' => '<h3 class="widget-title owt_class">',
    'after_title' => '</h3>'
   ));

    register_sidebar(array(
    'name' => __('footer-1','vacay'),
    'id' =>'footer-1',
    'before_widget'=>'<footer id= "%1$s" class="widget %2$s">',
    'after_widget' =>'</footer>',
    'before_title' => '<h3 class="widget-title owt_class">',
    'after_title' => '</h3>'
   ));
     register_sidebar(array(
    'name' => __('footer-2','vacay'),
    'id' =>'footer-2',
    'before_widget'=>'<li id= "%1$s" class="widget %2$s">',
    'after_widget' =>'</li>',
    'before_title' => '<h4 class="widget-title owt_class">',
    'after_title' => '</h4>'
   ));
      register_sidebar(array(
    'name' => __('footer-3','theme_name'),
    'id' =>'footer-3',
    'before_widget'=>'<footer id= "%1$s" class="widget %2$s">',
    'after_widget' =>'</footer>',
    'before_title' => '<h3 class="widget-title owt_class">',
    'after_title' => '</h3>'
   ));
 }

 //attach hook for custom sidebar registration

 add_action("widgets_init","custom_theme_sidebar");


 function mytheme_customize_register( $wp_customize ) {

   $wp_customize->add_section( 'vacay_main_section' , array(
    'title'      => "online web tutor",
    'description' => '',
    'priority'   => 120,
) );
//footer text
    $wp_customize->add_setting( 'vacay_first_txtbox_setting' , array(
    'default'     => 'Design and devloped by Maddy',
    'capability'   => 'edit_theme_options',
    'type' => 'option',
) );

   $wp_customize->add_control( 'vacay_first_txtbox_control', array(
  'label'      => "Footer text",
  'section'    => 'vacay_main_section',
  'settings'   => 'vacay_first_txtbox_setting',
) );

   //footer button link

   $wp_customize->add_setting( 'vacay_first_footer_link_setting' , array(
    'default'     => 'Footer link ',
    'capability'   => 'edit_theme_options',
    'type' => 'option',
) );

   $wp_customize->add_control( 'vacay_first_footer_link_control', array(
  'label'      => "Footer Link",
  'section'    => 'vacay_main_section',
  'settings'   => 'vacay_first_footer_link_setting',
  'type' => 'dropdown-pages'
) );

    //footer image upload

   $wp_customize->add_setting( 'vacay_image_settings' , array(
    'default'     => get_bloginfo("template_url").'/images/no-image.png',
    'capability'   => 'edit_theme_options',
    'type' => 'option',
) );

   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'vacay_image_control', array(
  'label'      => "Chosse image",
  'section'    => 'vacay_main_section',
  'settings'   => 'vacay_image_settings',

) ));

    //footer image upload

   $wp_customize->add_setting( 'vacay_color_settings' , array(
    'default'     => '#ff4157',
    'capability'   => 'edit_theme_options',
    'type' => 'option',
) );

   $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'vacay_color_control', array(
  'label'      => "Change Color",
  'section'    => 'vacay_main_section',
  'settings'   => 'vacay_color_settings',

) ));
}
add_action( 'customize_register', 'mytheme_customize_register' );

?>