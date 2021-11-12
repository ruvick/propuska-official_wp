  <?php global $post;?>
  <section class="warranty">
    <div class="container">
      <?php if(is_page_template('page-brand.php')):?>
        <?php 
      global $title;
      if($title == 0):
      ?>
        <p class="section-title">Пропуска на МКАД для автомобилей <?php the_title();?></p>
      <?php else:?>
        <h1 class="section-title">Пропуска на МКАД для автомобилей <?php the_title();?></h1>
      <?php endif;?>
      <?php else:?>
        <?php 
      global $title;
        if($title == 0):
        ?>
          <p class="section-title"><?php echo carbon_get_post_meta($post->ID, 'post_mkad_title_page');?></p>
        <?php else:?>
        <h1 class="section-title"><?php echo carbon_get_post_meta($post->ID, 'post_mkad_title_page');?></h1>
        <?php endif;?>
      <?php endif;?>
      <div class="warranty-wrapper">
        <?php if(!empty(carbon_get_the_post_meta('post_mkad_banner'))):?>
        <div class="warranty-wrapper__image" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('post_mkad_banner'), 'full')[0];?>)">
          <a href="#" class="order-popup" data-mailmsg="Заказ с верхнего банера" data-formid="Заказ с верхнего банера"><span>Оформить пропуск</span></a>
        </div>
        <?php else:?>
        <div class="warranty-wrapper__image" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('mkad_banner'), 'full')[0];?>)">
          <a href="#" class="order-popup" data-mailmsg="Заказ с верхнего банера" data-formid="Заказ с верхнего банера"><span>Оформить пропуск</span></a>
        </div>
        <?php endif;?>
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