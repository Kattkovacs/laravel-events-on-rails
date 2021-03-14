@extends('layouts.app')

@section('content')
<div class="wrapper train-index">
  <h1>Train Orders</h1>
  @foreach ($trains as $train)
    <div class="train-item">
      <img src="/img/rail.jpg" alt="rail icon">
      <h4><a href="/trains/{{ $train->id }}">{{ $train->name }}</a></h4>
    </div>
  @endforeach

</div>
@endsection