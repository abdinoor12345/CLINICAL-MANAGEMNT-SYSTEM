 

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <base href="/public">
    <!-- plugins:css -->
     <style type="text/css">
      label{
        display:inline-block;
        width:200px;
      }
      </style>
  </head>
  <body>
  
  <h3 class="bg-red-500 text-2xl h-8 w-full
        p-2 m-5"> add doctors here</h3> 
        <div class="bg-green-500 m-0 w-72  content-center">
         @if(session()->has('message'))
         <div class="alert alert-success">
          {{session()->get('message')}}
          <button type="button"class="close" data-dismiss="alert">x</button>
         </div>
         @endif
          <form action="{{url('sendemail',$data->id)}}" method="post" enctype="multipart/form-data">@csrf
            <label class="text-500-red">GREETINGS</label>
            <input type="text" name="greeting" placeholder="greeetings"  style="color:black;" required=""></br>
           
            <labele class="m-3 text-500-red">body</label>
            <input type="text" name="body"  style="color:black;" placeholder="body here" required="">
            <label class="m-2 text-500-red">Action Text</label>
            <input type="text" name="actiontext"   style="color:black;" required="">
            <label class="m-2 text-500-red">Action Text</label>
            <input type="text" name="actionurl"   style="color:black;"   required="">
             
            <label class="m-2 text-500-red">End part</label>
            <input type="text" name="endpart"   style="color:black;"   required="">
             
            <input type="submit" class="btn-btn-success">
          </form></div></div>    
          
  
       <!-- partial -->========
       
                       
                          
                          
                        
               
                      
   </body>
</html>  