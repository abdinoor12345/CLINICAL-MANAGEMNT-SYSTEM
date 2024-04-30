@extends('layout.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-purple-400 via-pink-500 to-red-500">
 
<div><label   class="block text-blue-700 text-3xl"for="name">CONTACT US:</label>

    <form wire:submit.prevent="saveContact" class="bg-white p-8 rounded shadow-md">

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

        <label   class="block text-gray-700"for="name">Name:</label>
        <input  class="w-full mt-2 p-2 border rounded" type="text" wire:model="name">
        @error('name') <span>{{ $message }}</span> @enderror

        <label  class="block mt-4 text-gray-700 " for="email">Email:</label>
        <input type="email" wire:model="email">
        @error('email') <span>{{ $message }}</span> @enderror

        <label class="block mt-4 text-gray-700"  for="name">Message:</label>
        <input type="text" wire:model="message">
        @error('message') <span>{{ $message }}</span> @enderror
        <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
    </form></div></div>
    @endsection

