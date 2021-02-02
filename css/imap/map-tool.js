function mapToggle(checkBox, mapSwitch) {
	
// Variables
var map_toggles = document.getElementById('map-toggles').getElementsByTagName('input');
var layer_toggles = document.getElementById('layer-toggles');
var all_maps = document.getElementById('map-container').getElementsByTagName('div');

var selected_map = document.getElementById(mapSwitch);
	
// [ Hide all maps ] [ Hide layer toggles ] [ Uncheck all layer checkboxes ].
for(x = 0; x < map_toggles.length; x++) {
	all_maps[x].style.display = 'none';
	layer_toggles.style.display = 'none';
	document.getElementById('tagline').style.display = "none";
}
	
// Turn on selected map
selected_map.style.display = 'block';

}
