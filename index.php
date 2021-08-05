<html>
<head><title> LAND REGISTRATION MANAGEMENT SYSTEM </title>
<?php include("header.php") ?>
<style>


#footer {
font-size: large;
padding: 20px;
background:mediumseagreen;
margin-down:0px;
text-align: center;
}


* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;
text-align: center;}

/* Slideshow container */
.slideshow-container {
max-width: 800px;
position: relative;
margin: auto;
text-align: center;
}
body {
  background: linear-gradient( rgba(0, 0, 0,0.9), rgba(0, 0, 0, 0.5)), url(house.jpg) repeat;
    font-family: segoe ui;
}

/* Caption text */
.text {
color: #008000;
font-size: 15px;
padding: 8px 12px;
position: absolute;
bottom: 8px;
width: 100%;
height: 100%
text-align: center;
}


/* The dots/bullets/indicators */
.dot {
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #0d0d0d;
border-radius: 100%;
display: inline-block;
transition: background-color 0.6s ease;
text-align: center;
}

.active {
background-color: #008000;
text-align: center;
}

/* Fading animation */
.fade {
-webkit-animation-name: fade;
-webkit-animation-duration: 1.5s;
animation-name: fade;
animation-duration: 1.5s;
text-align: center;
}

@-webkit-keyframes fade {
from {opacity: .4}
to {opacity: 1}
text-align: center;
}

@keyframes fade {
from {opacity: .4}
to {opacity: 1}
text-align: center;
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
.text {font-size: 11px}
text-align: center;
}
.REG
{
side:30px;
color:#0d0d0d
text-align: center;
}
<head>
<title></title>
<style type="text/css">
img{
float:right;
}
p.clear
{
clear:right;
}
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
  
}


@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
 
</style>
</head>

 <body>
<div class="slideshow-container">

 <p align="center"><div class="mySlides fade"></p>
<img src="images/pic.jpg" class="img-rounded img-responsive" width="100%" height="80%">

</div>
<p align="center"><div class="mySlides fade"></p>
<img src="images/land.jpg" class="img-rounded img-responsive" width="100%" height="80%">
</div>
<p align="center"><div class="mySlides fade"></p>
<img src="images/ko.jpg" class="img-rounded img-responsive" width="100%" height="80%">
</div>
<p align="center"><div class="mySlides fade"></p>
<img src="images/pic.jpg" class="img-rounded img-responsive" width="100%" height="80%">
</div>
</div>

<div style="text-align:center">
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
slideIndex++;
if (slideIndex > slides.length) {slideIndex = 1}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
<?php include 'footer.php'; ?>
</body>
</html>
