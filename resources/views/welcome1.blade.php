<x-app-layout>
    <div class="pt-5 min-h-screen  bg-repeat-x " style= "background-image:url(https://i.pinimg.com/564x/c3/ab/7a/c3ab7a9954e439a20dd2ca89b4566c0d.jpg);">
        <p class="text-center text-2xl underline  text-black font-serif py-10 font-semibold"><marquee behavior="alternate" scrollamount="5"  width = "48%" bgcolor="25F804"> Welcome to Agri Products Management System </marquee></p>
        <div class="flex items-center justify-center">
            <div>
                <button class="px-6 py-1  text-black animate-bounce bg-green-200  hover:bg-blue-300 border-l font-bold rounded-full text-xl border-black border-2 flex items-center justify-centercClass Properties
                font-serif " onclick="window.location.href='/search-with-pagination'">

                   Search for a Product
                    <svg class="w-5 h-5 text-black-600 ml-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                    </svg>

                </button>
            </div>
        </div>

        <div class="flex justify-center">
          </div>
        <p class="text-left text-2xl font-semibold text-white px-7 py-1 font-serif animate-pulse pt-5 "> <mark> Hurry....Choose your Products Now!!!! </p>
            <div class="container">
                <div class="container ">
                    @if(session('status'))
                    <div class="bg-green-100 rounded-lg py-3 px-6  text-center text-black-700 mb-1 width-180 ml-12 mt-4"  role="alert">
                        {{ session('status') }}
                      </div>
                    @endif
                </div>

                @if(session('success'))
                <div class="bg-green-100 rounded-lg py-1 px-6  text-center text-black-700 mb-1 width-180 ml-12 mt-4"  role="alert">
                    Your Product has been added to cart successfully. To view the cart click on
                    <li class="font-sans block mt-4 lg:inline-block lg:mt-0 lg:ml-1 align-middle text-black hover:text-gray-700">
                        <a href="cart" role="button" class="relative flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="absolute flex ml-3 mb-3">
                                <span class="h-3 w-3 animate-ping absolute inline-flex rounded-full bg-pink-500 opacity-75"></span>
                                <span class="h-3 w-3 relative inline-flex rounded-full bg-pink-600"></span>
                            </span>
                        </a>
                      </li>
                  </div>

                    </div>
                @endif

    <div class="container p-4 gap-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 select-none ml-8">
            @forelse ($products as $product)
            <livewire:product-card1 :product="$product" />
            @empty

            @endforelse
        </div>
        <div class="mt-4">

            {{ $products->links() }}

        </div>

    </div>
