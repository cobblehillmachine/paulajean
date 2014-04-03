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
<?php } else if(is_page('Press')) { ?>
	<div class="copy">
		<div class="services-divider cont"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/services-divider.png" /></div>
	</div>
	<div id="press-cont" class="copy">
		<div  class="cont">
			<?php query_posts(array('post_type' => 'Press',  'order' => 'ASC', 'posts_per_page' => 100)); ?>
	
			    <ul class="bxslider">
					<?php while ( have_posts() ) : the_post(); ?>
						<li class="slide-thumb">
							<div class="mag-cover"><?php the_post_thumbnail('press-thumb'); ?></div>
							<div class="info-cont cont">
								<div class="title"><?php the_title(); ?></div>
								<?php if ( get_post_meta($post->ID, 'link_url', true) ) { ?><a href="<?php the_field('link_url'); ?>" target="_blank">View Online</a><?php } ?>	
							</div>			
						</li>
					<?php endwhile; wp_reset_query(); ?>
				</ul>
		</div>
	</div>
<?php } ?>

<?php get_footer();
