@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h2>タスク一覧</h2>
        <ul>
            @if(isset($tasks) && count($tasks) > 0)
                @foreach ($tasks as $task)
                    <li>{!! link_to_route('tasks.show', $task->content, ['id' => $task->id]) !!}</li>
                @endforeach
            @else
                <li>タスクが登録されていません。{!! link_to_route('tasks.create', '新規登録') !!}</li>
            @endif
        </ul>
        {!! link_to_route('tasks.create', '新規登録') !!}
@endsection