<?php 

/*
Template Name: Проверить пропуск по номеру
*/
get_header();?>
<div class="container">
	<h1 class="section-title"><?php the_title();?></h1>
	<?php get_template_part('/template-parts/checking');?>
	<div id="ausModal">
		<img class = "checLoad" src = "<?php bloginfo("template_url");?>/img/load.svg" />
		<div class="ausInfo"></div>
	</div>
</div>
<a href="#" class="help-section">
	<div class="container">
		<div class="help-container-bg"></div>
		<div class="help-section__content">
			<div class="help-section__title">Помощь в оформлении<br> пропусков в Москву</div>
			<div class="help-pass__wrapper">
				<div class="help-pass__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/propusk-1.jpg);"></div>
				<div class="help-pass__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/propusk-2.jpg);"></div>
				<div class="help-pass__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/propusk-3.jpg);"></div>
			</div>
		</div>
		<div class="help-section__price">
			<span class="help-text">от</span> <span class="help-price">16000 <span>₽</span></span>
			<div class="help-text">годовой пропуск</div>
		</div>
		<div class="help-bg"></div>
	</div>
</a>
<div class="container">
	<div class="doc-item doc-item-big">
		<?php the_content();?>
	</div>
</div>
<?php
get_footer();