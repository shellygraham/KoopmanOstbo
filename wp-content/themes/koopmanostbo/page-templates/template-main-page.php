<?php
/**
 * Template Name: Main page
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="slider">
	Slider here
</div>

<div id="intro">
	<div class="intro-container">
		<?php while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

		<?php endwhile; // end of the loop. ?>
		<a href="" class="btn light">Learn More</a>
	</div>
</div>
<div id="buckets">
	<div class="buckets">
		<div class="bucket-holder">
			<h2>Expertise</h2>
			<?php if( have_rows('expertise-buckets') ): ?>
				<?php while ( have_rows('expertise-buckets') ) : the_row(); ?>
				<div class="bucket">
					<h3><?php the_sub_field('expertise_header'); ?></h3>
					<?php the_sub_field('expertise_text'); ?>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<a href="" class="btn">Go Deeper</a>
		</div>
	</div>
</div>
<div id="work">
	<div class="work-container">
		<div class="work-grid">
			<h2>Featured Work</h2>
			<h3>Take a look at what we’ve created.</h3>
			<ul>
				<?php $args = array( 'post_type' => 'work_projects', 'posts_per_page' => 3 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					echo '<li>';
					echo '<a href="';
					the_permalink();
					echo '">';
					echo '<img src="';
					the_field('work-thumb');
					echo '" />';
					echo '<div class="work-copy">';
					echo '<h3>';
					the_title();
					echo '</h3>';
					echo '<h4>';
					echo the_field('work_header');
					echo '</h4>';
					echo the_field('work_excerpt');
					echo '</div>';
					echo '</a>';
					echo '</li>';
					endwhile;
				?>
				<?php wp_reset_query(); ?>
			</ul>
		</div>
		<a href="/work" class="btn light">See All Work</a>
	</div>
</div>

<?php get_footer(); ?>
