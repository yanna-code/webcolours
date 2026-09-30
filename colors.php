<?php
/*
Template Name: colors
*/
get_header();
?>

<div class="container-fluid module-page-generateur-harmonie-couleurs">

  <div class="container module-couleurs">
   <div class="titre">
    <h1><?php the_title();?></h1>	 
    <p>Explorez des combinaisons de couleurs parfaitement équilibrées avec notre générateur d'harmonie des couleurs, un outil indispensable pour libérer votre créativité et harmoniser vos projets visuels.</p>	   
   </div>		  
    <div class="row">	
      <div class="col-xl-12 col-md-12 col-sm-12">
		<div class="picker"> 
		  <input type="color" id="colorPicker" value="#CA295C">	
          <!--<input type="color" id="colorPicker" value="#ff0000">-->
		  <p class="sous-t">Choisir une couleur et voir <br>les combinaisons qui s'harmonisent :</p>	
		</div>	
      </div>		
      <div class="row combinaisons">	
        <div class="col-xl-6 col-md-6 col-sm-12 cont">		  
          <p style="margin:0 0 6px 0">Combinaison de couleurs : <span>monochromatic</span></p>
          <div id="monochromatic"></div>
        </div>	
        <div class="col-xl-6 col-md-6 col-sm-12 cont">	  
          <p style="margin:0 0 6px 0">Combinaison de couleurs : <span>Analogous</span></p>
          <div id="adjacent"></div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12 cont">	
          <p style="margin:0 0 6px 0">Combinaison de couleurs : <span>triad</span></p>
          <div id="triad"></div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12 cont">	
          <p style="margin:0 0 6px 0">Combinaison de couleurs : <span>tetrad</span></p>
          <div id="tetrad"></div>	
        </div>	  
      </div>	
    </div>	
  </div>	
	
<!--<div class="col-xl-12 col-md-12 col-sm-12">
<h2>L'utilisation des couleurs</h2>		
<p>
L'utilisation judicieuse des couleurs est essentielle dans la création d'un design graphique efficace. Les couleurs ne se contentent pas de rendre un design attrayant ; elles structurent également la perception et interagissent avec les émotions du spectateur, jouant ainsi un rôle crucial dans la communication des messages et des valeurs de la marque.
</p>
<p>	
<h3>Principes de base de l'harmonie des couleurs</h3>
<p>		
L'harmonie des couleurs fait référence à l'agrément visuel ressenti lorsque les couleurs se complètent mutuellement. Voici quelques stratégies fondamentales :
</p>	
<p>
Utilisation du cercle chromatique : Le cercle chromatique est un outil vital pour comprendre les relations entre les couleurs. Les designers s'en servent pour identifier les couleurs complémentaires (situées directement en face l'une de l'autre sur le cercle), les couleurs analogues (situées côte à côte), et les triades (trois couleurs équidistantes sur le cercle).
</p>	
<h3>
Accords de couleurs :
</h3>	
<p>
Complémentaires : Des couleurs opposées sur le cercle chromatique qui, une fois combinées, offrent un contraste élevé et une grande vivacité.
Analogues : L'utilisation de couleurs adjacentes sur le cercle offre une sensation de calme et de continuité.
Triadiques : Trois couleurs espacées uniformément offrent un équilibre dynamique, idéal pour des designs audacieux.
Le contraste : Le contraste entre les couleurs aide à rendre un design lisible et à hiérarchiser l'information. Un contraste élevé entre le texte et le fond peut améliorer la clarté et l'accessibilité.
</p>	
<p>
La saturation et la luminosité : La saturation désigne l'intensité d'une couleur, tandis que la luminosité détermine sa brillance. Jouer avec ces aspects peut aider à créer de la profondeur et à guider l'œil du spectateur.
</p>	
<h3>Psychologie des couleurs</h3>
<p>
Chaque couleur évoque des émotions et des associations spécifiques :
</p>	
<p>
Rouge : énergie, passion, danger.
Bleu : calme, confiance, professionnalisme.
Vert : nature, croissance, santé.
Jaune : optimisme, joie, attention.
En comprenant ces associations, les designers peuvent utiliser les couleurs pour renforcer un message spécifique ou évoquer une réaction particulière chez le spectateur.
</p>	
<p>
Application pratique
Pour appliquer efficacement ces principes, les designers doivent considérer le contexte culturel et démographique de leur public cible. Par exemple, les couleurs vives peuvent captiver un public jeune, tandis que des teintes plus sobres pourraient être préférées pour des contextes professionnels ou traditionnels.
</p>	
<p>
L'harmonie des couleurs ne se limite pas à suivre des règles rigides ; c'est aussi une question d'expérimentation et de créativité. Les meilleurs designs souvent naissent d'une combinaison d'approches techniques et d'une compréhension intuitive des effets visuels des couleurs.
</p>	
<p>
En résumé, maîtriser l'harmonie des couleurs en design graphique ne consiste pas seulement à choisir des couleurs qui se marient bien, mais aussi à comprendre comment ces couleurs peuvent être utilisées pour influencer l'expérience et les émotions du spectateur, en créant des compositions visuelles qui sont à la fois esthétiquement agréables et stratégiquement efficaces.
</p>
</div>-->	
	
