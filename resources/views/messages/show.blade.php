@extends('layouts.app')

@section('content')

    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>

    <table class='table table-bordered'>
         <tr>
             <th>id</th>
             <td>{{ $message->title }}</td>
         </tr>
         <tr>
             <th>内容</th>
             <td>{{ $message->content }}</td>
         </tr>
            <tr>
             <th>判断</th>
             <td>{{ $message->judge }}</td>
         </tr>
     </table>

    {!! link_to_route('messages.edit', 'このメッセージを編集', ['id' => $message->id],['class'=>'btn btn-default']) !!}

    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除',['class'=> 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection