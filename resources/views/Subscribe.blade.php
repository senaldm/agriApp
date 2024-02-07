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



<body>
    <button  class="h-10 rounded bg-green-500 absolute top-2 text-sm left-2 px-3 text-white hover:bg-gray-900" onclick="window.location.href='/'">Home </button> </div>
  <div class="container ">
  @if(session('status'))
    <div class="alert alert-success text-center mt-10 text-green-600">
        {{ session('status') }}
    </div>
  @endif
  <div class="ml-12 mt-12">
    <div class="bg-fixed bg-contain overflow-auto
        mt-10 ml-10 h-150 w-38" style="background-image:url(https://img.freepik.com/free-photo/businessman-hand-holding-e-mail-icon-contact-us-by-newsletter-email-protect-your-personal-information-from-spam-mail-customer-service-call-center-contact-us-concept_150455-13776.jpg
        )">


  <div class="card">
    <div>
        <div >
            <div class="md:flex">
                <div class="w-full  ">
                <form name="Subscribe" id="Subscribe" method="post" action="{{url('store-form')}}">
                 @csrf
                <div class="py-40 px-8">
                <div class="max-w-md  rounded-lg overflow-hidden md:max-w-xl">
                <div class="md:flex">
                <div class="w-full p-3">
                <div class="relative ml-20"> <input type="text" id="email" name="email"  required="" class="bg-blue-700 h-14 w-full px-4 pr-20 rounded-md focus:outline-none hover:cursor-pointer" name="">
                <button type="submit" class="h-10 rounded bg-black absolute top-2 text-sm right-2 px-3 text-white hover:bg-gray-900 animate-pulse">Subscribe Now</button> </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
