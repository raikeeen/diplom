<link rel="stylesheet" href="{{asset('css/search.css')}}">
<link rel="stylesheet" href="{{asset('css/listTaskAndInfo.css')}}">
@extends('layouts.front')
@section('title')
    <div class="container containerTask">
        <div class="row">
            <div class="col-md-8 bigList" style="padding-left: 0px;padding-right: 0px; margin-left: 25px;">
                <div class="userProfileHeader">
                    <div class="ProfileHeaderImg">
                        <div class="bannerImg" style="background-image: url('http://localhost/diplom/public/storage/anonim.jpg');">
                            <div class="userProfileBannerInfo">
                                <div class="avatar">
                                <img class="avatario" src="http://localhost/diplom/public/images/avatar.png">
                                </div>
                                <div class="userInfo">
                                    <h2 class="userName"><a href="123">Никита Вячеславович</a></h2>
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
                        Обо мне
                    </div>
                    <dd class="userBlockInfoContent">
                        <dl >
                            <dt>
                                Стоимость работ:
                            </dt>
                            <dd>
                                <span>
                                    Цена договорная
                                </span>
                            </dd>
                            <dt>
                                Профессиональный опыт:

                            </dt>
                            <dd>
                                <span>
                                    более трех лет
                                </span>
                            </dd>
                            <dt>
                                Форма собственности:
                            </dt>
                            <dd>
                                <span>
                                    Юр. лицо, ИП
                                </span>
                            </dd>
                            <dt>
                                Способы оплаты:
                            </dt>
                            <dd>
                                <span>
                                    безналичный расчёт, электронные деньги
                                </span>
                            </dd>
                        </dl>
                        <div class="userBlockInfoContentAbout">
                            Человек
                        </div>
                    </dd>
                    <div class="userBlockInfoOptions">

                    </div>
                </div>
                <div class="userBlockInfoTitle" >
                    Отзывы
                </div>
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
