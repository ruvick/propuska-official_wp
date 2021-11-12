<?php global $post;
$title_page = '';
if(is_home() || is_front_page()) {
	$title_page = 'Главная';
} else {
	$title_page = get_the_title();
}
?>
<section class="order-form-section">
    <div class="container">
      <?php 
      global $title;
      if($title == 0):
      ?>

      <p class="order-form-title">Закажите оформление пропуска прямо сейчас</p>
      <?php else:?>
      <h2 class="order-form-title">Закажите оформление пропуска прямо сейчас</h2>
    <?php endif;?>
      <form action="" id="order-form__form" class="order-form__form">
        <input type="text" name="name" placeholder="Напишите ваше имя">
        <input type="tel" name="tel" placeholder="+7 (___) ___-__-__">
        <a href="#" class="button uniSendBtn" data-formid="Форма под верхним баннером" data-mailmsg="Заявка со страницы <?php echo $title_page;?>">Получить консультацию</a>
      </form>
    </div>
  </section>