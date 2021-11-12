<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mkad
 */

?>

	</div><!-- #content -->

  <footer class="footer">
    <div class="container">
      <div class="logo">
        <div class="logo-image" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('mkad_logo'), 'full')[0];?>)"></div>
        <div class="logo-content">
          <div class="logo-content__title">Пропуска на МКАД</div>
          <div class="logo-content__descr">Официальное оформление пропусков в департаменте транспорта г. Москвы</div>
        </div>
      </div>
      <div class="footer-menu">
        <ul class="ul-clean">
          <li><a href="#">Проверить пропуск ОНЛАЙН</a></li>
          <li><a href="#">Пропуск МКАД</a></li>
          <li><a href="#">Пропуск ТТК</a></li>
          <li><a href="#">Пропуск СК</a></li>
        </ul>
      </div>
      <div class="footer-menu">
        <ul class="ul-clean">
          <li><a href="#">Другие услуги</a></li>
          <li><a href="#">О компании</a></li>
          <li><a href="#">Контакты</a></li>
        </ul>
      </div>
      <div class="footer-contacts">
        <a href="#" class="button order-popup" data-mailmsg="Заказ с формы в подвале сайта" data-formid="Заказ с формы в подвале сайта">Заказать звонок</a>
        <div class="schedule"><span>24/7</span></div>
      </div>
      <div class="footer-bottom">
        <span>(c) 2013-2019. Все права защищены</span>
        <a href="#">Политика конфиденциальности</a>
      </div>
    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
