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
            <!-- Sidebar content goes here -->
            <h1 class="  text-white font-bold "><a href="/"><i class="material-icons">home</i> </a></h1></br>

             <h1 class="  text-white font-bold "><a href="/add_doctors"> <i class="material-icons">local_hospital</i> DOCTORS</a></h1>
 <h2 class="  text-white font-bold mt-5"><a href="/showappointment">appointments</a></h2>
 <h3 class="  text-white font-bold mt-6"><a href="/showdoctor">show doctor</a></h3>
 <h3 class=" first-letter: text-white font-bold mt-6"><a href="/task">Give Updates Today</a></h3>
 <h3 class="  text-white font-bold mt-6"><a href="/stock">stock</a></h3>
 <h3 class=" first-line: text-white font-bold mt-6"><a href="/stock">drug added cart</a></h3>

 <h3 class=" text-white font-bold mt-6"><a href="{{url('order')}}"> <i class="material-icons">shopping_cart</i></a></h3>
 <h3 class=" text-white font-bold mt-6"><a href="/medicine">ADD DRUG</a></h3>



        </div>

        <!-- Content area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Your main content goes here -->
            <div class="container-scroller">
          <div class="container-fluid page-body-wrapper">
            
            <div class="overflow-x-auto">
              
            <h3 class="text-red-500 text-3xl h-8 w-1/2 p-2 ml-3">Add doctors here</h3>
    <div class="bg-green-500 ml-0  mx-3 mt-3 p-4 w-1/2 text-left h-full">
        @if(session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative " role="alert">
                {{ session()->get('message') }}
                <button type="button" class="absolute top-0 right-0 px-4 py-3" data-dismiss="alert">x</button>
            </div>
        @endif 
        <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data" class="">
            @csrf
            <label class="text-red-500 h-6">Doctor Name</label>
            <input type="text" name="name" placeholder="Enter name" class="text-black border rounded p-2" required><br>
            <label class="mt-4 text-red-500">Phone number</label>
            <input type="number" name="number" class="text-black border rounded p-2" placeholder="Enter your number" required></br>
            <label class="mt-4 text-red-500">Speciality</label>
            <select class="text-red-500 border rounded p-2 mt-5" name="Speciality" required><br>
                <option value="">-----</option>
                <option value="heart">Heart</option>
                <option value="eyes">Eyes</option>
                <option value="skin">Skin</option>
                <option value="nose">Nose</option>
            </select><br>
            <label class="m-3 text-red-500">ROOM NO</label><br>
            <input type="text" name="room" class="text-black border rounded p-2" placeholder="ROOM NO" required><br>
            <label class="mt-3 text-red-500">Doctor picture</label>
            <input type="file" name="file" required><br>
            <input type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
        </form>
    </div>
            </div>
          </div></div>
  ...........
             <!-- Toggle button -->
            <button id="toggleSidebar" class="md:hidden fixed bottom-4 right-4 bg-gray-800 text-white p-2 rounded-full focus:outline-none">
                <div class="h-2 w-8 bg-white rounded-full"></div>
                <div class="h-2 w-6 mt-1 bg-white rounded-full"></div>
                <div class="h-2 w-8 mt-1 bg-white rounded-full"></div>
            </button>
        </div>
    </div>

    <script>
        // JavaScript to toggle the sidebar on smaller screens
        const toggleButton = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
        });
    </script>
</body>
</html>
