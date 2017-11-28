<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 

				// NEVER USE query_posts
				// global query_string;
				// query_posts ('posts_per_page=4'); 
				
				
				if ( has_post_thumbnail() ) : ?>
				
			<div class="shop-entry-image-wrapper">
			<?php the_post_thumbnail( 'medium' ); ?>


		<?php endif; ?>

<div class="shop-entry-info">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<span class="dotted-line">..........................</span>
		<h2><?php echo CFS()->get( 'price' );?></h2>
</div>

</div>
		<?php 
		// if ( 'post' === get_post_type() ) :
		 ?>
		
		
		<?php 
	// endif; 
	?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		
	</div><!-- .entry-content -->
</article><!-- #post-## -->
