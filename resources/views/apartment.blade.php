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
                    <li class="menu-item menu-blog"><a href="catalog.html">Каталог</a>
                    </li>
                  </ul>
                </nav>
                <!-- .header-main-nav-->
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="slider middle">
        <div class="slides">
           <input type="radio" name="r" id="r1" checked>
           <input type="radio" name="r" id="r2">
           <div class="slide s1">
              <img src="{{ asset('assets/images/demo/product-1.jpg') }}" alt="Изображение" class="img">
           </div>
           <div class="slide">
              <img src="{{ asset('assets/images/demo/product-1-2.jpg') }}" alt="Изображение" class="img">
           </div>
        </div>
        <div class="navigation">
           <label for="r1" class="bar"></label>
           <label for="r2" class="bar"></label>
        </div>
     </div>

    <div class="apartment_discribe">
        <h>
            <p style="text-indent: 25px;">Отличная трехкомнатная квартира в современном монолитном доме, квартира расположена в корпусе В, который максимально удален от проспекта, очень тихо, функциональная планировка, квартира на 3 стороны света, 5 окон, легко переделать в 4-х комнатную квартиру, в доме двухуровневый подземный паркинг, охраняемая закрытая территория с детскими и спортивными площадками, видеонаблюдение, шлагбаум, рядом с домом отличные школы с высоким рейтингом, спорткомплекс с бассейном, битцевский лесопарк, пруды, квартира в собственности, без обременений, свободная продажа.</p>
        </h>
        <p>Цена: 9 900 000 RUB</p>
        <p>Площадь: 102 кв.м</p> 
        <p>Этаж: 3</p>  
    </div>
     
      <!-- footer -->
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