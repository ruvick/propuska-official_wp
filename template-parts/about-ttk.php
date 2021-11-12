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
          <p>Мы работаем с 2014 года и являемся официальным партнером Департамента транспорта г. Москвы по оформлению пропуск для грузового транспорта на территорию ТТК. Поэтому мы работаем исключительно в рамках текущего законодательства. Наша деятельность полностью регламентирована всеми нормативными актами.
          </p>
        </div>
        <div class="about-wrapper__info">
          <div class="about-wrapper__info-title">При оформлении пропусков в Москву вы получаете:</div>
          <ul class="ul-clean">
            <li>Официальное разрешение на въезд в зону ТТК;</li>
            <li>Отсутствие проблем с аннулированием пропусков;</li>
            <li>Бесплатный временный пропуск на 14 дней;</li>
            <li>Круглосуточный мониторинг пропусков с автоматическим оповещением по электронной почте.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>