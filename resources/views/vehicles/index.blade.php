@extends('layouts.app')

@section('title', 'Kendaraan')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>
        <h1 class="text-2xl font-bold">Data Kendaraan</h1>
        <p class="text-gray-500 text-sm">Kelola kendaraan pelanggan bengkel</p>
    </div>

    <button onclick="document.getElementById('modal').classList.remove('hidden')"
        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        + Tambah Kendaraan
    </button>

</div>

<!-- TABLE -->
<div class="bg-white rounded shadow overflow-hidden">

    <table class="w-full text-sm">

        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">Pemilik</th>
                <th class="p-3 text-left">No Plat</th>
                <th class="p-3 text-left">Merk</th>
                <th class="p-3 text-left">Tipe</th>
                <th class="p-3 text-left">Tahun</th>
                <th class="p-3 text-left">Aksi</th>
            </tr>
        </thead>

        <tbody>

            <tr class="border-t">
                <td class="p-3">Budi Santoso</td>
                <td class="p-3">H 1234 AB</td>
                <td class="p-3">Honda</td>
                <td class="p-3">Beat</td>
                <td class="p-3">2020</td>
                <td class="p-3 flex gap-2">

                    <button class="text-blue-600">Edit</button>
                    <button class="text-red-600">Hapus</button>

                </td>
            </tr>

        </tbody>

    </table>

</div>

<!-- MODAL -->
<div id="modal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center">

    <div class="bg-white w-[450px] p-6 rounded">

        <div class="flex justify-between mb-4">
            <h2 class="text-lg font-bold">Tambah Kendaraan</h2>

            <button onclick="document.getElementById('modal').classList.add('hidden')">
                ✕
            </button>
        </div>

        <form class="space-y-3">

            <!-- DROPDOWN PELANGGAN (RELASI) -->
            <select class="w-full border p-2 rounded">
                <option>Pilih Pemilik (Pelanggan)</option>
                <option>Budi Santoso</option>
                <option>Andi Pratama</option>
            </select>

            <input type="text" placeholder="No Plat"
                class="w-full border p-2 rounded">

            <input type="text" placeholder="Merk"
                class="w-full border p-2 rounded">

            <input type="text" placeholder="Tipe"
                class="w-full border p-2 rounded">

            <input type="number" placeholder="Tahun"
                class="w-full border p-2 rounded">

            <button class="bg-blue-600 text-white w-full py-2 rounded">
                Simpan
            </button>

        </form>

    </div>

</div>

@endsection