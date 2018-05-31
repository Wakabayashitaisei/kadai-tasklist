@extends('layouts.app')

@section('content')

    <h1>課題登録ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('よろしくお願いしまあああああああああす') !!}

    {!! Form::close() !!}


@endsection