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
	<?php if ( have_posts() ) :?>
		<div class="model-wrapper">
			<?php /* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_type() );?>
				<div class="model-item">
					<a href="<?php echo get_permalink();?>" class="model-item__photo" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);"></a>
					<div class="model-item__title"><a href="<?php echo get_permalink();?>"><?php the_title();?></a></div>
					<div class="model-item__content">
						<?php the_excerpt();?>
					</div>
					<a href="<?php echo get_permalink();?>" class="button">Подробнее...</a>
					<!--<a href="<?php echo get_permalink();?>" class="button button-inverse">Отзывы</a>-->
				</div>


			<?php endwhile; ?>

			</div>
			<?php // the_posts_navigation();
			the_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		// endif;
		endif;?>
</div>