<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>



<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.hoverImage {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;

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
    <h2 style="text-align: center; margin-bottom: 1em;">SHOP FOOTWEAR</h2>  
    
   
    <th><a href="index.php"><img  class="menlist" src="../uploads/men1.png">
      <h3>Nike Air Max Ultra </h3></a>
    </th>
    <th><a href=""><img src="../uploads/men1.png" class="menlist" >
      <h3>Jordan 67 </h3></a>
    </th>
    
    <th><a href=""><img src="../uploads/men1.png" class="menlist" >
      <h3>Men's adidas EQT  </h3></a>
    </th>
    
    <th><a href=""><img src="../uploads/men1.png" class="menlist">
      <h3>Nike Air Max 97</h3></a>
    </th>
    
    <th><a href=""><img src="../uploads/men1.png" class="menlist">
      <h3> Nike Huarache  Ultra</h3></a>
    </th>
    
    
</table>

 <h2 style="text-align: center; margin-top: 2em;">Latest women clothing</h2>  
<table class="tableimages">
  <tr class="images">
    <th ><section class="hoverCotainer">
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
