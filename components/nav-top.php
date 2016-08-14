    <!--START nav-top: [thanks-mama-phone# / shipping-details / sign-in & cart buttons]-->
    <section class="label-warning">
      <div class="container">
        <div class="row nav-top">

          <!--START thanks-mama-phone#-->
          <div class="col-md-3 text-center">
              <span class="small align-middle">Mama&#39;s Special Touch:
              <strong class="text-danger"> 1-877-979-6262</strong></span>
          </div>
          <!--/thanks-mama-phone#-->

          <!--START shipping-details-->
          <div class="col-md-5 text-center">
              <img class="pad-right align-middle hidden-xs" src="img/van.gif"  alt="shipping icon">
              <span class="align-middle">FREE SHIPPING ON ORDERS OVER $300</span>
          </div>
          <!--/shipping-details-->

          <!--START sign-in & cart buttons-->
          <div class="col-md-2 text-right">
            <a href="login-register.php" class="btn btn-nav-top btn-warning btn-sign-in btn-group-justified">
              <span class="small align-middle">
                <span class="glyphicon glyphicon-user pad-right" aria-hidden="true"></span>
                Sign In
              </span>
            </a>
          </div>
          <div class="col-md-2 text-right">
            <!-- currently, the popover will not show if the cursor is on top of any text inside the button.-->
            <a href="#" id="cart-popover" class="btn btn-nav-top btn-danger btn-group-justified">
              <span class="small align-middle">
                <span class="glyphicon glyphicon-shopping-cart pad-right" aria-hidden="true"></span>
                My Cart
                <span class="circle-icon pad-left">
                  <span id="item-quantity">
                    10
                  </span>
                </span>
              </span>
            </a>
          </div>
          <!--/sign-in & cart buttons-->

        </div>
      </div>

<?php include('components/popover-cart.php'); ?>

    </section>
    <!--/nav-top: [thanks-mama-phone# / shipping-details / sign-in & cart buttons]-->
