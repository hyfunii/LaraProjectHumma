<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My Application')</title>
    <!-- Tambahkan link ke Tailwind CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-lg fixed w-full top-0 left-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <!-- Logo -->
                    <div>
                        <a href="/" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 3a3 3 0 00-3 3v8a3 3 0 003 3h10a3 3 0 003-3V6a3 3 0 00-3-3H5zm8 7a1 1 0 00-1-1H8a1 1 0 100 2h4a1 1 0 001-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="font-bold text-xl">OnlineStore</span>
                        </a>
                    </div>

                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Categories</a>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <!-- Cart Icon -->
                    <div>
                        <a href="/cart" class="relative flex items-center text-gray-700 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 5.36A1 1 0 007 20h10a1 1 0 00.97-.76L20 13H7z" />
                            </svg>
                            <span
                                class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded-full">3</span>
                        </a>
                    </div>

                    <!-- Search Icon for Mobile -->
                    <div class="md:hidden">
                        <button id="searchIcon" class="flex items-center text-gray-700 hover:text-gray-900">
                            <i class="fas fa-search fa-lg"></i>
                        </button>
                    </div>

                    <!-- Search Box -->
                    <div class="hidden md:flex relative">
                        <input type="text" placeholder="Search..."
                            class="px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 transition-all duration-300 w-60 hover:w-96 focus:w-96"
                            id="searchBox">
                    </div>

                    <!-- Authentication Links -->
                    <div class="relative">
                        @auth
                            <button class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 focus:outline-none focus:text-gray-900" id="userMenuButton">
                                <span>{{ Auth::user()->name }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- Dropdown Menu -->
                            <div class="absolute right-0 mt-2 w-48 bg-white shadow-md rounded-lg py-2 hidden" id="userDropdown">
                                <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Profile</a>
                                <form action="{{ route('logout') }}" method="POST" class="block px-4 py-2">
                                    @csrf
                                    <button type="submit" class="w-full text-left text-gray-700 hover:bg-gray-200">Logout</button>
                                </form>
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="py-5 px-3">Login</a>
                            <a href="{{ route('register') }}" class="py-2 px-3 bg-blue-500 text-white rounded hover:bg-blue-700">Sign Up</a>
                        @endauth
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button class="mobile-menu-button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu hidden md:hidden">
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Categories</a>
            @auth
                <a href="{{ route('home') }}" class="block py-2 px-4 text-sm hover:bg-gray-200">Profile</a>
                <form action="{{ route('logout') }}" method="POST" class="block py-2 px-4">
                    @csrf
                    <button type="submit" class="w-full text-left text-sm hover:bg-gray-200">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="block py-2 px-4 text-sm hover:bg-gray-200">Login</a>
                <a href="{{ route('register') }}"
                    class="block py-2 px-4 text-sm bg-blue-500 text-white hover:bg-blue-700">Sign Up</a>
            @endauth
        </div>
    </nav>


    <!-- Content -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    <!-- Footer -->
    {{-- <footer class="bg-gray-800 py-4 text-center text-white">
        <p>&copy; 2024 My Application. All rights reserved.</p>
    </footer> --}}

    <script>
        const userMenuButton = document.getElementById('userMenuButton');
        const userDropdown = document.getElementById('userDropdown');

        userMenuButton.addEventListener('click', () => {
            userDropdown.classList.toggle('hidden');
        });

        // Menutup dropdown jika klik di luar
        window.addEventListener('click', (event) => {
            if (!userMenuButton.contains(event.target) && !userDropdown.contains(event.target)) {
                userDropdown.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
