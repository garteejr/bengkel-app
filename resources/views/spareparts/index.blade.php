@extends('layouts.app')

@section('title', 'Sparepart')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>
        <h1 class="text-2xl font-bold">Data Sparepart</h1>
        <p class="text-gray-500 text-sm">Kelola stok dan harga sparepart bengkel</p>
    </div>

    <button onclick="document.getElementById('modal').classList.remove('hidden')"
        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        + Tambah Sparepart
    </button>

</div>

<!-- TABLE -->
<div class="bg-white rounded shadow overflow-hidden">

    <table class="w-full text-sm">

        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">Nama Sparepart</th>
                <th class="p-3 text-left">Harga</th>
                <th class="p-3 text-left">Stok</th>
                <th class="p-3 text-left">Status</th>
                <th class="p-3 text-left">Aksi</th>
            </tr>
        </thead>

        <tbody>

            <tr class="border-t">

                <td class="p-3">Oli Mesin</td>
                <td class="p-3">50.000</td>
                <td class="p-3">25</td>

                <td class="p-3">
                    <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                        Aman
                    </span>
                </td>

                <td class="p-3 flex gap-2">
                    <button class="text-blue-600">Edit</button>
                    <button class="text-red-600">Hapus</button>
                </td>

            </tr>

            <tr class="border-t">

                <td class="p-3">Kampas Rem</td>
                <td class="p-3">75.000</td>
                <td class="p-3">5</td>

                <td class="p-3">
                    <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">
                        Menipis
                    </span>
                </td>

                <td class="p-3 flex gap-2">
                    <button class="text-blue-600">Edit</button>
                    <button class="text-red-600">Hapus</button>
                </td>

            </tr>

            <tr class="border-t">

                <td class="p-3">Busi</td>
                <td class="p-3">30.000</td>
                <td class="p-3">0</td>

                <td class="p-3">
                    <span class="px-3 py-1 text-xs rounded-full bg-red-100 text-red-700">
                        Habis
                    </span>
                </td>

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
            <h2 class="text-lg font-bold">Tambah Sparepart</h2>

            <button onclick="document.getElementById('modal').classList.add('hidden')">
                ✕
            </button>
        </div>

        <form class="space-y-3">

            <input type="text" placeholder="Nama Sparepart"
                class="w-full border p-2 rounded">

            <input type="number" placeholder="Harga"
                class="w-full border p-2 rounded">

            <input type="number" placeholder="Stok"
                class="w-full border p-2 rounded">

            <button class="bg-blue-600 text-white w-full py-2 rounded">
                Simpan
            </button>

        </form>

    </div>

</div>

@endsection