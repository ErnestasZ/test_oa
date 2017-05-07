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
  
   <section  class="text-center content-oasis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <h1 class="oasis-cont content-features">Have a question?</h1>
                  <p>Get in touch! We'd love to hear from you.</p>
                </div>
            </div>
            
             <div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
      <fieldset>

<!-- Form Name -->
<legend>FILL DATA FOR ORDERS</legend>

<!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">First Name</label>  
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
                </div>
              </div>
          </div>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label" >Last Name</label> 
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
              </div>
            </div>
          </div>

          <!-- Text input-->
                 <div class="form-group">
            <label class="col-md-4 control-label">E-Mail</label>  
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
              </div>
            </div>
          </div>


          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">Phone #</label>  
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
              </div>
            </div>
          </div>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">Address</label>  
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="address" placeholder="Address" class="form-control" type="text">
              </div>
            </div>
          </div>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">City</label>  
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="city" placeholder="city" class="form-control"  type="text">
              </div>
            </div>
          </div>

          <!-- Select Basic -->

          <div class="form-group"> 
            <label class="col-md-4 control-label">State</label>
              <div class="col-md-4 selectContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
              <select name="state" class="form-control selectpicker" >
                <option value=" " >Please select your state</option>
                <option>Alabama</option>
                <option>Alaska</option>
                <option >Arizona</option>
                <option >Arkansas</option>
                <option >California</option>
                <option >Colorado</option>
                <option >Connecticut</option>
                <option >Delaware</option>
                <option >District of Columbia</option>
                <option> Florida</option>
                <option >Georgia</option>
                <option >Hawaii</option>
                <option >daho</option>
                <option >Illinois</option>
                <option >Indiana</option>
                <option >Iowa</option>
                <option> Kansas</option>
                <option >Kentucky</option>
                <option >Louisiana</option>
                <option>Maine</option>
                <option >Maryland</option>
                <option> Mass</option>
                <option >Michigan</option>
                <option >Minnesota</option>
                <option>Mississippi</option>
                <option>Missouri</option>
                <option>Montana</option>
                <option>Nebraska</option>
                <option>Nevada</option>
                <option>New Hampshire</option>
                <option>New Jersey</option>
                <option>New Mexico</option>
                <option>New York</option>
                <option>North Carolina</option>
                <option>North Dakota</option>
                <option>Ohio</option>
                <option>Oklahoma</option>
                <option>Oregon</option>
                <option>Pennsylvania</option>
                <option>Rhode Island</option>
                <option>South Carolina</option>
                <option>South Dakota</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option> Uttah</option>
                <option>Vermont</option>
                <option>Virginia</option>
                <option >Washington</option>
                <option >West Virginia</option>
                <option>Wisconsin</option>
                <option >Wyoming</option>
              </select>
            </div>
          </div>
          </div>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">Zip Code</label>  
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
              </div>
          </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label">Website or domain name</label>  
             <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
            <input name="website" placeholder="Website or domain name" class="form-control" type="text">
              </div>
            </div>
          </div>

<!-- radio checks -->
         <div class="form-group">
            <label class="col-md-4 control-label">Do you have hosting?</label>
            <div class="col-md-4">
                <div class="radio">
                    <label>
                        <input type="radio" name="hosting" value="yes" /> Yes
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="hosting" value="no" /> No
                    </label>
                </div>
            </div>
        </div>

<!-- Text area -->
  
        <div class="form-group">
          <label class="col-md-4 control-label">Project Description</label>
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                  <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
          </div>
          </div>
        </div>

<!-- Success message -->
        <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
          </div>
        </div>

        </fieldset>
        </form>
        </div>
    </div><!-- /.container -->
            
            
           
  
        
    </section> 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 <?php 
  }
?>
  

    
    
    
<?php include "includes/footer.php"; ?>    
    
    
    
    
    
  