@extends('layouts.app6')
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

<h2><p class="font-weight-bold text-center"> <mark><strong> Update Today's Market Price for Products </strong></mark></h2>

<form name="Market_price" id="Market_price" method="post" action="{{url('upload_price')}}">
        @csrf
    <div class="form-group">
        <label for="Product_name">Product Name:</label>
        <input  type="text" class="form-control text-xl" id="Product_name" name="product_name" placeholder="Enter Product Name" required="required" >
        @error('Product_name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputId">Product Category:</label>
        <select id ='category_name' name="category_name" class="form-select text-xl appearance-none block w-full px-3 py-1.5  font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out  m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example"  required="required" >
            <option value="" selected="selected">  </option>
            <option value="Vegetables">Vegetables </option>
            <option value="Fruits">Fruits</option>
            <option value="Crops">Crops</option>
            <option value="Groceries">Groceries</option>
            <option value="Spices">Spices</option>
            <option value="Coconuts">Coconuts</option>

        </select>
        @error('category_name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="price">Product Price :</label>
        <input type="text" class="form-control text-xl" id="price" name="price" placeholder="Enter Product Price"  required="required" >
        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="market_name">Market Name :</label>
        <input type="text" class="form-control text-xl" id="market_name" name="market_name" placeholder="Enter Market name"  required="required" >
        @error('market_name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>


    <button type="submit" class="btn btn-success active"> Save </button>


</form>
@endsection

