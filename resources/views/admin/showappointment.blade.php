@extends('layout.app')
@section('content')
<div> 
    <div class="flex h-screen bg-gray-100 mt-3">
        <div id="sidebar" class="bg-black text-white p-6 hidden md:block">
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
        <div class="flex-1 flex flex-col overflow-hidden">
            <div class="container-scroller">
                <div class="container-fluid page-body-wrapper">
                    <h1 class="text-4xl text-red-500 p-2">My Appointments</h1>
                    <div class="overflow-x-auto">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            @foreach($data as $appoint)
                            <div class="bg-pink-400 text-white p-4 rounded shadow">
                                <p><strong>Customer name:</strong> {{$appoint->name}}</p>
                                <p><strong>Phone:</strong> {{$appoint->phone}}</p>
                                <p><strong>Email:</strong> {{$appoint->email}}</p>
                                <p><strong>Message:</strong> {{$appoint->message}}</p>
                                <p><strong>Status:</strong> {{$appoint->status}}</p>
                                <p><strong>Date:</strong> {{$appoint->date}}</p>
                                <p><strong>Doctor:</strong> {{$appoint->doctor}}</p>
                                <div class="flex justify-between mt-4">
                                    <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approve</a>
                                    <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Cancel</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button id="toggleSidebar" class="md:hidden fixed bottom-4 right-4 bg-gray-800 text-white p-2 rounded-full focus:outline-none">
            <div class="h-2 w-8 bg-white rounded-full"></div>
            <div class="h-2 w-6 mt-1 bg-white rounded-full"></div>
            <div class="h-2 w-8 mt-1 bg-white rounded-full"></div>
        </button>
    </div>
</div>
@endsection

<style>
    .container-fluid {
        height: calc(100vh - 3rem); /* Adjust as needed */
        overflow-y: auto;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
        });
    });
</script>
