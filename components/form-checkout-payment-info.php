    <!--form-checkout-payment-info -->
    <section class="container">
    
      <!--hero -->
      <div class="row remove-horizontal-spacing">
        <div class="col-md-12 remove-horizontal-padding hero-md">
          <div class="row">
            <div class="col-md-4">
              <h1 class="align-middle pad-left-5">
                Checkout
              </h1>
            </div>
            <div class="col-md-8 pad-top text-center pull-left">
              <h4 class="align-middle pad-left-5">
                <span class="pull-left nudge-up">
                  <span class="badge badge-hero">1</span>
                  Billing &amp; Shipping &nbsp;
                </span>
                <span class="pull-left nudge-up">
                  <span class="badge badge-hero-active">2</span>
                  <span class="text-danger">
                    Payment Info &nbsp;
                  </span>
                </span>
                <span class="pull-left nudge-up">
                  <span class="badge badge-hero"><span class="badge-hero-nudge-up">3</span></span>
                  Order Summary &nbsp;
                </span>
              </h4>
            </div>
          </div>
        </div>
      </div>
      <!--/hero -->

      <!-- content-->
      <div class="row remove-horizontal-spacing bg-grey">

        <!--Billing Information-->
        <div class="col-md-6 content">
          <div class="separate-column content center-block ease-top ease-bottom bg-light">
            <form role="form">
              <div class="form-group">
                <h3>Shipping Options</h3>
                <hr>
                <div class="btn-group btn-group-justified pad-bottom">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-table bg-grey dropdown-toggle" data-toggle="dropdown">
                      Choose Carrier <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-form" role="menu">
                      <li><a href="#">FedEx</a></li>
                      <li><a href="#">UPS</a></li>
                      <li><a href="#">...</a></li>
                    </ul>
                  </div>
                </div>
                <div class="btn-group btn-group-justified pad-bottom">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-table bg-grey dropdown-toggle" data-toggle="dropdown">
                      Select Shipping Option <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-form" role="menu">
                      <li><a href="#">Standard</a></li>
                      <li><a href="#">Overnight</a></li>
                      <li><a href="#">...</a></li>
                    </ul>
                  </div>
                </div>
                <div class="bg-grey text-right">
                  <table class="table ease-top ease-bottom product-table">
                    <tr>
                      <td>Subtotal:&nbsp;</td>
                      <td>$39.99</td>
                    </tr>
                    <tr>
                      <td>Shipping &amp; Handling:&nbsp;</td>
                      <td>$0.00</td>
                    </tr>
                    <tr>
                      <td>Tax:&nbsp;</td>
                      <td>$0.00</td>
                    </tr>
                    <tr>
                      <td><span class="text-danger"><strong>Total:&nbsp;</strong></span></td>
                      <td><span class="text-danger"><strong>$39.90</strong></span></td>
                    </tr>
                  </table>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!--/Billing Information-->

        <!--Shipping Information-->
        <div class="col-md-6 content">
          <div class="separate-column content center-block ease-top ease-bottom bg-light">
            <form role="form">
              <div class="form-group">
                <h3>Payment Information</h3>
                <hr>
                <div>
                  <strong>Payment Method:</strong>
                </div>
                <div class="btn-group btn-group-justified pad-bottom">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-table bg-grey dropdown-toggle" data-toggle="dropdown">
                      select <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-form" role="menu">
                      <li><a href="#">Credit Card</a></li>
                      <li><a href="#">Bitcoin!</a></li>
                      <li><a href="#">...</a></li>
                    </ul>
                  </div>
                </div>
                <div>
                  <strong>Card Type:</strong>
                </div>
                <div class="btn-group btn-group-justified pad-bottom">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-table bg-grey dropdown-toggle" data-toggle="dropdown">
                      select <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-form" role="menu">
                      <li><a href="#">Visa</a></li>
                      <li><a href="#">Mastercard</a></li>
                      <li><a href="#">...</a></li>
                    </ul>
                  </div>
                </div>
                <input type="number" class="form-control" id="InputCardNumber" placeholder="Card Number">
                <div class="pad-bottom">
                </div>
                <input type="text" class="form-control" id="InputCardName" placeholder="Name on Card">
                <div class="pad-bottom">
                </div>
                <div>
                  <strong>Expiration Date:</strong>
                </div>
                <div class="btn-group btn-group-justified ease-top ease-bottom pad-bottom" role="group" aria-label="...">
                  <div class="btn-group" role="group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default btn-table bg-grey dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Month <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-form" role="menu">
                        <li><a href="#">January</a></li>
                        <li><a href="#">February</a></li>
                        <li><a href="#">...</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="btn-group" role="group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default btn-table bg-grey dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Year <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-form" role="menu">
                        <li><a href="#">2014</a></li>
                        <li><a href="#">2015</a></li>
                        <li><a href="#">...</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="btn-group" role="group">
                    <div class="input-group pull-right">
                      <input type="text" class="form-control" id="InputCardSecurityCode" placeholder="Security #">
                      <div class="input-group-addon">
                        <a href="#">
                          <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                    Keep my payment method on file for easy checkout on future orders.
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" checked>
                    Let me know about promotions &amp; special offers via email.
                  </label>
                </div>
                <textarea class="form-control" rows="3" placeholder="Order Comments (Optional)">
                </textarea>
              </div>
            </form>
          </div>  
        </div>
        <!--/Shipping Information-->

        <!--Place Order-->
        <div class="row remove-horizontal-spacing">
          <div class="col-md-12 content text-center">
            <button type="button" class="btn btn-lg btn-danger">
              Place Order <i class="caret-right"></i>
            </button>
          </div>
        </div>
        <!--/Place Order-->
        
      </div>
      <!--/content-->
      
    </section>
    <!--/form-checkout-payment-info-->
