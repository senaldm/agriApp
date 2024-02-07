@extends('layouts.app6')
@section('content')

<?php
use Carbon\Carbon;
?>

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


<table class="table">
    <thead class="thead-dark">
    <tr>
       <th>Market Price Id</th>
       <th>Product Name</th>
       <th>Product Category</th>
       <th>Product Price</th>
       <th>Market Name</th>
       <th>Product Updated on</th>
       <th> Update Price </th>

    </tr>

      @foreach ($markets as $market)
      <tr>
        @if (Auth::user()->id==$market->user_id)
        <?php $date=date($market->created_at);
              $date1=date('Y-m-d', strtotime($date));

              $date2=Carbon::today();
              $date3=date('Y-m-d', strtotime($date2))
        ?>
        @if($date1 == $date3 )
          <td>{{ $market->id}}</td>
          <td>{{ $market->product_name }}</td>
          <td>{{ $market->category_name }}</td>
          <td>{{ $market->price}}</td>
          <td>{{ $market->market_name }}</td>
          <td>{{ $market->created_at }}</td>
          <td> <a class="btn btn-primary" href="{{ url('update_price1',['id'=>$market->id]) }}"> Edit Product</a> </td>

      </tr>
      @endif
      @endif
      @endforeach

    </table>

@endsection