</x-app-layout>


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
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 mb-8 text-white">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between  py-2">
        <div class="pl-4 flex items-center">
          <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
            <!--Icon from: http://www.potlabicons.com/ -->

          </a>
        </div>
        <div class="block lg:hidden pr-4 ">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
                <a class="inline-block py-2 px-4 text-yellow-300 font-bold no-underline hover:text-green-300"  href="/About">About us</a>
              </li>
              <li class="mr-3">
                <a class="inline-block text-yellow-300 no-underline hover:text-green-300 hover:text-underline py-2 px-3 font-bold" href="/login">Sign in</a>
              </li>
              <li class="mr-3">
                <a class="inline-block text-yellow-300 no-underline hover:text-green-300 hover:text-underline py-2 px-3 font-bold" href="/register">Sign up</a>
              </li>
              <li class="mr-3">
                <a class="inline-block text-yellow-300 no-underline hover:text-green-300 hover:text-underline py-2 px-3 font-bold" href="/chatify">Chat</a>
              </li>
              <li class="mr-3">
                  <a class="inline-block text-yellow-300 no-underline hover:text-green-300 hover:text-underline py-2 px-3 font-bold" href="cart">Cart</a>
                </li>
                <li class="mr-3">
                  <a class="inline-block text-yellow-300 no-underline hover:text-green-300 hover:text-underline py-2 px-3 font-bold" href="/Categories">Categories</a>
                </li>
                <li class="mr-3">
                  <a class="inline-block text-yellow-300 no-underline hover:text-green-300 hover:text-underline py-2 px-3 font-bold" href="/Trend">Trendings</a>
                </li>
                <li class="mr-3">
                  <a class="inline-block text-yellow-300 no-underline hover:text-green-300 hover:text-underline py-2 px-3 font-bold" href="/Latest">New Arrivals</a>
                </li>
                <li class="mr-3">
                  <a class="inline-block text-yellow-300 no-underline hover:text-green-300 hover:text-underline py-2 px-3 font-bold" href="/Bid">Biding Products</a>
                </li>
                <li class="mr-3">
                  <a class="inline-block text-yellow-300 no-underline hover:text-green-300 hover:text-underline py-2 px-3 font-bold" href="/contactus">Contact us</a>
                </li>
                <li class="mr-3">
                  <a class="inline-block text-yellow-300 no-underline hover:text-green-300 hover:text-underline py-2 px-3 font-bold" href="/Subscribe">Subscribe us</a>
                </li>
                <li class="mr-3">
                  <button class="bg-green-100 hover:bg-purple-100 text-black font-bold  px-2 rounded-full" onclick="window.location.href='/welcome1'">
                      Contact Seller
                    </button>
                </li>
          </ul>

        </div>
      </div>

    </nav>

    <section>
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
                        <button class="mx-auto lg:mx-0 hover: gradient border-4 border-blue-600  text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out text-xl" onclick="window.location.href='/Vegetables'">
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
                        <button class="mx-auto lg:mx-0 hover: gradient border-4 border-blue-600 text-xl text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.location.href='/Fruits'">
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
                        <button class="mx-auto lg:mx-0 hover: gradient border-4 border-blue-600 text-xl text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.location.href='/Spices'">
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
                        <button class="mx-auto lg:mx-0 hover: gradient border-4 border-blue-600 text-xl text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.location.href='/Crops'">
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
                        <button class="mx-auto lg:mx-0 hover: gradient border-4 border-blue-600 text-xl text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.location.href='/Groceries'">
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
                        <button class="mx-auto lg:mx-0 hover: gradient border-4 border-blue-600 text-xl text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.location.href='/Coconut'">
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
    <section>
    <section>





          <!-- using two similar templates for simplicity in js code -->
          <template id="file-template">
            <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
              <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

                <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                  <h1 class="flex-1 group-hover:text-blue-800"></h1>
                  <div class="flex">
                    <span class="p-1 text-blue-800">
                      <i>
                        <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                          <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                        </svg>
                      </i>
                    </span>
                    <p class="p-1 size text-xs text-gray-700"></p>
                    <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                      <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                      </svg>
                    </button>
                  </div>
                </section>
              </article>
            </li>
          </template>

          <template id="image-template">
            <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
              <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

                <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                  <h1 class="flex-1"></h1>
                  <div class="flex">
                    <span class="p-1">
                      <i>
                        <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                          <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                        </svg>
                      </i>
                    </span>

                    <p class="p-1 size text-xs"></p>
                    <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                      <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                      </svg>
                    </button>
                  </div>
                </section>
              </article>
            </li>
          </template>

      <script>
      const fileTempl = document.getElementById("file-template"),
        imageTempl = document.getElementById("image-template"),
        empty = document.getElementById("empty");

      // use to store pre selected files
      let FILES = {};

      // check if file is of type image and prepend the initialied
      // template to the target element
      function addFile(target, file) {
        const isImage = file.type.match("image.*"),
          objectURL = URL.createObjectURL(file);

        const clone = isImage
          ? imageTempl.content.cloneNode(true)
          : fileTempl.content.cloneNode(true);

        clone.querySelector("h1").textContent = file.name;
        clone.querySelector("li").id = objectURL;
        clone.querySelector(".delete").dataset.target = objectURL;
        clone.querySelector(".size").textContent =
          file.size > 1024
            ? file.size > 1048576
              ? Math.round(file.size / 1048576) + "mb"
              : Math.round(file.size / 1024) + "kb"
            : file.size + "b";

        isImage &&
          Object.assign(clone.querySelector("img"), {
            src: objectURL,
            alt: file.name
          });

        empty.classList.add("hidden");
        target.prepend(clone);

        FILES[objectURL] = file;
      }

      const gallery = document.getElementById("gallery"),
        overlay = document.getElementById("overlay");

      // click the hidden input of type file if the visible button is clicked
      // and capture the selected files
      const hidden = document.getElementById("hidden-input");
      document.getElementById("button").onclick = () => hidden.click();
      hidden.onchange = (e) => {
        for (const file of e.target.files) {
          addFile(gallery, file);
        }
      };

      // use to check if a file is being dragged
      const hasFiles = ({ dataTransfer: { types = [] } }) =>
        types.indexOf("Files") > -1;

      // use to drag dragenter and dragleave events.
      // this is to know if the outermost parent is dragged over
      // without issues due to drag events on its children
      let counter = 0;

      // reset counter and append file to gallery when file is dropped
      function dropHandler(ev) {
        ev.preventDefault();
        for (const file of ev.dataTransfer.files) {
          addFile(gallery, file);
          overlay.classList.remove("draggedover");
          counter = 0;
        }
      }

      // only react to actual files being dragged
      function dragEnterHandler(e) {
        e.preventDefault();
        if (!hasFiles(e)) {
          return;
        }
        ++counter && overlay.classList.add("draggedover");
      }

      function dragLeaveHandler(e) {
        1 > --counter && overlay.classList.remove("draggedover");
      }

      function dragOverHandler(e) {
        if (hasFiles(e)) {
          e.preventDefault();
        }
      }

      // event delegation to caputre delete events
      // fron the waste buckets in the file preview cards
      gallery.onclick = ({ target }) => {
        if (target.classList.contains("delete")) {
          const ou = target.dataset.target;
          document.getElementById(ou).remove(ou);
          gallery.children.length === 1 && empty.classList.remove("hidden");
          delete FILES[ou];
        }
      };

      // print all selected files
      document.getElementById("submit").onclick = () => {
        alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
        console.log(FILES);
      };

      // clear entire selection
      document.getElementById("cancel").onclick = () => {
        while (gallery.children.length > 0) {
          gallery.lastChild.remove();
        }
        FILES = {};
        empty.classList.remove("hidden");
        gallery.append(empty);
      };

      </script>

      <style>
      .hasImage:hover section {
        background-color: rgba(5, 5, 5, 0.4);
      }
      .hasImage:hover button:hover {
        background: rgba(5, 5, 5, 0.45);
      }

      #overlay p,
      i {
        opacity: 0;
      }

      #overlay.draggedover {
        background-color: rgba(255, 255, 255, 0.7);
      }
      #overlay.draggedover p,
      #overlay.draggedover i {
        opacity: 1;
      }

      .group:hover .group-hover\:text-blue-800 {
        color: #2b6cb0;
      }
      </style>

