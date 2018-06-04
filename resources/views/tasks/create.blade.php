@extends('layouts.app')

@section('content')

    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            <h1>課題の攻撃！！</h1>
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('status', '課題は呪文を唱えた:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('content', '勇者に課せられた試練:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('課題を甘んじて受け入れる', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>    


@endsection