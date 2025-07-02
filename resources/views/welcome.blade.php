@extends('layouts.app')

@section('content')

    <!-- Navbar -->
    <nav class="flex items-center justify-between px-8 py-6">
        <div class="flex items-center space-x-2 text-blue-600 text-xl font-bold">
            <span class="text-2xl">📘</span>
            <span>Brand</span>
        </div>
        <ul class="flex space-x-6 text-gray-700 font-medium">
            <li><a href="#" class="hover:text-blue-600">Product</a></li>
            <li><a href="#" class="hover:text-blue-600">Features</a></li>
            <li><a href="#" class="hover:text-blue-600">Marketplace</a></li>
            <li><a href="#" class="hover:text-blue-600">Company</a></li>
            <li><a href="/login" class="hover:text-blue-600">Log in</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="px-8 py-20 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

        <!-- Left Column -->
        <div>
            <h1 class="text-4xl sm:text-5xl font-bold mb-6 leading-tight">
                Data to enrich your <span class="text-blue-600">online business</span>.
            </h1>
            <p class="text-gray-600 mb-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel orci nec elit posuere aliquam. Morbi in nulla quis lorem volutpat cursus.
            </p>
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="/register" class="px-6 py-3 bg-blue-600 text-white rounded-md text-sm font-semibold hover:bg-blue-700 transition">
                    Start your free trial
                </a>
                <a href="#" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-md text-sm font-semibold hover:bg-gray-100 transition">
                    Live demo
                </a>
            </div>
        </div>

        <!-- Right Column -->
        <div class="flex justify-center">
            <img
                src="https://images.unsplash.com/photo-1484788984921-03950022c9ef?q=80&w=932&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Hero Image"
                class="w-full max-w-md rounded-lg shadow-lg object-cover"
            />
        </div>

    </section>

@endsection
