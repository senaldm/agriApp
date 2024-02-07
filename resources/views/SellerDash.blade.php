@extends('layouts.app2')

@section('content')

<html>
    <head>
        <style>
            hr.style1
            {
	                border-top: 10px solid #a8a1e9;
            }
        </style>
    </head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header text-left b-5"> <h1 style="font-size:21px;"> <mark style="background-color: rgb(94, 255, 0)"><strong><marquee behavior="alternate" scrollamount="10"  width = "99%" bgcolor="25F804">   Welcome to $eller Dashboard  </marquee> </mark> </strong> </div>
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
                    <hr class="style1"> </div>
                    <hr/>
                    <hr/>
                    <hr/>
                    <hr/>
                    <hr/>
                    <hr/>
                <div> <h4> <p class=" text-center text-danger "><h1 style="font-size:15px;"> <mark style="background-color: yellow"><strong> Please change your Password after your first login.</strong></mark> <a href="/user/profile" class="btn btn-primary active">Password Reset</a> </div>
                    <hr/>
                    <hr/>
                    <hr/><hr/>
                     <p class="font-serif"> <strong> You can customize, control and view all the details regarding the sales and orders made to you by your customers. Just click over the desired Tabs found in the navigation Bar which is placed at the top of the page. You can update your product details using "Manage Product" tab and you can view your orders using orders tab. </strong> </p> </div>

                <div class="card-body mt-10 ml-5">
                    <img src="https://gamerseo.com/blog/wp-content/uploads/2021/07/content-for-ecommerce-website.jpg"  height: 80% height="600" >
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
