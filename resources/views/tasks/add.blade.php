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
    <div class="container containerTask">
        <div class="row">
            <div class="col-md-8 bigList">
                <div class="pageTitle">
                    Разместите заказ
                </div>
                <form class="action">
                    <ul class="formFields">
                        <li class="formFieldsGroup">
                            <label class="title">Название заказа</label>
                            <span class="required">*</span>
                            <div class="field">
                                <input data-maxlength="70" class="form-control" placeholder="Найти тайного покупателя" type="text" name="task[title]" id="task_title">
                            </div>
                        </li>
                        <li class="formFieldsGroup">
                            <label class="title">Бюджет</label>
                            <div class="row" style="padding-left: 15px">
                            <div class="field" style="width: 30%">
                                <input id="task_money_origin" data-maxlength="9" value="0" class="form-control form-control_small form-control_money money_format" type="text" name="task[money]">
                            </div>
                            <div class="fieldPostfix">руб.</div>
                            </div>
                        </li>
                        <li class="formFieldsGroup">
                            <label class="title">Описание заказа</label>
                            <span class="required">*</span>
                            <div class="fieldHelp">
                                Мы просим не указывать контактные данные в описании заказа, а использовать для этого
                                <a href="123">профиль</a>
                            </div>
                            <div class="" style="width: 143%">
                                <!--<input data-maxlength="70" class="form-control" placeholder="Найти тайного покупателя" type="text" name="task[title]" id="task_title">
                            -->
                                <label for="text">Текст</label>
                                <textarea  class="form-control" name="text" id="summernote" placeholder="Введите данные"></textarea>
                            <button type="submit" class="btn btn-default" style="margin-top: 10px;">Сохранить</button>
                            </div>
                        </li>
                    </ul>
                </form>
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
