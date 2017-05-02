<?php 
print_r($_POST);

if(!isset($_POST["delete"])){
  if(isset($_POST["submit"])){
    $oasisDome = 3600;

    $colorFloor = array(
      "1" => "Natural",
      "2" => "Brown"
    );

    $colorCanopy = array(
      "1" => "Natural",
      "2" => "Brown"
    );

    $colorCurtain = array(
      "1" => "Light beige",
      "2" => "Brown"
    );

    $total = $oasisDome;


    $Floor = $colorFloor[$_POST["Color"]["1"]];
    $Canopy = $colorCanopy[$_POST["Color"]["3"]];
    $Curtain = $colorCurtain[$_POST["Color"]["5"]];

    echo "<br>";
    echo "Oasisdome " . $oasisDome . " EUR <br>";
    echo "Floor " . $Floor . "<br>";
    echo "Canopy " . $Canopy. "<br>";
    echo "Curtain " . $Curtain . "<br>";

    if(isset($_POST["floor-heating"])){
      echo "Floor heating " . $_POST["floor-heating"] . " EUR <br>";
      global $total;
      $total += $_POST["floor-heating"];
    }

    if(isset($_POST["air-conditioning"])){
      echo "Air conditioning " . $_POST["air-conditioning"] . " EUR <br>";
      global $total;
      $total += $_POST["air-conditioning"];
    }

    if(isset($_POST["solar-batery"])){
      echo "Solar batery " . $_POST["solar-batery"] . " EUR <br>";
      global $total;
      $total += $_POST["solar-batery"];
    }

    if(isset($_POST["electrical-socket"])){
      echo "Electrical socket " . $_POST["electrical-socket"] . " EUR <br>";
      global $total;
      $total += $_POST["electrical-socket"];
    }
    echo "TOTAL " . $total . " EUR";
  }
} else {
  $_POST = array();
  
}
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shopping_cart</title>
</head>
<body>
  <?php 
  if(!isset($_POST["delete"]) && !empty($_POST)) {
    ?>
   <form action="shopping_card.php" method="post">
     <input type="submit" name="delete" value="REMOVE">
   </form>
   <?php
  } else {
    echo "<br> Select your Oasis";
  }
  ?>
  
  <a href="index.php">back</a>
</body>
</html>