<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package some_like_it_neat
 */
?>
	<?php tha_sidebars_before(); ?>

		<?php tha_sidebar_top(); ?>

		<?php do_action( 'before_sidebar' ); ?>

		<?php if ( ! dynamic_sidebar( 'sidebar-3' ) ) : ?>



    <?php endif; // end sidebar widget area ?>

    <?php tha_sidebar_bottom(); ?>

    <?php tha_sidebars_after(); ?>
