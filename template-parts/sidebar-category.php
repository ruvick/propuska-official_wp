<?php 
	$cat_ID = 0;
	if(is_category()) {
		$cat_ID = get_query_var('cat');
	}
?>
<aside class="sidebar">
	<?php $terms = get_categories(array(
		'parent' => 4,
		'hierarchical' => true,
		'hide_empty' => 0,
	));?>
	<ul class="ul-clean">
		<?php foreach($terms as $term):?>
			<?php $current_cat = '';
				if($cat_ID == $term->term_id) {
					$current_cat = 'current-cat';
				}
			?>
			<li><a href="<?php echo get_category_link($term->term_id); //echo $term->slug;?>" class="<?php echo $current_cat?>"><?php echo carbon_get_term_meta($term->term_id, 'mkad_term_menu_title')?></a></li>
		<?php endforeach;
	?>
	</ul>
	<h2 class="sidebar-title">Рекомендуем изучить:</h2>
	<?php 
		$args = array(
			'posts_per_page' => 4,
			'cat' => 3
		);
		$query = new WP_Query($args);
		if($query->have_posts()):
	?>
		<div class="sidebar-recommend">
			<?php while($query->have_posts()):
				$query->the_post();?>
				<a href="<?php the_permalink();?>" class="sidebar-recommend-item" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
					<span><?php the_title();?></span>
				</a>
			<?php endwhile;?>
		</div>
	<?php endif; wp_reset_postdata();?>
</aside>