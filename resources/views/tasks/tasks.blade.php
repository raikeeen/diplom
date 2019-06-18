<link rel="stylesheet" href="{{asset('css/search.css')}}">
<link rel="stylesheet" href="{{asset('css/listTaskAndInfo.css')}}">
<link rel="stylesheet" href="{{asset('css/taskAll.css')}}">
<link rel="stylesheet" href="{{asset('css/checkbox.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<style type="text/css">
    A {
        color: #4f6173;
    }
    A:visited {
        color: #6351ce;
    }
    A:active {
        color: #6351ce;
    }
</style>
@extends('layouts.front')
@section('title')
    <div class="container containerTask adWords" style="padding-top: 90px">
        <div class="row">
            <div class="col-md-8 bigList" style="margin-left: 25px;">
                <header>
                    <div class="layoutTitle" style="padding: 12px 15px;padding-bottom: 0px;font-size: 19px;">
                    Заказы (1322)
                    </div>
                    <hr>
                    <div class="md-form mt-0">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <hr>
                </header>
                <div class="row" style="padding-bottom: 25px;">
                    <div class="col-md-10 taskTitle">
                        <b><a href="{{route('tasks1')}}">Ищем парт-тайм Ruby разработчика для доработок API на нашей платформе</a></b>
                    </div>
                    <div class="col-md-2" style="text-align: right;">
                        договорная
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10" style="">
                        2 отклика • 22 просмотра
                    </div>
                    <div class="col-md-2" style="text-align: right;">
                        19/08/19
                    </div>
                </div>
                <hr>
                <div class="row" style="padding-bottom: 25px;">
                    <div class="col-md-10 taskTitle">
                        <b><a href="{{route('tasks1')}}">Ищем парт-тайм Ruby разработчика для доработок API на нашей платформе</a></b>
                    </div>
                    <div class="col-md-2" style="text-align: right; padding-left: 0px">
                           <img src="http://localhost/diplom/public/storage/money.png" style="float: left;" width="40" height="30">
                        <div style="color: #4abfb4; font-weight: 700;"> 1800 руб</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10" style="">
                        2 отклика • 22 просмотра
                    </div>
                    <div class="col-md-2" style="text-align: right;">
                        19/08/19
                    </div>
                </div>
                <hr>
                <div class="row" style="padding-bottom: 25px;">
                    <div class="col-md-10 taskTitle">
                        <b><a href="{{route('tasks1')}}">Ищем парт-тайм Ruby разработчика для доработок API на нашей платформе</a></b>
                    </div>
                    <div class="col-md-2" style="text-align: right;">
                        договорная
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10" style="">
                        2 отклика • 22 просмотра
                    </div>
                    <div class="col-md-2" style="text-align: right;">
                        19/08/19
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-md-3 smallList">
                    <div class="layoutTitle" style="padding: 12px 15px;border-bottom: 1px solid #eceeef;">
                        Фильтры
                    </div>
                    <ul class="categoryGroup" style="margin-bottom: 0px; padding-bottom: 0px">
                        <li class="categoryGroupFolder">
                            <div class="categoryGroupName checkbox_flat">
                                    <div class="checkbox  checkbox-xs">
                                        <label>
                                            <input type="checkbox" value="">
                                                <i class="fa fa-lg icon-checkbox"></i>
                                            <span class="linkDotted js-toggle">Тайные покупатели</span>
                                        </label>
                                    </div>
                            </div>
                        </li>
                        <li class="categoryGroupFolder">
                            <div class="categoryGroupName checkbox_flat">
                                <div class="checkbox  checkbox-xs">
                                    <label>
                                        <input type="checkbox" value="">
                                        <i class="fa fa-lg icon-checkbox"></i>
                                        <span class="linkDotted js-toggle">Опросы</span>
                                    </label>
                                </div>
                            </div>
                        </li>
                    </ul>
                <div class="layoutTitle" style="padding: 12px 15px;border-top: 1px solid #eceeef;border-bottom: 1px solid #eceeef;">
                    Дополнительно
                </div>
                <ul class="categoryGroup" style="margin-bottom: 0px; padding-bottom: 0px">
                    <li class="categoryGroupFolder">
                        <div class="categoryGroupName checkbox_flat">
                            <div class="checkbox  checkbox-xs">
                                <label>
                                    <input type="checkbox" value="">
                                    <i class="fa fa-lg icon-checkbox"></i>
                                    <span class="linkDotted js-toggle">От имеющих отзывы</span>
                                </label>
                            </div>
                        </div>
                    </li>
                    <li class="categoryGroupFolder">
                        <div class="categoryGroupName checkbox_flat">
                            <div class="checkbox  checkbox-xs">
                                <label>
                                    <input type="checkbox" value="">
                                    <i class="fa fa-lg icon-checkbox"></i>
                                    <span class="linkDotted js-toggle">С указанной стоимостью</span>
                                </label>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection