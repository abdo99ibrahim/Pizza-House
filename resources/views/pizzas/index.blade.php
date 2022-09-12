@extends('layouts.app')

    @section('content')
                <div class="wrapper pizza-index">
                    <h1>Pizza Orders</h1>
                </div>
                {{-- <p>{{ $type}} - {{$base}} - {{$price}}</p> --}}


                {{-- 5- Basics Blade --}}
                {{-- @if ($price > 15)
                <p>This price is Expensive</p>
                @elseif ($price < 5)
                <p>This price is cheape</p>
                @else
                <p>This pizza is normally priced</p>
                @endif

                @unless($base = 'cheesy crust')
                <p>you don't have a cheesy crust</p>
                @endunless

                @php
                $name ='Ahmed';
                echo($name);
                @endphp --}}

                {{-- 6-Loops --}}

                {{-- @for ($i = 0; $i < 5; $i++)
                    <p>the vslue of i is {{$i}}</p>
                    @endfor --}}

                {{-- @for ($i = 0; $i < count($pizzas); $i++)
                        <p>{{ $pizzas[$i]['type']}}</p>
                        @endfor --}}

                @foreach ($pizzas as $index=>$pizza)
                    <div class="wrapper pizza-index">
                        {{-- {{ $loop->index + 1 }} - {{ $pizza['type'] }} - {{ $pizza['base'] }} --}}
                        <div class="pizza-item">

                            <img src="/img/pizza.png" alt="pizza icon">
                            <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
                        </div>
                      {{-- {{$index +1}}-  {{$pizza->type}} - {{$pizza->base}} - {{$pizza->name}} - {{$pizza->price}} --}}
                    </div>
                @endforeach

                {{-- <p>{{$name}} - {{$age}}</p> --}}
    @endsection
