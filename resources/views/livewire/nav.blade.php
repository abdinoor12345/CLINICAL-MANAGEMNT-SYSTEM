<div>
<body> 
 
 <h1 class="text-3xl font-bold underline bg-green-500 border-b-2 border-purple-800">
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
                   <a href="#" class="hover:text-gray-300  ">About</a>
                   <a href="#" class="hover:text-gray-300 ">Services</a>
                   <a href="/contact1" class="hover:text-gray-300  ">Contact</a>
                   <a href="{{('/show_cart/show_cart')}}" class="hover:text-gray-300  ">Cart</a>

                   <a href="{{ route('register') }}" class="hover:text-blue-300 rounded-full ">REGISTER</a><br>
                   <a href="{{ route('login') }}" class="hover:text-blue-300 rounded-full ">LOGIN</a>
               </div>
           </div>
       </div>
   </nav>
    



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

 
  
</body>
 </div>
