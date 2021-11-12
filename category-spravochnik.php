<?php
/**
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mkad
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
				<header class="page-header button-container">
				<?php
				// the_archive_title( '<h1 class="page-title">', '</h1>' );
				// the_archive_description( '<div class="archive-description">', '</div>' );

				?>
				<a href="<?php echo get_category_link(3);?>" class="button">Новости</a>
				<a href="<?php echo get_category_link(4);?>" class="button">Справочник</a>
			</header><!-- .page-header -->
		</div>
		<div class="container cat-template">
			<?php get_template_part('template-parts/sidebar-category');?>
			<div class="main-content main-content-category">
				<h1><?php single_cat_title();?></h1>
				<?php echo category_description();?>
				<?php $cat_ID = get_query_var('cat');
		$args = array(
			'parent' => 4,
			'hide_empty' => 0,
		);
		$categories = get_categories($args);
			if($categories):
				
		?>

		<div class="child-cat-list">
			<?php foreach($categories as $cat):?>
				<?php 
					$args = array(
						'parent' => $cat->term_id,
						'hide_empty' => 0
					);
					$cat_child = get_categories($args);
					if($cat_child):
						foreach($cat_child as $cat):
				?>
						<a href="<?php echo get_category_link($cat->term_id);?>" class="child-cat__item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_term_meta($cat->term_id, 'mkad_term_logo'), 'full')[0]?>);">
						</a>
					<?php endforeach;?>
				<?php endif;?>
			<?php endforeach;?>
		</div>

		<?php endif;?>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();