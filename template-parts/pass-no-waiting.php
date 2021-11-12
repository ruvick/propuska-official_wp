<section class="pass-no-waiting">
	<div class="container container-padding-bottom">
      <?php 
      global $title;
      if($title == 0):
      ?>
		<p class="section-title"><?php echo carbon_get_the_post_meta('post_pass_no_waitng_title');?></p>
      <?php else:?>
		<h2 class="section-title"><?php echo carbon_get_the_post_meta('post_pass_no_waitng_title');?></h2>
    <?php endif;?>
		<div class="pass-no-waiting-text">
			<?php echo carbon_get_the_post_meta('post_pass_no_waitng_text');?>
		</div>
	</div>
</section>