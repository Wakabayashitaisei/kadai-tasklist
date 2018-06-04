@extends('layouts.app')

@section('content')

    
    
   <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            <style type="text/css">
              .dama h2 {
                position: relative;
                margin: 2em auto;
                padding: 1em;
                width: 45%; /* ボックス幅 */
                background: #202020; /* ボックス背景色 */
                color: #fff; /* 文章色 */
                border: 10px solid #b2771f; /* 枠線 */
                border-radius: 3px; /* 角の丸み */
                box-shadow: 0 0 5px #333;
                }
            </style> 
            
            <div class='dama'>
                <h2>ダーマ神殿</h2>
            </div>
            <h1>Level: {{ $task->id }} の変更</h1>
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('status', 'Name of task:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'Content:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        {!! Form::submit('転職する', ['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}
        </div>
    </div>

@endsection