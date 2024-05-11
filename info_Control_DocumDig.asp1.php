<?php
session_start();
//check session variable
if(isset($_SESSION['valid_user']))
{
?>
<!DOCTYPE html>
<html style="height: 100%;" lang="en-US"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>info_Control_DocumDig.asp.php</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="HTML,CSS,JavaScript,SQL,PHP,jQuery,XML,DOM,Bootstrap,Web development,W3C,tutorials,programming,training,learning,quiz,primer,lessons,references,examples,source code,colors,demos,tips">
<meta name="Description" content="Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, and XML.">
<link rel="icon" href="https://www.w3schools.com/favicon.ico" type="image/x-icon">
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
div.avatar {
    /* cambia estos dos valores para definir el tamaño de tu círculo */
    height: 50px;
    width: 50px;
    /* los siguientes valores son independientes del tamaño del círculo */
    background-repeat: no-repeat;
    background-position: 60%;
    border-radius: 60%;
    background-size: 100% auto;
}
div.avatar2 {
    /* cambia estos dos valores para definir el tamaño de tu círculo */
    height: 30px;
    width: 40px;
    /* los siguientes valores son independientes del tamaño del círculo */
    background-repeat: no-repeat;
    background-position: 45%;
    border-radius: 50%;
    background-size: 180% auto;
}
 .mobile-container {
  max-width: -70px;
  margin: -1px -36px 0 0;
  background-image: url(img/telefono2.jpg);  
  padding: 20px 30px;	
  height: 637px;
  color: darkblue;
  border-radius: 10px;
  float: right;	
  box-shadow: -10px 40px 20px rgba(0,0,50,0.8);
 }
.mobile-container1 {
  max-width: 705px;
  margin: -1px;
  background-image: url(w3css_slideshow.asp_files/india-evolving-strategy.jpg);
  padding: 16px 20px;	
  height: 294px;
  color: darkblue;
  border-radius: 10px;
  float: left;
  box-shadow: -10px 40px 20px rgba(50,0,0,0.8);
}
.mobile-container2 {
  max-width: 760px;
  margin: -1px;
  background-image: url(img/c_media_RF_main_3-31-2020.jpg);
  padding: 16px 20px;	
  height: 647px;
  color: darkblue;
  border-radius: 10px;
  float: left;
  box-shadow: -10px 40px 20px rgba(0,0,50,0.8);
}
.mobile-container3 {
  max-width: 760px;
  margin: -1px;
  background-color: #ffffff;
  padding: 16px 20px;	
  height: 227px;
  width: 117px;
  color: darkblue;
  border-radius: 10px 25px 20px;
  float: left;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
.mobile-container4 {
  max-width: 760px;
  margin: -1px;
  background-color: #ffffff;
  padding: 16px 20px;	
  height: 22px;
  width: 97px;
  color: darkblue;
  border-radius: 38px;
  float: left;
  box-shadow: 10px 10px 20px rgba(0,0,50,0.8);
}
/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: red;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  background-color: #ccc;
  display: none;
  padding: 160px 20px;
  position: fixed;
  opacity: 0.5;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index:9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: lightblue;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #cccccc;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: lightblue;
  padding: 160px 200px;
  border: none;
  cursor: pointer;
  width: 100px;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
#rcorners1 {  border-radius: 15px 50px 30px 5px;  
background: #73AD21;  
padding: 20px;   
width: 200px;  height: 150px; 
}
.topnav {
  overflow: hidden;
  background-color: #fff;
  position: relative;
}

.topnav #myLinks {
  display: none;
}

.topnav a {
  float: left;
  color: white;
  padding: 4px 6px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a.icon {
  float: right;
}

.topnav a:hover {
  background-color: #ccc;
  color: black;
}

.active {
  background-color: #ffffff;
  color: white;
}
.loader {
    border: 4px solid #cccccc; /* Light grey */
    border-top: 4px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 30px;
    height: 30px;
    animation: spin 2s linear infinite;
}
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
.container {
      width: 120px;
      height: 280px;
      position: center;
      margin: 0 auto 40px;
      border: 0px solid #fff;
      perspective: 1100px;
}
#carousel {
      width: 90%;
      height:  60%;
      position: absolute;
              transform: translateZ( -288px);
              transform-style: preserve-3d;
              transition:transform 1s;
}
#carousel figure {
      display:block;
      position:absolute;
      width:60%;
      height:60%;
      left:10px;
      top:80px;
      border:1px solid rgba(   0, 0, 0, 0.8 );
      line-height:116px;
      font-size:80px;
      font-weight:bold;
      color:white;
      text-align:center;
      margin: 0;
}
 #carousel figure:nth-child(1) {
              transform: rotateY( 0deg ) translateZ( 288px ); } #carousel figure:nth-child(2) {
              transform: rotateY( 40deg ) translateZ( 288px ); } #carousel figure:nth-child(3) {
              transform: rotateY( 80deg ) translateZ( 288px ); } #carousel figure:nth-child(4) {
              transform: rotateY( 120deg ) translateZ( 288px ); } #carousel figure:nth-child(5) {
              transform: rotateY( 160deg ) translateZ( 288px ); } #carousel figure:nth-child(6) {
              transform: rotateY( 200deg ) translateZ( 288px ); } #carousel figure:nth-child(7) {
              transform: rotateY( 240deg ) translateZ( 288px ); } #carousel figure:nth-child(8) {
              transform: rotateY( 280deg ) translateZ( 288px ); } #carousel figure:nth-child(9) {
              transform: rotateY( 320deg ) translateZ( 288px ); 
} 
 #carousel {
        animation: rotateInY 52s infinite linear;
    } @keyframes rotateInY { 0% { transform: translateZ(88px) rotateY(0deg);   } 100% { transform: translateZ(88px) rotateY(360deg);  
  }
 } 
