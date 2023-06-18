<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="UTF-8">
    <title>Главная</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/images/icon/favicon.png') }}" type="image/x-icon">

    <!-- Web Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Pacifico%7CSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;amp;subset=latin-ext,vietnamese" rel="stylesheet">

    <!-- Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/animate/animated.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/owl.carousel.min/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/direction/css/noJS.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/prettyphoto-master/css/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/slick-sider/slick.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/countdown-timer/css/demo.css') }}">

    <!-- Template CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home.css') }}">


  </head>

  <body class="home main-home">

      <header class="header yolo-header-style-1">
        <!-- самый верх шапки -->
        <div class="yolo-top-bar">
          <div class="container">
            <div class="row">
              <div class="top-sidebar top-bar-left col-md-4">
                <aside id="text-11" class="widget widget_text">
                  <div class="textwidget">
                    <div>Добро пожаловать на купидом.ру!</div>
                  </div>
                </aside>
              </div>
              <div class="top-sidebar top-bar-right col-md-8">
                <aside id="text-6" class="widget widget_text">
                  <div class="textwidget"><i class="fa fa-home"></i> ул. Пушкина д.59, Москва <i style="margin-left: 15px" class="fa fa-phone"></i> 8800-777-55-55</div>
                </aside>
              </div>
            </div>
          </div>
        </div>
        <!-- лого и войти -->
        <div class="yolo-header-top yolo-header-top-style-1">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="header-logo">
                  <h1><a href="/"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"/></a></h1>
                </div>
              </div>
              <div class="col-md-8">
                <div class="header-customize header-customize-right">
                  <a href="/login.php">
                  <div class="custom-text-wrapper header-customize-item"><i class='fa fa-check-square'></i></i>Войти</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- меню -->
        <div class="header-bottom">
          <div class="container">
            <div class="main-nav-wrapper">
              <div class="header-left">
                <nav  class="main-nav">
                  <ul class="nav">
                    <li class="active menu-item menu-home"><a href="/">Главная</a>
                    </li>
                    <li class="menu-item menu-blog"><a href="/">Каталог</a>
                    </li>
                  </ul>
                </nav>
                <!-- .header-main-nav-->
              </div>
            </div>
          </div>
        </div>
      </header>

      <div id="example-wrapper">
        <div class="div-box">
          <div class="slider-home slider-home-1">
            <div data-number="1" data-margin="0" data-loop="yes" data-navcontrol="yes" class="begreen-owl-carousel">
              <div class="slider-1">
                <div class="slider-content slider-1-content">
                  <h2>Купи</h2>
                  <h6>дом</h6>
                  <p><a href="/apartment" class="btn btn-1">Открыть каталог</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="div-box mt mb">
          <div class="home-1-banner shortcode-single-product-wrap">
            <div class="container">
              <div class="home-1-banner-content">
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="product-item-wrap product-style_1">
                      <div class="product-item-inner">
                        <div class="product-thumb">
                          <div class="product-flash-wrap"><span class="on-new product-flash">New</span></div>
                          <div class="product-thumb-primary"><img src="{{ asset('assets/images/demo/product-1.jpg') }}" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="/apartment" class="product-link">
                            <div class="nxt_b"></div>
                            <div class="product-hover-sign">
                              <hr/>
                              <hr/>
                            </div></a>
                          <div class="product-info">
                            <span class="price">15 000 000.00<span class="fa fa-rub"></span></span></span><a href="apartment.html">
                              <h3>51,19 м²</h3>
                              <h3>3/13 эт.</h3>
                            </a>
                          </div>
                          <div class="product-actions">
                            <a href="/apartment" class="product-quick-view"><i class="fa fa-search"></i>Смотреть</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="product-item-wrap product-style_1">
                      <div class="product-item-inner">
                        <div class="product-thumb">
                          <div class="product-flash-wrap"><span class="on-new product-flash">New</span></div>
                          <div class="product-thumb-primary"><img src="{{ asset('assets/images/demo/product-2.jpg') }}" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="/apartment" class="product-link">
                            <div class="product-hover-sign">
                              <hr/>
                              <hr/>
                            </div></a>
                          <div class="product-info">
                            <span class="price">11 500 000.00<span class="fa fa-rub"></span></span></span><a href="apartment.html">
                              <h3>63,78 м²</h3>
                              <h3>6/17 эт.</h3>
                            </a>
                          </div>
                          <div class="product-actions">
                            <a href="/apartment" class="product-quick-view"><i class="fa fa-search"></i>Смотреть</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="product-item-wrap product-style_1">
                      <div class="product-item-inner">
                        <div class="product-thumb">
                          <div class="product-flash-wrap"><span class="on-new product-flash">New</span></div>
                          <div class="product-thumb-primary"><img src="{{ asset('assets/images/demo/product-3.jpg') }}" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="/apartment" class="product-link">
                            <div class="product-hover-sign">
                              <hr/>
                              <hr/>
                            </div></a>
                          <div class="product-info">
                            <span class="price">7 900 000.00<span class="fa fa-rub"></span></span></span><a href="/apartment">
                              <h3>102 м²</h3>
                              <h3>2/4 эт.</h3>
                            </a>
                          </div>
                          <div class="product-actions">
                            <a href="/apartment" class="product-quick-view"><i class="fa fa-search"></i>Смотреть</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="div-box">
          <footer id="yolo-footer-wrapper">
            <div class="yolo-footer-wrapper footer-1">
              <div class="footer-top">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <div class="footer-col footer-1-col-2">
                        <h3>Наш офис</h3>
                        <div class="icon-info">
                          <p><strong>Наш адрес</strong><br/>ул. Пушкина 59, Москва</p><i class="fa fa-map-marker"></i>
                        </div>
                        <div class="icon-info">
                          <p><strong>Позвонить нам<br/>8-800-777-55-55</p><i class="fa fa-phone"></i>
                        </div>
                        <div class="icon-info">
                          <p><strong>Пишите!</strong><br/>kupi@dom.com</p><i class="fa fa-envelope"></i>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="footer-bottom">
                <div class="container">
                  <p class="copyright">ARKADII © KRIVTSOV 2023 COPYRIGHT</p>
                </div>
              </div>
            </div>
          </footer>
        </div>

      </div>
    </div>

  </body>
</html>