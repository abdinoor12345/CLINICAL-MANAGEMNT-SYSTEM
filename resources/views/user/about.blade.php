@extends('layout.app')

@section('content')
 <body class="bg-gray-100">@livewire('nav')

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">About Us</h1>
        
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Our Mission</h2>
            <p class="text-gray-700 mb-4"> To innovate and implement user-friendly, integrated clinical management systems that streamline workflows, 
                enhance communication, and improve patient outcomes across healthcare settings.</p>
            <h2 class="text-xl font-bold mb-2">Our Vision</h2>
            <p class="text-gray-700 mb-4">Empowering healthcare providers with seamless, efficient,
                 and patient-centric clinical management solutions for optimal care delivery. </p>
            <h2 class="text-xl font-bold mb-2">Our Team</h2>
            <ul class="list-disc pl-6">
                <li>ABDINOOR MOHAME - CEO</li>
                <li>CHARO HALKANO - CTO</li>
                <li>Michael Johnson - CFO</li>
            </ul>
        </div>
    </div>
</body>@endsection

 