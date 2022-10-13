@extends('layouts.app') <!app.blade.php там основа>


@section('title-block')
    Душевная страница
    @endsection <!close copy!!!>




@section('content') <! copy app>
    <h1> Поделись своим настроением </h1>




      <form class="form" action="{{ route('contact-form')}}" method="post">
        @csrf
        <h1 class="form-title">Как твои дела?</h1>
        <div class="form-group">
          <input class="form-input" type="text" name="name" id="name" placeholder="Введите имя">
          <label class="form-label"for="name" >от 2 до 10 символов</label>
        </div>
        <div class="form-group">
          <input class="form-input" type="text" name="email" id="email" placeholder="Опишите свое настроение">
          <label class="form-label"for="email">Пишите искренне</label>
        </div>
        <button type="submit" name="botton"  class="form-button">Рассказать</button>


      </form>

  @endsection <!close copy!!!>
