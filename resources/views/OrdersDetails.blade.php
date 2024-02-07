@extends('layouts.app1')
@section('content')
<table class="table">
    <thead class="thead-dark">
    <tr>
       <th>Order ID</th>
       <th>Product ID</th>
       <th> Seller Name</th>
       <th> Customer Name</th>
       <th> Customer Address</th>
       <th> Quantity</th>
       <th> Order Date & Time</th>
       <th> <p class="text-center"> Chat with Seller</th>
       <th> <p class="text-center"> Chat with Customer</th>
    </tr>

      @foreach ($orderings as $ordering)
      <tr>
          <td> <p class="text-center">{{ $ordering->id}}</td>
          <td> <p class="text-center">{{ $ordering->pid }}</td>
          <td>{{ $ordering->seller_name }}</td>
          <td>{{ $ordering->customer_name }}</td>
          <td>{{ $ordering->address }}</td>
          <td> <p class="text-center">{{ $ordering->quantity }}</td>
          <td>{{ $ordering->created_at }}</td>
          <td> <p class="text-center">  <button type="submit active" class="  btn btn-success  text-center"><a  href="http://127.0.0.1:8000/chatify/"
          onclick="location.href=this.href+{{$ordering->seller_id}};return false;">
          Chat Now
          </a>
        </td>
        <td> <p class="text-center">  <button type="submit active" class="  btn btn-warning  text-center"><a  href="http://127.0.0.1:8000/chatify/"
            onclick="location.href=this.href+{{$ordering->customer_id}};return false;">
            Chat Now
            </a>
        </td>
      </tr>

      @endforeach

    </table>

@endsection
