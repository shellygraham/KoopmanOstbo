<?php
/**
 * The Template for displaying all single posts.
 *
 * @package some_like_it_neat
 */

get_header(); ?>
<div id="banner">
	<?php the_post_thumbnail(); ?>
</div>
<div id="intro" class="project">

		<?php while ( have_posts() ) : the_post(); ?>

	<div class="intro-container">

		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>

	</div>
	<div class="media-container">

		<a href="<?php the_field('site_url'); ?>" target="_blank"><?php the_post_thumbnail(); ?></a>

	</div>
		<?php endwhile; // end of the loop. ?>

</div>
<section id="more-projects">
	<h3>Related Projects</h3>
	<div class="more-container">
		<div class="thumbs-content">
			<?php $posts = get_field('related_project');
			if( $posts ): ?>
			    <ul>
			    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>
			        <li>
			            <a href="<?php the_permalink(); ?>">
			            	<img src="<?php the_field('work-thumb'); ?>" rel="<?php the_title(); ?>" />
			            	<span><span><?php the_title(); ?></span></span>
						</a>
			        </li>
			    <?php endforeach; ?>
			    </ul>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>

		</div>
	</div>
</section><!-- container -->

<?php get_footer(); ?>
