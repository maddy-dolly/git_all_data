<?php if(is_active_sidebar('sidebar-1')){?>
<ul id="sidebar">
  	
    <?php dynamic_sidebar('sidebar-1');?>
  </ul>
<?php }?>
<h3>Api Image</h3>
<br>
            <img src="<?php  echo get_option("vacay_image_settings")?>" height="200px" width="200px">

<style type="text/css">
	h3{
        font-size: 20px;
        font-weight: bold;
                color:#ff4157;

    }
    
</style>