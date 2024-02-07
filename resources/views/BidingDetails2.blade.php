@extends('layouts.app1')
@section('content')
<table class="table">
    <thead class="thead-dark">
    <tr>
       <th>Bid ID</th>
       <th>Product ID</th>
       <th>Biding Price</th>
       <th> Customer Name</th>
       <th> Seller Name</th>
       <th> Request Date & Time</th>
       <th> <p class="text-center"> Chat with Seller</th>
       <th> <p class="text-center"> Chat with Customer</th>
    </tr>

      @foreach ($bidsdetails as $bidsdetail)

      <tr>
          <td>{{ $bidsdetail->id}}</td>
          <td>{{ $bidsdetail->product_id }}</td>
          <td>{{ $bidsdetail->biding_price }}</td>
          <td>{{ $bidsdetail->customer_name }}</td>
          <td>{{ $bidsdetail->seller_name }}</td>
          <td>{{ $bidsdetail->created_at }}</td>
          <td> <p class="text-center">  <button type="submit active" class="  btn btn-success  text-center"><a  href="http://127.0.0.1:8000/chatify/"
            onclick="location.href=this.href+{{$bidsdetail->seller_id}};return false;">
            Chat Now
            </a>
          </td>
          <td> <p class="text-center">  <button type="submit active" class="  btn btn-warning  text-center"><a  href="http://127.0.0.1:8000/chatify/"
              onclick="location.href=this.href+{{$bidsdetail->customer_id}};return false;">
              Chat Now
              </a>
          </td>
      </tr>

      @endforeach

    </table>

@endsection
