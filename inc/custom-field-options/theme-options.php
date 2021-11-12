<?php
if(!defined('ABSPATH')) {
    exit();
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;
Container::make( 'theme_options', 'mkad_theme_options', 'Настройки темы' )
    ->add_tab('Главная', array(
      Field::make( 'image', 'mkad_logo', 'Логотип')
        ->set_width(30),
      Field::make('image', 'mkad_banner', 'Баннер')
        ->set_width(30),
    ))
    ->add_tab('Контакты', array(
        Field::make( 'text', 'mkad_phone', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'mkad_email', __( 'Email' ) )
          ->set_width(50),
        Field::make( 'text', 'mkad_email_send', __( 'Email для отправки' ) )
          ->set_width(50),
        Field::make( 'text', 'mkad_inn', __( 'ИНН' ) )
          ->set_width(50),
        Field::make( 'text', 'mkad_orgn', __( 'ОРГН' ) )
          ->set_width(50),
        Field::make( 'text', 'mkad_address', __( 'Адрес' ) )
          ->set_width(50),
        Field::make( 'textarea', 'mkad_map', __( 'Карта' ) )
          ->set_width(50),
		Field::make( 'text', 'mkad_map_point', __( 'Точка на Карте' ) )
          ->set_width(100),
    ) )
    ->add_tab('Отзывы', array(
      Field::make('complex', 'tech_complex_reviews_main', 'Отзыв')
          ->add_fields(array(
      Field::make('text', 'tech_complex_reviews_name_main', 'Имя')
        ->set_width(30),
      Field::make('textarea', 'tech_complex_reviews_text_main', 'Текст отзыва')
        ->set_width(30),
      Field::make('text', 'tech_complex_reviews_rating_main', 'Оценка')
        ->set_width(30),
    ))
    ));

Container::make( 'post_meta', 'mkad_page', 'Доп поля')
  ->add_fields(array(
    Field::make('image', 'post_mkad_banner', 'Фото баннера')
      ->set_width(30),
  ));
Container::make( 'post_meta', 'mkad_page_mkad', 'Доп поля')
  ->where('post_template', '=', 'page-mkad.php')
  ->add_fields(array(
    Field::make('text', 'post_mkad_title_page', 'Заголовок страницы'),
    Field::make('text', 'post_mkad_title_price', 'Заголовок секции "Цена пропуска"')
      ->set_width(30),
    Field::make('image', 'post_mkad_image_price', 'Фото')
      ->set_width(30),
    Field::make('text', 'post_price_pass_price', 'Цена')
      ->set_width(30),
    Field::make('text', 'post_price_pass_price_1', 'Цена 12 месяцев')
      ->set_width(30),
    Field::make('text', 'post_price_pass_price_2', 'Цена 6 месяцев')
      ->set_width(30),
    Field::make('text', 'post_price_pass_price_3', 'Цена 3 месяца')
      ->set_width(30),
    Field::make('rich_text', 'post_mkad_text_price', 'Текст'),
    Field::make('text', 'post_pass_no_waitng_title', 'Заголовок секции "Пропуск для грузовиков без ожидания"'),
    Field::make('rich_text', 'post_pass_no_waitng_text', 'Текст секции "Пропуск для грузовиков без ожидания"')
  ));
Container::make('post_meta', 'mkad_product', 'Дополнительные поля')
	->where( 'post_template', '=', 'single-product.php' )
	->add_fields(array(
		Field::make('text', 'mkad_product_price', 'Цена')
			->set_width(50),
		Field::make('text', 'mkad_product_old_price', 'Старая цена')
			->set_width(50),
		Field::make( 'text', 'mkad_sku', 'Артикул')
        	->set_width(50),
        Field::make( 'text', 'mkad_growth', 'Рост')
          ->set_width(50),
        Field::make( 'text', 'mkad_size', 'Размер')
          ->set_width(30),
        Field::make( 'text', 'mkad_color', 'Цвет')
          ->set_width(30),
		Field::make( 'rich_text', 'mkad_specifications', __( 'Характеристики' ) ),
        Field::make( 'rich_text', 'mkad_short_derscr', __( 'Описание' ) ),
        Field::make('image', 'mkad_gallery_img_1', 'Фото 1')
          ->set_width(20),
        Field::make('image', 'mkad_gallery_img_2', 'Фото 2')
          ->set_width(20),
        Field::make('image', 'mkad_gallery_img_3', 'Фото 3')
          ->set_width(20),
        Field::make('image', 'mkad_gallery_img_4', 'Фото 4')
          ->set_width(20),
	));
Container::make('term_meta', 'mkad', 'Доп поля')
  ->add_fields(array(
    Field::make('image', 'mkad_term_logo', 'Эмблема марки авто'),
    Field::make('image', 'mkad_term_photo', 'Фото Авто'),
    Field::make('text', 'mkad_term_menu_title', 'Сокращенное название для меню'),
    Field::make('select', 'mkad_term_template_page', 'Шаблон')
      ->add_options(array(
        'mkad_cat' => 'Обычная категория',
        'mkad_comm_transport' => 'Коммерческий транспорт страны',
        'mkad_brand_transport' => 'Марка транспорта',
        'mkad_model_transport' => 'Модель транспорта',
      ))
  ));


Container::make('post_meta', 'tech_page_mkad_ttk_sk', 'Отзывы')
  ->show_on_template(array('page-mkad.php', 'page-propusk-sk.php', 'page-propusk-ttk.php'))
  ->add_fields(array(
    Field::make('complex', 'tech_complex_reviews', 'Отзыв')
      ->add_fields(array(
        Field::make('text', 'tech_complex_reviews_name', 'Имя')
          ->set_width(30),
        Field::make('textarea', 'tech_complex_reviews_text', 'Текст отзыва')
          ->set_width(30),
        Field::make('text', 'tech_complex_reviews_rating', 'Оценка')
          ->set_width(30),
      ))
    
  ));
