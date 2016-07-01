<?php
/**
 * The template for displaying front page.
 * @package mikei
 */


get_header(); ?>

	<div id="primary" class="content-area frontpage">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();

?>