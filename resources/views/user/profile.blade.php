@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="container w-1/3 mx-auto px-4 py-8 mt-16 border border-gray-300 p-4 rounded-md">
        <div class="flex flex-col items-center">
            <img src="https://via.placeholder.com/150" alt="Profile Picture"
                class="w-32 h-32 rounded-full border-4 border-blue-500 mb-6 object-cover">

            <div class="text-center w-full md:w-1/2 mt-8">
                <h2 class="font-bold mb-2">Info Profile</h2>
                <p>Username: johndoe</p>
            </div>

            <div class="text-center w-full md:w-1/2 mt-12">
                <h2 class="font-bold mb-2">Info Pribadi</h2>
                <p>User ID: 12345</p>
                <p>No HP: 0812-3456-7890</p>
                <p>Alamat: 123 Main St, City, Country</p>
            </div>
        </div>
    </div>
@endsection
