<section class="checking">
		<div class="checking__inner  container">
			<div class="checking__info">
				<?php 
				global $post;
				if(is_page(array(5,7,9)) && !empty(carbon_get_post_meta($post->ID, 'tech_check_pass'))):?>
				      <?php 
				      global $title;
				        if($title == 0):
				      ?>
					<p class="checking__info-heading  section-heading"><?php echo carbon_get_post_meta($post->ID, 'tech_check_pass')?></p>
				      <?php else:?>
					<h2 class="checking__info-heading  section-heading"><?php echo carbon_get_post_meta($post->ID, 'tech_check_pass')?></h2>
				    <?php endif;?>
				<?php else:?>
				      <?php 
				      global $title;
				        if($title == 0):
				      ?>
					<p class="checking__info-heading  section-heading">Проверить пропуск<br/> в Москву на грузовой транспорт</p>
				      <?php else:?>
					<h2 class="checking__info-heading  section-heading">Проверить пропуск<br/> в Москву на грузовой транспорт</h2>
				    <?php endif;?>
				<?php endif;?>
				<div class="checking__info-form">
					<form action="" id="checking__info-form" class="checking__info-form-container">
						<div class="checking__info-form-desc">Введите гос номер транспортного средства без пробелов</div>
						<div class="checking__info-form-actions">
							<input id = "ausviceNum" type="text" name="car_number" class="checking__info-form-actions-item checking__info-form-actions-field form__fields-item" placeholder="А111АА777" required autocomplete="off">
							<div class="checking__info-form-actions-item checking__info-form-actions-btn action-btn button" id = "checkAusvice">Проверить пропуск</div>
							<i class="checking__info-form-actions-item checking__info-form-actions-icon"></i>
						</div>
						<?php if(is_page(array(5,7,9)) && !empty(carbon_get_post_meta($post->ID, 'tech_get_result'))):?>
							<div class="checking__info-form-desc"><?php echo carbon_get_post_meta($post->ID, 'tech_get_result')?></div>
						<?php else:?>
						<div class="checking__info-form-desc">Проверка пропуска займет не более 15 сек. Вся информация подгружается с официального сайта <br/>Департамента транспорта
						</div>
					<?php endif;?>
					</form>
				</div>
			</div>

			<div class="checking__form">

				<form class="checking__form-container form__container">
					<h3 class="checking__form-heading">Подключите уведомление по пропускам на вашу почту и телефон</h3>
					
					
						<input type="text" name="gn" class="form__fields-item uniFormName" placeholder="Гос номер" required autocomplete="off">
						<input type="email" name="mail" class="form__fields-item uniFormMail" placeholder="e-mail*" required autocomplete="off">
						<input type="tel" name="phone_number" class="form__fields-item mascedtel uniFormTel" placeholder="Введите номер телефона" required autocomplete="off">
				
					
						<div class="checking__form-btn form__action-btn action-btn uniSendBtn" data-formid = "checform" data-mailmsg = "Форма - рядом с проверкой пропуска">Подключить</div>
					
				</form>
			</div>

		</div>
	</section> <!-- /.checking -->