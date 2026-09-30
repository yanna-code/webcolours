<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Webcolours
 */

get_header();
?>

<?php include_once("analyticstracking.php") ?>	

<!--BANNIÈRE-->
<div class="container-fluid module-404-banner">
	
   <div class="container cta-banner">
      <h1 class="titre"><?php echo get_the_title(); ?></h1>
   </div>
	
</div>

<main id="primary" class="site-main">

  <section class="module-404">	
	  
	  <div class="container">
        <div class="row">  

			<div class="col-xl-6 col-md-6 col-sm-12">
				<h2 class="page-title">Oops!<br> Cette page n'existe pas.</h2>
			</div>

			<div class="col-xl-6 col-md-6 col-sm-12">
				<p>Il semble que rien n'a été trouvé à cet endroit. <br>Peut-être en essayant une recherche?</p>

				<?php /*?><?php get_search_form(); ?><?php */?>
                <form id="searchform" method="get" action="/index.php">
                  <div class="form-inline">
					 <label for="s" class="screen-reader-text">Rechercher sur le site</label> 
                     <input type="text" name="s" id="s" size="15" placeholder="Votre recherche…" />
                     <button type="submit" value="Search" class="btn btn-primary"> Rechercher</button>
                  </div>
                 </form>
			
			</div>

          </div>
      </div>		  
		  
  </section>		

</main><!-- #main -->

<?php
get_footer();
