@extends('layout.app')

@section('content')
    <body class="bg-gray-100">
        @livewire('nav')

        <div class="container mx-auto p-4">

            <h1 class="text-3xl font-bold mb-4">Contact Services</h1>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Contact Information</h2>
                <p class="text-gray-700 mb-4">For any inquiries or assistance, please feel free to contact us:</p>
                <ul class="list-disc pl-6">
                    <li>Email: info@noor.com</li>
                    <li>Phone: +1 (123) 456-7890</li>
                    <li>Address: 123 Main Street, MOMBASA, KENYA</li>
                </ul>
            </div>

            <div class="mt-8">
                <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Schedule an Appointment</a>
            </div>
        </div>

     </body>
@endsection
