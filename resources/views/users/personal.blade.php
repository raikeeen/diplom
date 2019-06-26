<link rel="stylesheet" href="{{asset('css/search.css')}}">
<link rel="stylesheet" href="{{asset('css/listTaskAndInfo.css')}}">
<link href="{{asset('css/addTask.css')}}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
@extends('layouts.front')
@section('title')
    <div class="container containerTask" style="padding-top: 90px;">
        <div class="row">
            <div class="col-md-8 bigList" style="padding-left: 0px;padding-right: 0px; margin-left: 25px;">
                <div class="userProfileHeader">
                    <div class="ProfileHeaderImg">
                        <div class="bannerImg" style="background-image: url('https://pp.userapi.com/c855732/v855732869/7ed46/u6fpEXlDw48.jpg');">
                            <form class="action" method="post" enctype="multipart/form-data" action="{{route('users-personal-edit')}}">
                                {{csrf_field()}}
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
                                        <div class="form-group">
                                            <input name="avatarImg" type="file">
                                        </div>
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
                        Редактировать
                    </div>
                    <dd class="userBlockInfoContent">

                        <div class="userBlockInfoContentAbout">
                            <label style="font-weight: bold">Имя</label>
                            <input id="task_money_origin" value="{{$users->name}}" class="form-control form-control_small form-control_money money_format" type="text" name="name">
                        </div>
                        <div class="userBlockInfoContentAbout">
                            <label style="font-weight: bold">Контакты</label>
                            <textarea  class="form-control" name="contact">{{$users->contact}}</textarea>
                        </div>
                        <div class="userBlockInfoContentAbout">
                            <label style="font-weight: bold">О себе</label>
                            <textarea  class="form-control" name="about" id="summernote">{{$users->about}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-default" style="margin-top: 10px;">Сохранить</button>
                        </form>
                    </dd>
                    <div class="userBlockInfoOptions">

                    </div>
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
                                    <a href="123">9</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="label">
                                    В поиске исполнителя
                                </div>
                                <div class="value" style="width: 39.2%;">
                                    <a href="123">1</a>
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
                                    <a href="123">+9</a>
                                    /
                                    <a href="123">-0</a>
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
                            <p class="rightTextListSmall" style="white-space: pre-wrap;">Пользователь верифицирован по номеру телефона</p>
                            <hr>
                            <div class="title">Контакты</div>
                            <p class="rightTextListSmall" style="white-space: pre-wrap;">Этот пользователь не указал никаких контактов.</p>

                        </div>
                        <hr>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script>
        $('#summernote').summernote({
            placeholder: 'Опишите ваш заказ',
            tabsize: 2,
            height: 100
        });
    </script>
@endsection
