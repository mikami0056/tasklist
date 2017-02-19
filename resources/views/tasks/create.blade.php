@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h2>タスク新規登録</h2>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク内容:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('登録') !!}

    {!! Form::close() !!}
    
    {!! link_to_route('tasks.index', '一覧へ戻る') !!}
@endsection