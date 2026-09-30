<?php
/**
 * The template for displaying all pages
 *
 * @package Webcolours
 */

get_header();
?>

<!--ANALYTICS TRACKING-->
<?php include_once("analyticstracking.php") ?>

<?php
while ( have_posts() ) :
    the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; 
?>

<?php if(ICL_LANGUAGE_CODE=='fr'): ?>
<section class="module-services-homepage" id="primary-home">
  <article class="container">
    <div class="row">
      <div class="col-xl-4 col-md-4 col-sm-12">
        <div class="service-box"><a href="/services-professionnels-en-conception-design-programmation-et-diffusion-de-sites-internet-personnalises-montreal/">
        <!-- Alt plus descriptif -->
        <img src="/wp-content/themes/webcolours/assets/img/icone-design.svg" alt="Icône service Création : design graphique et web" width="60">	
           <h3>CRÉATION-f</h3>
          <p>Design graphique & Web</p>
          <p>Branding & Image de marque</p>
          <p>Contenu audiovisuel</p>
        </div></a>
      </div>
      <div class="col-xl-4 col-md-4 col-sm-12">
        <div class="service-box"><a href="/services-professionnels-en-conception-design-programmation-et-diffusion-de-sites-internet-personnalises-montreal/">
        <img src="/wp-content/themes/webcolours/assets/img/icone-website.svg" alt="Icône service Développement : sites internet sur mesure" width="60">
          <h3>DÉVELOPPEMENT</h3>
          <p>Site internet sur mesure</p>
          <p>CMS & E-Commerce</p>
          <p>Maintenance Web</p>
        </div></a>
      </div>	
      <div class="col-xl-4 col-md-4 col-sm-12">
        <div class="service-box"><a href="/services-professionnels-en-conception-design-programmation-et-diffusion-de-sites-internet-personnalises-montreal/">
        <img src="/wp-content/themes/webcolours/assets/img/icone-motion.svg" alt="Icône service Diffusion : stratégie marketing et consultation" width="60">
          <h3>DIFFUSION</h3>
          <p>Stratégie marketing</p>
          <p>Consultation</p>
          <p>Formation</p>
        </div></a>
      </div>	
    </div>	
  </article>	
  <article class="container module-rose-grand-mot"> </article>		
</section>	

<section class="module-intro-homepage">
  <div class="container">
    <div class="intro-accueil">	
      <div class="gauche">
      <!-- Alt plus descriptif -->
      <img src="/wp-content/themes/webcolours/assets/img/Webcolours_ipad-mini_responsive-design.png" alt="Maquette iPad mini affichant la page d'accueil du site Webcolours en responsive design">		
      </div>	
      <div class="droite">
      <h4>Écouter<br>
        recommander<br>
        développer</h4>	  
          <p>Webcolours est une agence créative fondée par <a href="https://www.linkedin.com/in/yanna-landry/" target="_blank" rel="noopener" aria-label="Profil LinkedIn de Yanna Landry (s'ouvre dans un nouvel onglet)">Yanna Landry</a>, artiste médiatique d’une expérience de plus de 15 ans dans le milieu des communications numériques. WC offre des services professionnels en design et en programmation de sites internet personnalisés... <br><a href="/agence-web-creative-situee-a-montreal-qui-ameliore-la-visibilite-de-ses-clients/" aria-label="En savoir plus sur l'agence Webcolours">[ En savoir plus ]</a></p>   
      </div>	
    </div>
  </div>	
</section>

<!--CUSTOM POST PORTFOLIO-->
<div class="container-fluid module-portfolio-homepage">
  <div class="container">
    <div class="separation-titre">
      <div class="titre">PORTFOLIO</div>  			
      <div class="plus">
        <a href="/portfolio/" aria-label="Voir tout le portfolio">
          <!-- Alt plus explicite -->
          <img src="<?php bloginfo('template_url'); ?>/assets/img/cercle-plus.svg" alt="Voir le portfolio" style="margin:0;padding:0;width: 26px !important;">
        </a>
      </div>	 		
    </div>
    <?php 
    $args = array( 
      'orderby' => 'publish_date',
      'post_type' => 'portfolio',
      'posts_per_page' => 6,
    );
    $the_query = new WP_Query( $args );
    ?>
    <div class="row">	
      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="col-xl-4 col-md-4 col-sm-12" style="padding: 0;">
          <div class="card">
            <div class="thumb">
            <?php if ( has_post_thumbnail() ) : ?>
              <!-- Le lien hérite de l'alt de l'image généré par WP, on ajoute un aria-label pour préciser -->
              <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?> – Voir le détail du projet">
                <?php the_post_thumbnail( 'medium_large' ); ?>
              </a>
            <?php endif; ?>
            </div>
          </div>
        </div>	
      <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>	
  </div>		
</div>

<section class="container-fluid module-siteperso-homepage">	
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4>SITE WEB UNIQUE</h4>  
        <p>100% personnalisé</p> <!-- balise fermante ajoutée -->
      </div>
    </div>
  </div>
</section>

<section class="module-cercle-creatif">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Alt plus descriptif -->
        <img src="/wp-content/themes/webcolours/assets/img/cercle_de_la_force_creatrice.svg" alt="Illustration du cercle de la force créatrice de Webcolours">	
        <p>Webcolours se démarque par sa force créatrice<br>
        et par sa volonté à améliorer les choses.</p>
        <a href="/agence-web-creative-situee-a-montreal-qui-ameliore-la-visibilite-de-ses-clients/" class="btn" aria-label="Consulter la page À propos de Webcolours">consulter</a>
      </div>
    </div>
  </div>
</section>

