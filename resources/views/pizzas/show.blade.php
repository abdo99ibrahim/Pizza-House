@extends('layouts.app')

@section('content')
            <div class="wrapper pizza-details">
                <h1>Order for {{$pizza->name}}</h1>
                <p class="type">Type - {{$pizza ->type}}</p>
                <p class="base">Base - {{$pizza ->base}}</p>
                <p class="toppings">Extra Toppings:</p>
                <ul>
                    @foreach ($pizza ->toppings as $topping)
                    <li>{{$topping}}</li>
                    @endforeach
                </ul>
                <form action="{{route('pizzas.destroy',$pizza->id)}}" method="post">
                @csrf
                @method('delete')
                <button>Remove Order</button>
            </form>
            </div>
            <a href="/pizzas" class="black"><- Back to all pizzas</a>
</div>
@endsection
