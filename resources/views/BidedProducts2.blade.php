<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" /> <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      .gradient {
        background: linear-gradient(90deg, #0de768 0%, #daae51 100%);
      }
    </style>
  </head>
<div class="row">

    @foreach($bidsdetails as $bidsdetail)

    <body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" style="background-image:url('https://png.pngtree.com/thumb_back/fh260/background/20190221/ourmid/pngtree-business-enterprise-annual-meeting-champion-image_23063.jpg');">
        <button type="submit" class=" ml-14 hover: gradient text-grey-500 font-bold rounded-full my-6  px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="location.href='/Bidend'">
            Go Back
          </button>
        <div class="col-xs-18 col-sm-6 ">
            <div class="product_box">
                <p class="font-weight-bold text-white  text-xl font-serif font-semibold list-style-type: disc text-center"> <mark class="bg-green-200"> Be the Biding winner by simply adding a desired Biding price greater than the Current Top Biding Price.
                </mark>
                </p>
                <div class="caption">
                    <p class="font-weight-bold text-white ml-12 text-lg mt-10 font-serif font-semibold "> Current Biding Leader - {{ $bidsdetail->customer_name}} </p>
                    <p class="font-weight-bold text-white ml-12 text-lg mt-2 font-serif font-semibold "> Current top Biding Price - Rs.{{ $bidsdetail->biding_price}}/- </p>
                    <p class="font-weight-bold text-white ml-12 mt-2 text-lg font-serif font-semibold"> Seller Contact Number - {{ $bidsdetail->seller_phone}} </p>

                    <form name="Bid" id="Bid" method="post" action="{{route('biding2', $bidsdetail->product_id)}}">
                        @csrf
                    <input type="text" id="biding_price" name='biding_price' class="mt-5 ml-12 text-center bg-gray-50 border-4 w-35 py-1 border-blue-300  text-black-600 text-lg  rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-blue-600 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" Enter Biding Price" required  >
                    <div class="flex items-left">
                    <button type="submit" class="  mt-7 ml-12 hover: gradient text-grey-500 font-bold rounded-full my-6 py-1 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="location.href='/Bid'">
                        Bid this Product
                      </button>
                    </form>
                    <button class=" ml-4 hover: gradient text-grey-500  font-bold rounded-full mx-5 my-6  px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out " >
                        <a href="http://127.0.0.1:8000/chatify/"
                        onclick="location.href=this.href+{{$bidsdetail->seller_id}};return false;">
                        Chat Now
                        </a>
                    </button>
                </div>

                    </div>
            </div>
        </div>

    @endforeach

</div>


