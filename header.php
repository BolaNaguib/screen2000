<!DOCTYPE html>
<html>

<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <div id="loading"></div>

  <!-- HEADER -->
  <div class="header">

  <div class="uk-container">

  <!-- START uk-sticky -->
  <div   class="nav">

    <!-- START .navbar -->
    <nav class="navbar mainbar" uk-navbar>

      <!-- START .uk-navbar-left -->
      <div class="uk-navbar-left">
        <a href="index.php">
          <img width="100px" src="img/logo.png" alt="Screen2000">
        </a>
      </div> <!-- END .uk-navbar-left -->

      <!-- START .uk-navbar-right -->
      <div class="uk-navbar-right">
        <!-- START .uk-navbar-nav -->
        <ul class="uk-navbar-nav navbar_main_bg" style="    margin-top: 30px !important;">
          <li class="  uk-visible@s">
            <a class="navbar_main_link  uk-button-text" href="index.php"> Home </a>
          </li>
          <li class="  uk-visible@s">
            <a class="navbar_main_link  uk-button-text" href="company.php"> Company </a>
          </li>
          <li class="  uk-visible@s">
            <a class="navbar_main_link  uk-button-text" href="production.php"> Production </a>
          </li>
    






          <li><a href="#offcanvas-slide" class="uk-hidden@s nav__toggle_color_white" uk-toggle>
              <span class="" uk-navbar-toggle-icon>

              </span>
            </a>
          </li>

        </ul><!-- END .uk-navbar-nav -->
      </div><!-- END .uk-navbar-right -->
    </nav><!-- END .navbar -->
  </div><!-- END uk-sticky -->


  <!-- Start uk-offcanvas Mobile Nav  -->
  <div id="offcanvas-slide" uk-offcanvas>

    <!-- START .uk-offcanvas-bar -->
    <div class="uk-offcanvas-bar">

      <ul class="uk-nav uk-nav-default">
        <li class="active ">
          <a href="#" title="link_title">
            <span class="nav_animation nav__link">Home</span>
          </a>
        </li>


      </ul>

    </div> <!-- END .uk-offcanvas-->
  </div><!-- END uk-offcanvas Mobile Nav  -->

  <hr class="green_hr">
</div>
</div>

  <!-- END HEADER -->
