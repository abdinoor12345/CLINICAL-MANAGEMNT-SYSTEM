<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- plugins:css -->
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
@livewire('nav')
<div class="container mx-auto p-6 bg-yellow-500">

    <div class="bg-gree-500 m-0 mx-auto p-4 text-left">
        @if(session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="absolute top-0 right-0 px-4 py-3" data-dismiss="alert">x</button>
            </div>
        @endif 

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php $totalprice = 0; ?>
            @foreach ($cart as $cart)
                <div class="border border-border-red p-4">
                    <div class="mb-2 font-serif">{{ $cart->product_title }}</div>
                    <div class="mb-2">Price: {{ $cart->price }}</div>
                    <div class="mb-2">Quantity: {{ $cart->quantity }}</div>
                    <div><img src="/images/{{ $cart->image }}" alt="{{ $cart->product_title }}" class="w-full"></div>
                    <div class="mt-2">
                        <a onclick="return confirm('Are you sure to remove this drug order?')" class="bg-red-500 text-white py-2 px-4 rounded-full" href="{{ url('/remove_cart', $cart->id) }}">Remove</a>
                    </div>
                </div>
                <?php $totalprice=$totalprice +  $cart->price?>               @endforeach
        </div>

        <h1 class="text-red-500 text-3xl p-4 m-2 font-mono">Total Price: {{ $totalprice }}</h1>
    </div>

 </div>
 <h1 class="text-red-500 m-3 p-2 text-3xl leading-loose text-center">Proceed To Order</h1>

<div class="flex">
    <div class="flex-none w-1/2 bg-gray-500 p-4 m-3"><a href="{{ url('cash_order') }}">Cash on Delivery</a></div>
    <div class="flex-none w-1/2 bg-blue-500 p-4 m-3"><button disabled><a href="{{ url('/stripe', $totalprice) }}">Card Payments</a></button></div>
</div>

</body>
</html>
