@extends('layouts.app')

@section('title', 'Servis')

@section('content')

<!-- HEADER -->
<div class="flex justify-between items-center mb-6">

    <div>
        <h1 class="text-2xl font-bold">Data Servis</h1>
        <p class="text-gray-500 text-sm">Transaksi servis bengkel</p>
    </div>

    <button onclick="document.getElementById('modal').classList.remove('hidden')"
        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        + Tambah Servis
    </button>

</div>

<!-- FILTER -->
<div class="flex gap-2 mb-4 flex-wrap">

    <button class="px-3 py-1 rounded bg-gray-100 hover:bg-gray-200">
        Semua
    </button>

    <button class="px-3 py-1 rounded bg-yellow-100 text-yellow-700">
        Menunggu
    </button>

    <button class="px-3 py-1 rounded bg-blue-100 text-blue-700">
        Proses
    </button>

    <button class="px-3 py-1 rounded bg-green-100 text-green-700">
        Selesai
    </button>

</div>

<!-- TABLE -->
<div class="bg-white rounded shadow overflow-hidden">

    <div class="overflow-x-auto">

        <table class="w-full text-sm min-w-[800px]">

            <thead class="bg-gray-100 text-gray-700 text-xs uppercase tracking-wider">
                <tr>
                    <th class="p-3 text-left">Kode</th>
                    <th class="p-3 text-left">Pelanggan</th>
                    <th class="p-3 text-left">Kendaraan</th>
                    <th class="p-3 text-left">Keluhan</th>
                    <th class="p-3 text-left">Status</th>
                    <th class="p-3 text-left">Aksi</th>
                </tr>
            </thead>

            <tbody>

                <tr class="border-t hover:bg-gray-50 transition">

                    <td class="p-3">SRV-001</td>
                    <td class="p-3">Budi</td>
                    <td class="p-3">Honda Beat</td>
                    <td class="p-3">Ganti oli</td>

                    <td class="p-3">
                        <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">
                            Menunggu
                        </span>
                    </td>

                    <td class="p-3 flex gap-2">
                        <button class="text-blue-600 hover:text-blue-800 font-medium">
                            Edit
                        </button>

                        <button class="text-red-600 hover:text-red-800 font-medium">
                            Hapus
                        </button>
                    </td>

                </tr>

                <tr class="border-t hover:bg-gray-50 transition">

                    <td class="p-3">SRV-002</td>
                    <td class="p-3">Andi</td>
                    <td class="p-3">NMAX</td>
                    <td class="p-3">Rem bunyi</td>

                    <td class="p-3">
                        <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-700">
                            Proses
                        </span>
                    </td>

                    <td class="p-3 flex gap-2">
                        <button class="text-blue-600 hover:text-blue-800 font-medium">
                            Edit
                        </button>

                        <button class="text-red-600 hover:text-red-800 font-medium">
                            Hapus
                        </button>
                    </td>

                </tr>

                <tr class="border-t hover:bg-gray-50 transition">

                    <td class="p-3">SRV-003</td>
                    <td class="p-3">Rina</td>
                    <td class="p-3">Vario</td>
                    <td class="p-3">Service rutin</td>

                    <td class="p-3">
                        <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                            Selesai
                        </span>
                    </td>

                    <td class="p-3 flex gap-2">
                        <button class="text-blue-600 hover:text-blue-800 font-medium">
                            Edit
                        </button>

                        <button class="text-red-600 hover:text-red-800 font-medium">
                            Hapus
                        </button>
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

<!-- PAGINATION -->
<div class="flex justify-between items-center mt-4 text-sm flex-wrap gap-2">

    <p class="text-gray-500">
        Menampilkan 1 - 10 dari 50 data
    </p>

    <div class="flex gap-1">

        <button class="px-3 py-1 border rounded hover:bg-gray-100">
            Prev
        </button>

        <button class="px-3 py-1 border rounded bg-blue-600 text-white">
            1
        </button>

        <button class="px-3 py-1 border rounded hover:bg-gray-100">
            2
        </button>

        <button class="px-3 py-1 border rounded hover:bg-gray-100">
            3
        </button>

        <button class="px-3 py-1 border rounded hover:bg-gray-100">
            Next
        </button>

    </div>

</div>

<!-- MODAL -->
<div id="modal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center p-4">

    <div class="bg-white w-full max-w-lg p-6 rounded">

        <div class="flex justify-between mb-4">

            <h2 class="text-lg font-bold">Tambah Servis</h2>

            <button onclick="document.getElementById('modal').classList.add('hidden')">
                ✕
            </button>

        </div>

        <form class="space-y-3">

            <select class="w-full border p-2 rounded">
                <option>Pilih Pelanggan</option>
                <option>Budi</option>
                <option>Andi</option>
            </select>

            <select class="w-full border p-2 rounded">
                <option>Pilih Kendaraan</option>
                <option>Beat - H 1234 AB</option>
                <option>NMAX - H 5678 CD</option>
            </select>

            <input type="text" placeholder="Keluhan"
                class="w-full border p-2 rounded">

            <select class="w-full border p-2 rounded">
                <option>Status</option>
                <option>Menunggu</option>
                <option>Proses</option>
                <option>Selesai</option>
            </select>

            <button class="bg-blue-600 text-white w-full py-2 rounded hover:bg-blue-700">
                Simpan
            </button>

        </form>

    </div>

</div>

@endsection