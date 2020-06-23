<?php get_header();?>
<?php 
if(is_home()) {
	echo "";
}
else if(is_front_page()){
	 echo "this is my front page";
}
?>

<h1>Front Home Page</h1>
<h2><?php //echo get_option('vacay_first_txtbox_setting');?></h2>
<div class="container">
	<div class="row">
    <div class="col-sm-10">
		<?php 
  if(have_posts()) 
  {
  	while(have_posts()) {

  		the_post();
  		//get_post_formate() :=> aside ->content-aside.php
  		//get_post_formate() :=> gallery->content-gallery.php
  		//get_post_formate() :=> link ->content-link.php
  		get_template_part("template-parts/content",get_post_format());
  	}
  }
?>
</div>
<div class="col-sm-2">
<?php get_sidebar()?>
	</div>
</div>
</div>

       
  		

<?php get_footer();?>