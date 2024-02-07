<?php
use Carbon\Carbon;
$published_at= Carbon::now();
?>

<div class="p-1 w-full cursor-pointer rounded-md shadow-md shadow-gray-200 hover:shadow-blue-400 hover:shadow-2xl hover:bg-gray-50 ">

    <img class="aspect-video bg-cover w-full rounded-t-md min-h-40" src="{{$product->featured_image}}" />
    <div class="p-2 ">
        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $product->pricingStructureLabel }}</h3>
        <p class="font-semibold text-lg ">Seller Name - {{$product->seller->name}}</p>
        <p class="text-blue-600 font-semibold text-lg "> Product Name - {{$product->title}}</span>
    </div>

    @if (($product->pricingStructureLabel != 'SPECIAL DEAL') && ($product->pricingStructureLabel != 'BID'))
    <div class="p-2 ">
        <div>
            <p class=" text-justify line-clamp-1 text-lg text-red-600 font-semibold"> Discounted Price {{$product->description}} - Rs.{{$product->price}}/-</p>
            <p class=" text-justify line-clamp-1 text-lg text-green-600 font-semibold"> Contact No - {{$product->contact_no}} </p>
            <div class="flex items-left">
                <button class="mx-3 lg:mx-1 hover: gradient text-grey-500  font-bold rounded-full my-6 py-2 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.location.href='{{ route('add.to.cart', $product->id) }}'">
                    Add to cart

                </button>

                <button class=" lg:mx-2 hover: gradient text-grey-500  font-bold rounded-full mx-5 my-6 py-2 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <a href="http://127.0.0.1:8000/chatify/"
                    onclick="location.href=this.href+{{$product->user_id}};return false;">
                    Chat Now
            </a>
                </button>
              </div>
        </div>
    </div>
    @endif

    @if ($product->pricingStructureLabel == 'SPECIAL DEAL')
    <div class="p-2">
    <p class=" text-justify  text-lg text-red-600 font-semibold break-normal "> Special Price {{$product->description}} - Rs.{{$product->price}}/-</p>
    <p class=" text-justify line-clamp-1 text-lg text-green-600 font-semibold"> Contact No - {{$product->contact_no}} </p>
    </div>
    <div class="flex items-left">
        <button class="  lg:mx-3 hover: gradient text-grey-500 font-bold rounded-full my-6 py-2 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.location.href='{{ route('add.to.cart', $product->id) }}'">
            Add to cart
        </button>

        <button class=" lg:mx-0 hover: gradient text-grey-500 font-bold rounded-full mx-5 my-6 py-2 px-4 shadow-lg focus:outline-none  focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <a href="http://127.0.0.1:8000/chatify/"
            onclick="location.href=this.href+{{$product->user_id}};return false;">
            Chat Now
            </a>
        </button>
      </div>

    @endif




    @if ($product->pricingStructureLabel == 'BID')
    @if($product->pricingStructure->ends_at>=$published_at)
    <div class="p-2">
    <div>

            <div>
            <p class=" text-justify line-clamp-1 text-lg text-green-600 font-semibold"> Contact No - {{$product->contact_no}} </p>

            <form name="Bid" id="Bid" method="post" action="{{route('biding', $product->id)}}">
                @csrf
                <p class=" text-justify  text-lg text-red-600 font-semibold break-normal ">Base Price {{$product->description}} - Rs.{{$product->price}}/-</p>
                <p class=" text-justify  text-lg text-gray-600 font-semibold break-normal"> Biding Quantity - {{$product->quantity_in_hand}} Kg</p>
                <input type="text" id="biding_price" name='biding_price' class="text-center bg-gray-50 border-4 w-45 py-1 mt-2  border-blue-300  text-black-600 text-lg  rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-blue-600 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" Enter Biding Price" required  >
             </div>
        <div class="mt-2">
            <p class ="text-red-600 font-semibold">Biding Closing Date</p>
          </div>
          <p>{{ $product->pricingStructure->ends_at->format('M d,Y') }} {{ $product->pricingStructure->ends_at->format('h:i A') }}</p>

    </div>
    <div class="flex items-left">
        <button type="submit" class=" lg:mx-3 hover: gradient text-grey-500 font-bold rounded-full my-6 py-2 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          Bid Now
        </button>
    </form>
        <button class=" lg:mx-0 hover: gradient text-grey-500  font-bold rounded-full mx-5 my-6 py-2 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out " >
            <a  href="http://127.0.0.1:8000/chatify/"
            onclick="location.href=this.href+{{$product->user_id}};return false;">
            Chat Now
            </a>
        </button>
      </div>
    </div>
    @else
    <p class=" text-justify line-clamp-1 text-lg text-green-600 font-semibold ml-2"> Contact No - {{$product->contact_no}} </p>
    <div class="mt-1">
        <p class ="text-red-600 font-semibold ml-2 text-lg mt-1">Biding Closed for this Product</p>
        <p class ="text-yellow-600 font-semibold ml-2 text-lg mt-2">Await for further Biding Updates..</p>
      </div>
      @endif
      @endif
</div>

