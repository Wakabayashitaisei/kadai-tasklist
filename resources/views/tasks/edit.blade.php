@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} の課題編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新じゃ') !!}

    {!! Form::close() !!}


@endsection