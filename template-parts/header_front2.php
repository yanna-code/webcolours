
<header id="masthead" class="container-fluid module-site-top">
 
	<div class="container site-header">
 
        <div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="Retour à l'accueil">
			   <img src="<?php bloginfo('template_url'); ?>/images/logo-blanc.svg"  alt="">	
			</a>
		</div><!-- .site-branding -->

		<div class="site-navigation" >	
			
            <nav id="site-navigation" class="navbar" aria-label="Menu principal">
              <ul class="main-navigation">
                <?php
                  wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',				
                    )
                  );
                ?>	 
              </ul>
               <div class="container-toggle">
                <button class="hamburger">&#9776;</button>
                <button class="cross">&#735;</button>
              </div>		

            </nav><!-- #site-navigation -->		
			
		</div>	

      </div><!-- .site-header -->	

      <div class="menu-ouvert">
        <ul>
          <?php
            wp_nav_menu(
              array(
                  'theme_location' => 'menu-1',
                  'menu_id'        => 'primary-menu',
              )
            );
          ?>	  
        </ul>
      </div> 	
	
<div class="module-cta-banner">
  <h1 class="titre">Conception</h1>
  <h2 class="sous-titre">Design + Website</h2>
   <a href="#primary-home" style="margin:0;">
       <img src="<?php bloginfo('template_url'); ?>/images/cercle-down.svg"  alt="arrow-down" width="40">
   </a>
</div>
	
<script>
var textWrapper = document.querySelector('.titre');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.titre .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: (el, i) => 150 * (i+1)
  }).add({
    targets: '.titre',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>		
		

</header><!-- #masthead -->