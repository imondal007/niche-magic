<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Niche_Magic
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-container">
			<?php 
				if ( function_exists( 'the_custom_logo' ) ) {
    			the_custom_logo();
				} 
				wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); 
			?>
			<div class="site-info">
				<p class="font_small">© 2017 by Fishing Picks | FishingPicks.com is a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for sites to earn advertising fees by advertising & linking to Amazon properties including, but not limited to, amazon.com</p>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
