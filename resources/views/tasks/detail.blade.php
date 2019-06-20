<link rel="stylesheet" href="{{asset('css/search.css')}}">
<link rel="stylesheet" href="{{asset('css/listTaskAndInfo.css')}}">
<?
        $task =
?>
@extends('layouts.front')
@section('title')
    <div class="container containerTask" style="padding-top: 90px">
        <div class="row">
            <div class="col-md-8 bigList" style="padding-left: 0px;padding-right: 0px; margin-left: 25px;">
                <div class="row" style="position: relative;box-sizing: border-box;padding: 25px 75px 25px 20px;">
                    <div class="col-md-12 taskDetailTitle">
                        {{$tasks->name}}
                    </div>
                    <div class="col-md-12 taskFinance">
                        {{$tasks->price}} руб. за выполнение<br>
                    </div>
                    <div class="col-md-12 taskTags">
                        16 июня 2019, 09:46 • 0 откликов • 6 просмотров<br>
                    </div>
                    <div class="col-md-12 taskDescription">
                        {!! $tasks->about !!}
                    </div>

                </div>
                <div class="userBlockInfo">
                    <div class="userBlockInfoTitle" >
                        Ваш отклик на заказ
                    </div>
                </div>
                <form style="padding: 20px;">
                    <div class="userForm">
                        <div class="avatar">
                            <img class="avatario" src="http://localhost/diplom/public/images/avatar.png" style="width: 50px; height: 50px; border: 0px">
                        </div>
                        <div>
                            <textarea class="form-control" rows="5" data-role="oembed-input" data-target="#oembed-preview" data-maxlength="3000" name="task_comment[body]" id="task_comment_body" style="overflow: hidden; overflow-wrap: break-word; resize: none; width: 550px; height: 127px;"></textarea>
                            <div style="margin-top: 10px; margin-left: 75px">
                                <button type="button" class="btn btn-secondary">Откликнуться</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-3 smallList">
                <div class="row backgroundImage">
                    <div class="col-sm-12 rightList">
                        <div class="row avatarTaskRightBlock">
                            <div class="col-md-12">
                                <a href="12312">
                                    <img class="avatario" src="http://localhost/diplom/public/images/avatar.png" style="margin: auto;
    width: 90px; border: 0px">

                                    <div class="fullName">
                                        Edvard SDD
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="userRole">
                            <div class="userRoleName">
                                Компания
                            </div>
                        </div>
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
@endsection
