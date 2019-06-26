<link rel="stylesheet" href="{{asset('css/search.css')}}">
<link rel="stylesheet" href="{{asset('css/listTaskAndInfo.css')}}">

@extends('layouts.front')
@section('title')
    <div class="container containerTask" style="padding-top: 90px">
        <div class="row">
            <div class="col-md-8 bigList" style="padding-left: 0px;padding-right: 0px; margin-left: 25px;">
                <div class="row" style="position: relative;box-sizing: border-box;padding: 25px 75px 25px 20px;">
                    <div class="col-md-12 taskDetailTitle">
                        Диалог
                    </div>


                </div>
                <div class="userBlockInfo">
                    <div class="userBlockInfoTitle" >
                        Сообщения
                    </div>
                </div>
                <div class="row" style="margin-bottom: 30px"></div>
                @if($messagesShpperCount > 1)
                    @foreach($messagesShpper as $messages)
                <div class="row" style="margin: 0;">
                    <div class="col-md-1">
                        <img src="{{url('storage/'.$userShpper->avatar)}}" height="50" width="50" style="border-radius: 25px">
                    </div>
                    <div class="col-md-6">

                        <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading" >
                                <h4 class="timeline-title">{{$userShpper->name}}!</h4>
                            </div>
                            <div class="timeline-body">
                                <p>{{$messages->text}}</p>
                                @if(!is_null($messages->file))
                                    <p><a href = "{{url('storage/'.$messages->file)}}">Скачать файл</a></p>
                                @endif
                                <hr>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">

                    </div>
                </div>
                @endforeach
                        @elseif($messagesShpperCount == 1)
                            <div class="row" style="margin: 0;">
                                <div class="col-md-1">
                                    <img src="{{url('storage/'.$userShpper->avatar)}}" height="50" width="50" style="border-radius: 25px">
                                </div>
                                <div class="col-md-6">

                                    <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading" >
                                            <h4 class="timeline-title">{{$userShpper->name}}!</h4>
                                        </div>
                                        <div class="timeline-body">
                                            @foreach($messagesShpper as $messages)
                                            <p>{{$messages->text}}</p>
                                            @if(!is_null($messages->file))
                                                    <p><a href = "{{url('storage/'.$messages->file)}}">Скачать файл</a></p>
                                            @endif
                                            @endforeach
                                            <hr>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-5">

                                </div>
                            </div>
                        @else
                    @endif

                    @if($messagesCompanyCount > 1)
                        @foreach($messagesCompany as $messages)
                <div class="row" style="margin: 0;">

                    <div class="col-md-5">


                    </div>
                    <div class="col-md-6">
                        <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading" >
                                <h4 class="timeline-title">{{$userCompany->name}}!</h4>
                            </div>
                            <div class="timeline-body">
                                <p>{{$messages->text}}</p>
                                @if(!is_null($messages->file))
                                    <p><a href = "{{url('storage/'.$messages->file)}}">Скачать файл</a></p>
                                @endif
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1" style="padding-left: 0">
                        <img src="{{url('storage/'.$userCompany->avatar)}}" height="50" width="50" style="border-radius: 25px">
                    </div>
                </div>
                        @endforeach
                    @elseif($messagesCompanyCount == 1)


                        <div class="row" style="margin: 0;">

                            <div class="col-md-5">


                            </div>
                            <div class="col-md-6">
                                <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading" >
                                        <h4 class="timeline-title">{{$userCompany->name}}!</h4>
                                    </div>
                                    <div class="timeline-body">
                                        @foreach($messagesCompany as $messages)
                                        <p>{{$messages->text}}</p>
                                            @if(!is_null($messages->file))
                                                <p><a href = "{{url('storage/'.$messages->file)}}">Скачать файл</a></p>
                                            @endif
                                        @endforeach
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1" style="padding-left: 0">
                                <img src="{{url('storage/'.$userCompany->avatar)}}" height="50" width="50" style="border-radius: 25px">
                            </div>
                        </div>

                    @else
                    @endif

                <hr>
                <form class="action" method="post" enctype="multipart/form-data" action="{{route('tasks-my-response-dialog-messages',['id' => $tasks->id])}}">
                    {{csrf_field()}}
                    <div class="col-md-12">

                    <textarea  class="form-control" name="about" placeholder="Введите данные" cols="30" rows="5" style="max-width: 50%;margin-left: 43%"></textarea>
                        <div class="row">
                            <div class="col-md-6" style="margin-top: 10px;margin-left: 41%">
                                <input type="file" name="file">
                            </div>
                            <div class="col-md-6"></div>
                                <button type="submit" class="btn btn-default" style="margin-top: 10px;margin-left: 41%;margin-bottom: 15px; margin-top: 15px">Отправить</button>
                            </div>

                        </div>

                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
