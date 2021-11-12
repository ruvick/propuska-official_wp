<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mkad
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php $title = 1; get_template_part('template-parts/warranty');?>
			<?php $title = 1; get_template_part('template-parts/order-form-section');?>
			<?php $title = 1; get_template_part('template-parts/pass-mkad-ttk-sk')?>
			<?php $title = 1; get_template_part('template-parts/issuing-pass');?>
			<?php $title = 0; get_template_part('template-parts/advantages');?>
			<?php $title = 0; get_template_part('template-parts/doc');?>
			<?php $title = 1; get_template_part('template-parts/submit-application-1');?>
			<?php $title = 0; get_template_part('template-parts/steps');?>
			<?php $title = 0; get_template_part('template-parts/about');?>
			<?php $title = 0; get_template_part('template-parts/mails-section');?>
			<?php $title = 1; get_template_part('template-parts/submit-application-2');?>
			<?php $title = 0; get_template_part('template-parts/map');?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
