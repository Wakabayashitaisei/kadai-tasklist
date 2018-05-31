@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} の課題詳細ページ</h1>

    <p>{{ $task->content }}</p>

    {!! link_to_route('tasks.edit', 'この課題を編集しますか？', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('終わったぞー！！') !!}
    {!! Form::close() !!}
@endsection