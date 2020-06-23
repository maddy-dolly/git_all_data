<?php
 function hindi_devtutes() {
 	//stylesheeet
 	wp_enqueue_style('main_style',get_stylesheet_uri());
 	wp_enqueue_style('style_fileone',get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
 	wp_enqueue_style('style_filetwo',get_template_directory_uri().'/vendor/fontawesome-free/css/all.min.css');
 	wp_enqueue_style('style_filethree',get_template_directory_uri().'/css/agency.min.css');

 	//javascript
 	wp_enqueue_script('jquery.min.js',get_template_directory_uri().'/vendor/jquery/jquery.min.js',array(),'1.1',true);
 	wp_enqueue_script('bootstrap.bundle.min.js',get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js',array(),'1.1',true);
 	wp_enqueue_script('jquery.easing.min.js',get_template_directory_uri().'/vendor/jquery-easing/jquery.easing.min.js',array(),'1.1',true);
 	wp_enqueue_script('jqBootstrapValidation.js',get_template_directory_uri().'/js/jqBootstrapValidation.js',array(),'1.1',true);
 	wp_enqueue_script('contact_me.js',get_template_directory_uri().'/js/contact_me.js',array(),'1.1',true);
 	wp_enqueue_script('agency.min.js',get_template_directory_uri().'/js/agency.min.js',array(),'1.1',true);

  }
 //attach files with action hook

 add_action("wp_enqueue_scripts","hindi_devtutes");


 //menu registration method

 function register_theme_menu() {
        register_nav_menus(
          array(
             'primary-menu' =>__('Primary Menu'),
             'footer-menu' =>__('Footer Menu')
          )
        );
        $defaults = array(
        'menu'            => '',
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'item_spacing'    => 'preserve',
        'depth'           => 0,
        'walker'          => '',
        'theme_location'  => '',
    );
 }

 //attach hook for menu registration 

 add_action("init","register_theme_menu");


 function custom_theme_logo() {
    $defaults = array(
        'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
        
    );
     add_theme_support('custom-logo',$defaults);

 }

 //attach hook for custom logo registration

 add_action('after_setup_theme', 'custom_theme_logo');


 function register_my_projects(){
   register_post_type('custom_projects', array(
     'labels' => array(
        'name' => __('Our Projects'),
        'singular_name' => __('custom_projects')
     ),
     'public'=> true,
     'show_in_nav_menus'=> true,
     'has_archive' => false,
     'supports'=>array('title','editor','excerpt','author','comments')
   ));
 }
//attach hook for custom post project registration

 add_action("init","register_my_projects");
// this function add widgts

 function custom_theme_sidebar() {
   register_sidebar(array(
    'name' => __('Primary Sidebar','theme_name'),
    'id' =>'sidebar-1',
    'before_widget'=>'<aside id= "%1$s" class="widget %2$s">',
    'after_widget' =>'</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
   ));

   register_sidebar(array(
    'name' => __('Secondary Sidebar','theme_name'),
    'id' =>'sidebar-2',
    'before_widget'=>'<aside id= "%1$s" class="widget %2$s">',
    'after_widget' =>'</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
   ));
 }

 //attach hook for custom sidebar registration

 add_action("widgets_init","custom_theme_sidebar")
?>