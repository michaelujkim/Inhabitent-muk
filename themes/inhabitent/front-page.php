<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><?php bloginfo( 'name' ); ?>
					</h1>
					<p class="site-description">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-tent.svg'?>" class="header-logo"></a>
						
</p>
					
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content-front">

	<div id="primary" class="content-area-home">
		<main id="main" class="site-main-home" role="main">
    <div class="home-hero">
		<img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg'?>" class="home-hero-logo">
		
		</div>

		<section class="product-info container">
          <div class="home-shop-header">
							<h2 >Shop Stuff</h2>
					</div>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product-type',
                   'hide_empty' => 0,
							 ) );
							 
							 
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">

                  <?php foreach ( $terms as $term ) : ?>

                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>

                  <?php endforeach; ?>

               </div>
               
            <?php endif; ?>
         </section>

		<div class="home-journal-header">
					<h2>Inhabitent Journal</h2>
</div>

<div class="home-journal">
		<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC','posts_per_page'   => 3 );
   $product_posts = get_posts( $args ); 
?>
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
<div class="journal-entry-home">
		<?php the_post_thumbnail( 'medium' );?>
		<p><span class="journal-entry-meta-home">
		<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> </span>
		<p class="journal-entry-title-home"><?php the_title();?></p>

		<p><a href="<?php the_permalink(); ?>" class="read-more-button-home">read entry</a></p>
		
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>

<div class="home-adventures-header">
					<h2>Latest Adventures</h2>
</div>

<div class="home-adventures">
	<div class="adventure-1"><h1>Getting Back to Nature in a Canoe</h1>
							 </div>
							 <div class="adventure-2">
								 <h1>A Night with Friends at the Beach</h1>
							 </div>
							 <div class="adventure-3"><h1>Taking in the View at Big Mountain</h1></div>
							 <div class="adventure-4"><h1>Star-gazing at the Night Sky</h1></div>

							 </div>
							 <h1 class="more-adventures"> More Adventures</h1>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
