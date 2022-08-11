<!doctype html>
<html>
<head>
	<title> canteen automation  system </title>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="Templates\css\bootstrap.min.css">
<style>

	.header {
  overflow: hidden;
  background-color: #B6D268;
  padding: 10px 10px;

}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;
max-height: 538px;}

/* Slideshow container */
.slideshow-container {

  max-width: 90%;
  position:relative;
  margin:auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>

<body>
<div class="header">
	<div class="logo">
    	<img src="logo a.png"> 
        <div class="header-right"> 
	
	    <a class="active" href="index.php">Home</a>
	    <a href="services.php" >services</a>
	    <a href="about.php">about</a>
	    <a href="login.php">login</a>
	</div>
</div>
</div>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images\canteen2.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images\canteen4.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images\canteen3.jpg" style="width:100%">
 
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

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

<!--<h1>welcome to canteen automation system </h1>
<p>Canteen Automation System is the system where 
customers order their food and receive food in the 
canteen without any delay as they can directly go and
collect what they ordered without waiting for a turn 
or waiting time.
</p>-->

<!--<img src="C:\Users\abc\Desktop\
canteen.jpg" alt="canteen">-->


<br><br>


<!--<h3>login form</h3><br>

<form  style paddig-left:70px;
padding-top:70px;>
<label>Username : </label><br>
	<input type = "text"><br><br>

<label>password : </label><br>
	<input type = "password"><br><br>

<input type ="submit" name="submit" value="login">
<br><br>

don't have an account 

<a href="file:///C:/Users/abc/Desktop/register.html">
 sign up</a>  here


	

</form>-->


<main>
	
	
<section class="left-sec">
<h1 align="center">welcome to canteen automation system </h1>

<p>Canteen Automation System is the system where 
customers order their food and receive food in the 
canteen without any delay as they can directly go and
collect what they ordered without waiting for a turn or
 waiting time.
</p>

</section>


<section class="right-sec">
<figure><img src="burger 1.png">
</figure>

</section>

</main>




</body>


</html>

