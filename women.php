<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>



<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.hoverCotainer {
    position: relative;
    margin: 0;
    padding: 0;
   }

.hoverImage {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;

}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  hoverText-align: center;
}

.hoverCotainer:hover .hoverImage {
  opacity: 0.3;
}

.hoverCotainer:hover .middle {
  opacity: 1;
}

.hoverText {
  background-color: #000;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 100%;
  position: relative;
  margin: 0;
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
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.tableimages{
  text-align: center;   
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.tableimages{width: 100%; margin: 0;}
.tableimages{padding: 0;}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;

}
.brandstable a{color: #fff;
  text-decoration: none;
  background-color:#000;
  padding:0.5em;
 width:100px;
 height: 40px;
float: right;
margin: 0;}
.brandstable a:hover{color: #000;background-color:#fff;}
/* The dots/bullets/indicators */
.brandstable {
  width:70%;
  margin-left:11em;
}
.brandsrow{
  width:75%;
  margin-left:11em;

}

.brandsrow img{
  padding:0.4em;
}
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
.brandsrow a{
  text-decoration: none;
  color: #000;
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

<div class="slideshow-container">

<div class="mySlides fade">
 
  <img src="../uploads/men1.png" style="width:100%">

</div>
<div class="mySlides fade">
  <img src="../uploads/men2.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="../uploads/men3.jpg" style="width:100%">
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<div>
      
      
</div>
<table class="brandstable">
  <tr class="">    <th><img src="../uploads/brandsbanner.png" alt="women" class="hoverImage" >
    </th>
     <th><a href="..//catalog/?category_id=1">Shop All</a>
    </th>
    
</table>
<table class="brandsrow">
  <tr class="">   
    <h2 style="text-align: center;">SHOP FOOTWEAR</h2>  
    
   
    <th><a href="index.php"><img src="../uploads/men1.png" style="width:100%">
      <h3>Nike Air Max Ultra </h3></a>
    </th>
    <th><a href=""><img src="../uploads/men1.png" style="width:100%">
      <h3>Jordan 67 </h3></a>
    </th>
    
    <th><a href=""><img src="../uploads/men1.png" style="width:100%">
      <h3>Men's adidas EQT  </h3></a>
    </th>
    
    <th><a href=""><img src="../uploads/men1.png" style="width:100%">
      <h3>Nike Air Max 97</h3></a>
    </th>
    
    <th><a href=""><img src="../uploads/men1.png" style="width:100%">
      <h3> Nike Huarache  Ultra</h3></a>
    </th>
    
    
</table>

</table>
<table class="tableimages">
  <tr class="images">
    <th style="width:100%"><section class="hoverCotainer">
      <img src="../uploads/woment.jpg" alt="women" class="hoverImage" style="width:100%">
      <section class="middle">
            <section class="hoverText">Start Shooping</section>
      </section>
    </section>
  </th style="width:100%"">
  <th><section class="hoverCotainer">
      <img src="../uploads/woment.jpg" alt="women" class="hoverImage" style="width:100%">
      <section class="middle">
            <section class="hoverText">Start Shooping</section>
      </section>
    </section>
  </th>
   
   
  <tr>
    <td>
      <h3>Traniers<a href=""></a></h3>
      <p>Tranierseouhfehoervhoeifjvoiefjviofejv<br></p>
    </td>
     <td>
      <h3>Traniers<a href=""></a></h3>
      <p>Tranierseouhfehoervhoeifjvoiefjviofejv<br></p>
    </td>
  </tr>
</table>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
