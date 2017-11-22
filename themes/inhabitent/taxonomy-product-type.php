<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header>
					<h1 class="page-title screen-reader-text"><?php the_archive_title(); ?></h1>
				</header>
				
		<?php if ( have_posts() ): ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_title(); ?>

			<?php endwhile; ?>

		

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
