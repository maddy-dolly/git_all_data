<?php get_header();?>
<h1>Online Web Tutor Posts</h1>

<div class="container">
  <div class="row">
    <?php 
  if(have_posts()) {
    while(have_posts()) {

      the_post();
      get_template_part("template-parts/content",get_post_format());
    }
  }
?>
  </div>
</div>


       
      

<?php get_footer();?>