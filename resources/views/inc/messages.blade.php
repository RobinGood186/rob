@if($errors->any())
<div class="errors">
<ul>
  @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
</ul>
</div>
@endif

@if(session('success'))
<div class="success">
  {{ session('success')}}
</div>
@endif
@if(session('succes'))
<div class="succes">
  {{ session('succes')}}
</div>
@endif
