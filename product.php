<?php
    // Parse data
    $category_id = $t7product['categoryID'];
    $productName = $t7product['productName'];
    $price = $t7product['listPrice'];
    $discountPercentage = $t7product['discountPercent'];
    $discountTotal = round($price * ($discountPercentage / 100), 2);
    $uPrice= $price - $discountTotal;
    $formatDiscountPercentage = number_format($discountPercentage, 0);
    $formatDiscountTotal = number_format($discountTotal, 2);
    $formatUprice = number_format($uPrice, 2);
 ?>
<style>
* {box-sizing: border-box;}

</style>
<script>
function imageMagnify(imgID, outputID) {
  var img, magnify, output, canvasX, canvasY;
  img = document.getElementById(imgID);
  output = document.getElementById(outputID);

  magnify = document.createElement("DIV");
  magnify.setAttribute("class", "img-zoom-lens");

  img.parentElement.insertBefore(magnify, img);

  canvasX = output.offsetWidth / magnify.offsetWidth;
  canvasY = output.offsetHeight / magnify.offsetHeight;

  output.style.backgroundImage = "url('" + img.src + "')";
  output.style.backgroundSize = (img.width * canvasX) + "px " + (img.height * canvasY) + "px";

  magnify.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  magnify.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var position, x, y;

    e.preventDefault();
    
    position = getCursorPos(e);
  
    x = position.x - (magnify.offsetWidth / 2);
    y = position.y - (magnify.offsetHeight / 2);
  
    if (x > img.width - magnify.offsetWidth) {x = img.width - magnify.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - magnify.offsetHeight) {y = img.height - magnify.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the positionition of the magnify:*/
    magnify.style.left = x + "px";
    magnify.style.top = y + "px";
    /*display what the magnify "sees":*/
    output.style.backgroundPosition = "-" + (x * canvasX) + "px -" + (y * canvasY) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;

    a = img.getBoundingClientRect();
   
    x = e.pageX - a.left;
    y = e.pageY - a.top;

    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>


<img src="../uploads/salesbnner.png" class="banneersale">



<br>

<section class="img-zoom-container">
  <img id="magImage" src="../uploads/<?php echo $t7product['image_location']; ?>" width="300" height="200">
  <div id="myresult" class="img-zoom-result"></div>
</section>


<script>
// Initiate zoom effect:
imageMagnify("magImage", "myresult");
</script>

<section id="right_column">
  <h2><?php echo htmlspecialchars($productName); ?></h2>      
  <h3>Free Press and Pick up on this item</h3>
  <h2> <?php echo '£' . $formatUprice; ?></h2>
<table class="sizes">
  <tr>  
    <p>Sizes</p>
     <th><a href="">4</a>
    </th>
    <th><a href="">5</a>
    </th>
    <th><a href="">6</a>
    </th>
    <th><a href="">7</a>
    </th>
    <th><a href="">8</a>
    <th><a href="">9</a></th>
    <th><a href="">10</a></th>
  </table>
  <form action="<?php echo $app_path . 'cart' ?>" method="get" id="add_to_cart_form">
     <input type="hidden" name="action" value="add" />
     <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
      <b>Quantity:</b>&nbsp;
      <input type="number" name="quantity" value="1" size="2" min="0" max="200" />
      <input id="navg" type="submit" value="Add to Brasket" />
  </form>
</section><br>
<section class="tabNav">
  <button class="summarylinks" onclick="summaryOpen(event, 'Delivery')" id="leaveopen">Delivery and Returns</button>
  <button class="summarylinks" onclick="summaryOpen(event, 'Info')">Info</button>
  <button class="summarylinks" onclick="summaryOpen(event, 'Reviews')">Reviews customers</button>
</section>

<section id="Delivery" class="summaryTab">
  <h3>Delivery</h3>
  <p></p>
</section>

<section id="Info" class="summaryTab">
  <h3>Info</h3>
  <p>.</p> 
</section>

<section id="Reviews" class="summaryTab">
  <h3>Reviews</h3>
  <p></p>
</section>

<script>
function summaryOpen(tabNavEvent, infroSummary) {
    var i, summaryTab, summarylinks;
    summaryTab = document.getElementsByClassName("summaryTab");
    for (i = 0; i < summaryTab.length; i++) {
        summaryTab[i].style.display = "none";
    }
    summarylinks = document.getElementsByClassName("summarylinks");
    for (i = 0; i < summarylinks.length; i++) {
        summarylinks[i].className = summarylinks[i].className.replace(" active", "");
    }
    document.getElementById(infroSummary).style.display = "block";
    tabNavEvent.currentTarget.className += " active";
}

// Get the element with id="leaveopen" and click on it
document.getElementById("leaveopen").click();
</script>
