  
    
<!--    footer--------------------------->
    <footer id="contact">
        <div class="container">
           <h5>DOWNLOADS</h5>
            <ul class="list-inline">
                <li>
                  <a href="images/downloads/OASIS%20DOME%20PRESENTATION.pdf">Presentation </a>
                </li>
                <li>
                    <a href="#">Terms & Conditions</a>
                </li>
                <li>
                    <a href="#">Press</a>
                </li>
            </ul>
         <br>
         <br>
         <br>
          <div class="footer-contact">
           <div class="row">
             <div class="col-sm-8 highlights-footer">
             
               <div class="col-sm-4">
                <h5>ORDERS</h5>
                 <p>Lina Svarauskaite</p>
                 <p><a href="mailto:order@oasisdome.eu?Subject=Oasis%20Dome" target="_top">order@oasisdome.eu</a></p>
                 <p>00 370 693 72920</p>
                 
               </div>
                <div class="col-sm-4">
                  <h5>ORDERS</h5>
                 <p>Aiste Puzeriene</p>
                 <p><a href="mailto:order@oasisdome.eu?Subject=Oasis%20Dome" target="_top">order@oasisdome.eu</a></p>
                 <p>00 370 685 05240</p>
               </div>
               <div class="col-sm-4">
                 <h5>Co-FOUNDER</h5>
                 <p>Vytautas Puzeras</p>
                 <p><a href="mailto:info@puzero.eu?Subject=Oasis%20Dome" target="_top">info@puzero.eu</a></p>
                 <p>00 370 686 09009</p>
                 <p><a href="http://puzero.eu">www.puzero.eu</a></p>
               </div>
             </div>
             <div class="col-sm-4 highlights-footer">
              <div class="footer-adress">
               <h5>Company: Puzero, UAB</h5>
               <p>Code: 303447415</p>
               <p>Adress: Elniu str. 27-62, Vilnius, 08101</p>
               <p>IBAN: LT17 7044 0600 0799 2398</p>
               <p>Bank: SEB 70440</p>
             </div>
             </div>
           </div>
         </div>
           
           
            <h6>&copy; OASIS</h6>
            
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
    
<!--    - Form Contact JavaScript --->
    <script src="contact_form/form_js.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
    
<!--    1000 bootsrap validator-->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
   
   <!-- Bootstrap form helper -->
   <script src="bootstrap_form_helper/dist/js/bootstrap-formhelpers.min.js"></script>
    
    
    <script>
      var myIndex = 0;
      

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
      
      carousel();
      </script>
      
      <script>
        $('#country option[value='']').text('Select Country');
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