<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
<section class="module-services-homepage" id="primary-home">
  <article class="container">
    <div class="row">
      <div class="col-xl-4 col-md-4 col-sm-6 col-12">
        <div class="service-box"><a href="/services-professionnels-en-conception-design-programmation-et-diffusion-de-sites-internet-personnalises-montreal/">
        <img src="/wp-content/themes/webcolours/assets/img/icone-design.svg" alt="Icon Creation service: Graphic & Web design" width="60">	
           <h3>CREATION</h3>
          <p>Graphic & Web design</p>
          <p>Branding</p>
          <p>Audiovisual content</p>
        </div></a>
      </div>
      <div class="col-xl-4 col-md-4 col-sm-6 col-12">
        <div class="service-box"><a href="/services-professionnels-en-conception-design-programmation-et-diffusion-de-sites-internet-personnalises-montreal/">
        <img src="/wp-content/themes/webcolours/assets/img/icone-website.svg" alt="Icon Development service: Custom websites" width="60">
          <h3>DEVELOPMENT</h3>
          <p>Custom website</p>
          <p>CMS & E-Commerce</p>
          <p>Web Maintenance</p>
        </div></a>
      </div>	
      <div class="col-xl-4 col-md-4 col-sm-6 col-12">
        <div class="service-box"><a href="/services-professionnels-en-conception-design-programmation-et-diffusion-de-sites-internet-personnalises-montreal/">
        <img src="/wp-content/themes/webcolours/assets/img/icone-motion.svg" alt="Icon Diffusion service: Marketing strategy & consulting" width="60">
          <h3>DIFFUSION</h3>
          <p>Marketing strategy</p>
          <p>Consultation</p>
          <p>Training</p>
        </div></a>
      </div>	
    </div>	
  </article>	
  <article class="container module-rose-grand-mot"> </article>		
</section>	

<section class="module-intro-homepage">
  <div class="container">
    <div class="intro-accueil">	
      <div class="gauche">
      <img src="/wp-content/themes/webcolours/assets/img/Webcolours_ipad-mini_responsive-design.png" alt="iPad mini mockup showing Webcolours homepage in responsive design">		
      </div>	
      <div class="droite">
      <h4>Listen<br>
        recommend<br>
        develop</h4>	  
          <p>Webcolours is a creative agency founded by <a href="https://www.linkedin.com/in/yanna-landry/" target="_blank" rel="noopener" aria-label="Yanna Landry's LinkedIn profile (opens in a new tab)">Yanna Landry</a>, a media artist with over 15 years of experience in the digital communications sector. WC offers professional services in design and programming of personalized websites... <br><a href="/agence-web-creative-situee-a-montreal-qui-ameliore-la-visibilite-de-ses-clients/" aria-label="Learn more about Webcolours agency">[ Learn more ]</a></p>   
      </div>	
    </div>
  </div>	
</section>

<!--CUSTOM POST PORTFOLIO-->
<div class="container-fluid module-portfolio-homepage">
  <div class="container">
    <div class="separation-titre">
      <div class="titre">PORTFOLIO</div>  			
      <div class="plus">
        <a href="/portfolio/" aria-label="View all portfolio">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/cercle-plus.svg" alt="View portfolio" style="margin:0;padding:0;width: 26px !important;">
        </a>
      </div>	 		
    </div>
    <?php 
    $args = array( 
      'orderby' => 'publish_date',
      'post_type' => 'portfolio',
      'posts_per_page' => 6,
    );
    $the_query = new WP_Query( $args );
    ?>
    <div class="row">	
      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="col-xl-4 col-md-4 col-sm-12" style="padding: 0;">
          <div class="card">
            <div class="thumb">
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?> – View project details">
                <?php the_post_thumbnail( 'medium_large' ); ?>
              </a>
            <?php endif; ?>
            </div>
          </div>
        </div>	
      <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>	
  </div>		
</div>

<section class="container-fluid module-siteperso-homepage">	
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4>UNIQUE WEBSITE</h4>  
        <p>100% personalized</p>
      </div>
    </div>
  </div>
</section>

<section class="module-cercle-creatif">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img src="/wp-content/themes/webcolours/assets/img/cercle_de_la_force_creatrice.svg" alt="Illustration of Webcolours creative force circle">	
        <p>Webcolours stands out for its creative strength<br>
        and its desire to improve things.</p>
        <a href="/agence-web-creative-situee-a-montreal-qui-ameliore-la-visibilite-de-ses-clients/" class="btn" aria-label="Learn more about Webcolours">Learn more</a>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>

<!--POP-UP SUBSCRIBE-->
<?php /*?><div class="popup" id="popup">
<?php if(ICL_LANGUAGE_CODE=='fr'): ?>
  <div class="popup-content">
    <span class="close" role="button" tabindex="0" aria-label="Fermer la fenêtre d'inscription" onclick="closePopup()" onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();closePopup();}">&times;</span>
    <h2>Abonnez-vous à l'infolettre</h2>
    <p>Restez informé des dernières actualités et offres en vous inscrivant.</p>
    <div>  
      <?php echo do_shortcode('[mc4wp_form id=771]'); ?>
    </div> 	
  </div>
<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
  <div class="popup-content">
    <span class="close" role="button" tabindex="0" aria-label="Close subscription popup" onclick="closePopup()" onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();closePopup();}">&times;</span>
    <h2>Subscribe to our Newsletter</h2>
    <p>Stay updated with our latest news and offers by subscribing.</p>
    <?php echo do_shortcode('[mc4wp_form id=771]'); ?>
  </div>
<?php endif; ?>	
</div>	<?php */?>

<?php
get_sidebar();
get_footer();