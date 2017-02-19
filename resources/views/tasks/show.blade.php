@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

    <h2>id = {{ $task->id }} のメッセージ詳細ページ</h2>
    
    <p>{{ $task->content }} | {!! link_to_route('tasks.edit', '編集する', ['id' => $task->id]) !!}</p>
    
    {!! link_to_route('tasks.index', '一覧へ戻る') !!}

@endsection