<?php session_start(); ?>
<?php include "classes.php" ?>
<?php include "includes/header.php";?>

<?php

if(isset($_POST['order-request'])){
  $to = $_POST['email'] . ", ernestas.zemaitis@gmail.com";
  $subject = "OASIS dome";
  $message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>Bandom</p>
    <table>
    <tr>
    <th>" . $_POST['name'] . "</th>
    <th>" . $_POST['surname'] . "</th>
    </tr>
    <tr>
    <td>" . $_POST['country'] . "</td>
    <td>Doe</td>
    </tr>
    </table>
    </body>
    </html>
  ";
  
//  Public Enterprise UPES KORYS
//Legal pers. no.: 302507368
//VAT: 100006458215
//Address: Elnių str. 27-62 / Stirnų str. 28-62, Vilnius Account: LT55 7044 0600 0752 5338
//Bank: SEB 70440 Co-founder Vytautas Puzeras
  
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
  $headers .= 'From: <order@oasisdome.eu>' . "\r\n";
//  $headers .= 'Cc: myboss@example.com' . "\r\n";
//  
  mail($to,$subjet,$message,$headers);
//  

?>




        <div class="container">
           <div class="jumbotron cart-jumbotron">
             
              <h1>Order is processed</h1>
                <p>Please check your email box</p>
                <p><a class="btn btn-outline btn-xl" href="index.php" role="button">Back to OASIS</a></p>
            </div>
          </div>
<?php
}
  ?>
  

<?php include "includes/footer.php";?> 