@extends('template')

@section('ataskelompok5')
    @include('navbar')
@endsection

@section('tengahkelompok5')
<div class="pt-24 pb-12 bg-gray-50 min-h-screen">
    <div class="max-w-2xl mx-auto bg-white p-8 shadow-lg rounded-xl">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Formulir Pembayaran</h2>

        <form method="POST" action="/form624" class="space-y-5">
            @csrf

            <div>
                <label class="block font-medium text-gray-700 mb-1">Nama</label>
                <input type="text" name="626_nama" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Nomor Kartu</label>
                <input type="tel" name="626_kartu" inputmode="numeric" pattern="[0-9\s]{10,19}"
                    autocomplete="cc-number" maxlength="19" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Jenis Pembayaran</label>
                <select name="626_pembayaran" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="">-- Pembayaran --</option>
                    <option value="Cash">Cash</option>
                    <option value="Non-Tunai">Non-Tunai</option>
                </select>
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Total Bayar</label>
                <input type="number" name="626_jumlahbayar" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Tanggal Bayar</label>
                <input type="date" name="626_tanggalbayar" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">Kirim</button>
            </div>
        </form>
    </div>

    @if (isset($data))
        <div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg">
            <h3 class="text-xl font-semibold mb-4 text-gray-800">Data Pembayaran</h3>
            <p><strong>Nama:</strong> {{ $data['626_nama'] ?? '' }}</p>
            <p><strong>Kartu:</strong> {{ $data['626_kartu'] ?? '' }}</p>
            <p><strong>Pembayaran:</strong> {{ $data['626_pembayaran'] ?? '' }}</p>
            <p><strong>Total Bayar:</strong> {{ $data['626_jumlahbayar'] ?? '' }}</p>
            <p><strong>Tanggal Bayar:</strong> {{ $data['626_tanggalbayar'] ?? '' }}</p>
        </div>
    @endif
</div>
@endsection

@section('bawahkelompok5')
    @include('footer')
@endsection
