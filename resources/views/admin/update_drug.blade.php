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
  <body class="bg-purple-500">
  <x-app-layout>

    @include('admin.sidebar')
     
<div class=""align="center" style="padding:80px">
@if(session()->has('message'))
         <div class="alert alert-success">
          {{session()->get('message')}}
          <button type="button"class="close" data-dismiss="alert">x</button>
         </div>
         @endif
<form action="{{url('editdrug',$medics->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div style="padding:16px;">
        <label>Drug Name</label>
        <input style="color:black;"type="text" name="name" value="{{$medics->name}}">
    </div>
     <div style="padding:16px;">
     
        <label>Drug price</label>
        <input style="color:black;"type="number" name="price" value="{{$medics->price}}">
    </div><div style="padding:16px;">
        <label>Manufacturer</label>
        <input style="color:black;" type="text" name="manufacturer" value="{{$medics->manufacturer}}">
    </div><div style="padding:16px;">
        <label>Description</label> 
        <input style="color:black;" type="text" name="description" value="{{$medics->description}}"> 
    <div style="padding:16px;">
        <label>OLD IMAGE</label>
 <img height="150px" width="150px"src="images/{{$medics->image}}">
    </div>
    <div style="padding:16px;">
        <label>change image</label>
        <input style="color:black;" type="file" name="file"></div>
    <div style="padding:padding:15px;">
    <input type="submit" class="btn btn-primary">
    </div>  
</form>
</div></div>
    </x-app-layout>

    
</html>  