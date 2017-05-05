<?php include "includes/header.php";?>
<?php include "includes/navbar3.php";?>
<?php include "classes.php";?>


<?php session_start();
  echo "<br>";
  echo "<br>";
  echo "<br>";
  
//  print_r($_POST);
  echo "<br>";
  
  
 
  if(isset($_POST['submit']) && !isset($_POST['update'])){
    
//    set ADDS_____________________________
    $adds = array();
    if(isset($_POST['floor-heating'])){
      $item = new AddsItem();
      $item->name = "Floor Heating";
      $item->price = $_POST['floor-heating'];
      array_push($adds, $item);
      
    }
    if(isset($_POST['air-conditioning'])){
      $item = new AddsItem();
      $item->name = "Air Conditioning";
      $item->price = $_POST['air-conditioning'];
      array_push($adds, $item);
      
    }
    if(isset($_POST['solar-battery'])){
      $item = new AddsItem();
      $item->name = "Solar Battery";
      $item->price = $_POST['solar-battery'];
      array_push($adds, $item);
      
    }
    if(isset($_POST['electrical-socket'])){
      $item = new AddsItem();
      $item->name = "Electrical Socket";
      $item->price = $_POST['electrical-socket'];
      array_push($adds, $item);
      
    }
//    unset($adds);
//    print_r($adds);
    
//    create product session with adds________________
    if(isset($_POST['oasis2'])){
      $product = new Product();
      $product->name = 'Oasis2';
      $product->price = $_POST['oasis2'];
      $product->quantity = 1;
      $product->adds = $adds;
      $_SESSION['cart'][] = $product;
      echo count($_SESSION['cart']);
    }
    
    if(isset($_POST['oasis4'])){
      $product = new Product();
      $product->name = 'Oasis4';
      $product->price = $_POST['oasis4'];
      $product->quantity = 1;
      $product->adds = $adds;
      $_SESSION['cart'][] = $product;
      echo count($_SESSION['cart']);
    }
    
  }
//_________Delete items__________________________
  if(isset($_GET['index']) && !isset($_POST['update'])){
    $cart = unserialize(serialize($_SESSION['cart']));
    unset($cart[$_GET['index']]);
    $cart = array_values($cart);
    $_SESSION['cart'] = $cart;
  }

//_____________Update items_________________
if(isset($_POST['update'])){
  $arrQty = $_POST['quantity'];
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i = 0; $i < count($cart); $i++){
    $cart[$i]->quantity = $arrQty[$i];
  }
  $_SESSION['cart'] = $cart;
}
  


 
?>

 
  <section class="cart-header">
  
  
   
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h1 class="oasis-cont count-oasisII content-features">SEND A Quote for your chosen OASIS </h1>
                      
                    
                </div>
            </div>
           
        </div>
    
    
     
        
  </section>
  
  
  <section class="cart-template">
   <form action="shopping_cart_new.php" class="form-group" method="post">
     
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
                <?php
                  $cart = unserialize(serialize($_SESSION['cart']));
                  $total = 0;
                  $index = 0;
//                  print_r($cart);
                  for($i=0; $i<count($cart); $i++){
                    
                ?>
                
                  <tr>
                    <td><?php $number = $i + 1;
                              echo $number; ?></td>
                    <td><?php echo $cart[$i]->name . " - " . $cart[$i]->price . " EUR"; ?></td>
                    <td><?php
                            $addsPrice = 0;
                            foreach($cart[$i]->adds as $add){
                              echo $add->name . " - " . $add->price . " EUR<br>";
                              $addsPrice += $add->price;
                            }

                          ?></td>
                    <td class="col-sm-2">
                      <div class="cart-number">
                        <input type='number' value='<?php echo $cart[$i]->quantity; ?>' class="form-control" min="1" max="50" name="quantity[]">
                      </div>
                    </td>
                    <td><?php echo ($cart[$i]->quantity * ($cart[$i]->price + $addsPrice)) . " EUR"; ?></td>
                    <td><a href="shopping_cart_new.php?index=<?php echo $index; ?>" alt="">remove</a></td>
                  </tr>
                 
                   
                <?php $total += $cart[$i]->quantity * ($cart[$i]->price + $addsPrice);
                      $index++;
                  } ?>
                 
                
               
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
           <h3><?php echo $total . " EUR"; ?></h3>
         </div>
         <div class="col-xs-2">
           <input type="submit" name="update" value="refresh" class="btn ntn-default">
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
    
    
    
    
    
  