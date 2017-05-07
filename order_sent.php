<?php include "classes.php" ?>

<?php session_start(); ?>

<?php include "includes/header.php";?>

<?php

if(isset($_POST['order-request'])){
  $to = $_POST['email'] . ", ernestas@stamperija.eu";
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
  
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
  $headers .= 'From: <order@oasisdome.eu>' . "\r\n";
//  $headers .= 'Cc: myboss@example.com' . "\r\n";
  
  mail($to,$subjet,$message,$headers);
  



?>




        <div class="container">
           <div class="jumbotron cart-jumbotron">
             
              <h1>Uzsakymo uzklausimas issiustas</h1>
                <p>Parasyti kazkoki teksta del uzsakymo ir kada susisieks</p>
                <p><a class="btn btn-outline " href="index.php" role="button">Back to OASIS</a></p>
            </div>
          </div>
<?php
}
  ?>

<?php include "includes/footer.php";?> 