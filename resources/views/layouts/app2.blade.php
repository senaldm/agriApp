<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="navbar-static-top.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
  <body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" style="background-image:url('https://cdn.cnn.com/cnnnext/dam/assets/160204163716-digital-dashboard-background-large-169.jpg');">
    <div class="w-full lg:w-2/5">
		<!-- Big profile image for side bar (desktop) -->
		<img src="https://source.unsplash.com/MP0IUfwrn0A" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
		<!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->

	</div>
    <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>

        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav">
            <li class="active"> <a href=""> Welcome to Seller Dashboard </a></li>
            <li> ____</li>
            <li> <a class="link-primary" href="{{ url('/') }}"><i class="fa fa-home fa-fw"></i>Home</a> </li>
            <li class="{{(request()->is('BidingDetails')) ? 'active' : '' }}"> <a class="link-primary" href="{{ url('BidingDetails') }}">Biding Requests </a> </li>
            <li class="{{(request()->is('orders1')) ? 'active' : '' }} "> <a href="{{ url('orders1') }}">Orders</a></li>
            <li class="{{(request()->is('image-upload')) ? 'active' : '' }}"> <a  href="{{ url('image-upload') }}">Upload Products</a></li>
            <li class="{{(request()->is('index1')) ? 'active' : '' }}"> <a  href="{{ url('/index1') }}">Manage Product</a></li>
            <li  class="{{(request()->is('Stock')) ? 'active' : '' }}"> <a href="{{ url('Stock') }}">Available Stocks </a> </li>
            <li  class="{{(request()->is('Statement')) ? 'active' : '' }}"> <a href="{{ url('Statement') }}">Statement </a> </li>
        </ul>

          <ul class="nav navbar-nav navbar-right">

                       <!-- Authentication Links -->
                       @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else


                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="admin" aria-haspopup="true" aria-expanded="false">  Hello {{ Auth::user()->name }} <span class="caret"></span></a>

                                <ul class="dropdown-menu">
                                  <li> <a href="{{ route('profile.show') }}"> Profile </a></li>
                                  <li>
                                    <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                      {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </li>
                                </ul>
                              </li>
                        @endguest

          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">
            @yield('content')

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>



</body>
</html>
