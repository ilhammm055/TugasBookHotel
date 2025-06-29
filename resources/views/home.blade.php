@extends('template')

@section('ataskelompok5')
    @include('navbar')
@endsection

@section('tengahkelompok5')

<!-- HERO SECTION -->
<section class="min-h-screen flex items-center justify-center bg-gray-50 px-6 py-16">
    <div class="max-w-6xl mx-auto flex flex-col-reverse md:flex-row items-center gap-12">
        <!-- Teks -->
        <div class="md:w-1/2 text-center md:text-left space-y-6">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 leading-tight">
                Selamat Datang di <span class="text-blue-600">Sistem Booking Hotel</span>
            </h1>
            <p class="text-gray-600 text-lg">
                Pesan kamar hotel favorit Anda dengan mudah, cepat, dan aman. Tersedia berbagai pilihan kamar sesuai kebutuhan Anda.
            </p>
            <a href="{{ url('form631') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow mt-4 inline-block">
                Pesan Sekarang
            </a>
        </div>

        <!-- Gambar -->
     <div class="hidden md:block absolute right-0 top-1/2 -translate-y-1/2">
      <img src="{{ asset('images/alila.jpg') }}"
           class="h-[30rem] object-contain rounded-l-full shadow-2xlz"
           alt="Alila">
    </div>

    </div>
</section>

<!-- ABOUT SECTION -->
<section class="bg-white py-16 text-center px-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Tentang Kami</h2>
    <p class="text-gray-600 max-w-2xl mx-auto">
        Kami menyediakan layanan pemesanan hotel secara online dengan pengalaman terbaik. Temukan kenyamanan dan
        kemudahan dalam satu sistem.
    </p>
</section>

<!-- FITUR LAYANAN -->
<section class="bg-gray-100 py-16 px-6">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        <!-- Fitur 1 -->
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <i class="bi bi-calendar-check text-blue-600 text-5xl mb-4"></i>
            <h5 class="text-xl font-semibold mb-2">Booking Mudah</h5>
            <p class="text-gray-600">Hanya beberapa klik untuk memesan kamar pilihan Anda.</p>
        </div>

        <!-- Fitur 2 -->
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <i class="bi bi-wallet2 text-green-600 text-5xl mb-4"></i>
            <h5 class="text-xl font-semibold mb-2">Harga Terbaik</h5>
            <p class="text-gray-600">Dapatkan harga spesial dan promo menarik setiap minggu.</p>
        </div>

        <!-- Fitur 3 -->
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <i class="bi bi-shield-lock text-yellow-500 text-5xl mb-4"></i>
            <h5 class="text-xl font-semibold mb-2">Transaksi Aman</h5>
            <p class="text-gray-600">Jaminan keamanan data dan pembayaran Anda bersama kami.</p>
        </div>
    </div>
</section>

@endsection

@section('bawahkelompok5')
    @include('footer')
@endsection