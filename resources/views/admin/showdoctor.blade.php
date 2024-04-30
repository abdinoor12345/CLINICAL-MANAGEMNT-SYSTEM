<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>al-munara</title>
</head>
<body class="font-sans"> 
  
    <div class="flex h-screen bg-gray-100 mt-3">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-black text-white p-6 hidden md:block ">
             <h1 class="text-white font-bold "><a href="/"><i class="material-icons">home</i> </a></h1><br>

             <h1 class="text-white font-bold "><a href="/add_doctors"> <i class="material-icons">local_hospital</i> DOCTORS</a></h1>
             <h2 class="text-white font-bold mt-5"><a href="/showappointment">appointments</a></h2>
             <h3 class="text-white font-bold mt-6"><a href="/showdoctor">show doctor</a></h3>
             <h3 class="text-white font-bold mt-6"><a href="/task">Give Updates Today</a></h3>
             <h3 class="text-white font-bold mt-6"><a href="/stock">stock</a></h3>
             <h3 class="text-white font-bold mt-6"><a href="/stock">drug added cart</a></h3>
             <h3 class="text-white font-bold mt-6"><a href="{{url('order')}}"> <i class="material-icons">shopping_cart</i></a></h3>
             <h3 class="text-white font-bold mt-6"><a href="/medicine">ADD DRUG</a></h3>
        </div>

         <div class="flex-1 flex flex-col overflow-hidden">
             <div class="container-scroller">
                <div class="container-fluid page-body-wrapper px-4 overflow-y-auto" style="max-height: calc(100vh - 4rem);"> <!-- Adjust the max-height as needed -->
                <h1 class="text-4xl py-4 animate-pulse font-semibold text-center">
    <span class="text-red-600 hover:text-blue-600 transition duration-300">OUR </span>
    <span class="text-blue-600 hover:text-green-600 transition duration-300">CURRENT </span>
    <span class="text-green-600 hover:text-red-600 transition duration-300">DOCTORS</span>
</h1>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach($data as $doctor)
                        <div class="bg-pink-400 text-white p-4 rounded shadow">
                            <img class="w-32 h-32 object-cover mt-2 rounded-full" src="images/{{$doctor->image}}" alt="{{$doctor->name}}">
                          <p>  <strong class="font-bold text-lg text-gray-900">Name:</strong>:{{$doctor->name}}</p>
                            <p><strong class="text-gray-900">Phone:</strong> {{$doctor->phone}}</p>
                            <p><strong class="text-gray-900">Speciality:</strong> {{$doctor->speciality}}</p>
                            <p><strong class="text-gray-900">Room no:</strong> {{$doctor->room}}</p>
                            <div class="flex justify-between mt-4">
                                <a onclick="return confirm('Are you sure you want to delete this doctor?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a>
                                <a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
         </div>
    </div>            @livewire('footer')


    <button id="toggleSidebar" class="md:hidden fixed bottom-4 right-4 bg-gray-800 text-white p-2 rounded-full focus:outline-none">
        <div class="h-2 w-8 bg-white rounded-full"></div>
        <div class="h-2 w-6 mt-1 bg-white rounded-full"></div>
        <div class="h-2 w-8 mt-1 bg-white rounded-full"></div>
    </button>

    <script>
        const toggleButton = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
        });
    </script>
</body>
</html>
