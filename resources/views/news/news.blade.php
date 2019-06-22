@extends('layouts.front')
@section('title')
    <div class="container" style="padding-top: 90px">

        <div class="row">
            <div class="col-md-9">
                <h1 class="my-4">Новости</h1>
            </div>
            <div class="col-md-3 ">
            <ol class="breadcrumb text-right float-right" style="background-color: #eeeeee;">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>
                <li class="breadcrumb-item active" >Новости</li>
            </ol>
        </div>

        </div>
        <hr>
        @foreach($news as $new)
        <div class="row">
                <div class="col-md-7">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('storage/'.$new->images)}}" width="600" height="700" alt="">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>{{$new->name}}</h3>
                    <p>{{ str_limit($new->about, 150)}}</p>
                    <a class="btn btn-primary" href="{{route('news-detail',['id' => $new->id])}}">Читать</a>

                </div>
            </div>
            <p>{{$new->created_at}}</p>
            <hr>
            @endforeach
    </div>
@endsection
