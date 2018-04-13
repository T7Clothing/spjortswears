<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.container {
    position: relative;
    width: 50%;
}

.image {
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
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}
.brandImages img{border: groove;
height: 7em;
width: 13em;
margin: 0;
background-color: green;
}
.navbar a {
    float: right;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
  
    
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #fff;
    color:#000;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 79%;
left: 0;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content .header {
    background: red;
    padding: 16px;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    background-color: #fff;
    height: 350px;
}

.column a {
    float: none;
    color: #A9A9A9;
    padding: 5px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-size:14px;

}
.column h3{
    text-decoration: underline;

}

.column a:hover {
    color:#000;
    background:none;
    text-decoration: underline;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
        height: auto;
    }
}
.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}
.infronav {
  overflow: hidden;
  background-color: #000;
}

.infronav a {
  float: right;
  display: block;
  color: #fff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.infronav a:hover {
  background-color: #ddd;
  color: black;
}


.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: left;
  margin-left:30em;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>
<nav class="infronav">
  <a class="active" href="#home"><i class="fa fa-map-marker" style="font-size:24px"></i>
Store</a>
  <a href="#about"><i class="fa fa-sign-in" style="font-size:24px"></i>
Login</a>
  <a href="#about"><i class="material-icons" style="font-size:12px">help_outline</i>Help</a>
</nav>



<div class="topnav"> 
  <a class="logo" href="#home"><img src="../uploads/T7logoblack.png">:</a>
<div class="search-container">
    <form action="/action_page.php">

      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
  
  <a href="#about"><i class="material-icons" style="font-size:20px;color:red">shopping_cart</i>Checkout


</a>
</div>
<div class="navbar">
<div class="dropdown">
    <button class="dropbtn">Lastest
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">
        <div class="column">
          <div class="container">
  <img src="latestmen.jpg" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <p> Latest In Kids</p>
  </div>
</div>
        </div>
        <div class="column">
          <div class="container">
  <img src="lastestwomen.jpg" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <p> Latest In Kids</p>
  </div>
</div>
        </div>
        <div class="column">
          <div class="container">
  <img src="lastekids.jpg" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <p> Latest In Kids</p>
  </div>
</div>
        </div>
      </div>
    </div>
  </div> 
   <div class="dropdown">
    <button class="dropbtn">Men
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">
      <div class="column">
          <img src="adidasbanner.jpg" alt="">
        </div>
        <div class="column">
          <h3>Sports Footwear</h3>
           <a href="#">Everyday Wear</a>
          <a href="#">Football Boots</a>
          <a href="#">Basketball Shoes</a>
          <a href="#">Fitness Trainers</a>
          <a href="#">Boxing Boots</a>

        </div>
        <div class="column">
          <h3>Clothing</h3>
          <a href="#">Everyday Wear</a>
          <a href="#">Cycling</a>
       	<a href="#">Equestrian</a>
       <a href="#">Fitness and Exercise</a>
       <a href="#">Golf</a>
       <a href="#">Outdoor</a>
       <a href="#">Running</a>
  
        </div>
        
      </div>
    </div>
  </div> 
    <div class="dropdown">
    <button class="dropbtn">Women
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">
      <div class="column"><img src="nikewoemen.jpg" alt="">
          
        </div>
        <div class="column">
          <h3>Sports Footwear</h3>
           <a href="#">Everyday Wear</a>
          <a href="#">Football Boots</a>
          <a href="#">Basketball Shoes</a>
          <a href="#">Fitness Trainers</a>
          <a href="#">Boxing Boots</a>

        </div>
        <div class="column">
          <h3>Clothing</h3>
          <a href="#">Everyday Wear</a>
          <a href="#">Cycling</a>
       	<a href="#">Equestrian</a>
       <a href="#">Fitness and Exercise</a>
       <a href="#">Golf</a>
       <a href="#">Outdoor</a>
       <a href="#">Running</a>
  
        </div>
        
      </div>
    </div>
  </div> 
    <div class="dropdown">
    <button class="dropbtn">Kids
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">

      <div class="column">
        <img src="d.jpg" alt="">  
        </div>
        <div class="column">
          <h3>Sports Footwear</h3>
           <a href="#">Everyday Wear</a>
          <a href="#">Football Boots</a>
          <a href="#">Basketball Shoes</a>
          <a href="#">Fitness Trainers</a>
          <a href="#">Boxing Boots</a>

        </div>
        <div class="column">
          <h3>Clothing</h3>
          <a href="#">Everyday Wear</a>
          <a href="#">Cycling</a>
       	<a href="#">Equestrian</a>
       <a href="#">Fitness and Exercise</a>
       <a href="#">Golf</a>
       <a href="#">Outdoor</a>
       <a href="#">Running</a>
  
        </div>
        
      </div>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Brands
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">
       <div class="column">
          <li class="brandImages"><img src="d.jpg" alt=""></li>
          <li class="brandImages"><img src="d.jpg" alt=""></li>
          <li class="brandImages"><img src="d.jpg" alt=""></li>
   
        </div>
        <div class="column">
      		       <li class="brandImages"><img src="d.jpg" alt=""></li>
          <li class="brandImages"><img src="d.jpg" alt=""></li>
          <li class="brandImages"><img src="d.jpg" alt=""></li>
   
        </div>
        <div class="column">
               <li class="brandImages"><img src="d.jpg" alt=""></li>
          <li class="brandImages"><img src="d.jpg" alt=""></li>
          <li class="brandImages"><img src="d.jpg" alt=""></li>
        </div>
        
      </div>
    </div>
  </div>
</div>



</body>
</html>
