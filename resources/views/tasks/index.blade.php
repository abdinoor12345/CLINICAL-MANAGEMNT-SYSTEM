<!doctype html>
<html>
<head><ttle></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

</head><body class=" bg-gradient-to-b from-purple-500 via-pink-500 to-red-500 p-4 text-white-500">
<div class="bg-gradient-to-b from-blue-500 to-green-500 p-4">

<h1 class="text-4xl font-bold mb-4 bg-red-500">NEW UPDATES</h1>

<ul class="list-disc pl-4 m-4">
    @foreach($tasks as $task)
        <li class="bg-red-500 text-4xl">
            <a href="{{ route('task.show', $task->id) }}" class="text-blue-600 hover:underline">
                {{ $task->title }}
            </a>
        </li>
    @endforeach
</ul>

<a  class=
"bg-blue-600"href="{{ route('task.create') }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-700 m-4">
    Create New Task
</a>