<!-- Section 1 -->
<section class="py-20 bg-white">
    <div class="container max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold tracking-tight text-center">Our Features</h2>
        <p class="mt-2 text-lg text-center text-gray-600">Check out our list of awesome features below.</p>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

            <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-red-400 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14 3v4a1 1 0 0 0 1 1h4"></path><path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path><circle cx="6" cy="14" r="3"></circle><path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Instant Chat Service</h4>
                <p class="text-base text-center text-gray-500">We provide instant Chat service between our users. A Customer can contact  a seller at any time Easily via our Chatify messaging Feature. </p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-red-400 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M18 8a3 3 0 0 1 0 6"></path><path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5"></path><path d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8"></path></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Notifications</h4>
                <p class="text-base text-center text-gray-500">We Send out notifications about the products to all your customers to keep them engaged.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-red-400 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline><line x1="12" y1="12" x2="20" y2="7.5"></line><line x1="12" y1="12" x2="12" y2="21"></line><line x1="12" y1="12" x2="4" y2="7.5"></line><line x1="16" y1="5.25" x2="8" y2="9.75"></line></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Selling Services</h4>
                <p class="text-base text-center text-gray-500">We allow farmers to upload details of their Agriculture products and Our customers can order them via our website.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-red-400 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9l3 3l-3 3"></path><line x1="13" y1="15" x2="16" y2="15"></line><rect x="3" y="4" width="18" height="16" rx="2"></rect></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Biding Services</h4>
                <p class="text-base text-center text-gray-500">Each Farmer who uploads products to our site can bid the products to wholesale traders on a wholesale basis.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-red-400 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="9.5" y1="11" x2="9.51" y2="11"></line><line x1="14.5" y1="11" x2="14.51" y2="11"></line><path d="M9.5 15a3.5 3.5 0 0 0 5 0"></path><path d="M7 5h1v-2h8v2h1a3 3 0 0 1 3 3v9a3 3 0 0 1 -3 3v1h-10v-1a3 3 0 0 1 -3 -3v-9a3 3 0 0 1 3 -3"></path></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Cheapest Prices in the Market</h4>
                <p class="text-base text-center text-gray-500"> We provide Farming products at the cheapest rates in the market</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-red-400 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="15" y1="5" x2="15" y2="7"></line><line x1="15" y1="11" x2="15" y2="13"></line><line x1="15" y1="17" x2="15" y2="19"></line><path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2"></path></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Special Offers</h4>
                <p class="text-base text-center text-gray-500">We provide Special offers to Agriculture products on a weekly basis</p>
            </div>

        </div>
    </div>
