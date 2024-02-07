<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="description" content="Simple landind page" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>

        </style>
      </head>

<section>

        <div class="container flex flex-wrap  mx-auto">
            <nav class="navbar navbar-dark bg-light">
                <p class="text-primary"> <strong> <h4><mark> Current Biding Details of the Products with Lively Updating Biding Leader Board  </h3></p> </mark> </strong></span>


          <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
              <li>
                <a href="/" class=" font-serif font-semibold  text-lg block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 text-primary"  aria-current="page">Home</a>
              </li>

              <li>
                <a href="/login" class=" font-serif font-semibold text-lg block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Login</a>
              </li>
              <li>
                <a href="/register" class=" font-serif font-semibold text-lg block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Register</a>
              </li>

            </ul>
        </nav>
          </div>
        </div>
      </nav>
</section>
<?php
    use Carbon\Carbon;
    $published_at= Carbon::now();
?>
<div class="container">
    <div class="container ">
        @if(session('status'))
        <div class=" rounded-lg py-3 px-6 font-weight-bold  text-center text-dark mb-1 width-180 ml-12 mt-4"  role="alert">
            <mark > {{ session('status') }} </mark>
          </div>
        @endif
    </div>

<div class="row">

    @foreach($products as $product)
    @if ($product->pricingStructureLabel == 'BID')
        @if($product->pricingStructure->ends_at>=$published_at)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="product_box">
                <img class="aspect-video bg-cover w-20 rounded-t-md min-h-20" src="{{$product->featured_image}}" alt="" height=150px width=150px>
                <div class="caption">

                    <p class="text-primary"> <strong>Product Name - {{ $product->title }} </strong> </p>
                    <p class=" text-success"><strong> Base Price {{$product->description}} :- <p class=" text-dark">Rs.{{ $product->price }}/- </strong></p></p>
                    <p class =" text-danger"><strong>Biding Closing Date </strong></p>
                    <p> <strong>{{ $product->pricingStructure->ends_at->format('M d,Y') }} {{ $product->pricingStructure->ends_at->format('h:i A') }} </strong></p>

                    <button type="submit active" class=" mt-3 btn btn-warning text-center">
                        <a  href="http://127.0.0.1:8000/chatify/"
                        onclick="location.href=this.href+{{$product->user_id}};return false; "> <strong>Chat
                        </strong> </a></button>
                    <button type="submit active" class=" mt-3 btn btn-primary  text-center" onclick="location.href='{{ route('BidHigh', $product->id) }}'">
                         <strong>Bid Leader-Board
                        </strong> </a></button>

                </div>
            </div>
        </div>
        @endif
    @endif
    @endforeach

</div>


