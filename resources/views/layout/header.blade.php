<header class="header yolo-header-style-1">
    <!-- лого и войти -->
    <div class="yolo-header-top yolo-header-top-style-1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-logo">
                        <h1><a href="/"><img src="{{ asset('assets/images/logo/logo.png') }}"
                                    alt="logo" /></a></h1>
                    </div>
                </div>
                <div class="col-md-8">
                    @guest("web")
                    <div class="header-customize header-customize-right">
                        <a href="/login">
                            <div class="custom-text-wrapper header-customize-item"><i
                                    class='fa fa-check-square'></i></i>Войти</div>
                    </div>
                    @endguest
                    
                    @auth
                    <div class="header-customize header-customize-right">
                        <a href="/logout">
                            <div class="custom-text-wrapper header-customize-item"><i
                                    class='fa fa-check-square'></i></i>Выйти</div>
                    </div>
                    @endauth
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
                    <nav class="main-nav">
                        <ul class="nav">
                            <li class="active menu-item menu-home"><a href="/">Главная</a>
                            </li>
                            <li class="menu-item menu-blog"><a href="/catalog">Каталог</a>
                            </li>
                            @auth
                            <li class="menu-item menu-blog"><a href="/banks">Список банков</a>
                            </li>
                            <li class="menu-item menu-blog"><a href="/admin_section">Редактор товаров</a>
                            </li>
                            <li class="menu-item menu-blog"><a href="/orders">Актуальные заказы</a>
                            </li>
                            <li class="menu-item menu-blog"><a href="/users">Список сотрудников</a>
                            </li>
                            @endauth
                        </ul>
                    </nav>
                    <!-- .header-main-nav-->
                </div>
            </div>
        </div>
    </div>

    <div align="center">

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif

    </div>


</header>