for(int i=1;i<=9;i++){
#carousel figure:nth-child(i){
     transform:rotateY( 40deg*(i-1))translateZ(288px);
   }
}
.notification {  background-color: #555;  color: white;  text-decoration: none;  padding: 15px 26px;  position: relative;  display: inline-block;  border-radius: 2px;}.notification:hover {  background: red;}.notification .badge {  position: absolute;  top: -10px;  right: -10px;  padding: 5px 10px;  border-radius: 50%;  background: red;  color: white;} 
.hidden {
   overflow: hidden;
}

.centrado {
   height:100vh;
   background-color:lightblue;
  	display: flex;
  	justify-content: center;
  	align-items: center;
}

.lds-roller {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-roller div {
  animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  transform-origin: 40px 40px;
}
.lds-roller div:after {
  content: " ";
  display: block;
  position: absolute;
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #fff;
  margin: -4px 0 0 -4px;
}
.lds-roller div:nth-child(1) {
  animation-delay: -0.036s;
}
.lds-roller div:nth-child(1):after {
  top: 63px;
  left: 63px;
}
.lds-roller div:nth-child(2) {
  animation-delay: -0.072s;
}
.lds-roller div:nth-child(2):after {
  top: 68px;
  left: 56px;
}
.lds-roller div:nth-child(3) {
  animation-delay: -0.108s;
}
.lds-roller div:nth-child(3):after {
  top: 71px;
  left: 48px;
}
.lds-roller div:nth-child(4) {
  animation-delay: -0.144s;
}
.lds-roller div:nth-child(4):after {
  top: 72px;
  left: 40px;
}
.lds-roller div:nth-child(5) {
  animation-delay: -0.18s;
}
.lds-roller div:nth-child(5):after {
  top: 71px;
  left: 32px;
}
.lds-roller div:nth-child(6) {
  animation-delay: -0.216s;
}
.lds-roller div:nth-child(6):after {
  top: 68px;
  left: 24px;
}
.lds-roller div:nth-child(7) {
  animation-delay: -0.252s;
}
.lds-roller div:nth-child(7):after {
  top: 63px;
  left: 17px;
}
.lds-roller div:nth-child(8) {
  animation-delay: -0.288s;
}
.lds-roller div:nth-child(8):after {
  top: 56px;
  left: 12px;
}
@keyframes lds-roller {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

<!--
body {<?php
	//Sentencia de control
	$hoy = date("H:i:s"); 
	if($hoy < '14:11:16')
	{?>background-image: url(img/wallpaperpriz.png);<?php
	} 
	else ?>
	background-image: url(img/wallpaperpriz.png);
}
-->
</style>

<script type="text/javascript">
// GPT slots
var gptAdSlots = [];
googletag.cmd.push(function() {
var leaderMapping = googletag.sizeMapping().
// Mobile ad
addSize([0, 0], [320, 50]). 
// Vertical Tablet ad
addSize([80, 0], [468, 60]). 
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


<script async="" src="w3css_slideshow.asp_files/pubads_impl_117.js"></script><link href="w3css_slideshow.asp_files/translateelement.css" charset="UTF-8" rel="stylesheet" type="text/css"><script src="w3css_slideshow.asp_files/main_es.js" charset="UTF-8" type="text/javascript"></script><script src="w3css_slideshow.asp_files/element_main.js" charset="UTF-8" type="text/javascript"></script></head>

<body style="position: relative; min-height: 100%; top: 0px;">

<div style="display: none; position: fixed; z-index: 4; right: 52px; height: 44px; background-color: rgb(95, 95, 95); letter-spacing: normal; top: 0pt;" id="googleSearch">
  <div class="gcse-search"></div>
</div>
<div style="display: none; position: fixed; z-index: 3; right: 111px; height: 44px; background-color: rgb(95, 95, 95); text-align: right; padding-top: 9px; top: 0pt;" id="google_translate_element"><div style="" dir="ltr" class="skiptranslate goog-te-gadget"><div class="goog-te-gadget-simple" style="white-space: nowrap;" id=":0.targetLanguage"><img style="background-image: url(&quot;https://translate.googleapis.com/translate_static/img/te_ctrl3.gif&quot;); background-position: -65px 0px;" alt="" class="goog-te-gadget-icon" src="w3css_slideshow.asp_files/cleardot.gif"><span style="vertical-align: middle;"><a href="javascript:void(0)" class="goog-te-menu-value" aria-haspopup="true"><span>Seleccionar idioma</span><img alt="" src="w3css_slideshow.asp_files/cleardot.gif" height="1" width="1"><span style="border-left: 1px solid rgb(187, 187, 187);">​</span><img alt="" src="w3css_slideshow.asp_files/cleardot.gif" height="1" width="1"><span aria-hidden="true" style="color: rgb(118, 118, 118);">▼</span></a></span></div></div></div>

<div style="position: fixed; top: 0pt;" class="w3-card-2 topnav" id="topnav">
  <div style="overflow:auto;">
    <div class="w3-bar w3-left" style="width:55%;overflow:hidden;height:44px">
      <a href="Dashboards.php" title="Menu">☰</a><a href="procesoprimero.php" >❮<a><img src="img/documentos.PNG" width="37" height="36"/> INFORMACION DOCUMENTADA</a>
	  </div>
	<div class="w3-bar w3-right" style="width:45%;overflow:hidden;height:44px;">
	  <a href="Formulario_Insertar_Documdig.php"title="Insertar documentos"> <img src="img/documentos.PNG" width="37" height="36"/>+</a>
	  <a href="Formulario_Modif.php" title="Insertar modificaciones"><img src="img/nc.png" width="37" height="36"/></a>
	  <a href="Actualizar_Estado_NoConformidades.php" title="Actualizar estado del documento"><img src="img/ARROWS.png" width="37" height="36"/></a>
	  <a href="Actualizar_Estado_Contrato.php" title="Descargar data"><img src="img/Dark_Off.png" width="37" height="34"/></a>
     <?php echo "" . $_SESSION['valid_user']; ?></a>
	  </div>
  </div>
</div>

<form action="index2.php" method="post">
<div id="masthead"> 
  <div id="globalNav">  
    </div>
<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="Dashboard.php" class="active" title="Menu"><img src="img/icons8-menu-26.png" width="28" height="32" /> </a><img src="img/Logo.png" width="40" height="38" /></a></span></td></span></td+1><td><img src="img/Brand1.png" width="180" height="28" /></a><div id="myLinks"><a href="info_Control_Capital.asp.php"><img src="img/icon_presupuesto.png" width="40" height="38" /></a><td><a href="info_objetivos.asp.php"><img src="img/shield-png-2.png" width="40" height="38" /></a><td><a href="info_personal.asp.php"><img src="img/PERSONAS 3D.png" width="32" height="32" /></a><td><a href="info_Seguim_EncuestasClientes.asp.php"><img src="img/Line-chart_37129.png" width="39" height="38" /></a><td><a href="info_Seguim_EvalProveedores.asp.php"><img src="img/alliance.png" width="39" height="43" /></a><td><a href="info_seguim_proymejoras.asp.php"><img src="img/mano_blanca.png" width="39" height="38" /></a><td><a href="Inser_Imagenes_Web.php"><img src="img/hd-webcam-c525-gallery.png" width="40" height="38" /></a><td><a href="info_Seguim_scripts.asp.php"><img src="img/notepad-plus-plus-png-icon-30.png" width="32" height="32" /></a><td><a href="info_Seguim_mantenimiento.asp.php"><img src="img/GEARS-01.PNG" width="39" height="38" /></a><td><a href="back_up.php"><img src="img/Dark_Off.png" width="39" height="43" /></a>
    <a href="#news"></a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <table><i class="fa fa-bars"><?php
//defino server, db, user, pass
$servidor = "localhost";
$basedatos = "calidad";
$usuario = "root";
$pass = "sa";

//cargo los datos de la noticia
mysql_connect($servidor,$usuario,$pass);
mysql_select_db($basedatos);
$r = mysql_query("
SELECT
`auth`.`user_id`,
`auth`.`name`,
`personal_plantilla`.`nombre_apellido`,
`personal_plantilla`.`ruta_fichero1`,
`personal_plantilla`.`Esencia`
FROM
`auth`
Inner Join `personal_plantilla` ON `auth`.`id_personalplantilla` = `personal_plantilla`.`id_personalplantilla` 
WHERE auth.name = 'admin'
");
$a = mysql_fetch_array($r);
?>
<table>
	<?
		  for($b=0;$b<mysql_num_rows($r);$b++)
           {
             mysql_data_seek($r,$b);
             $a = mysql_fetch_array($r);
	      echo '<td><img src="img/0e6e-ireifzf9874096.gif" width="39" height="48" /><td><a href="IMG/Manual Administracion QX3M-7_Mangrisk version 4_4_2 2019-08-29.pdf"><img src="img/help blue.png" width="39" height="40" /></a></span></td></span></td+1><td><a href="log_out.php"><img src="img/vw3sh1kukmx.png" width="39" height="38" /></a></span></td></span></td+1><td><div align="center"><div class="avatar" style=" background-image: url('.$a["ruta_fichero1"].'"width=85 height=70  border=0")"></div></span></span><td><div align="left">'.$a["nombre_apellido"].'<div align="left">'.$a["Esencia"].'</a></span><div align="left"> '. $_SESSION['valid_user'].'</td></span></td+1><td></a><div class="avatar2" style=" background-image: url(banderas/pegatinas-coches-motos-bandera-del-reino-unido-ondeando.png) "></div></span></span></td+1><td><href="herramientas.php"><img src="img/Minio.png" width="39" height="38" /></td>
		   </td>';						
				}
?></table></i></table>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<div>
<div id="siteInfo1">
<marquee><?php 
mysql_connect("localhost","root","sa");
mysql_select_db("calidad");
$r = mysql_query("SELECT
noconformes.cod,
noconformes.date,
noconformes.Def_Lugar,
noconformes.SistGestion,
noconformes.Direc_detect,
noconformes.ruta_fichero,
noconformes.nombre_imagen,
noconformes.Causas1,
noconformes.Causas,
noconformes.Clasificacion,
noconformes.Procede,
noconformes.Soluc_Propuesta,
noconformes.Tratamiento,
noconformes.plazo,
noconformes.responsable,
noconformes.Estado
FROM
noconformes
WHERE Estado='Abierta'
ORDER BY date DESC");
	$a = mysql_fetch_array($r);
	
			  for($b=0;$b<mysql_num_rows($r);$b++)
			   {
				 mysql_data_seek($r,$b);
				 $a = mysql_fetch_array($r);
				 ?><img src="../img/services.png" width="27" height="27" />
				 <?php 
															 
															echo 'No Conf: '.$a["Causas1"].'; ';}					
															 ?><?php 

mysql_connect("localhost","root","sa");
mysql_select_db("calidad");
$r = mysql_query("SELECT
`mejoras`.`No_Acuerdo`,
Count(`mejoras`.`No_Acuerdo`),
`mejoras`.`id`,
`mejoras`.`fecha`,
`mejoras`.`No_RevDireccion`,
`mejoras`.`Contenido_Acuerdo`,
`mejoras`.`Fecha_Cumplimiento`,
`mejoras`.`Observaciones`,
`mejoras`.`nombre_apellido`,
`mejoras`.`Estado_mejoras`
FROM
`mejoras`
GROUP BY No_RevDireccion");
	$a = mysql_fetch_array($r);
	
			  for($b=0;$b<mysql_num_rows($r);$b++)
			   {
				 mysql_data_seek($r,$b);
				 $a = mysql_fetch_array($r);?><img src="../img/mano_blanca.png" width="25" height="29" />
				 <?php 
															 
															echo 'Acuerdo de Mejora: '.$a["Contenido_Acuerdo"].', ';}					
															 ?><?php 
mysql_connect("localhost","root","sa");
mysql_select_db("calidad");
$r = mysql_query("SELECT
	objetivos_estrateg.Objetivo_Gnal,
	objetivos_estrateg.id_ObjEst,
	objetivos_especifico.Obj_Especif,
	objetivos_especifico.id_ObjEsp,
	evaluacion_riesgo.id_Evalrisk,
	evaluacion_riesgo.descripcion_riesgo,
	evaluacion_riesgo.descripcion_causa,
	evaluacion_riesgo.descripcion_impacto,
	tipo_riesgo.id_tiprisk,
	tipo_riesgo.nom_riesgo,
	tipo_riesgo.ruta_fichero,
	valor_probriesgo.id_probrisk,
	valor_probriesgo.grado_probabriesgo,
	valor_impactriesgo.id_impactrisk,
	valor_impactriesgo.grado_impactriesgo,
	tratamientos.id_ttmto,
	tratamientos.tratamiento,
	evaluacion_riesgo.Estado,
	personal_plantilla.nombre_apellido,
	personal_plantilla.ruta_fichero1,
	personal_plantilla.Esencia,
	evaluacion_riesgo.nombre_apellido,
	evaluacion_riesgo.medida_aplicar,
	evaluacion_riesgo.fecha_cump,
	personal_plantilla.Area,
	evaluacion_riesgo.actividad
	FROM
	objetivos_estrateg
	Inner Join objetivos_especifico ON objetivos_estrateg.id_ObjEst = objetivos_especifico.id_ObjEst
	Inner Join evaluacion_riesgo ON objetivos_especifico.id_ObjEsp = evaluacion_riesgo.id_ObjEsp
	Inner Join tipo_riesgo ON tipo_riesgo.id_tiprisk = evaluacion_riesgo.id_tiprisk
	Inner Join valor_probriesgo ON valor_probriesgo.id_probrisk = evaluacion_riesgo.id_probrisk
	Inner Join valor_impactriesgo ON valor_impactriesgo.id_impactrisk = evaluacion_riesgo.id_impactrisk
	Inner Join tratamientos ON tratamientos.id_ttmto = evaluacion_riesgo.id_ttmto
	Inner Join personal_plantilla ON evaluacion_riesgo.nombre_apellido = personal_plantilla.nombre_apellido
	WHERE grado_probabriesgo = 'Alta' AND grado_impactriesgo = 'Alto'
	ORDER BY id_Evalrisk DESC");
	$a = mysql_fetch_array($r);
	
			  for($b=0;$b<mysql_num_rows($r);$b++)
			   {
				 mysql_data_seek($r,$b);
				 $a = mysql_fetch_array($r);
				 ?><img src="../img/lighting-png-lightning-red-hi.png" width="25" height="25" />
				 <?php  
															echo 'Riesgo: '.$a["descripcion_riesgo"].' ; ';}					
															 ?></marquee>
</div>
<align="center">
<div id="content">
<div class='mobile-container'>
<tr><tr>
<td><div class='mobile-container3'></td>
</tr></tr>
<h3>Sistema de Gestion</h3>
<tr><div class="avatar" style="background-image: url(img/CALIDAD.jpg" width="95" height="85")></div>	
<td></td>
</tr>    
<tr>
<td><hr></td>
</tr>
<tr>facebook/QMS
<div class="avatar" style="background-image: url(img/telefono2.jpg" width="95" height="85")></div>	
<td></td>
</tr>    
<tr>
<td><hr></td>
</tr>
<tr>facebook/consultor
<div class="avatar" style="background-image: url(img/wallpapers1.jpg" width="95" height="85")></div>	
<td></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr><div class='mobile-container4'>
<tr><a href="Formulario_InsercionVariables.php">factor(+)</a>	
<td></td></div>
</tr>    
<tr>
<td></td>
</tr></div>
<tr>
</tr>	
</div>
<div class='mobile-container1'><script language="JavaScript">
function filtrar(){
  document.getElementById("result").innerHTML = "<iframe src='prueba/carrusel1.php?comentario="+document.getElementById("comentario").value+"' frameborder=270 width=710 height=250 scroll=100>";
}
</script>
  <div align="center">Planeacion Estrategica Global-Actualidad en Contexto
<body onLoad="filtrar();">
</div>
<div align="left"><div id="result"> 
<input name="text" type="text"  id="comentario" onKeyUp="filtrar();">  
</div>
<div id="result"></div>
</body>
<div>
<marquee BGCOLOR=white width="714"><img src="../img/breaking-news-image.png" width="95" height="25" /><?php
mysql_connect("localhost","root","sa");
mysql_select_db("calidad");
$r = mysql_query("SELECT
	*
	FROM
	planeacion_estrategica
	ORDER BY id_planestrat DESC");
	$a = mysql_fetch_array($r);
	
			  for($b=0;$b<mysql_num_rows($r);$b++)
			   {
				 mysql_data_seek($r,$b);
				 $a = mysql_fetch_array($r);
				 ?><strong>
				 <?php  
															echo ' '.$a["factor"].' || ';}					
															 ?>follow us on: www.facebook.com/consultor</strong></marquee> 
</div>
</div>
</div>
	<tr><td> </td>  
	<td></td>
</table> 
<p align="center"><td>Analisis de Indicadores Globales.</td>
    <p align="center"><table width="374" border="0" bordercolor="#ECE9D8" bgcolor="#33CCFF" >
    <tr>
    </tr>
    <tr>
	  <td width="13"><html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Grafico_Gastos_Personales.php</title>
		
		
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
						renderTo: 'container',
						zoomType: 'x',
						spacingRight: 20
					},
				    title: {
						text: 'Medicion Eficiencia de SGC'
					},
				    subtitle: {
						text: document.ontouchstart === undefined ?
							'Click y arastre en el area del grafico para hacer zoom in' :
							'Superponga el mouse sobre el grafico para ver el dato'
					},
					xAxis: {
						type: 'datetime',
						maxZoom: 14 * 24 * 3600000, // fourteen days
						title: {
							text: null
						}
					},
					yAxis: {
						title: {
				
				text: 'Cantidad ($)'
						},
						min: 0.6,
						startOnTick: false,
						showFirstLabel: false
					},
					tooltip: {
						shared: true					
					},
					legend: {
						enabled: false
					},
					plotOptions: {
						area: {
							fillColor: {
								linearGradient: [0, 0, 0, 300],
								stops: [
									[0, Highcharts.getOptions().colors[0]],
									[1, 'rgba(2,0,0,0)']
								]
							},
							lineWidth: 1,
							marker: {
								enabled: false,
								states: {
									hover: {
										enabled: true,
										radius: 5
									}
								}
							},
							shadow: false,
							states: {
								hover: {
									lineWidth: 1						
								}
							}
						}
					},
				
					series: [{
						type: 'area',
						name: 'Ingresos ($)',
						pointInterval: 24 * 3600 * 1000,
						pointStart: Date.UTC(2015, 7, 03),
						data: [<?php 

mysql_connect("localhost","root","sa");
mysql_select_db("calidad");
$r = mysql_query("SELECT *
FROM
presupuesto_personal
WHERE Clasificacion = 'Ingresos'
ORDER BY date ASC");
$a = mysql_fetch_array($r);
 for($b=0;$b<mysql_num_rows($r);$b++)
														   {
															 mysql_data_seek($r,$b);
															 $a = mysql_fetch_array($r); 
															 
															 echo ''.$a["Entrada"].',' ;}
															 ?>]
					}, {
						type: 'area',
						name: 'Gastos ($)',
						pointInterval: 24 * 3600 * 1000,
						pointStart: Date.UTC(2015, 7, 03),
						data: [<?php 

mysql_connect("localhost","root","sa");
mysql_select_db("calidad");
$r = mysql_query("SELECT *
FROM
presupuesto_personal
WHERE Clasificacion = 'Gastos' 
ORDER BY date DESC");
$a = mysql_fetch_array($r);
 for($b=0;$b<mysql_num_rows($r);$b++)
														   {
															 mysql_data_seek($r,$b);
															 $a = mysql_fetch_array($r); 
															 
															 echo ''.$a["Salida"].',' ;}
															 ?>]
					}, {
						type: 'area',
						name: 'Diezmo ($)',
						pointInterval: 24 * 3600 * 1000,
						pointStart: Date.UTC(2015, 7, 03),
						data: [<?php 

mysql_connect("localhost","root","sa");
mysql_select_db("calidad");
$r = mysql_query("SELECT *
FROM
presupuesto_personal
ORDER BY date DESC");
$a = mysql_fetch_array($r);
 for($b=0;$b<mysql_num_rows($r);$b++)
														   {
															 mysql_data_seek($r,$b);
															 $a = mysql_fetch_array($r); 
															 
															 echo ''.$a["Salida"].',' ;}
															 ?>]
					}, {
						type: 'area',
						name: 'Reservas ($)',
						pointInterval: 24 * 3600 * 1000,
						pointStart: Date.UTC(2015, 7, 03),
						data: [<?php 

mysql_connect("localhost","root","sa");
mysql_select_db("calidad");
$r = mysql_query("SELECT *
FROM
presupuesto_personal
ORDER BY date DESC");
$a = mysql_fetch_array($r);
 for($b=0;$b<mysql_num_rows($r);$b++)
														   {
															 mysql_data_seek($r,$b);
															 $a = mysql_fetch_array($r); 
															 
															 echo ''.$a["Entrada"].',' ;}
															 ?>]
					}, {
						type: 'area',
						name: 'Invertido ($)',
						pointInterval: 24 * 3600 * 1000,
						pointStart: Date.UTC(2015, 7, 03),
						data: [0.00,0.00]
					}, {
						type: 'area',
						name: 'Saldo_Efectivo($)',
						pointInterval: 24 * 3600 * 1000,
						pointStart: Date.UTC(2015, 7, 03),
						data: [<?php 

mysql_connect("localhost","root","sa");
mysql_select_db("calidad");
$r = mysql_query("SELECT *
FROM
presupuesto_personal
ORDER BY date DESC");
$a = mysql_fetch_array($r);
 for($b=0;$b<mysql_num_rows($r);$b++)
														   {
															 mysql_data_seek($r,$b);
															 $a = mysql_fetch_array($r); 
															 
															 echo ''.$a["Saldo_Efectivo"].',' ;}
															 ?>]
					}]
				});
				
				
			});
				
		</script>
		
	</head>
	<body>
		
		<!-- 3. Add the container -->
		<div id="container" style="width: 350px; height: 280px; margin: 0 auto;"></div>			
	</body>
</html>
<div align="center">
</td>
<td width="83"><html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Medicion de Eficacia</title>
				
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
						renderTo: 'container2'
					},
					title: {
						text: 'Medicion de Eficacia del SGC'
					},
					subtitle: {
						text: 'Fuente: Evaluacion Fichas de Procesos'
					},
					xAxis: {
						categories: [<?php 
										mysql_connect("localhost","root","sa");
										mysql_select_db("calidad");
										$r = mysql_query("SELECT
										`procesos`.`id_proceso`,
										`procesos`.`Codigo`,
										`procesos`.`fecha`,
										`procesos`.`Sist_Gestion`,
										`procesos`.`Tipo`,
										`procesos`.`siglas`,
										`procesos`.`Proceso`,
										`procesos`.`ruta_fichero7`,
										`script`.`id_script`,
										`script`.`date`,
										`script`.`ruta_fichero`,
										`script`.`nombre_script`,
										`script`.`servicio`,
										`script`.`Accion`,
										`script`.`Observaciones`,
										`script`.`Estado`
										FROM
										`procesos`
										Inner Join `script` ON `script`.`id_script` = `procesos`.`id_script`
										WHERE Estado='habilitado'
										Order By id_proceso");
											
											$a = mysql_fetch_array($r);
													
													  for($b=0;$b<mysql_num_rows($r);$b++)
													   {
														 mysql_data_seek($r,$b);
														 $a = mysql_fetch_array($r);
														 	
															?>['<?php echo ''.$a["siglas"].'';?>',
															    ],<?php 
														
														}?>]
					},
					tooltip: {
						formatter: function() {
							var s;
							if (this.point.name) { // the pie chart
								s = ''+
									this.point.name +' <?php echo ''.$a["siglas"].'';?> '+ this.y +' %';
							} else {
								s = ''+
									this.x  +': '+ this.y;
							}
							return s;
						}
					},
					labels: {
						items: [{
							html: 'Brechas por Cumplir',
							style: {
								left: '40px',
								top: '-15px',
								color: 'black'				
							}
						}]
					},
					series: [{
						type: 'column',
						name: 'Plan',
						data: [100,100,100,100,100,100]
					}, {
						type: 'column',
						name: 'Real',
						data: [<?php 
					mysql_connect("localhost","root","sa");
					mysql_select_db("calidad");
					$r = mysql_query("SELECT
					`eficacia_procesoprimero`.`id_resulteficac`,
					`eficacia_procesoprimero`.`date`,
					`eficacia_procesoprimero`.`indicador`,
					`eficacia_procesoprimero`.`Estado_queja`,
					`eficacia_procesoprimero`.`Resolucion_requerida`,
					`eficacia_procesoprimero`.`Estado_contract`,
					`eficacia_procesoprimero`.`valor5`,
					`eficacia_procesoprimero`.`valor6`,
					`eficacia_procesoprimero`.`valor7`,
					`eficacia_procesoprimero`.`valor8`,
					`eficacia_procesoprimero`.`Total`,
					`eficacia_procesoprimero`.`observaciones`
					FROM
					`eficacia_procesoprimero`
					Order By date >DATE_SUB(NOW(), INTERVAL 1 MONTH)
					LIMIT 0,1");
					$a = mysql_fetch_array($r);
					 for($b=0;$b<mysql_num_rows($r);$b++)
				   {
					mysql_data_seek($r,$b);
					 $a = mysql_fetch_array($r); 
					 echo ''.$a["Total"].',' ;}
					 ?>
					 <?php 
						mysql_connect("localhost","root","sa");
						mysql_select_db("calidad");
						$r = mysql_query("SELECT
						`eficacia_procesosegundo`.`id_resulteficac`,
						`eficacia_procesosegundo`.`id_proceso`,
						`eficacia_procesosegundo`.`date`,
						`eficacia_procesosegundo`.`indicador`,
						`eficacia_procesosegundo`.`valor2`,
						`eficacia_procesosegundo`.`valor3`,
						`eficacia_procesosegundo`.`valor4`,
						`eficacia_procesosegundo`.`valor5`,
						`eficacia_procesosegundo`.`valor6`,
						`eficacia_procesosegundo`.`valor7`,
						`eficacia_procesosegundo`.`valor8`,
						`eficacia_procesosegundo`.`valor9`,
						`eficacia_procesosegundo`.`valor10`,
						`eficacia_procesosegundo`.`Total`,
						`eficacia_procesosegundo`.`observaciones`
						FROM
						`eficacia_procesosegundo`
						Order By date > DATE_SUB(NOW(), INTERVAL 1 MONTH)
						LIMIT 0,1");
						$a = mysql_fetch_array($r);
						 for($b=0;$b<mysql_num_rows($r);$b++)
						{
						 mysql_data_seek($r,$b);
						 $a = mysql_fetch_array($r); 
						echo ''.$a["Total"].',' ;}
						 ?><?php 
		mysql_connect("localhost","root","sa");
		mysql_select_db("calidad");
		$r = mysql_query("SELECT
		`eficacia_procesodecimo`.`Total`,
		MAX(`eficacia_procesodecimo`.`Total`),
		`eficacia_procesodecimo`.`id_resulteficac`,
		`eficacia_procesodecimo`.`id_proceso`,
		`eficacia_procesodecimo`.`date`,
		`eficacia_procesodecimo`.`indicador`,
		`eficacia_procesodecimo`.`Estado_doc`,
		`eficacia_procesodecimo`.`Estado`,
		`eficacia_procesodecimo`.`comentario`,
		`eficacia_procesodecimo`.`Proceso`,
		`eficacia_procesodecimo`.`Estado_queja`,
		`eficacia_procesodecimo`.`Estado_mejoras`,
		`eficacia_procesodecimo`.`Area`,
		`eficacia_procesodecimo`.`Total`,
		`eficacia_procesodecimo`.`observaciones`
		FROM
		`eficacia_procesodecimo`
		GROUP BY Total
		Order By date > DATE_SUB(NOW(), INTERVAL 1 MONTH)
		LIMIT 0,1");
		$a = mysql_fetch_array($r);
		 for($b=0;$b<mysql_num_rows($r);$b++)
														   {
															 mysql_data_seek($r,$b);
															 $a = mysql_fetch_array($r); 
															 
															 echo ''.$a["Total"].',' ;}
															 ?><?php 
		mysql_connect("localhost","root","sa");
		mysql_select_db("calidad");
		$r = mysql_query("SELECT
		`eficacia_procesonoveno`.`Total`,
		MAX(`eficacia_procesonoveno`.`Total`),
		`eficacia_procesonoveno`.`id_resulteficac`,
		`eficacia_procesonoveno`.`id_proceso`,
		`eficacia_procesonoveno`.`date`,
		`eficacia_procesonoveno`.`indicador`,
		`eficacia_procesonoveno`.`Estado_doc`,
		`eficacia_procesonoveno`.`Estado_aud`,
		`eficacia_procesonoveno`.`Estado_metro`,
		`eficacia_procesonoveno`.`Estado_enc`,
		`eficacia_procesonoveno`.`Estado_claus`,
		`eficacia_procesonoveno`.`sumav`,
		`eficacia_procesonoveno`.`Estado`,
		`eficacia_procesonoveno`.`Total`,
		`eficacia_procesonoveno`.`observaciones`
		FROM
		`eficacia_procesonoveno`
		GROUP BY Total
		Order By date> DATE_SUB(NOW(), INTERVAL 1 MONTH)
		LIMIT 0,1");
		$a = mysql_fetch_array($r);
		 for($b=0;$b<mysql_num_rows($r);$b++)
														   {
															 mysql_data_seek($r,$b);
															 $a = mysql_fetch_array($r); 
															 
															 echo ''.$a["Total"].',' ;}
															 ?><?php 
		mysql_connect("localhost","root","sa");
		mysql_select_db("calidad");
		$r = mysql_query("SELECT
		`eficacia_procesoquinto`.`Total`,
		MAX(`eficacia_procesoquinto`.`Total`),
		`eficacia_procesoquinto`.`id_resulteficac`,
		`eficacia_procesoquinto`.`id_proceso`,
		`eficacia_procesoquinto`.`date`,
		`eficacia_procesoquinto`.`indicador`,
		`eficacia_procesoquinto`.`Estado_plantilla`,
		`eficacia_procesoquinto`.`id_perfilcompetencia`,
		`eficacia_procesoquinto`.`Estado_candidato`,
		`eficacia_procesoquinto`.`Sist_Gestion`,
		`eficacia_procesoquinto`.`Proceso`,
		`eficacia_procesoquinto`.`Aprobados`,
		`eficacia_procesoquinto`.`Estado_evid`,
		`eficacia_procesoquinto`.`sumat`,
		`eficacia_procesoquinto`.`Total`,
		`eficacia_procesoquinto`.`observaciones`
		FROM
		`eficacia_procesoquinto`
		GROUP BY Total
		Order By date> DATE_SUB(NOW(), INTERVAL 1 MONTH)
		LIMIT 0,1");
		$a = mysql_fetch_array($r);
		 for($b=0;$b<mysql_num_rows($r);$b++)
														   {
															 mysql_data_seek($r,$b);
															 $a = mysql_fetch_array($r); 
															 
															 echo ''.$a["Total"].',' ;}
															 ?><?php 
		mysql_connect("localhost","root","sa");
		mysql_select_db("calidad");
		$r = mysql_query("SELECT
		`eficacia_procesosexto`.`Total`,
		MAX(`eficacia_procesosexto`.`Total`),
		`eficacia_procesosexto`.`id_resulteficac`,
		`eficacia_procesosexto`.`id_proceso`,
		`eficacia_procesosexto`.`date`,
		`eficacia_procesosexto`.`indicador`,
		`eficacia_procesosexto`.`Estado_compra`,
		`eficacia_procesosexto`.`cantidad_producto`,
		`eficacia_procesosexto`.`Resolucion_requerida`,
		`eficacia_procesosexto`.`Estado`,
		`eficacia_procesosexto`.`Estado_contract`,
		`eficacia_procesosexto`.`Estado_mtto`,
		`eficacia_procesosexto`.`Total`,
		`eficacia_procesosexto`.`observaciones`
		FROM
		`eficacia_procesosexto`
		GROUP BY Total
		Order By date> DATE_SUB(NOW(), INTERVAL 1 MONTH)
		LIMIT 0,1");
		$a = mysql_fetch_array($r);
		 for($b=0;$b<mysql_num_rows($r);$b++)
														   {
															 mysql_data_seek($r,$b);
															 $a = mysql_fetch_array($r); 
															 
															 echo ''.$a["Total"].',' ;}
															 ?>]
					}, {
						type: 'spline',
						name: 'Tendencia',
						data: [3, 2.67, 3, 6.33, 3.33, 3]
					}, {
						type: 'pie',
						name: 'Brechas por Cumplir',
						data: [{
							name: 'Por Alcanzar',
							y: <?php 

mysql_connect("localhost","root","sa");
mysql_select_db("calidad");
$r = mysql_query("SELECT
	`noconformes`.`Estado`,
	Count(`noconformes`.`Estado`),
	`noconformes`.`responsable`,
	`noconformes`.`nombre_apellido`,
	`noconformes`.`Direc_detect`
	FROM
	`noconformes` 
	WHERE Estado='Abierta' AND date > '2014-12-31'
	GROUP BY Estado");
	$a = mysql_fetch_array($r);
	
			  for($b=0;$b<mysql_num_rows($r);$b++)
			   {
				 mysql_data_seek($r,$b);
				 $a = mysql_fetch_array($r);
  				 
 
															 
															echo ''.$a[count("Estado")].'' ;}					
															 ?>,
							color: '#4572A7' // Jane's color
						}, {
							name: 'Eficacia',
							y: <?php 

mysql_connect("localhost","root","sa");
mysql_select_db("calidad");
$r = mysql_query("SELECT
	`noconformes`.`Estado`,
	Count(`noconformes`.`Estado`),
	`noconformes`.`responsable`,
	`noconformes`.`nombre_apellido`,
	`noconformes`.`Direc_detect`
	FROM
	`noconformes` 
	WHERE Estado='Cerrada' AND date > '2014-12-31'
	GROUP BY Estado");
	$a = mysql_fetch_array($r);
	
			  for($b=0;$b<mysql_num_rows($r);$b++)
			   {
				 mysql_data_seek($r,$b);
				 $a = mysql_fetch_array($r);
  				 
 
															 
															echo ''.$a[count("Estado")].'' ;}					
															 ?>,
							color: '#AA4643' // John's color
						}],
						center: [75, 25],
						size: 50,
						showInLegend: false,
						dataLabels: {
							enabled: false
						}
					}]
				});
				
				
			});
				
		</script>
		
	</head>
	<body>
		
		<!-- 3. Add the container -->
		<div id="container2" style="width: 380px; height: 280px; margin: 0 auto"></div>
	</body>
</html></td>
    </tr>
  </table>  
</div>
<!--end content --> 
<div id="navBar">
  <div class='mobile-container2'><div id="sectionLinks"> 
    <ul> 
      <h3>
<li><a href="info_Control_Procesoss.asp.php"><span class="Estilo16"><strong>Main Software Processes</span></strong></a></li>
  <li><a href="info_Control_Procesos.asp.php"><strong>Processes from System</strong></a></li>
    <li><a href="info_Control_PlanCalidad.asp.php"><strong>Quality Plan from Management System</strong></a></li>
	<li><a href="dashboards.php"><strong>Administrator from Management System</strong></a></li>
  <img src="img/Dark_Off.png" width="19" height="19"><span class="Estilo16">Strategical Processes</span></h3>
     <li><span class="Estilo16"></span><a href="info_gestiondireccion.asp.php">Global Strategic Planning </a>
     <li><a href="info_seguim_contratos.asp.php"><strong>Merchandising & Advertising</strong></a></li>
          <h3><span class="Estilo16">Mandatory Procedure</span></h3>
      <li><a href="info_Control_DocumDig.asp.php">Documented Information.</a></li>
      <li><a href="info_Control_DocumDigExt.asp.php">External Documents.</a></li>
      <li><a href="info_Control_RegistrosDig.asp.php">Registers Control</a></li>
      <li><a href="info_Seguim_Audit.asp.php">Internal Audits.</a><a href="info_Seguim_NoConf.asp.php">No Conform Outputs & Correctives Actions.</a></li>
	  <li><script language="JavaScript">
function AbrirCentrado(Url,NombreVentana,width,height,extras) {
var largo = width;
var altura = height;
var adicionales= extras;
var top = (screen.height-altura)/2;
var izquierda = (screen.width-largo)/2; nuevaVentana=window.open(''+ Url + '',''+ NombreVentana + '','width=' + largo + ',height=' + altura + ',top=' + top + ',left=' + izquierda + ',features=' + adicionales + ''); 
nuevaVentana.focus();
}

</script> 
<a href="javascript:AbrirCentrado('Performance.php','Pagina','950','580','');">Performancee & Improvements. </a></li>
          <h3><img src="img/Dark_Off.png" width="19" height="19" /><span class="Estilo16">Operations Processes</span></h3>
        <li><span class="Estilo16"></span>
<?php
//defino server, db, user, pass
$servidor = "localhost";
$basedatos = "calidad";
$usuario = "root";
$pass = "sa";

		//cargo los datos de la noticia
mysql_connect($servidor,$usuario,$pass);
mysql_select_db($basedatos);
$r = mysql_query("
SELECT
`procesos`.`id_proceso`,
`procesos`.`Codigo`,
`procesos`.`id_script`,
`procesos`.`fecha`,
`procesos`.`Sist_Gestion`,
`procesos`.`Tipo`,
`procesos`.`proceso`,
`script`.`id_script`,
`script`.`ruta_fichero`,
`script`.`nombre_script`,
`script`.`Estado`
FROM
`procesos`
Inner Join `script` ON `procesos`.`id_script` = `script`.`id_script` 
WHERE Tipo='Clave' AND Estado='habilitado' AND Sist_Gestion='Software'
ORDER BY id_proceso ASC
");
$a = mysql_fetch_array($r); 
?>
<?
		  for($b=0;$b<mysql_num_rows($r);$b++)
           {
             mysql_data_seek($r,$b);
             $a = mysql_fetch_array($r);
if($b%2>0 && $color = "#ffffff")
echo '<tr bgcolor=#cccccc><td></a></span></td+1><td><div align="left"><a href="'.$a["ruta_fichero"].'">'.$a["proceso"].'</a></span></td+1></td>
          </tr>';
		  else
		echo '<tr bgcolor=#ffffff><td></a></span></td+1><td><div align="left"><a href="'.$a["ruta_fichero"].'">'.$a["proceso"].'</a></span></td+1></td>
          </tr>';
		        }
?>
</a>
        <h3><img src="img/Dark_Off.png" width="19" height="19" /><span class="Estilo16">Support Processes</span></h3>
	    <li><span class="Estilo16"></span><a href="info_Seguim_EvalProveedores.asp.php">Logistic</a></li>
     <li><span class="Estilo16"></span><a href="Control_Plantilla_Personal.php">Management Competences</a></li>
	  <li><span class="Estilo16"></span><a href="info_Control_NormaDig.asp.php">Normalization</a><li>
    <li><span class="Estilo16"></span><a href="info_Control_Metrologico.asp.php">Metrology</a></li>
    <li><span class="Estilo16"></span><a href="info_Control_Metrologico.asp.php">Laboratory</a></li>
    <li><span class="Estilo16"></span><a href="info_Control_Proyectos.asp.php">Projects Management</a></li>
    <li><a href="Seguim_Costos_Calidad3.php">QX3M Tools.</a></li>
  </div> 
  </div> 
  </div> 
<!--end navbar -->
<div id="siteInfo1">
	<p align="center"><a>version: 2019-08-11 4.4.2 release</a> <a href="https://www.facebook.com/consultor">Contactenos:</a> www.facebook.com/consultor|</div>
<?php
// Control for Documentary Informations
mysql_connect("localhost","root","sa");
mysql_select_db("calidad");
$r = mysql_query("SELECT
	`noconformes`.`Estado`,
	Count(`noconformes`.`Estado`),
	`noconformes`.`responsable`,
	`noconformes`.`nombre_apellido`,
	`noconformes`.`Direc_detect`
	FROM
	`noconformes` 
	WHERE date > '2014-12-31' AND Estado='Abierta'
	GROUP BY Estado");
$a = mysql_fetch_array($r);
for($b=0;$b<mysql_num_rows($r);$b++)
	   {
     	 mysql_data_seek($r,$b);
		 $a = mysql_fetch_array($r);
		 
	$percent=$a[Count("Estado")]; 
// Fecha Actual en Formato 0000-00-00
$hoy = date("Y-m-d")."\n"; 
					if ($hoy>'2014-12-31')
						  {
echo '<body><script language="javascript">alert("¡Hello '.$_SESSION['valid_user'].', wellcome to QX3M-7.Mangrisk!. There�s '.$percent.' Non Conformities opened on your System that has more than 30 days aged. Please figure it out!.");</script></body>';
				
						  }
					else 
						  {
							echo '<script language="javascript">alert("! Hello Admin3. Welcome to <?php '.$percent.';?>your manager system.");</script>';					
							}
								
			}	
?>
<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<?php
include('alertasistema.php');
?>
</body>
</html>
</body>
<?php
}
else
{
echo'<p>You are not logged in.</p>';
echo'<p>Only logged in members may see this page.</p>';
}
echo'<a href="index.php">Back to login page.</a>';
?>
