@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h2>タスク変更</h2>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}
    
    {!! link_to_route('tasks.index', '一覧へ戻る') !!}

@endsection