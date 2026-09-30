<?php /* Template Name: services */ ?>
<?php get_header(); ?>

<!--BANNIÈRE-->
<div class="container-fluid module-services-banner">
  <div class="container">
	<div class="row">
      <h1 class="mots-animes">
        <span class="item">Votre</span>
        <span class="item">projet</span>
      </h1>		
	</div>
  </div>
</div>


<script>	
anime.timeline({loop: true})
  .add({
    targets: '.mots-animes .item',
    scale: [14,1],
    opacity: [0,1],
    easing: "easeOutCirc",
    duration: 800,
    delay: (el, i) => 800 * i
  }).add({
    targets: '.mots-animes',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>

<main id="primary" class="site-main">
	
<section class="module-services">

  <div class="container" style="padding-bottom:4rem;">
      <div class="row">

            <div class="col-1-3 mobile-col-1-1">
                <div class="service-box">
                  <img src="<?php bloginfo('template_url'); ?>/images/icone-design.svg" alt="design" width="80">	
                  <h2>CRÉATION</h2>
                    <p>Design graphique & Web</p>
                    <p>Branding & Image de marque</p>
                    <p>Shooting Photo & Vidéo</p>
                 </div>
            </div>

            <div class="col-1-3 mobile-col-1-1">
                <div class="service-box">
                  <img src="<?php bloginfo('template_url'); ?>/images/icone-website.svg" alt="web" width="80">
                  <h2>DÉVELOPPEMENT</h2>
                  <p>Site internet sur mesure</p>
                  <p>CMS & E-Commerce</p>
                  <p>Maintenance Web</p>
               </div>
            </div>

            <div class="col-1-3 mobile-col-1-1">
                <div class="service-box">
                  <img src="<?php bloginfo('template_url'); ?>/images/icone-motion.svg"  alt="animation" width="80">
				  <h2>DIFFUSION</h2>
                  <p>Stratégie marketing</p>
                  <p>Consultation</p>
                  <p>Formation</p>
               </div>
            </div>

      </div>
  </div>
	
<!--CTA WAVE-->
<div class="container">	
<div class="module-cta-wave">
	<div class="cont" >
	  <div class="contenu">
        <h3>BESOIN D'INFORMATION?</h3>
        <p>Pour toutes questions concernant un projet </p>
        <a href="/contactez-l-agence-pour-discuter-de-votre-projet-webcolours-sitee-a-montreal-quebec-canada/" class="btn-xs btn-secondary">Écrivez-nous</a>
		
	  </div>
    </div>
  <p class="baseline">+++</p>
</div>
</div>		
	
<div class="container">	
<div class="module-services-details">	
	<div class="row">
          <div class="col-1-1">
            <h4>TERMES</h4>
            <p><span>Branding</span> : développement de votre image de marque (ex. logo, charte graphique, font...).
            <span>Design UX</span>  : (user experience) concevoir une interface accessible et facile à prendre en main pour tout type de support.
            <span>Design UI</span>  : (user interface) concevoir une interface agréable par le biais duquel une personne entre en contact avec votre produit.
            <span>Imagerie</span>  : création d'images personnalisées (illustration et photographie) pour votre branding.
            <span>Website sur mesure</span>  : conception et programmation de votre site internet selon vos besoins visuels et techniques.
            <span>CMS</span>  : système de gestion de contenu destiné à la mise à jour dynamique de votre site ou application web.
            <span>E-Commerce</span>  : votre commerce en ligne et vos échanges de biens, de services ou d'informations.
            <span>Maintenance</span>  : consiste à s’assurer du bon fonctionnement d'un site internet.
            <span>Stratégie marketing</span>  : démarche d’étude et de réflexion entre l'offre et la demande.
            <span>Consultation</span>  : services-conseils web selon vos besoins.
            <span>Formation</span>  : design UX,UI, Wordpress et languages de programmation web.
			  </p>
          </div>
	</div>
</div>
</div>	

</section>	
	
<!--CTA ECRANS-->
<?php get_template_part( 'template-parts/cta_ecrans' ); ?>	
<!--CTA IMAGINE-->
<?php get_template_part( 'template-parts/cta_imagine' ); ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
