<?php get_template_part('template-parts/sidebar-category');?>
<div class="main-content">
      <?php 
      global $title;
        if($title == 0):
      ?>
	<p><?php single_cat_title();?></p>
              <?php else:?>
	<h1><?php single_cat_title();?></h1>
            <?php endif;?>
	<?php echo category_description();?>
	<?php $cat_ID = get_query_var('cat');
		$args = array(
			'parent' => $cat_ID,
			'hide_empty' => 0,
		);
		$categories = get_categories($args);
		if($categories):
			
	?>

	<div class="child-cat-list">
		<?php foreach($categories as $cat):?>
			<a href="<?php echo get_category_link($cat->term_id);?>" class="child-cat__item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_term_meta($cat->term_id, 'mkad_term_logo'), 'full')[0]?>);">
			</a>
		<?php endforeach;?>
	</div>

	<?php endif;?>
</div>