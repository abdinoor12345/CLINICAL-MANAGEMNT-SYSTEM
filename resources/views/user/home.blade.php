<x-app-layout>
<!doctype html>
<html>
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><ttle>    AL-MUNARA</title>
  @vite('resources/css/app.css')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
 </head>
<body> 

  <h1 class="text-3xl font-bold underline bg-green-500">
    AL-MUNARA REFERAL HOSPITAL
  </h1>
 
   
    
    <nav class="bg-gray-800 text-white">
        <div class="container mx-auto p-4">
            <div class="flex justify-between items-center">
                <a href="#" class="text-2xl font-bold">al-munara</a>

                <!-- Button to toggle navigation links on small screens -->
                <button id="toggleButton" class="md:hidden text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <!-- Navigation links for larger screens (display horizontal) -->
                <div id="navLinks" class="hidden md:flex  space-x-4">
                    <a href="/" class="hover:text-gray-300  ">Home</a>
                    <a href="/about" class="hover:text-gray-300 ">About</a>
                    <a href="/service" class="hover:text-gray-300 ">Services</a>
                    <a href="/contact" class="hover:text-gray-300 ">Contact</a>
                    <a href="/show_appointments" class="hover:text-gray-300  ">Myappointments</a>
                    <a href="{{('show_cart/show_cart')}}" class="hover:text-gray-300 text-white-500">Cart</a>
                    <a href="{{url('show_order')}}" class="hover:text-blue-300 rounded-full ">ORDER</a><br>

                    <a href="{{ route('register') }}" class="hover:text-blue-300 rounded-full ">REGISTER</a><br>
                    <a href="{{ route('login') }}" class="hover:text-blue-300 rounded-full ">LOGIN</a>
                </div>
            </div>
        </div>
    </nav>
     <figure class="relative">

     <img class="w-full h-full object-cover  " src="{{ asset('images/doctor.png') }}" alt="Your Image">
     <figcaption class="absolute inset-0 flex items-center justify-center  text-red-500 px-2 py-1 text-sm">

 
   <h1 class="bg-green-500  m-2 rounded-full font-bold">lets consults Healthy living</h1>
</figcaption>
</figure>@livewire('body') 

<h2 class="bg-gradient-to-r from-blue-500 via-green-500 to-yellow-500 text-4xl m-2">our doctors</h2>

  <div class="flex flex-wrap">
       @foreach($doctor as $doctor)
<div class="w-full: sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4">
    
            
               <img height="300px" width="400px" src=" images/{{$doctor->image}}" alt="">
          <div class="flex col-auto m-2">  <h class="text-blue-500 font-bold">   {{$doctor->name}}</h>
              <p class="text-purple-500 font-bold p-2"> {{$doctor->speciality}}</p></div>
              <button class="text-purple-500 rounded-full m-3"><a href ="{{url('docs_details',$doctor->id)}}">doc details</a></button>

            </div>

 @endforeach</div>
 @livewire('footer')
 <script>
        const toggleButton = document.getElementById('toggleButton');
        const navLinks = document.getElementById('navLinks');

        toggleButton.addEventListener('click', () => {
            navLinks.classList.toggle('hidden');
           // navLinks.classList.toggle('space-x-8');
            navLinks.classList.toggle('text-red-500');
           navLinks.classList.add('flex', 'flex-col');

        });
    </script>

    
</x-app-layout>

</body>
</html>
 