<?php
while (have_posts()) {
	the_post();
?>
	<h1><?php the_title();?></h1>
	<p><?php the_time('F jS, Y')?>by <?php the_author()?></p>
	<?php the_category();?>
	<p><?php the_content();?></p>
    <hr>
<?php }?>
