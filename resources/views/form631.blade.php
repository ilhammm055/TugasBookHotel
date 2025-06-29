@extends('template')

@section('ataskelompok5')
    @include('navbar')
@endsection

@section('tengahkelompok5')
<div class="pt-24 pb-12 bg-gray-50 min-h-screen">
    <div class="max-w-2xl mx-auto bg-white p-8 shadow-lg rounded-xl">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Formulir Penyewa Hotel</h2>

        <form method="POST" action="/form631" class="space-y-5">
            @csrf

            <div>
                <label for="nama" class="block font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="nama" name="631_nama" required
                    class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>

            <div>
                <label for="umur" class="block font-medium text-gray-700">Umur</label>
                <input type="number" id="umur" name="631_umur" required
                    class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>

            <div>
                <label for="alamat" class="block font-medium text-gray-700">Alamat</label>
                <input type="text" id="alamat" name="631_alamat" required
                    class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>

            <div>
                <label for="telepon" class="block font-medium text-gray-700">Nomor Telepon</label>
                <input type="text" name="631_nomor" required
                    class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>

            <div>
                <label class="block font-medium text-gray-700">Identitas Diri</label>
                <select name="631_identitas" required
                    class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    <option value="">-- Pilih Identitas --</option>
                    <option value="KTP">KTP</option>
                    <option value="SIM">SIM</option>
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
            <h3 class="text-xl font-semibold mb-4 text-gray-800">Data Penyewa</h3>
            <p><strong>Nama:</strong> {{ $data['631_nama'] ?? '' }}</p>
            <p><strong>Umur:</strong> {{ $data['631_umur'] ?? '' }}</p>
            <p><strong>Alamat:</strong> {{ $data['631_alamat'] ?? '' }}</p>
            <p><strong>Nomor:</strong> {{ $data['631_nomor'] ?? '' }}</p>
            <p><strong>Identitas:</strong> {{ $data['631_identitas'] ?? '' }}</p>
        </div>
    @endif
</div>
@endsection

@section('bawahkelompok5')
    @include('footer')
@endsection
