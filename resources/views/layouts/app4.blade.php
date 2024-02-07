<!doctype html>
<html lang="en">
  <head>

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

    <!-- Custom styles for this template -->
    <link href="navbar-static-top.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</head>
  <body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" style="background-image:url('https://cdn.cnn.com/cnnnext/dam/assets/160204163716-digital-dashboard-background-large-169.jpg');">
    <div class="w-full lg:w-4/5">


	</div>
    <!-- Static navbar -->
    <div id="topheader">
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only label">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar "></span>
            <span class="icon-bar"></span>
          </button>
        </div>


        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav">

            <li class="active"> <a href=""> Welcome to Customer Dashboard </a></li>
            <li> Welcome to our customer panel</li>
            <li> <a class="navbar-nav a" href="{{ url('/') }}" ><i class="fa fa-home fa-fw"></i>Home</a></li>
            <li class="{{(request()->is('cart')) ? 'active' : '' }}"> <a class="navbar-nav a" href="{{ url('cart') }}" >  Product Cart <i class="fa fa-shopping-cart"></i></a></li>
            <li  class="{{(request()->is('BidingDetails1')) ? 'active' : '' }}"> <a href="{{ url('BidingDetails1') }}">Biding Requests </a> </li>
            <li  class="{{(request()->is('orders2')) ? 'active' : '' }}"> <a href="{{ url('orders2') }}">Product Orders </a> </li>
            <li  class="{{(request()->is('Bid')) ? 'active' : '' }}"> <a href="{{ url('Bid') }}">Bid Products </a> </li>
        </ul>

          <ul class="nav navbar-nav navbar-right">

                       <!-- Authentication Links -->
                       @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else


                            <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="admin" aria-haspopup="true" aria-expanded="false"> Hello {{ Auth::user()->name }} <span class="caret"></span></a>

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

        </div>
      </div>
    </section>
    </nav>

    <div class="container">

        @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    @yield('scripts')

</body>
</html>

