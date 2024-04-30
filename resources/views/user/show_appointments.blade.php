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
<body class="font-sans">@livewire('nav')
<div class="container mx-auto my-12">
    <div class="overflow-x-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($appointments as $index => $appointment)
            <div class="bg-gray-200 rounded-lg mb-4">
                <div class="p-4 @if($index % 2 === 0) bg-gray-300 @endif">
                    <div class="mb-2">
                        <span class="font-semibold text-red-500">Doctor Name:</span> {{ $appointment->doctor }}
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold">Message:</span> {{ $appointment->message }}
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold">Date:</span> {{ $appointment->date }}
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold">Status:</span> {{ $appointment->status }}
                    </div>
                    <div class="flex justify-end">
                        <a href="{{ route('cancel.appointment', ['id' => $appointment->id]) }}" onclick="event.preventDefault(); if(confirm('Are you sure you want to cancel this appointment?')) { document.getElementById('cancel-form-{{ $appointment->id }}').submit(); }" class="text-red-600 hover:underline">Cancel</a>
                        <!-- Cancel Appointment Form -->
                        <form id="cancel-form-{{ $appointment->id }}" action="{{ route('cancel.appointment', ['id' => $appointment->id]) }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>@livewire('footer')
</body>