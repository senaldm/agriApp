<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .blink_me
        {
                animation: blinker 1s linear infinite;
        }

    @keyframes blinker
        {
            10% {
                    opacity: 0;
                 }
        }
        </style>
</head>
    </head>
<body>
    <div class="blink">
        <div class="text-center mt-3 ">
            <a href="/" class="btn btn-success "><i class="fa fa-home fa-fw"></i>  Home </a>
            <a class="btn btn-primary" href="/cart"> View Cart
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg></a>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row mt-2 justify-content-center">

            <div class="mt-2 col-md-10">
                <div class="card">
                  <div class="card-header bg-primary " >
                    <h2 class="text-white text-center  ">Find a Product with our Product Finder</h2>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>

                    <div class="card-body">
                      @livewire('search-pagination')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>
