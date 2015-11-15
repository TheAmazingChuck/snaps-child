<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Snaps
 * @since Snaps 1.0
 */
?>

	</div><!-- #main .site-main -->

	<?php get_sidebar(); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="social-menu">
	        <?php if ( has_nav_menu( 'social' ) ) {
	            wp_nav_menu( array( 'theme_location' => 'social', 'container' => 'false', 'menu_class' => 'menu-social' ));
	        } ?>
	    </div><!-- .social-menu -->
		<div class="site-info">
			Child Theme Wordpress codé par Charles Levasseur.
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>