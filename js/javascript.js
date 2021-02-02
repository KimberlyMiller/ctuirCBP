/**************** Menu - Start ****************/	
function w3_open() {
  document.getElementById("main").style.marginRight = "25%";
  document.getElementById("navSidebar").style.width = "25%";
  document.getElementById("navSidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginRight = "0%";
  document.getElementById("navSidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
function linkColor() {
var currentURL = window.location.href;
var list = document.getElementsByClassName('navButton');

for (var i=0; i<list.length; i++) {	
	if (list[i] == currentURL) {
			list[i].style.color  = "#ff9900";
		}
	}
}
linkColor();
/**************** Menu - End ****************/
	
	
/**************** Banner - Start ****************/
function banner() {	
window.onload = rotate;
var theAd = 0;
var adImages = new Array("../image/banner/arrowhead.png", "../image/banner/ctuir.png", "../animation/ani-banner-map-states.gif", "../image/banner/subway.png", "../image/banner/davita.png", "../image/banner/entrance.png", "../image/banner/kenworth.png", "../image/banner/forest-service.png", "../image/banner/wildhorse.png", "../image/banner/aerial.png");

function rotate() {
	theAd++;
	if (theAd == adImages.length) {
		theAd = 0;
	}
	document.getElementById("banner").src = adImages[theAd];
	
	setTimeout(rotate, 6 * 1000);
	}
}
banner();
/**************** Banner - End ****************/	
	
		
/**************** location - Start ****************/	
function locationGuide() {
var location = document.getElementById("location");	
	
	function symbolChange() {
		var pathArray = window.location.pathname.split('/'); /* Turned into an array at the slash */
		var section1 = pathArray[0];
		var section2 = pathArray[1].replace("-"," ");
		var section3 = pathArray[2].replace("-"," ").split('.'); /*Turned into an array at the dot between filename and extenstion*/

		var section3split = section3[0]; /*Accessing just the first part of the array to eliminate the .html form the second array*/
		
		location.innerHTML = section2 + " > " + section3split;
	}
	symbolChange();	
}	
locationGuide();
/**************** location - End ****************/


/**************** SiteMap page Map nav - Start ****************/
function openMap(cityName) {
    var i;
    var x = document.getElementsByClassName("map");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}

function btnChange(){
}
/**************** SiteMap page Map nav - End ****************/