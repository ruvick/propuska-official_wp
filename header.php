<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mkad
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NPJ8LGV');</script>
	<!-- End Google Tag Manager -->
	<meta name="cmsmagazine" content="f7245597f5b3579a3db3d69ddef2a8bf" />
	<meta name="yandex-verification" content="fb385a2bcfe56ca9" />
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/fav.png" type="image/png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPJ8LGV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="page" class="site">
	<!-- Арктик модал -->
	<div style="display: none;">
	    <div class="box-modal" id="messgeModal">
	        <div class="box-modal_close arcticmodal-close">закрыть</div>
	        <div class = "modalline" id = "lineIcon">
	    </div>
	    
	    <div class = "modalline" id = "lineMsg">
	    </div>
	    </div>
	</div>

  <div style="display: none;">
      <div class="box-modal" id="order-callback">
          <div class="box-modal_close arcticmodal-close">закрыть</div>
          <div class = "modalline popup-win" id = "lineIcon">
            <h2>Обратный звонок</h2>
            <form action="" class="popup-form">
              <input type="text" name="name" class="input-name" placeholder="Ваше имя">
              <input type="tel" name="name" placeholder="Ваш телефон">
              <a href="#" class="button uniSendBtn">Отправить</a>
            </form>
          </div>
      
      <div class = "modalline" id = "lineMsg">
      </div>
      </div>
  </div>
    <div style="display: none;">
      <div class="box-modal" id="check-callback">
          <div class="box-modal_close arcticmodal-close">закрыть</div>
          <div class = "modalline popup-win" id = "lineIcon">
            <h2>Обратный звонок</h2>
            <form action="" class="popup-form">
              <input type="text" name="name" class="input-name" placeholder="Ваше имя">
              <input type="tel" name="name" placeholder="Ваш телефон">
              <a href="#" class="button uniSendBtn" data-mailmsg="Заявка с баннера Помощь в оформлении пропусков в Москву">Отправить</a>
            </form>
          </div>
      
      <div class = "modalline" id = "lineMsg">
      </div>
      </div>
  </div>

  <header class="header">
    <div class="header-top">
      <div class="container">
        <div class="hamburger">
          <span class="hamburger-top"></span>
          <span class="hamburger-middle"></span>
          <span class="hamburger-bottom"></span>
        </div>
        <?php main_menu();?>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <div class="header-bottom__wrapper">
          <a href="<?php echo home_url('/');?>" class="logo">
            <div class="logo-image" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('mkad_logo'), 'full')[0];?>)"></div>
            <div class="logo-content">
              <div class="logo-content__title">Пропуска на МКАД</div>
              <div class="logo-content__descr">Официальное оформление пропусков в департаменте транспорта г. Москвы</div>
            </div>
          </a>
          <div class="header-contacts">
            <a href="tel:<?php echo str_replace(array('(', ')', ' ', '-', '_'), '', carbon_get_theme_option('mkad_phone'))?>" class="header-contacts__phone"><?php echo carbon_get_theme_option('mkad_phone');?></a>
            <a href="mailto:<?php echo carbon_get_theme_option('mkad_email')?>" class="header-contacts__email"><?php echo carbon_get_theme_option('mkad_email')?></a>
            <a href="#" class="button button-min-height order-popup" data-mailmsg="Заказ с верхней формы" data-formid="Заказ с верхней формы">Заказать обратный звонок</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') && (!is_home() || !is_front_page())) {
        yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
      }?>
    </div>
  </header>

	<div id="content" class="site-content">
