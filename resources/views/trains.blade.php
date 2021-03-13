<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Styles -->
  <style>
    html,
    body {
      background-color: #fff;
      color: #636b6f;
      font-family: 'Nunito', sans-serif;
      font-weight: 200;
      height: 100vh;
      margin: 0;
    }

    .full-height {
      height: 100vh;
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 84px;
    }

    .text {
      font-size: 36px;
    }

    .links>a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .m-b-md {
      margin-bottom: 30px;
    }
  </style>
</head>

<body>
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
</body>

</html>