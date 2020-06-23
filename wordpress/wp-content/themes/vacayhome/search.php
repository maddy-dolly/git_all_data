<?php get_header();?>
<style type="text/css">
  p{
  text-align: center;
}
</style>

<h1>Searched Item Page</h1>
<p>Search for: <?php echo get_search_query();?></p>
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
  else{
    echo "<br><h1 class='alert alert-danger'>Not Found Post</h1>";
  }
?>

</div>

</div>
       
  		

<?php get_footer();?>