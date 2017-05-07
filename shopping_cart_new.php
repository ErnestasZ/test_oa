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
  

 
?>


  
           
<?php
  if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0 ){
    
?>
          <div class="container">
           <div class="jumbotron">
             
              <h1>Prekiu krepselis tuscias</h1>
                <p>Parasyti kazkoki teksta del tuscio prekiu krepselio</p>
                <p><a class="btn btn-primary btn-lg" href="index.php" role="button">Back to OASIS</a></p>
            </div>
            </div>
 <?php
  } else {
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
  
  
  
<!--  Fill contact for order _____________________-->
  
   <section  class=" content-oasis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <h1 class="oasis-cont content-features">Have a question?</h1>
                  <p>Get in touch! We'd love to hear from you.</p>
                </div>
            </div>
            
            
            <form class="well form-horizontal" data-toggle="validator" role="form">
               
               <h3>Customer information</h3>
                
                <div class="row">
                 <div class="col-sm-6">
                     <div class="form-group">
                      <label for="inputEmail" class="control-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                      <div class="help-block with-errors"></div>
                    </div>
                 </div>
                 
               </div>
               
               <h3>Shipping address</h3>
               
               <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group">
<!--                      <label for="inputName" class="control-label">Name</label>-->
                      <input type="text" class="form-control" id="inputName" placeholder="Name" required>
                    </div>
                 </div>
                 <div class="col-sm-6">
                    <div class="form-group">
<!--                      <label for="inputName" class="control-label">Surname</label>-->
                      <input type="text" class="form-control" id="inputName" placeholder="Surname" required>
                    </div>
                 
                 </div>
               </div>
              
              
              
               <div class="form-group">
<!--                <label for="inputName" class="control-label">Company</label>-->
                <select class="form-control bfh-countries" data-country="$('#country option[value='']').text('Select Country');" data-flags="true" required data-error="Select your Country">
<!--                  <option hidden value="">Select country</option>-->
                </select>
                <div class="help-block with-errors"></div>
                
<!--
                 <select  class="form-control" id="" placeholder="Company (optional)" required>
                   <option value="">Lietuva</option>
                   <option value="">Latvija</option>
                 </select>
-->
              </div>
              
              
              <div class="form-group has-feedback">
                <label for="inputTwitter" class="control-label">Twitter</label>
                <div class="input-group">
                  <span class="input-group-addon">@</span>
                  <input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="1000hz" required>
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors">Hey look, this one has feedback icons!</div>
              </div>
              
              
              <div class="form-group">
                <label for="inputEmail" class="control-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                <div class="help-block with-errors"></div>
              </div>
              
              <div class="form-group">
                <label for="inputPassword" class="control-label">Password</label>
                <div class="form-inline row">
                  <div class="form-group col-sm-6">
                    <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                    <div class="help-block">Minimum of 6 characters</div>
                  </div>
                  <div class="form-group col-sm-6">
                    <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="radio">
                  <label>
                    <input type="radio" name="underwear" required>
                    Boxers
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="underwear" required>
                    Briefs
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
                    Check yourself
                  </label>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            
           
     </div>
        
    </section> 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 <?php 
  }
?>
  

    
    
    
<?php include "includes/footer.php"; ?>    
    
    
    
    
    
  