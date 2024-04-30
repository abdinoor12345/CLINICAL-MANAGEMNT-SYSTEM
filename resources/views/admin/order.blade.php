<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Include Tailwind CSS -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="container mx-auto m-8">
   @livewire('nav')
   <h1 class="bg-red-500 text-4xl">ALL ORDERS</h1>
   <div class="flex justify-center space-x-4 pt-8 pb-4">
       <form action="{{ url('search1') }}" method="get" class="flex items-center">
           <input type="text" name="search" placeholder="Search here" class="border border-gray-400 px-4 py-2 rounded-lg">
           <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg">Search</button>
       </form>
   </div>

   <div class="bg-gradient-to-r from-blue-500 to-green-500 mx-auto p-4 w-full text-left bg-cover">
       <div class="grid grid-cols-12 gap-4">
       @forelse ($order as $order )
           <div class="col-span-12 md:col-span-6 lg:col-span-4 bg-white rounded-md shadow-md p-4 flex flex-col">
               <img src="/images/{{ $order->image }}" alt="Product Image" class="w-full h-auto mb-4">
               <div>
                   <h2 class="text-lg font-bold mb-2">Order Information</h2>
                   <p><strong>Name:</strong> {{ $order->name }}</p>
                   <p><strong>Email:</strong> {{ $order->email }}</p>
                   <p><strong>Address:</strong> {{ $order->address }}</p>
                   <p><strong>Phone:</strong> {{ $order->phone }}</p>
                   <p><strong>Product Title:</strong> {{ $order->product_title }}</p>
                   <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
                   <p><strong>Price:</strong> {{ $order->price }}</p>
                   <p><strong>Payment Status:</strong> {{ $order->payment_status }}</p>
                   <p><strong>Delivery Status:</strong> {{ $order->delivery_status }}</p>
               </div>
               <div class="flex justify-between mt-4">
                   @if ($order->delivery_status == 'processing')
                       <a href="{{ url('deliverd', $order->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg" onclick="return confirm('Are you sure this delivery?')">Delivered</a>
                   @else
                       <p class="bg-red-500 text-white px-4 py-2 rounded-lg">Delivered</p>
                   @endif
                   <a href="{{ url('print_pdf', $order->id) }}" class="bg-purple-500 text-white px-4 py-2 rounded-lg">Print PDF</a>
               </div>
           </div>
       @empty
           <div class="col-span-12 bg-red-500 text-white text-center py-4 rounded-md">No data found</div>
       @endforelse
       </div>
   </div>
   @livewire('footer')
</body>
</html>
