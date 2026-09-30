<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Webcolours
 */

?>

<!--</main>--><!-- #main -->

<!--CLIENTS-->
<section class="container-fluid module-carousel">
  <article class="container">
    <div id="ourclients">
    <center><h3 class="titre-separateur">CLIENTS</h3></center>	
      <div class="clients-wrap">
        <ul id="clientlogo" class="clearfix">
          <li>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/client-uqam.svg" alt="logo université du québec à montréal"/> 
          </li>		
          <li>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/client-udem.svg" alt="logo université de montréal"/>  
          </li>
          <li>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/client-mcgill.svg" alt="logo mcgill university"/> 
          </li>	
          <li>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/client-lux.svg" alt="logo lux éditeur"/> 
          </li>		
          <li>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/client-holisted.svg" alt="logo holisted"/> 
          </li>		
          <li>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/client-brams.svg" alt="logo brams"/> 
          </li>
          <li>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/client-cumberland.svg" alt="logo cumberland college"/> 
          </li>			
        </ul>
      </div>
    </div>		  		  
  </article>
</section>

<!--CTA IMAGINE-->
<?php if(ICL_LANGUAGE_CODE=='fr'): ?>
<section class="container-fluid module-cta-colours-gradient">
  <article class="row">
    <div class="col-12">
      <h4>imagine</h4>
      <p>que ton projet se réalise</p>
      <a href="/contactez-l-agence-pour-discuter-de-votre-projet-webcolours-sitee-a-montreal-quebec-canada/" class="btn btn-contour-blanc">maintenant</a>
    </div>
  </article>
</section>
<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
<section class="container-fluid module-cta-colours-gradient">
  <article class="row">
    <div class="col-12">
      <h4>imagine</h4>
      <p>that your project comes true</p>
      <a href="/contactez-l-agence-pour-discuter-de-votre-projet-webcolours-sitee-a-montreal-quebec-canada/" class="btn btn-contour-blanc">now</a>
    </div>
  </article>
</section>
<?php endif; ?>	

<!--FOOTER-->	
<footer class="container-fluid module-footer"> 	  
  <section class="container">
    <article class="col-12">    
      <a href="https://linkedin.com/company/webcolours-agence-web-creative target="_blank"">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/linkedin_gris.png"  alt="icone-linkedin" width="22">
      </a>
      <a href="https://www.facebook.com/pages/category/E-commerce-Website/Webcolours-104088271305812/" target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/cercle-facebook.svg"  alt="icone-facebook" width="22">
      </a>
      <a href = "mailto: webcolours11@gmail.com">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/letter_gris.png"  alt="icone-enveloppe" width="30">
      </a> 
      <?php if(ICL_LANGUAGE_CODE=='fr'): ?>
      <p>Située à Montréal (QC) Canada, Webcolours est une agence créative spécialisée en design et en programmation de sites Web personnalisés offrant des solutions à vos projets Web de types vitrine, blogue et boutique en ligne, entre autres.</p>	
      <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
      <p>Located in Montreal (QC) Canada, Webcolours is a creative agency specializing in the design and programming of personalized websites offering solutions to your web projects such as showcases, blogs and online stores, among others.</p>
      <?php endif; ?>			 
    </article>	
  </section>
</footer>

</div><!-- #page -->

<!--COPYRIGHTS-->	
  <?php if(ICL_LANGUAGE_CODE=='fr'): ?>
  <section class="container-fluid info-baseline">
    <article class="container">	
      <div class="contenu">
        <p> Conception web </p>
        <a href="https://webcolours.ca" target="_blank" title="Design Web personnalise" alt="Design Web Custom">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/webcolours-logo-blanc.svg" alt="logo Webcolours"/>   
        </a>				  
        <p>
        <a href="https://webcolours.ca" target="_blank" title="Design Web personnalise" alt="Design Web Custom"> Webcolours.ca</a> | © <?php echo date('Y'); ?> Webcolours - Tous droits réservés.
       </p>	   
     </div>
    </article>	
  </section>	
  <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
  <section class="container-fluid info-baseline">
    <article class="container">	
      <div class="contenu">
        <p> Website created by </p>
        <a href="https://webcolours.ca" target="_blank" title="Design Web personnalise" alt="Design Web Custom">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/webcolours-logo-blanc.svg" alt="logo Webcolours"/>   
        </a>				  
        <p>
        <a href="https://webcolours.ca" target="_blank" title="Design Web personnalise" alt="Design Web Custom"> Webcolours.ca</a> | © <?php echo date('Y'); ?> Webcolours - All rights reserved.
       </p>	   
     </div>
    </article>	
  </section>
  <?php endif; ?>	



<?php wp_footer(); ?>
	
</body>


<script>
$(function() {
  var $clientslider = $('#clientlogo');
  var clients = $clientslider.children().length;
  var clientwidth = (clients * 220); 
  $clientslider.css('width', clientwidth);
  var rotating = true;
  var clientspeed = 1800;
  var seeclients = setInterval(rotateClients, clientspeed);
  $(document).on({
    mouseenter: function() {
      rotating = false;
    },
    mouseleave: function() {
      rotating = true;
    }
  }, '#ourclients');
  function rotateClients() {
    if (rotating != false) {
      var $first = $('#clientlogo li:first');
      $first.animate({
        'margin-left': '-220px'
      }, 2000, function() {
        $first.remove().css({
          'margin-left': '0px'
        });
        $('#clientlogo li:last').after($first);
      });
    }
  }
});
	
/*ACCESSIBILITY BUTTONS TEXT-CONTRAST*/
document.addEventListener("DOMContentLoaded", function() {
    const increaseTextSizeButton = document.getElementById('increase-text-size');
    const decreaseTextSizeButton = document.getElementById('decrease-text-size');
    const toggleContrastButton = document.getElementById('toggle-contrast');

    // Load user preferences from local storage
    const textSize = localStorage.getItem('textSize') || 16;
    const contrast = localStorage.getItem('contrast') || 'normal';

    document.body.style.fontSize = textSize + 'px';
    document.body.classList.add(contrast);

    // Event listeners for buttons
    increaseTextSizeButton.addEventListener('click', function() {
        let currentTextSize = parseInt(document.body.style.fontSize);
        currentTextSize += 2;
        document.body.style.fontSize = currentTextSize + 'px';
        localStorage.setItem('textSize', currentTextSize);
    });

    decreaseTextSizeButton.addEventListener('click', function() {
        let currentTextSize = parseInt(document.body.style.fontSize);
        currentTextSize -= 2;
        document.body.style.fontSize = currentTextSize + 'px';
        localStorage.setItem('textSize', currentTextSize);
    });

    toggleContrastButton.addEventListener('click', function() {
        document.body.classList.toggle('high-contrast');
        localStorage.setItem('contrast', document.body.classList.contains('high-contrast') ? 'high-contrast' : 'normal');
    });
});

/*TEXTE EN MOUVEMENT PAGE SERVICES*/	
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

</html>