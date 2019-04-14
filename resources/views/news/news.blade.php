@extends('layouts.front')
@section('title')
    <div class="container">
        <!--<div style="margin-top: 60px"></div>-->

        <div class="row">
            <div class="col-md-9">
                <h1 class="my-4">Новости</h1>
            </div>
            <div class="col-md-3 ">
            <ol class="breadcrumb text-right float-right" style="background-color: #eeeeee;">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>
                <li class="breadcrumb-item active">Новости</li>
            </ol>
        </div>

        </div>
        <hr>

        <div class="row">
                <div class="col-md-7">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="http://itchief.ru/assets/demo/image/image2-800-530.jpg" width="600" height="700" alt="">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>Название темы</h3>
                    <p>аывафыв афывафы вафы вафыва ыфва фыва ыфва фывафыва ыфваыфваыф ваыфваыфва ыфваыф ваыфв ыфва фываф ыва фыва фываыф ваыфваыфва ыфваыфва</p>
                    <a class="btn btn-primary" href="{{route('detail')}}">Читать</a>

                </div>
            </div>
            <p>время добавлениея </p>

            <hr>
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="http://itchief.ru/assets/demo/image/image2-800-530.jpg" width="600" height="700" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Название темы</h3>
                <p>аывафыв афывафы вафы вафыва ыфва фыва ыфва фывафыва ыфваыфваыф ваыфваыфва ыфваыф ваыфв ыфва фываф ыва фыва фываыф ваыфваыфва ыфваыфва</p>
                <a class="btn btn-primary" href="">Читать</a>

            </div>
        </div>
        <p>время добавлениея </p>

        <hr>
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="http://itchief.ru/assets/demo/image/image2-800-530.jpg" width="600" height="700" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Название темы</h3>
                <p>аывафыв афывафы вафы вафыва ыфва фыва ыфва фывафыва ыфваыфваыф ваыфваыфва ыфваыф ваыфв ыфва фываф ыва фыва фываыф ваыфваыфва ыфваыфва</p>
                <a class="btn btn-primary" href="">Читать</a>

            </div>
        </div>



    <!--<ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>-->

    </div>
@endsection
