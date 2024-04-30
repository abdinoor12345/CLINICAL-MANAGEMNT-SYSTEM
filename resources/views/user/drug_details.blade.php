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
    
            
               <img height="300px" width="400px" src="/images/{{$medics->image}}" alt="drug image" class="py-4 m-3 border-spacing-1
               border border-red-800">
            <h class="bg-blue-500 font-bold border border-red-800 ">   {{$medics->name}}</h>
            <h class="bg-blue-500 font-bold ">  ksh : {{$medics->price}}</h>
            <h class="bg-blue-500 font-bold"> qt: {{$medics->quantity}}</h>
            <h class="bg-blue-500 font-bold ">  mf:  {{$medics->manufacturer}}</h>
<button class="bg-purple-500 rounded-full"><a href ="{{url('drug_details',$medics->id)}}">drug details</a></button>
              <p class="bg-purple-500 font-bold border border-red-800"> {{$medics->description}}</p>
            
              <form action="{{url('add_cart',$medics->id)}}" method="POST">
   @csrf
   <input type="number" name="quantity" value="1" min="1">
   <input type="submit" value="add to cart" class="m-4">
</form>
            </div>
   @livewire('footer')
</body>
</html>