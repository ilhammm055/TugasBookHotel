<!-- resources/views/navbar.blade.php -->

<nav class="bg-white shadow-md w-full fixed top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
        <!-- Logo / Brand -->
        <a href="#" class="text-xl font-bold text-gray-800">Sistem Booking Hotel</a>

        <!-- Menu Toggle (Mobile) -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Menu Items -->
        <div id="menu" class="hidden md:flex space-x-6">
            <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
            <a href="{{ url('form631') }}" class="text-gray-700 hover:text-blue-600 font-medium">Form 631</a>
            <a href="{{ url('form634') }}" class="text-gray-700 hover:text-blue-600 font-medium">Form 634</a>
            <a href="{{ url('form638') }}" class="text-gray-700 hover:text-blue-600 font-medium">Form 638</a>
            <a href="{{ url('form624') }}" class="text-gray-700 hover:text-blue-600 font-medium">Form 624</a>
        </div>
    </div>

    <!-- Responsive Menu (Dropdown) -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-2">
        <a href="{{ url('/') }}" class="block text-gray-700 hover:text-blue-600 font-medium">Home</a>
        <a href="{{ url('form631') }}" class="block text-gray-700 hover:text-blue-600 font-medium">Form 631</a>
        <a href="{{ url('form634') }}" class="block text-gray-700 hover:text-blue-600 font-medium">Form 634</a>
        <a href="{{ url('form638') }}" class="block text-gray-700 hover:text-blue-600 font-medium">Form 638</a>
        <a href="{{ url('form624') }}" class="block text-gray-700 hover:text-blue-600 font-medium">Form 624</a>
    </div>
</nav>

<script>
    // Toggle mobile menu
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');

        toggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    });
</script>
