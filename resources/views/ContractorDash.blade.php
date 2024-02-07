@extends('layouts.app6')

@section('content')

<html>
    <head>
        <style>
            hr.style1
            {
	                border-top: 10px solid #392f91;
            }
        </style>
    </head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header"><h1 style="font-size:25px;"> <mark><strong><marquee behavior="alternate" scrollamount="10"  width = "99%" bgcolor="CDA5F3">   Welcome to Contractor Dashboard  </marquee> </mark> </strong> </div>
                    <div>
                        <hr/>
                        <hr/>
                        <hr/>
                        <hr/>
                        <hr/>
                        <hr/>
                        <hr/>

                    </div>
                    <div>
                        <hr class="style1">
                        <hr/>
                        <hr/>
                        <hr/>
                        <hr/>
                        <hr/>
                    </div>
                <strong>{{ __(' You can create a new product to start updating the prodct prices using the "Create Product" tab.You can simply update the prices of the already created products using "Update Product Price" tab. You can also easily view the available products and their current prices using the "View Products" tab. ') }} </strong></div>

                <div class="card-body mt-10 ml-10">
                    <img src="https://gamerseo.com/blog/wp-content/uploads/2021/07/content-for-ecommerce-website.jpg"  height: 100% height="800" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
