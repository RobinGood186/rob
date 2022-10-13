<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <style> .qqq{text-decoration: none;color: #FFFFFF; padding: 0 10px}</style>
  </head>
<body>
<!-- главное меню. ГЛ текст -->
@include('inc.header')
<!-- боковая панель -->
@include('inc.aside')
<!-- ошибки, отправки -->
@include('inc.messages')



@yield ('Bd')

</body>
</html>
