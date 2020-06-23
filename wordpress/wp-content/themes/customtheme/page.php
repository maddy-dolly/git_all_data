
	<?php get_header();?>

<div class="container">
<?php 
  if(have_posts()) {
  	while (have_posts()) {
  		the_post();
  		?>
       <h1><?php the_title();?></h1>
       <p style="color:blue"><?php the_content();?></p>
       <p>
  		<?php
  	}
  }
  ?>
</div>

<!-- dispaly custom side bar-->
<?php if(is_active_sidebar('sidebar-1')){?>
<div id="secondary" class="sidebar-container" role="complementary" style="border:1px solid yellow;">
  <div class="widget-area">
    <?php dynamic_sidebar('sidebar-1');?>
  </div>
</div>
<?php }?>
<?php get_footer();?>
