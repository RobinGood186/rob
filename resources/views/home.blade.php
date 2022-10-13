@extends('layouts.app') <!app.blade.php там основа>


@section('title-block')
    главная страница
    @endsection <!close copy!!!>

@section('content') <! copy app>
    <h1>главная страница </h1>
    @endsection <!close copy!!!>

    @section('Bd')
    <div class="text-glav">
<h2>Во вкладке "Добавить" нужно рассказать о своем настроении</h2>
<h2>Во вкладке "Список" просмотреть настроение пользователей</h2>
    </div>
        @endsection

    @section('aside')
    @parent
<br>
    <p>*это будет только тут*</p>
      @endsection
