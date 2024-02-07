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



<div class="text-center">

<form name="Bid" id="Bid" method="post" action="{{url('Search')}}">
    @csrf
    <div class="form-outline">
        <input type="text" id="product" name='product' class="search-input input-sm text-xl" placeholder=" Enter Product Name" name="required">

       <button type="submit" class="btn btn-primary active text-center border border-danger border-5 "> Search Product </button>
</form>

<table class="table">
    <thead class="thead-dark">
    <tr>
       <th><p class="text-center">Market Price Id</th></p>
       <th><p class="text-center">Product Name</th> </p>
       <th><p class="text-center">Product Category</th> </p>
       <th><p class="text-center">Product Price Per Kg</th> </p>
       <th><p class="text-center">Market Name</th> </p>
       <th><p class="text-center">Product Updated on</th> </p>


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
