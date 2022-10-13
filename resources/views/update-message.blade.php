@extends('layouts.app') <!app.blade.php там основа>


@section('title-block')
    Редактирование записи
    @endsection <!close copy!!!>




@section('content') <! copy app>
    <h1> Редактирование записи </h1>



      <form class="form" action="{{ route('contact-update-submit', $data->id)}}" method="post">
        @csrf
        <h1 class="form-title">Как твои дела?</h1>
        <div class="form-group">
          <input class="form-input" type="text" name="name" value="{{$data->name}}" id="name" placeholder="Введите имя">
          <label class="form-label"for="name">от 2 до 10 символов</label>
        </div>
        <div class="form-group">
          <input class="form-input" type="text" name="email"value="{{$data->email}}" id="email" placeholder="Опишите свое настроение">
          <label class="form-label"for="email">Пишите искренне</label>
        </div>
        <button type="" name="botton"  class="form-button">Редактировать</button>

      </form>

  @endsection <!close copy!!!>
