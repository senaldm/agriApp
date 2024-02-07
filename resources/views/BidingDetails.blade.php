@extends('layouts.app2')
@section('content')

@if(Session::has('success'))
        <div class="alert alert-success text-center text-black  text-bold text-2xl" >
            {{Session::get('success')}}
        </div>
@endif

@if(Session::has('reject'))
        <div class="alert alert-success text-center text-black  text-bold text-2xl" >
            {{Session::get('reject')}}
        </div>
@endif

<table class="table">
    <thead class="thead-dark">
    <tr>
       <th> <p class="text-center">Bid ID</th>
       <th> <p class="text-center"> Product ID</th>
       <th> <p class="text-center"> Biding Price</th>
       <th> Customer Name</th>
       <th> Contact No</th>
       <th> <p class="text-center"> Bid Status </th>
       <th> <p class="text-center"> Options </th>
       <th><p class="text-center"> Request Date & Time</th>
       <th> <p class="text-center"> Chat with Customer</th>
    </tr>

      @foreach ($bidsdetails as $bidsdetail)
      @if (($bidsdetail->seller_id ==Auth::user()->id ))
      <tr>
          <td> <p class="text-center"> {{ $bidsdetail->id}}</td>
          <td> <p class="text-center"> {{ $bidsdetail->product_id }}</td>
          <td> <p class="text-center">{{ $bidsdetail->biding_price }}</td>
          <td>{{ $bidsdetail->customer_name }}</td>
          <td>{{ $bidsdetail->contact_no }}</td>
          <td><p class="text-center"> {{ $bidsdetail->status}} </p> </td>
          <td>
            <a class="btn btn-info" href="/accept1/{{$bidsdetail->id}}">Accept</a>
            <a class="btn btn-primary" href="/reject1/{{$bidsdetail->id}}">Reject</a>
          </td>
          <td> <p class="text-center"> {{ $bidsdetail->created_at }}</td>
          <td> <p class="text-center">  <button type="submit active" class="  btn btn-success  text-center">
            <a  href="http://127.0.0.1:8000/chatify/"
            onclick="location.href=this.href+{{$bidsdetail->customer_id}};return false;">
            Chat Now
            </a>
        </button></td> </p>
      </tr>
      @endif
      @endforeach

    </table>

@endsection
