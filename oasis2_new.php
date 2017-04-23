<?php include "includes/header.php";?>

 
  <header class=header-oasis>
   
    <div class="header-oasisII mySlides">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="oasis-header">
                        <div class="header-content-inner">
                            <h1>OASIS II</h1>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     
        
  </header>
  
  
  
<form class="form-group" action="shopping_card.php" method="post"> 
   
    <section class="download bg-primary text-center content-oasis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h1 class="oasis-cont">OASIS 2</h1>
                </div>
            </div>
            
            <div class="row">
              <div class="col-sm-6">
                <div class="thumbnail color-pick">
                  <img src="images/OASIS_2.png" alt="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="choose-color">
                  <h3 class="oasis-cont">Choose oasis color</h3>
                  
                      
                        <div class="color-picker">
                         <div class="row">
                          
                           <div class="col-sm-12 col-xs-6">
                           
                            <label for="col1" class="oasis-color" style="background-image: url(images/COLOR%20CONSTR%20BROWN.png);">
                              <input id="col1" type="radio" name="Color[1]" value="1"  checked >
                            
                            </label>
                            </div>
                            <div class="col-sm-12 col-xs-6">
                              <label for="col2"class="oasis-color">
                                <input id="col2" type="radio" name="Color[1]" value="2"><img src="images/COLOR%20CONSTR%20BROWN1.png" class="oasis-color"><p><span>Brown</span></p>
                              </label>
                           </div>
                           
                          </div>

                     </div>
 
                </div>
              </div>
            </div>
        </div>
    </section>
    
<!--    ADD __________________________________________-->
    
    <section class="download bg-primary text-center content-oasis">
        <div class="container">
           
            <div class="row" >
               
              <div class="col-sm-6 col-sm-offset-3">
                    <h1 class="oasis-cont">ADDS</h1>
                
                
                <div class="adds">
                  
                   <div class="checkbox">
                    <label>
                     <table for="floor" class="table table-adds">
                       <tbody>
                         <tr>
                           <td><input id="floor" type="checkbox" name="floor-heating" value="250" class="input-adds"></td>
                           <td><img src="images/icons/floor_heating.png" alt=""><p class="adds-p">Floor heating</p></td>
                           <td>250 EUR</td>
                         </tr>
                       </tbody>
                      </table>
                    </label>
                  </div>
                  
                   <div class="checkbox">
                    <label>
                     <table for="air" class="table table-adds">
                       <tbody>
                         <tr>
                           <td><input id="air" type="checkbox" name="air-conditioning" value="190" class="input-adds"></td>
                           <td><img src="images/icons/air_conditioning.png" alt=""><p class="adds-p">Air conditioning</p></td>
                           <td>190 EUR</td>
                         </tr>
                       </tbody>
                      </table>
                    </label>
                  </div>
                  
                  
                  <div class="checkbox">
                    <label>
                     <table for="baterry" class="table table-adds">
                       <tbody>
                         <tr>
                           <td><input id="baterry" type="checkbox" name="solar-batery" value="850" class="input-adds"></td>
                           <td><img src="images/icons/solar_battery.png" alt=""><p class="adds-p">Solar battery</p></td>
                           <td>850 EUR</td>
                         </tr>
                       </tbody>
                      </table>
                    </label>
                  </div>
                  
                  <div class="checkbox">
                    <label>
                     <table for="socket" class="table table-adds">
                       <tbody>
                         <tr>
                           <td><input id="socket" type="checkbox" name="electrical-socket" value="110" class="input-adds"></td>
                           <td><img src="images/icons/socket.png" alt="" class="image-socket"><p class="adds-p">Electrical socket</p></td>
                           <td>110 EUR</td>
                         </tr>
                       </tbody>
                      </table>
                    </label>
                  </div>
                  
                  <div class="checkbox">
                    <label>
                           <input id="oasis2" type="hidden" name="oasis2" value="3600" class="input-adds">
                    </label>
                  </div>
                  
                  <div class="checkbox">
                    <label for="test">
                           <input id="test" type="checkbox" name="test" value="3600" class="input-adds">
                           <span class="custom-check"></span>
                           Tekstas testas
                    </label>
                  </div>
                  
                  
                    
