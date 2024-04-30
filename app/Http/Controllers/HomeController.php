<?php

namespace App\Http\Controllers;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
use Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Medicine;
use App\Models\Cart;
use App\Models\Order;




class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
{        $doctor=Doctor::all();

    return view('user.home',compact('doctor'));}
else{$total_product=Medicine::all()->count();
    $total_order=order::all()->count();
    $total_user=user::all()->count();
    $order=order::all();
    $total_revenue=0;
    foreach($order as $order){
        $total_revenue=$total_revenue + $order->price;
    }
    $total_delivered=order::where('delivery_status','=', 'delivered')->get()->count();
    $total_processing=order::where('delivery_status','=', 'processing')->get()->count();
    return view('admin.home',compact('total_product','total_order','total_user','total_revenue','total_delivered','total_processing'));

}
        }else{
            return redirect()->back();
        }
    }
     
     
   
  public function drug_details($id){
    $medics=Medicine::find($id);
    return view('user.drug_details',compact('medics'));
 
}
public function add_cart(Request $request,$id)
{
        // Check if the user is authenticated (logged in)

    if(Auth::id()){
     // Retrieve the authenticated user
     $user=Auth::user();
    // Find the medicine (assumed to be a model named Medicine) by its ID
 $medic=Medicine::find($id);
         // Create a new instance of the Cart model
 $cart=new  cart;
         // Populate the Cart model with data from the user and the selected medicine
 $cart->name=$user->name;
 $cart->email=$user->email;
 $cart->address=$user->address;
 $cart->phone=$user->phone;
 $cart->name=$user->name;
 $cart->user_id=$user->id;
 $cart->product_title=$medic->name;
 $cart->price=$medic->price * $request->quantity;
 $cart->image=$medic->image;
 $cart->product_id=$medic->id;
 $cart->quantity=$request->quantity;
// Save the Cart model to the database
 $cart->save();
         // If the user is not authenticated, redirect to the login page

 Alert::success('Product added succefully','we have added the product to the cart');
         // Redirect back to the previous page

 return redirect()->back();
      }
    else{
        return redirect('login');
    }
}
public function show_cart(){
    if(Auth::id()){
    // Retrieve the authenticated user's ID
    $id=Auth::user()->id;
    // Retrieve cart items for the authenticated user from the 'carts' table
    $cart=cart::where('user_id','=',$id)->get();
    return view('user.show_cart',compact('cart'));}
    else{
        return redirect('login');
    }
}
public function remove_cart($id)
{
    $cart=cart::find($id);
    $cart->delete();
    return redirect()->back();
}
public function cash_order()
{
$user=Auth::User();
$userid=$user->id;
 $data=cart::where('user_id', '=' , $userid)->get();

 foreach ($data as $data) {
 // Create a new instance of the 'order' model for each cart item
    $order=new order;
            // Copy data from the cart item to the order
    $order->name=$data->name;
    $order->email=$data->email;
    $order->phone=$data->phone;
    $order->address=$data->address;
    $order->user_id=$data->user_id;
    $order->product_title=$data->product_title;
    $order->price=$data->price;
    $order->image=$data->image;
    $order->quantity=$data->quantity;
    $order->product_id=$data->product_id;
    $order->payment_status='cash on delivery';
    $order->delivery_status='processing';
// Save the order to the 'orders' table
$order->save();
// Delete the cart item from the 'carts' table
$cart_id=$data->id;
$cart=cart::find($cart_id);
$cart->delete();

 }
 return redirect ()->back()->with('message','we have received your order we will connect you soon');

  }
  public function stripe($totalprice){
    return view('user.stripe',compact('totalprice'));

  }
  public function stripePost(Request $request,$totalprice)

  {
    dd($totalprice);

      Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

  

      Stripe\Charge::create ([

              "amount" => $totalprice * 100,

              "currency" => "usd",

              "source" => $request->stripeToken,

              "description" => "Thanks for payments" 

      ]);
      $user=Auth::User();
$userid=$user->id;
 $data=cart::where('user_id', '=' , $userid)->get();

 foreach ($data as $data) {
    $order=new order;
    $order->name=$data->name;
    $order->email=$data->email;
    $order->phone=$data->phone;
    $order->address=$data->address;
    $order->user_id=$data->user_id;
    $order->product_title=$data->product_title;
    $order->price=$data->price;
    $order->image=$data->image;
    $order->quantity=$data->quantity;
    $order->product_id=$data->product_id;
    $order->payment_status='cash on delivery';
    $order->delivery_status='processing';
    $order->save();
    $cart_id=$data->id;
    $cart=cart::find($cart_id);
    $cart->delete();
    
     }
      Session::flash('success', 'Payment successful!');
      return back();

  }
  public function show_order(){
    if(Auth::id()){
    $user=Auth::user();
$userid=$user->id;
$order=order::where('user_id','=',$userid)->get();

    return view('user.order',compact('order'));
    }
  else{
    return redirect('login');
  }
     }
     public function cancel_order($id){
        $order=order::find($id);
        $order->delivery_status='you cancelled the order';
        $order->save();
        return redirect()->back();
     }

      
     public function appointment(Request $request)
{
     if (Auth::check()) {
         $userId = Auth::id();

         $data = new appointment;
        
         $data->user_id = $userId;  
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->number;
        $data->doctor = $request->doctor;
        $data->message = $request->message;
        $data->status = 'in progress';

         $data->save();
         return response()->json(['success' => true]);


        // return redirect()->back()->with('message', 'Appointment request successful. We will contact you soon.');
    } else {
        
        return redirect()->route('login')->with('error', 'Please log in to make an appointment.');
    }
}

public function myappointment()
{ 

     $doctor=Doctor::all();
    return view('user.make-appointment',compact('doctor'));
    
}
public function cancel_appoint($id)
{
$data=appointment::find($id);
$data->delete();
return redirect()->back();
}

public function ajax()
    {
        return view('user.live-search');
    }


public function search(Request $request)
{
    $query = $request->get('query');
    $products = Medicine::where('name', 'like', '%' . $query . '%')
                       ->orWhere('description', 'like', '%' . $query . '%')
                       ->orWhere('price', 'like', '%' . $query . '%')
                       ->orWhere('image', 'like', '%' . $query . '%')->get();

    return response()->json($products);
}
public function show_appointments(){
     if(Auth::check()){
         $userId = Auth::id();
        
         $appointments = Appointment::where('user_id', $userId)->get();
        
         return view('user.show_appointments', compact('appointments'));
    } else {
         return redirect('login');
    }
}
public function contact(){
    return view ('user.contact');
}
public function about(){
    return view ('user.about');
}public function servicesor(){
    return view ('user.services');
}
 }
    


