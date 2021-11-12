<?php

/*
Template Name: Контакты
*/
get_header();
?>

<div class="container page-contacts-content">
<h1><?php the_title(); ?></h1>	
	<div class="contacts-block">
		<div><strong>Телефон:</strong> <span><?php echo carbon_get_theme_option('mkad_phone');?></span></div>
		<div><strong>Адрес:</strong> <span><?php echo carbon_get_theme_option('mkad_address');?></span></div>
		<div><strong>Email:</strong> <span><?php echo carbon_get_theme_option('mkad_email');?></span></div>
		<div><strong>ОРГН:</strong> <span><?php echo carbon_get_theme_option('mkad_orgn');?></span></div>
		<div><strong>ИНН:</strong> <span><?php echo carbon_get_theme_option('mkad_inn');?></span></div>
	</div>
	<div class="page-contacts__form">
		<h2 class="order-form-title">Хотите оформить пропуск прямо сейчас? Оставьте заявку</h2>
			<strong>Оставьте заявку:</strong>
	      <form action="" id="order-form__form" class="order-form__form">
	        <input type="text" name="name" placeholder="Напишите ваше имя">
	        <input type="tel" name="tel" placeholder="+7 (___) ___-__-__">
	        <a href="#" class="button uniSendBtn" data-formid="Форма на странице Контакты" data-mailmsg="Заявка со страницы <?php echo $title_page;?>">Получить консультацию</a>
	      </form>
	</div>
</div>
<?php get_template_part('/template-parts/map');?>
<?php
get_footer();