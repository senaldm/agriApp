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

<a href="" class="btn btn-warning btn-block text-2xl font-sans  " role="button">Last    Month's   Statement  </a>
<table class="table">
    <thead class="thead-dark">
    <tr>
       <th> <p class="text-center"> Order ID</th>
       <th> <p class="text-center"> Product Name</th>
       <th> <p class="text-center">  Customer Name</th>
       <th> <p class="text-center"> Customer No</th>
       <th> <p class="text-center"> Customer Address</th>
       <th> <p class="text-center">  Quantity</th>
       <th> <p class="text-center"> Price </th>
       <th> <p class="text-center"> Order Date & Time</th>
       <th> <p class="text-center"> Order Status</th>
       <th> <p class="text-center"> Chat </th>
    </tr>


      @php $total = 0 @endphp
      @foreach ($orderings as $ordering)
      @if (($ordering->seller_id ==Auth::user()->id ))
      @if (( $ordering->status=='Accepted'))
      @php $total += $ordering->quantity *$ordering->price @endphp
      <tr>

          <td> <p class="text-center"> {{ $ordering->id}}</td>
          <td> <p class="text-center"> {{ $ordering->product }}  </td>
          <td> <p class="text-center"> {{ $ordering->customer_name }} </p> </td>
          <td> <p class="text-center"> {{ $ordering->phone }} </p></td>
          <td> <p class="text-center"> {{ $ordering->address }} </p> </td>
          <td><p class="text-center"> {{ $ordering->quantity }} </p> </td>
          <td><p class="text-center"> {{ $ordering->quantity *$ordering->price}} </p> </td>
          <td><p class="text-center"> {{ $ordering->created_at }} </p> </td>
          <td><p class="text-center"> {{ $ordering->status}} </p> </td>
          <td> <p class="text-center">  <button type="submit active" class="  btn btn-success  text-center">
            <a  href="http://127.0.0.1:8000/chatify/"
            onclick="location.href=this.href+{{$ordering->customer_id}};return false;">
            Chat Now
            </a>
        </button></td> </p>
      </tr>
      @endif
    @endif
    @endforeach


    </table>
    <a href="" class="btn btn-danger btn-block text-2xl font-sans  " role="button">  Statement Total = {{$total}} </a>

@endsection
