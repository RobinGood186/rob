@extends('layouts.app') <!app.blade.php там основа>


@section('title-block')
{{$data->name}}
    @endsection <!close copy!!!>

@section('content') <! copy app>
    <h1>{{$data->name}}</h1>


    <div class="echo_bd">

      <h3 class="text-redact">{{ $data->email }}</h3>
      <a href="{{route('contact-update', $data->id)}}"><button class="botton-detal">Редактировать</button><a/>
        <a href="{{route('contact-delete', $data->id)}}"><button class="botton-del">Удалить</button><a/>


    </div>

@endsection <!close copy!!!>
