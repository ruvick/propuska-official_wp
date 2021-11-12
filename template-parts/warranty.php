  <section class="warranty">
    <div class="container">
      <?php 
      global $title;
      if($title == 0):
      ?>
      <p class="section-title"><span class="color-red">Пропуск в Москву</span> для грузовых автомобилей со 100% гарантией получения</p>
      <?php else:?>
      <h1 class="section-title"><span class="color-red">Пропуск в Москву</span> для грузовых автомобилей со 100% гарантией получения</h1>
    <?php endif;?>
      <div class="warranty-wrapper">
        <div class="warranty-wrapper__image" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('mkad_banner'), 'full')[0];?>)">
          <a href="#" class="order-popup" data-mailmsg="Заказ с верхнего банера" data-formid="Заказ с верхнего банера"><span>Оформить пропуск</span></a>
        </div>
        <div class="warranty-wrapper__content">
          <div class="warranty-wrapper__content-item">
            <div class="warranty-wrapper__content-item__img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/icon/mkad_1.svg)"></div>
            <div class="warranty-wrapper__content-item__text">100% гарантия выхода пропуска</div>
          </div>
          <div class="warranty-wrapper__content-item">
            <div class="warranty-wrapper__content-item__img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/icon/mkad_2.svg)"></div>
            <div class="warranty-wrapper__content-item__text">При поддержке департамента транспорта Москвы</div>
          </div>
          <div class="warranty-wrapper__content-item">
            <div class="warranty-wrapper__content-item__img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/icon/mkad_3.svg)"></div>
            <div class="warranty-wrapper__content-item__text">Оформление за 1 день</div>
          </div>
          <div class="warranty-wrapper__content-item">
            <div class="warranty-wrapper__content-item__img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/icon/mkad_4.svg)"></div>
            <div class="warranty-wrapper__content-item__text">Оплата по факту получения</div>
          </div>
        </div>
      </div>
    </div>
  </section>