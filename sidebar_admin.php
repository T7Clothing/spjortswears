
<style type="text/css">
    body {
    margin: 0;
}

 ul.adminav_stock {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;

    position: fixed;
    height: 100%;
    overflow: auto;
}

ul.adminav_stock  {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 200px;
      background-color:#f3f3ef;
      color: white;
  }

li.linav_stock  a {
      display: block;
      color: #000;
      margin-top:0.5em;
      padding: 9px 16px;
      text-decoration: none;
  }

li.linav_stock  a:hover {
      background-color: #7D7D7D;
      color:#fff;
  }



</style>




<div>
  
    <ul  class="adminav_stock"> 
     <h2 style="color: black; font-size: 19px; margin-left:1em; margin-top: 0.5em;"> Admin Navigation</h2>
        <li class="linav_stock">
        <?php
        // Check if user is logged in and
        // display appropriate account links
        $account_url = $app_path . 'admin/account';
        $logout_url = $account_url . '?action=logout';
        if (isset($_SESSION['admin'])) :
        ?>
            <a href="<?php echo $logout_url; ?>">Logout</a>
        <?php else: ?>
            <a href="<?php echo $account_url; ?>">Login</a>
        <?php endif; ?>
        </li>
        <li class="linav_stock">
            <a href="<?php echo $app_path; ?>">Home</a>
        </li>
        <li class="linav_stock">
            <a href="<?php echo $app_path; ?>admin">Admin</a>
        </li>
    </ul>
    
    <?php if (isset($categories)) : ?>
    <!-- display links for all categories -->
    <h2>Categories</h2>
    <ul>
        <?php foreach ($categories as $category) : ?>
        <li>
            <a href="<?php echo $app_path .
                'admin/product?action=list_products' .
                '&amp;category_id=' . $category['categoryID']; ?>">
                <?php echo htmlspecialchars($category['categoryName']); ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</div>
