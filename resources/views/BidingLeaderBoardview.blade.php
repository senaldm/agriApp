@extends('layouts.app2')
@section('content')


<?php
    use Carbon\Carbon;
    $published_at= Carbon::now();
?>
<div class="row">

    @foreach($products as $product)
    @if (($product->user_id ==Auth::user()->id ))
    @if ($product->pricingStructureLabel == 'BID')
        @if($product->pricingStructure->ends_at>=$published_at)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="product_box">
                <img class="aspect-video bg-cover w-20 rounded-t-md min-h-20" src="{{$product->featured_image}}" alt="" height=150px width=150px>
                <div class="caption">

                    <p class="text-primary"> <strong>Product Name - {{ $product->title }} </strong> </p>
                    <p class=" text-success"><strong> Base Price {{$product->description}} :- <p class=" text-dark">Rs.{{ $product->price }}/- </strong></p></p>
                    <p class =" text-danger"><strong>Biding Closing Date </strong></p>
                    <p> <strong>{{ $product->pricingStructure->ends_at->format('M d,Y') }} {{ $product->pricingStructure->ends_at->format('h:i A') }} </strong></p>

                    <button type="submit active" class=" mt-3 btn btn-warning text-center">
                        <a  href="http://127.0.0.1:8000/chatify/"
                        onclick="location.href=this.href+{{$product->user_id}};return false; "> <strong>Chat
                        </strong> </a></button>
                    <button type="submit active" class=" mt-3 btn btn-primary  text-center" onclick="location.href='{{ route('BidHighSeller', $product->id) }}'">
                         <strong>Bid Leader-Board
                        </strong> </a></button>

                </div>
            </div>
        </div>
        @endif
    @endif
    @endif
    @endforeach

</div>

@endsection

