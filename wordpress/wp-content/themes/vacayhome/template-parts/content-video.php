<div class="col-sm-12 owt-container post-video">
	<h3>post video</h3>
			<div class="col-sm-4">      
 <?php 
			if(has_post_thumbnail()){    
			   ?> 
			 <a href="<?php the_post_thumbnail_url('small-thumbnail');?>"><?php the_post_thumbnail('small-thumbnail');?></a>
			
            <?php }
             else{?>
             	<img src="<?php echo get_template_directory_uri().'/images/no-image.png'?>" style="width: 120px; height: 120px;"> 
             	
            <?php }
			  ?>				 </div>
			<div class="col-sm-8">
				<h3><a href="<?php the_permalink()?>"><?php the_title();?></a></h3>
				<p><?php the_time();?> | <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author()?> </a>| <?php 
 
                  $categories = get_the_category();
                  $separator = ", ";
                  $catoptions = '';
                  foreach ($categories as $category) {
                  	$catoptions .= "<a href='".get_category_link($category->term_id)."'>".$category->cat_name."</a>".$separator;
                  }
             //echo $catoptions; 
             echo trim($catoptions, $separator);     
				?></p>
				<p><?php the_content();?></p>
			</div>
		</div>