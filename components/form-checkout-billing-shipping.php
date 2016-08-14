    <!--form-checkout-billing-shipping-->
    <section class="container">

      <!--row all-->
      <div class="row remove-horizontal-spacing">

        <!--row hero-->
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
                  <span class="badge badge-hero-active">1</span>
                  <span class="text-danger">
                    Billing &amp; Shipping &nbsp;
                  </span>
                </span>
                <span class="pull-left nudge-up">
                  <span class="badge badge-hero">2</span>
                  Payment Info &nbsp;
                </span>
                <span class="pull-left nudge-up">
                  <span class="badge badge-hero"><span class="badge-hero-nudge-up">3</span></span>
                  Order Summary &nbsp;
                </span>
              </h4>
            </div>
          </div>
        </div>
        <!--/hero-->

        <!--row content-->
        <div class="row remove-horizontal-spacing bg-grey pull-left">
          <div class="col-md-12">
            <div class="row">

              <!--billing information-->
              <div class="col-md-6 content">
                <div class="separate-column content center-block ease-top ease-bottom bg-light">
                  <form role="form">
                    <div class="form-group">
                      <h3>Billing Information</h3>
                      <hr>
                      <div>
                        <strong>My Saved Billing Addresses:</strong>
                      </div>
                      <div class="btn-group btn-group-justified" role="group">
                        <div class="btn-group" role="group">
                          <button type="button" class="btn btn-default btn-table bg-grey dropdown-toggle" data-toggle="dropdown">
                            select  <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-form" role="menu">
                            <li><a href="#">address1</a></li>
                            <li><a href="#">address2</a></li>
                            <li><a href="#">address3</a></li>
                          </ul>
                        </div>
                      </div>
                      <hr>
                      <input type="text" class="form-control" id="InputFirstNameBilling" placeholder="First Name">
                      <div class="pad-bottom"></div>
                      <input type="text" class="form-control" id="InputLastNameBilling" placeholder="Last Name">
                      <div class="pad-bottom"></div>
                      <input type="text" class="form-control" id="InputAddressBilling" placeholder="Address">
                      <div class="pad-bottom"></div>
                      <input type="text" class="form-control" id="InputSuiteNumberBilling" placeholder="Building / Apt/ Suite #">
                      <div class="pad-bottom"></div>
                      <div class="btn-group btn-group-justified ease-top ease-bottom pad-bottom" role="group" aria-label="...">
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
                      <div class="btn-group btn-group-justified ease-top ease-bottom pad-bottom" role="group" aria-label="...">
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
                      <input type="text" class="form-control" id="InputZipBilling" placeholder="Zip Code">
                      <div class="pad-bottom"></div>
                      <input type="text" class="form-control" id="InputPhoneNumberBilling" placeholder="Phone Number">
                      <div class="pad-bottom"></div>
                    </div>
                  </form>
                  <div class="text-right">
                    <button type="button" class="btn btn-md btn-danger">
                      Copy Billing To Shipping <i class="caret-right"></i><i class="caret-right"></i><i class="caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
              <!--/billing information-->

              <!--shipping information-->
              <div class="col-md-6 content">
                <div class="separate-column content center-block ease-top ease-bottom bg-light">
                  <form role="form">
                    <div class="form-group">
                      <h3>Shipping Information</h3>
                      <hr>
                      <div>
                        <strong>My Saved Shipping Addresses:</strong>
                      </div>
                      <div class="btn-group btn-group-justified" role="group">
                        <div class="btn-group" role="group">
                          <button type="button" class="btn btn-default btn-table bg-grey dropdown-toggle" data-toggle="dropdown">
                            select  <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-form" role="menu">
                            <li><a href="#">address1</a></li>
                            <li><a href="#">address2</a></li>
                            <li><a href="#">address3</a></li>
                          </ul>
                        </div>
                      </div>
                      <hr>
                      <input type="text" class="form-control" id="InputFirstNameShipping" placeholder="First Name">
                      <div class="pad-bottom"></div>
                      <input type="text" class="form-control" id="InputLastNameShipping" placeholder="Last Name">
                      <div class="pad-bottom"></div>
                      <input type="text" class="form-control" id="InputAddressShipping" placeholder="Address">
                      <div class="pad-bottom"></div>
                      <input type="text" class="form-control" id="InputSuiteNumberShipping" placeholder="Building / Apt/ Suite #">
                      <div class="pad-bottom"></div>
                      <div class="btn-group btn-group-justified ease-top ease-bottom pad-bottom" role="group" aria-label="...">
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
                      <div class="btn-group btn-group-justified ease-top ease-bottom pad-bottom" role="group" aria-label="...">
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
                      <input type="text" class="form-control" id="InputZipShipping" placeholder="Zip Code">
                      <div class="pad-bottom"></div>
                      <input type="text" class="form-control" id="InputPhoneNumberShipping" placeholder="Phone Number">
                      <div class="pad-bottom"></div>
                    </div>
                  </form>
                  <div class="text-right">
                    <button type="button" class="btn btn-md btn-danger">
                      CONTINUE <i class="caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
              <!--/shipping information-->
            </div>
          </div>
        </div>
      <!--/row all of content-->
      </div>
    </section>
    <!--/form-checkout-billing-shipping-->
