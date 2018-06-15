@extends('layouts.app')

@section('content')

    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>
    <div class='row'>
        <div class='col-xs-6'>
   
    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}

 <div class="form-group">
 {!! Form::label('titile','タイトル:')!!}
        {!! Form::text('title',null,['class'=> 'form-control'])!!}
</div>
<div class="form-group">
        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content',null,['class'=> 'form-control']) !!}
</div>
<div class="form-group">
        {!! Form::label('judge', '判断:') !!}
        {!! Form::select('judge',[
        'yes' =>'承認',
        'no'=> '却下'],
        null,
        ['class'=> 'form-control']
        )!!}
 </div>
        
        
        {!! Form::submit('更新') !!}

    {!! Form::close() !!}
        </div>
     </div>

@endsection