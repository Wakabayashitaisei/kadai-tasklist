@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} の課題編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        
        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('転生する') !!}

    {!! Form::close() !!}


@endsection