
@extends('layouts.app3')
@section('content')
<table class="table">
    <thead class="thead-dark">
    <tr>
       <th> <p class="text-center"> Order ID</th>
       <th>  Product Name</th>
       <th>   Seller Name</th>
       <th> <p class="text-center"> Seller Contact Number</th>
       <th><p class="text-center">  Quantity</th>
       <th> <p class="text-center"> Order Status</th>
       <th> <p class="text-center">  Order Date & Time</th>
       <th> <p class="text-center">  Chat with Seller</th>
    </tr>


      @foreach ($orderings as $ordering)
      @if (($ordering->customer_name==Auth::user()->name ))

      <tr>
          <td> <p class="text-center">{{ $ordering->id}} </p></td>
          <td> {{ $ordering->product }} </td>
          <td> {{ $ordering->seller_name }} </td>
          <td> <p class="text-center">{{ $ordering->seller_phone }} </p></td>
          <td> <p class="text-center">{{ $ordering->quantity}} </p></td>
          <td><p class="text-center"> {{ $ordering->status}} </p> </td>
          <td> <p class="text-center">{{ $ordering->created_at }} </p></td>
          <td> <p class="text-center">  <button type="submit active" class="  btn btn-success  text-center">
            <a  href="http://127.0.0.1:8000/chatify/"
            onclick="location.href=this.href+{{$ordering->seller_id}};return false;">
            Chat Now
            </a>
        </button></td> </p>
      </tr>
    @endif
      @endforeach

    </table>

@endsection
