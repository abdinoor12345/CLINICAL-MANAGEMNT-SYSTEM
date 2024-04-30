<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
        <title>al-munara</title>
    </head> 
    <body class="font-sans mb-8">
        <!-- Search form -->
        <form action="{{ url('search1') }}" method="get" class="flex items-center mt-3 ml-3">
            <input type="text" name="search" placeholder="Search orders here" class="border border-gray-400 px-4 py-2 rounded-lg">
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg ml-2">Search</button>
        </form>

        <div class="flex h-screen bg-gray-100 mt-3">
            <!-- Sidebar -->
            <div id="sidebar" class="bg-black text-white p-6 hidden md:block ">
                <!-- Sidebar content goes here -->
                <h1 class="text-white font-bold"><a href="/"><i class="material-icons">home</i> </a></h1><br>
                <h1 class="text-white font-bold"><a href="/add_doctors"> <i class="material-icons">local_hospital</i> DOCTORS</a></h1>
                <h2 class="text-white font-bold mt-5"><a href="/showappointment">appointments</a></h2>
                <h3 class="text-white font-bold mt-6"><a href="/showdoctor">show doctor</a></h3>
                <h3 class="text-white font-bold mt-6"><a href="/task">Give Updates Today</a></h3>
                <h3 class="text-white font-bold mt-6"><a href="/stock">stock</a></h3>
                <h3 class="text-white font-bold mt-6"><a href="/stock">drug added cart</a></h3>
                <h3 class="text-white font-bold mt-6"><a href="{{url('order')}}"> <i class="material-icons">shopping_cart</i></a></h3>
                <h3 class="text-white font-bold mt-6"><a href="/medicine">ADD DRUG</a></h3>
            </div>

            <!-- Content area -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Your main content goes here -->
                <h1 class="text-3xl font-bold underline bg-green-500"><i class="material-icons" style="color: #907990; text-shadow: 0 0 10px #349907;">local_hospital</i> AL-MUNARA REFERAL HOSPITAL</h1>
                
                <!-- Summary of pharmacy products -->
                <h1 class="text-red-500 text-3xl font-bold mt-3 p-3">Summary of our pharmacy products</h1>
                <div class="flex flex-wrap">
                    <div class="flex-1 sm:w-1/2 bg-slate-500 md:w-1/4 p-4 m-3 border border-red-500 text-red">
                        <h1>{{$total_product}}</h1>
                        Total products
                    </div>
                    <div class="flex-1 sm:w-1/2 bg-slate-500 md:w-1/4 p-6 m-3 border border-red-500 text-red">
                        <h1>{{$total_order}}</h1>
                        Total Orders
                    </div>
                    <div class="flex-1 sm:w-1/2 bg-slate-500 md:w-1/4 p-6 m-3 border border-red-500 text-red">
                        <h1>{{$total_user}}</h1>
                        Total Customers
                    </div>
                    <div class="flex-1 sm:w-1/2 bg-slate-500 md:w-1/4 p-6 m-3 border border-red-500 text-red">
                        <h1>${{$total_revenue}}</h1>
                        Total revenue
                    </div>
                    <div class="flex-1 sm:w-1/2 bg-slate-500 md:w-1/4 p-6 m-3 border border-red-500 text-red">
                        <h1>{{$total_delivered}}</h1>
                        Order delivered
                    </div>
                    <div class="flex-1 sm:w-1/2 bg-slate-500 md:w-1/4 p-6 m-3 border border-red-500 text-red">
                        <h1>{{$total_processing}}</h1>
                        ORDER processing
                    </div>
                </div>
                <!-- End of summary section -->

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
</x-app-layout>
