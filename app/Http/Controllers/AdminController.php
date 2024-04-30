<?php

namespace App\Http\Controllers;
//use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Medicine;
use App\Models\Order;
use PDF;
class AdminController extends Controller
{
    public function doctor(){
        return view('admin.doctor');
        //
    }   
    public function upload (Request $request){
        $doctor= new Doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('images',$imagename);
        $doctor->image=$imagename;
         $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->speciality=$request->Speciality;
    
    $doctor->save();
    return redirect()->back()->with('message','Doctor added Succefully');
    
    }
    public function showappointment()
{
    $data=appointment::all();
    return view('admin.showappointment',compact('data'));
}
public function approved($id){

    $data=appointment::find($id);
       $data->status='approved';
       $data->save();
       return redirect()->back();
   
   }
   public function canceled($id){
   
       $data=appointment::find($id);
          $data->status='canceled';
          $data->save();
          return redirect()->back();
   
    }  
    public function showdoctor(){
        $data=doctor::all();
        return view('admin.showdoctor',compact('data'));
     }
     public function deletedoctor($id)
     {
        $data=doctor::find($id);
        $data->delete();
        return redirect()->back();
     }
public function updatedoctor($id)
 {
    $data=doctor::find($id);
    return view('admin.update_doctor',compact('data'));
 }

 public function editdoctor(Request $request, $id)
 {
    $doctor=doctor::find ($id);
    $doctor->name=$request->name;
    $doctor->phone=$request->phone;
    $doctor->speciality=$request->speciality;
    $doctor->room=$request->room;
    $image=$request->file;
    if($image)
    {
    $imagename=time().'.'.$image->getClientOriginalExtension();
$request->file->move('doctorimage',$imagename);
$doctor->image=$imagename;
    }
$doctor->save();
return redirect()->back()->with('message', 'doctor detail updated successfully');

 }//
 public function emailview($id){
    $data=appointment::find($id);
    return view('admin.email_view',compact('data'));
 }
 public function sendemail(Request $request, $id){
    $data = appointment::find($id);
    $details = [
        'greeting' => $request->greeting,
        'body' => $request->body,
        'actiontext' => $request->actiontext,
        'actionurl' => $request->actionurl,
        'endpart' => $request->endpart
    ];

    Notification::send($data, new SendEmailNotification($details));
    return redirect()->back();
}

public function upload_medics(Request $request)
{$data =new Medicine;
    $data->name=$request->name;
    $data->description=$request->description;
    $data->manufacturer=$request->manufacturer;
    $data->price=$request->price;
    $data->quantity=$request->quantity;
    $image=$request->file;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->file->move('images',$imagename);
    $data->image=$imagename;
    $data->save();
    return redirect()->back()->with('message','Doctor added Succefully');
    

}
public function medicine(){
    return view('admin.pharmacy');
}
public function stock(){
    $medics=Medicine::all();

    return view('admin.medicine',compact('medics'));
}
public function order(){
    $order=order::all();
    return view('admin.order',compact('order'));
}
public function delivered($id){
    $order=order::find($id);
    $order->delivery_status="delivered";
    $order->payment_status="paid";

    $order->save();
    return redirect()->back();

}
public function print_pdf($id){
    $order=order::find($id);

    $pdf=PDF::loadview('admin.pdf',compact('order'));
      
    return $pdf->download('order_details.pdf');
}
public function searchdata(Request $request){
$searchText=$request->search;
$order=order::where('name','LIKE',"%$searchText%")->orWhere('phone','LIKE',"%$searchText%")->orWhere('product_title','LIKE',"%$searchText%")->get();
$doctors = Doctor::where('room', 'LIKE', "%$searchText%")
                     ->orWhere('speciality', 'LIKE', "%$searchText%")
                     ->orWhere('name', 'LIKE', "%$searchText%")
                     ->get();
                     $appointments = Appointment::where('email', 'LIKE', "%$searchText%")
                     ->orWhere('phone', 'LIKE', "%$searchText%")
                     ->orWhere('name', 'LIKE', "%$searchText%")
                     ->get();
return view('admin.order',compact('order','doctors', 'appointments'));
return view('admin.home',compact('order','doctors', 'appointments'));

}

public function doc_details($id){
    $doctor=Doctor::find($id);
    return view('user.doc_details',compact('doctor'));
 }
 public function submitappointment (Request $request)

{
$data=new appointment;
$data->name=$request->name;
$data->email=$request->email;
$data->date=$request->date;
$data->phone=$request->number;
$data->doctor=$request->doctor;
$data->message=$request->message;
$data->status= 'in progress';
 
 $data->save();
 return redirect()->back()->with('message','appointment Request suuccessful . We will contact  you soon');

}
public function appointment(){
    return view('user.make-appointment');
}
public function search(Request $request)
{
    $searchTerm = $request->input('search');

    $orders = Order::whereHas('user', function ($query) use ($searchTerm) {
        $query->where('name', 'like', '%' . $searchTerm . '%');
    })->orWhere('delivered', 'like', '%' . $searchTerm . '%')
      ->orWhere('product_title', 'like', '%' . $searchTerm . '%')
      ->get();

    return view('admin.home', compact('orders'));
}
public function updatedrug($id)
 {
 
    $medics=medicine::find($id);
    return view('admin.update_drug',compact('medics'));
 }

 public function editdrug(Request $request, $id)
 {
    $medicine=medicine::find($id);
    $medicine->name=$request->name;
    $medicine->price=$request->price;
    $medicine->description=$request->description;
    $medicine->manufacturer=$request->manufacturer;
    $image=$request->file;
    if($image)
    {
    $imagename=time().'.'.$image->getClientOriginalExtension();
$request->file->move('images',$imagename);
$doctor->image=$imagename;
    }
$medicine->save();
return redirect()->back()->with('message', 'medicine detail updated successfully');

 }//
 public function showdrug(){
 
    $medics=medicine::all();
    return view('admin.showdrug',compact('medics'));
 }

}
