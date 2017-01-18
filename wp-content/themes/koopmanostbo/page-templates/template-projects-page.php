<?php
/**
 * Template Name: Projects page
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="work">
	<div class="work-container">
		<div class="work-grid">
			<h2>All Projects</h2>
			<ul>
				<?php $args = array( 'post_type' => 'work_projects', 'posts_per_page' => -1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					echo '<li>';
					echo '<a href="';
					the_permalink();
					echo '">';
					echo '<img src="';
					the_field('work-thumb');
					echo '" />';
					echo '<span>';
					the_title();
					echo '</span>';
					echo '</a>';
					echo '</li>';
					endwhile;
				?>
				<?php wp_reset_query(); ?>
			</ul>
		</div>
	</div>
</div>
<div id="skills">
	<div class="skills-container">
		<div class="skills-list">
		<h2>Current & Past Clients</h2>
			<?php if( have_rows('client-list') ): ?>
				<ul>
				<?php while ( have_rows('client-list') ) : the_row(); ?>
					<li><a href="<?php the_sub_field('client-url'); ?>" target="_blank"><?php the_sub_field('client'); ?></a></li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
