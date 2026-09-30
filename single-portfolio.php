<?php
/*
Template Name: Portfolio single
Template Post Type: post, page, product
*/
get_header();
?>

<?php include_once("analyticstracking.php") ?>	

<main id="primary" class="site-main2">

  <!--BANNIÈRE-->
<div class="container-fluid module-single-portfolio-banner">
   <div class="container">
        <div class="row">	 
           <div class="info">
			   <h1 class="title"><span>folio</span> | <?php  the_title();  ?></h1>	  
           </div>			 
      </div>
    </div>
  </div>
	
	
  <section class="container module-single-portfolio">	

	  
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="row">

      <div class="col-12">

        <div class="contenu">
			<?php  the_content();  ?>
		  </div>
		 	  
		  <!--TAXONOMIE-->
          <div class="container module-taxonomie">			
              <p class="cpt-taxonomie">
                  <?php the_terms( $post->ID, 'categories', 'Categories : ', ' ' ); ?>
              </p>
          </div>			
		  
		</div>  
		
	</div>	

	   <?php endwhile; ?> 


           <!--ARROWS-->		
        <div class="arrowNav">
          <div class="arrowLeft">
          <?php next_post_link('%link', '«', FALSE); ?>		
          </div>
          <div class="arrowRight">
          <?php previous_post_link('%link', '»', FALSE); ?>
          </div>
        </div> 


  </section>	


</main><!-- #main -->



<?php
get_sidebar();
get_footer();
