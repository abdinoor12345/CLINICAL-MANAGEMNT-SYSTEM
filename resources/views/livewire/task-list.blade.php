@extends('layout.app')

@section('content')
<div class="bg-gradient-to-b from-blue-500 to-blue-700 py-6">
    <h1 class="text-3xl text-white font-semibold text-center bg-green-700">news update</h1>
    <ul class="bg-green-700  bg-opacity-70 rounded-lg p-4 mt-4">
        @foreach($tasks as $task)
            <li class="bg-red-500 text-4xl m-3">{{ $task->title }}</li>
            <li class="bg-yellow-500 text-2xl m-2">{{ $task->description }}</li>
        @endforeach
    </ul>
</div>
@endsection
