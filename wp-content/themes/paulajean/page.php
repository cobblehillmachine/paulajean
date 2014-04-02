<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php if(is_page('Services')) { ?>
	<div class="copy">
		<div class="gray-cont cont"><?php the_field('info_copy'); ?></div>
		<div class="services-divider cont"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/services-divider.png" /></div>
		<div class="services-cont row">
			<div class="col"><?php the_field('services_column_left'); ?></div>
			<div class="col"><?php the_field('services_column_right'); ?></div>
		</div>
	</div>
<?php } ?>

<?php
get_footer();
