<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php bloginfo('name');?>-<?php bloginfo('description');?></title>
<!--for css link from functions.php file-->
 <?php wp_head();?>


</head>

  <!-- Navigation -->
  <?php
	wp_nav_menu(array(
     'menu' => 'primary-menu',//menu id
     'container' => '',
     'items_wrap' => '<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top" >Start Bootstrap
</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" >%3$s</a>
          </li></ul></div></div></nav>'
	));
	?>

 <?php 
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 $image[0];
?>
<style type="text/css">
  #mainNav .navbar-brand {
    color: #fed136;
    font-family: 'Kaushan Script',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
        background-image: url("<?php echo $image[0]; ?>");
        background-repeat: no-repeat;
    background-size: cover;

}
  
</style>
 <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To Our Studio!</div>
        <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php the_permalink();?>">Tell Me More</a>
      </div>
    </div>
  </header>
