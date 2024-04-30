@extends('layout.app')
@section('content')

<div class=" bg-gradient-to-b from-purple-500 via-pink-500 to-red-500 p-4 text-white-500">
<div class="max-w-md mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">{{ $task->title }}</h1>

    <p class="text-gray-700">{{ $task->description }}</p>
 

    <a href="{{ route('task.edit', $task->id) }}" class="block text-blue-500 mt-4 hover:underline">Edit UPDATE</a>

    <form method="POST" action="{{ route('task.destroy', $task->id) }}" class="mt-4">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 text-white font-bold py-2 px-4 rounded-full hover:bg-red-700">Delete UPDATE</button>
    </form>

    <a href="{{ route('task.index') }}" class="block text-blue-500 mt-4 hover:underline">Back to UPDATE List</a>
</div></div>
@endsection