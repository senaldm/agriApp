@extends('layouts.app2')
@section('content')

<html>

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

<a  href="/marketsprice1" class="btn btn-primary text-black"> Search Today's Price at Markets </a>

<div class="text-center">

<form name="Bid" style="background-color:#E6E6FA" id="Bid" method="post" action="{{url('Search')}}">
    @csrf
    <div class="form-outline">
        <p class="text-xxl mt-10 text-primary "> <u> <strong> <b> <h1 style="font-size:21px;">Market Price Finder </mark></b> </u></p></h1>
        <p class="text-xxl mt-10 "> <b> <h1 style="font-size:15px;"> Product Name : </b></h2> <input type="text" id="product" name='product' class=" mt-5 search-input input-sm text-xl text-center" placeholder=" Enter the Product Name" name="required">

         <p class="mt-5"> <b> <h1 style="font-size:15px;">Select one market name:</h1>  <center><select id ='market' name='market' class="mt-5 text-center form-select text-xl appearance-none block w-50% px-5 py-2  font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out  m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" required="required" aria-label="Default select example" ">
            <option value="" selected="selected">  </option>
            <option value="Chavakachcheri">Chavakachcheri</option>
            <option value="Chankanai">Chankanai</option>
            <option value="Jaffna">Jaffna</option>
            <option value="Pointpedro">Pointpedro</option>
            <option value="Kodikamam">Kodikamam</option>
            <option value="Kopai">Kopai</option>
            <option value="Thirunelvely">Thirunelvely</option>

        </select>

       <button type="submit" class="mt-10 btn btn-primary active text-center border border-danger border-5 "> Search Daywise Price </button>

</form>
</div>

@endsection
</html>
