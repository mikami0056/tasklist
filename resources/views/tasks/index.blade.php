@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h2>タスク一覧</h2>
        <table>
            <thead>
                <tr>
                    <th>タイトル</th>
                    <th>内容</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($tasks) && count($tasks) > 0)
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->title, ['id' => $task->id]) !!}</td>
                        <td>{{$task->content}}</td>
                        <td>{{$task->status}}</td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {!! link_to_route('tasks.create', '登録する') !!}
@endsection