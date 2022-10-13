
<div class="fixed">
  <div class="glav">
    @yield('content')
  </div>
  <div class="menu">
    <a class="qqq"  href="{{ route('home')}}">главная</a>

    <a class="qqq"  href="{{ route('contact')}}">добавить</a>
    <a class="qqq"  href="{{ route('contact-data')}}">список</a>
  </div>
  <div class="line"></div>
</div>
