<link rel="stylesheet" href="{{asset('css/listTaskAndInfo.css')}}">
<link rel="stylesheet" href="{{asset('css/taskAll.css')}}">
@extends('layouts.front')
@section('title')


    <main role="main" class="container" style="padding-top: 90px;padding-bottom: 40px;">
        <div class="row">
            <div class="col-md-8 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title">{{$news->name}}</h2>
                    <p class="blog-post-meta">{{$news->created_at}} <a href="#">Mark</a></p>
                    <div>{{$news->about}}</div>
                </div><!-- /.blog-post -->

            </div><!-- /.blog-main -->
            <div class="col-md-4 blog-main">
                <div class="row float-right">
                        <ol class="breadcrumb text-right float-right" style="background-color: #eeeeee;">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/news') }}">Новости</a></li>
                            <li class="breadcrumb-item active">Sample blog post</li>
                        </ol>


                </div>
            </div>

        </div><!-- /.row -->

    </main><!-- /.container -->


@endsection
