    <!--START nav-main: [logo / menu-main]-->
    <section class="container">
      <div class="row">
        <nav class="navbar navbar-menu-main navbar-default remove-vertical-spacing" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle label-success collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse text-center">
            <ul class="nav navbar-nav navbar-right">
              <li>
                <!-- <a href="baby-child.php" type="button" class="pop-baby-child" role="button" data-toggle="popover"> -->
                <a href="baby-child.php" class="pop-baby-child" role="button" data-toggle="popover">
                  <img class="center-block img-responsive" src="img/menu-baby.png" alt="menu-baby">
                  baby &amp; child
                </a>
              </li>
              <li><a href="mom-home.php"><img class="center-block img-responsive" src="img/menu-mom.png" alt="menu-mom">mom &amp; home</a></li>
              <li><a href="toys-learning.php"><img class="center-block img-responsive" src="img/menu-toy.png" alt="menu-toy">toys &amp; learning</a></li>
              <li><a href="bundles-deals.php"><img class="center-block img-responsive" src="img/menu-bundle.png" alt="menu-bundle">bundles &amp; deals</a></li>
              <li><a href="cloth-diapers.php"><img class="center-block img-responsive" src="img/menu-diaper.png" alt="menu-diaper">cloth diapers</a></li>
              <li><a href="only-organic.php"><img class="center-block img-responsive" src="img/menu-organic.png" alt="menu-organic">only organic</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </nav>
      </div>

<?php include('components/popover-baby-child.php'); ?>

    </section>
    <!--/nav-main: [Logo / menu-main]-->
