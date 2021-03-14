@extends('layouts.layout')

@section('content')
<div class="wrapper train-details">
  <h1>Order for {{ $train->name }}</h1>
  <p class="type">Type - {{ $train->type }}</p>
  <p class="catering">Catering - {{ $train->catering }}</p>
</div>
<a href="/trains" class="back"><-Back to all trains</a>
@endsection
