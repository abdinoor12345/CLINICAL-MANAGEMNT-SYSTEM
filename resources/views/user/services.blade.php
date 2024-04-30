@extends('layout.app')

@section('content')<body class="bg-gray-100">@livewire('nav')
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Our Services</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Service Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Appointment Scheduling</h2>
                <p class="text-gray-700 mb-4">Efficiently schedule appointments for patients and manage availability.</p>
            </div>
            
            <!-- Service Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Patient Records Management</h2>
                <p class="text-gray-700 mb-4">Securely store and manage patient information and medical records.</p>
            </div>
            
            <!-- Service Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Billing and Invoicing</h2>
                <p class="text-gray-700 mb-4">Streamline billing processes and generate invoices for services rendered.</p>
            </div>
        </div>
    </div>
</body>@endsection

