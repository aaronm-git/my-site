<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section>
		<?php if (have_posts()): the_post();?>
		<h1><?php _e( 'Author Archives for ' ); echo get_the_author(); ?></h1>
		<?php if ( get_the_author_meta('description')) : ?>
		<h2><?php _e( 'About ' ); echo get_the_author() ; ?></h2>
		<div class="post-description">
			<?php echo wpautop( get_the_author_meta('description') ); ?>
		</div>
		<?php endif; ?>
		<h1 class="content-subhead">Author Posts</h1>
		<?php rewind_posts(); while (have_posts()) : the_post(); ?>
		<?php get_template_part('article'); ?>
		<?php endwhile; ?>
		<?php else: ?>
		<article>
			<h2><?php _e( 'Sorry, nothing to display.'); ?></h2>
		</article>
		<?php endif; ?>
		<?php the_posts_pagination(); ?>
	</section>
</main>

<?php get_footer(); ?>
