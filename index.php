<?php session_start(); ?>
<?php ob_start(); ?>
<?php include "classes.php" ?>
<?php include "includes/config.php" ?>
<?php include "includes/header.php";?>
<?php include "includes/navbar.php";?>  
<?php
if(isset($_POST['send'])){
$name = ($_POST['name']);
  $email = ($_POST['email']);
  $description = ($_POST['comment']);
  
  $to = $email;
  $message = "Your request was sent succsessfuly!<br><br>Name: " . $name . "<br> Description: " . $description . "<br><br>OASIS DOME";
  $subject = "Request received";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
  $headers .= 'From: <order@oasisdome.eu>' . "\r\n";
  $headers .= 'Bcc: order@oasisdome.eu' . "\r\n";
  
mail($to,$subject,$message,$headers);
  
  header("Location: index.php?param1=bele");
  exit;
  
  
}

?>
<header>
 
  <div class="text-header">
    <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="oasis-header">
                        <div class="header-content-inner">
                            <h1>Unique spot of senses</h1>
                            <p class="p-header">Glamping stay and 360-degree view for a luxury escape and connection with surrounding.<br> Feel the moment and enjoy nature!</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-movie" align="center">
             
              <div class="row">
                <div class="col-sm-3 col-sm-offset-3 highlights">
                  <a href="https://www.youtube.com/watch?v=fulVkG_RQ0k" target="_blank"><p>Movie highlights <i class="icon-social-youtube icon-head"></i></p></a>
                </div>
                <div class="col-sm-3 highlights">
                  <a href="https://vimeo.com/184565990" target="_blank"><p>Oasis movie <i class="icon-social-youtube icon-head"></i></p></a>
                </div>
              </div>
           
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <a href="#order" class="btn btn-outline btn-xl page-scroll btn-header">ORDER</a>
                </div>
              </div>
            </div>
        </div>
  </div>
    
   <div class="flexslider oasis-slider">
    <ul class="slides">
      <li class="header-oasis1">
         <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="oasis-header">
                        <div class="header-content-inner">
                            <h1>Unique spot of senses</h1>
                            <p class="p-header">Glamping stay and 360-degree view for a luxury escape and connection with surrounding.<br> Feel the moment and enjoy nature!</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-movie" align="center">
             
              <div class="row">
                <div class="col-sm-3 col-sm-offset-3 highlights">
                  <a href="https://www.youtube.com/watch?v=fulVkG_RQ0k" target="_blank"><p>Movie highlights <i class="icon-social-youtube icon-head"></i></p></a>
                </div>
                <div class="col-sm-3 highlights">
                  <a href="https://vimeo.com/184565990" target="_blank"><p>Oasis movie <i class="icon-social-youtube icon-head"></i></p></a>
                </div>
              </div>
           
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <a href="#order" class="btn btn-outline btn-xl page-scroll btn-header">ORDER</a>
                </div>
              </div>
            </div>
        </div>
<!--        <img src="images/OASIS-INTRO1___.jpg" />-->
      </li>
      <li class="header-oasis2">
       <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="oasis-header">
                        <div class="header-content-inner">
                            <h1>Unique spot of senses</h1>
                            <p class="p-header">Glamping stay and 360-degree view for a luxury escape and connection with surrounding.<br> Feel the moment and enjoy nature!</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-movie" align="center">
             
              <div class="row">
                <div class="col-sm-3 col-sm-offset-3 highlights">
                  <a href="https://vimeo.com/202928576" target="_blank"><p>Movie highlights <i class="icon-social-youtube icon-head"></i></p></a>
                </div>
                <div class="col-sm-3 highlights">
                  <a href="https://vimeo.com/184565990" target="_blank"><p>Oasis movie <i class="icon-social-youtube icon-head"></i></p></a>
                </div>
              </div>
           
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <a href="#order" class="btn btn-outline btn-xl page-scroll btn-header">ORDER</a>
                </div>
              </div>
            </div>
        </div>
