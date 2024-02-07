<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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



  </head>
  <body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" style="background-image:url('https://cdn.cnn.com/cnnnext/dam/assets/160204163716-digital-dashboard-background-large-169.jpg');">
    <div class="w-full lg:w-2/5">

		<img src="https://gamerseo.com/blog/wp-content/uploads/2021/07/content-for-ecommerce-website.jpg" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">

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
            <li class="active"> <a href=""> Admin Dashboard </a></li>
            <li><a href="{{ url('/') }}"> <i class="fa fa-home fa-fw"></i>Home</a></li>
            <li class="{{(request()->is('bids')) ? 'active' : '' }}"><a href="{{ url('bids') }}">Bid Details</a></li>
            <li class="{{(request()->is('orders')) ? 'active' : '' }} "><a href="{{ url('orders') }}">Orders </a></li>
            <li class="{{(request()->is('feedbacks')) ? 'active' : '' }} "><a href="{{ url('feedbacks') }}">Feedbacks</a></li>
            <li class="{{(request()->is('subscribers')) ? 'active' : '' }} "><a href="{{ url('subscribers') }}">Subscribers</a></li>


          </ul>

          <ul class="nav navbar-nav navbar-right">

                       <!-- Authentication Links -->

                            <li> <a  href="{{ route('users.index') }}">Manage Users</a></li>
                            <li> <a  href="{{ route('roles.index') }}">Manage Roles</a></li>
                            <li> <a  href="{{ route('products.index') }}">Manage Products </a></li>


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
