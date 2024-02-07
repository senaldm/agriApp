@extends('layouts.app2')
@section('content')


<div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
<div>
    @if(session('success'))
<div class="alert alert-success text-center mt-10 text-black">
    {{ session('success') }}
</div>
@endif
</div>
<div class="pull-left">
    <a class="btn btn-primary" href="{{ url('searchmarketprice') }}"> Back</a>
</div>

<table class="table">
    <thead class="thead-dark">
    <tr>
       <th>Market Price Id</th>
       <th>Product Name</th>
       <th>Product Category</th>
       <th>Product Price</th>
       <th>Market Name</th>
       <th>Product Updated on</th>
    </tr>

      @foreach ($markets as $market)
      <tr>
          <td>{{ $market->id}}</td>
          <td>{{ $market->product_name }}</td>
          <td>{{ $market->category_name }}</td>
          <td>{{ $market->price}}</td>
          <td>{{ $market->market_name }}</td>
          <td>{{ $market->updated_at }}</td>
      </tr>

      @endforeach

    </table>

@endsection
