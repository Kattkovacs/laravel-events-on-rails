@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

  <div class="content">
    <div class="title m-b-md">
      Train List
    </div>
    <div class="text m-b-md">

    {{-- @for ($i = 0; $i < count($trains); $i++)
      <p>{{ $trains[$i]['type'] }}</p>          
    @endfor --}}

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

    {{-- @if($passengers > 100)
      <p>this train needs more than 3 cars</p>
    @elseif($passengers < 30) 
      <p>you may need a DMU</p>
    @else
      <p>this train will contain 3 cars</p>
    @endif

    @unless ($catering == 'on diner')
      <p>please contact for menu and sitting</p>
    @endunless  --}}

    @php
      echo 'welcome on board'; 
      // print_r($trains);
    @endphp

  </div>
</div>
@endsection
