<?php get_header();?>
<?php 
if(is_home()) {
	echo "this is our home1 page"
}

?>

<h1>home page</h1>

<div class="container">
	<div class="row">
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
</div>


       
  		

<?php get_footer();?>