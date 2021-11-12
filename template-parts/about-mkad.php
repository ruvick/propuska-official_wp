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
          <p>Ведем свою деятельность с 2013 года. Оформляем пропуска МКАД при полной поддержке департамента транспорта г. Москвы. Срок получения пропуска с момента подачи составляет 4 часа. С помощью наших специалистов пропуска получили более 9700 клиентов.
          </p>
        </div>
        <div class="about-wrapper__info">
          <div class="about-wrapper__info-title">При оформлении пропусков на МКАД вы получаете:</div>
          <ul class="ul-clean">
            <li>Официальное разрешение на въезд в дневное время;</li>
            <li>Защиту от аннулирования;</li>
            <li>Бесплатный временный пропуск на 10 дней;</li>
            <li>Мониторинг пропусков с автоматическим оповещением по СМС.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>