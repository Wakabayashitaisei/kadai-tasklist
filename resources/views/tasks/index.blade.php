@extends('layouts.app')

@section('content')

  
<div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            
            <style type="text/css">
              .title h1 {
                position: relative;
                margin: 2em auto;
                padding: 1em;
                width: 60%; /* ボックス幅 */
                background: #202020; /* ボックス背景色 */
                color: #fff; /* 文章色 */
                border: 10px solid #b2771f; /* 枠線 */
                border-radius: 3px; /* 角の丸み */
                box-shadow: 0 0 5px #333;
                }
                
  
            </style> 
    {!! Form::date('name', \Carbon\Carbon::now()) !!}

    <div class='title'>       
        <h1>TASK QUEST</h1>
    </div>
    <h1>Command List</h2>
        <ul class="list-inline">
            <li>[課題に取り組む]</li>
            <li>[やる気スイッチを探す]</li>
            <li>[休憩する]</li>
            <li>[逃げる]</li>
        </ul>
        
      @if (count($tasks) > 0)
        <table class="table table-striped">
 
            <thead>
                <tr>
                    <th>Level</th>
                    <th>Name of task</th>
                    <th>Content</th>
                </tr>
            </thead>
           <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['status' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endif
    
    {!! link_to_route('tasks.create', '課題が現れた！！', null, ['class' => 'btn btn-primary']) !!}
    
        </div>
</div>        
    
    @endsection