</div>	


<script>
    function componentToHex(c) {
        const hex = c.toString(16);
        return hex.length === 1 ? "0" + hex : hex;
    }

    function rgbToHex(r, g, b) {
        return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
    }

    function hslToRgb(h, s, l) {
        // Convert HSL to RGB
        let r, g, b;

        if (s == 0) {
            r = g = b = l; // achromatic
        } else {
            const hue2rgb = (p, q, t) => {
                if (t < 0) t += 1;
                if (t > 1) t -= 1;
                if (t < 1/6) return p + (q - p) * 6 * t;
                if (t < 1/2) return q;
                if (t < 2/3) return p + (q - p) * (2/3 - t) * 6;
                return p;
            }
            const q = l < 0.5 ? l * (1 + s) : l + s - l * s;
            const p = 2 * l - q;
            r = hue2rgb(p, q, h + 1/3);
            g = hue2rgb(p, q, h);
            b = hue2rgb(p, q, h - 1/3);
        }
        return [Math.round(r * 255), Math.round(g * 255), Math.round(b * 255)];
    }
    function updateColors() {
        const hexColor = document.getElementById('colorPicker').value;
        // Convert hex to RGB then to HSL
        let r = parseInt(hexColor.slice(1, 3), 16);
        let g = parseInt(hexColor.slice(3, 5), 16);
        let b = parseInt(hexColor.slice(5, 7), 16);
        let [h, s, l] = rgbToHsl(r, g, b);

        // Monochromatic: same hue, different lightness
        const monoLightness = [0.2, 0.5, 0.8].map(light => hslToRgb(h, s, light));

        // Adjacent colors: hue shifted by small angles
        const adjacentHues = [-30, 0, 30].map(angle => hslToRgb((h + angle/360) % 1, s, l));

        // Triad colors: hue shifted by 120 degrees
        const triadColors = [0, 120, 240].map(angle => hslToRgb((h + angle/360) % 1, s, l));

        // Tetrad colors: 4 colors spaced by 90 degrees
        const tetradColors = [0, 90, 180, 270].map(angle => hslToRgb((h + angle/360) % 1, s, l));

        // Display functions for each row
        displayColors('monochromatic', monoLightness);
        displayColors('adjacent', adjacentHues);
        displayColors('triad', triadColors);
        displayColors('tetrad', tetradColors);
    }
    function displayColors(elementId, colorArray) {
        const container = document.getElementById(elementId);
        container.innerHTML = ''; // Clear previous
        colorArray.forEach(rgb => {
            const hex = rgbToHex(...rgb);
            const colorBlock = document.createElement('div');
            colorBlock.className = 'color-block';
            colorBlock.style.backgroundColor = hex;
            colorBlock.textContent = hex.toUpperCase();
            container.appendChild(colorBlock);
        });
    }
    function rgbToHsl(r, g, b) {
        r /= 255, g /= 255, b /= 255;
        const max = Math.max(r, g, b), min = Math.min(r, g, b);
        let h, s, l = (max + min) / 2;

        if (max == min) {
            h = s = 0; // achromatic
        } else {
            const d = max - min;
            s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
            switch (max) {
                case r: h = (g - b) / d + (g < b ? 6 : 0); break;
                case g: h = (b - r) / d + 2; break;
                case b: h = (r - g) / d + 4; break;
            }
            h /= 6;
        }
        return [h, s, l];
    }
    document.getElementById('colorPicker').addEventListener('change', updateColors);
    updateColors(); // Initial setup
</script>


	
	
<?php
get_sidebar();
get_footer();