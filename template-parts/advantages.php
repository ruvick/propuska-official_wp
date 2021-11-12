  <section class="advantages">
    <div class="container">
      <div class="advantages-container">
      <div class="advantages-item">
      <?php 
      global $title;
        if($title == 0):
      ?>
        <p class="section-title">Преимущества работы с нами</p>
      <?php else:?>
        <h2 class="section-title">Преимущества работы с нами</h2>
    <?php endif;?>
        <div class="advantages-descr">
          Наша компания оказывает помощь физическим и юридическим лицам
        </div>
      </div>
      <div class="advantages-item">
        <div class="advantages-item__photo" style="background-image: url(<?php echo get_template_directory_uri()?>/img/F_2.jpg)">
          <div class="advantages-item__photo-number"><span>1</span></div>
        </div>
        <div class="advantages-item__title">Оплата по факту получения пропуска</div>
      </div>
      <div class="advantages-item">
        <div class="advantages-item__photo" style="background-image: url(<?php echo get_template_directory_uri()?>/img/F_3.jpg)">
          <div class="advantages-item__photo-number"><span>2</span></div>
        </div>
        <div class="advantages-item__title">Оформляем пропуск за 1 день</div>
      </div>
      <div class="advantages-item">
        <div class="advantages-item__photo" style="background-image: url(<?php echo get_template_directory_uri()?>/img/F_4.jpg)">
          <div class="advantages-item__photo-number"><span>3</span></div>
        </div>
        <div class="advantages-item__title">Имеем поддержку департамента транспорта</div>
      </div>
      <div class="advantages-item">
        <div class="advantages-item__photo" style="background-image: url(<?php echo get_template_directory_uri()?>/img/F_5.jpg)">
          <div class="advantages-item__photo-number"><span>4</span></div>
        </div>
        <div class="advantages-item__title">Круглосуточное сопровождение</div>
      </div>
      <div class="advantages-item">
        <div class="advantages-item__photo" style="background-image: url(<?php echo get_template_directory_uri()?>/img/F_6.jpg)">
          <div class="advantages-item__photo-number"><span>5</span></div>
        </div>
        <div class="advantages-item__title">Бесплатный временный пропуск на 10 дней</div>
      </div>
    </div>
    </div>
  </section>