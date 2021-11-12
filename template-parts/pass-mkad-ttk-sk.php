  <section class="pass">
    <div class="container">
      <?php 
      global $title;
      if($title == 0):
      ?>
      <p class="section-title">Пропуска МКАД-ТТК-СК: оформление день в день со 100% гарантией выхода</p>
      <?php else:?>
      <h2 class="section-title">Пропуска МКАД-ТТК-СК: оформление день в день со 100% гарантией выхода</h2>
    <?php endif;?>
      <div class="pass-wrapper">
        <div class="pass-wrapper__item">
          <div class="pass-wrapper__item-title">Пропуск на МКАД</div>
          <div class="pass-wrapper__item-price">
            18000 ₽ - 12 мес<br>
            14000 ₽ - 6 мес
          </div>
          <div class="pass-wrapper__item-img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/map/1.jpg)"></div>
          <a href="#" class="pass-wrapper__item-link">Подробнее</a>
          <a href="#" class="button order-popup" data-mailmsg="Оформить Пропуск на МКАД" data-formid="Оформить Пропуск на МКАД">Оформить пропуск</a>
          <div class="pass-wrapper__item-text">
            Пропуск на МКАД дает возможность беспрепятственно передвигаться по всей территории Москвы до границ ТТК
          </div>
        </div>
        <div class="pass-wrapper__item">
          <div class="pass-wrapper__item-title">Пропуск на ТТК</div>
          <div class="pass-wrapper__item-price">
            18000 ₽ - 12 мес<br>
            14000 ₽ - 6 мес
          </div>
          <div class="pass-wrapper__item-img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/map/2.jpg)"></div>
          <a href="#" class="pass-wrapper__item-link">Подробнее</a>
          <a href="#" class="button order-popup" data-mailmsg="Оформить Пропуск на ТТК" data-formid="Оформить Пропуск на ТТК">Оформить пропуск</a>
          <div class="pass-wrapper__item-text">
            Оформление пропуска на ТТК позволяет грузовому транспорту ездить по территории МКАД-ТТК до зоны СК
          </div>
        </div>
        <div class="pass-wrapper__item">
          <div class="pass-wrapper__item-title">Пропуск на СК</div>
          <div class="pass-wrapper__item-price">
            18000 ₽ - 12 мес<br>
            14000 ₽ - 6 мес
          </div>
          <div class="pass-wrapper__item-img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/map/3.jpg)"></div>
          <a href="#" class="pass-wrapper__item-link">Подробнее</a>
          <a href="#" class="button order-popup" data-mailmsg="Оформить Пропуск на СК" data-formid="Оформить Пропуск на СК">Оформить пропуск</a>
          <div class="pass-wrapper__item-text">
            Пропуск в зону СК дает возможность круглосуточно ездить по всей территории Москвы
          </div>
        </div>
        <div class="pass-wrapper__item">
          <div class="pass-wrapper__item-title">Диагностическая карта</div>
          <div class="pass-wrapper__item-price">
            1000 ₽
          </div>
          <div class="pass-wrapper__item-img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/map/diagnosticheskaia_karta.png)"></div>
          <a href="#" class="pass-wrapper__item-link">Подробнее</a>
          <a href="#" class="button order-popup" data-mailmsg="Оформить Диагностическую карту" data-formid="Оформить Диагностическую карту">Оформить диагностику</a>
          <div class="pass-wrapper__item-text">
            Диагностическая карта указывает на пригодность грузового ТС для передвижения по дорогам на территории РФ и Москвы
          </div>
        </div>
      </div>
    </div>
  </section>