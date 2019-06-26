<link rel="stylesheet" href="{{asset('css/search.css')}}">
<link rel="stylesheet" href="{{asset('css/listTaskAndInfo.css')}}">

@extends('layouts.front')
@section('title')
    <div class="container containerTask" style="padding-top: 90px">
        <div class="row">
            <div class="col-md-8 bigList" style="padding-left: 0px;padding-right: 0px; margin-left: 25px;">
                <div class="row" style="position: relative;box-sizing: border-box;padding: 25px 75px 25px 20px;">
                    <div class="col-md-12 taskDetailTitle"
                    </div>

                    </div>

                </div>
                <div class="userBlockInfo">
                    <div class="userBlockInfoTitle" >
                        Оставьте отзыв
                    </div>
                </div>
        <form method="post" action="{{route('tasks-my-review-post',['id' => $tasks->id])}}" style="margin-block-end:0px;">
            {{csrf_field()}}
        <div class="row">

            <ul class="formFields">
                <li class="formFieldsGroup" style="margin-left: 5px">
                    <label class="title">Оценка от 1 до 5</label>
                    <div class="row" style="padding-left: 15px">
                        <div class="field" style="width: 30%">
                            <input id="task_money_origin" data-maxlength="1" value="5" class="form-control form-control_small form-control_money money_format" type="number" name="rating">
                        </div>
                        <div class="fieldPostfix"></div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="" style="margin-left: 3%;padding-right: 30px">
                <textarea  class="form-control" name="about" cols="50" rows="5"  placeholder="Введите данные"></textarea>
                <button type="submit" class="btn btn-default" style="margin-top: 10px;">Сохранить</button>
            </div>
        </div>
        </form>




                </div>
            </div>

        </div>
    </div>
@endsection
