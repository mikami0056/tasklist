@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h2>タスク新規登録</h2>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        <p>
        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}
        </p>
        
        <p>
        {!! Form::label('content', 'タスク内容:') !!}
        {!! Form::text('content') !!}
        </p>
        
        <p>
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status', [
            '未処理'=>'未処理', 
            '処理中'=>'処理中', 
            '処理済'=>'処理済'
        ]) !!}
        </p>
        
        {!! Form::submit('登録') !!}

    {!! Form::close() !!}
    {!! link_to_route('tasks.index', '一覧へ戻る') !!}
    
@endsection