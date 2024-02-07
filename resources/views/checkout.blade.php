<!DOCTYPE html>
<html class="border-l" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        fieldset label span {
            min-width: 125px;
        }
        fieldset .select::after {
            content: '';
            position: absolute;
            width: 9px;
            height: 5px;
            right: 20px;
            top: 50%;
            margin-top: -2px;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='9' height='5' viewBox='0 0 9 5'><title>Arrow</title><path d='M.552 0H8.45c.58 0 .723.359.324.795L5.228 4.672a.97.97 0 0 1-1.454 0L.228.795C-.174.355-.031 0 .552 0z' fill='%23CFD7DF' fill-rule='evenodd'/></svg>");
            pointer-events: none;
        }
    </style>
</head>
<body>
    <header class="flex flex-wrap">
        <nav class="flex w-screen justify-between bg-gray-50 text-gray-600">
            <div class="w-full xl:px-12 py-6 px-5 flex space-x-12 items-center ">
                <a class="text-2xl font-bold" href="#">
                    Agri-Products
                </a>
                <ul class="hidden md:flex mx-auto px-5 font-semibold space-x-12">
                    <li><a class="hover:text-gray-900 font-bold" href="http://127.0.0.1:8000/">Home</a></li>
                    <li><a class="hover:text-gray-900 font-bold" href="http://127.0.0.1:8000/">Products</a></li>
                    <li><a class="hover:text-gray-900 font-bold" href="/contactus">Contact Us</a></li>
                    <li><a class="hover:text-gray-900 font-bold" href="/login">Sign in</a></li>
                </ul>

                    <div class="flex items-center justify-center ">

                            <button class="px-6 py-1 text-black  bg-green-400 border-l animate-pulse font-bold rounded-full text-xl border-black border-2 flex items-center justify-centercClass Properties
                            font-serif " onclick="window.location.href='http://127.0.0.1:8000/search-with-pagination'">
                               Search for a Product
                                <svg class="w-5 h-5 text-black-600 ml-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                </svg>

                            </button>

                    </div>

                <div class="hidden xl:flex text-blue-600 space-x-6 items-center">

                    <a class="flex items-center hover:text-gray-900" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <p class="ml-5 font-bold ">Your Cart Details</p>
                        <span class="absolute flex ml-4 -mt-5">
                            <span class="h-3 w-3 animate-ping absolute inline-flex rounded-full bg-pink-500 opacity-75"></span>
                            <span class="h-3 w-3 relative inline-flex rounded-full bg-pink-600"></span>
                        </span>
                    </a>
                </div>
            </div>
            <a class="flex xl:hidden items-center mr-6 hover:text-gray-900" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="flex absolute -mt-5 ml-4">
                  <span class="h-3 w-3 absolute bg-pink-500 opacity-75 inline-flex rounded-full animate-ping"></span>
                  <span class="h-3 w-3 relative inline-flex rounded-full bg-pink-600"></span>
                </span>
            </a>
            <a class="xl:hidden self-center mr-12 hover:text-gray-900" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </a>
        </nav>
    </header>
    <div class="h-screen grid grid-cols-3">
        <div class="lg:col-span-2 col-span-3 bg-indigo-50 space-y-8 px-12">
            <div class="mt-8 p-4 relative flex flex-col sm:flex-row sm:items-center bg-white shadow rounded-md">
                <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                    <div class="text-yellow-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 sm:w-5 h-6 sm:h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="text-sm font-medium ml-3">Checkout</div>
                </div>
                <div class="text-sm tracking-wide text-gray-500 mt-4 sm:mt-0 sm:ml-4">Complete your delivery details below.</div>
                <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </div>
            </div>
            <div class="rounded-md">
                @if(Session::has('success'))
                <div class="alert alert-success text-center text-green-600 text-lg" >
                    {{Session::get('success')}}
                </div>
                @endif

                @if(Session::has('error'))
                <div class="alert alert-success text-center text-red-600 text-lg" >
                    {{Session::get('error')}}
                </div>
                @endif

                <form  method="post" action="{{url('/contact')}}">
                    @csrf
                    <section>
                        <?php
                        use Illuminate\Support\Facades\Auth;
                        $name=Auth::user()->name;
                        $email=Auth::user()->email;
                        ?>
                        <h2 class="uppercase tracking-wide text-lg font-semibold text-gray-700 my-2">Delivering Information</h2>
                        <fieldset class="mb-3 bg-white shadow-lg rounded text-gray-600">
                            <label class="flex border-b border-gray-200 h-12 py-3 items-center">
                                <span class="text-right px-2">Name</span>
                                <input name="name" value={{$name}} class="focus:outline-none px-3" placeholder="Enter your name" required="" id="name" required="">
                            </label>
                            <label class="flex border-b border-gray-200 h-12 py-3 items-center">
                                <span class="text-right px-2">Email</span>
                                <input name="email" type='email' value={{$email}} class="focus:outline-none px-3" placeholder="Enter your Email Address" required="" id="email" required="">
                            </label>
                            <label class="flex border-b border-gray-200 h-12 py-3 items-center">
                                <span class="text-right px-2">Address</span>
                                <input name="address" class="focus:outline-none px-3" placeholder="Enter Delivery Address" id="address" required="">
                            </label>
                            <label class="flex border-b border-gray-200 h-12 py-3 items-center">
                                <span class="text-right px-2">City</span>
                                <input name="city" class="focus:outline-none px-3" placeholder="Your Nearest City" id="city" >
                            </label>

                            <label class="xl:w-1/4 xl:inline-flex  items-center flex xl:border-none border-t border-gray-200 py-3">
                                <span class="text-right px-2 xl:px-0 xl:text-none">Contact No</span>
                                <input name="phone" class="focus:outline-none px-3" placeholder="Enter Phone Number" id="phone" required="">
                            </label>
                            <label class="flex border-t border-gray-200 h-12 py-3 items-center select relative">
                                <span class="text-right px-2">District</span>
                                <div id="district" class="focus:outline-none px-3 w-full flex items-center">
                                    <select name="district" class="border-none bg-transparent flex-1 cursor-pointer appearance-none focus:outline-none" id="district">
                                        <option value="Matale">Matale</option>
                                        <option value="Kandy">Kandy</option>
                                        <option value="Nuwara-Eliya">Nuwara-Eliya</option>
                                        <option value="Colombo">Colombo</option>
                                        <option value="Gampaha">Gampaha</option>
                                        <option value="Kalutara">Kalutara</option>
                                        <option value="Matara">Matara</option>
                                        <option value="Hambantota">Hambantota</option>
                                        <option value="Jaffna" selected="selected">Jaffna</option>
                                        <option value="Kilinochchi">Kilinochchu</option>
                                        <option value="Vavuniya">Vavuniya</option>
                                        <option value="Mannar">Mannar</option>
                                        <option value="Mullaitivu">Mullaitivu</option>
                                        <option value="Batticoloa">Batticaloa</option>
                                        <option value="Trincomalee">Trincomalee</option>
                                        <option value="Anuradhapura">Anuaradhapura</option>
                                        <option value="Polonnaruwa">Pollonnaruwa</option>
                                        <option value="Galle">Galle</option>
                                        <option value="Puttalam">Puttalam</option>
                                        <option value="Monaragala">Monaragala</option>
                                        <option value="Badulla">Badulla</option>
                                    </select>
                                </div>
                            </label>
                        </fieldset>
                    </section>
                    <button type="submit" class="submit-button px-4 py-3 rounded-full bg-pink-400 text-white focus:ring focus:outline-none w-full text-xl font-semibold transition-colors" value="submit" name="send" >
                        Order Now
                    </button>
                </form>

            </div>
        </div>
        <div class="col-span-1 bg-white lg:block hidden  ">
            <table id="cart" class="table table-hover table-condensed">
                <thead class="border-solid border-2">
                    <tr>
                        <th style="width:50%" class="border-solid border-2">Product</th>
                        <th style="width:10%" class="border-solid border-2">Price</th>
                        <th style="width:8%" class="border-solid border-2">Quantity</th>
                        <th style="width:22%">Subtotal</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0 @endphp
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp

                            <tr data-id="{{ $id }}">
                                <td data-th="Product">
                                    <div class="row ml-3 mr-7">
                                        <div class="col-sm-3 hidden-xs mt-3"> <img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                                        <div class="col-sm-9">
                                            <h4 class="nomargin ml-5 mb-3">{{ $details['name'] }}</h4>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">
                                    <div class="row ml-3 mr-3">
                                        <div class="col-sm-9">
                                            <h4 class="nomargin ml-5 mb-3">Rs.{{ $details['price'] }}/-</h4>
                                        </div>
                                    </div>
                                </td>

                                <td data-th="Quantity">
                                    <div class="row ml-3 mr-5">
                                        <div class="col-sm-9">
                                            <h4 class="nomargin ml-7 mb-3 mr-10">{{ $details['quantity'] }}</h4>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr class="border-solid border-2">
                        <td colspan="5" class="text-right"><h3 class="mr-5"><strong> Rs.{{ $total }}/-</strong></h3></td>
                    </tr>


                </tfoot>
            </table>
</body>
</html>
