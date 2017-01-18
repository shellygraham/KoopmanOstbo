<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package some_like_it_neat
 */
?>
		<?php tha_content_bottom(); ?>

		</main><!-- #main -->

		<?php tha_content_after(); ?>
<section id="mega-footer">
	<div class="footer-container">
		<?php get_sidebar('footer'); ?>
	</div>
</section><!-- container -->

		<footer id="colophon" class="site-footer wrap" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">				

			<section class="site-info">
				
				<p>&copy; <?php echo date(Y) ?>. Koopman Ostbo. All rights reserved.</p>

			</section><!-- .site-info -->

		</footer><!-- #colophon -->


	</div><!-- .wrap -->

</div><!-- #page -->

<?php tha_body_bottom(); ?>

<?php wp_footer(); ?>

</body>
</html>