</section>

<section class="flex items-center justify-center py-5 bg-white min-w-screen">
    <div class="px-5 bg-white">
        <div class="container flex flex-col items-start mx-auto lg:items-center">
            <p class="relative flex items-start justify-start w-full text-lg font-bold tracking-wider text-purple-500 uppercase lg:justify-center lg:items-center">Don't just take our word for it</p>

            <h2 class="relative flex items-start justify-start w-full max-w-3xl text-5xl font-bold lg:justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute right-0 hidden w-12 h-12 -mt-2 -mr-16 text-gray-200 lg:inline-block" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                </path>
            </svg>
                See what others are saying</h2>
                <div class="block w-full h-0.5 max-w-lg mt-6 bg-purple-100 rounded-full"></div>

            <div class="items-center justify-center w-full mt-12 mb-4 lg:flex">
                <div class="flex flex-col items-start justify-start w-full h-auto mb-12 lg:w-1/3 lg:mb-0">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                            <img src="https://drive.google.com/uc?export=view&id=1ZJlFrD5jSRIJab83_zEogSvuTMx3_RXP" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col items-start justify-center">
                            <h4 class="font-bold text-gray-800">Ramana</h4>
                            <p class="text-gray-600">Computer Science Undrergraduate</p>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-500">"This is a no-brainer if you want to take your business to the next level. If you are looking for the ultimate toolset, this is it!"</blockquote>
                </div>
                <div class="flex flex-col items-start justify-start w-full h-auto px-0 mx-0 mb-12 border-l border-r border-transparent lg:w-1/3 lg:mb-0 lg:px-8 lg:mx-8 lg:border-gray-200">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                            <img src="https://drive.google.com/uc?export=view&id=1H1NZUn1PP1Nq_KBG7e4Fp6GVdPLpw0Cd" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col items-start justify-center">
                            <h4 class="font-bold text-gray-800">Thilanka</h4>
                            <p class="text-gray-600">Teacher</p>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-500">"Thanks for creating this service. My life is so much
                        easier.
                        Thanks for making such a great product."</blockquote>
                </div>
                <div class="flex flex-col items-start justify-start w-full h-auto lg:w-1/3">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                            <img src="https://drive.google.com/uc?export=view&id=1s7J6rF7cuxV9VURP4I2gqf14CiU75tLI" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col items-start justify-center">
                            <h4 class="font-bold text-gray-800">Rashmi</h4>
                            <p class="text-gray-600">Undergraduate</p>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-500">"Packed with awesome content and exactly what I was
                        This web app looking
                        really looks good and Awesome. I would highly recommend this to anyone."</blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3 -->
