@extends('layouts.app') <!app.blade.php там основа>

@section('title-block')
все сообщения
    @endsection

@section('content') <! copy app>
    <h1>Весь список</h1>
@endsection

@section('Bd')
<div class="nofixed">
    @foreach($data as $el)
    <div class="echo_bd">
      <h3 class="text-name">{{ $el->name }}</h3>
      <h3 class="text-name">{{ $el->email }}</h3><br>
      <a href="{{route('contact-data-one', $el->id)}}"><button class="botton-detal-cnfg">Настройки</button><a/>
    </div>
    @endforeach
</div>
    @endsection
