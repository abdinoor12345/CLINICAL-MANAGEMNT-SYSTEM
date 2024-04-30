@extends('layout.app')

@section('content')  
<div class="container mx-auto"> 
    <div class="flex flex-wrap items-center justify-between bg-purple-500 p-4 border-solid border-2 border-red-600 rounded-lg"> 
        <div class="lg:w-1/4 mb-4 lg:mb-0 text-white text-center">
            <a href="#" class="fa fa-twitter"></a>
            <p>Follow us on Twitter</p>
        </div>
        <div class="lg:w-1/4 mb-4 lg:mb-0 text-white text-center">
            <a href="#" class="fa fa-whatsapp"></a>
            <p>Contact us via WhatsApp</p>
        </div>
        <div class="lg:w-1/4 w-full mb-4 lg:mb-0 text-white text-center">
            <div class="flex justify-between items-center">
                <a href="#" class="fa fa-facebook"></a>
                <p>Like us on Facebook</p>
                <a href="#" class="fa fa-instagram"></a>
                <p>Follow us on Instagram</p>
            </div>
        </div>
        <div class="lg:w-1/4 w-full mb-4 lg:mb-0 text-white text-center">
            <p>Guidelines</p>
            <p>Learn about our community guidelines</p>
        </div>
        <div class="w-full text-white text-center">
            <p>&copy; 2024 al-munara. All rights reserved.</p>
            <p>Designed and Developed by Your Company</p>
        </div>
    </div>
</div>
@endsection
