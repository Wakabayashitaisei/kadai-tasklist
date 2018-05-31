@extends('layouts.app')

@section('content')

    <h1>課題が現れた！！</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
            @endforeach
        </ul>
    @endif
    {!! link_to_route('tasks.create', '課題の攻撃！！') !!}

@endsection