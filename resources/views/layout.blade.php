<!DOCTYPE html>
<html>
<head>
    <title>Product Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        mark
        {
        background-color: yellow;
        color: black;
        }
        </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section mt-2">
            <nav class="navbar navbar-light bg-light">

                  <a href="/" class="p-2 hover:bg-gray-800 text-blue-500 font-weight-bold"><i class="fa fa-home fa-fw"></i> Home</a>
                  <a href="/login" class="p-2 hover:bg-gray-800 text-blue-500 font-weight-bold"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign in</a></li>
                  <a href="/contactus" class="p-2 mt-2 hover:bg-gray-800 text-blue-500 text-sm font-weight-bold"><i class="fa fa-phone fa-fw"></i> Contact Us</a>
                  <a href="/search-with-pagination" class="p-2 mt-2 hover:bg-gray-800 text-blue-500 text-sm font-weight-bold"><i class="fa fa-search" aria-hidden="true"></i> Search Products</a>
                  <a href="/Subscribe" class="p-2 mt-2 hover:bg-gray-800 text-blue-500 text-sm font-weight-bold"><i class="fa-solid fa-heart"></i> Subscribe Us</a>


                <div class="dropdown">
                    <button type="button" class="btn btn-info" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                    </button>
                    <div class="dropdown-menu">
                        <div class="row total-header-section">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                            </div>
                            @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach
                            <div class="col-lg-2 col-sm-2 col-2 total-section">
                                <div>Total: <p class=text-danger> Rs.{{ $total }}/- </p></div>
                            </div>
                        </div>
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <div class="row cart-detail mb-2" >
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                        <img src="{{ $details['image'] }}" height= 60px width=60px />
                                    </div>
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-product  ">
                                        <p>{{ $details['name'] }}
                                        <span class="price text-primary"> Rs.{{ $details['price'] }}/-</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span> </p> <hr>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="row">
                            <div class="col-lg-8 col-sm-8 col-8 text-center checkout ml-1">
                                <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<br/>
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
