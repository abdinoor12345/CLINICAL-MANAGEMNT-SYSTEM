<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- plugins:css -->
     @vite('resources/css/app.css')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   </head><body>    @livewire('nav')
 
   <div class=" w-full:sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/4 space-x-3">
    
            
               <img height="300px" width="400px" src="/images/{{$doctor->image}}" alt="drug image" class="py-4 m-3 border-spacing-1
               border border-red-800">
            <h class="bg-blue-500 font-bold border border-red-800 ">   {{$doctor->name}}</h>
            <h class="bg-blue-500 font-bold ">   : {{$doctor->email}}</h>
            <h class="bg-blue-500 font-bold"> : {{$doctor->speacility}}</h>
            <h class="bg-blue-500 font-bold ">  :  {{$doctor->room}}</h>
<button class="bg-purple-500 rounded-full"><a href ="{{url('docs_details',$doctor->id)}}">doc details</a></button>
               
   @livewire('footer')
</body>
</html>