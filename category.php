<?php
/**
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mkad
 */
$category = get_queried_object();
$cat_template = '';
if(!is_category(3))
	$cat_template = 'cat-template';
else
	$cat_template = '';
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
			<div class="container <?php echo $cat_template?>">
				<?php if(carbon_get_term_meta($category->term_id, 'mkad_term_template_page') === 'mkad_comm_transport'):
						get_template_part('template-parts/mkad_comm_transport');

				elseif(carbon_get_term_meta($category->term_id, 'mkad_term_template_page') === 'mkad_brand_transport'):
					get_template_part('template-parts/mkad_brand_transport');
				elseif(carbon_get_term_meta($category->term_id, 'mkad_term_template_page') === 'mkad_model_transport'):
					get_template_part('template-parts/mkad_model_transport');
				else:?>

		<?php if ( have_posts() ) : ?>

			<!-- <header class="page-header button-container">
				<?php
				// the_archive_title( '<h1 class="page-title">', '</h1>' );
				// the_archive_description( '<div class="archive-description">', '</div>' );

				?>
				<a href="#" class="button">Новости</a>
				<a href="<?php echo get_category_link(4);?>" class="button">Справочник</a>
			</header> --><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_type() );?>
				<div class="service-item-wrapper">
					<div class="service-item-wrapper-wrap">
						<a href="<?php echo get_permalink();?>" class="service-item__img" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);"></a>
						<div class="service-item__content">
							<h2 class="section-title"><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h2>
							<?php the_excerpt();?>
							<a href="<?php echo get_permalink();?>" class="button">Подробнее...</a>
					     </div>
					</div>
					
				</div>

			<?php endwhile;

			// the_posts_navigation();
			the_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		endif;?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
if ( cat_is_ancestor_of(4, $category->term_id) ){
	get_template_part('template-parts/map');
}
get_footer();
