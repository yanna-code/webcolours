<header id="masthead" class="container-fluid module-site-top-default">
 
	 <div class="container site-header">
 
          <div class="site-branding">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img src="/wp-content/themes/webcolours/images/logo-couleur.svg" alt=""/></a>
          </div><!-- .site-branding -->

          <div class="site-navigation">	
              <nav id="site-navigation" class="navbar">
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
	
</header><!-- #masthead-autres-pages -->