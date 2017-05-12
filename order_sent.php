<?php include "classes.php" ?>
<?php session_start(); ?>
<?php include "includes/header.php";?>

<?php

if(isset($_POST['order-request'])){
  $to = $_POST['email'];
  $subject = "OASIS dome";
$message = "
<html>
<head>
<title>Oasis Dome</title>
</head>
<body>
<h3>OASIS DOME ORDER</h3>
<table width='600'>
<tr>
<th width='300' style='background-color: #726764; color: white;' align='left'>Oasis: </th>
<th></th>
</tr>
<tr>
<td>Puzero UAB<br>Company No. 303447415<br>Elnių str. 27-62, Vilnius, 08101<br>IBAN LT17 7044 0600 0799 2398<br>Bank SEB 70440<br>Director Vytautas Puzeras
<p></p>
</td>
<td></td>
</tr>";

$message .= "
<tr>
  <td width='300' style='background-color: #726764; color: white;' align='left'><strong>To:</strong></td>
  <td></td>
</tr>";

$message .= "
<tr>
  <td width='250'>Name: " . $_POST['name'] . "<br>Last name: " . $_POST['surname'] . "<br>Email: " . $_POST['email'] ."<br>Country: " . $_POST['country'] . "<br>Postal/ZIP: " . $_POST['zip'] . "<br>City: " . $_POST['city'] . "<br>Address: " . $_POST['address'] . "<br>";

if(isset($_POST['phone'])){
   $message .= "Phone: " . $_POST['phone'] . "<br>";
 }
  
if(isset($_POST['comment'])){
   $message .= "Comment: " . $_POST['comment'] . "<br>";
 }

$message .=  "<p></p>
  </td>
  <td></td>
</tr>
</table>";

$message .= "
<table width='600' cellspacing='0' style='border-collapse: collapse;'>
  <tr style='background-color: #726764; color: white;'>
    <th align='left'>Name</th>
    <th align='left'>Adds</th>
    <th>Qty</th>
    <th align='center'>Price </th>
  </tr>";
  
$price = 0;
$total = 0;

$cart = $_SESSION['cart'];
 
for($i = 0; $i < count($cart); $i++){
  $message .= "<tr style='border-bottom: 1px solid black'>";
  $message .= "<td>" . $cart[$i]->name . " (" . $cart[$i]->price . " EUR)</td>";
  
  $price += $cart[$i]->price;
  
  $message .= "<td>";
  foreach($cart[$i]->adds as $add){
    $message .= "" . $add->name . " (" . $add->price . " EUR)</br>";
    $price += $add->price;
  }
  $message .= "</td>";
  $message .= "<td align='center'>" . $cart[$i]->quantity . "</td>";
  $message .= "<td align='right'>" . $price . " EUR</td>";
  
 $message .= "</tr>";
 $total += $price;
 $price = 0;
 }
  
  $message .= "<tr><td></td><td></td><td align='center'><h4>Total: </h4></td><td align='right'><h4>" . $total . " EUR</h4></td></tr>";
$message .= "</table>";
$message .= "<table width='600'>
  <tr>
    <td>Thank You for your order! We are happy that soon we can share amazing feelings which Oasis brings.
    </td>
  </tr>
  <tr>
    <td>Our team received Your request for Oasis dome. At the moment we are counting delivery price for the address given.
    </td>
  </tr>
  <tr>
    <td>We will contact you as soon as possible.
    </td>
  </tr>
</table>";

$message .= "<h4>Oasis team</h4>";
$message .= "</body></html>";
  
  
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
  $headers .= 'From: <order@oasisdome.eu>' . "\r\n";
  $headers .= 'Bcc: ernestas.zemaitis@gmail.com, order@oasisdome.eu' . "\r\n";
//  
//  mail($to,$subject,$message,$headers);
//  
  unset($_SESSION['cart']);
?>

        <div class="container">
           <div class="jumbotron cart-jumbotron">
             
              <h1>Order is processed</h1>
                <p>Please check your email box</p>
                <p><a class="btn btn-outline btn-xl" href="index.php" role="button">Back to OASIS</a></p>
            </div>
          </div>
<?php
} else {
  header("Location: index.php");
  exit;
}
  ?>
  

<?php include "includes/footer.php";?> 