<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mystery shopper</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="">Новости </a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup"  >
        <div class="navbar-nav" >
            <a class="nav-item nav-link active" href="">Услуги <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="">Тайным покупателям</a>
            <a class="nav-item nav-link" href="">О компании</a>
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a class="nav-item nav-link" href="{{ url('/home') }}" >Домашняя</a>
                        @else
                            <a class="nav-item nav-link" href="{{ route('login') }}">Вход</a>
                            <a class="nav-item nav-link" href="{{ route('register') }}">Регестрация</a>
                        @endauth

                        @endif
                    </div>
            </div>
        </div>
    </div>
</nav>

<main role="main">
    <div class="container">
    @yield('title')
        @yield('content')
    </div>
</main>

<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>