<!--        <img src="images/OASIS-INTRO2___.jpg" />-->
      </li>
    </ul>
  </div>  
       
   
        
</header>

    <section class=" text-center content-oasis content-oasis-first">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h1 class="oasis-cont">Gorgeous 360 view</h1>
                    <p>Oasis brings totally different experience and emotions: it is a new way of staying in nature. Unique round-shaped form gives unlimited 360-degree view. Your stay in Oasis becomes a part of surroundings: no walls separation - just a clear view. It is practical, movable, long-lasting.</p>
                
                </div>
            </div>
        </div>
    </section>
    
    <div class="image-bg-oasis">
     
    </div>
    
    <section class=" text-center content-oasis">
        <div class="container">
           
         <?php 
//            session_start();
//            global $_SESSION['cart'];
//          print_r($_SESSION['cart']);
//            if(count($_SESSION['cart']) == 0){
//              echo "Tuscias";
//            } else {
//              echo "Prekiu krepselyje yra";
//            }
          
          
          
          ?>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h1 class="oasis-cont">Ideal for your hobby</h1>
                    <p>Oasis dome is designed to match your individual needs at various places. Spend the time for your hobby at any place you like: whether it is reading a book on a meadow or kite surfing at extremely windy places. Oasis is constructed to keep you safe inside and remain stable - no matter what’s the weather outside.</p>
                
                </div>
            </div>
        </div>
    </section>
    
    <section class="image-bg1-oasis">
     
    </section>
    
    <section class=" text-center content-oasis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <p class="oasis-comment">"Oasis is absolutely extraordinary dome where i find myself safe and protected from enviromental effects. No matter if it's rainy or windy outside it's always cozy inside"</p>
                
                </div>
            </div>
        </div>
    </section>
    
    <section class="image-bg2-oasis">
     
    </section>
    
    <section class=" text-center content-oasis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <p class="oasis-comment">Starry sky in your eyes...</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="img-bg-oasis" >
     
    </section>
    
    
    <section id="features" class=" text-center content-oasis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h1 class="oasis-cont ">Features</h1>
                    
                </div>
            </div>
            <div class="row">
              <div class="col-sm-5 col-sm-offset-1">
                <div class="features-icons">
                  <img src="images/icons/wind_resistant.png" alt="" class="wind-icon">
                  <h3 class="oasis-i-h3">Wind resistant</h3>
                  <p class="oasis-i-p">Cover canopy is wind proof</p>
                </div>
                <div class="features-icons">
                  <img src="images/icons/snow_resistant.png" alt="">
                  <h3 class="oasis-i-h3">Snow resistant</h3>
                  <p>Cover canopy is snow and cold proof</p>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="features-icons">
                  <img src="images/icons/rain_resistant.png" alt="">
                  <h3 class="oasis-i-h3">Rain resistant</h3>
                  <p>Cover canopy is water proof</p>
                </div>
                <div class="features-icons">
                  <img src="images/icons/condensation.png" alt="">
                  <h3 class="oasis-i-h3">No condensation inside</h3>
                  <p>Of installed air vents</p>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <div class="features-icons">
                    <img src="images/icons/mosquitos.png" alt="">
                    <h3 class="oasis-i-h3">Anti mosquito meshes: doors, ventilations</h3>
                  </div> 
                </div>
            </div>
        </div>
    </section>
    
    
     <section class=" text-center content-oasis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h1 class="oasis-cont content-features">Materials</h1>
                    <p>All construction is made of impregnated marine plywood. Plywood is highest quality and made from local wood.
                    Floor and arches are impregnated with natural oil for a <em>soft touch feeling.</em>
                    Zincify steel fittings. Canopy is UV resistand and long-term transparency.</p>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-5 col-sm-offset-1">
                <div class="features-icons">
                  <img src="images/icons/MAT_CERT.png" alt="" class="sertification-icon">
                
                  <h3>Materials sertifications</h3>
                  
                </div>
              </div>
              <div class="col-sm-5">
                <div class="features-icons">
                  <img src="images/icons/RECYCLE_2.png" alt="" class="recycle-icon">
                  <h3>All materials is recycable</h3>
                </div>
              </div>
            </div>
        </div>
    </section> 
    
    
    <section id="order" class=" text-center content-oasis home-send-request">
        <div class="container">
