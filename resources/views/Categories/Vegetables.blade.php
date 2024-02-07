@extends('layout')

@section('content')

<div class="row">
    @foreach($products as $product)
    @if (($product->category_id == 1))
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="product_box">
                <img class="aspect-video bg-cover w-20 rounded-t-md min-h-20 " src="{{$product->featured_image}}" alt="" height=150px width=150px>
                <div class="caption">
                    <p class="font-weight-bold">{{ $product->title }}</p>
                    <p><strong>Price {{$product->description}} :- </strong> Rs.{{ $product->price }}/-</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
        @endif
    @endforeach

</div>

@endsection
