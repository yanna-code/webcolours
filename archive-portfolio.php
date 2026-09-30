<?php
/*
Template Name: Portfolio
Template Post Type: post, page, product
*/
get_header();
?>

<?php include_once("analyticstracking.php") ?>	

<!--BANNIÈRE-->
<div class="container-fluid module-portfolio-banner">

</div>


	
<section class="module-portfolio">	
	
	
<!--TOUS LES CUSTOM POSTS TYPE DU PORTFOLIO-->	
		<div class="container">	
          <?php if(ICL_LANGUAGE_CODE=='fr'): ?>
		  <div class="separation-section">
			<div class="titre">PORTFOLIO</div>
			<p class="sous-t">Découvrez une sélection des meilleurs travaux réalisés</p>
		  </div>
          <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
		  <div class="separation-section">
			<div class="titre">PORTFOLIO</div>
			<p class="sous-t">Discover a selection of the best works carried out</p>
		  </div>
          <?php endif; ?>						
			
				<?php 
				$args = array( 
				'orderby' => 'publish_date',
				'post_type' => 'portfolio',
				'posts_per_page' => 30,
				);
				$the_query = new WP_Query( $args );
				?>
				<div class="row">	
					<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				    <div class="col-xl-12 col-md-4 col-sm-12" style="padding: 0;">
						<div class="card">
                          <div class="thumb">
                              <?php if ( has_post_thumbnail() ) : ?>
                                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
                              <?php endif; ?>
                          </div>
						</div>
					</div>	
					<?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
					<?php wp_reset_query(); ?>
				</div><!-- .row -->	
		</div>

</section>		

<?php
get_sidebar();
get_footer();
