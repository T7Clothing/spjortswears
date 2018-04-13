<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>T7 Clothing</title>
    <link rel="stylesheet" type="text/css"
          href="<?php echo $app_path ?>t87mains.css">
      
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
* {box-sizing: border-box; margin: 0;}

body {
 
  font-family: Arial, Helvetica, sans-serif;
}
.container {
    position: relative;
  
}
.container img {
    position: relative;
    height: 26em;
  
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
        padding-left:30em;
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
    background-color:#fff;
    width: 89%;
left: 0;
margin-left:5em;
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
  
    padding: 10px;
    background-color: #fff;
    height: 450px;
}
.ccolumn {
    float: left;
    width: 33.33%;
    padding: 10px;
    background-color: #fff;
    height: 450px;
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
  margin-left:9em;
  margin-top:2em;

}

.topnav input[type=text] {
  padding: 9px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:45em;
}

.topnav .search-container button {
  float: right;
  padding: 9px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none; 
  background-color:#000; 
  cursor: pointer;
}


button.lastest {
background:#000;
    border: 2px solid #7e85b7;
    color: #fff;
    padding: 0.3em;
    text-align: center;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
} 
button.lastest:hover {
background:#fff;
    border: 2px solid #7e85b7;
    color: #000;
    padding: 0.3em;
    text-align: center;
    display: inline-block;
    font-size: 16px;
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

<body>
<nav class="infronav">
  <a class="active" href="#home"><i class="fa fa-map-marker" style="font-size:14px"></i>
Store</a>

  <a href="#about"><i class="material-icons" style="font-size:14px">help_outline</i>Help</a>
    <?php
            // Check if user is logged in and
            // display appropriate account links
            $account_url = $app_path . 'account';
            $home_url = $app_path . 'index.php';
            $men_url = $app_path . 'men.php';
            $women_url = $app_path . 'women.php';
            $kids_url = $app_path . 'kids.php';


            $logout_url = $account_url . '?action=logout';
            if (isset($_SESSION['user'])) :
            ?>
                <a href="<?php echo $account_url; ?>">My Account</a>
                <a href="<?php echo $logout_url; ?>">Logout</a>


            <?php else: ?>
                <a href="<?php echo $account_url; ?>"><i class="fa fa-sign-in" style="font-size:14px"></i>Login</a>
            <?php endif; ?>




<!-- adm -->

        <?php
        // Check if user is logged in and
        // display appropriate account links
         $image_url = $app_path . 'admin/account';
        $account_url = $app_path . 'admin/account';
        $logout_url = $account_url . '?action=logout';
        if (isset($_SESSION['admin'])) :
        ?>

            <a href="<?php echo $logout_url; ?>">Logout</a>
        <?php else: ?>
            <a href="<?php echo $account_url; ?>"> Admin Login</a>
        <?php endif; ?>
       

</nav>



<div class="topnav"> 
  <a href="<?php echo $home_url; ?>"><img src="../uploads/T7logoblack.png"></a>
<div class="search-container">
    <form action="/action_page.php">

      <input type="text" class="search" placeholder="Search Puma, Footwear, Clothing" name="search">
      <button type="submit"><i class="fa fa-search" style="color:#fff"></i></button>
    </form>
  </div>
  
  <a href="<?php echo $app_path . 'cart'; ?>"><i class="material-icons" style="font-size:20px; margin-top:1.5em;">shopping_cart</i>Checkout


</a>
</div>
<div class="navbar">
<div class="dropdown">
    <button class="dropbtn" onclick="window.location.href='<?php echo $home_url; ?>'">Lastest
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">
        <div class="ccolumn">
          <div class="container">
              <img src="../uploads/latestmen.jpg" alt="Avatar" class="image" >
             <div class="middle">
                <button class="lastest" onclick="window.location.href='<?php echo $men_url; ?>'">Latest In Men</button>
            </div>
      </div>
        </div>
        <div class="ccolumn">
          <div class="container">
  <img src="../uploads/lastestwomen.jpg" alt="Avatar" class="image" >
  <div class="middle">
     <button class="lastest" onclick="window.location.href='<?php echo $women_url; ?>'">Latest In Women</button>
  </div>
</div>
        </div>
        <div class="ccolumn">
          <div class="container">
  <img src="../uploads/lastekids.jpg" alt="Avatar" class="image" >
  <div class="middle">
    <button class="lastest" onclick="window.location.href='<?php echo $kids_url; ?>'">Latest In Kids</button>
  </div>
</div>
        </div>
      </div>
    </div>
  </div> 
   <div class="dropdown">
    <button class="dropbtn" onclick="window.location.href='<?php echo $men_url; ?>'">Men
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">
  
          <img src="../uploads/menbaner.jpg" alt="" style=" float:left; width: 30em; height:40em;">
   
        <div class="column">
          <h3>Sports Footwear</h3>
          <a href="#">All Shoes</a>
          <a href="#">Lifestyle</a>
          <a href="#">Running</a>
          <a href="#">Gym  and Training</a>
          <a href="#"><a href="#">Tennis</a>
          <a href="#">Golf</a>
          <a href="#">Football</a>
          <a href="#">Jordan</a>
          <a href="#">Basketball</a>
          <a href="#">Skateboarding</a>
          <a href="#">Customise with NIKEiD</a>
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
    <button class="dropbtn"  onclick="window.location.href='<?php echo $women_url; ?>'">Women
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">
        <img src="../uploads/womenbanner.jpg" alt="" style=" float:left; width: 30em; height:40em;">
        <div class="column">
          <h3>Sports Footwear</h3>
          <a href="#">Everyday Wear</a>
          <a href="#">Football Boots</a>
          <a href="#">Basketball Shoes</a>
          <a href="#">Fitness Trainers</a>
          <a href="#">Boxing Boots</a>
          <a href="#">adidas Originals Deerupt</a>
          <a href="#">adidas Originals Swift Run</a>
          <a href="#">adidas Originals ZX Flux</a>
          <a href="#">adidas Originals Gazelle</a>
          <a href="#">adidas Originals Tubular Shadow</a>
          <a href="#">adidas Originals Superstar</a>
          <a href="#">adidas Originals NMD</a>
          <a href="#">adidas Originals Stan Smith</a>
          <a href="#">adidas EQT</a>
          <a href="#">adidas Ultra Boost</a>
          <a href="#">adidas Originals N-5923</a>
          <a href="#">adidas Originals I-5923</a>


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
    <button class="dropbtn"  onclick="window.location.href='<?php echo $kid_url; ?>'">Kids
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">

         <img src="../uploads/navbanner.jpg" alt="" style=" float:left; width: 30em; height:40em;">
        <div class="column">
           <h3>Sports Footwear</h3>
          <a href="#">All Shoes</a>
          <a href="#">Lifestyle</a>
          <a href="#">Running</a>
          <a href="#">Gym  and Training</a>
          <a href="#"><a href="#">Tennis</a>
          <a href="#">Golf</a>
          <a href="#">Football</a>
          <a href="#">Jordan</a>
          <a href="#">Basketball</a>
          <a href="#">Skateboarding</a>
          <a href="#">Customise with NIKEiD</a>

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

