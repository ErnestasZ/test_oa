<?php session_start(); ?>
<?php include "includes/header.php";?>
<?php include "includes/navbar3.php";?>
<?php include "classes.php";?>


<?php 

  
  
 
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
    }
    
    if(isset($_POST['oasis4'])){
      $product = new Product();
      $product->name = 'Oasis4';
      $product->price = $_POST['oasis4'];
      $product->quantity = 1;
      $product->adds = $adds;
      $_SESSION['cart'][] = $product;
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


//_____________Oreder request______________
if(isset($_POST['order-request'])){
  print_r($_POST['order-request']);
}


?>


  
           
<?php
  if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0 ){
    
?>
          <div class="container">
           <div class="jumbotron cart-jumbotron">
             
              <h1>Your cart is empty</h1>
                <p>You can view the products in Oasis home page</p>
                <p><a class="btn btn-outline btn-xl" href="index.php" role="button">Back to OASIS</a></p>
            </div>
          </div>
 <?php
  } else {
 ?> 
  
    
   <section class="cart-header">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
<!--                    <h1 class="oasis-cont count-oasisII content-features">SEND A Quote for your chosen OASIS </h1>-->
                      
                    
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
                  <th>
                    <input type="submit" name="update" value="Qty / Refresh" id="cart-refresh" class="btn btn-default btn-xs" >
                  </th>
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
                    <td><?php echo $cart[$i]->name; ?>
                     <span class="text-muted"> <?php echo "(" .$cart[$i]->price . " EUR)"; ?></span></td>
                    <td><?php
                            $addsPrice = 0;
                            foreach($cart[$i]->adds as $add){
                              echo $add->name;
                              ?>
                               
                                <span class="text-muted">   
                              <?php 
                                echo "(" . $add->price . " EUR)<br>";
                              ?>
                              </span>
                              <?php
                              $addsPrice += $add->price;
                            }

                          ?></td>
                    <td class="col-sm-2">
                      <div class="cart-number">
                        <input type='number' value='<?php echo $cart[$i]->quantity; ?>' class="form-control table-qty" min="1" max="50" name="quantity[]">
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
         
         <div class="col-xs-12" align="center">
           <h2 class="cart-total">Total <?php echo $total . " EUR"; ?>*</h2>
           <p>*Taxes and shipping fee is not included.</p>
         </div>

       </div>
       
       
       
       
     </div>
      
    
    
  </form>
   
    
  </section>
  
  
  
<!--  Fill contact for order _____________________-->
  
   <section  class="cart-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                  <h1 class="oasis-cont content-features">Customer information</h1>
                </div>
            </div>
     </div>
            
     <div class="oasis2-cont form-div">      
           <div class="container">
            <form action="order_sent.php" class="" data-toggle="validator" role="form" method="post">
               
               <h3>Customer information</h3>
                
                <div class="row">
                 <div class="col-sm-6">
                     <div class="form-group">
<!--                      <label for="inputEmail" class="control-label">Email</label>-->
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required name="email">
                      <div class="help-block with-errors"></div>
                    </div>
                 </div>
                 <div class="col-sm-6">
                  <div class="form-group">
<!--                    <label for="inputPhone" class="control-label">Phone</label>-->
                    <input type="text" class="form-control" id="inputPhone" placeholder="Phone (optional)" name="phone">
                  </div>
                </div>
               </div>
               
               <h3>Shipping address</h3>
               
               <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group">
<!--                      <label for="inputName" class="control-label">Name</label>-->
                      <input type="text" class="form-control" id="inputName" data-error="What's your Name?" placeholder="Name" required name="name">
                      <div class="help-block with-errors"></div>
                    </div>
                 </div>
                 <div class="col-sm-6">
                    <div class="form-group">
<!--                      <label for="inputSurname" class="control-label">Last Name</label>-->
                      <input type="text" class="form-control" id="inputSurname" data-error="What's your Last Name?" placeholder="Last Name" required name="surname">
                      <div class="help-block with-errors"></div>
                    </div>
                 
                 </div>
               </div>
              
              
              <div class="row">
                <div class="col-sm-3">
                 
                  <div class="form-group">
                    <label for="inputCountry" class="control-label">Select Country</label>
                    <select class="form-control bfh-countries" data-country="" data-flags="true" required data-error="Select your Country" id="inputCountry" name="country">
<!--                  <option hidden value="">Select country</option>-->
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-sm-3">
                  
                  <div class="form-group">
<!--                    <label for="inputState" class="control-label">State</label>-->
                    <input type="text" class="form-control form-margin-top" id="inputState" placeholder="State (optional)" name="state">
                  </div>
                </div>
                
                <div class="col-sm-3">
                  <div class="form-group">
<!--                    <label for="inputZip" class="control-label">ZIP / Postal</label>-->
                    <input type="text" class="form-control form-margin-top" id="inputZip" placeholder="ZIP / Postal" required data-error="Fill in ZIP or Postal code" name="zip">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                
                <div class="col-sm-3">
                  <div class="form-group">
<!--                    <label for="inputCity" class="control-label">Your City</label>-->
                    <input type="text" class="form-control form-margin-top" id="inputCity" placeholder="City" required data-error="What's your City?" name="city">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                
              </div>
              
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
<!--                    <label for="inputAddress" class="control-label">Address</label>-->
                    <input type="text" class="form-control" id="inputAddress" placeholder="Address" required data-error="Don't forgret your address" name="address">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                
              </div>
              
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
<!--                    <label for="inputComment" class="control-label">Address</label>-->
                    <textarea class="form-control" id="inputComment" placeholder="Comment / Question (optional)" cols="10" rows="5" name="comment"></textarea>
                  </div>
                </div>
                
              </div>
              
              <div class="form-group" align="center">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="terms" data-error="Check Terms and Conditions" required>
                    I read and accept the <a href="" alt="" data-toggle="modal" data-target="#myModal1">Terms & Conditions</a>
                  </label>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
                  
              <div class="form-group" align="center">
                <button type="submit" class="btn btn-outline btn-xl" name="order-request">order request</button>
              </div>
            </form>
            
           
       </div>
     </div>
        
    </section> 
    
 <?php 
  }
?>
       
    
    <?php include "includes/footer.php"; ?>   
    

  
  
  
  
  
  
  
  
  
  
  
  
  

  

    
    
    
  
    
    
    
    
    
  