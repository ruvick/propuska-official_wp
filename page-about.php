<?php

/*
Template Name: О нас
*/
get_header();
?>
<div class="container page-contacts-content">
	<h1><?php the_title(); ?></h1>	
	<div class="contacts-block all-text-style">
		<?php the_content();?>
	</div>
	<div class="page-contacts__form">
		
		<h1 class="order-form-title">Оформляем пропуска на следующие виды грузового транспорта:</h1>
			<!-- <img src="<?php echo get_template_directory_uri();?>/img/type-truck.PNG" alt=""> -->
			<div class="page-contacts__form-svg">
				<div class="about-icon">
					<div class="about-icon__icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/truck/1.svg);"></div>
					<div class="about-icon__title">Еврофуры 20т.</div>
				</div>
				<div class="about-icon">
					<div class="about-icon__icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/truck/container.svg);"></div>
					<div class="about-icon__title">Рефрижиракторы</div>
				</div>
				<div class="about-icon">
					<div class="about-icon__icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/truck/container.svg);"></div>
					<div class="about-icon__title">Контейнеровозы</div>
				</div>
				<div class="about-icon">
					<div class="about-icon__icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/truck/crane.svg);"></div>
					<div class="about-icon__title">Подъемные краны</div>
				</div>
				<div class="about-icon">
					<div class="about-icon__icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/truck/bort.svg);"></div>
					<div class="about-icon__title">Бортовые</div>
				</div>
				<div class="about-icon">
					<div class="about-icon__icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/truck/oversized.svg);"></div>
					<div class="about-icon__title">Негабаритные</div>
				</div>
				<div class="about-icon">
					<div class="about-icon__icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/truck/danger.svg);"></div>
					<div class="about-icon__title">Опасные</div>
				</div>
				<div class="about-icon">
					<div class="about-icon__icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/truck/tractor.svg);"></div>
					<div class="about-icon__title">Трактора</div>
				</div>
				<div class="about-icon">
					<div class="about-icon__icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/truck/middle.svg);"></div>
					<div class="about-icon__title">Средние(10 т.)</div>
				</div>
				<div class="about-icon">
					<div class="about-icon__icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/truck/middle-1.svg);"></div>
					<div class="about-icon__title">Средние(5 т.)</div>
				</div>
				<div class="about-icon">
					<div class="about-icon__icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/truck/gazel.svg);"></div>
					<div class="about-icon__title">Газели</div>
				</div>
				<div class="about-icon">
					<div class="about-icon__icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/truck/cisterns.svg);"></div>
					<div class="about-icon__title">Наливные</div>
				</div>
			</div>
	</div>
</div>
<?php get_template_part('/template-parts/map');?>
<?php
get_footer();