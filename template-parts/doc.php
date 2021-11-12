<section class="doc">
    <div class="container">
          <?php 
          global $title;
            if($title == 0):
          ?>
      <p class="section-title">Необходимый пакет документов</p>
              <?php else:?>
      <h2 class="section-title">Необходимый пакет документов</h2>
            <?php endif;?>
      <div class="doc-wrapper">
        <div class="doc-item">
          <p class="doc-item__title">Для физ лиц</p>
          <ul class="ul-clean">
            <li>ПТС</li>
            <li>СТС</li>
            <li>Диагностическая карта</li>
            <li>Водительское удостоверение</li>
            <li>Паспорт собственника</li>
          </ul>
          <div class="doc-order-link order-popup">Заказать</div>
        </div>
        <div class="doc-item">
          <p class="doc-item__title">Для ИП</p>
          <ul class="ul-clean">
            <li>ПТС</li>
            <li>СТС</li>
            <li>Диагностическая карта</li>
            <li>Водительское удостоверение</li>
            <li>Карточка организации</li>
            <li>Договор лизинга (если машина в лизинге)</li>
          </ul>
          <div class="doc-order-link order-popup">Заказать</div>
        </div>
        <div class="doc-item">
          <p class="doc-item__title">Для юр. лиц</p>
          <ul class="ul-clean">
            <li>ПТС</li>
            <li>СТС</li>
            <li>Диагностическая карта</li>
            <li>Водительское удостоверение</li>
            <li>Карточка организации</li>
            <li>Договор лизинга (если машина в лизинге)</li>
          </ul>
          <div class="doc-order-link order-popup">Заказать</div>
        </div>
      </div>
      <div class="doc-note">
        <?php if(is_page(8)):?>
          <span>Оформление пропусков для грузовиков на МКАД требует предоставления полного пакета документов. Положительное решение на въезд в пределы МКАД позволит избежать ненужных штрафов.</span>
          
        <?php elseif(is_page(16)):?>
          <span>Оформление пропусков для грузовиков в зону СК требует предоставления полного пакета документов в соотвестивии со списками, представленными выше.
          </span>
          
        <?php elseif(is_page(11)):?>
          <span>Оформление пропусков для грузовиков на ТТК требует предоставления полного пакета документов. Положительное решение на въезд в пределы ТТК позволит избежать ненужных штрафов.</span>
        <?php else:?>
          <span>Оформить пропуск для грузовых машин в Москву можно после предоставления полного пакета документов. Разрешение на въезд в пределы зон МКАД-ТТК-СК позволит избежать штрафов размером 5000 руб.</span>
        <?php endif;?>
      </div>
    </div>
  </section>