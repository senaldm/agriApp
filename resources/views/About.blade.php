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

              <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white font-serif">Agriculture Products Management System</span>
          </a>
          <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-blue-500 dark:focus:ring-gray-600 font-serif" aria-controls="mobile-menu" aria-expanded="false" >
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
              <li>
                <a href="/" class=" text-lg block py-2 pr-4 pl-3 text-white  border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 font-serif dark:text-gray-400 font-semibold md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
              </li>
              <li>
                <a href="/contactus" class=" text-lg block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 font-serif dark:text-gray-400 font-semibold md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact us</a>
              </li>
              <li>
                <a href="/login" class=" text-lg block py-2 pr-4 pl-3 text-white  border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 font-serif font-semibold md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Login</a>
              </li>
              <li>
                <a href="/register" class="text-lg block py-2 pr-4 pl-3 text-white hover:bg-gray-50 md:hover:bg-transparent  md:hover:text-blue-700 md:p-0 dark:text-gray-400 font-serif font-semibold md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Register</a>
              </li>
              <li>
                <a href="/About" class="text-lg block py-2 pr-4 pl-3 text-black hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-white font-serif font-semibold dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>


<div class="py-16 bg-white">
    <div class="container  px-6 text-gray-600 md:px-12 xl:px-6 w-full">
        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
          <div class="md:h-5/12 lg:w-5/12 flex justify-center">
            <img src="https://www.e-channelnews.com/wp-content/uploads/2021/11/coworkers-sitting-at-desk-discussing-project-1024x512.jpeg" alt="image" loading="lazy" width="1350" height="475" class="content-center" >
          </div>
          <div class="md:7/12 lg:w-6/12">
            <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Our History </h2>
            <p class="mt-6 text-gray-600">This web Application project is done as a 3rd year project for Undergraduate who study Computer Science at University of Jaffna. This project was well monitored by Mentors and supervisors. This web app  idea was initiated and implemented by a group of 5 members and they have collaborated using Git Hub. As a result of each members hardwork and as a success of their collaboration, this web app is produced as a End product.</p>
            <p class="mt-4 text-gray-600"> As developers of this web app, we ensure that this web app will fulfill all the requirements of the customers and this app will ease the communication between the farmer and the consumer.</p>
          </div>
        </div>
    </div>
  </div>
