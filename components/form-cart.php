    <!--form-cart -->
    <section class="container">

      <!-- row hero -->
      <div class="row remove-horizontal-spacing">
        <div class="col-md-12 remove-horizontal-padding">
          <div class="hero-md-flex">
            <div class="flex-child">
              <h1 class="remove-vertical-spacing">
                Shopping Cart
              </h1>
            </div>
            <div class="flex-child">
              <button type="button" class="btn btn-danger btn-lg">Checkout <i class="caret-right"></i><i class="caret-right"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!--/ hero -->

      <!--shipping-notice-->
      <div class="row remove-horizontal-spacing bg-grey">
        <div class="col-md-12 remove-horizontal-padding">
          <div class="content-form">
            <div class="shipping-notice-affirmative text-center">
              <span class="pull-left fa-h2">
                <i class="fa fa-check-circle"></i>
              </span>
              <strong>Congratulations!  Your order qualifies for Free Shipping!</strong>
            </div>
            <!-- delete below <div class="pad-down">&nbsp;</div> in production -->
            <div class="pad-down">&nbsp;</div>
            <div class="shipping-notice-negative text-center">
              <span class="pull-left fa-h2">
                <i class="fa fa-warning"></i>
              </span>
              <strong>Almost there!  Add just $99 more to your order to qualify for Free Shipping!</strong>
            </div>
          </div>
        </div>
      </div>
      <!--/shipping-notice-->

      <!--cart-contents-->
      <div class="row remove-horizontal-spacing bg-grey">
        <div class="col-md-12 remove-horizontal-padding">
          <div class="remove-vertical-spacing content-form">
            <div class="bg-light ease-top ease-bottom table-responsive">
            <table class="table table-striped product-table-cart-contents">
              <thead>
                <tr>
                  <th class="text-center">REMOVE</th>
                  <th>PRODUCT NAME</th>
                  <th>UNIT PRICE</th>
                  <th>QUANTITY</th>
                  <th>SUBTOTAL</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><button type="button" class="btn btn-lg btn-remove"><i class="fa fa-times-circle"></i></button></td>
                  <td>
                    <div class="product-table-item-thumbnail">
                      <img src="img/diaper-thumb-1.png" alt="diaper-thumbnail">
                    </div>
                    &nbsp;Bumkins All-in-One One Size Diaper</td>
                  <td>$11.99</td>
                  <td>
                    <form class="form-horizontal">
                      <div class="form-group">
                        <div class="col-sm-4 pad-top">
                          <input type="number" class="form-control" id="inputQuantity1" placeholder="1">
                        </div>
                      </div>
                    </form>
                  </td>
                  <td>$23.98</td>
                </tr>
                <tr  class="bg-baby-girl">
                  <td><button type="button" class="btn btn-lg btn-remove"><i class="fa fa-times-circle"></i></button></td>
                  <td>
                    <div class="product-table-item-thumbnail">
                      <img src="img/diaper-thumb-2.png" alt="diaper-thumbnail">
                    </div>
                    &nbsp;Bumkins All-in-One One Size Diaper</td>
                  <td>$11.99</td>
                  <td>
                    <form class="form-horizontal">
                      <div class="form-group">
                        <div class="col-sm-4 pad-top">
                          <input type="number" class="form-control" id="inputQuantity2" placeholder="1">
                        </div>
                      </div>
                    </form>
                  </td>
                  <td>$23.98</td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-lg btn-remove"><i class="fa fa-times-circle"></i></button></td>
                  <td>
                    <div class="product-table-item-thumbnail">
                      <img src="img/diaper-thumb-3.png" alt="diaper-thumbnail">
                    </div>
                    &nbsp;Bumkins All-in-One One Size Diaper</td>
                  <td>$11.99</td>
                  <td>
                    <form class="form-horizontal">
                      <div class="form-group">
                        <div class="col-sm-4 pad-top">
                          <input type="number" class="form-control" id="inputQuantity3" placeholder="1">
                        </div>
                      </div>
                    </form>
                  </td>
                  <td>$23.98</td>
                </tr>
              </tbody>
            </table>
              <div class="row remove-horizontal-spacing">
                <div class="col-sm-12 remove-horizontal-padding">
                  <div class="flex-container-form">
                    <div class=" flex-child-form">
                      <button type="button" class="btn btn-default btn-table bg-grey btn-block">Clear Shopping Cart</button>
                    </div>
                    <div class=" flex-child-form">
                      <button type="button" class="btn btn-default btn-table bg-grey btn-block">Update Shopping Cart</button>
                    </div>
                    <div class=" flex-child-form">
                      <button type="button" class="btn btn-default btn-table bg-grey btn-block">Continue Shopping</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/cart-contents-->

      <!--cart-tryptic-->
      <div class="row remove-horizontal-spacing bg-grey">
        <div class="col-md-12 content-form">
          <div class="row">
            <div class="col-md-4 pad-bottom">
              <div class="cart-tryptic">
                COUPON CODE:
                <form class="form-horizontal">
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" class="form-control" id="inputCoupon" placeholder="Enter Coupon Code">
                    </div>
                  </div>
                </form>
                <div class="text-right">
                  <button type="button" class="btn btn-primary">Apply</button>
                </div>
              </div>
            </div>
            <div class="col-md-4 pad-bottom">
              <div class="cart-tryptic">
                ESTIMATE SHIPPING &AMP; TAX
                <div class="btn-group btn-group-justified pad-bottom" role="group" aria-label="...">
                  <div class="btn-group" role="group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default btn-table bg-grey dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Country <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-form" role="menu">
                        <li><a href="#">United States</a></li>
                        <li><a href="#">Afghanistan</a></li>
                        <li><a href="#">Albania</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="btn-group btn-group-justified pad-bottom" role="group" aria-label="...">
                  <div class="btn-group" role="group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default btn-table bg-grey dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        State <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-form" role="menu">
                        <li><a href="#">Alabama</a></li>
                        <li><a href="#">Alaska</a></li>
                        <li><a href="#">Arkansas</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="text-right">
                  <button type="button" class="btn btn-primary">Get Quote</button>
                </div>
              </div>
            </div>
            <div class="col-md-4 pad-bottom">
              <div class="cart-tryptic text-right">
                <div>Subtotal $99.95</div>
                <h4>Grand Total $99.95</h4>
                <div class="">
                  <button type="button" class="btn btn-lg btn-danger btn-block">Checkout <i class="caret-right"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/cart-tryptic-->

    </section>
    <!--/form-cart-->