<section class="relative py-20 overflow-hidden bg-white">
    <span class="absolute top-0 right-0 flex flex-col items-end mt-0 -mr-16 opacity-60">
        <span class="container hidden w-screen h-32 max-w-xs mt-20 transform rounded-full rounded-r-none md:block md:max-w-xs lg:max-w-lg 2xl:max-w-3xl bg-blue-50"></span>
    </span>

    <span class="absolute bottom-0 left-0"> </span>

    <div class="relative px-8 mx-auto max-w-7xl">
        <p class="font-medium tracking-wide text-blue-500 uppercase">OUR TEAM</p>
        <h2 class="relative max-w-lg mt-5 mb-10 text-4xl font-semibold leading-tight lg:text-5xl">An incredible team of <br>amazing individuals</h2>
        <div class="grid w-full grid-cols-2 gap-10 sm:grid-cols-3 lg:grid-cols-4">
            <div class="flex flex-col items-center justify-center col-span-1">
                <div class="relative p-5">
                    <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-blue-50"></div>
                    <img class="relative z-20 w-full rounded-full" src="https://drive.google.com/uc?export=view&id=1ZJlFrD5jSRIJab83_zEogSvuTMx3_RXP">
                </div>
                <div class="mt-3 space-y-2 text-center">
                    <div class="space-y-1 text-lg font-medium leading-6">
                        <h3>Rangan Ramanaruban</h3>
                        <p class="text-blue-600">Project Manager</p>
                    </div>
                    <div class="relative flex items-center justify-center space-x-3">
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center col-span-1">
                <div class="relative p-5">
                    <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-green-50"></div>
                    <img class="relative z-20 w-full rounded-full" src="https://drive.google.com/uc?export=view&id=1H1NZUn1PP1Nq_KBG7e4Fp6GVdPLpw0Cd">
                </div>
                <div class="mt-3 space-y-2 text-center">
                    <div class="space-y-1 text-lg font-medium leading-6">
                        <h3>Thilanka Jayasinghe</h3>
                        <p class="text-blue-600">Tech Lead</p>
                    </div>
                    <div class="relative flex items-center justify-center space-x-3">
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center col-span-1">
                <div class="relative p-5">
                    <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-pink-50"></div>
                    <img class="relative z-20 w-full rounded-full" src="https://drive.google.com/uc?export=view&id=1Hb8wx5pwLlrXDmm8a4QEg0kCo72Yi7YX">
                </div>
                <div class="mt-3 space-y-2 text-center">
                    <div class="space-y-1 text-lg font-medium leading-6">
                        <h3>Shasini Piumali</h3>
                        <p class="text-blue-600">UI Designer</p>
                    </div>
                    <div class="relative flex items-center justify-center space-x-3">
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center col-span-0">
                <div class="relative p-5">
                    <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-green-50"></div>
                    <img class="relative z-20 w-full rounded-full" src="https://drive.google.com/uc?export=view&id=1gb58mC-PtAgQj0bVZH8ZRBRvkP7TsHxr">
                </div>
                <div class="mt-3 space-y-2 text-center">
                    <div class="space-y-1 text-lg font-medium leading-6">
                        <h3>Oshadi Viranga</h3>
                        <p class="text-blue-600">Backend Developer</p>
                    </div>
                    <div class="relative flex items-center justify-center space-x-3">
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>



             <div class="flex items-center justify-center ">
                <div class="relative p-5">
                    <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-green-50 "></div>
                    <img class="relative z-20 w-full rounded-full " src="https://drive.google.com/uc?export=view&id=1s7J6rF7cuxV9VURP4I2gqf14CiU75tLI">
                </div>
                <div class="mt-3 space-y-2 text-center">
                    <div class="space-y-1 text-lg font-medium leading-6">

                        <h3>Rashmi Raveena</h3>
                        <p class="text-blue-600">UI Designer</p>
                    </div>
                    <div class="relative flex items-center justify-center space-x-3">
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                        </a>

                 </div>
                </div>
            </div>


            </div>
        </div>
    </div>
</section>



<!-- Section 4 -->
<section class="bg-white pt-7 pb-14">
    <div class="container px-8 mx-auto sm:px-12 lg:px-20">
        <h1 class="text-xl font-bold tracking-wide text-center text-gray-800 uppercase mb-16">We proudly present you our Web Application Logo</h1>
        <div class=" items-center justify-center grid-cols-12 gap-y-8">
            <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                <img src="https://drive.google.com/uc?export=view&id=1snguBme3vmgsWR8HvPbfGcV58oPdgI9h" alt="Logo" class="block object-contain h-40">

            </div>
    </div>
</section>

<!-- Section 5 -->
<section class="bg-white">
    <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
        <nav class="flex flex-wrap justify-center -mx-5 -my-2">
            <div class="px-5 py-2">
                <a href="/" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Home
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="/register" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Sign up
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="/login" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Sign in
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="/contactus" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Contact us
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="/Subscribe" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Subscribe us
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="/About" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    About us
                </a>
            </div>
        </nav>
        <div class="flex justify-center mt-8 space-x-6">
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Dribbble</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
        <p class="mt-8 text-base leading-6 text-center text-gray-400">
            © 2022 Agri Products MAnagement System, Inc. All rights reserved.
        </p>
    </div>

</section>

    <!-- Change the colour #f8fafc to match the previous section colour -->
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="#f8fafc">
            <path
              d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
            ></path>
          </g>
          <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
            <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
              <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
              <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
              ></path>
              <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
            </g>
          </g>
        </g>
      </g>
    </svg>

    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>


  </body>
</html>

