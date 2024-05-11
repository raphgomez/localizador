<?php
session_start();
//check session variable
if(isset($_SESSION['valid_user']))
{
?>
<!DOCTYPE html>
<html style="height: 100%;" lang="en-US"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>info_Control_Procesos.asp.php</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="HTML,CSS,JavaScript,SQL,PHP,jQuery,XML,DOM,Bootstrap,Web development,W3C,tutorials,programming,training,learning,quiz,primer,lessons,references,examples,source code,colors,demos,tips">
<meta name="Description" content="Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, and XML.">
<link rel="icon" type="image/png" id="favicon" href="img/Logo.png"/>
<link rel="stylesheet" href="w3css_slideshow.asp_files/w3.css">
<style>
a:hover,a:active{color:#4CAF50}
table.w3-table-all{margin:20px 0}
/*OPPSETT AV TOP, TOPNAV, SIDENAV, MAIN, RIGHT OG FOOTER:*/
.top {
position:relative;
background-color:#ffffff;
height:68px;
padding-top:20px;
line-height:50px;
overflow:hidden;
z-index:2;
}
.w3schools-logo {
font-family:fontawesome;
text-decoration:none;
line-height:1;
-webkit-font-smoothing:antialiased;
-moz-osx-font-smoothing:grayscale;
font-size:37px;
letter-spacing:3px;
color:#555555;
display:block;
position:absolute;
top:17px;
}
.w3schools-logo .dotcom {color:#4CAF50}
.topnav {
position:relative;
z-index:2;
font-size:17px;
background-color:;
background-image: url(img/SiteInfo.jpg);
color:#f1f1f1;
width:100%;
padding:0;
letter-spacing:1px;
font-family:"Segoe UI",Arial,sans-serif;
}
.topnav a{
padding:10px 15px 9px 15px !important;
}
.topnav .w3-bar a:hover{
background-color:#000001 !important;
color:#ffffff !important;
}
.topnav .w3-bar a.active {
background-color:#4CAF50;
color:#ffffff;
}
a.topnav-icons {
width:52px !important;
font-size:20px !important;
padding-top:11px !important;
padding-bottom:13px !important;
}
a.topnav-icons.fa-home {font-size:22px !important}
a.topnav-localicons {
font-size:20px !important;
padding-top:6px !important;
padding-bottom:12px !important;
}
i.fa-caret-down,i.fa-caret-up{width:10px}
#sidenav h2 {
font-size:21px;
padding-left:16px;
margin:-4px 0 4px 0;
width:204px;
}
#sidenav a {font-family:"Segoe UI",Arial,sans-serif;text-decoration:none;display:block;padding:2px 1px 1px 16px}
#sidenav a:hover {color:#000000;background-color:#cccccc;}
#sidenav a.active {background-color:#4CAF50;color:#ffffff}
#leftmenuinner {
position:fixed;
top:0;
padding-top:112px;
padding-bottom:0;    
height:100%;
width:220px;
background-color:transparent;
}
#leftmenuinnerinner {
height:100%;
width:100%;
overflow-y:scroll;
overflow-x:hidden;
padding-top:20px;
}
#main {padding:16px}
#mainLeaderboard {height:90px}
#right {text-align:center;padding:16px 16px 0 0}
#right a {text-decoration:none}
#right a:hover {text-decoration:underline}
#skyscraper {min-height:600px}
.sidesection {margin-bottom:32px;}
.bottomad {padding:0 16px 16px 0;float:left;width:auto;}
.footer a {text-decoration:none;}
.footer a:hover{text-decoration:underline;}
#nav_tutorials,#nav_references,#nav_examples{-webkit-overflow-scrolling:touch;overflow:auto;}
#nav_tutorials::-webkit-scrollbar,#nav_references::-webkit-scrollbar,#nav_examples::-webkit-scrollbar {width: 12px;}
#nav_tutorials::-webkit-scrollbar-track,#nav_references::-webkit-scrollbar-track,#nav_examples::-webkit-scrollbar-track {background:#555555;}
#nav_tutorials::-webkit-scrollbar-thumb,#nav_references::-webkit-scrollbar-thumb,#nav_examples::-webkit-scrollbar-thumb {background: #999999;}
#nav_tutorials,#nav_references,#nav_examples {
display:none;
letter-spacing:0;
margin-top:44px;
}
#nav_tutorials a,#nav_references a,#nav_examples a{
padding:2px 0 !important;
}
.w3-example{background-color:#f1f1f1;padding:0.01em 16px;margin:20px 0;box-shadow:0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important}
.nextprev a {font-size:17px;border:1px solid #cccccc;}
.nextprev a:link,.nextprev a:visited {background-color:#ffffff;color:#000000;}
.nextprev a.w3-right {background-color:#4CAF50;color:#ffffff;border-color:#4CAF50}
.w3-theme {color:#fff !important;background-color:#73AD21 !important;background-color:#4CAF50 !important}
.w3-theme-border {border-color:#4CAF50 !important}
.fa-facebook-square,.fa-twitter-square,.fa-google-plus-square {padding:0 8px;}
.fa-facebook-square:hover, .fa-thumbs-o-up:hover {color:#3B5998;}
.fa-twitter-square:hover {color:#55acee;}
.fa-google-plus-square:hover {color:#dd4b39;}
#google_translate_element img {margin-bottom:-1px;}
#googleSearch {color:#000000;}
#googleSearch a {padding:0 !important;}
.searchdiv {max-width:400px;margin:auto;text-align:left;font-size:16px}
div.cse .gsc-control-cse, div.gsc-control-cse {background-color:transparent;border:none;padding:6px;margin:0px}
td.gsc-search-button input.gsc-search-button {background-color:#4CAF50;border-color:#4CAF50}
td.gsc-search-button input.gsc-search-button:hover {background-color:#46a049;}
input.gsc-input, .gsc-input-box, .gsc-input-box-hover, .gsc-input-box-focus, .gsc-search-button {
box-sizing:content-box; line-height:normal;}
.gsc-tabsArea div {overflow:visible;}
/*"nullstille" w3css:*/
.w3-main{transition:margin-left 0s;}
/*"nullstilling" slutt*/
@media (min-width:1675px) {
#main {width:79%}
#right {width:21%}
}
@media (max-width:992px) {
.top {height:100px}
.top img {display:block;margin:auto;}
.top .w3schools-logo {position:relative;top:0;width:100%;text-align:center;margin:auto}
.toptext {width:100%;text-align:center}
#sidenav {width:260px;}
#sidenav h2 {font-size:26px;width:100%;}
#sidenav a {padding:3px 2px 3px 24px;font-size:17px}
#leftmenuinner {  
box-shadow:0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
overflow:auto;
-webkit-overflow-scrolling:touch;
height:100%;
position:relative;
width:auto;
padding-top:0;
background-color:#f1f1f1;
}
#leftmenuinnerinner {overflow-y:scroll}
.bottomad {float:none;text-align:center}
#skyscraper {min-height:60px}
}
@media screen and (max-width:600px) {
.top {height:68px}
.toptext {display:none}
}
@font-face {
font-family:'fontawesome';
src: url('../lib/fonts/fontawesome.eot?14663396');
src:url('../lib/fonts/fontawesome.eot?14663396#iefix') format('embedded-opentype'),
url('../lib/fonts/fontawesome.woff?14663396') format('woff'),
url('../lib/fonts/fontawesome.ttf?14663396') format('truetype'),
url('../lib/fonts/fontawesome.svg?14663396#fontawesome') format('svg');
font-weight:normal;
font-style:normal;
}
.fa {
display:inline-block;
font:normal normal normal 14px/1 FontAwesome;
font-size:inherit;
text-rendering:auto;
-webkit-font-smoothing:antialiased;
-moz-osx-font-smoothing:grayscale;
transform:translate(0, 0);
}
.fa-2x {
 font-size:2em;
}
.fa-home:before {content:'\e800';}
.fa-globe:before {content:'\e801';}
.fa-search:before {content:'\e802'; }
.fa-thumbs-o-up:before {content:'\e803';}
.fa-left-open:before {content:'\e804';}
.fa-right-open:before {content:'\e805';}
.fa-facebook-square:before {content:'\e806';}
.fa-google-plus-square:before {content:'\e807';}
.fa-twitter-square:before {content:'\e808';}
.fa-caret-down:before {content:'\e809';}
.fa-caret-up:before {content:'\e80a';}
span.marked, span.deprecated {
 color:#e80000;
 background-color:transparent;
}
.intro {font-size:16px}
.w3-btn, .w3-btn:link, .w3-btn:visited {color:#FFFFFF;background-color:#4CAF50}
a.w3-btn[href*="exercise.asp"] {margin:10px 5px 0 0}
a.btnplayit,a.btnplayit:link,a.btnplayit:visited {background-color:#FFAD33;padding:1px 10px 2px 10px}
a.btnplayit:hover,a.btnplayit:active {background-color:#ffffff;color:#FFAD33}
a.btnsmall:link,a.btnsmall:visited,a.btnsmall:active,a.btnsmall:hover {
float:right;padding:1px 10px 2px 10px;font:15px Verdana, sans-serif}
a.btnsmall:active,a.btnsmall:hover {color:#4CAF50;background-color:#ffffff}
@media screen and (max-width:700px) {
#mainLeaderboard {height:60px}
#div-gpt-ad-1422003450156-0 {float:none;margin-left:auto;margin-right:auto}
#div-gpt-ad-1422003450156-3 {float:none;margin-left:auto;margin-right:auto}
}
@media (max-width:1600px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(16){display:none;}}
@media (max-width:1500px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(12){display:none;}}
@media (max-width:1410px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(11){display:none;}}
@media (max-width:1350px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(10){display:none;}}
@media (max-width:1230px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(9){display:none;}}
@media (max-width:1140px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(8){display:none;}}
@media (max-width:1000px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(7){display:none;}}
@media (max-width:992px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(6){display:none;}}
@media (max-width:930px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(17){display:none;}}
@media (max-width:800px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(18){display:none;}}
@media (max-width:650px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(5){display:none;} #topnav .w3-bar:nth-of-type(1) a:nth-of-type(15){display:none;}}
@media (max-width:460px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(4){display:none;}}
@media (max-width:400px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(3){display:none;}}
.w3-note{background-color:#ffffcc;border-left:6px solid #ffeb3b}
.w3-warning{background-color:#ffdddd;border-left:6px solid #f44336}
.w3-info{background-color:#ddffdd;border-left:6px solid #4CAF50}
hr[id^="ez-insert-after-placeholder"] {margin-top: 0;}
.year {
  position: absolute;
    top: 20px;
    width: 170px;
    height: 56px;
    font-size: 14px;
    font-weight:600;
    color: #000;
    margin: 73px 200px;
    border-radius: 10px;
    transition: background .5s;
    background: rgba(0,0,80,0.2);
	box-shadow: 5px 10px 10px rgba(0,0,15,0.8);
}
.year1 {
  position: absolute;
    top: 20px;
    width: 215px;
    height: 56px;
    font-size: 12px;
    font-weight:600;
    color: #000;
    margin: 73px 410px;
    border-radius: 10px;
    transition: background .5s;
    background: rgba(0,0,80,0.2);
	box-shadow: 5px 10px 10px rgba(0,0,15,0.8);
}
.year2 {
  position: absolute;
    top: 20px;
    width: 210px;
    height: 56px;
    font-size: 14px;
    font-weight:600;
    color: #000;
    margin: 288px 455px;
    border-radius: 10px;
    transition: background .5s;
    background: rgba(0,0,80,0.2);
	box-shadow: 5px 10px 10px rgba(0,0,15,0.8);
}
.year3 {
  position: absolute;
    top: 20px;
    width: 205px;
    height: 56px;
    font-size: 14px;
    font-weight:600;
    color: #000;
    margin: 288px 205px;
    border-radius: 10px;
    transition: background .5s;
    background: rgba(0,0,80,0.2);
	box-shadow: 5px 10px 10px rgba(0,0,15,0.8);
}
.year4 {
  position: absolute;
    top: 20px;
    width: 105px;
    height: 63px;
    font-size: 14px;
    font-weight:600;
    color: #000;
    margin: 168px 355px;
    border-radius: 10px;
    transition: background .5s;
    background: rgba(0,0,80,0.2);
	box-shadow: 5px 10px 10px rgba(0,0,15,0.8);
}
.year5 {
  position: absolute;
    top: 20px;
    width: 155px;
    height: 76px;
    font-size: 14px;
    font-weight:600;
    color: #000;
    margin: 168px 475px;
    border-radius: 10px;
    transition: background .5s;
    background: rgba(0,0,80,0.2);
	box-shadow: 5px 10px 10px rgba(0,0,15,0.8);
}
.year6 {
  position: absolute;
    top: 20px;
    width: 135px;
    height: 76px;
    font-size: 14px;
    font-weight:600;
    color: #000;
    margin: 168px 205px;
    border-radius: 10px;
    transition: background .5s;
    background: rgba(0,0,80,0.2);
	box-shadow: 5px 10px 10px rgba(0,0,15,0.8);
}
.year7 {
  position: absolute;
    top: 20px;
    width: 169px;
    height: 155px;
    font-size: 14px;
    font-weight:600;
    color: #000;
    margin: 86px 365px;
    border-radius: 65px;
    transition: background .5s;
    background: rgba(0,0,80,0.01);
	box-shadow: 5px 10px 10px rgba(0,0,15,0.8);
}
.mobile-container4 {
  max-width: 1210px;
  margin: -1px;
  background-color: #ffffff;
  padding: 16px 20px;	
  height: 392px;
  width: 1210px;
  color: darkblue;
  border-radius: 10px 25px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container5 {
  /* Encierra Procesos Operativos */
  max-width: 610px;
  margin: -170px 1px;
  background-color: #cccccc;
  padding: 56px 80px;	
  height: 50px;
  width: 1610px;
  color: blue;
  border-radius: 10px 25px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container6 {
  /* Encierra procesoprimero */
  max-width: 138px;
  margin: -70px -60px;
  background-color: #ffffff;
  padding: 40px 8px;	
  height: 100px;
  top: 20px;
  font-weight:600;
  transition: background .5s;
  width: auto;
  color: black;
  border-radius: 10px 15px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container7 {
  /* Encierra procesosegundo */
  max-width: 138px;
  margin: -90px 100px;
  background-color: #ffffff;
  padding: 46px 8px;	
  height: 1px;
  width: auto;
  font-size: 12;
  color: black;
  border-radius: 10px 15px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container8 {
    /* Encierra proceso  */
  max-width: 610px;
  margin: -90px 260px;
  background-color: #ffffff;
  padding: 46px 8px;	
  height: 1px;
  width: 108px;
  font-size: 12;
  color: blue;
  border-radius: 10px 25px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container9 {
    /* Encierra proceso  */
  max-width: 610px;
  margin: -1px 400px;
  background-color: #ffffff;
  padding: 46px 8px;	
  height: 1px;
  width: 108px;
  font-size: 12;
  color: black;
  border-radius: 10px 25px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container10 {
  /* Encierra procesosegundo */
  max-width: 610px;
  margin: 10px -80px;
  background-color: #cccccc;
  padding: 56px 80px;	
  height: 25px;
  width: 1610px;
  font-size: 12;
  color: blue;
  border-radius: 10px 25px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container11 {
  /* Encierra procesoprimero */
  max-width: 610px;
  margin: -70px -60px;
  background-color: #ffffff;
  padding: 46px 8px;	
  height: 1px;
  width: 108px;
  font-size: 12;
  color: blue;
  border-radius: 10px 25px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container12 {
  /* Encierra procesosegundo */
  max-width: 610px;
  margin: -90px 100px;
  background-color: #ffffff;
  padding: 46px 8px;	
  height: 1px;
  width: 108px;
  font-size: 12;
  color: blue;
  border-radius: 10px 25px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container13 {
    /* Encierra proceso  */
  max-width: 610px;
  margin: -95px 260px;
  background-color: #ffffff;
  padding: 46px 8px;	
  height: 1px;
  width: 108px;
  font-size: 12;
  color: blue;
  border-radius: 10px 25px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container14 {
    /* Encierra proceso  */
  max-width: 610px;
  margin: 5px 400px;
  background-color: #ffffff;
  padding: 46px 8px;	
  height: 1px;
  width: 108px;
  font-size: 12;
  color: blue;
  border-radius: 10px 25px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container15 {
  /* Encierra procesosegundo */
  max-width: 610px;
  margin: 16px -80px;
  background-color: #cccccc;
  padding: 56px 80px;	
  height: 25px;
  width: 1610px;
  font-size: 12;
  color: blue;
  border-radius: 10px 25px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container16 {
  /* Encierra procesoprimero */
  max-width: 610px;
  margin: -70px -60px;
  background-color: #ffffff;
  padding: 46px 8px;	
  height: 1px;
  width: 108px;
  font-size: 12;
  color: blue;
  border-radius: 10px 25px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container17 {
  /* Encierra procesosegundo */
  max-width: 610px;
  margin: -90px 100px;
  background-color: #ffffff;
  padding: 46px 8px;	
  height: 1px;
  width: 108px;
  font-size: 12;
  color: blue;
  border-radius: 10px 25px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container18 {
    /* Encierra proceso  */
  max-width: 610px;
  margin: -90px 260px;
  background-color: #ffffff;
  padding: 46px 8px;	
  height: 1px;
  width: 108px;
  font-size: 12;
  color: blue;
  border-radius: 10px 25px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container19 {
    /* Encierra proceso  */
  max-width: 610px;
  margin:-5px 400px;
  background-color: #ffffff;
  padding: 46px 8px;	
  height: 1px;
  width: 108px;
  font-size: 12;
  color: blue;
  border-radius: 10px 25px 20px;
  float: center;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.porciento {
  position: absolute;
    top: 10px;
    width:2px;
    height: 3px;
    font-size: 30px;
    font-weight:100;
    margin: 95px 89px;
	border-radius: 25px;
    transition: background .5s;
	box-shadow: 10px 10px 20px rgba(0,0,150,0.8);
}
<!--
body {<?php
	//Sentencia de control
	$hoy = date("H:i:s"); 
	if($hoy < '14:11:16')
	{?>background-image: url(img/SiteInfo.jpg);<?php
	} 
	else ?>
	background-image: url(img/SiteInfo.jpg);
}
-->
</style>
<script src="w3css_slideshow.asp_files/cse.js" async="" type="text/javascript"></script><script src="w3css_slideshow.asp_files/gpt.js" type="text/javascript" async=""></script><script src="w3css_slideshow.asp_files/analytics.js" async=""></script><script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-3855518-1', 'auto');
ga('require', 'displayfeatures');
ga('send', 'pageview');
</script>
<script type="text/javascript">
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
gads.src = 'https://www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>
<script type="text/javascript">
// GPT slots
var gptAdSlots = [];
googletag.cmd.push(function() {
var leaderMapping = googletag.sizeMapping().
// Mobile ad
addSize([0, 0], [320, 50]). 
// Vertical Tablet ad
addSize([480, 0], [468, 60]). 
// Horizontal Tablet
addSize([780, 0], [728, 90]).
// Small Desktop
addSize([993, 0], [468, 60]).
// Normal Desktop
addSize([1150, 0], [728, 90]).
// Large Desktop and bigger ad
addSize([1425, 0], [[728, 90], [970, 90]]).build();
gptAdSlots[0] = googletag.defineSlot('/16833175/MainLeaderboard', [[728, 90], [970, 90]], 'div-gpt-ad-1422003450156-2').
defineSizeMapping(leaderMapping).addService(googletag.pubads());
var skyMapping = googletag.sizeMapping().
// Mobile ad
addSize([0, 0], [320, 50]). 
// Tablet ad
addSize([975, 0], [120, 600]). 
// Desktop
addSize([1135, 0], [160, 600]).   
// Large Desktop
addSize([1675, 0], [[160, 600], [300, 600], [300, 1050]]).build();
gptAdSlots[1] = googletag.defineSlot('/16833175/WideSkyScraper', [[160, 600], [300, 600], [300, 1050]], 'div-gpt-ad-1422003450156-5').
defineSizeMapping(skyMapping).addService(googletag.pubads());
var stickyMapping = googletag.sizeMapping().
// Mobile ad
addSize([0, 0], []). 
// Tablet ad
addSize([975, 0], [120, 600]). 
// Desktop
addSize([1135, 0], [160, 600]).   
// Large Desktop
addSize([1675, 0], [[160, 600], [300, 600], [300, 250]]).build();
gptAdSlots[4] = googletag.defineSlot('/16833175/StickySkyScraper', [[300, 600], [120, 600], [300, 250], [160, 600]], 'div-gpt-ad-1472547360578-0').
defineSizeMapping(stickyMapping).addService(googletag.pubads());
var mcontMapping = googletag.sizeMapping().
// Mobile ad
addSize([0, 0], [[300, 250], [336, 280], [320, 50]]). 
// Vertical Tablet ad
addSize([490, 0], [[300, 250], [336, 280], [468, 60]]). 
// Horizontal Tablet
addSize([750, 0], [728, 90]).
// Small Desktop
addSize([993, 0], [[300, 250], [336, 280], [468, 60]]).
// Normal Desktop
addSize([1135, 0], [728, 90]).
// Large Desktop and bigger ad
addSize([1440, 0], [[728, 90], [970, 90], [970, 250]]).build();
gptAdSlots[5] = googletag.defineSlot('/16833175/MidContent', [[300, 250], [336, 280]], 'div-gpt-ad-1493883843099-0').
defineSizeMapping(mcontMapping).setCollapseEmptyDiv(true).addService(googletag.pubads());
var bmrMapping = googletag.sizeMapping().
// Smaller
addSize([0, 0], [[300, 250], [336, 280]]). 
// Large Desktop
addSize([1240, 0], [[300, 250], [336, 280], [970, 250]]).build();
gptAdSlots[2] = googletag.defineSlot('/16833175/BottomMediumRectangle', [[300, 250], [336, 280], [970, 250]], 'div-gpt-ad-1422003450156-0').
defineSizeMapping(bmrMapping).setCollapseEmptyDiv(true).addService(googletag.pubads());
var rbmrMapping = googletag.sizeMapping().
// Smaller
addSize([0, 0], []). 
// Large Desktop
addSize([975, 0], [[300, 250], [336, 280]]).build();
gptAdSlots[3] = googletag.defineSlot('/16833175/RightBottomMediumRectangle', [[300, 250], [336, 280]], 'div-gpt-ad-1422003450156-3').
defineSizeMapping(rbmrMapping).setCollapseEmptyDiv(true).addService(googletag.pubads());
googletag.pubads().setTargeting("content",(function () {
  var folder = location.pathname;
  folder = folder.replace("/", "");
  folder = folder.substr(0, folder.indexOf("/"));
  return folder;
})()
);
googletag.enableServices();
});
</script>
<script type="text/javascript">
var stickyadstatus = "";
function fix_stickyad() {
  var elem = document.getElementById("stickyadcontainer");
  if (!elem) {return false;}
  if (document.getElementById("skyscraper")) {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("skyscraper"), "width").replace("px", ""));  
    }
  else {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("right"), "width").replace("px", ""));  
  }
  elem.style.width = skyWidth + "px";
  if (window.innerWidth <= 992) {
    elem.style.position = "";
    elem.style.top = stickypos + "px";
    return false;
  }
  var stickypos = document.getElementById("stickypos").offsetTop;
  var docTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
  var adHeight = Number(w3_getStyleValue(elem, "height").replace("px", ""));
  if (stickyadstatus == "") {
    if ((stickypos - docTop) < 60) {
      elem.style.position = "fixed";
      elem.style.top = "60px";
      stickyadstatus = "sticky";
    }
  } else {
    if ((docTop + 60) - stickypos < 0) {  
      elem.style.position = "";
      elem.style.top = stickypos + "px";
      stickyadstatus = "";
    }
  }
  if (stickyadstatus == "sticky") {
    if ((docTop + adHeight + 60) > document.getElementById("footer").offsetTop) {
      elem.style.position = "absolute";
      elem.style.top = (document.getElementById("footer").offsetTop - adHeight) + "px";
    } else {
        elem.style.position = "fixed";
        elem.style.top = "60px";
        stickyadstatus = "sticky";
    }
  }
}
function w3_getStyleValue(elmnt,style) {
  if (window.getComputedStyle) {
    return window.getComputedStyle(elmnt,null).getPropertyValue(style);
  } else {
    return elmnt.currentStyle[style];
  }
}
</script>

<style>
.mySlides,.mySlides2 {display:none;}
.noselection {
  -webkit-touch-callout: none; 
  -webkit-user-select: none; 
  -khtml-user-select: none;   
  -moz-user-select: none;    
  -ms-user-select: none;      
  user-select: none;        
}
.w3-center .w3-btn {
  background-color:#000;
}
.w3-center .w3-btn:hover {
  color:white;
}
.w3-xlarge .w3-left, .w3-xlarge .w3-right, .demo4 {cursor:pointer}
.demo4 {height:13px;width:13px;padding:0;background-color:transparent}
.demo5 {
  border:2px solid #f1f1f1 !important;cursor:pointer;transition:.3s;
}
.w3-border-red {
  border:2px solid #f44336 !important;
}
.w3-btn {
  box-shadow: none;
}
</style>
<script async="" src="w3css_slideshow.asp_files/pubads_impl_117.js"></script><link href="w3css_slideshow.asp_files/translateelement.css" charset="UTF-8" rel="stylesheet" type="text/css"><script src="w3css_slideshow.asp_files/main_es.js" charset="UTF-8" type="text/javascript"></script><script src="w3css_slideshow.asp_files/element_main.js" charset="UTF-8" type="text/javascript"></script></head>

<body style="position: relative; min-height: 100%; top: 0px;">

<div style="display: none; position: fixed; z-index: 4; right: 52px; height: 44px; background-color: rgb(95, 95, 95); letter-spacing: normal; top: 0pt;" id="googleSearch">
  <div class="gcse-search"></div>
</div>
<div style="display: none; position: fixed; z-index: 3; right: 111px; height: 44px; background-color: rgb(95, 95, 95); text-align: right; padding-top: 9px; top: 0pt;" id="google_translate_element"><div style="" dir="ltr" class="skiptranslate goog-te-gadget"><div class="goog-te-gadget-simple" style="white-space: nowrap;" id=":0.targetLanguage"><img style="background-image: url(&quot;https://translate.googleapis.com/translate_static/img/te_ctrl3.gif&quot;); background-position: -65px 0px;" alt="" class="goog-te-gadget-icon" src="w3css_slideshow.asp_files/cleardot.gif"><span style="vertical-align: middle;"><a href="javascript:void(0)" class="goog-te-menu-value" aria-haspopup="true"><span>Seleccionar idioma</span><img alt="" src="w3css_slideshow.asp_files/cleardot.gif" height="1" width="1"><span style="border-left: 1px solid rgb(187, 187, 187);">​</span><img alt="" src="w3css_slideshow.asp_files/cleardot.gif" height="1" width="1"><span aria-hidden="true" style="color: rgb(118, 118, 118);">▼</span></a></span></div></div></div>

<div style="position: fixed; top: 0pt;" class="w3-card-2 topnav" id="topnav">
  <div style="overflow:auto;">
    <div class="w3-bar w3-left" style="width:55%;overflow:hidden;height:44px">
      <a href="index2.php" title="Menu">☰</a>❮<a><img src="img/iconfinder_epc_1931213.png" width="37" height="36"/> MAPA DE PROCESOS Y CONTROL DE PROCESOS</a>
	  </div>
	<div class="w3-bar w3-right" style="width:45%;overflow:hidden;height:44px;">
	  <a href="Formulario_Seleccion_Proceso.php"title="Insertar Procesos Necesarios"> <img src="img/iconfinder_epc_1931213.png" width="37" height="36"/>+</a>
	  <a href="info_Control_GestionporProcesos.php" title="Insertar Gestion Por Proceso"><img src="img/4149680.png" width="47" height="36"/></a>
	  <script language="JavaScript">
		function AbrirCentrado(Url,NombreVentana,width,height,extras) {
		var largo = width;
		var altura = height;
		var adicionales= extras;
		var top = (screen.height-altura)/4;
		var izquierda = (screen.width-largo)/1; nuevaVentana=window.open(''+ Url + '',''+ NombreVentana + '','width=' + largo + ',height=' + altura + ',top=' + top + ',left=' + izquierda + ',features=' + adicionales + ''); 
		nuevaVentana.focus();
		}
		</script><a href="javascript:AbrirCentrado('Actualizar_Estado_Script.php','Pagina','630','391');"><img src="img/arrows.png" title="Actualizar Estado de Proceso" width="37" height="36"/></a>
	  <a href="info_Seguim_indEficacia.asp.php" title="Insertar Indicadores Proceso"><img src="img/122-1228916_icon-kpi12-performance-indicator-icon-png" width="37" height="37"/></a>
	  <a href="info_Control_Estadistico_Procesos.asp.php" title="Control Estadistico de Proceso"><img src="img/kisspng-the-bell-curve-normal-distribution-statistics-prob-kk-5b3e0d92aa8940.0683756115307933626985.jpg" width="39" height="34"/></a>
	  <a href="info_Sistema_Integrado_Gestion.asp.php" title="Sistema Integrado de Gestion"><img src="img/integration.png" width="39" height="34"/></a>
     <?php echo " " . $_SESSION['valid_user']; ?></a>
	  </div>
  </div>
</div>
<hr>
<hr>
<div align="center"><div class='mobile-container4'>
<Table width="774" border="0" bordercolor="#ECE9D8" bgcolor="#33CCFF">
    <tr>
	 <td width="13">
		 <div class='mobile-container5'>Procesos Operativos<?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT
procesos.id_proceso,
procesos.Codigo,
procesos.id_entidad,
procesos.fecha,
procesos.Sist_Gestion,
procesos.Tipo,
procesos.Siglas,
procesos.Estado_proceso,
procesos.NoProceso,
procesos.Proceso,
procesos.implantacion,
procesos.ruta_fichero7,
script.id_script,
script.ruta_fichero,
script.nombre_script,
script.Estado
FROM
procesos
Inner Join script ON script.id_script = procesos.id_script 
WHERE Estado='habilitado' AND nombre_script='procesoprimero' 
ORDER BY id_proceso ASC
");
$a = mysql_fetch_array($r);
?>
<?
//comienza el ciclo
		  for($b=0;$b<mysql_num_rows($r);$b++)
           {
             mysql_data_seek($r,$b);
             $a = mysql_fetch_array($r);
			 //mostrar la imagen si hay algun
			 if($a["Estado"]="habilitado")
			 {
     		 echo '<div align="justify"><div class="mobile-container6">Proceso de '.$a["Proceso"].'</div class="mobile-container6">';
			 }
			else
			 {
     		 
			 }
         }
// once processing is complete
//free result set
mysql_free_result($r);
//close connection to MySQL server
//mysql_close($connection);
?><?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT
procesos.id_proceso,
procesos.Codigo,
procesos.id_entidad,
procesos.fecha,
procesos.Sist_Gestion,
procesos.Tipo,
procesos.Siglas,
procesos.Estado_proceso,
procesos.NoProceso,
procesos.Proceso,
procesos.implantacion,
procesos.ruta_fichero7,
script.id_script,
script.ruta_fichero,
script.nombre_script,
script.Estado
FROM
procesos
Inner Join script ON script.id_script = procesos.id_script 
WHERE Estado='habilitado' AND nombre_script='procesosegundo' 
ORDER BY id_proceso ASC
");
$a = mysql_fetch_array($r);
?>
<?
$hoy = date("Y-m-d")."\n";  
//comienza el ciclo
		  for($b=0;$b<mysql_num_rows($r);$b++)
           {
             mysql_data_seek($r,$b);
             $a = mysql_fetch_array($r);
			 //mostrar la imagen si hay algun
			 if($a["Estado"]="habilitado")
			 {
     		 echo '<div align="justify"><div class="mobile-container7">Proceso de '.$a["Proceso"].'</div class="mobile-container7">';
			 }
			else
			 {
     		 
			 }
         }
// once processing is complete
//free result set
mysql_free_result($r);
//close connection to MySQL server
//mysql_close($connection);
?><?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT
procesos.id_proceso,
procesos.Codigo,
procesos.id_entidad,
procesos.fecha,
procesos.Sist_Gestion,
procesos.Tipo,
procesos.Siglas,
procesos.Estado_proceso,
procesos.NoProceso,
procesos.Proceso,
procesos.implantacion,
procesos.ruta_fichero7,
script.id_script,
script.ruta_fichero,
script.nombre_script,
script.Estado
FROM
procesos
Inner Join script ON script.id_script = procesos.id_script 
WHERE Estado='habilitado' AND nombre_script='procesoprimero' 
ORDER BY id_proceso ASC
");
$a = mysql_fetch_array($r);
?>
<?
$hoy = date("Y-m-d")."\n";  
//comienza el ciclo
		  for($b=0;$b<mysql_num_rows($r);$b++)
           {
             mysql_data_seek($r,$b);
             $a = mysql_fetch_array($r);
			 //mostrar la imagen si hay algun
			 if($a["Estado"]="habilitado")
			 {
     		 echo '<div align="justify"><div class="mobile-container8">3er Proceso de '.$a["Proceso"].'</div class="mobile-container8">';
			 }
			else
			 {
     		 
			 }
         }
// once processing is complete
//free result set
mysql_free_result($r);
//close connection to MySQL server
//mysql_close($connection);
?><?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT
procesos.id_proceso,
procesos.Codigo,
procesos.id_entidad,
procesos.fecha,
procesos.Sist_Gestion,
procesos.Tipo,
procesos.Siglas,
procesos.Estado_proceso,
procesos.NoProceso,
procesos.Proceso,
procesos.implantacion,
procesos.ruta_fichero7,
script.id_script,
script.ruta_fichero,
script.nombre_script,
script.Estado
FROM
procesos
Inner Join script ON script.id_script = procesos.id_script 
WHERE Estado='habilitado' AND nombre_script='procesocuarto' 
ORDER BY id_proceso ASC
");
$a = mysql_fetch_array($r);
?>
<?
$hoy = date("Y-m-d")."\n";  
//comienza el ciclo
		  for($b=0;$b<mysql_num_rows($r);$b++)
           {
             mysql_data_seek($r,$b);
             $a = mysql_fetch_array($r);
			 //mostrar la imagen si hay algun
			 if($a["Estado"]="habilitado")
			 {
     		 echo '<div align="justify"><div class="mobile-container9">Proceso de '.$a["Proceso"].'</div class="mobile-container9">';
			 }
			else
			 {
     		 
			 }
         }
// once processing is complete
//free result set
mysql_free_result($r);
//close connection to MySQL server
//mysql_close($connection);
?></div class='mobile-container5'>
		  
		  <div class='mobile-container10'>
			  Procesos Estrategicos
			  <?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT
procesos.id_proceso,
procesos.Codigo,
procesos.id_entidad,
procesos.fecha,
procesos.Sist_Gestion,
procesos.Tipo,
procesos.Siglas,
procesos.Estado_proceso,
procesos.NoProceso,
procesos.Proceso,
procesos.implantacion,
procesos.ruta_fichero7,
script.id_script,
script.ruta_fichero,
script.nombre_script,
script.Estado
FROM
procesos
Inner Join script ON script.id_script = procesos.id_script 
WHERE Estado='habilitado' AND nombre_script='procesoprimero' 
ORDER BY id_proceso ASC
");
$a = mysql_fetch_array($r);
?>
<?
$hoy = date("Y-m-d")."\n";  
//comienza el ciclo
		  for($b=0;$b<mysql_num_rows($r);$b++)
           {
             mysql_data_seek($r,$b);
             $a = mysql_fetch_array($r);
			 //mostrar la imagen si hay algun
			 if($a["Estado"]="habilitado")
			 {
     		 echo '<div align="justify"><div class="mobile-container11">11no Proceso de '.$a["Proceso"].'</div class="mobile-container11">';
			 }
			else
			 {
     		 
			 }
         }
// once processing is complete
//free result set
mysql_free_result($r);
//close connection to MySQL server
//mysql_close($connection);
?><?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT
procesos.id_proceso,
procesos.Codigo,
procesos.id_entidad,
procesos.fecha,
procesos.Sist_Gestion,
procesos.Tipo,
procesos.Siglas,
procesos.Estado_proceso,
procesos.NoProceso,
procesos.Proceso,
procesos.implantacion,
procesos.ruta_fichero7,
script.id_script,
script.ruta_fichero,
script.nombre_script,
script.Estado
FROM
procesos
Inner Join script ON script.id_script = procesos.id_script 
WHERE Estado='habilitado' AND nombre_script= 'procesodecimo' 
ORDER BY id_proceso ASC
");
$a = mysql_fetch_array($r);
?>
<?
$hoy = date("Y-m-d")."\n";  
//comienza el ciclo
		  for($b=0;$b<mysql_num_rows($r);$b++)
           {
             mysql_data_seek($r,$b);
             $a = mysql_fetch_array($r);
			 //mostrar la imagen si hay algun
			 if($a["Estado"]="habilitado")
			 {
     		 echo '<div align="justify"><div class="mobile-container12">Proceso de '.$a["Proceso"].'</div class="mobile-container12">';
			 }
			else
			 {
     		 
			 }
         }
// once processing is complete
//free result set
mysql_free_result($r);
//close connection to MySQL server
//mysql_close($connection);
?><?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT
procesos.id_proceso,
procesos.Codigo,
procesos.id_entidad,
procesos.fecha,
procesos.Sist_Gestion,
procesos.Tipo,
procesos.Siglas,
procesos.Estado_proceso,
procesos.NoProceso,
procesos.Proceso,
procesos.implantacion,
procesos.ruta_fichero7,
script.id_script,
script.ruta_fichero,
script.nombre_script,
script.Estado
FROM
procesos
Inner Join script ON script.id_script = procesos.id_script 
WHERE Estado='habilitado' AND nombre_script= 'procesonoveno' 
ORDER BY id_proceso ASC
");
$a = mysql_fetch_array($r);
?>
<?
$hoy = date("Y-m-d")."\n";  
//comienza el ciclo
		  for($b=0;$b<mysql_num_rows($r);$b++)
           {
             mysql_data_seek($r,$b);
             $a = mysql_fetch_array($r);
			 //mostrar la imagen si hay algun
			 if($a["Estado"]="habilitado")
			 {
     		 echo '<div align="justify"><div class="mobile-container13">Proceso de '.$a["Proceso"].'</div class="mobile-container13">';
			 }
			else
			 {
     		 
			 }
         }
// once processing is complete
//free result set
mysql_free_result($r);
//close connection to MySQL server
//mysql_close($connection);
?><?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT
procesos.id_proceso,
procesos.Codigo,
procesos.id_entidad,
procesos.fecha,
procesos.Sist_Gestion,
procesos.Tipo,
procesos.Siglas,
procesos.Estado_proceso,
procesos.NoProceso,
procesos.Proceso,
procesos.implantacion,
procesos.ruta_fichero7,
script.id_script,
script.ruta_fichero,
script.nombre_script,
script.Estado
FROM
procesos
Inner Join script ON script.id_script = procesos.id_script 
WHERE Estado='habilitado' AND nombre_script='procesoprimero' 
ORDER BY id_proceso ASC
");
$a = mysql_fetch_array($r);
?>
<?
$hoy = date("Y-m-d")."\n";  
//comienza el ciclo
		  for($b=0;$b<mysql_num_rows($r);$b++)
           {
             mysql_data_seek($r,$b);
             $a = mysql_fetch_array($r);
			 //mostrar la imagen si hay algun
			 if($a["Estado"]="habilitado")
			 {
     		 echo '<div align="justify"><div class="mobile-container14">12mo Proceso de '.$a["Proceso"].'</div class="mobile-container14">';
			 }
			else
			 {
     		 
			 }
         }
// once processing is complete
//free result set
mysql_free_result($r);
//close connection to MySQL server
//mysql_close($connection);
?></div class='mobile-container10'>
		  
		  	<div class='mobile-container15'>
			  Procesos de Apoyo
			  <?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT
procesos.id_proceso,
procesos.Codigo,
procesos.id_entidad,
procesos.fecha,
procesos.Sist_Gestion,
procesos.Tipo,
procesos.Siglas,
procesos.Estado_proceso,
procesos.NoProceso,
procesos.Proceso,
procesos.implantacion,
procesos.ruta_fichero7,
script.id_script,
script.ruta_fichero,
script.nombre_script,
script.Estado
FROM
procesos
Inner Join script ON script.id_script = procesos.id_script 
WHERE Estado='habilitado' AND nombre_script= 'procesosexto' 
ORDER BY id_proceso ASC
");
$a = mysql_fetch_array($r);
?>
<?
$hoy = date("Y-m-d")."\n";  
//comienza el ciclo
		  for($b=0;$b<mysql_num_rows($r);$b++)
           {
             mysql_data_seek($r,$b);
             $a = mysql_fetch_array($r);
			 //mostrar la imagen si hay algun
			 if($a["Estado"]="habilitado")
			 {
     		 echo '<div align="justify"><div class="mobile-container16">Proceso de '.$a["Proceso"].'</div class="mobile-container16">';
			 }
			else
			 {
     		 
			 }
         }
// once processing is complete
//free result set
mysql_free_result($r);
//close connection to MySQL server
//mysql_close($connection);
?><?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT
procesos.id_proceso,
procesos.Codigo,
procesos.id_entidad,
procesos.fecha,
procesos.Sist_Gestion,
procesos.Tipo,
procesos.Siglas,
procesos.Estado_proceso,
procesos.NoProceso,
procesos.Proceso,
procesos.implantacion,
procesos.ruta_fichero7,
script.id_script,
script.ruta_fichero,
script.nombre_script,
script.Estado
FROM
procesos
Inner Join script ON script.id_script = procesos.id_script 
WHERE Estado='habilitado' AND nombre_script= 'procesoquinto' 
ORDER BY id_proceso ASC
");
$a = mysql_fetch_array($r);
?>
<?
$hoy = date("Y-m-d")."\n";  
//comienza el ciclo
		  for($b=0;$b<mysql_num_rows($r);$b++)
           {
             mysql_data_seek($r,$b);
             $a = mysql_fetch_array($r);
			 //mostrar la imagen si hay algun
			 if($a["Estado"]="habilitado")
			 {
     		 echo '<div align="justify"><div class="mobile-container17">Proceso de '.$a["Proceso"].'</div class="mobile-container17">';
			 }
			else
			 {
     		 
			 }
         }
// once processing is complete
//free result set
mysql_free_result($r);
//close connection to MySQL server
//mysql_close($connection);
?><?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT
procesos.id_proceso,
procesos.Codigo,
procesos.id_entidad,
procesos.fecha,
procesos.Sist_Gestion,
procesos.Tipo,
procesos.Siglas,
procesos.Estado_proceso,
procesos.NoProceso,
procesos.Proceso,
procesos.implantacion,
procesos.ruta_fichero7,
script.id_script,
script.ruta_fichero,
script.nombre_script,
script.Estado
FROM
procesos
Inner Join script ON script.id_script = procesos.id_script 
WHERE Estado='habilitado' AND nombre_script='procesoprimero' 
ORDER BY id_proceso ASC
");
$a = mysql_fetch_array($r);
?>
<?
$hoy = date("Y-m-d")."\n";  
//comienza el ciclo
		  for($b=0;$b<mysql_num_rows($r);$b++)
           {
             mysql_data_seek($r,$b);
             $a = mysql_fetch_array($r);
			 //mostrar la imagen si hay algun
			 if($a["Estado"]="habilitado")
			 {
     		 echo '<div align="justify"><div class="mobile-container18">7mo Proceso de '.$a["Proceso"].'</div class="mobile-container18">';
			 }
			else
			 {
     		 
			 }
         }
// once processing is complete
//free result set
mysql_free_result($r);
//close connection to MySQL server
//mysql_close($connection);
?><?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT
procesos.id_proceso,
procesos.Codigo,
procesos.id_entidad,
procesos.fecha,
procesos.Sist_Gestion,
procesos.Tipo,
procesos.Siglas,
procesos.Estado_proceso,
procesos.NoProceso,
procesos.Proceso,
procesos.implantacion,
procesos.ruta_fichero7,
script.id_script,
script.ruta_fichero,
script.nombre_script,
script.Estado
FROM
procesos
Inner Join script ON script.id_script = procesos.id_script 
WHERE Estado='habilitado' AND nombre_script='procesoprimero' 
ORDER BY id_proceso ASC
");
$a = mysql_fetch_array($r);
?>
<?
$hoy = date("Y-m-d")."\n";  
//comienza el ciclo
		  for($b=0;$b<mysql_num_rows($r);$b++)
           {
             mysql_data_seek($r,$b);
             $a = mysql_fetch_array($r);
			 //mostrar la imagen si hay algun
			 if($a["Estado"]="habilitado")
			 {
     		 echo '<div align="justify"><div class="mobile-container19">8vo Proceso de '.$a["Proceso"].'</div class="mobile-container19">';
			 }
			else
			 {
     		 
			 }
         }
// once processing is complete
//free result set
mysql_free_result($r);
//close connection to MySQL server
//mysql_close($connection);
?>
		  </div class='mobile-container15'>	 
	 </tt>
	 </td>
	<td width="83">
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF8_spanish_ci">
		<title>Highcharts Example</title>
		
		
		<!-- 1. Add these JavaScript inclusions in the head of your page -->
		<script type="text/javascript" src="../../jquery-ui-1814/js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="../js/highcharts.js"></script>
		
		<!-- 1a) Optional: add a theme file -->
		<!--
			<script type="text/javascript" src="../js/themes/gray.js"></script>
		-->
		
		<!-- 1b) Optional: the exporting module -->
		<script type="text/javascript" src="../js/modules/exporting.js"></script>
		
		
		<!-- 2. Add the JavaScript to initialize the chart on document ready -->
		<script type="text/javascript">
		
			var chart;
			$(document).ready(function() {
				chart = new Highcharts.Chart({
					chart: {
						renderTo: 'container12',
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
					title: {
						text: 'Procesos por Estado'
					},
					tooltip: {
						formatter: function() {
							return '<b>'+ this.point.name +'</b>: '+ this.y +' Proceso(s)';
						}
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: true
							},
							showInLegend: true
						}
					},
				    series: [{
						type: 'pie',
						name: 'Browser share',
						data: [<?php 
										mysql_connect("localhost","root","sa");
										mysql_select_db("calidad");
										$r = mysql_query("SELECT
										script.Estado,
										Count(script.Estado),
										procesos.id_proceso,
										procesos.Codigo,
										procesos.id_entidad,
										procesos.fecha,
										procesos.Sist_Gestion,
										procesos.Tipo,
										procesos.Siglas,
										procesos.Estado_proceso,
										procesos.NoProceso,
										procesos.Proceso,
										procesos.implantacion,
										procesos.ruta_fichero7,
										script.id_script,
										script.Estado
										FROM
										script
										Inner Join procesos ON script.id_script = procesos.id_script
										GROUP BY script.Estado");
											
											$a = mysql_fetch_array($r);
													
													  for($b=0;$b<mysql_num_rows($r);$b++)
													   {
														 mysql_data_seek($r,$b);
														 $a = mysql_fetch_array($r);
														 	
															?>['<?php echo ''.$a["Estado"].'';?>',
															    <?php echo ''.$a[COUNT("Estado")].'';?>],<?php 
														
														}?>]
					}, {
        type: 'pie',
        name: 'Implantacion de Procesos',
		innerSize: '95%',
        data: [{
            name: 'Implantado (s)',
            y: 6,
            color: Highcharts.getOptions().colors[0] // Jane's color
        }, {
            name: 'Por Implantar', 
            y: 1,
            color: Highcharts.getOptions().colors[6] // John's color
        }],
        center: [195, 128],
        size: 220,
        showInLegend: false,
        dataLabels: {
            enabled: true
        }
    }]
				});
			});
				
		</script>
		
	</head>
	
	<body>
		
		<!-- 3. Add the container -->
		<div id="container12" style="width: 410px; height: 350px; margin: 0 auto"></div>
	</body>
</html>
	</td>
 </tr>
</table>
  
</div class='mobile-container4'>

<script>
// First automatic slideshow (band photos)
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides6");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000);    
}

// Second automatic slideshow (html slides)
var slideIndex = 0;
carousel2();

function carousel2() {
    var i;
    var x = document.getElementsByClassName("mySlides7");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel2, 3000); 
}

// First manual slideshow
var slideIndexMan = 1;
showDivs(slideIndexMan);

function plusDivs(n) {
  showDivs(slideIndexMan += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndexMan = 1}
  if (n < 1) {slideIndexMan = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndexMan-1].style.display = "block";
}
showDivs(1);

// With captions
var slideIndexCap = 1;

function plusDivsnew(n) {
slideIndexCap = slideIndexCap + n;
showDivsnew(slideIndexCap);
}

function showDivsnew(n) {
  var x = document.getElementsByClassName("mySlides2");
  if (n > x.length) {slideIndexCap = 1}    
  if (n < 1) {slideIndexCap = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndexCap-1].style.display = "block";  
}

showDivsnew(1);

// Dots with next/prev buttons and red active buttons
var slideActiveBtn = 1;
showDivs3(slideActiveBtn);

function plusDivs3(n) {
  showDivs3(slideActiveBtn += n);
}

function currentDiv(n) {
  showDivs3(slideActiveBtn = n);
}

function showDivs3(n) {
  var i;
  var x = document.getElementsByClassName("mySlides3");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideActiveBtn = 1}    
  if (n < 1) {slideActiveBtn = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideActiveBtn-1].style.display = "block";  
  dots[slideActiveBtn-1].className += " w3-red";
}

// Dots with next/prev arrows and white active badges
var slideBadge = 1;
showDivs4(slideBadge);

function plusDivs4(n) {
  showDivs4(slideBadge += n);
}

function currentDiv4(n) {
  showDivs4(slideBadge = n);
}

function showDivs4(n) {
  var i;
  var x = document.getElementsByClassName("mySlides4");
  var dots = document.getElementsByClassName("demo4");
  if (n > x.length) {slideBadge = 1}    
  if (n < 1) {slideBadge = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideBadge-1].style.display = "block";  
  dots[slideBadge-1].className += " w3-white";
}

// Img indicators
var slideImgInd = 1;
showDivs5(slideImgInd);

function plusDivs5(n) {
  showDivs5(slideImgInd += n);
}

function currentDiv5(n) {
  showDivs5(slideImgInd = n);
}

function showDivs5(n) {
  var i;
  var x = document.getElementsByClassName("mySlides5");
  var dots = document.getElementsByClassName("demo5");
  if (n > x.length) {slideImgInd = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideImgInd-1].style.display = "block";  
  dots[slideImgInd-1].className += " w3-opacity-off";
}

// Range rovers automatic animations
var RoverIndex = 0;
RoverCarousel();

function RoverCarousel() {
    var i;
    var x = document.getElementsByClassName("myRover");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    RoverIndex++;
    if (RoverIndex > x.length) {RoverIndex = 1}    
    x[RoverIndex-1].style.display = "block";  
    setTimeout(RoverCarousel, 3000);    
}

// Range rover fading animate
var fadeRover = 0;
fadeCarousel();

function fadeCarousel() {
    var i;
    var x = document.getElementsByClassName("myFading");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    fadeRover++;
    if (fadeRover > x.length) {fadeRover = 1}    
    x[fadeRover-1].style.display = "block";  
    setTimeout(fadeCarousel, 9000);    
}
</script>
<td>&nbsp;</td>
<marquee BGCOLOR=white width:100 %><?php 

					include 'conexion.php';
					mysql_select_db("calidad");
					$r = mysql_query("SELECT*
					FROM
					alcance_sistema
					ORDER BY id_alcancesistema");
						$a = mysql_fetch_array($r);
						
								  for($b=0;$b<mysql_num_rows($r);$b++)
								   {
									 mysql_data_seek($r,$b);
									 $a = mysql_fetch_array($r);
									 ?><img src="../img/push-pin-icon-15.png" width="27" height="27" />
									 <?php 
																				 
																				echo 'Alcance del SGC: '.$a["Alcance"].'; ';}					
																				 ?></marquee>
<p align="left"><table width="974" border="0" bordercolor="#ECE9D8" bgcolor="#33CCFF">
	  <td width="13">
<div align="center">
</td>
<td width="83"><html>
	<div align="center">
  <script language="JavaScript">
function filtrar(){
  document.getElementById("result").innerHTML = "<iframe src='filtrar_procesos.asp.php?comentario="+document.getElementById("comentario").value+"' frameborder=1270 width=1270 height=750 scroll=100>";
}
</script>
  <div align="center">
  <body onLoad="filtrar();">
  
</div>
<div align="right"><div id="siteInfo"> 
Buscar:<input name="text" type="text" id="comentario" onKeyUp="filtrar();">  
</div>
<div id="result"></div>
</html></td>
    </tr>
  </table>
<div style="position: fixed; bottom: 0px;" class="w3-card-2 w3-slim topnav" id="topnav">
  <div style="overflow:auto;">
    <ul class="w3-navbar w3-left" style="width:25%;overflow:hidden;height:4px">
    </ul>
      </div><marquee><p align="center"> <a href="www.facebook.com/qms">Contactenos:</a> www.facebook.com/qms </a> 
  </marquee></div>      
<br><br>
</div>
<?php
// Control for Documentary Informations
mysql_connect("localhost","root","sa");
mysql_select_db("calidad");
$r = mysql_query("SELECT
procesos.id_proceso,
procesos.Proceso,
procesos.NoProceso,
procesos.Siglas,
script.id_script,
script.Estado,
procesos.Sist_Gestion
FROM
procesos
Inner Join script ON script.id_script = procesos.id_script
ORDER BY id_proceso DESC");
$a = mysql_fetch_array($r);
?>	
<?php 
// primero conectamos siempre a la base de datos mysql 
$sql = "SELECT
procesos.id_proceso,
procesos.Proceso,
procesos.NoProceso,
procesos.Siglas,
script.id_script,
script.Estado,
procesos.Sist_Gestion
FROM
procesos
Inner Join script ON script.id_script = procesos.id_script
WHERE Sist_Gestion = 'calidad' AND Estado = 'habilitado'
ORDER BY id_proceso DESC";  // sentencia sql 
$r = mysql_query($sql); 
$numero = mysql_num_rows($r); // obtenemos el n�mero de filas 
echo ' ' . $numero.' registros';  // imprimos en pantalla el n�mero generado 

					if ($nummero >=0)
						  {
						  ?><?php echo'<script language="javascript">alert("Hola '.$_SESSION['valid_user'].', usted ya ha establecido en QX3M-7.Mangrisk! sus '.$numero.' procesos del Sistema de Gestion. Ahora personalice las Fichas de Procesos.");</script>';				
						  }
					else 
						  {
							echo '<script language="javascript">alert("! Hola '.$_SESSION['valid_user'].', usted NO ha establecido en QX3M-7.Mangrisk! sus'.$numero.' procesos del Sistema de Gestion. Por favor, determine los Procesos Necesarios.");</script>';					
							}
								
?>
<?php
}
else
{
echo'<p>You are not logged in.</p>';
echo'<p>Only logged in members may see this page.</p>';
}
echo'<a href="index.php">Back to login page.</a>';
?>