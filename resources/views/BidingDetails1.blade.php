@extends('layouts.app3')
@section('content')

<table class="table" name="biding Requests">
    <thead class="thead-dark">
    <tr>
       <th> <p class="text-center">  Bid ID</th>
       <th> <p class="text-center"> Product ID</th>
       <th> <p class="text-center"> Product Name</th>
       <th> <p class="text-center"> Biding Price</th>
       <th> <p class="text-center"> Seller Name</th>
       <th> <p class="text-center"> Seller Contact No</th>
       <th> <p class="text-center"> Request Date & Time</th>
       <th><p class="text-center"> Chat with Seller</th>
    </tr>

      @foreach ($bidsdetails as $bidsdetail)
      @if (($bidsdetail->customer_name ==Auth::user()->name ))
      <tr>
          <td><p class="text-center"> {{ $bidsdetail->id}}</td>
          <td> <p class="text-center"> {{ $bidsdetail->product_id }}</td>
          <td> <p class="text-center"> {{ $bidsdetail->product_name }}</td>
          <td> <p class="text-center"> {{ $bidsdetail->biding_price }}</td>
          <td> <p class="text-center"> {{ $bidsdetail->seller_name }}</td>
          <td> <p class="text-center"> {{ $bidsdetail->seller_phone }}</td>
          <td> <p class="text-center"> {{ $bidsdetail->created_at }}</td>
          <td> <p class="text-center">  <button type="submit active" class="  btn btn-success  text-center">
            <a  href="http://127.0.0.1:8000/chatify/"
            onclick="location.href=this.href+{{$bidsdetail->seller_id}};return false;">
            Chat Now
            </a>
        </button></td> </p>
      </tr>
      @endif
      @endforeach

    </table>

@endsection
