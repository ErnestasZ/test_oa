<?php include "includes/header.php";?>
<?php include "includes/navbar2.php";?>


<?php session_start();
  echo "<br>";
  echo "<br>";
  echo "<br>";
  
  print_r($_POST) . "<br>";
  
//  $orders = array();
//  $count = 1;
  
  $_SESSION["orders"] = array();
  $_SESSION["count"] = 0;
  if(isset($_POST['submit'])){
    $_SESSION["count"] += 1;
    $_SESSION["orders"] = array($_SESSION["count"] => $_POST);
    
  }
  print_r($_SESSION["orders"]);
  echo $_SESSION["count"];



  <?php
$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
if (!empty($product_array)) { 
foreach($product_array as $key=>$value){
?>
<div class="product-item">
	<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
	<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
	<div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
	<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
	<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
	</form>
</div>
<?php }} ?>
?>

 
  <section class="cart-header">
  
  
   
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h1 class="oasis-cont count-oasisII content-features">SEND A Quote for your choose OASIS </h1>
                      
                    
                </div>
            </div>
        </div>
    
    
     
        
  </section>
  
  
  <section class="cart-template">
   <form action="" class="form-group" method="post">
     
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
           <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                 <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Adds</th>
                  <th class="table-qty">Qty</th>
                  <th>Price</th>
                  <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                 <tr>
                  <td>1</td>
                  <td><a href="oasis2_new.php" alt="">Oasis 2</a></td>
                  <td>
                    Floor heating<br>
                    Solar battery<br>
                    Air conditioning
                  </td>
                    
                  <td class="col-sm-1">
                    <div class="cart-number"><input type="number" value="1" class="form-control" id=""></div>
                  </td>
                  <td>3600 EUR</td>
                  <td>remove</td>
                  </tr>
                  <tr>
                  <td>2</td>
                  <td><a href="oasis4_new.php" alt="">Oasis 4</a></td>
                  <td>
                    Floor heating<br>
                    Solar battery<br>
                    Air conditioning
                  </td>
                    
                  <td class="col-sm-2">
                    <div class="cart-number"><input type="number" value="1" class="form-control" id=""></div>
                  </td>
                  <td>3600 EUR</td>
                  
                  <td>remove</td>
                  </tr>
                </tbody>
              </table>
            </div>
         </div>
       </div>
       
       <div class="row">
         <div class="col-xs-3 col-xs-offset-4">
           <h3>total</h3>
         </div>
         <div class="col-xs-3">
           <h3>7200 EUR</h3>
         </div>
         <div class="col-xs-2">
           <input type="submit" name="refresh" value="refresh" class="btn ntn-default">
         </div>
       </div>
       
       
       
       
     </div>
      
    
    
  </form>
   
    
  </section>
  
  <section>
  <div class="container">
   <div class="col-sm-6 col-sm-offset-3">
     <div class="form-wrap">
       <h1>Contact</h1>
        <form role="form" action="" method="post" id="login-form" atocomplete="off">
          <div class="form-group">
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="subject" class="sr-only">Subject</label>
            <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter your subject">
          </div>

          <div class="form-group">
            <textarea class="form-control" name="body" id="body" cols="50" rows="10"></textarea>
          </div>
          
          <div class="form-group">
            <label for="number" class="sr-only">Subject</label>
            <input type="number" name="number" class="form-control" id="number" value="1">
          </div>
          

          <input type="submit" name="submit" class="btn btn-custom btn-lg btn-block" id="btn-login" value="submit">
        </form>
      </div>
    </div>
  </div>
</section> 
  
  
  

    
    
    
<?php include "includes/footer.php"; ?>    
    
    
    
    
    
  