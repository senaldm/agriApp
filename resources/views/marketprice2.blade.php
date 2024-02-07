@extends('layouts.app6')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h1><p class="font weight:bold"> <mark><strong> Update your product Price here </strong></mark></h1>
        </div>
    </div>
</div>
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

<form name="Market_price" id="Market_price" method="post" action="{{url('updatemarketnew',['id'=>$market->id])}}">

    @csrf


<div class="form-group">
    <label for="Product_name">Product Name:</label>
    <input  type="text" class="form-control text-xl" id="Product_name" name="product_name" value="{{$market->product_name}}" placeholder="Enter Product Name" required="required" >

</div>

<div class="form-group">
    <label for="price">Product Price :</label>
    <input type="text" class="form-control text-xl" id="price" name="price" value="{{$market->price}}" placeholder="Enter Product Price"  required="required" >

</div>

<div class="form-group">
    <label for="exampleInputId">Product Category:</label>
    <input type="text" class="form-control text-xl" id="price" name="category_name" value="{{$market->category_name}}" placeholder="Enter Product Category"  required="required" >
</div>
<div class="form-group">
    <label for="market_name">Market Name :</label>
    <input type="text" class="form-control text-xl" id="market_name" name="market_name" placeholder="Enter Market name"  required="required" value="{{$market->market_name}}" >

</div>

<button type="submit" class="btn btn-success active"> Save </button>


</form>


@endsection
