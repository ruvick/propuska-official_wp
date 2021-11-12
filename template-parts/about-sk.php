 <section class="about">
    <div class="container">
      <?php 
      global $title;
        if($title == 0):
      ?>
      <p class="section-title">О нашей компании</p>
      <?php else:?>
      <h2 class="section-title">О нашей компании</h2>
    <?php endif;?>
      <div class="about-wrapper">
        <div class="about-wrapper__company">
          <p>Мы работаем с 2013 года и являемся партнером Департамента транспорта г. Москвы по оформлению пропусков для грузового транспорта на территорию СК. Действуем согласно текущего законодательства и нормативным актам РФ.
          </p>
        </div>
        <div class="about-wrapper__info">
          <div class="about-wrapper__info-title">При оформлении пропусков в центр Москвы вы получаете:</div>
          <ul class="ul-clean">
            <li>Официальное разрешение на въезд в зону СК;</li>
            <li>Защиту от аннулирования;</li>
            <li>Бесплатный временный пропуск на 10 дней;</li>
            <li>Быстрое положительное решение через 4 часа после подачи.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>