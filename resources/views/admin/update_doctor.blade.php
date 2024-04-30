  

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <base href="/public">
    <style type="text/css">
        label{
            display:inline-block;
            width:200px;
        }
    </style>
    <!-- plugins:css -->
   </head>
  <body class="bg-gray">
  <x-app-layout>

 @livewire('nav')     
<div class=""align="center" style="padding:80px">
@if(session()->has('message'))
         <div class="alert alert-success">
          {{session()->get('message')}}
          <button type="button"class="close" data-dismiss="alert">x</button>
         </div>
         @endif
<form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div style="padding:16px;">
        <label>Doctor Name</label>
        <input style="color:black;"type="text" name="name" value="{{$data->name}}">
    </div>
     <div style="padding:16px;">
     
        <label>Phone no</label>
        <input style="color:black;"type="number" name="phone" value="{{$data->phone}}">
    </div><div style="padding:16px;">
        <label>speciality</label>
        <input style="color:black;" type="text" name="speciality" value="{{$data->speciality}}">
    </div><div style="padding:16px;">
        <label>ROOM</label>
        <input style="color:black;" type="text" name="room" value="{{$data->room}}">
    </div>
    <div style="padding:16px;">
        <label>OLD IMAGE</label>
 <img height="150px" width="150px"src="images/{{$data->image}}">
    </div>
    <div style="padding:16px;">
        <label>change image</label>
        <input style="color:black;" type="file" name="file"></div>
    <div style="padding:padding:15px;">
    <input type="submit" class="btn btn-primary">
    </div>  
</form>
</div></div>
@livewire('footer')     

    </x-app-layout>

    
</html>  