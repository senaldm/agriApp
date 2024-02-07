@extends('layouts.app3')

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

                <div class="card-header"><h1 style="font-size:25px;"> <mark><strong><marquee behavior="alternate" scrollamount="10"  width = "99%" bgcolor="8FADE8">   Welcome to Customer Dashboard  </marquee> </mark> </strong> </div>
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
                    <div> <strong>{{ __(' You can customize, control and view all the details regarding the orders made by yourself here. Just click over the desired Tabs found in the navigation Bar which is placed at the top of the page. You can view your orders using "Orders" tab. You can bid products using "Bid Products" tab and view your Biding requests using "Biding Requests" tab.') }} </strong></div>

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
