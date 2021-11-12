<?php global $post; ?>
<section class="pass-price">
	<div class="container">
      <?php 
      global $title;
      if($title == 0):
      ?>
		<p class="section-title"><?php echo carbon_get_post_meta(8, 'post_mkad_title_price');?></p>
      <?php else:?>
		<h2 class="section-title"><?php echo carbon_get_post_meta(8, 'post_mkad_title_price');?></h2>
    <?php endif;?>
		<div class="pass-price-wrapper">
			<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(8, 'post_mkad_image_price'), 'full')[0];?>" alt="" class="pass-price__img">
			<div class="pass-price__content">
				<div class="pass-price__content-price">
					<div><?php echo carbon_get_post_meta(8, 'post_price_pass_price_1');?></div>
					<div><?php echo carbon_get_post_meta(8, 'post_price_pass_price_2');?></div>
					<div><?php echo carbon_get_post_meta(8, 'post_price_pass_price_3');?></div>
				</div>
				<div class="btn-wrap">
					<a href="#" class="button order-popup">Оформить пропуск</a>
				</div>
				<div class="pass-price__content-text">
					<?php echo carbon_get_post_meta(8, 'post_mkad_text_price');?>
				</div>
			</div>
		</div>
	</div>
</section>