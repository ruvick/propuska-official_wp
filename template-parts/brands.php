<?php

function is_current_post_start($brand_id) {
	global $post;
	$current_post_id = $post->ID;
	if($brand_id === $current_post_id) {
		echo '<div class="brands-item">';
	} else {
		echo '<a href="' . get_permalink($brand_id) . '" class="brands-item">';
	}
}
function is_current_post_end($brand_id) {
	global $post;
	$current_post_id = $post->ID;
	if($brand_id === $current_post_id) {
		echo '</div>';
	} else {
		echo '</a>';
	}
}
?>
<section class="brands">
	<div class="container">
      <?php 
      global $title;
        if($title == 0):
      ?>
		<p class="section-title">Оформляем пропуска на МКАД на все бренды грузовых ТС</p>
      <?php else:?>
		<p class="section-title">Оформляем пропуска на МКАД на все бренды грузовых ТС</p>
    <?php endif;?>
		<div class="brands-wrapper">
			<?php is_current_post_start(34)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/gaz_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Газ</div>
			<?php is_current_post_end(34);?>
			<?php is_current_post_start(36)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/zil_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Зил</div>
			<?php is_current_post_end(36);?>
			<?php is_current_post_start(38)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/kamaz_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Камаз</div>
			<?php is_current_post_end(38);?>
			<?php is_current_post_start(40)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/maz_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">МАЗ</div>
			<?php is_current_post_end(40);?>
			<?php is_current_post_start(42)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/ural_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Урал</div>
			<?php is_current_post_end(42);?>
			<?php is_current_post_start(26)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/daewoo_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">DAEWOO</div>
			<?php is_current_post_end(26);?>
			<?php is_current_post_start(44)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/daf_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">DAF</div>
			<?php is_current_post_end(44);?>
			<?php is_current_post_start(46)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/ford_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">FORD</div>
			<?php is_current_post_end(46);?>
			<?php is_current_post_start(48)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/foton_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">FOTON</div>
			<?php is_current_post_end(48);?>
			<?php is_current_post_start(50)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/howo_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Howo</div>
			<?php is_current_post_end(50);?>
			<?php is_current_post_start(52)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/hino_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Hino</div>
			<?php is_current_post_end(52);?>
			<?php is_current_post_start(54)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/hyundai_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Hyunday</div>
			<?php is_current_post_end(54);?>
			<?php is_current_post_start(56)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/isuzu_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Isuzu</div>
			<?php is_current_post_end(56);?>
			<?php is_current_post_start(58)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/iveco_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Iveco</div>
			<?php is_current_post_end(58);?>
			<?php is_current_post_start(60)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/man_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Man</div>
			<?php is_current_post_end(60);?>
			<?php is_current_post_start(62)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/mersedes_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Mersedes</div>
			<?php is_current_post_end(62);?>
			<?php is_current_post_start(64)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/mitsubishi_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">MITSUBISHI</div>
			<?php is_current_post_end(64);?>
			<?php is_current_post_start(66)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/scania_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Scania</div>
			<?php is_current_post_end(66);?>
			<?php is_current_post_start(68)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/shaanxi_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Shaanxi</div>
			<?php is_current_post_end(68);?>
			<?php is_current_post_start(70)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/volvo_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Volvo</div>
			<?php is_current_post_end(70);?>
		</div>
	</div>
</section>