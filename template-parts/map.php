<section class="map">
    <div class="container">
      <?php //echo carbon_get_theme_option('mkad_map');?>
      
	  <div id = "mapLine" class = "mapLine"></div>
	  
	  <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
		<script>
								  ymaps.ready(init);

								  function init () {
									
									  var myMap = new ymaps.Map("mapLine", {
											  center: <?php echo carbon_get_theme_option('mkad_map_point') ?>,
											  zoom: 14,
											  controls: ['zoomControl']
										  }),

										myPlacemarkAdr = new ymaps.Placemark(<?php echo carbon_get_theme_option('mkad_map_point') ?>, {
											  iconContent: '',
											  balloonContent: 'Наш адрес: <b><?php echo carbon_get_theme_option('mkad_address') ?></b><br/>Телефон: <b> <?php echo carbon_get_theme_option('mkad_phone') ?>',
											  hintContent: 'Наш адрес: <b><?php echo carbon_get_theme_option('mkad_address') ?></b><br/>Телефон: <b> <?php echo carbon_get_theme_option('mkad_phone') ?>',
										  }, {
											iconLayout: 'default#image',
											iconImageHref: '<?php bloginfo("template_url"); ?>/img/pointermapmaster.svg',
											iconImageSize: [30, 54],
											iconImageOffset: [-15, -54]
										  });
										  
										  myMap.geoObjects.add(myPlacemarkAdr);
										  
										
										
										


									myMap.behaviors.disable('scrollZoom');
								  }
					</script>

	  
	  <div class="map-content">
        <span class="map-content__title">Наш адрес:</span>
        <div class="address">
          <?php echo carbon_get_theme_option('mkad_address');?>
        </div>
        <span class="map-content__title">Наши контакты:</span>
        <a href="tel:<?php echo str_replace(array('(', ')', ' ', '-', '_'), '', carbon_get_theme_option('mkad_phone'))?>" class="map-phone__link"><?php echo carbon_get_theme_option('mkad_phone');?></a>
        <a href="mailto:<?php echo carbon_get_theme_option('mkad_email')?>" class="map-email__link"><?php echo carbon_get_theme_option('mkad_email')?></a>
      </div>
    </div>
  </section>