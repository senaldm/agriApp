@extends('layouts.app1')

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

                <div class="card-header"><h1 style="font-size:25px;"> <mark><strong><marquee behavior="alternate" scrollamount="10"  width = "99%" bgcolor="6CF4F2">   Welcome to Admin Dashboard  </marquee> </mark> </strong> </div>
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
                    <strong>{{ __(' You can customize, control and view all the details regarding the sales and the users of this Web-Application here. You can also Manage Users,Roles and products available in the system.You can view the Subscriber details using the "Subscribers" tab. Just click over the desired Tabs found in the navigation Bar which is placed at the top of the page. ') }} </strong>
                     </div>


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
