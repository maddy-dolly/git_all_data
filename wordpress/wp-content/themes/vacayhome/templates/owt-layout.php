<?php
/*
  Template Name: Online web Tutor Template
*/
 ?>

 <?php get_header();?>
<h1>Online Web tutour file</h1>

<div class="container">
  <div class="row">
    <?php 
  if(have_posts()) {
    while(have_posts()) {
      the_post();?>

      <h3><?php the_title();?></h3>
      <p><?php the_content();?></p>
      <?php
    }
  }
?>
  </div>
</div>


       
      

<?php get_footer();?>