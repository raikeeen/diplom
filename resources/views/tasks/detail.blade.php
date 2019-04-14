@extends('layouts.front')
@section('title')
    <div class="container" style="padding-top: 30px;padding-bottom: 30px">
        <div class="row">
            <div class="col-md-8" style="background-color: #ffffff;margin-right: 5px;">
                <header>
                    <h3>Ищем парт-тайм Ruby разработчика для доработок API на нашей платформе</h3>
                    <p>
                        800 руб.за час • безналичный расчёт, электронные деньги
                        14 апреля 2019, 19:42 • 1 отклик • 14 просмотров
                    </p>
                    <hr>
                </header>
                <div>
                    <h6>
                        Ищем Ruby-разработчика чтобы развернуть готовый бекенд на сервере(все работает на другом сервере, нужен дубликат), а также доработок функционала. Grape, Redis, Postgres
                        Идеально, если со знанием Typescript
                    </h6>
                </div>
                <hr>
                <br>
                <button type="button" class="btn btn-secondary btn-lg btn-block">Подать заявку</button>

            </div>
            <!--<div class="col-md-1" style="background-color: #EEEEEE;"></div>-->
            <div class="col-md-3" style="background-color: #ffffff; margin-left: 50px;">
                <div class="row backgroundImage">
                    <div class="col-sm-12 text-center">
                        <div class="mainImage">
                            <img src="{{asset('images/image.jpg')}}" class="rounded-circle d-block mx-auto mb-4" width="100px" height="100px" alt="...">
                        </div>
                        <div id="Оценки" onmouseout="Выбрать_звёздочку(-1);"></div>
                        <h5>Vitalya Rekun</h5>
                        <h6>Moscow, Russia</h6>
                        <h6>Размещенные заказы</h6>
                        <hr>
                        Заказчик
                        <hr>
                    </div>
                    <hr>
                </div>

            </div>
        </div>

    </div>
@endsection