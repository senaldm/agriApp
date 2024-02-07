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
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }
    </style>
  </head>
  <body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" style="background-image:url('https://cloudfront-us-east-1.images.arcpublishing.com/coindesk/WOPZ6KFSERH35IMFR3SKPSNY7M.jpg');">
    <button type="submit" class=" mt-10 ml-14 mb-7 hover: gradient text-grey-500 font-bold rounded-full   px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="location.href='/Bid1'">
        Go Back
      </button>
      <p class="font-weight-bold text-white  text-xl font-serif font-semibold list-style-type: disc text-center"> <mark class="bg-green-200 "> You are our first Bider. Hurry !!! Add your desired Biding price greater than the Base Price.
    <div class=" mt-25 ml-10  p-1 w-25 cursor-pointer rounded-md shadow-md shadow-gray-200 hover:shadow-blue-400 hover:shadow-xs  ">
        <img class="ml-5 mt-3 aspect-video bg-cover w-40 rounded-t-md min-h-20" src="{{asset($product->featured_image)}}" />
        <div class="p-2 lg:mx-1  ">

            <p class="font-bold text-lg text-white ">Seller Name - {{$product->seller->name}}</p>
            <p class="text-white font-bold text-lg "> Product Name - {{$product->title}}</span>
    <div>
        <div class>
            <p class=" text-justify  text-lg text-white font-bold break-normal"> Base Price  {{$product->description}} - Rs.{{$product->price}}/-</p>
            <form name="Bid" id="Bid" method="post" action="{{route('biding3', $product->id)}}">
                @csrf
            <input type="text" id="biding_price" name='biding_price' class="text-center bg-gray-50 border-4 w-45 py-1 mt-2 border-blue-300  text-black-600 text-lg  rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-blue-600 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" Enter Biding Price" required  >
        </div>
        <div class="mt-2">
            <p class ="text-red-400 font-bold text-lg">Biding Closing Date</p>
          </div>
          <p class="text-white font-semibold text-lg"> {{ $product->pricingStructure->ends_at->format('M d,Y') }} {{ $product->pricingStructure->ends_at->format('h:i A') }}  </p>

    </div>
    <div class="flex items-left">
        <button type="submit" class=" mr-3 hover: gradient text-grey-500 font-bold rounded-full my-6 py-2 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out ">
          Bid Now
        </button>
    </form>
        <button class=" lg:mx-0 hover: gradient text-grey-500  font-bold rounded-full mx-5 my-6 py-2 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out " >
            <a href="http://127.0.0.1:8000/chatify/"
            onclick="location.href=this.href+{{$product->user_id}};return false;">
            Chat Now
            </a>
        </button>


      </div>
    </div>


