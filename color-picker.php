



  <label for="colorPicker">Choose a color:</label>
  <input type="color" id="colorPicker" name="colorPicker" value="#ff0000">


		
<div id="color-picker" onclick="getColor(event)"></div>
<div id="selected-color"></div>

<script>
function getColor(event) {
    var colorPicker = document.getElementById('color-picker');
    var rect = colorPicker.getBoundingClientRect();
    var x = event.clientX - rect.left;
    var y = event.clientY - rect.top;
    var centerX = colorPicker.offsetWidth / 2;
    var centerY = colorPicker.offsetHeight / 2;
    var deltaX = x - centerX;
    var deltaY = y - centerY;
    var angle = Math.atan2(deltaY, deltaX);
    if (angle < 0) {
        angle += 2 * Math.PI;
    }
    var hue = angle / (2 * Math.PI);
    var saturation = Math.sqrt(deltaX * deltaX + deltaY * deltaY) / (colorPicker.offsetWidth / 2);
    var lightness = 0.5;

    var selectedColor = document.getElementById('selected-color');
    selectedColor.style.backgroundColor = 'hsl(' + Math.round(hue * 360) + ', ' + Math.round(saturation * 100) + '%, ' + Math.round(lightness * 100) + '%)';
}
</script>
		
