@extends('template')

@section('ataskelompok5')
    @include('navbar')
@endsection

@section('tengahkelompok5')
<div class="pt-24 pb-12 bg-gray-50 min-h-screen">
    <div class="max-w-2xl mx-auto bg-white p-8 shadow-lg rounded-xl">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Formulir Pemesanan Kamar</h2>

        <form method="POST" action="/form634" class="space-y-5">
            @csrf

            <div>
                <label class="block text-gray-700 font-medium mb-2">Tipe Kamar</label>
                <select name="634_tipekamar" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">-- Tipe Kamar --</option>
                    <option value="Bronze">Bronze</option>
                    <option value="Silver">Silver</option>
                    <option value="Gold">Gold</option>
                    <option value="Platinum">Platinum</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Jumlah Kamar</label>
                <input type="number" name="634_jumlahkamar" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Check-in</label>
                <input type="date" name="634_checkin" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Check-out</label>
                <input type="date" name="634_checkout" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Pembayaran</label>
                <select name="634_pembayaran" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">-- Pembayaran --</option>
                    <option value="Cash">Cash</option>
                    <option value="Non-Tunai">Non-Tunai</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Kirim</button>
            </div>
        </form>
    </div>

    @if (isset($data))
    <div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg">
        <h3 class="text-xl font-semibold mb-4 text-gray-800">Data Pemesanan</h3>
        <p><strong>Tipe:</strong> {{ $data['634_tipekamar'] ?? '' }}</p>
        <p><strong>Jumlah Kamar:</strong> {{ $data['634_jumlahkamar'] ?? '' }}</p>
        <p><strong>Check-in:</strong> {{ $data['634_checkin'] ?? '' }}</p>
        <p><strong>Check-out:</strong> {{ $data['634_checkout'] ?? '' }}</p>
        <p><strong>Pembayaran:</strong> {{ $data['634_pembayaran'] ?? '' }}</p>
    </div>
    @endif
</div>
@endsection

@section('bawahkelompok5')
    @include('footer')
@endsection
