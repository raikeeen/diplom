<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mystery shopper</title>
    <!--<link href="{{asset('css/slider.css')}}" rel="stylesheet">-->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
    <link href="{{asset('css/header.css')}}" rel="stylesheet">
    <link href="{{asset('css/socialIcons.css')}}" rel="stylesheet">


</head>
<body>

<!--
    <header id="header" class="sticky_header" style="background-color: #1C2331;">
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <nav class="navbar navbar-light navbar-fixed-top">
                        <span class="col-lg-3 nav-item dropdown">
                            <a class="nav-link dropdown-toggle navbar-brand text-white" href="http://example.com" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Тайным покупателям</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown02">
                                <a class="dropdown-item" href="#">Кто такие тайные покупатели</a>
                                <a class="dropdown-item" href="#">Как стать тайным покупателем</a>
                            </div>
                                    <!-- <span class="col-lg-3 nav-item dropdown"><a class="navbar-brand" href=""><h4>Тайным покупателям </h4></a></span>-->
<!--
                        </span>
                        <span class="col-lg-1"><a class="navbar-brand text-white" href="">Новости </a></span>
                        <span class="col-lg-4"><a class="navbar-brand text-white" href="">Услуги <span class="sr-only">(current)</span></a></span>
                        <div class="flex-right full-height">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <span class="col-lg-2">
                                            <a class="nav-link dropdown-toggle navbar-brand text-white" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                Name
                                                <img src="{{asset('/images/github.png')}}" height="50px" width="50px">
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdown02">
                                                <a class="dropdown-item" href="{{ url('/home') }}">Профиль</a>
                                                <hr>
                                                <a class="dropdown-item" href="#">Редактировать</a>
                                                <a class="dropdown-item" href="#">Настройки</a>
                                                <a class="dropdown-item" href="#">Помощь</a>
                                                <hr>
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Выйти') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>

                                            </div>
                                        </span>
                                    @else
                                        <span class="col-lg-2"><a class="navbar-brand text-white" href="{{ route('login') }}">Войти</a></span>
                                        <span class="col-lg-2"><a class="navbar-brand text-white btn btn-outline-primary" href="{{ route('register') }}">Зарегистрироваться</a></span>
                                    @endauth

                                    @endif
                                </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"  style="margin-bottom:100px;">
        <div class="container span12">
            <a class="navbar-brand" href="#">Тайным покупателям</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/news') }}">Новости <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Услуги</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>-->
                </ul>
                <!--<form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>-->
                <div class="flex-right full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <span class="col-lg-2">
                                            <a class="nav-link dropdown-toggle navbar-brand text-white" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                Name
                                                <img src="{{asset('/images/github.png')}}" height="50px" width="50px">
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdown02">
                                                <a class="dropdown-item" href="{{ url('/home') }}">Профиль</a>
                                                <hr>
                                                <a class="dropdown-item" href="#">Редактировать</a>
                                                <a class="dropdown-item" href="#">Настройки</a>
                                                <a class="dropdown-item" href="#">Помощь</a>
                                                <hr>
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Выйти') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>

                                            </div>
                                        </span>
                            @else
                                <span class="col-lg-2"><a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('login') }}">Войти</a></span>
                                <span class="col-lg-2"><a class="navbar-brand text-white btn btn-outline-primary" href="{{ route('register') }}">Зарегистрироваться</a></span>
                            @endauth

                            @endif
                        </div>
                </div>
            </div>
        </div>
    </nav>
    @if (Route::has('login'))
        @auth
        <header id="header" class="sticky_header" style="background-color: #6351ce; margin-top: 70px;">
         <div class="container">
             <span class="col-lg-1"><a class="navbar-brand text-white" href="{{ route('tasks') }}">Заказы </a></span>
             <span class="col-lg-1"><a class="navbar-brand text-white" href="">Выполненные </a></span>
             <span class="col-lg-1"><a class="navbar-brand text-white" href="">Отклоненные  </a></span>
         </div></header>


<!-- TEST
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
            <img src="{{asset('/images/github.png')}}" height="50px" width="50px">
            <span class="caret"></span>
        </a>



<main role="main">
    <div class="container">
=======
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url('/home') }}">Профиль</a>
            <hr>
            <a class="dropdown-item" href="#">Редактировать</a>
            <a class="dropdown-item" href="#">Настройки</a>
            <a class="dropdown-item" href="#">Помощь</a>
            <hr>

            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Выйти') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </div>
    </li>
    </ul>-->
        @endauth
    @endif

    <!--<main role="main">
    <div class="container">-->
    <div style="background-color: #EEEEEE">
    @yield('title')
        @yield('content')

 <!--   </div>
</main>-->
  <!--  <div id="footer">
        <div class="container">
            <p class="text-muted">© 2019 Skrobov Interactive Entertainment LLC.</p>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
-->
    </div>
    <footer class="page-footer font-small unique-color-dark">
        <!-- Footer Links -->
        <div style="background-color: #1C2331;">
            <div style="background-color: #6351ce;">
                <div class="container">

                    <!-- Grid row-->
                    <div class="row py-4 d-flex align-items-center">

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h6 class="mb-0 text-white">Присоединяйесь к нам в социальных сетях!</h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-7 text-center text-md-right">

                            <a href="https://github.com/raikeeen/diplom">
                                <img src="{{asset('/images/github.png')}}" height="33px" width="31px">
                            </a>
                            <a href="https://twitter.com">
                                <img src="{{asset('/images/twitter.png')}}"  height="22px" width="22px">
                            </a>
                            <a href="https://vk.com">
                                <img src="{{asset('/images/vk.png')}}"  height="34px" width="31px">
                            </a>


                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row-->

                </div>
            </div>
        <div class="container text-center text-md-left mt-5 text-white">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">О компании</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;background-color: #6351ce;">
                    <p>Мы занимаемся оценкой и повышением уровня сервиса российских компаний, исследования методом Тайный покупатель, Аудит торговых точек, Конкурентный анализ, Исследования лояльности и удовлетворённости.</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">покупателям</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;background-color: #6351ce;">
                    <p>
                        <a href="#!">Кто такие тайные покупателя</a>
                    </p>
                    <p>
                        <a href="#!">Чем занимаются тайные покупатели </a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Услуги</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;background-color: #6351ce;">
                    <p>
                        <a href="#!">Личный кабинет</a>
                    </p>
                    <p>
                        <a href="#!"></a>
                    </p>
                    <p>
                        <a href="#!"></a>
                    </p>
                    <p>
                        <a href="#!">FAQ</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Контакты </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;background-color: #6351ce;">
                    <p>Оренбург, 460021, RU</p>
                    <p>anonim@buys.ru</p>
                    <p>+7(3532)11-11-11</p>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-white"   style="background-color: #161e2e;">© 2019 Skrobov
        </div>
        <!-- Copyright -->

    </footer>



    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/slider.js')}}"></script>
</body>
</html>
