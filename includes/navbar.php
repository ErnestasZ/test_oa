<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                  <div class="nav-logo">
<!--                    <img src="images/oasis-logo2.png" class="logo" alt="OASIS dome">-->
                  </div>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#order">Order</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#features">Features</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <?php 
                      if(isset($_SESSION['cart']) && count($_SESSION['cart']) != 0){
                        ?>
                      
                    <li>
                        <a class="page-scroll" href="shopping_cart_new.php">Shopping cart <div id="count-cart"><?php 
                          $cart = unserialize(serialize($_SESSION['cart']));
                            $qty = 0;
                            for($i = 0; $i < count($cart); $i++){
                              $qty += $cart[$i]->quantity;
                            }
                            echo $qty;
                          
                          
                          ?></div></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>