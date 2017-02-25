@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

    <h2>id = {{ $task->id }} のメッセージ詳細ページ</h2>
        <p>
            <laebl>タイトル</label>：{{ $task->title }}
        </p>
        <p>
            <label>タスク内容</label>：{{ $task->content }}
        </p>
        <p>
            <label>ステータス</label>：{{ $task->status }}
        </p>
        <p>
            {!! link_to_route('tasks.edit', '編集する', ['id' => $task->id]) !!} | {!! link_to_route('tasks.index', '一覧へ戻る') !!}
        </p>
        {!! Form::model($task, ['route' => 'tasks.destroy']) !!}
        {{ method_field('DELETE') }}
                {!! Form::submit('登録') !!}

    {!! Form::close() !!}

@endsection