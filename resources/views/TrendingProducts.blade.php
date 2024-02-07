@extends('layout')

@section('content')

<div class="row">
    @foreach($orderings as $ordering)

        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="product_box">
                <img class="aspect-video bg-cover w-20 rounded-t-md min-h-20" src="{{$ordering->featured_image}}" alt="" height=150px width=150px>
                <div class="caption">
                    <p class="font-weight-bold"> {{ $ordering->product }} </p>
                    <p><strong>Price :- </strong> Rs.{{ $ordering->price }}/-</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $ordering->pid) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>

    @endforeach

</div>

@endsection
