<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Webcolours
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> id="all">
		
<head>
	
<!-- Start cookieyes banner -->
<script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/fd2989810888a747ebc6e775/script.js"></script>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
		
<!-- Fonts -->	
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">	
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			
<!--JQUERY--> 	
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>	

<!-- Yoast-&-google -->	
<meta name="google-site-verification" content="fH0dAd_7myYASCxQZZZMskOh0P6Q3Z4ngfqD51fgdO0" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151670421-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-151670421-1');
</script>		

<?php wp_head(); ?>		
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'webcolours' ); ?></a>
	
	
<header>	
    <?php
    if (is_front_page()) {
	?>	

	<div class="module-header-homepage">
      <section class="container-fluid" id="masterhead">  
        <section class="container module-navbar">
            <section class="left">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php esc_attr_e( 'Go to homepage', 'webcolours' ); ?>">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/webcolours-logo-blanc.svg" alt="Webcolours - Accueil"/> 
              </a>
            </section>
			  <section class="right">
				<section class="module-menu">
				  <input type="checkbox" id="click" aria-controls="primary-menu" aria-expanded="false">
                  <label for="click" class="menu-btn">
                      <!-- Icône visible, masquée pour les lecteurs d'écran -->
                      <i class="fas fa-bars fa-2x" aria-hidden="true"></i>
                      <!-- Texte alternatif pour les lecteurs d'écran (masqué visuellement) -->
                      <span class="screen-reader-text"><?php esc_html_e( 'Toggle menu', 'webcolours' ); ?></span>
                  </label>
                  <ul class="nav__links" aria-label="<?php esc_attr_e( 'Main navigation', 'webcolours' ); ?>" role="list">	
                  <?php	
                    wp_nav_menu(
                    array(
                      'theme_location' => 'menu-1',
                      'menu_id'        => 'primary-menu',
                      'fallback_cb'    => false,  
                          )
                    );
                  ?>	
                  </ul>	
				</section>
			  </section>	  
        </section>
      </section>		
       <?php get_template_part( 'template-parts/banner' ); ?>
	</div>	
		
    
	<?php
    } else {
    ?>
	
	<div class="module-header-autrespages">
      <section class="container-fluid" id="masterhead">  
        <section class="container module-navbar">
            <section class="left">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php esc_attr_e( 'Go to homepage', 'webcolours' ); ?>">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-couleur.svg" alt="Webcolours - Accueil"/> 
              </a>
            </section>
			  <section class="right">
				<section class="module-menu">
				  <input type="checkbox" id="click" aria-controls="primary-menu" aria-expanded="false">
                  <label for="click" class="menu-btn">
                      <!-- Icône visible, masquée pour les lecteurs d'écran -->
                      <i class="fas fa-bars fa-2x" aria-hidden="true" style="color:black;"></i>
                      <!-- Texte alternatif pour les lecteurs d'écran (masqué visuellement) -->
                      <span class="screen-reader-text"><?php esc_html_e( 'Toggle menu', 'webcolours' ); ?></span>
                  </label>
                  <ul class="nav__links" aria-label="<?php esc_attr_e( 'Main navigation', 'webcolours' ); ?>" role="list">	
                  <?php	
                    wp_nav_menu(
                    array(
                      'theme_location' => 'menu-1',
                      'menu_id'        => 'primary-menu',
                      'fallback_cb'    => false,  
                          )
                    );
                  ?>	
                  </ul>	
				</section>
			  </section>	  
        </section>
      </section>	
	</div>		
		
	<?php	
    }	
    ?>	
	
</header>	
		
<!--<main id="primary" class="site-main">-->

