@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>


<div class="row">
    <div class="col-xs-6">

{!! Form::model($message, ['route' => 'messages.store']) !!}

        <div class="form-group">
            {!! Form::label('title', 'タイトル:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'メッセージ:') !!}
            {!! Form::text('content',null,['class'=>'form-control']) !!}
        </div>
         <div class="form-group">
             {!! Form::label('judge', '判断:') !!}
            {!! Form::select('judge',[
            'yes' => '承認',
            'no' => '却下'],
            'OK',
            ['class'=>'form-control']
            ) !!}
        </div>
        
        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
    </div>
</div>
@endsection