<!--          <div class="home-send-request">-->
<!--           <div class="thumbnail">-->
            <div class="row">
                <div class="col-xs-6">
                    <div class="thumbnail  request">
                      <img src="images/OASIS2-SENDREQUEST.png" alt="" >
                      <div class="caption">
                        <h1 class="oasis-cont">OASIS 2</h1>
                        <p>CAPACITY 2 PERSONS</p>
                        <h3>from 3600 EUR</h3>
                        <p><a href="oasis2_new.php" class="btn btn-outline btn-xl">ORDER</a></p>
                      </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="thumbnail  request">
                      <img src="images/OASIS4-SENDREQUEST.png" alt="" >
                      <div class="caption">
                        <h1 class="oasis-cont">OASIS 4</h1>
                        <p>CAPACITY 4 PERSONS</p>
                        <h3>from 4400 EUR</h3>
                        <p><a href="oasis4_new.php" class="btn btn-outline btn-xl">ORDER</a></p>
                      </div>
                    </div>
<!--
                    <div>
                     <h1 class="oasis-cont">OASIS 4</h1>
                     
                      <a href="#download" class="btn btn-outline btn-xl page-scroll btn-header">ORDER</a>
                    </div>
-->
                </div>
            </div>
           
<!--          </div>-->
<!--          </div>-->
        </div>
    </section> 
    
    
    
    <section class=" text-center content-oasis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="oasis-cont">OASIS 2 dimensions</h1>
                    <p>DIAMETER 2.65m / 8,69 ft,  HIGH 2.65m / 8,69 ft <br>
                    FLOORS 4,6m2 / 49,5 sq ft,  STORAGE SPACE 1.4m3 / 15 sq ft <br>
                    CAPACITY 2 PERSONS</p>
                    <div class="thumbnail color-pick">
                      <img src="images/OASIS-2-dim.png" alt="" >
                    </div>
                </div>
                <div class="col-sm-6">
                    <h1 class="oasis-cont">OASIS 4 dimensions</h1>
                    <p>DIAMETER 3.9m / 12.78 ft,  HIGH 3m / 9,84 ft <br>
                    FLOORS 9,4 m2 / 101,18 sq ft,  STORAGE SPACE 2.1m3 / 22,6 sq ft <br>
                    CAPACITY 4 PERSONS</p>
                    <div class="thumbnail color-pick">
                      <img src="images/OASIS-4-dim.png" alt="" >
                    </div>
                </div>
            </div>
           
        </div>
    </section> 
    
    
    <section class="text-center content-oasis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <h1 class="oasis-cont content-features">Weather conditions</h1>
                    
                </div>
            </div>
            
           <div class="row">
              <div class="col-md-6">
               <div class="thumbnail color-pick">
                <img src="images/GIF/Saule_vejas.gif" alt="" class="ventilation">
                </div>
              </div>
              <div class="col-md-6">
                <div class="weather">
                  <p>Use your Oasis in different weather conditions. To feel the most comfortable while staying inside we recommend use it in between the temperatures from +15C till +25C.</p>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
               <div class="thumbnail color-pick">
                <img src="images/icons/temperature.png" alt="">
                </div>
              </div>
            </div>
           
        </div>
    </section> 
    
    <section class="text-center content-oasis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <h1 class="oasis-cont content-features">Storage</h1>
                    
                </div>
            </div>

            <div class="row">
              <div class="col-md-6">
               <div class="thumbnail color-pick">
                <img src="images/GIF/GRINDYS.gif" alt="">
                </div>
              </div>
              <div class="col-md-6">
                <div >
                 <h3>WATERPROOF DOUBLE BOTTOM <br>FOR A STORAGE SPACE</h3>
                  <p><em>It is really clever to hide everything unnecessary under floor to have clear surface for atmosphere of moment mood</em></p>
                  <p class="storage"><span>OASIS 2</span>  floor which is 4,6 m2 / 49,5 sq ft is designed with 2 raised floor doors and 2 openings with 1.4m3 / 15 sq ft under the floor for reaching your things easy and convenient.</p>
                  <p class="storage"><span>OASIS 4</span>  floor which is 9,4 m2 / 101,18 sq ft is designed with 4 raised floor doors with 2.1m3 / 22,6 sq ft  under the floor for reaching your things easy and convenient.             
                  </p>
                </div>
              </div>
            </div>
           
        </div>
    </section> 
    
    <section class="text-center content-oasis sec-ventilation">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <h1 class="oasis-cont content-features">Ventilation</h1>
                    
                </div>
            </div>
          <div >
            <div class="row">
              <div class="col-md-6">
               <div class="thumbnail color-pick">
                <img src="images/GIF/VEDINIMAS.gif" alt="" class="ventilation" >
                </div>
              </div>
              <div class="col-md-6">
               <div class="out">
                <div class="inner">
                  <p>OASIS 2 there are 5 air vents installed in the walls and main open/close output in the roof + doors <br>
                  OASIS 4 there are 7 air vents installed in the walls and main open/close output in the roof + doors             
                  </p>
                </div>
              </div>
              </div>
            </div>
           </div>
        </div>
    </section> 
    
    
    
    <section class="text-center content-oasis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <h1 class="oasis-cont content-features press-gallery">Press</h1>
                    
                </div>
            </div>
            <div class="row">
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/boredpanda.jpg" alt="">
                </div>
              </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/dailyarch.png" alt="">
                </div>
               </div>
                <div class="col-md-2 col-sm-3 col-xs-4"> 
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/designboom.jpg" alt="">
                </div>
                </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/ecobuilding-pulse.png" alt="">
                </div>
                </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/experimenta11.jpg" alt="">
                </div>
                </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/GISMAG.png" alt="">
                </div>
                </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/glamping.png" alt="">
                </div>
                </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/housebeautiful.png" alt="">
                </div>
                </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/index.jpg" alt="">
                </div>
                </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/inhabitat.png" alt="">
                </div>
                </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/journal-du-design1.jpg" alt="">
                </div>
                </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/llamas%20valley.jpg" alt="">
                </div>
                </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/logo_mol.gif" alt="">
                </div>
                </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/spoga%20gafa.png" alt="">
                </div>
                </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/SUBURBANMAN.png" alt="">
                </div>
                </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/tabilabo.jpg" alt="">
                </div>
                </div>
              <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="thumbnail color-pick press-icon">
                  <img src="images/press/treehugger.png" alt="">
                </div>
              </div>
            </div>
            
           
        </div>
    </section> 
    
<!--    GALERY------------------------->
    
<section class="text-center content-oasis">  
   <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <h1 class="oasis-cont content-features press-gallery">Gallery</h1>
                    
                </div>
             </div>
  </div>
  <div class="container">
   <div id="carousel-example-generic" class="carousel slide carousel-oasis" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
    <li data-target="#carousel-example-generic" data-slide-to="9"></li>
    <li data-target="#carousel-example-generic" data-slide-to="10"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/Galery/OASISGALLERY1.jpg" alt="...">
      <div class="carousel-caption">
        Feel infinity with Oasis dome
      </div>
    </div>
    <div class="item">
      <img src="images/Galery/OASISGALLERY10.jpg" alt="...">
      <div class="carousel-caption">
        Star watching
      </div>
    </div>
    <div class="item">
      <img src="images/Galery/OASISGALLERY11.jpg" alt="...">
      <div class="carousel-caption">
        Privacy and comfort inside Oasis
      </div>
    </div>
    <div class="item">
      <img src="images/Galery/OASISGALLERY12.jpg" alt="...">
      <div class="carousel-caption">
        Durable materials and features completed
      </div>
    </div>
    <div class="item">
      <img src="images/Galery/OASISGALLERY2.jpg" alt="...">
      <div class="carousel-caption">
        Marine plywood and portable arches construction
      </div>
    </div>
    <div class="item">
      <img src="images/Galery/OASISGALLERY3.jpg" alt="...">
      <div class="carousel-caption">
        Oasis is perfect for a honeymoon escape
      </div>
    </div>
    <div class="item">
      <img src="images/Galery/OASISGALLERY4.jpg" alt="...">
      <div class="carousel-caption">
        Leading living space according to activities outdoors
      </div>
    </div>
    <div class="item">
      <img src="images/Galery/OASISGALLERY5.jpg" alt="...">
      <div class="carousel-caption">
        Oasis dome construction is perfectly resistant for strong winds and seaside weather
      </div>
    </div>
    <div class="item">
      <img src="images/Galery/OASISGALLERY6.jpg" alt="...">
      <div class="carousel-caption">
        Beautiful place to Relax and regenerate your energy
      </div>
    </div>
    <div class="item">
      <img src="images/Galery/OASISGALLERY8.jpg" alt="...">
      <div class="carousel-caption">
        Your personal floating heaven
      </div>
    </div>
    <div class="item">
      <img src="images/Galery/OASISGALLERY9.jpg" alt="...">
      <div class="carousel-caption">
        Extraordinary stay in a wonderful place
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
</section>
   
    
    <section class="text-center content-oasis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <h1 class="oasis-cont ">Warranty</h1>
                   <p>
                     2 years guarantee for constructions. <br>
                     Lifetime client support.
                   </p>
                    
                </div>
            </div>
  
        </div>
    </section> 
    
    <section class="text-center content-oasis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <h1 class="oasis-cont content-features">Team</h1>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                 <div class="thumbnail color-pick">
                    <img src="images/OASIS-TEAM_.jpg" alt="">
                  </div>
                </div>
            </div>
  
        </div>
    </section> 
    
    <section id="contact" class="text-center content-oasis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <h1 class="oasis-cont content-features">How can we help you?</h1>
                  <p>Leave an inquiry below, we will get in touch with you</p>
                </div>
            </div>
            
            
            
            <form action="index.php" class="" data-toggle="validator" role="form" method="post">
               
               
                
                <div class="row">
                 <div class="col-sm-6 col-sm-offset-3">
                     <div class="form-group">
