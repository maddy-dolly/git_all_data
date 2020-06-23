<?php get_header();?>
<h1>Archive Page</h1>
<?php

if(is_author()){
  echo "author archive";
}elseif(is_category()){
 ?>  <h1><?php single_cat_title();?></h1>
<?php
}elseif(is_day()){
   echo "day archive";
}elseif(is_month()){
   echo "month archive";
}elseif(is_year()){
   echo "year archive";
}

?>
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