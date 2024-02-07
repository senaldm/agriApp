@extends('layouts.app2')
@section('content')

<html>
    <a class="btn btn-primary text-black" href="searchmarketprice"> Back </a>
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

<form name="Bid" style="background-color:#E6E6FA" id="Bid" method="post" action="{{url('Atmarketsprice')}}">
    @csrf
    <div class="form-outline">
        <p class="text-xxl mt-10 text-primary "> <u> <strong> <b> <h1 style="font-size:21px;">Product Price at the Markets Finder </mark></b> </u></p></h1>
        <p class="text-xxl mt-10 "> <b> <h1 style="font-size:15px;"> Product Name : </b></h2> <input type="text" id="product" name='product' class=" mt-5 search-input input-sm text-xl text-center" placeholder=" Enter the Product Name" name="required">

       <button type="submit" class=" btn btn-primary active text-center border border-danger border-5 "> Search Today's Price </button>

</form>
</div>

@endsection
</html>
