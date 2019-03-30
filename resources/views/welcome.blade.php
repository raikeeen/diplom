<link href="{{asset('css/devNews.css')}}" rel="stylesheet">
@extends('layouts.front')
@section('title')
@endsection
@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 h-50" src="{{asset('/images/image.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-50" src="{{asset('/images/image.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-50" src="{{asset('/images/image.jpg')}}" alt="Third slide">
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

    <div class="container row-flex" >
        <h3>Последние новости</h3>
        <hr>
        <div class="row mb-4" >
            <div class="col-md-8">
                <div class="card mb-8 box-shadow">
                    <img class="card-img-top" src="{{asset('/images/image.jpg')}}" alt="Card image cap">
                    <div class="card-body card-header-tabs">
                        <h3>Главная новость</h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="row">
                        <div class="col-md-10">
                            <a href="#">Читать сейчас</a>
                        </div>
                        <div class="col-md-2">20.10.2019</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card mb-12 box-shadow">
                            <img class="card-img-top" src="{{asset('/images/image.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="card mb-12 box-shadow">
                            <img class="card-img-top" src="{{asset('/images/image.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{asset('/images/image.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('/images/image.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{asset('/images/image.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>

                    </div>
        </div>
    </div>


@endsection
