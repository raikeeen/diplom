<link rel="stylesheet" href="{{asset('css/search.css')}}">
<link rel="stylesheet" href="{{asset('css/listTaskAndInfo.css')}}">
<link href="{{asset('css/addTask.css')}}" rel="stylesheet">

@extends('layouts.front')
@section('title')
    <div class="container containerTask" style="padding-top: 90px;">
        <div class="row">
            <div class="col-md-8 bigList" style="padding-left: 0px;padding-right: 0px; margin-left: 25px;">
                <div class="userProfileHeader">
                    <div class="ProfileHeaderImg">
                        <div class="bannerImg" style="background-image: url('http://localhost/diplom/public/storage/uploads/anonim.jpg');">
                            <div class="userProfileBannerInfo">
                                <div class="avatar">
                                    <img class="avatario" src="{{url('storage/'.$users->avatar)}}">
                                </div>
                                <div class="userInfo">
                                    <h2 class="userName"><a href="{{ url('/users').'/'.$users->id}}">{{$users->name}}</a></h2>
                                    <div class="userProf">
                                        Manager
                                    </div>
                                    <div class="userMeta">
                                        Россия, Казань
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="userBlockInfo">
                    <div class="userBlockInfoTitle" >
                        Мои заказы
                    </div>

                    <div class="tabMenu">
                        <div class="tabItems">
                            <a href="{{route('tasks-my')}}" class="tabLiks line">
                                Размещенные ({{!is_null($tasks)? count($tasks) : 0}})
                            </a>
                            <a  href="{{route('tasks-my-work')}}" class="tabLiks line">
                                В работе ({{!is_null($taskWork)? count($taskWork) : 0}})
                            </a>
                            <a href="{{route('tasks-my-close')}}" class="tabLiks line">
                                Завершенные ({{!is_null($taskClose)? count($taskClose) : 0}})
                            </a>
                        </div>
                        <hr>
                    </div>
                    @if(is_null($tasks))
                        <div class="emptyBlockHolder">
                            <div class="emptyBlockRecommendations">
                                <div class="emptyBlockTitle">
                                    <div class="emptyBlockTitleRec">
                                        Активных заказов нет
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                    @foreach($tasks as $task)
                        <div class="row" style="padding-bottom: 25px;padding-left: 15px;padding-right: 15px">
                            <div class="col-md-10 taskTitle">
                                <b><a href="{{route('tasks-my-response',['id'=>$task->id])}}" style="font-size: 19px">{{$task->name}}</a></b>
                            </div>
                            <div class="col-md-2" style="text-align: right; padding-left: 0px">
                                @if($task->price!="договорная")
                                    <img src="{{url('storage/uploads/money.png')}}" style="float: left;" width="40" height="30">
                                    <div style="color: #4abfb4; font-weight: 700;">{{$task->price}}руб</div>
                                @else
                                    <div class="col-md-2" style="text-align: right;">
                                        договорная
                                    </div>
                                @endif
                            </div>
                        </div>
                            <div class="row" style="padding-left: 15px;padding-right: 15px;padding-bottom: 10px">
                                <div class="col-md-10" style="">
                                    • Отклики {{count($task->addUserTask)}} •
                                </div>
                            </div>
                        <div class="row" style="padding-left: 15px;padding-right: 15px">
                            <div class="col-md-3" style="">
                                <form action="{{route('tasks-my-response',['id'=>$task->id])}}" style="margin-block-end:0px;">
                                    <button class="btn btn-warning" style="padding: 10px 20px;     font-size: 11px;">Выбрать исполнителя</button>
                                </form>
                            </div>
                            <div class="col-md-7" style="">
                                <form action="{{route('tasks-my-review',['id'=>$task->id])}}" style="margin-block-end:0px">
                                    <button class="btn btn-danger" style="padding: 10px 20px;     font-size: 11px;">Завершить</button>
                                </form>
                            </div>
                            <div class="col-md-2" style="text-align: right;">
                                {{$task->created_at}}
                            </div>
                        </div>
                        <hr>
                    @endforeach
                        @endif
                </div>
            </div>
            <div class="col-md-3 smallList">
                <div class="row backgroundImage">
                    <div class="col-sm-12 rightList">
                        <div class="title">Статистика</div>
                        <div class="rowDev">
                            <div style="    width: 100%;font-weight: bold;">Статистика компании</div>
                        </div>
                        <div class="rightTextListSmall">
                            <div class="row">
                                <div class="label">
                                    Завершенные заказы
                                </div>
                                <div class="value" style="    width: 40.6%;">
                                    <a >{{!is_null($taskClose)? count($taskClose) : 0}}</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="label">
                                    В поиске исполнителя
                                </div>
                                <div class="value" style="width: 39.2%;">
                                    <a >{{!is_null($tasks)? count($tasks) : 0}}</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="label">
                                    Заказы в арбитраже
                                </div>
                                <div class="value" style="width: 43.2%;">
                                    0
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 16px;">
                                <div class="label">
                                    Отзывы исполнителей
                                </div>
                                <div class="value" style="width: 38.5%;">

                                    <a href="{{ url('/users').'/'.$users->id}}">
                                        {{$count}}
                                    </a>

                                </div>
                            </div>
                            <div class="row">
                                <div class="label">
                                    Зарегистрирован
                                </div>
                                <div class="value" style="width: 50%;">
                                    1 год назад
                                </div>
                            </div>
                            <div class="row">
                                <div class="label">
                                    Был последний раз
                                </div>
                                <div class="value" style="width: 45%;">
                                    сегодня
                                </div>
                            </div>
                            <hr>
                            <div class="title">Верификация</div>
                            @if(!is_null($users->email_verified_at))
                                <p class="rightTextListSmall" style="white-space: pre-wrap;">Пользователь верифицирован по
                                    email</p>
                            @else
                                <p class="rightTextListSmall" style="white-space: pre-wrap;">Пользователь не прошел верификацию</p>
                            @endif
                            <hr>
                            <div class="title">Контакты</div>
                            @if(!is_null($users->contact))
                                <p class="rightTextListSmall" style="white-space: pre-wrap;">{{$users->contact}}</p>
                            @else
                                <p class="rightTextListSmall" style="white-space: pre-wrap;">Этот пользователь не указал
                                    никаких контактов.</p>
                            @endif
                        </div>
                        <hr>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
