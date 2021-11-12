<section class="mails-section ">
  <div class="container">
      <?php 
      global $title;
        if($title == 0):
      ?>
  <p class="clients__reviews-heading section-title  section-heading">Отзывы наших клиентов:</p>
              <?php else:?>
  <h2 class="clients__reviews-heading section-title  section-heading">Отзывы наших клиентов:</h2>
            <?php endif;?>
        <?php $array_reviews = carbon_get_the_post_meta('tech_complex_reviews');
        $main = '';
        if(is_home() || is_front_page()) {
            $array_reviews = carbon_get_theme_option('tech_complex_reviews_main');
            $main = '_main';
        }
          if($array_reviews):
        ?>
          <div itemscope itemtype="http://schema.org/Organization" class="reviews-slider">
            <?php foreach($array_reviews as $review):?>
              <div property="review" typeof="Review" class="reviews-slider__item">
                <div property="reviewRating" class="reviews-slider__item-rating">
                  <?php 
                  $rating = $review['tech_complex_reviews_rating'.$main];
                  $i = 1;
                  while($i < 6):?>
                    <?php if($i <= (int)$rating):?>
                      <div class="reviews-slider__item-star" style="background-image: url(<?php echo get_template_directory_uri();?>/img/icons/star.svg);"></div>
                    <?php else:?>
                      <div class="reviews-slider__item-star" style="background-image: url(<?php echo get_template_directory_uri();?>/img/icons/star-white.svg);"></div>
                    <?php endif; $i++;?>
                  <?php endwhile;?>
                </div>
                <div property="description" class="reviews-slider__item-text">
                  <?php echo $review['tech_complex_reviews_text'.$main];?>
                </div>
                <div property="author" class="reviews-slider__item-name"><?php echo $review['tech_complex_reviews_name'.$main];?></div>
              </div>
            <?php endforeach;?>
          </div>
        <?php endif;?>
      </div>
    <div class="container container-padding-bottom">
      <p class="section-title">Благодарственные письма от наших клиентов:</p>
      <div class="mails-wrapper">
        <a href="<?php echo get_template_directory_uri()?>/img/mail/1.jpg" data-lightbox="mails" class="mails-item" style="background-image: url(<?php echo get_template_directory_uri()?>/img/mail/1.jpg)"></a>
        <a href="<?php echo get_template_directory_uri()?>/img/mail/2.jpg" data-lightbox="mails" class="mails-item" style="background-image: url(<?php echo get_template_directory_uri()?>/img/mail/2.jpg)"></a>
        <a href="<?php echo get_template_directory_uri()?>/img/mail/3.jpg" data-lightbox="mails" class="mails-item" style="background-image: url(<?php echo get_template_directory_uri()?>/img/mail/3.jpg)"></a>
        <a href="<?php echo get_template_directory_uri()?>/img/mail/4.png" data-lightbox="mails" class="mails-item" style="background-image: url(<?php echo get_template_directory_uri()?>/img/mail/4.png)"></a>
      </div>
    </div>
  </section>