@extends('layout.app')
@section('content')


<div class=" text-white-500 bg-gradient-to-b from-purple-500 via-pink-500 to-red-500 p-4">
<h1 class="text-2xl font-bold mb-4">Edit Task</h1>

<form method="POST" action="{{ route('task.update', $task->id) }}" class="max-w-md">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
        <input type="text" name="title" value="{{ $task->title }}" class="w-full px-3 py-2 border rounded shadow appearance-none">
    </div>

    <div class="mb-6">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
        <textarea name="description" class="w-full h-32 px-3 py-2 border rounded shadow appearance-none">{{ $task->description }}</textarea>
    </div>

     
    <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-700">Update</button>
</form>

<a href="{{ route('task.show', $task->id) }}" class="block text-blue-500 hover:underline mt-4">Back to Task</a>
<a href="{{ route('task.index') }}" class="block text-blue-500 hover:underline">Back to Task List</a>
</div>@endsection