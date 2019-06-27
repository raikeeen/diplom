@extends('layouts.app')
@section('content')<main class="py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                    <!-- <nav class="col-md-2 d-none d-md-block bg-light sidebar">-->
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('home')}}">
                                    <span data-feather="home"></span>

                                    <h1> Главная</h1> <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <span data-feather="shopping-cart"></span>
                                    <h3> Новости</h3>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <span data-feather="shopping-cart"></span>
                                    <h3> Сотрудники</h3>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <span data-feather="shopping-cart"></span>
                                    <h3> Обратная связь</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-lg-8">
                @yield('content')
            </div>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Зарегистрированные пользователи</h1>

        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>Пользователь</th>
                    <th></th>
                    <th style="text-align: right">Дата регистрации</th>

                </tr>
                </thead>

            </table>
            @foreach($users as $user)
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>{{$user->name}}</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th style="text-align: right">{{$user->created_at}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <br>
            @endforeach
        </div>
    </main>

@endsection
