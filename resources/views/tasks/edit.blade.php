@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-offset-2 col-md-6 col-lg-offset-3 col-lg-6">
            <h2>タスク変更</h2>
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
            <div class="form-group">
            {!! Form::label('title', 'タイトル:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('content', 'タスク内容:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('status', 'ステータス:') !!}
            {!! Form::select('status', [
                '未処理'=>'未処理', 
                '処理中'=>'処理中', 
                '処理済'=>'処理済'
            ], null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection