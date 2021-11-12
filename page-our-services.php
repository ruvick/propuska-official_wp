<?php
/**
 * Template Name: Наши услуги
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
				<h1><?php the_title(); ?></h1>	
				<?php 
					$query = new WP_Query(
					    array(
					        'post_type' => 'page',
					        'meta_key' => '_wp_page_template',
					        'meta_value' => 'page-service.php'
					    )
					);
					if($query->have_posts()):
						while($query->have_posts()):
							$query->the_post();
						?>
						<div class="service-item-wrapper">
							<h2 class="section-title"><?php the_title();?></h2>
							<div class="service-item-wrapper-wrap">
								<div class="service-item__img" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);"></div>
								<div class="service-item__content">
									<?php the_content();?>
									<form action="" id="" class="order-form__form">
								        <input type="text" name="name" placeholder="Напишите ваше имя">
								        <input type="tel" name="tel" placeholder="+7 (___) ___-__-__">
								        <a href="#" class="button uniSendBtn" data-formid="Форма на странице Наши услуги" data-mailmsg="Заказ услуги <?php the_title();?>">Получить консультацию</a>
								     </form>
							     </div>
							</div>
							
						</div>
					<?php
						endwhile;
					endif; wp_reset_postdata();
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
