<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- plugins:css -->
     @vite('resources/css/app.css')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   </head>
  <body>
   @include('sweetalert::alert')
   @livewire('nav')
 <div class="container mx-auto bg-transparent"><h1 class="text-3xl font-bold text-red-600 m-3"><a href="/live-search">Search drugs</a></h1>
    <h1 class="bg-yellow-500 font-bold text-lg p-3 m-4">   our  retail shop which provides pharmaceutical drugs, among other products.</h1>
 
    <div class="flex flex-wrap">    @foreach($medics as $medics)

 <div class=" w-full:sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/4 space-x-3 m-5">
    
            
               <img height="300px" width="400px" src=" images/{{$medics->image}}" alt="" class="py-4 m-3 border-spacing-1
               border border-red-800">
            <h class="text-blue-500 font-bold border border-red-800 ">   {{$medics->name}}</h>
            <h class="text-blue-500 font-bold ">  ksh : {{$medics->price}}</h>
            <h class="text-blue-500 font-bold"> qt: {{$medics->quantity}}</h>
            <h class="text-blue-500 font-bold ">  mf:  {{$medics->manufacturer}}</h>
<button class="text-green-500 rounded-full m-3 text-2xl"><a href ="{{url('drug_details',$medics->id)}}">Drug details</a></button>
<form action="{{url('add_cart',$medics->id)}}" method="POST">
   @csrf
   <input type="number" name="quantity" value="1" min="1">
   <input type="submit" value="add to cart" class="m-4">
</form>
              <p class="text-red-500 font-bold border border-red-800"> {{$medics->description}}</p>
 </div>
              @endforeach</div> 

</div>
@livewire('footer')
</body>
</html>