<!--
                     <table class="table table-adds" id="rowclick1">
                       <tbody>
                       <div class="checkbox">
                        <label for="air" style="cursor: hand;">
                         <tr style="cursor: hand;">
                           <td><input id="air" type="checkbox" name="air-conditioning" value="190" class="input-adds"></td>
                           <td class="smaller"><img src="images/icons/air_conditioning.png" alt="" class="image-so"><p class="adds-p">Air conditioning</p></td>
                           <td>190 EUR</td>
                         </tr>
                         </label>
                         </div>
                         <label for="baterry" style="cursor: hand;">
                         <tr style="cursor: hand;">
                           <td><input id="baterry" type="checkbox" name="solar-batery" value="850" class="input-adds"></td>
                           <td><img src="images/icons/solar_battery.png" alt=""><p class="adds-p">Solar battery</p></td>
                           <td>850 EUR</td>
                         </tr>
                         </label>
                         <label for="socket" style="cursor: hand;">
                         <tr style="cursor: hand;">
                           <td><input id="socket" type="checkbox" name="electrical-socket" value="110" class="input-adds"></td>
                           <td><img src="images/icons/socket.png" alt=""><p class="adds-p">Electrical socket</p></td>
                           <td>110 EUR</td>
                         </tr>
                         </label>
                       </tbody>
                      </table>
-->
                    
                  </div>


                </div>
                
              </div>
                
            </div>    
                

  </section>
    

  <section class=" text-center content-oasis">
    <div class="row">
      <div class="col-sm-12">
        <button type="submit" name="submit" class="btn btn-outline btn-xl page-scroll btn-header">Order Oasis</button>
      </div>
    </div>
  </section> 
    
</form>
  
<!--  form end-->
   
<section class="oasis2-cont text-center content-oasis">
 <div class="container">
  <row>
    <div class="col-sm-6">
      <h1 class="oasis-cont">Oasis 2 dimentions</h1>
      <p>Diameter 2.65m / 8,69 ft,  
      High 2.65m / 8,69 ft, <br>
      Floors 4.6m2 / 49,5 sq ft, 
      Storage space 1.4m3 / 15 sq ft.</p>
      <div class="thumbnail color-pick">
        <img src="images/OASIS-2-dim.png" alt="">
      </div>
    </div>
    <div class="col-sm-6">
      
      <h1 class="oasis-cont">Assembly duration</h1>
      <div class="thumbnail color-pick">
        <img src="images/ASSEMBLY-OASIS-2.png" alt="">
      </div>
    </div>
  </row>
  </div>
  
</section>
   
<section class="oasis2-cont text-center content-oasis">
 <div class="container">
  <row>
    <div class="col-sm-6">
      <h1 class="oasis-cont">Parts included</h1>
      <p>Oiled plywood floors, arches, construction parts, 
      bottom and upper canopy, doors and ventilation with anti-insect meshes, 
      mechanisms, bolts, angulars, cables, waterproof zippers, curtains. <br>
      Assamly instruktion included to the set.</p>
    </div>
    <div class="col-sm-6 col">
      <h1 class="oasis-cont">Guarantee</h1>
      <p>2 years construction. <br>
      Life time client support.</p>
    </div>
  </row>
  </div>
</section>

   
<section class="oasis2-cont text-center content-oasis">
 <div class="container">
  <row>
    <div class="col-sm-6">
      <h1 class="oasis-cont">Transportation</h1>
      <p>Worldwide. <br>
      According to customer needs we provideregulr or fast delivery.<br>
      Oasis packge fits into truck, trailer or bigger car.<br>
      All parts are packed in seperate cardboard boxes which comes in one box.</p>
    </div>
    <div class="col-sm-6">
      <h1 class="oasis-cont">OASIS 2 package</h1>
      <p>2.4m x 0.8m, h=0.54m / 94.4in x 31.4in, h=21.2in 280Kg / 617lbs</p>
       <div class="thumbnail color-pick">
        <img src="images/OASIS-2-package.png" alt="">
      </div>
    </div>
    
  </row>
  </div>
</section>
   

    
        
    
<?php include "includes/footer.php"; ?>    
    
    
    
    
    
    
    
    
    

    
    
    <footer id="contact">
        <div class="container">
            <p>&copy; OASIS</p>
            <ul class="list-inline">
                <li>
                    <a href="#">Meniu</a>
                </li>
                <li>
                    <a href="#">Meniu1</a>
                </li>
                <li>
                    <a href="#">Meniu2</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery/fadeSlideShow.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>
    
    <script>
      var myIndex = 0;
      carousel();

      function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 3000); // Change image every 2 seconds
      }
      </script>
      
      <script>
        
        $(document).ready(function() {
          $('#rowclick1 tr').click(function(event) {
            if (event.target.type !== 'checkbox') {
              $(':checkbox', this).trigger('click');
            }
          });
        });
      </script>

<!--
  <script type="text/javascript">
    $(function() {
    $('.fadein header:gt(0)').hide();

    setInterval(function () {
        $('.fadein :first-child').fadeOut()
                                 .next('header')
                                 .fadeIn()
                                 .end()
                                 .appendTo('.fadein');
    }, 4000); // 4 seconds
    });
  </script>
-->
</body>

</html>
