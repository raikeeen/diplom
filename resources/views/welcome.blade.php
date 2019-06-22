<link href="{{asset('css/devNews.css')}}" rel="stylesheet">
<link href="{{asset('css/timeLine.css')}}" rel="stylesheet">
<<link href="{{asset('css/slider.css')}}" rel="stylesheet">


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

@extends('layouts.front')
@section('title')
@endsection
@section('content')

    <div style="margin-top: -22px;"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block slides" src="{{asset('/images/slider1.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="font-weight: bold; margin-bottom: 8%">- Стань Тайным покупателем -</h2>
                    <h5 style="font-style: italic;margin-bottom: 6%">Будь на страже уровня сервиса своего города</h5>
                    <a class="navbar-brand text-white btn btn-outline-primary" style="padding: 15px 29px;     font-size: 15px; margin-left: 16px" href="{{ route('register') }}">Присоединиться</a></span>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block slides" src="{{asset('/images/slider2.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="font-weight: bold; margin-bottom: 8%">- Обширная география работы-</h2>
                    <h5 style="font-style: italic;margin-bottom: 6%">Работает во всех уголках нашей страны</h5>
                    <a class="navbar-brand text-white btn btn-outline-primary" style="padding: 15px 29px;     font-size: 15px; margin-left: 16px" href="{{ route('register') }}">Присоединиться</a></span>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block slides" src="{{asset('/images/slider3.jpg')}}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="font-weight: bold; margin-bottom: 8%">- Оцените уровень сервиса -</h2>
                    <h5 style="font-style: italic;margin-bottom: 6%">Как обслуживают ваших клиентов - взгляните на процесс их глазами</h5>
                    <a class="navbar-brand text-white btn btn-outline-primary" style="padding: 15px 29px;     font-size: 15px; margin-left: 16px" href="{{ route('register') }}">Присоединиться</a></span>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

    <div class="container row-flex">

        <div class="row">

            <ul class="timeline">
                <li>
                    <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading" >
                            <h4 class="timeline-title">Стань Тайным Покупателем!</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Тайный покупатель - это особый специалист, который совершает походы в магазины, рестораны, банки и автосалоны, под видом обычного покупателя для оценки качества работы персонала.
                                Оцените качество обслуживания клиентов в ваших сервисных и торговых точках</p>
                            <hr>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Широкая география</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Помощь в проведении маркетинговых исследований в разных уголках страны</p>
                            <hr>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Веб-сервис</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Возможность полностью контролировать ход исследования и получать результаты в режиме online</p>
                            <hr>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Прогрессирующая база проверяющих</h4>
                        </div>
                        <div class="timeline-body">
                            <p>С каждым днем растущая база проверяющих</p>
                            <hr>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Круглосуточный мониторинг работы</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Мы внимательно следим за состоянием ресурса, если у вас появляются вопросы вы всегда можете задать их модератору</p>
                            <hr>
                        </div>
                    </div>
                </li>
            </ul>

        </div><!-- ./row -->

        @if(count($news)>=6)
        <h3>Последние новости</h3>
        <hr>
        <div class="row mb-4" >
            <div class="col-md-8">
                <div class="card mb-8 box-shadow" style="">
                    <img class="card-img-top" src="{{url('storage/'.$news[0]->images)}}" style="max-width: 730px; max-height: 500px;" alt="Card image cap">
                    <div class="card-body card-header-tabs">
                        <h3>{{$news[0]->name}}</h3>
                        <p class="card-text">{{ str_limit($news[0]->about, 350)}}</p>
                        <div class="row">
                        <div class="col-md-10">
                            <a href="{{route('news-detail',['id' => $news[0]->id])}}">Читать сейчас</a>
                        </div>
                        <div class="col-md-2">{{$news[0]->created_at}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card mb-12 box-shadow">
                            <img class="card-img-top" src="{{url('storage/'.$news[1]->images)}}" style="max-width: 350px; max-height: 198px;" alt="Card image cap">
                            <div class="card-body">
                                <a href="{{route('news-detail',['id' => $news[1]->id])}}"><p class="card-text">{{ str_limit($news[1]->about, 200)}}</p></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="card mb-12 box-shadow">
                            <img class="card-img-top" src="{{url('storage/'.$news[2]->images)}}" style="max-width: 350px; max-height: 198px;" alt="Card image cap">
                            <div class="card-body">
                                <a href="{{route('news-detail',['id' => $news[2]->id])}}"><p class="card-text">{{ str_limit($news[2]->about, 200)}}</p></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{url('storage/'.$news[3]->images)}}" style="max-width: 350px; max-height: 198px;" alt="Card image cap">
                    <div class="card-body">
                        <a href="{{route('news-detail',['id' => $news[3]->id])}}"><p class="card-text">{{ str_limit($news[3]->about, 200)}}</p></a>
                    </div>
                </div>
            </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{url('storage/'.$news[4]->images)}}" style="max-width: 350px; max-height: 198px;" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{route('news-detail',['id' => $news[4]->id])}}"><p class="card-text">{{ str_limit($news[4]->about, 200)}}</p></a>
                        </div>
                    </div>
                </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{url('storage/'.$news[5]->images)}}" style="max-width: 350px; max-height: 198px;" alt="Card image cap">
                            <div class="card-body">
                                <a href="{{route('news-detail',['id' => $news[5]->id])}}"><p class="card-text">{{ str_limit($news[5]->about, 200)}}</p></a>
                            </div>
                        </div>

                    </div>
        </div>
    </div>
@endif

@endsection
