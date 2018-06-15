@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                    <th>判断</th>
                </tr>
            </thead>
            
        @if (count($messages) > 0)
        <tbody>
                @foreach ($messages as $message)
                 <tr>
                <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}
                <td>{{ $message->title }}</td>
                <td>{{ $message->content }}</td>
                <td>{{$message->judge}}</td>
                 </tr>
                @endforeach
         </tbody>   
    </table>
  @endif
    {!! link_to_route('messages.create', '新規メッセージの投稿',null,['class'=>'btn btn-primary']) !!}

@endsection