<link rel="stylesheet" href="{{asset('css/search.css')}}">
<link rel="stylesheet" href="{{asset('css/listTaskAndInfo.css')}}">
@extends('layouts.front')
@section('title')
    <div class="container containerTask" style="padding-top: 90px;">
        <div class="row">
            <div class="col-md-8 bigList" style="padding-left: 0px;padding-right: 0px; margin-left: 25px;">
                <div class="userProfileHeader">
                    <div class="ProfileHeaderImg">
                        <div class="bannerImg"
                             style="background-image: url('https://pp.userapi.com/c855732/v855732869/7ed46/u6fpEXlDw48.jpg');">
                            <div class="userProfileBannerInfo">
                                <div class="avatar">
                                    <img class="avatario" src="{{url('storage/'.$users->avatar)}}">
                                </div>
                                <div class="userInfo">
                                    <h2 class="userName"><a
                                                href="{{ url('/users').'/'.$users->id}}">{{$users->name}}</a></h2>
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
                    <div class="userBlockInfoTitle">
                        Обо мне
                    </div>
                    <dd class="userBlockInfoContent">
                        <dl>
                            <dd>
                                <span>
                                    @if(!is_null($users->about))
                                        {!! $users->about  !!}
                                    @else
                                        <div class="emptyBlockHolder">
                                            <div class="emptyBlockRecommendations">
                                                <div class="emptyBlockTitle">
                                                    <div class="emptyBlockTitleRec">
                                                        Пользователь не добавил информацию о себе
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </span>
                            </dd>
                        </dl>
                    </dd>
                    <div class="userBlockInfoOptions">

                    </div>
                </div>
                <div class="userBlockInfoTitle">
                    Отзывы
                </div>
                @if(is_null($reviews))
                <div class="emptyBlockHolder">
                    <div class="emptyBlockRecommendations">
                        <div class="emptyBlockTitle">
                            <div class="emptyBlockTitleRec">
                                <img src="http://localhost/diplom/public/storage/recomend.JPG"><br>
                                Нет отзывов
                            </div>
                        </div>
                    </div>
                </div>
                    @else
                    @foreach($reviews as $review)
                        <div class="userForm row" style="padding: 25px">
                            <img class="avatario" src="{{url('storage/'.$needUser->avatar)}}" style="width: 50px; height: 50px; border: 0px;">
                            <div class="col-md-10" style="font-size: 19px;">
                                <a href="{{ url('/users').'/'.$needUser->id}}">{{$needUser->name}}</a><br>
                                <div style="font-size: 15px;word-wrap: break-word;">
                                    {{$review->descriptions}}
                                </div>
                                <div style="margin-bottom: 30px">
                                </div>
                                <hr>
                            </div>
                        </div>
                        @endforeach
                @endif

                <div>
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
