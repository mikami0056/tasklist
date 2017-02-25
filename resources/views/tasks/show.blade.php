@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-offset-2 col-md-6 col-lg-offset-3 col-lg-6">
            <h2>id = {{ $task->id }} のタスク詳細詳細</h2>
            <table class="table table-bordered">
                <tr>
                    <th>タイトル</th>
                    <td>{{ $task->title }}</td>
                </tr>
                <tr>
                    <th>タスク内容</th>
                    <td>{{ $task->content }}</td>
                </tr>
                <tr>
                    <th>ステータス</th>
                    <td>{{ $task->status }}</td>
                </tr>
            </table>
            <p>
                {!! link_to_route('tasks.edit', '編集する', ['id' => $task->id],['class' => 'btn btn-default']) !!}  {!! link_to_route('tasks.index','一覧へ戻る',null,['class' => 'btn btn-default']) !!}
            </p>
        </div>
    </div>


@endsection