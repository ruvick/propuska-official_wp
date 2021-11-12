<?php if ( have_posts() ) : ?>

			<header class="page-header button-container">
				<?php
				// the_archive_title( '<h1 class="page-title">', '</h1>' );
				// the_archive_description( '<div class="archive-description">', '</div>' );

				?>
				<a href="#" class="button">Новости</a>
				<a href="#" class="button">Справочник</a>
			</header><!-- .page-header -->

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
						<div class="service-item__img" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);"></div>
						<div class="service-item__content">
							<h2 class="section-title"><?php the_title();?></h2>
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
		?>