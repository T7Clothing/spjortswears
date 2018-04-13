<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 200px;
    background:#fffefe;
        float: left;
        margin-top:4em;
}

#customers td, #customers th {
     border-top-style:solid;
    border-right-style: none;
    border-bottom-style: none;
    border-left-style: none;
    border-color: #c4c5c6;
     border-width: 1px ;
    padding-left: 20px; 
    
}
#customers h3{
font-size: 14px;
}

ol,li,ul{
  
  list-style-type:none;
}




#customers input[type=text] {
    width:50px;
    padding: 5px 7px;
    margin: 4px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
   
}
.strlayout a:hover {
    color: red;
     text-decoration: underline;
}


 .strlayout a{
 
 color: #000;
  font-size: 12px; 
  text-decoration: none;

 }

.strlayout li{
 padding-top:0.1em;
  padding-bottom:0.1em;

  
}
#customers input[type=submit] {
  background-color: #eaedef; 
  border: 2px groove #f2f2d2;
  color: #000;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 0.1em 0.3em;
  padding: 0.3em 0.3em;
}



#customers th {
    padding-top: 2px;
    padding-bottom: 2px;
    text-align: left;
   
    color: #000;
}


</style>


<aside class="clothingNav">
  <!-- Sideebar -->
  
  <table id="customers">
    <tr>
      <th><h4>You Have Selected</h4><h3 class="sbarheading">Refine by</h3></th>
    </tr>
    <tr class="strlayout">
      <td>
        <h3 class="sbarheading">Feature brands</h3>
        <!-- clothing categories links (Murach,Harris 2018) -->
        <nav id="brandnav"> 
          
          <?php
            require_once('/database/database.php');
            require_once('/database/clothingcategory_db.php');
            $t7categories = rectract_categories();
            foreach($t7categories as $t7category) :
                $catName = $t7category['categoryName'];
                $cID = $t7category['categoryID'];
               $url = $app_path . 'catalog?category_id=' . $cID;
            ?>
            <li>
              <a href="<?php echo $url; ?>">
              <?php echo htmlspecialchars($catName); ?>
              </a>
            </li>
          <?php endforeach; ?>
    
        </nav>
      </td>
  </tr>
  
  <tr class="strlayout">
    <td>
      <!-- Compare Prices -->
      <h3 class="sbarheading">Price</h3>
      <li><a href="">Under £15</a><br></li>
      <li><a href="">£15 - £50</a><br></li>
      <li><a href="">£50 - £100</a><br></li>
      <li><a href="">£100 - £200</a><br></li>
      <li><a href="">£200 - £500</a><br></li>
      <input type="text" name="min" placeholder="£20">
      <input type="text" name="max" placeholder="£100">
      <input type="submit" value="Submit">
    </td>
  </tr>
  <tr class="strlayout">
    <td>
      <!-- costumers review Rating -->
      <h3 class="sbarheading">Costumer review</h3>
      <span class="heading">User Rating</span> <br>
      <a href="">
      <span class="fa fa-star checked"></span>
      <span id="starfill" class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span></a><br>
      <a href="">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star-o"></span>
      </a><br>
      <a href="">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star-o"></span>
         <span class="fa fa-star-o"></span>
       </a><br>
      <a href="">
        <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star-o"></span>
         <span class="fa fa-star-o"></span>
        <span class="fa fa-star-o"></span>
      </a><br>
      <a href="">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star-o"></span>
        <span class="fa fa-star-o"></span>
        <span class="fa fa-star-o"></span>
       <span class="fa fa-star-o"></span>
     </a><br>
    </td>
  </tr>  
</table>

</aside>
