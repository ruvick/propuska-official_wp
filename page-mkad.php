<?php

/*
Template Name: Пропуск на МКАД
*/
get_header();?>
<?php $title = 1; get_template_part('template-parts/warranty-page');?>
<?php $title = 1; get_template_part('template-parts/order-form-section');?>
<?php $title = 1; get_template_part('template-parts/price-section-page');?>
<?php $title = 1; get_template_part('template-parts/pass-no-waiting');?>
<?php $title = 0; get_template_part('template-parts/advantages');?>
<?php if(is_page(8)):?>
<?php $title = 1; get_template_part('template-parts/brands');?>
<?php endif;?>
<?php $title = 0; get_template_part('template-parts/doc');?>
<?php $title = 1; get_template_part('template-parts/submit-application-1');?>
<?php $title = 1; get_template_part('template-parts/steps');?>
<?php if(is_page(8)):?>
<?php $title = 0;  get_template_part('template-parts/about-mkad');?>
<?php elseif(is_page(16)):?>
<?php $title = 0; get_template_part('template-parts/about-sk');?>
<?php elseif(is_page(11)):?>
<?php $title = 0; get_template_part('template-parts/about-ttk');?>
<?php else:?>
<?php $title = 0; get_template_part('template-parts/about');?>
<?php endif;?>
<?php $title = 0; get_template_part('template-parts/mails-section');?>
<?php $title = 1; get_template_part('template-parts/submit-application-2');?>
<?php $title = 0; get_template_part('template-parts/map');?>
<?php
get_footer();