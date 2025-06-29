@extends('template')

@section('ataskelompok5')
    @include('navbar')
@endsection

@section('tengahkelompok5')
<div class="pt-24 pb-12 bg-gray-50 min-h-screen">
    <div class="max-w-2xl mx-auto bg-white p-8 shadow-lg rounded-xl">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Formulir Data Tamu</h2>

        <form method="POST" action="/form638" class="space-y-5">
            @csrf

            <div>
                <label class="block font-medium text-gray-700 mb-1">Nama Tamu</label>
                <input type="text" name="638_namatamu" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Umur Tamu</label>
                <input type="number" name="638_umurtamu" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Hubungan dengan Pemesan</label>
                <select name="638_hubungan" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="">-- Hubungan Dengan Pemesan --</option>
                    <option value="Teman">Teman</option>
                    <option value="Saudara / Kerabat">Saudara / Kerabat</option>
                    <option value="Rekan Kerja">Rekan Kerja</option>
                </select>
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                <select name="638_kelamin" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="">-- Jenis Kelamin --</option>
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-1">Identitas Diri</label>
                <select name="638_identitas" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="">-- Pilih Identitas --</option>
                    <option value="KTP">KTP</option>
                    <option value="SIM">SIM</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">Kirim</button>
            </div>
        </form>
    </div>

    @if (isset($data))
        <div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg">
            <h3 class="text-xl font-semibold mb-4 text-gray-800">Data Tamu</h3>
            <p><strong>Nama Tamu:</strong> {{ $data['638_namatamu'] ?? '' }}</p>
            <p><strong>Umur Tamu:</strong> {{ $data['638_umurtamu'] ?? '' }}</p>
            <p><strong>Hubungan:</strong> {{ $data['638_hubungan'] ?? '' }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $data['638_kelamin'] ?? '' }}</p>
            <p><strong>Identitas:</strong> {{ $data['638_identitas'] ?? '' }}</p>
        </div>
    @endif
</div>
@endsection

@section('bawahkelompok5')
    @include('footer')
@endsection
