<?php
 $filename = basename($_SERVER['PHP_SELF']); // get filename of this page
 $logoFile = strpos($filename,"wanapa")!==false ? "logo-wanapa.jpg" : "logo.jpg";
?>

<html lang="en">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />

<link rel="stylesheet" type="text/css" href="../css/style.css"media="screen" />
<link rel="stylesheet" type="text/css" href="../css/print.css" media="print" />

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3473258-29', 'auto');
  ga('send', 'pageview');

(function () {
    'use strict';

    if (!('addEventListener' in window)) {
        return;}

    var htmlElement = document.querySelector('html');

    function touchStart () {
        document.querySelector('html').classList.remove('hover ul');

        htmlElement.removeEventListener('touchstart', touchStart);
    }

    htmlElement.addEventListener('touchstart', touchStart);
}());
</script>

<button id="openNav" class="navButton openNav-button" onclick="w3_open()">MENU &#9776;</button>

 <div id="navSidebar" class="sidebar-container sidebarShadow navAnimate-right" style="display:none" >
  <button class="sidebarShadow navButton navClose-button" onclick="w3_close()">Close &times;</button>

<div id="menuList">
<h2>Site Selection</h2>
<a class="navButton" href="https://www.coyotebusinesspark.com/site-selection/sites-buildings.html">Sites Overview</a>
<a class="navButton" href="https://www.coyotebusinesspark.com">Coyote Business Park</a>	
<a class="navButton" href="https://www.wanapaindustrialsite.com">Wanapa Industrial Site</a>	
<a class="navButton" href="../site-selection/target-industries.html">Target Industries</a>
<a class="navButton" href="../site-selection/whats-different.html">What's Different?</a>
<a class="navButton" href="../site-selection/tax-incentives.html">Tax Incentives</a>
<a class="navButton" href="../site-selection/utilities.html">Utilities</a>
<a class="navButton" href="../site-selection/transportation.html">Transportation</a>	
<a class="navButton" href="../site-selection/demographics.html">Demographics</a>
<a class="navButton" href="../site-selection/workforce.html">Workforce</a>
<a class="navButton" href="../site-selection/current-tenants.html">Current Tenants</a>
<a class="navButton" href="../site-selection/area-employers.html">Area Employers</a>
<a class="navButton" href="../site-selection/development-experience.html">Development Experience</a>

<h2>Data & Demographics</h2>
<a class="navButton" href="../site-selection/demographics.html">Demographics</a>
<a class="navButton" href="../site-selection/workforce.html">Workforce</a></li>
<a class="navButton" href="../data-demographics/cost-of-living.html">Cost of Living</a>
<a class="navButton" href="../data-demographics/taxes.html">Taxes</a>
<a class="navButton" href="../data-demographics/cost-comparison.html">Cost Comparison</a>
        
<h2>Business Resources</h2>
<a class="navButton" href="../site-selection/tax-incentives.html">Tax Incentives</a>
<a class="navButton" href="../business-resources/business-financing.html">Business Financing</a>
<a class="navButton" href="../business-resources/business-counseling.html">Business Counseling</a>
<a class="navButton" href="../business-resources/employee-training.html">Employee Training</a>

<h2><span>Living Here</h2>
<a class="navButton" href="../living-here/climate.html">Climate</a>
<a class="navButton" href="../data-demographics/cost-of-living.html">Cost of Living</a>
<a class="navButton" href="../living-here/housing.html">Housing</a>  
<a class="navButton" href="../living-here/public-transportation.html">Public Transportation</a>
<a class="navButton" href="../living-here/healthcare.html">Healthcare</a>
<a class="navButton" href="../living-here/culture-arts-entertainment.html">Culture, Arts, Entertainment</a>
<a class="navButton" href="../living-here/recreation.html">Recreation</a>

<h2>About Us</h2>
<a class="navButton" href="../contact/contact.html"aria-haspopup="true">Contact Us</a>
<a class="navButton" href="../contact/development-team.html">Development Team</a>
<a class="navButton" href="../contact/industry-representation.html">Industry Representation</a>
<a class="navButton" href="../contact/links-documents.html">Links & Documents</a>
<a class="navButton" href="../contact/regional-affiliations.html">Regional Affiliations</a>
	</div>
</div>

<a href="http://coyotebusinesspark.com"><img id="logo"  class="logo" src="../image/logos/<?php echo $logoFile; ?>" title="Go to Coyote Business Park homepage" alt="This is an image of the Coyote Business Park logo that shows the states in the Pacific Northwest of the United States of America. The black dot shows that the land for lease is located in the eastern part of Oregon State. When the logo is clicked it goes to the homepage."></a>
	
<img class="bannermedium" src="../image/banner/banner-map-states.png" allowTransparency="true">

<img id="banner" class="bannerImg banneranime" src="../image/banner/banner-map-states.png" style="width:106.1%;" /> 

<p id="location" style="padding:28px; color:#C1C1C1; font-style: italic; text-transform: capitalize;"> </p>
	
	
<!--start: Social profiles for Google's local businesses-->
<!--added this August 7, 2019... check in a few weeks to see if it worked.-->
<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "Organization",
	  "name": "Coyote Business Park",
	  "url": "https://www.coyotebusinesspark.com/",
	  "logo": "https://www.coyotebusinesspark.com/image/logos/logo.jpg",
	  "description": "Coyote Business Park is a part of the CTUIRs Economic Development Department with commercial & industrial lots and tax incentives for relocating business to the reservation.",
	  
	  "sameAs": [
		"linkedin.com/company/coyote-business-park",
		"https://www.facebook.com/coyote.business.park",
		"https://twitter.com/Coyote_Biz_Park"
	  ],
	  
	  "address": {
		"@type": "PostalAddress",
		"addressLocality": "Pendleton",
		"addressRegion": "OR",
		"streetAddress": "46411 Ti'mine Way"
	  },

	  "contactPoint": [{
		"@type": "ContactPoint",
		"telephone": "+1-541-966-2121",
		"contactType": "customer service"
		}]
	}
</script>
<!--end: Social profiles for Google's local businesses-->