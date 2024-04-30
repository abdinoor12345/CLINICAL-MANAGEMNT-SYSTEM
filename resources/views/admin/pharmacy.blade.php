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
<body class="font-sans mb-8">
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

             <h1 class=" text-4xl text-red-500 p-2">Add drugs</h1>
            <div class="overflow-x-auto">
            <form action="/upload_medics" method="POST" enctype="multipart/form-data" class="space-y-4 text-blue-500">
  @csrf

  <label for="name" class="text-red">Name</label>
  <input type="text" name="name" required maxlength="255" class="border p-2 w-full">

  <label for="description" class="">Description</label>
  <textarea id="description" name="description" required class="border p-2 w-full"></textarea>

  <label for="manufacturer" class="">Manufacturer</label>
  <input type="text" name="manufacturer" required maxlength="255" class="border p-2 w-full">

  <label for="price" class="">Price</label>
  <input type="number" name="price" step="0.01" min="0" required class="border p-2 w-full">

  <label for="quantity" class="">Quantity</label>
  <input type="number" id="quantity" name="quantity" min="0" required class="border p-2 w-full">

  <label for="image" class="">Image</label>
  <input type="file" name="file" class="border p-2">

  <button type="submit" class="bg-white text-red-600 px-4 py-2 rounded">Upload</button>
</form>
             </div>
          </div></div>
          @livewire('footer')
          <div class="fixed bottom-0">

          <h1 class="mb-16">
          </h1>
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
