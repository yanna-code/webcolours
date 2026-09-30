
<!--BANNIÈRE-->
<section id="#masthead" class="module-banner"> 
	
  <article class="container cta-banner">
    <hgroup>
      <h1 class="titre">Conception</h1>
      <h2 class="sous-titre">Design + Website</h2>
       <a href="#primary-home" style="margin:0;">
       <img src="<?php bloginfo('template_url'); ?>/assets/img/cercle-down.svg"  alt="arrow-down" width="40">
       </a>		
    </hgroup>	  
  </article>
	
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
	
</section>	

	

