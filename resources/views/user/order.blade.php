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
 
  <div class="bg-gradient-to-r from-blue-500 to-green-500  m-0  mx-auto p-4 w-full text-left">
  
    <table  class="border border-spacing-8 border-red-900 w-full justify-content p-4 ">
     <tr>
        <th class=" border border-border-red">product title</th>
        <th class=" border border-border-red">Quantity</th>
        <th class=" border border-border-red">PRICE</th>
        <th class=" border border-border-red">PAYMENT_STATUS</th>
        <th class=" border border-border-red">DELIVERY_STATUS</th>
        <th class=" border border-border-red">image</th>
        <th class=" border border-border-red">Cancel Order</th>



     </tr>  
     @foreach ($order as $order)
       
     
<tr>
    <td class=" border border-border-red">{{$order->product_title}}</td>
    <td class=" border border-border-red"> {{$order->quantity}}</td>
    <td class=" border border-border-red">{{$order->price}}</td>
    <td class=" border border-border-red">{{$order->payment_status}}</td>
    <td class=" border border-border-red">{{$order->delivery_status}}</td>
    <td class=" border border-border-red"> <img  heigh="100px" width="150"src="/images/{{$order->image}}"></td>
    <td class=" border border-border-red">@if ($order->delivery_status=='processing')
       
       <a class="bg-red-500" onclick="return confirm('are you sure to cancle this!!!')"href="{{url('cancel_order',$order->id)}}">cancel order</a>
      @else<p class="bg-green-500 text-2xl font-bold">not allowed</p>
         @endif
</td>

</tr> @endforeach
    </table>
</div>
   @livewire('footer')
</body>
</html>