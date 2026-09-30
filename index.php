<?php
/**
 * The main template file
 *
 * @package webcolours
 */

get_header();
?>

<!--ANALYTICS TRACKING-->
<?php include_once("analyticstracking.php") ?>

	<main id="primary" class="site-main" role="main" aria-label="<?php esc_attr_e( 'Main content', 'webcolours' ); ?>">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<!-- Ajout d’un id pour permettre un éventuel aria-labelledby sur le main -->
					<h1 id="blog-title" class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			// La fonction the_posts_navigation() génère déjà un <nav> avec aria-label="Posts" (WordPress 5.3+)
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();