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
   :<h1 class="bg-red-500 text-4xl">ORDER DETAILS</h1>
 name:  <h2 class="bg-red-500 text-2xl">{{$order->name}}</h2>

 email:  <h2 class="bg-red-500 text-2xl">{{$order->email}}</h2>
  phone: :<h2 class="bg-red-500 text-2xl">{{$order->phone}}</h2>
  Address: <h2 class="bg-red-500 text-2xl">{{$order->address}}</h2>
  user_id: <h2 class="bg-red-500 text-2xl">{{$order->user_id}}</h2>
  product-name: <h2 class="bg-red-500 text-2xl">{{$order->product_title}}</h2>
 price:  <h2 class="bg-red-500 text-2xl">{{$order->price}}</h2>
   quantity:<h2 class="bg-red-500 text-2xl">{{$order->quantity}}</h2>
  product_id: <h2 class="bg-red-500 text-2xl">{{$order->product_id}}</h2>
  payment_status: <h2 class="bg-red-500 text-2xl">{{$order->payment_status}}</h2>
</br>
<img height="250px"  width="300px"src="/images/{{$order->image}}">


   
</body>
</html>