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
                <div class="thumbnail">
                  <img src="images/OASIS2-SENDREQUEST.jpg" alt="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="choose-color">
                  <h3 class="oasis-cont">Choose oasis color</h3>
  
                    <div class="color-picker">
                     <div class="row">

                       <div class="col-sm-12 col-xs-6">
<!-------------Radio--------------------------------------->
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
                  
<!--            Checkbox--------------------------------------------------------       -->
                  
                  <div class="checkbox">
                    
                     <table class="table table-adds" id="rowclick1">
                       <tbody>
                        <label for="air" style="cursor: hand;">
                         <tr style="cursor: hand;">
                           <td><input id="air" type="checkbox" name="air-conditioning" value="190" class="input-adds"></td>
                           <td class="smaller"><img src="images/icons/air_conditioning.png" alt=""><p class="adds-p">Air conditioning</p></td>
                           <td>190 EUR</td>
                         </tr>
                         </label>
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
                    
                  </div>
<!--      ----JS---leidzia paspausti ant visos <tr> -------------------            -->
                  
      <script>
        
        $(document).ready(function() {
          $('#rowclick1 tr').click(function(event) {
            if (event.target.type !== 'checkbox') {
              $(':checkbox', this).trigger('click');
            }
          });
        });
      </script>
                  