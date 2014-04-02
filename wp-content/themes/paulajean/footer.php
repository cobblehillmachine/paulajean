<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
				</div>
			</div>
		</div>
		<div id="footer" class="cont">
			<div class="mid-cont">
				<div class="footer-box">
					<a class="cont" href="callto:<?php the_field('footer_phone', 'user_2'); ?>" target="_blank"><strong><?php the_field('footer_phone', 'user_2'); ?></strong></a>
					<a class="cont" href="mailto:<?php the_field('footer_email', 'user_2'); ?>" target="_blank"><?php the_field('footer_email', 'user_2'); ?></a>
				</div>
				<div class="divider desktop"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/divider-1.png" /></div>
				<div id="social-cont" class="box">
					<div class="inline">
						<a id="pinterest" href="<?php the_field('pinterest_url', 'user_2'); ?>" target="_blank" class="social-icon"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png" /></a>
						<a id="twitter" href="<?php the_field('twitter_url', 'user_2'); ?>" target="_blank" class="social-icon"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" /></a>
						<a id="facebook" href="<?php the_field('facebook_url', 'user_2'); ?>" target="_blank" class="social-icon"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" /></a>
						<a id="instagram" href="<?php the_field('instagram_url', 'user_2'); ?>" target="_blank" class="social-icon"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" /></a>
					</div>
				</div>
				<div class="divider desktop"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/divider-2.png" /></div>
				<div class="footer-box">
					<strong class="cont"><?php the_field('footer_tagline', 'user_2'); ?></strong>
					<span class="cont"><?php the_field('footer_copyright', 'user_2'); ?></span>
				</div>
			</div>
		</div>
<?php wp_footer(); ?>

</body>
</html>