<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>DispatchRider 
      <?php //echo ($activePage === 'index') ? 'Home': 
            //echo ($activePage === 'about') ? 'About' : 
            //echo ($activePage === 'services') ? 'Services': 
            //echo ($activePage === 'riders') ? 'Riders':'' 
        ?>
    </title>
    <meta
      name="description"
      content="Access a network of reliable dispatch riders or grow your delivery business with us"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.php" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/favicon.ico"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;600;700;800&family=Saira+Extra+Condensed:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/font.css" />
    <link rel="stylesheet" href="assets/css/metisMenu.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/spacing.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>

  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Content here -->
    <!-- preloader -->
    <div id="preloader">
      <div class="preloader">
        <span></span>
        <span></span>
      </div>
    </div>
    <!-- preloader end  -->
    <!-- header-area start -->
    <header>
      <div id="hideshow-sticky-menu">
        <div
          id="theme-menu-three"
          class="main-header-area menu-style-3 pt-20 pb-10"
        >
          <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
              <div class="col-xl-3 col-lg-2 col-6">
                <div
                  class="logo-area d-flex align-items-center justify-content-between"
                >
                  <div class="logo-img">
                    <a href="index.php"
                      ><img
                        class="img-fluid"
                        src="assets/img/logo/logo.svg"
                        alt=""
                    /></a>
                  </div>
                </div>
              </div>
              <div
                class="col-xl-6 col-lg-7 text-start d-none d-lg-inline-block"
              >
                <nav id="topheader" class="navbar navbar-expand-lg">
                  <div class="nav-container">
                    <div
                      class="collapse navbar-collapse"
                      id="navbarSupportedContent"
                    >
                      <ul class="navbar-nav list-style-none">
                        <li class="nav-item <?php echo ($activePage === 'index') ? 'active' : '' ?>">
                          <a
                            class="nav-link"
                            href="index.php"
                            id="navbarDropdown1"
                            role="button"
                            aria-expanded="false"
                            >Home</a
                          >
                        </li>
                        <li class="nav-item <?php echo ($activePage === 'about') ? 'active': '' ?>">
                          <a
                            class="nav-link"
                            href="about.php"
                            id="navbarDropdown2"
                            role="button"
                            aria-expanded="false"
                            >About Us</a
                          >
                        </li>
                        <li class="nav-item <?php echo ($activePage === 'services') ? 'active': '' ?>">
                          <a
                            class="nav-link"
                            href="services.php"
                            id="navbarDropdown3"
                            role="button"
                            aria-expanded="false"
                            >Services</a
                          >
                        </li>
                        <li class="nav-item <?php echo ($activePage === 'riders') ? 'active': '' ?>">
                          <a
                            class="nav-link"
                            href="riders.php"
                            id="navbarDropdown4"
                            role="button"
                            aria-expanded="false"
                            >Riders</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
              </div>
              <div class="col-xl-3 col-lg-3 col-6">
                <div
                  class="right-nav d-flex align-items-center justify-content-end"
                >
                  <ul
                    class="list-style-none right-btn d-flex align-items-center"
                  >
                    <li>
                      <a
                        class="theme_btn theme_btn_border style-2b d-none d-lg-inline-block"
                        href="register.php"
                      >
                        Create rider account
                      </a>
                    </li>
                     <li>
                      <a
                        class="theme_btn theme_btn_border text-white black-btn cta-btn d-none d-lg-inline-block"
                        href="login.php"
                      >
                        Log in
                      </a>
                    </li>
                  </ul>
                  <div
                    class="hamburger-menu d-md-inline-block d-lg-none text-right ml-15"
                  >
                    <a href="javascript:void(0);">
                      <i class="far fa-bars"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.theme-main-menu -->
      </div>
    </header>
    <!-- header-area end -->

    <!-- slide-bar start -->
    <aside class="slide-bar">
      <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
      </div>

      <!-- side-mobile-menu start -->
      <nav class="side-mobile-menu">
        <ul id="mobile-menu-active">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li><a href="about.php">About</a></li>
          <li>
            <a href="services.php">Services</a>
          </li>
          <li>
            <a href="riders.php">Riders</a>
          </li>
          <li><a href="register.php">Create rider account</a></li>
          <li><a href="login.php">Log in</a></li>
        </ul>
      </nav>
      <!-- side-mobile-menu end -->
    </aside>
    <div class="body-overlay"></div>
    <!-- slide-bar end -->