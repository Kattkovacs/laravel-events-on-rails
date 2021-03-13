@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

  <div class="content">
    <div class="title m-b-md">
      Train List
    </div>
    <p>{{ $name }}</p>
    <p>{{ $age }}</p>
    <div class="text m-b-md">
    @foreach ($trains as $train)
      <div>
        {{ $loop->index }} {{ $train['type'] }} - {{ $train['catering'] }}
        @if($loop->first)
          <span> - first in the loop</span>
        @endif
        @if($loop->last)
          <span> - last in the loop</span>
        @endif
      </div>
    @endforeach
    </div>

    @php
      echo 'welcome on board'; 
    @endphp

  </div>
</div>
@endsection
