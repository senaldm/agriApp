<html>
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

<section>
    <nav class="bg-red-300 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-blue-500">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
          <a href="" class="flex items-center">

              <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white font-serif ">Agriculture Products Management System</span>
          </a>
          <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-blue-500 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
              <li>
                <a href="/" class=" text-lg block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 font-serif dark:text-gray-400 font-semibold md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
              </li>
              <li>
                <a href="/contactus" class=" font-serif font-semibold  text-lg block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact us</a>
              </li>
              <li>
                <a href="/login" class=" font-serif font-semibold text-lg block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Login</a>
              </li>
              <li>
                <a href="/register" class=" font-serif font-semibold text-lg block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Register</a>
              </li>
              <li>
                <a href="/About" class=" font-serif font-semibold text-lg block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="relative items-center w-full px-5 py-5 mx-auto md:px-12 lg:px-24 max-w-7xl">

        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800"> <p class= "font-bold font-serif text-4xl text-center py-8 "> Available Featured Product Categories </h3>

      <div class="relative mx-auto max-w-7xl">
        <div class="grid max-w-lg gap-12 mx-auto mt-0 lg:grid-cols-3 lg:max-w-none">
          <div class="flex flex-col mb-0 overflow-hidden cursor-pointer">
            <a href="/Vegetables">
              <div class="flex-shrink-0">
                <img class="object-cover w-full h-48 rounded-lg  border-4 border-blue-600" src="https://cdn.britannica.com/17/196817-050-6A15DAC3/vegetables.jpg" alt="Vegetables" >

            </div>
            </a>
            <div class="flex flex-col justify-between flex-1">

              <div class="flex-1">

                  <div class="flex pt-0 space-x-1 text-sm text-gray-500">
                    <span aria-hidden="true"> · </span>
                    <span> </span>
                  </div>
                </a><div class="flex items-center justify-center">
                    <button class=" font-serif mx-auto lg:mx-0 hover: gradient border-4 border-blue-600  text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out text-xl" onclick="window.location.href='/Vegetables'">
                      Vegetables
                    </button>
                  </div>

              </div>
            </div>
          </div>
          <div class="flex flex-col mb-0 overflow-hidden cursor-pointer">
            <a href="/Fruits">
              <div class="flex-shrink-0">
                <img class="object-cover w-full h-48 rounded-lg border-4 border-blue-600" src="https://www.worldatlas.com/r/w1200/upload/46/cb/e1/shutterstock-252338818.jpg" alt="">
              </div>
            </a>
            <div class="flex flex-col justify-between flex-1">

              <div class="flex-1">

                  <div class="flex pt-0 space-x-1 text-sm text-gray-500">
                    <span aria-hidden="true"> · </span>
                    <span> </span>
                  </div>
                </a> <div class="flex items-center justify-center">
                    <button class=" font-serif mx-auto lg:mx-0 hover: gradient border-4 border-blue-600 text-xl text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.location.href='/Fruits'">
                      Fruits
                    </button>
                  </div>

              </div>
            </div>
          </div>
          <div class="flex flex-col mb-0overflow-hidden cursor-pointer">
            <a href="/Spices">
              <div class="flex-shrink-0">
                <img class="object-cover w-full h-48 rounded-lg border-4 border-blue-600" src="https://cdn.britannica.com/86/157986-050-D84944DF/indian-spices.jpg" alt="">
              </div>
            </a>
            <div class="flex flex-col justify-between flex-1">

              <div class="flex-1">

                  <div class="flex pt-0 space-x-1 text-sm text-gray-500">
                  <span aria-hidden="true"> · </span>
                    <span>  </span>
                  </div>
                </a><div class="flex items-center justify-center">
                    <button class="font-serif mx-auto lg:mx-0 hover: gradient border-4 border-blue-600 text-xl text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.location.href='/Spices'">
                      Spices
                    </button>
                  </div>

              </div>
            </div>
          </div><div class="flex flex-col mb-0 overflow-hidden cursor-pointer">
            <a href="/Crops">
              <div class="flex-shrink-0">
                <img class="object-cover w-full h-48 rounded-lg border-4 border-blue-600" src="https://image.shutterstock.com/image-photo/coconut-perfume-young-small-trees-260nw-1172519881.jpg" alt="">
              </div>
            </a>
            <div class="flex flex-col justify-between flex-1">

              <div class="flex-1">

                  <div class="flex pt-0 space-x-1 text-sm text-gray-500">

                    <span aria-hidden="true"> · </span>
                    <span>  </span>
                  </div>
                </a><div class="flex items-center justify-center">
                    <button class="font-serif mx-auto lg:mx-0 hover: gradient border-4 border-blue-600 text-xl text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.location.href='/Crops'">
                      Crops
                    </button>
                  </div>

              </div>
            </div>
          </div>

          <div class="flex flex-col mb-0 overflow-hidden cursor-pointer">
            <a href="/Groceries">
              <div class="flex-shrink-0">
                <img class="object-cover w-full h-48 rounded-lg border-4 border-blue-600" src="https://thumbs.dreamstime.com/b/small-nepal-store-colorful-local-lentil-legume-products-farmers-nepalese-grocery-store-local-agriculture-175528759.jpg" alt="">
              </div>
            </a>
            <div class="flex flex-col justify-between flex-1">

              <div class="flex-1">

                  <div class="flex pt-2 space-x-1 text-sm text-gray-500">

                    <span aria-hidden="true"> · </span>
                    <span>  </span>
                  </div>
                </a><div class="flex items-center justify-center">
                    <button class="font-serif mx-auto lg:mx-0 hover: gradient border-4 border-blue-600 text-xl text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.location.href='/Groceries'">
                      Groceries
                    </button>
                  </div>

              </div>
            </div>
          </div>

          <div class="flex flex-col mb-0 overflow-hidden cursor-pointer">
            <a href="/Handicrafts">
              <div class="flex-shrink-0">
                <img class="object-cover w-full h-48 rounded-lg border-4 border-blue-600" src="https://www.thespruceeats.com/thmb/q8EEeyTTV04_cRzNIeSox1P09m8=/1500x1118/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-98003730-084251215b004990bbb94565daf4d479.jpg" alt="">
              </div>
            </a>
            <div class="flex flex-col justify-between flex-1">

              <div class="flex-1">

                  <div class="flex pt-0 space-x-1 text-sm text-gray-500">

                    <span aria-hidden="true"> · </span>
                    <span>  </span>
                  </div>
                </a><div class="flex items-center justify-center">
                    <button class=" font-serif mx-auto lg:mx-0 hover: gradient border-4 border-blue-600 text-xl text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.location.href='/Coconut'">
                        Coconuts
                    </button>
                  </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>


</html>