<!--                      <label for="inputEmail" class="control-label">Email</label>-->
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required name="email">
                      <div class="help-block with-errors"></div>
                    </div>
                 </div>
                 <div class="col-sm-6 col-sm-offset-3">
                  <div class="form-group">
<!--                      <label for="inputName" class="control-label">Name</label>-->
                      <input type="text" class="form-control" id="inputName" data-error="What your Name?" placeholder="Name" required name="name">
                      <div class="help-block with-errors"></div>
                    </div>
                </div>
               </div>
               
             
              
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <div class="form-group">
<!--                    <label for="inputComment" class="control-label">Address</label>-->
                    <textarea class="form-control" id="inputComment" placeholder="Comment / Question" cols="10" rows="5" name="comment" required></textarea>
                  </div>
                </div>
                
              </div>
                 
              <div id="messages" class="hide" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div id="messages_content"></div>
              </div>
                  
              <div class="form-group" align="center">
                <button type="submit" class="btn btn-outline btn-xl "   name="send" >send</button>
              </div>
            </form>

        </div>
    </section> 
    
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Succeeded!</h4>
            </div>
            <div class="modal-body">
              Thanks for contacting us, we will get back to you shortly.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
              
          </div>
        </div>
      </div>   
    </div>
    
<?php include "includes/footer.php";?>  


