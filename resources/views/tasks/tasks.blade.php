<link rel="stylesheet" href="{{asset('css/')}}">
<style>

    .searchbar{
        margin-bottom: auto;
        margin-top: auto;
        height: 60px;
        background-color: #353b48;
        border-radius: 30px;
        padding: 10px;
    }

    .search_input{
        color: white;
        border: 0;
        outline: 0;
        background: none;
        width: 0;
        caret-color:transparent;
        line-height: 40px;
        transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
        padding: 0 10px;
        width: 450px;
        caret-color:red;
        transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
        background: white;
        color: #e74c3c;
    }

    .search_icon{
        height: 40px;
        width: 40px;
        float: right;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        color:white;
    }
</style>
@extends('layouts.front')
@section('title')
    <!--
<div class="container" >
    <div class="row">
        <div class="col-md-8" style="background-color: #ffffff;">
                <h3>Заказы #(1160)</h3>

            <input type="text" placeholder="Search.." style="nav-right: auto;">
           <!-- <div class="d-flex justify-content-center h-100">
                <div class="searchbar">
                    <input class="search_input" type="text" name="" placeholder="Search...">
                    <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                </div>
            </div>
            <hr>


        </div>


</div>
-->
    <div class="container" style="padding-top: 30px;padding-bottom: 30px">
        <div class="row">
            <div class="col-md-8" style="background-color: #ffffff;margin-right: 5px;">
                <header>
                    <h5>Заказы (1322)</h5>
                    <hr>
                    <div class="md-form mt-0">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <hr>
                </header>
                <div>
                    <h5><a href="{{route('tasks1')}}">Ищем парт-тайм Ruby разработчика для доработок API на нашей платформе</a></h5>
                    <h6>2 отклика  22 просмотра  33 минуты назад</h6>
                    <br>
                    <hr>
                </div>
                <div>
                    <h5><a href="{{route('tasks1')}}">Ищем парт-тайм Ruby разработчика для доработок API на нашей платформе</a></h5>
                    <h6>2 отклика  22 просмотра  33 минуты назад</h6>
                    <br>
                    <hr>
                </div>
                <div>
                    <h5><a href="{{route('tasks1')}}">Ищем парт-тайм Ruby разработчика для доработок API на нашей платформе</a></h5>
                    <h6>2 отклика  22 просмотра  33 минуты назад</h6>
                    <br>
                    <hr>
                </div>
                <div>
                    <h5><a href="{{route('tasks1')}}">Ищем парт-тайм Ruby разработчика для доработок API на нашей платформе</a></h5>
                    <h6>2 отклика  22 просмотра  33 минуты назад</h6>
                    <br>
                    <hr>
                </div>



            </div>
            <!--<div class="col-md-1" style="background-color: #EEEEEE;"></div>-->
            <div class="col-md-3" style="background-color: #ffffff; margin-left: 50px;">
                <div class="row backgroundImage">
                    <div class="col-sm-12 text-center">
                        <h5>Дополнительно</h5>
                       <hr>
                    </div>
                    <hr>
                </div>

            </div>
        </div>

    </div>
@endsection