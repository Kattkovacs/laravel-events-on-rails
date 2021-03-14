@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

  <div class="content">
    <div class="title m-b-md">
      Train List
    </div>

    <div class="text m-b-md">

    @foreach ($trains as $train)
      <div>
        {{ $train->name }} - {{ $train->type }} - {{ $train->catering }}
      </div>
    @endforeach

    </div>

    @php
      echo 'welcome on board'; 
    @endphp

  </div>
</div>
@endsection
